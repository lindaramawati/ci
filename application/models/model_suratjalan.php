<?php
class Model_suratjalan extends CI_Model {

    public function get($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }
  
    public function tampilData() {
    return $this->db->get_where("surat_jalan");
  }
  public function get_suratjalan($id){

    return $this->db->get_where('surat_jalan', ['id_sj'=>$id])-> row_array();

}

public function proses_edit()
{
    $data = [
        "metode_pengiriman" => $this->input->post('metode_pengiriman'),
        "nomer_kendaraan" => $this->input->post('nomer_kendaraan')
    ];

    $this->db->where('id_sj', $this->input->post('id'));
    $this->db->update('surat_jalan', $data);
}

  public function add($data) {
    $this->db->insert('surat_jalan', $data);
  }

  public function getMax($table, $field, $kode = null)
    {
        $this->db->select_max($field);
        if ($kode != null) {
            $this->db->like($field, $kode, 'after');
        }
        return $this->db->get($table)->row_array()[$field];
    }
    



}

?>