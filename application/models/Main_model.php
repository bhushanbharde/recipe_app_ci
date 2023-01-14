<?php

class Main_model extends CI_Model {
    public function getAllRecipes(){
        $this->db->select('*');
        $this->db->from('recipe');
        $recipes = $this->db->get()->result_array();
        return $recipes;
    }

    public function getRecipe($recipe_id){
        
        $this->db->select('recipe.*,user.name as creator');
        $this->db->from('recipe');
        $this->db->join('user', 'recipe.creator_id = user.id');
        $this->db->where('recipe.id', $recipe_id);
        
        $data = array();
        
        $data['recipe'] = $this->db->get()->result_array();
        $data['ingredients'] = $this->getIngredients($recipe_id);
        $data['steps'] = $this->getSteps($recipe_id);

        return $data;

    }

    public function getIngredients($recipe_id){
        $this->db->select('*');
        $this->db->from('ingredients');
        $this->db->where('recipe_id',$recipe_id);
        return $this->db->get()->result_array();
    }

    public function getSteps($recipe_id){
        $this->db->select('*');
        $this->db->from('process');
        $this->db->where('recipe_id',$recipe_id);
        return $this->db->get()->result_array();
    }

    public function storeRecipes(){
        
        $items = $_POST['item'];
        $amount = $_POST['amount'];
        $unit = $_POST['unit'];
        $steps = $_POST['step'];
        $user_id = $this->session->userdata('id');
        $image = $this->image_upload();
        $filename = $image['upload_data']['file_name'];

        $recipe = array(
            'name' => $_POST['name'],
            'desc' => $_POST['desc'],
            'image_url' => $filename,
            'creator_id' => $user_id
        );

        $this->db->insert('recipe', $recipe);
        $recipe_id = $this->db->insert_id();

        for($i=0; $i<count($items); $i++){
            $ingredients[$i] = array(
                'items' => $items[$i],
                'amount' => $amount[$i],
                'unit' => $unit[$i],
                'recipe_id' => $recipe_id
            );
            $this->db->insert('ingredients', $ingredients[$i]);
        }

        for($i=0; $i<count($steps); $i++){
            $process[$i] = array(
                'step' => $steps[$i],
                'recipe_id' => $recipe_id
            );

            $this->db->insert('process', $process[$i]);
        }
    }

    public function image_upload()
    {
        $config['upload_path']          = './images/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        if ( !$this->upload->do_upload('image'))
        {
            $error = array('error' => $this->upload->display_errors());
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            return $data;
        }
    }
}