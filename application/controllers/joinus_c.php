<?php

class joinus_c extends CI_Controller
{
	public function index()
	{

	   $this->load->view("pages/joinus_view");
	}
	
	public function insert()
	{
        $this->load->model('joinus_model');
        $data['username'] = $this->joinus_model->insertdata();   // data is always passed in the form of array
        
        $this->load->view("pages/after_joining_view", $data);
	}
}

?>