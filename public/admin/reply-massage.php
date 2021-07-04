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

if (isset($_GET ['action']) && $_GET ['action'] == 'reply') {
     $id=(int)$_GET ['id'];
    $result=$user->readbyid($id);

 }


 ?>


<div class=" register view-doner" style="padding-top: 7%;margin-left: 17%;">
                <div class="row container">
                   <button><a href="user-massage.php">ALL USER MASSAGES</a></button>
                     <h4><i class="fa fa-angle-right"></i>Reply user Massage</h4><hr><table class="table table-striped table-advance table-hover">
                    <div class="col-md-9 msg-table">

                  <?php  

                 if (isset($_POST ['send'])) {
                              $email=$_POST ['email'];
                              $From=$_POST ['From'];
                              $subject=$_POST ['subject'];
                              $message=$_POST['message'];      

                              $user->email($email);
                              $user->From($From);
                              $user->subject($subject);
                              $user->message($message);
                            
                      if ($user->sendemail($id)) {
                          echo"massage successfully done";
                    }else{
                      echo"massage not successfully done";
                    }
            }

                ?>
              <form action="" method="post" enctype="multipart/form-data">
                 

                      <input type="hidden" class="form-control" name="id"  value="<?php echo $result['user_id'];?>" />
                      <div class="form-group">
                         <label for="exampleFormControlTextarea1">To</label>
                          <input type="text" class="form-control" readonly name="email"  value="<?php echo $result['user_email']; ?>" />
                      </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">From</label>
                          <input type="text" class="form-control" name="From" placeholder="enter your email" />
                      </div>
                       <div class="form-group">
                            <label for="exampleFormControlTextarea1">subject</label>
                          <input type="text" class="form-control" name="subject" placeholder="seubject" />
                      </div>
                         <div class="form-group">
                            <label for="exampleFormControlTextarea1">User massage</label>
                          <input type="text" class="form-control" readonly value="<?php echo $result['user_massage']; ?>" />
                      </div>
                     <div class="form-group">
                    <label for="exampleFormControlTextarea1">Reply massage</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"/></textarea>
                  </div>
                        <input type="submit" class="btnRegister" name="send" value="Send"/>
               

                 
                 
                </form>
                       
                </div>

            </div>
      </div>





<?php
include('includes/footer.php');
?>
