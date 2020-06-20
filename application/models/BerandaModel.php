<?php

class BerandaModel extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
 
	public function graph(){
		$data = $this->db->query("SELECT * from kasus");
		// $readAPIIndo = file_get_contents('https://api.kawalcorona.com/indonesia');
		// $data['indonesia'] = json_decode($readAPIIndo,true);
		
		return $data->result();
	}
 
}