<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_article extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        // Load database prodi
        $this->load->library('JWT');
        
    }
    // ========== CRUD Article ========== //

	function list_article(){
		$hasil= $this->db->query('select * from article order by ID_title desc');
		return $hasil->result();
	}

	function data_about(){
		$hasil= $this->db->query('SELECT * FROM about WHERE ID_AboutUS=1');
		return $hasil->result();
	}

	function show_category(){
		$hasil=$this->db->get('category');
		return $hasil->result();
	}

	function save_article($data){

		$this->db->insert('article', $data);
        return $this->db->insert_id();
        // $result=$this->db->insert('article',$data);
    }
 	
 	public function get_by_id($id)
    {
        return $this->db->get_where('article', array('ID_title' => $id))->row();
	}

    public function update_article($where, $data)
    {
    	$this->db->where('ID_title',$where);
    	$this->db->update('article', $data);
        return 1;
    }

    public function update_about($data)
    {
    	$this->db->where('ID_AboutUS',1);
    	$this->db->update('about', $data);
        return 1;
    }
 
    function delete_article(){
        
        // $this->db->where('ID_title', $id);
        // $result=$this->db->delete('article');
        // return $result;
        $id = $this->input->post('id');
        $hasil=$this->db->query("DELETE FROM article WHERE ID_title='$id'");
		return $hasil;
    }

    // ========== END CRUD ====== //


}