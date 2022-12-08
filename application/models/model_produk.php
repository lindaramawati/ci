<?php
class Model_produk extends CI_Model {

    public function data()
    {
        $this->db->order_by('id_kategori', 'DESC');
        return $this->db->get('kategori');
    }
  
    public function tampilData() {
    return $this->db->get_where
    ("produk");
    
  }
  
  public function get_produk($id){

    return $this->db->get_where('produk', ['id_produk'=>$id])-> row_array();

}
public function get_kategori($id){

    return $this->db->get_where('kategori', ['id_kategori'=>$id])-> row_array();

}

public function proses_edit()
{
    $data = [
        "kode_produk" => $this->input->post('kode_produk'),
        "nama_produk" => $this->input->post('nama_produk'),
        "type" => $this->input->post('type'),
        "jenis" => $this->input->post('jenis'),
        "merk_produk" => $this->input->post('merk'),
        "seri_produk" => $this->input->post('seri')
    ];

    $this->db->where('id_produk', $this->input->post('id'));
    $this->db->update('produk', $data);
}

public function proses_edit_kategori()
{
    $data = [
        "kode_kategori" => $this->input->post('kode_kategori'),
        "nama_kategori" => $this->input->post('nama_kategori'),
    ];

    $this->db->where('id_kategori', $this->input->post('id'));
    $this->db->update('kategori', $data);
}

  public function add($data) {
    $this->db->insert('mitra', $data);
  }

  public function getMax($table = null, $field = null)
    {
        $this->db->select_max($field);
        return $this->db->get($table)->row_array()[$field];
    }

public function datakategori()
{
    return $this->db->get_where("kategori");
}
    



}

?>