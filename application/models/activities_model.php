<?php

class activities_model extends CI_Model
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

	public function activities_data()
	{ 
		    $heading1 = "Training";
            $this->db->where('heading', $heading1);

            $result1 = $this->db->get('activities_table');

            $heading2 = "Seminars";
            $this->db->where('heading', $heading2);

            $result2 = $this->db->get('activities_table');

            $heading3 = "Conferences";
            $this->db->where('heading', $heading3);

            $result3 = $this->db->get('activities_table');

                $data = array(
                      'heading1' => $result1->row(0)->heading,
                      'data11'  => $result1->row(0)->data1,

                      'heading2' => $result2->row(0)->heading,
                      'data21'  => $result2->row(0)->data1,

                      'heading3' => $result3->row(0)->heading,
                      'data31'  => $result3->row(0)->data1,


                    );

				return $data;


			

	}
}

?>