<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Data_Pernikahan extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_pernikahan');
        $this->load->helper('url');
		
	}
 
	public function index(){
		$this->load->view('data_pernikahan');
	}

	function tambah_aksi(){
		$calon_suami = $this->input->post('calon_suami');
		$tp_csuami = $this->input->post('tp_csuami');
		$lg_csuami = $this->input->post('lg_csuami');
		$calon_istri = $this->input->post('calon_istri');
		$tp_cistri = $this->input->post('tp_cistri');
		$lg_cistri = $this->input->post('lg_cistri');
		$lg_pernikahan = $this->input->post('lg_pernikahan');
		$saksi1 = $this->input->post('saksi1');
		$saksi2 = $this->input->post('saksi2');
		$petugas = $this->input->post('petugas');
	
		$data = array(
			'calon_suami' => $calon_suami,
			'tp_csuami' => $tp_csuami,
			'lg_csuami' => $lg_csuami,
			'calon_istri' => $calon_istri,
			'tp_cistri' => $tp_cistri,
			'lg_cistri' => $lg_cistri,
			'lg_pernikahan' => $lg_pernikahan,
			'saksi1' => $saksi1,
			'saksi2' => $saksi2,
			'petugas' => $petugas,
			);
		$this->m_pernikahan->input_data($data,'pernikahan');
		redirect('pernikahan');
	 
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_pernikahan->hapus_data($where,'pernikahan');
		redirect('pernikahan');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['pernikahan'] = $this->m_pernikahan->edit_data($where,'pernikahan')->result();
		$this->load->view('update_pernikahan',$data);
	}

}