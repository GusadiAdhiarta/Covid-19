<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('LoginModel');  
            if ($this->session->userdata('status')=="gagal") {
                echo "<script>alert('Username atau Password Salah!!!')</script>";
                $this->session->sess_destroy();
            }     
        }
        
        //menampilkan form login
        public function index()
        {
            $this->load->view('login');            
        }
        
        //aktifitas validasi login
        public function aksiLogin()
        {
            //pengambilan data input
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            //data kondisi untuk seleksi di database
            $where = array(
                'username' => $username,
                'password' => $password
            );

            //pengecekan apakah account terdaftar atau tidak
            $cek = $this->LoginModel->validasiLogin("account", $where);
            if($cek->num_rows()>0){
                //berhasil login
                $level = $cek->row()->level;
                $data_session = array(
                    "nama" => $username,
                    'status' => "login",
                    'level' => $level
                );
                $this->session->set_userdata($data_session);                
                redirect(site_url('beranda'));
            }else {
                //gagal login
                $data_session = array(
                    "nama" => "",
                    'status' => "gagal"
                );
                $this->session->set_userdata($data_session);
                redirect(site_url('login'));
            }
        }

        //menampilkan form daftar
        public function daftar()
        {
            $this->load->view('daftar');
        }

        //Proses memasukan data user baru
        public function aksiDaftar()
        {
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $level = 2;
            $user = array(
                'username' => $username,
                'password' => $password,
                'level' => $level
            );
            $cek = $this->LoginModel->daftar("account", $user);
            if($cek) {
                redirect(site_url('login'));
            }else{
                redirect(site_url('login/daftar'));
            }
        }

        //fitur logout
        public function logout()
        {
            $this->session->sess_destroy();
            redirect(site_url('beranda'));
                
        }
    
    }
    
    /* End of file Login.php */
    
?>