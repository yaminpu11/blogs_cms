<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');

	}

	public function login()
	{
		 $this->load->view('template/login');
	}

    function cek_login(){
        $data_mhs =$this->m_login->cek_mhs();
       	
        if(count($data_mhs)>0){ //jika login sebagai dosen
			$DataUser = array(
                    'Name' => $data_mhs[0],['Name'],
                    'Username' => $data_mhs[0]['NPM'],
                );

                $result = array(
                    'DataUser' => $DataUser,
                    'Status' => -1,
                    'Message' => 'Pleace, change your password'
                ); 
 
        }else{ //jika login sebagai mahasiswa
            $cek_emp=$this->m_login->cek_emp();
            if(count($cek_emp)>0){
               		$DataUser = array(
	                    'Name' => $cek_emp[0],['Name'],
	                    'Username' => $cek_emp[0]['NPM'],
	                );

	                $result = array(
	                    'DataUser' => $DataUser,
	                    'Status' => -1,
	                    'Message' => 'Pleace, change your password'
	                ); 
            }else{  // jika username dan password tidak ditemukan atau salah
                    $url=base_url();
                    echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                    redirect($url);
            }
        }
        
    }

}