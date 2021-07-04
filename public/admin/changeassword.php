<?php

include 'classes/user.php';

$user=new user();

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['updatepass'])){
   $userresetpass=$user->updateuserpass($_POST);
 }

include 'includes/header.php';



?>







  
 
 
<form class="login-form" role="form" method="post" style="padding:200px 350px;">
 <table>
 	<?php

        if (isset($userresetpass)) {
           echo $userresetpass;
        }

        ?>
    
     <tr>
       <td>old pass: </td>
        <td><input type="password" name="old_pass" ></td>
    </tr>
     <tr>
       <td>new pass: </td>
        <td><input type="password" name="password"></td>
    </tr>

   


    <tr>
      <td></td>
        <td>
        <input type="submit" name="updatepass" value="update"/>
        <a class="btn btn-primary" href="login.php" title="">login</a>
        
        </td>
    </tr>    
  </table>
</form>




<?php
include 'includes/footer.php'
?>