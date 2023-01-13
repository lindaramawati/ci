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
  public function get_mitra($id = null) {
    return $this->db->get_where("mitra", array('nama_mitra' => $this->session->userdata('nama_mitra')));
    return $this->db->get_where("invoice", array('alamat_mitra' => $this->session->userdata('alamat_mitra')));
    return $this->db->get_where("invoice", array('id' => $this->session->userdata('id')));
    return $this->db->get_where("invoice", array('jumalh_pengiriman' => $this->session->userdata('jumalh_pengiriman')));
    
  }
  public function get_invoice($id){

    return $this->db->get_where('invoice', ['id'=>$id])-> row_array();

}
    public function halamanUpdate($where, $table) {
        return $this->db->get_where($table, $where);
    }

public function proses_edit()
{
    $data = [
        "nama_mitra" => $this->input->post('nama_mitra'),
        "jumlah_pengiriman" => $this->input->post('jumlah_pengiriman'),
        "alamat" => $this->input->post('alamat')
    ];

    $this->db->where('id', $this->input->post('id'));
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
    public function search($search="")
	{
		$this->db->like('nama_mitra', $search);
		return $this->db->get($this->table)->result();
	}
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('invoice');
        $this->db->like('no_invoice', $keyword);
        $this->db->or_like('nama_mitra', $keyword);
        $this->db->or_like('jumlah_pengiriman', $keyword);
        $this->db->or_like('alamat', $keyword);
        return $this->db->get()->result();
    }



}

?>