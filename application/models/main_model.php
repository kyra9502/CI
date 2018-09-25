<?php
//ex avec un formulaire

class Main_model extends CI_Model{
	//non utlisé
	function test_main(){
		echo "This is a model function";
	}
	//non utilisé
	function insert_data($data){
		$this->db->insert("user",$data);
	}

	function fetch_data(){
		$query = $this->db->get("user");
		//select * from user
		return $query;
	}

}