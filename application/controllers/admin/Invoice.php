<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
	
	public function index()
	{
		$this->load->model('model_login');
		$this->model_login->keamanan();
		
		$data['page_title']       = 'Daftar Invoice';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/invoice/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function tambah(){
		$data['page_title']       = 'Tambah Data Invoice';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/invoice/tambah');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function edit(){
		$data['page_title']       = 'Edit Data Invoice';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/invoice/edit');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function hapus(){
		$data['page_title']       = 'Hapus Data Invoice';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/invoice/hapus');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function detail(){
		$data['page_title']       = 'Hapus Data Invoice';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/invoice/detail');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
}
?>