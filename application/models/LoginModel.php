<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class LoginModel extends CI_Model {
        //Mengecek apakah user tersebut terdaftar atau tidak di database
        public function validasiLogin($table, $where)
        {   
            $this->db->where($where);
            return $this->db->get($table);
            
        }
        
        // memasukan data user baru ke dalam database
        public function daftar($table, $user)
        {
            return $this->db->insert($table, $user);
        }
    }
    
    /* End of file LoginModel.php */
    
?>