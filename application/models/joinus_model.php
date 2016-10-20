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
         foreach ($_POST['skills'] as $selected) {
         	  // $_POST['skills'][0] = "true";
         	  // $_POST['skills'][1] = "true";
         	  // $_POST['skills'][2] = "true";
         	  // $_POST['skills'][3] = "true";
         	  echo $selected . "<br/>";        	 
           }  

	    // $C =  $_POST['skills'][0]; 

	    // $Cpp =  $_POST['skills'][1]; 
	    // $java =  $_POST['skills'][2];
	    // $mysql =  $_POST['skills'][3]; 


		$email = $_POST['email'];
		$address = $_POST['address'];

		$this->db->query("INSERT INTO users_table 
			              VALUES( '$name', '$password', '$DOB', '$sex', '$C', '$Cpp', '$java', '$mysql', '$email', '$address' ) ");

		return $name;
	}
}

?>