<?php
class Model_mitra extends CI_Model {

  public function tampilData() {
    return $this->db->get_where("mitra");
  }

  public function fungsiTambah($data) {
    $this->db->insert('mitra', $data);
  }

  public function halamanUpdate($where, $table) {
    return $this->db->get_where($table, $where);
  }

  public function fungsiUpdate($id_mitra, $data) {
    $this->db->where('id_mitra', $id_mitra);
		$this->db->update('mitra', $data);
  }

  function fungsiDelete($id_mitra) {
    $this->db->where('id_mitra', $id_mitra);
    $this->db->delete('mitra');
	}



}

?>