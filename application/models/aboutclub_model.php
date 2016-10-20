<?php

class aboutclub_model extends CI_Model
{

	public function aboutclub_data()
	{ 
		    $heading1 = "IT CLUB HOW IT WORKS";
            $this->db->where('heading', $heading1);

            $result1 = $this->db->get('aboutclub_table');

            $heading2 = "IT CLUB FOR WHOM";
            $this->db->where('heading', $heading2);

            $result2 = $this->db->get('aboutclub_table');

                $data = array(
                      'heading1' => $result1->row(0)->heading,
                      'data11'  => $result1->row(0)->data1,
                      'data12'  => $result1->row(0)->data2,
                      'data13'  => $result1->row(0)->data3,
                      'heading2' => $result2->row(0)->heading,
                      'data21'  => $result2->row(0)->data1,
                      'data22'  => $result2->row(0)->data2,
                      'data23'  => $result2->row(0)->data3,
                      'data24'  => $result2->row(0)->data4

                    );

				return $data;


			

	}
}

?>