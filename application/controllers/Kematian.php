<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Kematian extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_kematian');
                $this->load->helper('url');
	}
 
	public function index(){
		$data['kematian'] = $this->m_kematian->tampil_data()->result();
		$this->load->view('kematian',$data);
	}
	
 
}