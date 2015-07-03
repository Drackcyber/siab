<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_utama');
		$this->load->model('db_home');
	}

	public function index()
	{
		$this->template->render('index');
	}


	public function save_pesan(){
		$post=$this->input->post('tipe');
		$this->db_admin->save_tipe($post);
		redirect('home/index');
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
		$this->load->library('googlemaps');
			
		$config['center']                       = '-7.965251801658337, 110.60055410478515';
		$config['zoom']                         = 'auto';
		$config['places']                       = TRUE;
		$config['map_height']                   = "250px";

		$this->googlemaps->initialize($config);
		
		$bencana=$this->db_utama->show_all_where('siab_assesment','id_assesment',$id);
		foreach ($bencana as $b) {
		
		$marker                                 = array();
		$marker['position']                     = "$b->lat,$b->lng";
		$marker['infowindow_content']           = "<b>$b->nm_bencana</b> <br> <i> Alamat : $b->lokasi_bencana <br> Tanggal : $b->tgl_kejadian</i> ";
		$this->googlemaps->add_marker($marker);

		}
		
		$data['map']  = $this->googlemaps->create_map();
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

	public function about(){
		$data['about']=$this->db_utama->show_all('siab_about');
		$this->template->render('about', $data);
	}

	public function contact(){
		$this->load->library('googlemaps');
			
		$config['center']                       = '-7.965251801658337, 110.60055410478515';
		$config['zoom']                         = '16';
		$config['places']                       = TRUE;
		$config['map_height']                   = "250px";

		$this->googlemaps->initialize($config);
		
		
		$marker                                 = array();
		$marker['position']                     = "-7.965251801658337, 110.60055410478515";
		$marker['infowindow_content']           = "Markas PMI Kabupaten Gunungkidul";
		$this->googlemaps->add_marker($marker);

		$data['map']          = $this->googlemaps->create_map();
		$data['data_contact'] = $this->db_utama->show_all('siab_contact');
		$this->template->render('contact', $data);
	}

	public function inbox(){
		$subjek=$this->input->post('subjek');
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$hp=$this->input->post('hp');
		$isi=$this->input->post('isi');
		$this->db_home->save_pesan($subjek, $nama, $email, $hp, $isi);
		redirect('home/index');

	}

}

/* End of file  */
/* Location: ./application/controllers/ */