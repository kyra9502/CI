<?php
// gather information here from models
// comme des include des pages utilisées
defined('BASEPATH') OR exit('No direct script access allowed');

class new_trick extends CI_Controller {

	public function index(){
	// include 
		$this->load->view("pages/header");
		$this->load->model("newtrick_model");
		$data["fetch_data"] = $this->newtrick_model->fetch_data();
		$this->load->view("pages/new_trick",$data);
		$this->load->view("pages/footer");
	}


}