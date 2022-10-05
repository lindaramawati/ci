<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	
	public function index()
	{
		$data['page_title']       = 'Daftar Order';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/order/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function tambah(){
		$data['page_title']       = 'Tambah Data Order';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/order/tambah');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function edit(){
		$data['page_title']       = 'Edit Data Order';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/order/edit');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function hapus(){
		$data['page_title']       = 'Hapus Data Order';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/order/hapus');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function detail(){
		$data['page_title']       = 'Hapus Data Order';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/order/detail');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
}
?>