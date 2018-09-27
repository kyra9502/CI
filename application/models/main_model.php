<?php
// database operation function write here

defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model{


	//Insert table user
	public function insert_data($data){
		//INSERT into user (username, password, email) VALUES(?,?,?);
		$this->db->insert("user", $data);
	}

	public function fetch_data(){
		// SELECT * From user
		//$query = $this->db->get("user");

		// sql précision
		$query = $this->db->query("SELECT name, picture FROM tricks ORDER BY name DESC");
		return $query;
	}
}



