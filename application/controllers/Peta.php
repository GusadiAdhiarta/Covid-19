<?php 
	/**
	 * 
	 */
	class Peta extends CI_Controller
	{
		
		public function index (){
			$prov = json_decode(file_get_contents('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'),true);
			$data = [
					'prov' => $prov,
					];

			$this->load->view('peta', $data); 
		}
	}
 ?>