<?php
// gather information here from models
// comme des include des pages utilisées
defined('BASEPATH') OR exit('No direct script access allowed');

class new_trick extends CI_Controller {

	public function index(){
	// include 
		$this->load->view("pages/header");
		$this->load->model("newtrick_model");
		//$data["fetch_data"] = $this->newtrick_model->fetch_data();
		$this->load->view("pages/new_trick");
		$this->load->view("pages/footer");
	}

// importation form validation library
	public function form_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name", "name",'required|alpha');
		$this->form_validation->set_rules("description", "description",'required|alpha');
		$this->form_validation->set_rules("picture", "picture",'required|alpha');
		$this->form_validation->set_rules("video", "video",'required|alpha');
		$this->form_validation->set_rules("goup_id", "groupe_id",'required|alpha');
		$this->form_validation->set_rules("chat_id", "chat_id",'required|alpha');
		$this->form_validation->set_rules("user_id", "user_id",'required|alpha');

		if($this->form_validation->run()){
			//true
			$this->load->model("newtrick_model");
			$data = array(
					"name" =>$this->input->post("name"),
					"description" =>$this->input->post("description"),
					"picture" =>$this->input->post("picture"),
					"video" =>$this->input->post("video"),
					"group_id" =>$this->input->post("group_id"),
					"chat_id" =>$this->input->post("chat_id"),
					"user_id" =>$this->input->post("user_id")
				);
			$this->newtrick_model->insert_data($data);

			redirect(base_url() . "new_trick/inserted");

		} else{
			//false
			$this->index();
			  }
	}

	public function inserted(){
		$this->index();

	}
	
}