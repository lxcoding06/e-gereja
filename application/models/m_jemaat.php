<?php 
 
class M_jemaat extends CI_Model{
	function tampil_data(){
		return $this->db->get('jemaat');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function getDataById($id) {
        // Query untuk mengambil data jemaat berdasarkan ID
        $this->db->where('id', $id);
        $query = $this->db->get('jemaat');
        return $query->result();
    }
    
    public function getTanggalBaptis($id) {
		// Query untuk mengambil tanggal baptis berdasarkan ID jemaat
		$this->db->select('lg_baptis');
		$this->db->from('baptis');
		$this->db->join('jemaat', 'jemaat.nama = baptis.ayah OR baptis.ibu');
		$this->db->where('jemaat.id', $id);
		$query = $this->db->get();
		$result = $query->row();
		if ($result) {
			return $result->lg_baptis;
		} else {
			return "Data tidak ada";
		}
	}
	
	public function getTanggalPernikahan($id) {
		// Query untuk mengambil tanggal pernikahan berdasarkan ID jemaat
		$this->db->select('lg_pernikahan');
		$this->db->from('pernikahan');
		$this->db->join('jemaat', 'jemaat.nama = pernikahan.calon_suami OR jemaat.nama = pernikahan.calon_istri');
		$this->db->where('jemaat.id', $id);
		$query = $this->db->get();
		$result = $query->row();
		if ($result) {
			return $result->lg_pernikahan;
		} else {
			return "Data tidak ada";
		}
	}
	
	public function getTanggalKematian($id) {
		// Query untuk mengambil tanggal kematian berdasarkan ID jemaat
		$this->db->select('lg_kematian');
		$this->db->from('kematian');
		$this->db->join('jemaat', 'jemaat.nama = kematian.nama');
		$this->db->where('jemaat.id', $id);
		$query = $this->db->get();
		$result = $query->row();
		if ($result) {
			return $result->lg_kematian;
		} else {
			return "Data tidak ada";
		}
	}
	
}