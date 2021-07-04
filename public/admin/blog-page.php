<?php
 include('includes/header.php');
  session::checksession();
 include('includes/sidebar.php');
?>

 

<!--<div class="row register-form blog-page"style="margin-left:20%;padding-top:10%;margin-bottom:20px;">-->
<!--  <div class="overflow">-->
<!--      <button type="btn btn-primary"><a href="allblog.php" title="">See all blogs</a></button>-->
<!--  <h4><i class="fa fa-angle-right"></i>blog post</h4><hr><table class="table table-striped table-advance table-hover">-->
      
      
      
 <div class=" register view-doner" style="padding-top: 7%;margin-left: 17%;">
                <div class="row container">
            
                    <button><a href="allblog.php">See all blogs</a></button>
                     <h4><i class="fa fa-angle-right"></i>CREATE A POST</h4><hr><table class="table table-striped table-advance table-hover">  
                     
                     
                     
                     
                     
           <?php
            date_default_timezone_set('Asia/dhaka');
            $datetime= date("Y/m/d H:i:s") ;
            $user= new blog();

                if (isset($_POST ['submit'])) {
                    $date=$datetime;
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
                    $user->setdate($date);
                    


                    if ($user->blogpost()) {
                        echo "<span class='scs-msg'style='color:green;font-size:20px;margin-left:10%;text-transform:uppercase;'>post successfulyy send </span>";
                    }

                }

            ?>
  <form action="" method="post" enctype="multipart/form-data">
      <div class="col-md-10">
          <input type="hidden" class="form-control" name="id"  value="" />
          <div class="form-group">
              <input type="text" class="form-control" name="title" placeholder="title" value="" />
          </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subtitle" placeholder="sub-title" value=""  />
          </div>
         <div class="form-group">
		    <label for="exampleFormControlTextarea1">Descripsion</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
		  </div>
           <div class="custom-file">
            <h5 style="padding-bottom: 10px;">Image</h5>
            <input type="file" class="custom-file-input" id="customFile" name="image">
            <label class="custom-file-label" for="customFile"></label>
          </div>

            <input type="submit" class="btnRegister" name="submit" value="CREATE"/>
      </div>

     
     
    </form>
      </div>
</div>






<?php
include('includes/footer.php');
?>
