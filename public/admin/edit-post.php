<?php
 include('includes/header.php');
  session::checksession();
 include('includes/sidebar.php');
 spl_autoload_register(function($class){
     include "classes/".$class.".php";
 });
?>

<?php 

$user= new blog();
if (isset($_GET ['action']) && $_GET ['action'] == 'update') {
     $id=(int)$_GET ['id'];
    $result=$user->readbyid($id);

 }
date_default_timezone_set('Asia/dhaka');
$datetime= date("Y/m/d H:i:s");

?>

<div class=" register view-doner" style="padding-top: 7%;margin-left: 17%;">
                <div class="row container">
            
                    <button><a href="allblog.php">SEE ALL  POST</a></button>
                     <h4><i class="fa fa-angle-right"></i>UPDATE POST</h4><hr><table class="table table-striped table-advance table-hover">
    <?php  

 if (isset($_POST ['update'])) {
              $title=$_POST ['title'];
              $subtitle=$_POST ['subtitle'];
              $description=$_POST ['description'];
              $image=$_FILES ['image']['name'];
              $tempname=$_FILES['image']['tmp_name'];
              $folder='uploads/';
              move_uploaded_file($tempname,$folder.$image);          

              $user->settitle($title);
              $user->setsubtitle($subtitle);
              $user->setdescription($description);
              $user->setimage($image);
                    

      if ($user->updatepost($id)) {
          echo "<span style='color:green;font-size:20px;margin-left:10%;margin-top:10%;'>update successfully done </span>";
      }

  }


?>
  
  <form action="" method="post" enctype="multipart/form-data">
      <div class="col-md-10">

          <input type="hidden" class="form-control" name="id"  value="<?php echo $result['blog_id'];?>" />
          <div class="form-group">
             <label for="exampleFormControlTextarea1">title</label>
              <input type="text" class="form-control" name="title"  value="<?php echo $result['blog_title'];?>" />
          </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">subtitle</label>
              <input type="text" class="form-control" name="subtitle"  value="<?php echo $result['blog_subtitle'];?>"  />
          </div>
         <div class="form-group">
		    <label for="exampleFormControlTextarea1">Descripsion</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="5"/> <?php echo $result['blog_des'];?></textarea>
		  </div>
           <div class="custom-file">
               <img src="uploads/<?php echo $result['blog_image'];?>" height="50" width="100">
            <h5 style="padding-bottom: 10px;">Image</h5>
            <input type="file" class="custom-file-input" id="customFile" name="image">
            <label class="custom-file-label" for="customFile"></label>
          </div>

            <input type="submit" class="btnRegister" name="update" value="update"/>
      </div>

     
     
    </form>
      </div>
</div>






<?php
include('includes/footer.php');
?>
