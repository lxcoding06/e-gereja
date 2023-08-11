<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Data_Jemaat extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_jemaat');
		$this->load->helper('url');
		
	}
 
	public function index(){
		$this->load->view('data_jemaat');
	}

	function tambah_aksi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$gender = $this->input->post('gender');
		$tp_lahir = $this->input->post('tp_lahir');
		$lg_lahir = $this->input->post('lg_lahir');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
 
		$data = array(
			'username' => $username,
			'password' => md5($password),
			'nama' => $nama,
			'gender' => $gender,
			'tp_lahir' => $tp_lahir,
			'lg_lahir' => $lg_lahir,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			);
		$this->m_jemaat->input_data($data,'jemaat');
		redirect('jemaat');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_jemaat->hapus_data($where,'jemaat');
		redirect('jemaat');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['jemaat'] = $this->m_jemaat->edit_data($where,'jemaat')->result();
		$this->load->view('update_jemaat',$data);
	}

 
}