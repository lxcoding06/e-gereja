<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login_Jemaat extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
        $this->load->library('session');
 
	}
 
	function index(){
		$this->load->view('login_jemaat');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("jemaat",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("akses_jemaat"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}