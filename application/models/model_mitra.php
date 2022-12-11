<?php
class Model_mitra extends CI_Model {

    public function get($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }
  
    public function tampilData() {
    return $this->db->get_where("mitra");
  }
  public function get_mitra($id){

    return $this->db->get_where('mitra', ['id_mitra'=>$id])-> row_array();

}

public function proses_edit()
{
    $data = [
        "nama_mitra" => $this->input->post('nama_mitra'),
        "type" => $this->input->post('type'),
        "alamat_mitra" => $this->input->post('alamat_mitra'),
        "no_telepon" => $this->input->post('no_telepon')
    ];

    $this->db->where('id_mitra', $this->input->post('id'));
    $this->db->update('mitra', $data);
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
    public function search($search="")
	{
		$this->db->like('nama_mitra', $search);
		return $this->db->get($this->table)->result();
	}
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('mitra');
        $this->db->like('nama_mitra', $keyword);
        $this->db->or_like('type', $keyword);
        $this->db->or_like('alamat_mitra', $keyword);
        $this->db->or_like('no_telepon', $keyword);
        return $this->db->get()->result();
    }



}

?>