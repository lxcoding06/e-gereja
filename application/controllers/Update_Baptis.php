<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Update_Baptis extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_baptis');
                $this->load->helper('url');
	}
 
	public function index(){
		$data['baptis'] = $this->m_baptis->tampil_data()->result();
		$this->load->view('update_baptis',$data);
	}

	function edit($id){
		$where = array('id' => $id);
		$data['baptis'] = $this->m_baptis->edit_data($where,'baptis')->result();
		$this->load->view('update_baptis',$data);
	}

	function update(){
		$id = $this->input->post('id');
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
	 
		$where = array(
			'id' => $id
		);
	 
		$this->m_baptis->update_data($where,$data,'baptis');
		redirect('baptis');
	}
}