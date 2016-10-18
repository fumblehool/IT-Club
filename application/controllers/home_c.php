<?php

class home_c extends CI_Controller
{
	public function index()
	{
       $this->load->view("pages/home_view");
	}
	
	public function checklogin()
	{
		$this->load->model("home_model");
	}
}

?>