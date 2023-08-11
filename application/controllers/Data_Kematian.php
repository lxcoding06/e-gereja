<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Kematian extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_kematian');
		$this->load->helper('url');
		$this->load->library('upload');
	}
 
	public function index(){
		$this->load->view('data_kematian');
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$tp_lahir = $this->input->post('tp_lahir');
		$lg_lahir = $this->input->post('lg_lahir');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');
		$lg_kematian = $this->input->post('lg_kematian');
		$waktu_kematian = $this->input->post('waktu_kematian');
		$petugas = $this->input->post('petugas');
	
		$config['upload_path'] = './uploads/'; // Path folder untuk menyimpan file
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; // Tipe file yang diperbolehkan
		$config['max_size'] = 2048; // Batas maksimum ukuran file (dalam kilobytes)
		$config['encrypt_name'] = TRUE; // Mengenkripsi nama file yang diunggah

		$this->upload->initialize($config);

		if (!$this->upload->do_upload('bukti_kematian')) { // Jika proses upload gagal
			$error = $this->upload->display_errors();
			echo $error;
		} else { // Jika proses upload berhasil
			$data = $this->upload->data();
			$bukti_kematian = $data['file_name'];

			$data = array(
				'nama' => $nama,
				'tp_lahir' => $tp_lahir,
				'lg_lahir' => $lg_lahir,
				'agama' => $agama,
				'alamat' => $alamat,
				'lg_kematian' => $lg_kematian,
				'waktu_kematian' => $waktu_kematian,
				'bukti_kematian' => $bukti_kematian,
				'petugas' => $petugas,
			);
			
			$this->m_kematian->input_data($data,'kematian');
			redirect('kematian');
		}
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_kematian->hapus_data($where,'kematian');
		redirect('kematian');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['kematian'] = $this->m_kematian->edit_data($where,'kematian')->result();
		$this->load->view('update_kematian',$data);
	}

}
