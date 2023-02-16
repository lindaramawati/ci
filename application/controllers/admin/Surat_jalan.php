<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_jalan extends CI_Controller {
	
	public function index()
	{
		$this->load->model('model_login');
		$this->model_login->keamanan();
		
		$data['page_title']       = 'Daftar Surat Jalan';
		$this->load->model('model_suratjalan');
		$data['surat_jalan']= $this->model_suratjalan->tampilData()->result();


		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/surat_jalan/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function tambah(){
		$data['page_title']       = 'Tambah Data Surat Jalan';
		$this->load->model('model_suratjalan');
		$data['surat_jalan'] = $this->model_suratjalan->tampilData()->result();

		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/surat_jalan/tambah');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
	public function proses_tambah(){

		$this->load->model('model_suratjalan', 'admin');
		$kode_terakhir = $this->admin->getMax('surat_jalan', 'id_suratjalan');
        $kode_tambah = substr($kode_terakhir, -6, 6);
        $kode_tambah++;
        $number = str_pad($kode_tambah, 6, '0', STR_PAD_LEFT);
        $data['id_suratjalan'] = 'P' . $number;


		$metode_pengiriman = $this->input->post('metode_pengiriman');
		$nomer_kendaraan = $this->input->post('nomer_kendaraan');

        $ArrInsert = array(
		'metode_pengiriman' => $metode_pengiriman,
		'nomer_kendaraan' => $nomer_kendaraan,
        );

        $this->db->insert('surat_jalan', $ArrInsert);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil disimpan</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect(base_url('admin/surat_jalan/index'));
		
	}

	public function edit($id){
		$data['page_title']       = 'Edit Data Surat Jalan';
		$this->load->model('model_suratjalan');
		$data['surat_jalan'] = $this->model_suratjalan->get_suratjalan($id);
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/surat_jalan/edit');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
	public function proses_edit_data($id)
	{
		$this->load->model('model_suratjalan');
		$this->model_suratjalan->proses_edit($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diubah</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
		redirect('admin/surat_jalan/index');
	}

	public function hapus($id_suratjalan){
		$this->db->where('id_suratjalan', $id_suratjalan);
		$this->db->delete('surat_jalan');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil dihapus</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url('admin/surat_jalan/index'));
	}

	public function detail(){
		$data['page_title']       = 'Detail Data Surat Jalan';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/surat_jalan/detail');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function print()
    {
		$this->load->model('model_suratjalan');
        $data['suratjalan'] = $this->model_suratjalan->tampilData()->result();
		

		$this->load->view('backend/surat_jalan/print', $data);
    } 
	public function search()
    {
		$data['page_title']       = ' Data Surat Jalan';
		$this->load->model('model_suratjalan');
        $keyword = $this->input->post('keyword');
        $data['surat_jalan'] = $this->model_suratjalan->get_keyword($keyword);

		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/surat_jalan/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
    }
}
?>