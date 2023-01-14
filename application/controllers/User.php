<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function login()
	{
		if($this->session->userdata('id')){
            redirect('maincontroller');
        }else {
			$this->load->view('login');
        }
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function login_store()
	{
		$this->user_model->login_store();
	}

	public function register_store()
	{
		$this->user_model->register_store();
	}
}