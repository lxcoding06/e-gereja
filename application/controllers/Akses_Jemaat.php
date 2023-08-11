<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Akses_Jemaat extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_jemaat');
                $this->load->helper('url');
	}
	
	public function index(){
		$data['jemaat'] = $this->m_jemaat->tampil_data()->result();
		$this->load->view('akses_jemaat',$data);
	}

 
}