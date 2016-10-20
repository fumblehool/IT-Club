<?php

class home_c extends CI_Controller
{
	public function index()
	{
       $this->load->model('home_model');
       $data = $this->home_model->home_data();

       $this->load->view("pages/home_view", $data);
	}


	
	public function checklogin()
	{
        $email    = $this->input->post('email');
        $password = $this->input->post('password');

		$this->load->model("home_model");
		$data['username'] = $this->home_model->checklogin($email, $password);

        if ($data['username']) 
        {
              $this->load->view('pages/after_login_view', $data);
             // redirect doesn't allow to pass $data
        }
        else 
        { 
            $this->session->set_flashdata('login_failed', 'Sorry, Email and Password does not match !!!');
        	redirect('home_c'); 
        }
              
        
	}

}

?>