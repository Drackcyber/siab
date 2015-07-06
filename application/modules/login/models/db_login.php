<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class db_login extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function validate(){
        // Menghindari injectsi hacking
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        // pengambilan query (indentify iD)
        $this->db->where('user', $username);
        $this->db->where('pass', $password);
        // mengirimkan hasil query ke user
        $query = $this->db->get('siab_petugas');
        // Cek apakah user tersebut ada??
        if($query->num_rows == 1)
        {
            //Jika user ada maka buat sessi
            $row = $query->row();
            $data = array(
                    'id' => $row->id_petugas,
                    'nama' => $row->nama,
                    'user' => $row->user,
                    'petugas'=>$row->status,
                    'validated' => true
                    );
            $this->session->set_userdata("login", $data);
            return true;
        }
        // Jika tidak maka data tidak ditemukan
        return false;
    }

}

/* End of file login.php */
/* Location: ./application/models/login.php */