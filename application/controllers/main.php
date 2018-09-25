<?php
// gather information here from models
// comme des include des pages utilisées
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index(){
		// include view page
		$this->load->view("main_view");
	}
	
	// importation form validation library
	public function form_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules("username", "username",'required|alpha');
		$this->form_validation->set_rules("password", "password",'required|alpha');
		$this->form_validation->set_rules("email", "email",'required|alpha');

		if($this->form_validation->run()){
			//true
			$this->load->model("main_model");
			$data = array(
					"username" =>$this->input->post("username"),
					"password" =>$this->input->post("password"),
					"email" =>$this->input->post("email")
				);
			$this->main_model->insert_data($data);

			redirect(base_url() . "main/inserted");

		} else{
			//false
			$this->index();
			  }
	}

	public function inserted(){
		$this->index();

	}
	

}

