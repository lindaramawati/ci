<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$data['page_title']       = 'Login';
		$this->load->view('backend/login/meta', $data);
		$this->load->view('backend/login/index');
		$this->load->view('backend/login/js');
	}
}
