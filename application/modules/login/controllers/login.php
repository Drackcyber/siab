<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_login');		
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login_adm(){
		$result = $this->db_login->validate();
        if(! $result){
            redirect('login');
        }else{
        	$status=$this->session->userdata('login');
        	if ($status['status']==1) {
        		redirect('admin');
        	} else {
        		redirect('petugas');
        	}
        	
            
        } 
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('');
    }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */