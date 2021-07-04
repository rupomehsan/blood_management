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
    $result=$user->readbypageid('page_table',$id);

 }



?>


<div class=" register view-doner" style="padding-top: 7%;margin-left: 17%;">
                <div class="row container">
            
                    <button><a href="all-pages.php">SEE ALL  PAGES</a></button>
                     <h4><i class="fa fa-angle-right"></i>UPDATE PAGE</h4><hr><table class="table table-striped table-advance table-hover">

    <?php  


            date_default_timezone_set('Asia/dhaka');
            $datetime= date("Y/m/d H:i:s") ;

                if (isset($_POST ['update'])) {
                    $date=$datetime;
                    $pagename=$_POST ['pagename'];
                    $pagedesc=$_POST ['pagedesc'];
                    $image=$_FILES ['image']['name'];
                    $tempname=$_FILES['image']['tmp_name'];
                    $folder='uploads/';
                    move_uploaded_file($tempname,$folder.$image);
                    $user->setpagename($pagename);
                    $user->setpagedesc($pagedesc);
                    $user->setimage($image);
                    $user->setdate($date);
                  
                    if ($user->updatepage('page_table',$id)) {
                        echo "<span class='scs-msg'style='color:green;font-size:20px;margin-left:10%;text-transform:uppercase;'>page successfulyy update </span>";
                    }

                }


?>
  
  <form action="" method="post" enctype="multipart/form-data">
      <div class="col-md-10">
          <input type="hidden" class="form-control" name="page_id"  value="" />
          <div class="form-group">
              <input type="text" class="form-control" name="pagename"  value="<?php echo $result['page_name'];?>" />
          </div>
         <div class="form-group">
        <label for="exampleFormControlTextarea1">Descripsion</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="pagedesc" rows="10"><?php echo $result['page_desc'];?></textarea>
      </div>
           <div class="custom-file">
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
