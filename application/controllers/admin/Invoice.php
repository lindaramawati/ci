<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
	
	public function index()
	{
		$this->load->model('model_login');
		$this->model_login->keamanan();
		
		$data['page_title']       = 'Daftar Invoice';
		$this->load->model('model_invoice');
		$data['invoice']= $this->model_invoice->tampilData()->result();

		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/invoice/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function tambah(){
		$data['page_title']       = 'Tambah Data Invoice';
		$this->load->model('model_pesanan');
		$this->load->model('model_invoice');
		$data['pelanggan'] = $this->model_pesanan->tampilData()->result();
		$data['invoice'] = $this->model_invoice->tampilData()->result();

		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/invoice/tambah');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
	public function proses_tambah(){

		$this->load->model('model_invoice', 'admin');
		$kode_terakhir = $this->admin->getMax('invoice', 'id');
        $kode_tambah = substr($kode_terakhir, -6, 6);
        $kode_tambah++;
        $number = str_pad($kode_tambah, 6, '0', STR_PAD_LEFT);
        $data['id'] = 'P' . $number;


		$nama_mitra = $this->input->post('nama_mitra');
        $jumlah_pengiriman = $this->input->post('jumlah_pengiriman');
		$alamat = $this->input->post('alamat');
		$tanggal_pengiriman = $this->input->post('tanggal_pengiriman');


        $ArrInsert = array(
        'nama_mitra' => $nama_mitra,
        'jumlah_pengiriman' => $jumlah_pengiriman,
		'alamat' => $alamat,
		'tanggal_pengiriman' => $tanggal_pengiriman,
        );

        $this->db->insert('invoice', $ArrInsert);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil disimpan</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect(base_url('admin/invoice/index'));
		
	}

	public function edit($id){
		$data['page_title']       = 'Edit Data Invoice';
		$this->load->model('model_invoice');
		$this->load->model('model_pesanan');
		$data['pelanggan'] = $this->model_pesanan->tampilData()->result();
		$data['invoice'] = $this->model_invoice->get_invoice($id);
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/invoice/edit');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
	public function proses_edit_data($id)
	{
		$this->load->model('model_invoice');

		$this->model_invoice->proses_edit($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diubah</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
		redirect('admin/invoice/index');
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('invoice');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil dihapus</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url('admin/invoice/index'));
	}
	
	public function detail($id = null){
			$data['page_title']       = 'Invoice';
			$this->load->model('model_invoice');
			$this->load->model('model_pesanan');
			// $data['mitra'] = $this->model_invoice->get_mitra();
			$where = array('id' => $id);
			// $this->load->model('MKegiatanCRUD');
			$data['mitra'] = $this->model_invoice->halamanUpdate($where, 'invoice')->result();
			$where = array('id' => $id);
			// $this->load->model('MKegiatanCRUD');
			$data['mitra'] = $this->model_invoice->halamanUpdate($where, 'invoice')->result();
			$where = array('id' => $id);
			$data['produk'] = $this->model_pesanan->halamanUpdate($where, 'pesanan')->result();
			
			
			$this->load->view('backend/template/meta', $data);
			$this->load->view('backend/template/navbar');
			$this->load->view('backend/template/sidebar');
			$this->load->view('backend/template/header');
			$this->load->view('backend/invoice/detail', $data);
			$this->load->view('backend/template/footer');
			$this->load->view('backend/template/js');
		}

		public function print()
		{
			$this->load->model('model_invoice');
			$data['invoice'] = $this->model_invoice->tampilData()->result();
			
	
			$this->load->view('backend/invoice/print', $data);
		} 

    public function search()
    {
		$data['page_title']       = ' Data Invoice';
		$this->load->model('model_invoice');
        $keyword = $this->input->post('keyword');
        $data['invoice'] = $this->model_invoice->get_keyword($keyword);

		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/invoice/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
    }
}
?>
