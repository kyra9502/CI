<?php
// database operation function write here

defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model{


	//Insert table user
	public function insert_data($data){
		//INSERT into user (username, password, email) VALUES(?,?,?);
		$this->db->insert("user", $data);
	}

	
}



