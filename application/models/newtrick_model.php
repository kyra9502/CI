<?php
// database operation function write here

defined('BASEPATH') OR exit('No direct script access allowed');

class newtrick_model extends CI_Model{



	public function fetch_data(){
		// SELECT * From user
		//$query = $this->db->get("user");

		// sql précision
		$query = $this->db->query("SELECT name, picture FROM tricks ORDER BY name DESC");
		return $query;
	}
}
