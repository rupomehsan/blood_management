<?php
include_once "Session.php";


class blog{

	private $table='blog_table';
	private $title;
	private $subtitle;
	private $description;
	private $image;
	private $date;
	private $pagename;
	private $pagedesc;




	public function settitle($title){
		$this->title= $title;
	}
	public function setsubtitle($subtitle){
		$this->subtitle= $subtitle;
	}
	public function  setdescription($description){
		$this->description= $description;
	}
	public function  setimage($image){
		$this->image= $image;
	}
	public function  setdate($date){
		$this->date= $date;
	}
	public function  setpagename($pagename){
		$this->pagename= $pagename;
	}
    public function  setpagedesc($pagedesc){
		$this->pagedesc= $pagedesc;
	}


public function blogpost(){

	$sql= "INSERT INTO $this->table (blog_title,blog_subtitle,blog_des,blog_image,post_time) VALUES (:title,:subtitle,:description,:image,:blgtime)";
	$stmt= DB::prepare($sql);
	$stmt->bindParam(':title',$this->title);
	$stmt->bindParam(':subtitle',$this->subtitle);
	$stmt->bindParam(':description',$this->description);
	$stmt->bindParam(':image',$this->image);
	$stmt->bindParam(':blgtime',$this->date);
	return $stmt->execute();
}
public function addpage($table){

	$sql= "INSERT INTO $table (page_name,page_desc,page_image,post_time) VALUES (:pagename,:pagedesc,:image,:pagetime)";
	$stmt= DB::prepare($sql);
	$stmt->bindParam(':pagename',$this->pagename);
	$stmt->bindParam(':pagedesc',$this->pagedesc);
	$stmt->bindParam(':image',$this->image);
	$stmt->bindParam(':pagetime',$this->date);
	return $stmt->execute();
}
public function updatepage($table,$id){

	$sql= "UPDATE  $table SET page_name=:pagename,page_desc=:pagedesc,page_image=:image,post_time=:pagetime WHERE page_id=:id";

	$stmt= DB::prepare($sql);
	$stmt->bindParam(':pagename',$this->pagename);
	$stmt->bindParam(':pagedesc',$this->pagedesc);
	$stmt->bindParam(':image',$this->image);
	$stmt->bindParam(':pagetime',$this->date);
	$stmt->bindParam(':id',$id);
	return $stmt->execute();
}



public function readAll(){
	$sql="SELECT * FROM  $this->table";
	$stmt=DB::prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll();
}
public function readAllpage($table){
	$sql="SELECT * FROM  $table";
	$stmt=DB::prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll();
}
public function readAllcomments($table){
	$sql="SELECT * FROM  $table";
	$stmt=DB::prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll();
}


public function delete($id){
$sql= "DELETE  FROM $this->table  WHERE blog_id=:id";
$stmt= DB::prepare($sql);
$stmt->bindParam(':id',$id);
return $stmt->execute();
}


public function deletepage($table,$id){
$sql= "DELETE  FROM $table  WHERE page_id=:id";
$stmt= DB::prepare($sql);
$stmt->bindParam(':id',$id);
return $stmt->execute();
}

public function deletecomment($table,$id){
$sql= "DELETE  FROM $table  WHERE user_id=:id";
$stmt= DB::prepare($sql);
$stmt->bindParam(':id',$id);
return $stmt->execute();
}

public function readbyid($id){
	$sql="SELECT * FROM $this->table WHERE blog_id=:id";
	$stmt=DB::prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	return $stmt->fetch();
}
public function readbypageid($table,$id){
	$sql="SELECT * FROM $table WHERE page_id=:id";
	$stmt=DB::prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	return $stmt->fetch();
}

public function updatepost($id){
	$sql= "UPDATE  $this->table SET blog_title=:title,blog_subtitle=:subtitle,blog_des=:description,blog_image=:image WHERE blog_id=:id";
	$stmt= DB::prepare($sql);
	$stmt->bindParam(':title',$this->title);
	$stmt->bindParam(':subtitle',$this->subtitle);
	$stmt->bindParam(':description',$this->description);
	$stmt->bindParam(':image',$this->image);
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




}


?>
