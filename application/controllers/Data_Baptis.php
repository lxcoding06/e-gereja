<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Data_Baptis extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_baptis');
        $this->load->helper('url');
		
	}
 
	public function index(){
		$this->load->view('data_baptis');
	}

	function tambah_aksi(){
		$nama_anak = $this->input->post('nama_anak');
		$gender = $this->input->post('gender');
		$tp_lahir = $this->input->post('tp_lahir');
		$lg_lahir = $this->input->post('lg_lahir');
		$lg_baptis = $this->input->post('lg_baptis');
		$ayah = $this->input->post('ayah');
		$ibu = $this->input->post('ibu');
		$saksi = $this->input->post('saksi');
		$petugas = $this->input->post('petugas');
	
		$data = array(
			'nama_anak' => $nama_anak,
			'gender' => $gender,
			'tp_lahir' => $tp_lahir,
			'lg_lahir' => $lg_lahir,
			'lg_baptis' => $lg_baptis,
			'ayah' => $ayah,
			'ibu' => $ibu,
			'saksi' => $saksi,
			'petugas' => $petugas,
			);
		$this->m_baptis->input_data($data,'baptis');
		redirect('baptis');
	 
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_baptis->hapus_data($where,'baptis');
		redirect('baptis');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['baptis'] = $this->m_baptis->edit_data($where,'baptis')->result();
		$this->load->view('update_baptis',$data);
	}

}