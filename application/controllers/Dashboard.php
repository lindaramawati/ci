<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		// jika ingin membuat controler baru jangan lupa menambahkan 2 kode dibawah ini 
		$this->load->model('model_login');
		$this->model_login->keamanan();
		
		$data['page_title']       = 'Dashboard Awal';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/dashboard/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');

	}
}