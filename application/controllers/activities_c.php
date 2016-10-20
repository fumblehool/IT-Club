<?php

class activities_c extends CI_Controller
{
	public function index()
	{
       $this->load->model('activities_model');
       $data = $this->activities_model->activities_data();

       $this->load->view("pages/activities_view", $data);
	}
	
}

?>