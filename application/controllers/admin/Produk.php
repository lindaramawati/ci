<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_produk' , 'admin');
	}
	
	public function index()
	{
		$this->load->model('model_login');
		$this->model_login->keamanan();
		
		$data['page_title']       = 'Daftar Produk';
		$this->load->model('model_produk');
		$data['produk']= $this->model_produk->tampilData();
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/produk/index', $data);
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}
	private function _validasi()
    {
        $this->form_validation->set_rules('kode_produk', 'Kode Produk', 'required|trim|max_length[4]|numeric');
        $this->form_validation->set_rules('nama_produk', 'Nama produk', 'required|trim');
		$this->form_validation->set_rules('type', 'Type produk', 'trim|alpha');
        $this->form_validation->set_rules('jenis', 'Jenis produk', 'required');
        $this->form_validation->set_rules('merk_produk', 'Merk produk', 'trim');
        $this->form_validation->set_rules('seri_produk', 'Seri produk', 'trim');
    }
	public function tambah()
    {
		$this->load->model('model_produk');
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "ATK";
            // $data['jenis'] = $this->model_produk->get('jenis');
			// $data['jenis'] = $this->model_produk->tampilJenis()->result();
			// data select option
			$data['jenis'] = $this->model_produk->get('kategori');

            // Mengenerate ID produk
            // $kode_terakhir = $this->model_produk->getMax('produk', 'id_produk');
            // $kode_tambah = substr($kode_terakhir, -6, 6);
            // $kode_tambah++;
            // $number = str_pad($kode_tambah, 6, '0', STR_PAD_LEFT);
            // $data['id_produk'] = 'B' . $number;

            // $data['kode_barang'] = $number;
            // $kode = $this->admin->getMax('barang', 'kode_barang');
            // $count = mysqli_num_rows($kode);
			$data['page_title']       = 'Tambah Data Produk';
			$this->load->view('backend/template/meta', $data);
			$this->load->view('backend/template/navbar');
			$this->load->view('backend/template/sidebar');
			$this->load->view('backend/template/header');
			$this->load->view('backend/produk/tambah', $data);
			$this->load->view('backend/template/footer');
			$this->load->view('backend/template/js');

            // $this->template->load('backend/produk/tambah', 'produk/tambah', $data);
			
        } else {
            $input = $this->input->post(null, true);
            $insert = $this->admin->insert('produk', $input);

            if ($insert) {
                // set_pesan('data berhasil disimpan');
                redirect('produk');
            } else {
                // set_pesan('gagal menyimpan data');
                redirect('produk/tambah');
            }
        }
    }
	// public function tambah(){
	// 	$this->load->model('model_produk');
	// 	$data['jenis'] = $this->model_produk->tampilJenis()->result();
	
	



		// $data['page_title']       = 'Tambah Data Produk';
		// $this->load->view('backend/template/meta', $data);
		// $this->load->view('backend/template/navbar');
		// $this->load->view('backend/template/sidebar');
		// $this->load->view('backend/template/header');
		// $this->load->view('backend/produk/tambah');
		// $this->load->view('backend/template/footer');
		// $this->load->view('backend/template/js');
	// }
	public function proses_tambah(){

		$this->load->model(['model_produk']);
		// $jenis= $this->model_produk->datakategori();
		

		$kode_produk = $this->input->post('kode_produk');
        $nama_produk = $this->input->post('nama_produk');
        $id_produk = $this->input->post('id_produk');
		$type = $this->input->post('type');
		$jenis = $this->input->post('jenis');
        $merk = $this->input->post('merk');
		$seri = $this->input->post('seri');
		$kode = $this->input->post('kode');

		

        $ArrInsert = array(
        'kode_produk' => $kode_produk,
        'nama_produk' => $nama_produk,
        'id_produk' => $id_produk,
		'type' => $type,
		'jenis' => $jenis,
		'merk_produk' => $merk,
		'seri_produk' => $seri,
		'kode' => $kode
        );

        $this->db->insert('produk', $ArrInsert);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil disimpan</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect(base_url('admin/produk/index'));
		
	}

	public function edit($id){
		$title['page_title']       = 'Edit Data Produk';
		$this->load->model('model_produk');
		$data['produk'] = $this->model_produk->get_produk($id);

		$this->load->view('backend/template/meta', $title);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/produk/edit', $data);
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function proses_edit_data($id)
	{
		$this->load->model('model_produk');
		$this->model_produk->proses_edit($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diubah</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
		redirect('admin/produk/index');
	}

	public function hapus($id_produk){
		$this->db->where('id_produk', $id_produk);
		$this->db->delete('produk');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil dihapus</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url('admin/produk/index'));
	}

	public function detail($id_produk){
		$data['page_title']       = 'Detail Data Produk';
		$this->load->model('model_produk');
		$data['produk']= $this->model_produk->tampilData()->result();
	
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/produk/detail', $data);
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
	}

	public function print()
    {
		$this->load->model('model_produk');
        $data['produk'] = $this->model_produk->tampilData();
		

		$this->load->view('backend/produk/print', $data);
    } 

	public function search()
    {
		$data['page_title']       = ' Data Produk';
		$this->load->model('model_produk');
        $keyword = $this->input->post('keyword');
        $data['produk'] = $this->model_produk->get_keyword($keyword);

		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/template/header');
		$this->load->view('backend/produk/index');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/js');
    }
}
?>