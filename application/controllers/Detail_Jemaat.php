<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Detail_Jemaat extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_jemaat');
                $this->load->helper('url');
	}
 
	public function index(){
		$data['jemaat'] = $this->m_jemaat->tampil_data()->result();
		$this->load->view('detail_jemaat',$data);
	}

    function lihat($id){
		$where = array('id' => $id);
		$data['jemaat'] = $this->m_jemaat->edit_data($where,'jemaat')->result();
		$this->load->view('detail_jemaat',$data);
	}

	function edit($id){
		$where = array('id' => $id);
		$data['jemaat'] = $this->m_jemaat->edit_data($where,'jemaat')->result();
		$this->load->view('detail_jemaat',$data);
	}

	function update(){
		$id = $this->input->post('id');
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
			'password' => $password,
			'nama' => $nama,
			'gender' => $gender,
			'tp_lahir' => $tp_lahir,
			'lg_lahir' => $lg_lahir,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->m_jemaat->update_data($where,$data,'jemaat');
		redirect('jemaat');
	}

    public function updateDataJemaat($id) {
        // Mengambil data jemaat berdasarkan ID
        $data['jemaat'] = $this->m_jemaat->getDataById($id);
    
        // Mengambil data tanggal baptis, tanggal pernikahan, dan tanggal kematian
        $data['tanggalBaptis'] = $this->m_jemaat->getTanggalBaptis($id);
        $data['tanggalPernikahan'] = $this->m_jemaat->getTanggalPernikahan($id);
        $data['tanggalKematian'] = $this->m_jemaat->getTanggalKematian($id);
    
        // Memuat halaman update data jemaat dengan data yang telah diambil
        $this->load->view('detail_jemaat', $data);
    }
    

	
}