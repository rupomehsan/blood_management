<?php
 include('includes/header.php');
  session::checksession();
 include('includes/sidebar.php');
 spl_autoload_register(function($class){
     include "classes/".$class.".php";
 });
?>
<?php 

$user= new student();

?> 

<!--<div class="row register-form"style="margin-left:20%;padding-top:10%;margin-bottom:20px;">-->
<!--<div class="overflow">-->
<!--<h4><i class="fa fa-angle-right"></i>update user data</h4><hr><table class="table table-striped table-advance table-hover"> -->
<div class=" register view-doner" style="padding-top: 7%;margin-left: 17%;">
                <div class="row container">
            
                    <button><a href="all-doner.php">ALL BLOOD DONER</a></button>
                     <h4><i class="fa fa-angle-right"></i>UPDATE BLOOD DONER</h4><hr><table class="table table-striped table-advance table-hover">
<?php  

 if (isset($_POST ['update'])) {
      $id=$_POST ['id'];
      $name=$_POST ['name'];
      $email=$_POST ['email'];
      $phone=$_POST ['phone'];
      $address=$_POST ['address'];
      $social=$_POST ['social'];
      $blood=$_POST ['blood'];
      $division=$_POST['division'];
      $status=$_POST['status'];
      $gender=$_POST['gender'];
      $image=$_FILES ['image']['name'];
      $tempname=$_FILES['image']['tmp_name'];
      $folder='uploads/';
      move_uploaded_file($tempname,$folder.$image);
      $user->setName($name);
      $user->setEmail($email);
      $user->setPhone($phone);
      $user->setAddress($address);
      $user->setSocial($social);
      $user->setblood($blood);
      $user->setdivision($division);
      $user->setstatus($status);
      $user->setgender($gender);
      $user->setimage($image);
      if ($user->update($id)) {
          echo "<span style='color:green;font-size:20px;margin-left:10%;margin-top:10%;'>update successfully done </span>";
      }

  }

if (isset($_GET ['action']) && $_GET ['action'] == 'update') {
     $id=(int)$_GET ['id'];
    $result=$user->readbyid($id);

 }


?>
 
  <form action="" method="post" enctype="multipart/form-data">
      <div class="col-md-6">

          <input type="hidden" class="form-control" name="id"  value="<?php echo $result['user_id'];?>" />
          <div class="form-group">
              <h5 style="padding-bottom: 10px;">name: <span style="color:red;">*</span></h5>
              <input type="text" class="form-control" name="name"  value="<?php echo $result['user_name'];?>" />
          </div>
          <div class="form-group">
              <h5 style="padding-bottom: 10px;">email: <span style="color:red;">*</span></h5>
              <input type="email" class="form-control" name="email" value="<?php echo $result['user_email'];?>"  />
          </div>
           <div class="form-group">
              <h5 style="padding-bottom: 10px;">Address: <span style="color:red;">*</span></h5>
              <input type="text" class="form-control" name="address" value="<?php echo $result['user_address'];?>" />
          </div>


          <div class="form-group">
               <h5 style="padding-bottom: 10px;">Blood Group : <span style="color:red;">*</span></h5>
               <select class="form-control" name="blood" required>  
                  <option class="" value="">Blood group</option>
                   <?php
                   foreach ($user->readuser('user_bloodgroup') as $key => $value) { 
                    ?>
                  <option value="<?php echo   $value['user_bloodgp']?>" <?php if(isset( $result['user_blood']) and ( $result['user_blood']==$value['user_bloodgp'])) echo 'selected' ?> ><?php echo $value['user_bloodgp']?></option>
                   <?php }  ?>
              </select>
          </div>


        <h5 style="padding-bottom: 10px;">social <span style="color:red;">*</span></h5>
            <div class="form-group">
              <input type="text" class="form-control" name="social" value="<?php echo $result['user_social'];?>"/>
          </div>

          <div class="form-group">
              <h5 style="padding-bottom: 10px;">Divsion: <span style="color:red;">*</span></h5>
              <input type="text" minlength="11" maxlength="11" name="phone" class="form-control"  value="<?php echo $result['user_phone'];?>" />
          </div>

           <div class="form-group">

             <h5 style="padding-bottom: 10px;">Divsion: <span style="color:red;">*</span></h5>
               <select class="form-control" name="division" required>  
                  <option class="" value="">Division</option>
                   <?php
                   foreach ($user->readuser('user_division') as $key => $value) { 
                    ?>
                  <option value="<?php echo   $value['user_division']?>" <?php if(isset($result['user_division']) and ($result['user_division']==$value['user_division'])) echo 'selected' ?> ><?php echo $value['user_division']?></option>

                   <?php }  ?>
              </select>

          </div>


            <div class="form-group" style="padding-left: 10px;border:1px solid black;">
                    <h5>Are you donate before?</h5>
                      <div class="maxl">
                        <div class="col-md-6">
                            <label class="radio inline">
                                <input type="radio" name="status" value="YES" checked>
                                <span> YES </span>
                            </label>
                          </div>
                          <div class="col-md-6">
                          <label class="radio inline">
                              <input type="radio" name="status" value="NO">
                              <span>NO </span>
                          </label>
                           </div>
                      </div>
                </div>
          <div class="form-group" style="padding-left: 10px;">
            <h5>Gender : -</h5>
              <div class="maxl">
                <div class="col-md-6">
                    <label class="radio inline">
                        <input type="radio" name="gender" value="Male" checked>
                        <span> Male </span>
                    </label>
                  </div>
                  <div class="col-md-6">
                  <label class="radio inline">
                      <input type="radio" name="gender" value="Female">
                      <span>Female </span>
                  </label>
                   </div>
              </div>
          </div>

           <div class="custom-file">
            <h5 style="padding-bottom: 10px;">Image</h5>
            <input type="file" class="custom-file-input" id="customFile" name="image">
            <label class="custom-file-label" for="customFile"></label>
          </div>

            <input type="submit" class="btnRegister" name="update" value="update"/>
      </div>

      <div class="col-md-6">
      

      </div>
     
    </form>
      </div>
</div>









<?php
include('includes/footer.php');
?>
