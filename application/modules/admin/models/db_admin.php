<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class db_admin extends CI_Model {

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
	* MODEL UNTUK TIPE
	*
	**/
	
	public function save_tipe($tipe){
		$this->db->set('nama', $tipe);
		$this->db->insert('siab_tipe');
	}

	public function del_tipe($tipe){
		$this->db->where('id_tipe', $tipe);
		$this->db->delete('siab_tipe');
	}

	public function update_tipe($tipe,$nama){
		$this->db->set('nama', $nama);
		$this->db->where('id_tipe', $tipe);
		$this->db->update('siab_tipe');
	}

	/**
	*
	* END MODEL UNTUK TIPE
	*
	**/


	/**
	*
	* MODEL UNTUK ARTIKEL
	*
	**/
	public function save_artikel($judul,$isi){
		$this->db->set('judul', $judul);
		$this->db->set('isi', $isi);
		$this->db->set('tgl_post', date('Y-m-d'));
		$this->db->insert('siab_artikel_prb');
	}

	public function del_artikel($id_artikel){
		$this->db->where('id_artikel', $id_artikel);
		$this->db->delete('siab_artikel_prb');
	}

	public function update_artikel($judul,$isi,$id_artikel){
		$this->db->set('judul', $judul);
		$this->db->set('isi', $isi);
		$this->db->where('id_artikel', $id_artikel);
		$this->db->update('siab_artikel_prb');
	}
	/**
	*
	* END MODEL UNTUK ARTIKEL
	*
	**/


	/**
	*
	* MODEL UNTUK PETUGAS
	*
	**/
	
	public function save_petugas($alamat,$hp,$nama,$tgl_lahir,$tmp_lahir,$email,$username,$password,$jk,$jab){
		$this->db->set('alamat', $alamat );
		$this->db->set('no_hp', $hp );
		$this->db->set('nama', $nama );
		$this->db->set('tmp_lahir', $tmp_lahir );
		$this->db->set('tgl_lahir', $tgl_lahir );
		$this->db->set('email', $email );
		$this->db->set('user', $username );
		$this->db->set('pass', $password );
		$this->db->set('jk', $jk );
		$this->db->set('jabatan', $jab );
		$this->db->insert('siab_petugas');
	}

	public function del_petugas($id){
		$this->db->where('id_petugas', $id);
		$this->db->delete('siab_petugas');
	}

	public function update_petugas($id_petugas,$alamat,$hp,$nama,$tgl_lahir,$tmp_lahir,$email,$password,$jk,$jab){
		$this->db->set('alamat', $alamat );
		$this->db->set('no_hp', $hp );
		$this->db->set('nama', $nama );
		$this->db->set('tmp_lahir', $tmp_lahir );
		$this->db->set('tgl_lahir', $tgl_lahir );
		$this->db->set('email', $email );
		$this->db->set('pass', $password );
		$this->db->set('jk', $jk );
		$this->db->set('jabatan', $jab );
		$this->db->where('id_petugas', $id_petugas);
		$this->db->update('siab_petugas');
	}

	/**
	*
	* END MODEL UNTUK PETUGAS
	*
	**/


	/**
	*
	* SCRIPT FOR ASSESMENT
	*
	**/
	public function save_assesment($lat, $lng, $lokasi_bencana, $kecamatan, $jenis_bencana, $nm_bencana, $inten_kejadian, $waktu, $tgl_kejadian, $sarana_umum, $ket_umum, $meninggal, $lk_ringan, $lk_berat, $hilang, $rmh_hancur, $rmh_ringan, $rmh_berat, $akses_jalan, $akses_jembatan, $akses_transport, $ket_kerusakan, $pengungsian, $almt_pengungsi, $pengungsi_l, $pengungsi_p, $nm_kontak, $hp_kontak, $jab_kontak, $ket_pengungsi, $tmbh_keb1, $tmbh_keb2, $tmbh_keb3, $tmbh_keb4, $tmbh_keb5, $jml_keb1, $jml_keb2, $jml_keb3, $jml_keb4, $jml_keb5, $ket_keb){
		$this->db->set('lat', $lat);
		$this->db->set('lng', $lng);
		$this->db->set('lokasi_bencana', $lokasi_bencana);
		$this->db->set('kecamatan', $kecamatan);
		$this->db->set('jenis_bencana', $jenis_bencana);
		$this->db->set('nm_bencana', $nm_bencana);
		$this->db->set('inten_kejadian', $inten_kejadian);
		$this->db->set('waktu', $waktu);
		$this->db->set('tgl_kejadian', $tgl_kejadian);
		$this->db->set('sarana_umum', $sarana_umum);
		$this->db->set('ket_umum', $ket_umum);        
		$this->db->set('meninggal', $meninggal);       
		$this->db->set('lk_ringan', $lk_ringan);       
		$this->db->set('lk_berat', $lk_berat);        
		$this->db->set('hilang', $hilang);          
		$this->db->set('rmh_hancur', $rmh_hancur);       
		$this->db->set('rmh_ringan', $rmh_ringan);       
		$this->db->set('rmh_berat', $rmh_berat);       
		$this->db->set('akses_jalan', $akses_jalan);     
		$this->db->set('akses_jembatan', $akses_jembatan);  
		$this->db->set('akses_transport', $akses_transport); 
		$this->db->set('ket_kerusakan', $ket_kerusakan);       
		$this->db->set('pengungsian', $pengungsian);     
		$this->db->set('almt_pengungsi', $almt_pengungsi);  
		$this->db->set('pengungsi_l', $pengungsi_l);     
		$this->db->set('pengungsi_p', $pengungsi_p);     
		$this->db->set('nm_kontak', $nm_kontak);       
		$this->db->set('hp_kontak', $hp_kontak);       
		$this->db->set('jab_kontak', $jab_kontak);      
		$this->db->set('ket_pengungsi', $ket_pengungsi);   
		$this->db->set('tmbh_keb1', $tmbh_keb1);       
		$this->db->set('tmbh_keb2', $tmbh_keb2);       
		$this->db->set('tmbh_keb3', $tmbh_keb3);       
		$this->db->set('tmbh_keb4', $tmbh_keb4);       
		$this->db->set('tmbh_keb5', $tmbh_keb5);       
		$this->db->set('jml_keb1', $jml_keb1);        
		$this->db->set('jml_keb2', $jml_keb2);        
		$this->db->set('jml_keb3', $jml_keb3);        
		$this->db->set('jml_keb4', $jml_keb4);        
		$this->db->set('jml_keb5', $jml_keb5);        
		$this->db->set('ket_keb', $ket_keb);
		$this->db->insert('siab_assesment');
	}
	/**
	*
	* END SCRIPT FOR ASSESMENT
	*
	**/
	
	
	/**
	*
	* START MODEL UNTUK MANAJEMEN HALAMAN
	*
	**/
	
	public function update_about($id_about,$isi){
		$this->db->set('isi', $isi);
		$this->db->where('id_about', $id_about);
		$this->db->update('siab_about');
	}

	/**
		*
		* END MODEL UNTUK MANAJEMEN HALAMAN
		*
	**/
			
	

}

/* End of file  */
/* Location: ./application/models/ */