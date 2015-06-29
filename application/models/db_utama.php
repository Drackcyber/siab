<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class db_utama extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function show_all($table){
		$this->db->from($table);
		$query=$this->db->get();

		return $query->result();
	}
	
	public function show_all_where($table,$field,$isian){
		$this->db->from($table);
		$this->db->where($field, $isian);
		$query=$this->db->get();

		return $query->result();
	}

}

/* End of file  */
/* Location: ./application/models/ */