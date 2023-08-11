<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pernikahan extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_pernikahan');
                $this->load->helper('url');
	}
 
	public function index(){
		$data['pernikahan'] = $this->m_pernikahan->tampil_data()->result();
		$this->load->view('pernikahan',$data);
	}
	
 
}