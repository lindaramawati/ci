<?php
class Model_invoice extends CI_Model {

    public function get($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }
  
    public function tampilData() {
    return $this->db->get_where("invoice");
  }
  public function get_invoice($id){

    return $this->db->get_where('invoice', ['id_invoice'=>$id])-> row_array();

}

public function proses_edit()
{
    $data = [
        "nama_mitra" => $this->input->post('nama_mitra'),
        "jumlah_pengiriman" => $this->input->post('jumlah_pengiriman')
    ];

    $this->db->where('id_invoice', $this->input->post('id'));
    $this->db->update('invoice', $data);
}

  public function add($data) {
    $this->db->insert('invoice', $data);
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