<?php
 include('includes/header.php');
  session::checksession();
 include('includes/sidebar.php');
?>

 

<div class="row register-form blog-page"style="margin-left:17%;padding-top:7%;margin-bottom:20px;">
  <div class="overflow">
      <button type="btn btn-primary"><a href="all-pages.php" title="">See all pages</a></button>
  <h4><i class="fa fa-angle-right"></i>ADD a new page</h4><hr><table class="table table-striped table-advance table-hover">
   
           <?php
            date_default_timezone_set('Asia/dhaka');
            $datetime= date("Y/m/d H:i:s") ;
            $user= new blog();

                if (isset($_POST ['submit'])) {
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
                  
                    if ($user->addpage('page_table')) {
                        echo "<span class='scs-msg'style='color:green;font-size:20px;margin-left:10%;text-transform:uppercase;'>page successfulyy create </span>";
                    }

                }

            ?>
  <form action="" method="post" enctype="multipart/form-data">
      <div class="col-md-10">
          <input type="hidden" class="form-control" name="page_id"  value="" />
          <div class="form-group">
              <input type="text" class="form-control" name="pagename" placeholder="Page name" value="" />
          </div>
         <div class="form-group">
		    <label for="exampleFormControlTextarea1">Descripsion</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" name="pagedesc" rows="3"></textarea>
		  </div>
           <div class="custom-file">
            <h5 style="padding-bottom: 10px;">Image</h5>
            <input type="file" class="custom-file-input" id="customFile" name="image">
            <label class="custom-file-label" for="customFile"></label>
          </div>

            <input type="submit" class="btnRegister" name="submit" value="create"/>
      </div>

     
     
    </form>
      </div>
</div>






<?php
include('includes/footer.php');
?>
