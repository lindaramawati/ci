<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		$data['page_title']       = 'Dashboard Awal';
		$this->load->view('dashboard/template/meta', $data);
		$this->load->view('dashboard/template/navbar');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/index');
		$this->load->view('dashboard/template/footer');
		$this->load->view('dashboard/template/js');
	}
}