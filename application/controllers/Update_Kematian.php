<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_Kematian extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_kematian');
		$this->load->helper('url');
		$this->load->library('upload');
	}
 
	public function index(){
		$data['kematian'] = $this->m_kematian->tampil_data()->result();
		$this->load->view('update_kematian', $data);
	}

	function edit($id){
		$where = array('id' => $id);
		$data['kematian'] = $this->m_kematian->edit_data($where, 'kematian')->result();
		$this->load->view('update_kematian', $data);
	}

	function update(){
		$id = $this->input->post('id');
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
	
		// Cek apakah ada file baru yang diupload
		if ($_FILES['bukti_kematian']['name'] !== '') {
			// Ada file baru yang diupload
			if ($this->upload->do_upload('bukti_kematian')) {
				// Upload berhasil
				$bukti_kematian = $this->upload->data('file_name');
			} else {
				// Upload gagal
				$error = $this->upload->display_errors();
				// Handle error sesuai kebutuhan Anda
				// ...
			}
		} else {
			// Tidak ada file baru yang diupload
			// Periksa apakah ada file bukti kematian yang ada sebelumnya
			if ($this->input->post('existing_bukti_kematian')) {
				// Gunakan file bukti kematian yang ada sebelumnya
				$bukti_kematian = $this->input->post('existing_bukti_kematian');
			} else {
				// Tidak ada file bukti kematian sebelumnya atau baru yang diupload
				// Anda dapat menetapkan nilai default atau melakukan penanganan lain sesuai kebutuhan Anda
				$bukti_kematian = '';
			}
		}
	
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
	
		$where = array(
			'id' => $id
		);
	
		$this->m_kematian->update_data($where, $data, 'kematian');
		redirect('kematian');
	}

	function view_bukti($id){
        $data['kematian'] = $this->m_kematian->get_kematian_by_id($id);
        $this->load->view('update_kematian', $data);
    }
}
