<?php

class joinus_model extends CI_Model
{
	public function insertdata()
	{
		// $this->db->insert();
		$name = $_POST['name'];
		$password = $_POST['password'];
		$DOB = $_POST['s1']."-".$_POST['s2']."-".$_POST['s3'];
		$sex = $_POST['optionsRadios'];
        
         echo "<br><br><br><br><br><br>";
         $C = $java = $Cpp = $mysql = "false";
         

         if(!empty($_POST['skills'])){
	         foreach ($_POST['skills'] as $selected) {
	         	  if($selected == "c"){
	         	  	$C = "true";
	         	  }
	         	  if($selected == "c++"){
	         	  	$Cpp = "true";
	         	  }
	         	  if($selected == "java"){
	         	  	$java = "true";
	         	  }
	         	  if($selected == "mysql"){
	         	  	$mysql = "true";
	         	  }        	 
	           }  

			$email = $_POST['email'];
			$address = $_POST['address'];

			
		}
	$this->db->query("INSERT INTO users_table 
				              VALUES( '$name', '$password', '$DOB', '$sex', '$C', '$Cpp', '$java', '$mysql', '$email', '$address' ) ");
		return $name;
	}
}

?>