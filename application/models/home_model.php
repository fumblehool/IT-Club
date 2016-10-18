<?php

class home_model extends CI_Model
{
	public function checklogin()
	{
		$query = $this->db->query("SELECT * FROM users_table");
		return $query = num_rows();
	}
}

?>