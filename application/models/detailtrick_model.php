<?php
// database operation function write here

defined('BASEPATH') OR exit('No direct script access allowed');

class detailtrick_model extends CI_Model{



	public function fetch_data(){
		// SELECT * From user
		//$query = $this->db->get("user");

		// sql précision
		$query = $this->db->query("SELECT id, user_id, title, content, edit_author, image, DATE_FORMAT(post_date, '%d-%m-%Y ') AS post_date  FROM post WHERE id = ?");
		return $query;
	}
}
