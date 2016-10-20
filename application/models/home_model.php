<?php

class home_model extends CI_Model
{
	public function checklogin($email, $password)
	{

	        $this->db->where('email', $email);
	        $this->db->where('password', $password);

			// $query = $this->db->query("SELECT * FROM users_table WHERE email = $email AND password = $password ");

	        $result = $this->db->get('users_table');

			// return $query->num_rows();

			if ( $result->num_rows() == 1 ) 
			{

				return $result->row(0)->name;
			}
			else { return false; }
	}

	public function home_data()
	{ 
		    $heading1 = "WHO WE ARE";
            $this->db->where('heading', $heading1);

            $result1 = $this->db->get('home_table');

            $heading2 = "OUR AIMS & OBJECTIVES";
            $this->db->where('heading', $heading2);

            $result2 = $this->db->get('home_table');

                $data = array(
                      'heading1' => $result1->row(0)->heading,
                      'data11'  => $result1->row(0)->data1,
                      'data12'  => $result1->row(0)->data2,
                      'data13'  => $result1->row(0)->data3,
                      'heading2' => $result2->row(0)->heading,
                      'data21'  => $result2->row(0)->data1,
                      'data22'  => $result2->row(0)->data2,
                      'data23'  => $result2->row(0)->data3

                    );

				return $data;


			

	}
}

?>