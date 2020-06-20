<?php 
	/**
	 * 
	 */
	class Chart extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('ChartModel');
		}
	 
		public function index(){
			$data['graph'] = $this->ChartModel->graph();
			$this->load->view('chart', $data);
		}
	}
 ?>