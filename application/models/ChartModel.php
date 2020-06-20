<?php

class ChartModel extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
 
	public function graph(){
		$data = $this->db->query("SELECT * from rs");
		return $data->result();
	}
 
}