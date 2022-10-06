<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	
	public function index()
	{
		$this->load->model('model_login');
		$this->model_login->keamanan();
		
		$data['page_title']       = 'Daftar Produk';
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

	public function edit(){
		$data['page_title']       = 'Edit Data Produk';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/produk/edit');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function hapus(){
		$data['page_title']       = 'Hapus Data Produk';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/produk/hapus');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function detail(){
		$data['page_title']       = 'Hapus Data Produk';
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