<?php
class student{

	private $table='doner_table';
	private $table2='tbl_facebook';
	
	private $name;
	private $email;
	private $address;
	private $phone;
	private $social;
	private $blood;
	private $division;
	private $status;
	private $gender;
	private $image;
	private $search;

    public function  setsearch($search){
			$this->search= $search;
		}
	public function  setName($name){
		$this->name= $name;
	}
	public function setEmail($email){
		$this->email= $email;
	}
	public function  setPhone($phone){
		$this->phone= $phone;
	}
	public function  setAddress($address){
		$this->address= $address;
	}
	public function  setSocial($social){
		$this->social= $social;
	}
	public function  setblood($blood){
		$this->blood= $blood;
	}
	public function  setdivision($division){
		$this->division= $division;
	}
	public function  setstatus($status){
		$this->status= $status;
	}
	public function  setgender($gender){
		$this->gender= $gender;
	}
	public function  setimage($image){
		$this->image= $image;
	}


public function insert(){

	$sql= "INSERT INTO $this->table (user_name,user_email,user_phone,user_address,user_social) VALUES (:name,:email,:phone,:address,:social)";
	$stmt= DB::prepare($sql);
	$stmt->bindParam(':name',$this->name);
	$stmt->bindParam(':email',$this->email);
	$stmt->bindParam(':phone',$this->phone);
	$stmt->bindParam(':address',$this->address);
	$stmt->bindParam(':social',$this->social);
	return $stmt->execute();
}


public function readAll(){
	$sql="SELECT * FROM  $this->table order by user_id desc";
	$stmt=DB::prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll();
}
public function readuser($table){
	$sql="SELECT * FROM  $table";
	$stmt=DB::prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll();
}


public function readbyid($id){
	$sql="SELECT * FROM $this->table WHERE user_id=:id";
	$stmt=DB::prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	return $stmt->fetch();
}

public function update($id){
	$sql= "UPDATE  $this->table SET user_name=:name,user_email=:email,user_phone=:phone,user_address=:address,user_social=:social,user_blood=:blood,user_division=:division,user_status=:status,user_gender=:gender,user_image=:image WHERE user_id=:id";
	$stmt= DB::prepare($sql);
	$stmt->bindParam(':name',$this->name);
	$stmt->bindParam(':email',$this->email);
	$stmt->bindParam(':phone',$this->phone);
	$stmt->bindParam(':address',$this->address);
	$stmt->bindParam(':social',$this->social);
	$stmt->bindParam(':blood',$this->blood);
	$stmt->bindParam(':division',$this->division);
	$stmt->bindParam(':status',$this->status);
	$stmt->bindParam(':gender',$this->gender);
	$stmt->bindParam(':image',$this->image);
	$stmt->bindParam(':id',$id);
	return $stmt->execute();
}

public function delete($id){
$sql= "DELETE  FROM $this->table  WHERE user_id=:id";
$stmt= DB::prepare($sql);
$stmt->bindParam(':id',$id);
return $stmt->execute();
}

public function searchall($table){
   
    $search=$this->search;
	$sql="SELECT * FROM  $table  WHERE user_name LIKE '%$search%' OR user_blood LIKE '%$search%' OR user_phone LIKE '%$search%' or user_division LIKE '%$search%' or user_division LIKE '%$search%' ";
	
	$stmt=DB::prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll();
}


public function readAlldatafb(){
	$sql="SELECT * FROM  $this->table2 order by id desc";
	$stmt=DB::prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll();
}

public function deletedatafb($id){
$sql= "DELETE  FROM $this->table2  WHERE id=:id";
$stmt= DB::prepare($sql);
$stmt->bindParam(':id',$id);
return $stmt->execute();
}


}


?>
