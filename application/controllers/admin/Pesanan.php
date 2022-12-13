<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {
	
	public function index()
	{
		$this->load->model('model_login');
		$this->model_login->keamanan();
		
		$data['page_title']       = 'Daftar Order';
		$this->load->model('model_pesanan');
		$data['pesanan']= $this->model_pesanan->tampilData()->result();
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/pesanan/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
	public function tambah(){
		$data['page_title']       = 'Tambah Data order';
		$this->load->model('model_mitra');
		$this->load->model('model_invoice');
		$data['pesanan'] = $this->model_invoice->tampilData()->result();
		$data['pelanggan'] = $this->model_mitra->tampilData()->result();
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/pesanan/tambah');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
	public function proses_tambah(){

		$this->load->model('model_pesanan', 'admin');
		$kode_terakhir = $this->admin->getMax('pesanan', 'id_order');
        $kode_tambah = substr($kode_terakhir, -6, 6);
        $kode_tambah++;
        $number = str_pad($kode_tambah, 6, '0', STR_PAD_LEFT);
        $data['id_order'] = 'P' . $number;


		$nama_mitra = $this->input->post('nama_mitra');
        $tanggal_pemesanan = $this->input->post('tanggal_pemesanan');
		$jumlah_pesanan = $this->input->post('jumlah_pesanan');
		$nama_produk = $this->input->post('nama_produk');

        $ArrInsert = array(
        'nama_mitra' => $nama_mitra,
        'tanggal_pemesanan' => $tanggal_pemesanan,
		'jumlah_pesanan' => $jumlah_pesanan,
		'nama_produk' => $nama_produk,
        );

        $this->db->insert('pesanan', $ArrInsert);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil disimpan</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect(base_url('admin/pesanan/index'));
		
	}

	public function edit($id){
		$title['page_title']       = 'Edit Data order';
		$this->load->model('model_pesanan');
		$data['pesanan'] = $this->model_pesanan->get_order($id);

		$this->load->view('backend/template/meta', $title);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/pesanan/edit', $data);
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function proses_edit_data($id)
	{
		$this->load->model('model_pesanan');
		$this->model_pesanan->proses_edit($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diubah</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
		redirect('admin/pesanan/index');
	}

	public function hapus($id_order){
		$this->db->where('id_order', $id_order);
		$this->db->delete('pesanan');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil dihapus</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url('admin/pesanan/index'));
	}

	public function detail($id_order){
		$data['page_title']       = 'Detail Data Pesanan';
		$this->load->model('model_pesanan');
		$data['pesanan']= $this->model_pesanan->tampilData()->result();
	
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/pesanan/detail', $data);
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function print()
    {
		$this->load->model('model_pesanan');
        $data['pesanan'] = $this->model_pesanan->tampilData()->result();
		

		$this->load->view('backend/pesanan/print', $data);
    } 

	public function search()
    {
		$data['page_title']       = ' Data Invoice';
		$this->load->model('model_pesanan');
        $keyword = $this->input->post('keyword');
        $data['pesanan'] = $this->model_pesanan->get_keyword($keyword);

		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/pesanan/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
    }
}
?>