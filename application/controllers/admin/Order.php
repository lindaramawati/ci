<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	
	public function index()
	{
		$this->load->model('model_login');
		$this->model_login->keamanan();
		
		$data['page_title']       = 'Daftar Order';
		$this->load->model('model_order');
		$data['order']= $this->model_order->tampilData()->result();
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/order/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
	public function tambah(){
		$data['page_title']       = 'Tambah Data order';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/order/tambah');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
	public function proses_tambah(){

		$this->load->model('model_order', 'admin');
		$kode_terakhir = $this->admin->getMax('order', 'id_order');
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

        $this->db->insert('order', $ArrInsert);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil disimpan</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect(base_url('admin/order/index'));
		
	}

	public function edit($id){
		$title['page_title']       = 'Edit Data order';
		$this->load->model('model_order');
		$data['order'] = $this->model_order->get_order($id);

		$this->load->view('backend/template/meta', $title);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/order/edit', $data);
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function proses_edit_data($id)
	{
		$this->load->model('model_order');
		$this->model_order->proses_edit($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diubah</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
		redirect('admin/order/index');
	}

	public function hapus($id_order){
		$this->db->where('id_order', $id_order);
		$this->db->delete('order');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil dihapus</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url('admin/order/index'));
	}

	public function detail(){
		$data['page_title']       = 'Detail Data order';
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