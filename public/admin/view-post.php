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
if (isset($_GET ['action']) && $_GET ['action'] == 'view') {
     $id=(int)$_GET ['id'];
    $result=$user->readbyid($id);
 }
?>



<div class=" register view-doner" style="padding-top: 7%;margin-left: 17%;padding-bottom:6%;">
                <div class="row container">
            
                    <button><a href="allblog.php">ALL POSTED</a></button>
                     <h4><i class="fa fa-angle-right"></i>POST  Detailse</h4><hr><table class="table table-striped table-advance table-hover">
                    <div class="col-md-9 msg-table">

                <table class="table">
                    <tr>
                        <td>Title</td>
                        <td>:</td>
                        <td><?php echo $result['blog_title']; ?></td>
                    </tr>
                    <tr>
                        <td>Sub Title</td>
                        <td>:</td>
                        <td><?php echo $result['blog_subtitle']; ?></td>
                    </tr>
                    <tr>
                        <td>post description</td>
                        <td>:</td>
                        <td><?php echo $result['blog_des']; ?></td>
                    </tr>
                  
                     <tr>
                        <td>Image</td>
                        <td>:</td>
                        <td><img src="uploads/<?php echo $result['blog_image'];?>" height="50" width="100"></td>
                    </tr>

                    
                    <tr>
                        <td>Time</td>
                        <td>:</td>
                        <td><?php echo   date("d/m/Y") ;?></td>
                    </tr>
                </table>
           
                </div>

            </div>
      </div>





<?php
include('includes/footer.php');
?>
