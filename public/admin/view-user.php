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
if (isset($_GET ['action']) && $_GET ['action'] == 'view') {
     $id=(int)$_GET ['id'];
    $result=$user->readbyid($id);

 }
?>

<div class=" register view-doner" style="padding-top: 7%;margin-left: 17%;padding-bottom:6%;">
                <div class="row container">
            
                    <button><a href="all-doner.php">ALL BLOOD DONER</a></button>
                     <h4><i class="fa fa-angle-right"></i>BLOOD DONER Detailse</h4><hr><table class="table table-striped table-advance table-hover">
                    <div class="col-md-9 msg-table">
                <table class="table">
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td><?php echo $result['user_name']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $result['user_email']; ?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>:</td>
                        <td><?php echo $result['user_phone']; ?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td><?php echo $result['user_address']; ?></td>
                    </tr>
                     <tr>
                        <td>Social links</td>
                        <td>:</td>
                        <td><?php echo $result['user_social']; ?></td>
                    </tr>
                     <tr>
                        <td>Blood group</td>
                        <td>:</td>
                        <td><?php echo $result['user_blood']; ?></td>
                    </tr>
                     <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td><?php echo $result['user_gender']; ?></td>
                    </tr>
                      <tr>
                        <td>Division</td>
                        <td>:</td>
                        <td><?php echo $result['user_division']; ?></td>
                    </tr>
                     <tr>
                        <td>Donate status(Donate before?)</td>
                        <td>:</td>
                         <td><?php echo $result['user_status']; ?></td>
                    </tr>
                    <tr>
                       <td>Image</td>
                       <td>:</td>
                         <td><img src="uploads/<?php echo $result['user_image'];?>" height="50" width="100"></td>
                   </tr>

                    <tr>
                        <td>Registration Time</td>
                        <td>:</td>
                        <td><?php echo $result['user_time']; ?></td>
                    </tr>
                </table>

                </div>

            </div>
        </div>









<?php
include('includes/footer.php');
?>
