<?php
class Model_order extends CI_Model {

    public function get($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }
  
    public function tampilData() {
    return $this->db->get_where("order");
  }
  public function get_order($id){

    return $this->db->get_where('order', ['id_order'=>$id])-> row_array();

}

public function proses_edit()
{
    $data = [
        "nama_mitra" => $this->input->post('nama_mitra'),
        "tanggal_pemesanan" => $this->input->post('tanggal_pemesanan'),
        "jumlah_pesanan" => $this->input->post('jumlah_pesanan'),
        "nama_produk" => $this->input->post('nama_produk')
    ];

    $this->db->where('id_order', $this->input->post('id'));
    $this->db->update('order', $data);
}

  public function add($data) {
    $this->db->insert('order', $data);
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