<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
	
	public function index()
	{
		$data['page_title']       = 'Invoice';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/invoice/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
}
