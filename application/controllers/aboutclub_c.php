<?php

class aboutclub_c extends CI_Controller
{
	public function index()
	{
   
	   $this->load->model('aboutclub_model');
       $data = $this->aboutclub_model->aboutclub_data();

       $this->load->view("pages/aboutclub_view", $data);
	}
	
}

?>