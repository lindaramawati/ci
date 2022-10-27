<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	
	public function index()
	{
		$this->load->model('model_login');
		$this->model_login->keamanan();
		
		$data['page_title']       = 'Daftar Produk';
		$this->load->model('model_produk');
		$data['produk']= $this->model_produk->tampilData()->result();
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/produk/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
	public function tambah(){
		$data['page_title']       = 'Tambah Data Produk';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/produk/tambah');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
	public function proses_tambah(){

		$this->load->model('model_produk', 'admin');
		$kode_terakhir = $this->admin->getMax('produk', 'id_produk');
        $kode_tambah = substr($kode_terakhir, -6, 6);
        $kode_tambah++;
        $number = str_pad($kode_tambah, 6, '0', STR_PAD_LEFT);
        $data['id_produk'] = 'P' . $number;


		$kode_produk = $this->input->post('kode_produk');
        $nama_produk = $this->input->post('nama_produk');
		$type = $this->input->post('type');
		$stok = $this->input->post('stok');
        $merk = $this->input->post('merk');
		$seri = $this->input->post('seri');

        $ArrInsert = array(
        'kode_produk' => $kode_produk,
        'nama_produk' => $nama_produk,
		'type' => $type,
		'stok' => $stok,
		'merk_produk' => $merk,
		'seri_produk' => $seri
        );

        $this->db->insert('produk', $ArrInsert);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil disimpan</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect(base_url('admin/produk/index'));
		
	}

	public function edit($id){
		$title['page_title']       = 'Edit Data Produk';
		$this->load->model('model_produk');
		$data['produk'] = $this->model_produk->get_produk($id);

		$this->load->view('backend/template/meta', $title);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/produk/edit', $data);
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function proses_edit_data($id)
	{
		$this->load->model('model_produk');
		$this->model_produk->proses_edit($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diubah</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
		redirect('admin/produk/index');
	}

	public function hapus($id_produk){
		$this->db->where('id_produk', $id_produk);
		$this->db->delete('produk');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil dihapus</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url('admin/produk/index'));
	}

	public function detail(){
		$data['page_title']       = 'Detail Data Produk';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/produk/detail');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
}
?>