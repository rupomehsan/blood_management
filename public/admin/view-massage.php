<?php
 include('includes/header.php');
  session::checksession();
 include('includes/sidebar.php');
 spl_autoload_register(function($class){
     include "classes/".$class.".php";
 });
?>
<?php
$user= new user();

if (isset($_GET ['action']) && $_GET ['action'] == 'view') {
     $id=(int)$_GET ['id'];
    $result=$user->readbyid($id);

 }


 ?>


<div class=" register view-doner" style="margin-left: 17%;padding-top: 5%;margin-bottom: 20px;">
                <div class="row container">
            
                    <button><a href="user-massage.php">ALL USER MASSAGES</a></button>
                     <h4><i class="fa fa-angle-right"></i>User Massage Detailse</h4><hr><table class="table table-striped table-advance table-hover">
                    <div class="col-md-9 msg-table">

             

            
                <table class="table">
                    <tr>
                        <td>First Name</td>
                        <td>:</td>
                        <td><?php echo $result['user_firstname']; ?></td>
                    </tr>
                    <tr>
                        <td>Last name</td>
                        <td>:</td>
                        <td><?php echo $result['user_lastname']; ?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>:</td>
                        <td><?php echo $result['user_phone']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $result['user_email']; ?></td>
                    </tr>
                     <tr>
                        <td>Massage</td>
                        <td>:</td>
                        <td><?php echo $result['user_massage']; ?></td>
                    </tr>
                    
                    <tr>
                        <td>Send Time</td>
                        <td>:</td>
                        <td><?php echo $result['post_time']; ?></td>
                    </tr>
                </table>
                  <button><?php echo "<a href='reply-massage.php?action=reply&id=".$result['user_id']."'></>"; ?>REPLY MASSAGE</a></button>
           
                </div>

            </div>
      </div>





<?php
include('includes/footer.php');
?>
