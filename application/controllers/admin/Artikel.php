<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	
	public function tambah()
	{
    $data['page_title']       = 'Tambah Data';
	$this->load->view('backend/template/meta', $data);
	$this->load->view('backend/template/navbar');
	$this->load->view('backend/template/sidebar');
	$this->load->view('backend/template/header');
	$this->load->view('backend/artikel/tambah');
	$this->load->view('backend/template/footer');
	$this->load->view('backend/template/js');
	}
}
