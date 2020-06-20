<?php 
	/**
	 * 
	 */
	class Beranda extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('BerandaModel');
		}
	 
		public function index(){
			$readAPIIndo = file_get_contents('https://api.kawalcorona.com/indonesia');
            $data['indonesia'] = json_decode($readAPIIndo,true);

			// $data['graph'] = $this->BerandaModel->graph();
			// $data['status'] = $this->BerandaModel->getStatus();
			$this->load->view('beranda', $data);
		}	
	}
 ?>