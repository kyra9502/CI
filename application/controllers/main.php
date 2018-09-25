<?php
// ex formulaire
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index(){
		$this->load->model("main_model");
		$data["fetch_data"] = $this->main_model->fetch_data();
		$this->load->view('main_view.php', $data);
	}
	// à voir pour la syntaxe entière
	public function form_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules("")
	}


}

