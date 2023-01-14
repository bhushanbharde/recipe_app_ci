<?php

class User_model extends CI_Model {

    public function register_store()
	{
		echo "<pre>";
		
		$data = array(
			'name' => $_POST['name'],
			'user_id' => $_POST['username'],
			'password' => md5($_POST['password'])
		);
		
		// print_r($data);
		if($this->db->insert('user', $data) == 1){
			$this->session->set_flashdata('msg','Registration successfull'); 
			redirect('user/login');
		}
		else{
			$this->session->set_flashdata('msg','something went wrong'); 
			redirect('user/register');
		}
	}

    public function login_store()
	{
        $user_id = $_POST['username'];
        $password = $_POST['password'];

		$user = $this->db->get_where('user', ['user_id' => $user_id])->first_row();
        // echo "<pre>";
		// print_r($user);

        $data = array(
            'id' => $user->id,
            'username' => $user->user_id,
            'name' => $user->name
        );

        if($user->password === md5($password)){
            $this->session->set_userdata($data);
            redirect('maincontroller');
        }
        else {
            $this->session->set_flashdata('error','username or password is incorrect'); 
			redirect('user/login');
        }

	}

}