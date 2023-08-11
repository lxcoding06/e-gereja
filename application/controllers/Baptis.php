<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Baptis extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_baptis');
                $this->load->helper('url');
	}
 
	public function index(){
		$data['baptis'] = $this->m_baptis->tampil_data()->result();
		$this->load->view('baptis',$data);
	}
	
 
}