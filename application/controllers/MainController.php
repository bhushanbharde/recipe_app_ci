<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function index()
	{
        if($this->session->userdata('id')){
            $data = $this->main_model->getAllRecipes();
            $this->load->view('indexview', ['recipes' => $data]);
            
        } else{
            redirect('user/login');
        }
	}

    public function create(){
        $this->load->view('create');
    }

    public function store(){
        $this->main_model->storeRecipes();
        redirect('recipes');
    }

    public function details($id){
        $data = $this->main_model->getRecipe($id);
        $this->load->view('details', ['data' => $data]);
    }
}
