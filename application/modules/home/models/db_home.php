<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class db_home extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function show_all_lim($table,$limit){
		$this->db->from($table);
		$this->db->limit($limit);
		$query=$this->db->get();

		return $query->result();
	}

	/**
	*
	* START MODEL PESAN
	*
	**/

	public function save_pesan($subjek, $nama, $email, $hp, $isi){
		$this->db->set('subjek', $subjek);
		$this->db->set('nama', $nama);
		$this->db->set('email', $email);
		$this->db->set('hp', $hp);
		$this->db->set('isi', $isi);
		$this->db->set('waktu', date('H:m:s'));
		$this->db->set('tgl_post', date('Y-m-d'));
		$this->db->insert('siab_inbox');
	}

	/**
	*
	* END MODEL PESAN
	*
	**/
	
	

}

/* End of file db_home.php */
/* Location: ./application/models/db_home.php */