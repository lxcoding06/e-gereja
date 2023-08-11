<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Update_Pernikahan extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_pernikahan');
                $this->load->helper('url');
	}
 
	public function index(){
		$data['pernikahan'] = $this->m_pernikahan->tampil_data()->result();
		$this->load->view('update_pernikahan',$data);
	}

	function edit($id){
		$where = array('id' => $id);
		$data['pernikahan'] = $this->m_pernikahan->edit_data($where,'pernikahan')->result();
		$this->load->view('update_pernikahan',$data);
	}

	function update(){
		$id = $this->input->post('id');
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
	 
		$where = array(
			'id' => $id
		);
	 
		$this->m_pernikahan->update_data($where,$data,'pernikahan');
		redirect('pernikahan');
	}
}