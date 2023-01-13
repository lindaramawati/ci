<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {
	
	public function index()
	{
		$this->load->model('model_login');
		$this->model_login->keamanan();
		
		$data['page_title']       = 'Daftar Mitra';
		$this->load->model('model_mitra');
		$data['mitra']= $this->model_mitra->tampilData()->result();
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/mitra/index', $data);
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
	public function tambah(){
		$data['page_title']       = 'Tambah Data mitra';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/mitra/tambah');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
	public function proses_tambah(){

		$this->load->model('model_mitra', 'admin');
		$kode_terakhir = $this->admin->getMax('mitra', 'id');
        $kode_tambah = substr($kode_terakhir, -6, 6);
        $kode_tambah++;
        $number = str_pad($kode_tambah, 6, '0', STR_PAD_LEFT);
        $data['id'] = 'P' . $number;


		$nama_mitra = $this->input->post('nama_mitra');
        $type = $this->input->post('type');
		$alamat_mitra = $this->input->post('alamat_mitra');
		$no_telepon = $this->input->post('no_telepon');

        $ArrInsert = array(
        'nama_mitra' => $nama_mitra,
        'type' => $type,
		'alamat_mitra' => $alamat_mitra,
		'no_telepon' => $no_telepon,
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

	public function edit($id){
		$title['page_title']       = 'Edit Data mitra';
		$this->load->model('model_mitra');
		$data['mitra'] = $this->model_mitra->get_mitra($id);

		$this->load->view('backend/template/meta', $title);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/mitra/edit', $data);
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function proses_edit_data($id)
	{
		$this->load->model('model_mitra');
		$this->model_mitra->proses_edit($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diubah</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
		redirect('admin/mitra/index');
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('mitra');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil dihapus</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url('admin/mitra/index'));
	}

	public function detail(){
		$data['page_title']       = 'Detail Data mitra';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/mitra/detail');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function print()
    {
		$this->load->model('model_mitra');
        $data['mitra'] = $this->model_mitra->tampilData()->result();
		

		$this->load->view('backend/mitra/print', $data);
    } 

	public function search()
    {
		$data['page_title']       = ' Data Mitra';
		$this->load->model('model_mitra');
        $keyword = $this->input->post('keyword');
        $data['mitra'] = $this->model_mitra->get_keyword($keyword);

		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/mitra/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
    }
}
?>