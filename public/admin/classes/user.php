<?php
include_once "Session.php";
include "DB.php";

class user{

	private $table='user_table';
	private $firstname;
	private $lastname;
	private $email;
	private $phone;
	private $message;
	private $From;
	private $subject;



	public function  firstname($firstname){
		$this->firstname= $firstname;
	}
	public function lastname($lastname){
		$this->lastname= $lastname;
	}
	public function  phone($phone){
		$this->phone= $phone;
	}
	public function  email($email){
		$this->email= $email;
	}
	public function  message($message){
		$this->message= $message;
	}
	public function  From($From){
		$this->From= $From;
	}
	public function  subject($subject){
		$this->subject= $subject;
	}
	




public function insert(){

	$sql= "INSERT INTO $this->table (user_firstname,user_lastname,user_email,user_phone,user_massage) VALUES (:firstname,:lastname,:email,:phone,:message)";
	$stmt= DB::prepare($sql);
	$stmt->bindParam(':firstname',$this->firstname);
	$stmt->bindParam(':lastname',$this->lastname);
	$stmt->bindParam(':email',$this->email);
	$stmt->bindParam(':phone',$this->phone);
	$stmt->bindParam(':message',$this->message);
	return $stmt->execute();
}


public function readAllmsg(){
	$sql="SELECT * FROM  $this->table order by user_id desc limit 5";
	$stmt=DB::prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll();
}
public function readAll(){
	$sql="SELECT * FROM  $this->table order by user_id desc";
	$stmt=DB::prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll();
}

public function delete($id){
$sql= "DELETE  FROM $this->table  WHERE user_id=:id";
$stmt= DB::prepare($sql);
$stmt->bindParam(':id',$id);
return $stmt->execute();
}

public function readbyid($id){
	$sql="SELECT * FROM $this->table WHERE user_id=:id";
	$stmt=DB::prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	return $stmt->fetch();
}


 public function getLoginuser($username,$password){

	$sql="SELECT * FROM login WHERE user_name=:username AND user_password=:password LIMIT 1";
	$stmt=DB::prepare($sql);
	$stmt->bindParam(':username',$username);
	$stmt->bindParam(':password',$password);
	$stmt->execute();
	$result=$stmt->fetch(PDO::FETCH_OBJ);
	return $result;
   }


public function userLogin($data){
	
	$username=$data['username'];
	$password=$data['password'];
	if ($username=="" OR $password =="") {
		$msg="field must not be empty";
		return $msg;
	}

	  $result=$this->getLoginuser($username,$password);
	  if ($result) { 
	  	session::init();
	  	session::set("login",true);
	  	session::set("id", $result->user_id);
	  	session::set("name", $result->user_name);
	  	session::set("loginmsg", "you are loged in");
	  	header("Location:index.php");
	  }else{
	  	$msg="Invalid name or password";
	  	return $msg;
	  }

   }

  public function checkpassword($old_pass){

   $password=($old_pass);
   $sql="SELECT user_password FROM login WHERE user_password=:password";
   $stmt=DB::prepare($sql);
   $stmt->bindvalue(':password',$password);
   $stmt->execute();
   if ($stmt->rowcount()>0) {
   	 return true;
   }else{
   	 return false;
   }

}



public function updateuserpass($data){

	$old_pass=$data['old_pass'];
	$new_pass=$data['password'];
    $chk_pass=$this->checkpassword($old_pass);
     if ($old_pass=="" or $new_pass=="") {
	 	$msg="field must be not empty";
	 	return $msg;
	 }

	  if ($chk_pass==false) {
	  	   $msg="old passwor is not exist";
	  	   return $msg;
	  }

    // if (strlen($new_pass) < 5) {
       	  
    //    	  $msg="password is too short";
    //    	  return $msg;
    //    }   


    $password=$new_pass;
    $sql="UPDATE login set user_password=:password ";
    $stmt=DB::prepare($sql);
    $stmt->bindvalue(':password',$password);
    $result=$stmt->execute();
    if ($result) {
    	
    	$msg="update password";
    	return $msg;
    }else{
    	$msg="old password did not match";
    }

  }


public function sendemail($id){

	$to=$this->email;
	$From=$this->From;
	$subject=$this->subject;
	$message=$this->message;
	$sendmassage=mail($to,$subject,$message,$From);
	if ($sendmassage) {
	
		return true;
	}else{
     
      return false;
	}


}



}


?>
