<?php
// gather information here from models
// comme des include des pages utilisées
defined('BASEPATH') OR exit('No direct script access allowed');

class detail_trick extends CI_Controller {

	public function index(){
	// include 
		$this->load->view("pages/header");
		$this->load->model("detailtrick_model");
		$data["fetch_data"] = $this->detailtrick_model->fetch_data();
		$this->load->view("pages/detail_trick",$data);
		$this->load->view("pages/footer");
	}


}