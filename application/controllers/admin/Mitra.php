<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {
	
	public function index() {
		$data['page_title']='Data Mitra';
		// $data['atasan']=$this->MAtasanCRUD->semuadata();
		$this->load->model('model_mitra');
		$data['mitra']= $this->model_mitra->tampilData()->result();
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/mitra/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
    }

	public function fungsiTambah() {
        $id_mitra = $this->input->post('id_mitra');
        $nama_mitra = $this->input->post('nama_mitra');
		$type = $this->input->post('type');
		$alamat_mitra = $this->input->post('alamat_mitra');
        $no_telepon = $this->input->post('no_telepon');

        $ArrInsert = array(
        'id_mitra' => $id_mitra,
        'nama_mitra' => $nama_mitra,
		'type' => $type,
		'alamat_mitra' => $alamat_mitra,
		'no_telepon' => $no_telepon
        );

        $this->db->insert('mitra', $ArrInsert);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil disimpan</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect(base_url('admin/mitra/index'));
    }

    public function halamanUpdate($id_mitra) {
        $data['title']       = 'Edit Data Order';
		$where = array('id_mitra' => $id_mitra);
		$this->load->model('model_mitra');
		$data['mitra'] = $this->model_mitra->halamanUpdate($where, 'mitra')->result();
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/mitra/edit');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function fungsiUpdate() {
		$id_mitra = $this->input->post('id_mitra');
        $nama_mitra = $this->input->post('nama_mitra');
		$type = $this->input->post('type');
		$alamat_mitra = $this->input->post('alamat_mitra');
        $no_telepon = $this->input->post('no_telepon');

        $ArrUpdate = array(
        'id_mitra' => $id_mitra,
        'nama_mitra' => $nama_mitra,
		'type' => $type,
		'alamat_mitra' => $alamat_mitra,
        'no_telepon' => $no_telepon,
        );

		$this->db->where('id_mitra', $id_mitra);
		$this->db->update('mitra', $ArrUpdate);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil diubah</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url('admin/mitra/index'));
	}

	public function fungsiDelete($id_mitra) {
		$this->db->where('id_mitra', $id_mitra);
		$this->db->delete('mitra');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil dihapus</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url('admin/mitra/index'));
	}
public function print(){
        $data['atasan'] = $this->mlaporan->laporan_atasan('mitra')->result();
        $this->load->view('operator/print_atasan', $data);
      }
}
