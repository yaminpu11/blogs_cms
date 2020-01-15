<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        // Load database prodi
        $this->load->library('JWT');
    }

    public function getInputToken()
    {
        $token = $this->input->post('token');
        // print_r($token);die();
        $key = "UAP)(*";
        $data_arr = (array) $this->jwt->decode($token,$key);
        return $data_arr;
    }
    
    function cek_mhs(){
    	$input = $this->getInputToken();

		$dataMhs = $this->db->get_where('db_academic.auth_students',
                    array('NPM' => $input['Username'],'Password_Old' => md5($input['Password'])))
                    ->result_array();
        // var_dump($dataMhs);           
        return print_r(json_encode($dataMhs));
	}

	function cek_emp(){
    	$input = $this->getInputToken();
        $dataEm = $this->db->get_where('db_employees.employees',
                    array(
                        'NIP' => $input['Username'],
                        'Password_Old' => md5($input['Password'])))->result_array();

        return print_r(json_encode($dataEm));
	}

}