<?php
class Model_produk extends CI_Model {

    public function get($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }
  
    public function tampilData() {
    return $this->db->get_where("produk");
  }
  public function get_produk($id){

    return $this->db->get_where('produk', ['id_produk'=>$id])-> row_array();

}

public function proses_edit()
{
    $data = [
        "kode_produk" => $this->input->post('kode_produk'),
        "nama_produk" => $this->input->post('nama_produk'),
        "type" => $this->input->post('type'),
        "stok" => $this->input->post('stok'),
        "merk_produk" => $this->input->post('merk'),
        "seri_produk" => $this->input->post('seri')
    ];

    $this->db->where('id_produk', $this->input->post('id'));
    $this->db->update('produk', $data);
}

  public function add($data) {
    $this->db->insert('mitra', $data);
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