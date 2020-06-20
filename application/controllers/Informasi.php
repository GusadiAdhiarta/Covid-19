<?php 
	/**
	 * 
	 */
	class Informasi extends CI_Controller{
            public function __construct(){
                  parent::__construct();
                  $this->load->model('InformasiModel');
            }

		public function index(){
                  $data['rs'] = $this->InformasiModel->getRS();
                  $this->load->view('informasi', $data);
		}	

            public function hapus_RS($Nama){
                  if ($this->session->userdata('level')!="1") {
                        redirect(site_url("informasi"));
                        $this->session->sess_destroy();
                  }             
                  $this->InformasiModel->deleteRS($Nama);
                  redirect(site_url("informasi"));
            }

            public function tambah_data(){
                  if ($this->session->userdata('level')!="1") {
                        redirect(site_url("informasi"));
                        $this->session->sess_destroy();
                    }             
                  $this->load->model('InformasiModel');
                  $data['informasi'] = $this->InformasiModel->getRS();
                  $data['rs'] = $this->InformasiModel->getRS();
                  $this->load->view("informasi_tambah",$data);
            }

            public function prosesTambah(){
                  if ($this->InformasiModel->insertData()) {
                        redirect(site_url("informasi"));
                  } else{
                        redictect(site_url("informasi/tambah_data"));
                  }
            }

            public function prosesUpdate(){
                  if ($this->InformasiModel->updateData()) {
                      redirect(site_url("informasi"));
                  } else{
                      redirect(site_url("informasi/update/$Nama"));
                  }
            }

            public function update_Data($Nama){
                  if ($this->session->userdata('level')!="1") {
                        redirect(site_url("informasi"));
                        $this->session->sess_destroy();
                  }             
                  $data['rs'] = $this->InformasiModel->getRS();
                  $data['rs'] = $this->InformasiModel->getRsById($Nama)->row();
                  $this->load->view("informasi_update",$data);
            }

	}
 ?>