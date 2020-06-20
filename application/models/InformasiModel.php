 <?php

class InformasiModel extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
 
	public function getRS(){
		return $this->db->get("rs");
	}

	function deleteRS($Nama){
		$this->db->where("Nama",$Nama);
		return $this->db->delete("rs");
	}

	function insertData() {
		$rs = array (
			"Nama" => $this->input->post("Nama"),
			"Alamat" => $this->input->post("Alamat"),
			"Kuota" => $this->input->post("Kuota"),
			"Terisi" => $this->input->post("Terisi")
		);
		return $this->db->insert('rs', $rs);
	}

	function getRsById($Nama){
		$this->db->where("Nama",$Nama);
		return $this->db->get('rs');
	}

	function updateData(){
		$Nama = $this->input->post("Nama");
		$rs = array (
			"Nama" => $this->input->post("Nama"),
			"Alamat" => $this->input->post("Alamat"),
			"Kuota" => $this->input->post("Kuota"),
			"Terisi" => $this->input->post("Terisi")
		);
		$this->db->where("Nama",$Nama);
		return $this->db->update('rs', $rs);
	}

}