<?php 
 
class M_kematian extends CI_Model{
	function tampil_data(){
		return $this->db->get('kematian');
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

	public function get_kematian_by_id($id){
        $this->db->where('id', $id);
        return $this->db->get('kematian')->row_array();
    }

	public function getBuktiKematian($id) {
		$this->db->select('bukti_kematian');
		$this->db->where('id', $id);
		$query = $this->db->get('kematian');
	
		if ($query->num_rows() > 0) {
			return $query->row()->bukti_kematian;
		} else {
			return null;
		}
	}
}