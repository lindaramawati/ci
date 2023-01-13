<?php
class Model_kategori extends CI_Model {

    public function get($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }
  
    public function tampilData() {
    return $this->db->get_where("kategori");
  }
  public function get_kategori($id){

    return $this->db->get_where('kategori', ['id_kategori'=>$id])-> row_array();

}

public function proses_edit()
{
    $data = [
        "kode_kategori" => $this->input->post('kode_kategori'),
        "nama_kategori" => $this->input->post('nama_kategori')
    ];

    $this->db->where('id_kategori', $this->input->post('id'));
    $this->db->update('kategori', $data);
}

  public function add($data) {
    $this->db->insert('kategori', $data);
  }

  public function getMax($table, $field, $kode = null)
    {
        $this->db->select_max($field);
        if ($kode != null) {
            $this->db->like($field, $kode, 'after');
        }
        return $this->db->get($table)->row_array()[$field];
    }
    public function search($search="")
	{
		$this->db->like('nama_kategori', $search);
		return $this->db->get($this->table)->result();
	}
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->like('nama_kategori', $keyword);
        $this->db->or_like('kode_kategori', $keyword);
        return $this->db->get()->result();
    }



}

?>