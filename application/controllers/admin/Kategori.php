<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('model_produk' , 'admin');
	}

    public function index()
	{
		$this->load->model('model_login');
		$this->model_login->keamanan();

		
		
		$data['page_title']       = 'Daftar Kategori';
		$this->load->model('model_produk');
		$data['kategori']= $this->model_produk->datakategori()->result();
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/kategori/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
    public function tambah(){
		$data['page_title']       = 'Tambah Data Kategori';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/kategori/tambah');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
	public function proses_tambah(){

		$kode_kategori = $this->input->post('kode_kategori');
        $nama_kategori = $this->input->post('nama_kategori');

        $ArrInsert = array(
        'kode_kategori' => $kode_kategori,
        'nama_kategori' => $nama_kategori
        );

        $this->db->insert('kategori', $ArrInsert);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil disimpan</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect(base_url('admin/kategori/index'));
		
	}
    public function edit($id){
		$title['page_title']       = 'Edit Data Kategori';
		$this->load->model('model_produk');
		$data['kategori'] = $this->model_produk->get_kategori($id);

		$this->load->view('backend/template/meta', $title);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/kategori/edit', $data);
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function proses_edit_data($id)
	{
		$this->load->model('model_produk');
		$this->model_produk->proses_edit_kategori($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diubah</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
		redirect('admin/kategori/index');
	}

    
    public function hapus($id_kategori){
		$this->db->where('id_kategori', $id_kategori);
		$this->db->delete('kategori');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil dihapus</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url('admin/kategori/index'));
	}

	public function print()
		{
			$this->load->model('model_kategori');
			$data['kategori'] = $this->model_kategori->tampilData()->result();
			
	
			$this->load->view('backend/kategori/print', $data);
		} 

    public function search()
    {
		$data['page_title']       = ' Data kategori';
		$this->load->model('model_kategori');
        $keyword = $this->input->post('keyword');
        $data['kategori'] = $this->model_kategori->get_keyword($keyword);

		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/kategori/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
    }
}