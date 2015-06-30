<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_utama');
	}

	public function index()
	{
		$this->template->render('index');
	}

	public function peta()
	{	
		$this->load->library('googlemaps');
			
		$config['center']                       = '-7.965251801658337, 110.60055410478515';
		$config['zoom']                         = 'auto';
		$config['places']                       = TRUE;
		$config['map_height']                   = "600px";
		/*
		$config['onclick']                      = '
		document.getElementById("latFld").value = event.latLng.lat();
		document.getElementById("lngFld").value = event.latLng.lng();
		';
		*/
		$this->googlemaps->initialize($config);
		
		$bencana=$this->db_utama->show_all('siab_assesment');
		foreach ($bencana as $b) {
		
		$marker                                 = array();
		$marker['position']                     = "$b->lat,$b->lng";
		$marker['infowindow_content']           = "<b>$b->nm_bencana</b> <br> <i> Alamat : $b->lokasi_bencana <br> Tanggal : $b->tgl_kejadian</i> ";
		$marker['icon']                         ="../assets/img/peta/marker.png";
		$this->googlemaps->add_marker($marker);

		}
		
		$data['map']  = $this->googlemaps->create_map();
		$this->template->render('home/peta',$data);
	}

	public function list_bencana(){
		$data['assesment']=$this->db_utama->show_all('siab_assesment');
		$this->template->render('list',$data);
	}
	public function detail_bencana($id){
		$data['assesment']=$this->db_utama->show_all_where('siab_assesment','id_assesment',$id);
		$this->template->render('view_bencana',$data);
	}

	public function artikel(){
		$data['artikel']=$this->db_utama->show_all('siab_artikel_prb');
		$this->template->render('artikel',$data);
	}

	public function tabel(){
		$this->template->render('tabel');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */