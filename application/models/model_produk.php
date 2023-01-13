<?php
class Model_produk extends CI_Model {

    public function data()
    {
        $this->db->order_by('id_kategori', 'DESC');
        return $this->db->get('kategori');
       
    }

    function join($table,$tbljoin,$join){
        $this->db->join($tbljoin,$join);
        return $this->db->get($table);
    }
  
    public function tampilData() {
        // $this->db->join('kategori', 'kategori.id_kategori = produk.Jenis');
        // return $this->db->get_where("produk");

        // $this->db->select('*');
        // $this->db->join('kategori', 'kategori.id_kategori = produk.type');
        // return $this->db->get_where("produk");
        $this->db->join('kategori', 'produk.Jenis = kategori.id_kategori');
        $this->db->order_by('id_produk');
        return $this->db->get('produk')->result_array();

    
  }

  public function tampilData1() {
    return $this->db->get_where("produk");
  }
 

  public function tampilJenis() {
    return $this->db->get_where
    ("kategori");
    
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
  public function get($table, $data = null, $where = null)
  {
      if ($data != null) {
          return $this->db->get_where($table, $data)->row_array();
      } else {
          return $this->db->get_where($table, $where)->result_array();
      }
  }

//   public function getMax($table = null, $field = null)
//     {
//         $this->db->select_max($field);
//         return $this->db->get($table)->row_array()[$field];
//     }
    public function getMax($table, $field, $kode = null)
    {
        $this->db->select_max($field);
        if ($kode != null) {
            $this->db->like($field, $kode, 'after');
        }
        return $this->db->get($table)->row_array()[$field];
    }
    public function getMaxCountKodebarang($table, $field, $kode = null)
    {
        $this->db->select_max($field);

        if ($kode != null) {
            $this->db->like($field, $kode, 'after');
        }
        return $this->db->get($table)->row_array()[$field];
    }
    public function datakategori()
    {
    return $this->db->get_where("kategori");
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.Jenis = kategori.id_kategori');
        $this->db->order_by('id_produk');
        $this->db->like('kode_produk', $keyword);
        $this->db->or_like('nama_produk', $keyword);
        $this->db->or_like('type', $keyword);
        $this->db->or_like('jenis', $keyword);
        $this->db->or_like('merk_produk', $keyword);
        $this->db->or_like('seri_produk', $keyword);
        return $this->db->get()->result_array();
    }
}

?>