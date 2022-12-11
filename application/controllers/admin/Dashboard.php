<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		$this->load->model('model_login');
		$this->model_login->keamanan();
		$data['mitra']=$this->db->query("SELECT * FROM mitra")->num_rows();
		$data['produk']=$this->db->query("SELECT * FROM produk")->num_rows();
		$data['invoice']=$this->db->query("SELECT * FROM invoice")->num_rows();
		$data['pesanan']=$this->db->query("SELECT * FROM pesanan")->num_rows();

		$data['page_title']       = 'Dashboard';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/dashboard/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
}
