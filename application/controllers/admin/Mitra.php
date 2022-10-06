<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {
	
	public function index()
	{
		$this->load->model('model_login');
		$this->model_login->keamanan();

		$data['page_title']       = 'Daftar Mitra';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/mitra/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function tambah()
	{
    $data['page_title']       = 'Tambah Data Mitra';
	$this->load->view('backend/template/meta', $data);
	$this->load->view('backend/template/navbar');
	$this->load->view('backend/template/sidebar');
	$this->load->view('backend/template/header');
	$this->load->view('backend/mitra/tambah');
	$this->load->view('backend/template/footer');
	$this->load->view('backend/template/js');
	}

	public function edit(){
		$data['page_title']       = 'Edit Data Mitra';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/mitra/edit');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function hapus(){
		$data['page_title']       = 'Hapus Data Mitra';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/mitra/hapus');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
}
