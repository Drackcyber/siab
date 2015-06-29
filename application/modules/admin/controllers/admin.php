<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_utama');
		$this->load->model('db_admin');
	}

	public function index()
	{	
		$data['assesment']=$this->db_admin->show_all_lim('siab_assesment',5);
		$this->template->render('index',$data);
	}

	/**
	*
	* SCRIPT UNTUK MENGELOLA ARTIKEL
	*
	**/
	
	public function add_artikel()
	{
		$data['artikel']=$this->db_utama->show_all('siab_artikel_prb');
		$this->template->render('artikel/add_artikel',$data);
	}

	public function save_artikel(){
		$judul=$this->input->post('judul');
		$isi=$this->input->post('isi');
		$this->db_admin->save_artikel($judul,$isi);
		redirect('admin/add_artikel');
	}

	public function del_artikel($id){
		$this->db_admin->del_artikel($id);
		redirect('admin/view_artikel_a');
	}

	public function view_artikel($id){
		$data['artikel']=$this->db_utama->show_all_where('siab_artikel_prb','id_artikel',$id);
		$this->template->render('artikel/view_artikel',$data);
	}

	public function view_artikel_a(){
		$data['artikel']=$this->db_utama->show_all('siab_artikel_prb');
		$this->template->render('artikel/view_artikel_a',$data);
	}

	/**
	*
	* END SCRIPT UNTUK MENGELOKA ARTIKEL
	*
	**/
	


	/**
	*
	* SCRIPT DIGUNAKAN UNTUK MENGELOLA TIPE BENCANA
	*
	**/
	
	public function add_tipe()
	{
		$data['tipe']=$this->db_utama->show_all('siab_tipe');
		$this->template->render('assesment/add_tipe',$data);
	}

	public function save_tipe(){
		$post=$this->input->post('tipe');
		$this->db_admin->save_tipe($post);
		redirect('admin/add_tipe');
	}

	public function del_tipe($id){
		$this->db_admin->del_tipe($id);
		redirect('admin/add_tipe');
	}

	public function update_tipe($id){
		$id=$this->input->post('id');
		$post=$this->input->post('tipe');
		$this->db_admin->update_tipe($id,$post);
		redirect('admin/add_tipe');
	}

	public function edit_tipe($id){
		$data['data_tipe']=$this->db_utama->show_all_where('siab_tipe','id_tipe',$id);
		//print_r($data['data_tipe']);
		$data['tipe']=$this->db_utama->show_all('siab_tipe');
		$this->template->render('assesment/edit_tipe',$data);
	}

	/**
	*
	* END SCRIPT PENGELOLA BENCANA
	*
	**/
	

	/**
	*
	* CONTROLLER UNTUK MANAJEMEN PETUGAS
	*
	**/
	public function add_petugas(){
		$this->template->render('petugas/add_petugas');
	}

	public function save_petugas(){
		$alamat=$this->input->post('alamat');
		$hp=$this->input->post('hp');
		$nama=$this->input->post('nama');
		$tgl_lahir=$this->input->post('tgl_lahir');
		$tmp_lahir=$this->input->post('tmp_lahir');
		$email=$this->input->post('email');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$jk=$this->input->post('jk');
		$jab=$this->input->post('jab');

		$this->db_admin->save_petugas($alamat,$hp,$nama,$tgl_lahir,$tmp_lahir,$email,$username,$password,$jk,$jab);
		redirect('admin/list_petugas');
	}

	public function edit_petugas($id){
		$data['data_petugas']=$this->db_utama->show_all_where('siab_petugas','id_petugas',$id);
		$this->template->render('petugas/edit_petugas',$data);
	}

	public function list_petugas(){
		$data['petugas']=$this->db_utama->show_all('siab_petugas');
		$this->template->render('petugas/list_petugas',$data);
	}

	public function del_petugas($id){
		$this->db_admin->del_petugas($id);
		redirect('admin/list_petugas');
	}



	/**
	*
	* CONTROLLER UNTUK MANAJEMEN PETUGAS
	*
	**/

	/**
	*
	* CONTROLLER UNTUK ASSESSMENT
	*
	**/
	public function add_assessment(){

		
		$this->load->library('googlemaps');

		$config['center']                       = '-7.965251801658337, 110.60055410478515';
		$config['zoom']                         = '16';
		$config['places'] = TRUE;
		/*
		$config['onclick']                      = '
		document.getElementById("latFld").value = event.latLng.lat();
		document.getElementById("lngFld").value = event.latLng.lng();
		';
		*/
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position']  = '-7.965251801658337, 110.60055410478515';
		$marker['draggable'] = true;
		$marker['animation'] ='DROP';
		$marker['ondragend'] = '
		document.getElementById("latFld").value = event.latLng.lat();
		document.getElementById("lngFld").value = event.latLng.lng();

		';
		$this->googlemaps->add_marker($marker);
		
		$data['map']  = $this->googlemaps->create_map();
		$data['tipe'] = $this->db_utama->show_all('siab_tipe');
		$this->template->render('assesment/add_assessment',$data);
	}

	public function save_assesment(){
		$lat=$this->input->post('lat');
		$lng=$this->input->post('lng');
		$lokasi_bencana=$this->input->post('lokasi_bencana');
		$kecamatan=$this->input->post('kec');
		$jenis_bencana=$this->input->post('jenis_bencana');
		$nm_bencana=$this->input->post('nm_bencana');
		$inten_kejadian=$this->input->post('inten_kejadian');
		$waktu=$this->input->post('waktu');
		$tgl_kejadian=$this->input->post('tgl_kejadian');
		$sarana_umum=$this->input->post('sarana_umum');
		$ket_umum=$this->input->post('ket_umum');
		$meninggal=$this->input->post('meninggal');
		$lk_ringan=$this->input->post('lk_ringan');
		$lk_berat=$this->input->post('lk_berat');
		$hilang=$this->input->post('hilang');
		$rmh_hancur=$this->input->post('rmh_hancur');
		$rmh_ringan=$this->input->post('rmh_ringan');
		$rmh_berat=$this->input->post('rmh_berat');
		$akses_jalan=$this->input->post('akses_jalan');
		$akses_jembatan=$this->input->post('akses_jembatan');
		$akses_transport=$this->input->post('akses_transport');
		$ket_kerusakan=$this->input->post('ket_kerusakan');
		$pengungsian=$this->input->post('pengungsian');
		$almt_pengungsi=$this->input->post('almt_pengungsi');
		$pengungsi_l=$this->input->post('pengungsi_l');
		$pengungsi_p=$this->input->post('pengungsi_p');
		$nm_kontak=$this->input->post('nm_kontak');
		$hp_kontak=$this->input->post('hp_kontak');
		$jab_kontak=$this->input->post('jab_kontak');
		$ket_pengungsi=$this->input->post('ket_pengungsi');
		$tmbh_keb1=$this->input->post('tmbh_keb1');
		$tmbh_keb2=$this->input->post('tmbh_keb2');
		$tmbh_keb3=$this->input->post('tmbh_keb3');
		$tmbh_keb4=$this->input->post('tmbh_keb4');
		$tmbh_keb5=$this->input->post('tmbh_keb5');
		$jml_keb1=$this->input->post('jml_keb1');
		$jml_keb2=$this->input->post('jml_keb2');
		$jml_keb3=$this->input->post('jml_keb3');
		$jml_keb4=$this->input->post('jml_keb4');
		$jml_keb5=$this->input->post('jml_keb5');
		$ket_keb=$this->input->post('ket_keb');

		$this->db_admin->save_assesment($lat, $lng, $lokasi_bencana, $kecamatan, $jenis_bencana, $nm_bencana, $inten_kejadian, $waktu, $tgl_kejadian, $sarana_umum, $ket_umum, $meninggal, $lk_ringan, $lk_berat, $hilang, $rmh_hancur, $rmh_ringan, $rmh_berat, $akses_jalan, $akses_jembatan, $akses_transport, $ket_kerusakan, $pengungsian, $almt_pengungsi, $pengungsi_l, $pengungsi_p, $nm_kontak, $hp_kontak, $jab_kontak, $ket_pengungsi, $tmbh_keb1, $tmbh_keb2, $tmbh_keb3, $tmbh_keb4, $tmbh_keb5, $jml_keb1, $jml_keb2, $jml_keb3, $jml_keb4, $jml_keb5, $ket_keb);
		redirect('admin/peta_assessment','refresh');
	}

	public function peta_assessment(){
	 	$this->load->library('googlemaps');
			
			$config['center']                       = '-7.965251801658337, 110.60055410478515';
			$config['zoom']                         = 'auto';
			$config['places']                       = TRUE;
			$config['map_height']                   = "100%";
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
			$marker['infowindow_content']           = "<b>$b->nm_bencana</b> <br> $b->lokasi_bencana";
			$marker['icon']                         ="../assets/img/peta/marker.png";
			$this->googlemaps->add_marker($marker);

		}
		
		$data['map']  = $this->googlemaps->create_map();
		$this->template->render('assesment/peta',$data);
	}

	public function daftar_assessment(){
		$data['assesment']=$this->db_utama->show_all('siab_assesment');
		$this->template->render('assesment/daftar_assessment',$data);
	}

	public function view_assessment(){
		$this->template->render('assesment/view_assessment');
	}

	/**
	*
	* END CONTROLLER UNTUK ASSESSMENT
	*
	**/

	/**
	*
	* START CONTROLLER UNTUK MENGELOLA PESAN
	*
	**/
	public function inbox (){
		$this->template->render('pesan/inbox');	
	}

	public function send (){
		$this->template->render('pesan/send');	
	}

	public function delete (){
		$this->template->render('pesan/delete');	
	}

	public function lihat_pesan (){
		$this->template->render('pesan/lihat_pesan');
	}
	/**
	*
	* END CONTROLLER UNTUK MENGELOLA PESAN
	*
	**/



	public function peta(){
		$this->load->library('googlemaps');
		
		$config['center']   = '37.4419, -122.1419';
		$config['zoom']     = 'auto';
		$config['onclick'] = "document.getElementById('latFld').value =latLng.lat();document.getElementById('latFld').value = latLng.lng();";
		$this->googlemaps->initialize($config);
		
		$marker             = array();
		$marker['position'] = '37.429, -122.1419';
		$this->googlemaps->add_marker($marker);
		$data['map']        = $this->googlemaps->create_map();
		
		$this->load->view('admin/peta', $data);
	}
	
}

/* End of file  */
/* Location: ./application/controllers/ */

