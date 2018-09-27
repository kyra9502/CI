<?php
// database operation function write here

defined('BASEPATH') OR exit('No direct script access allowed');

class newtrick_model extends CI_Model{



	public function insert_data($data){
		//INSERT into table (username, password, email) VALUES(?,?,?);
		$this->db->insert("tricks", $data);
	}
}
