<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public $session;
	public $uri;
	public $input;
	public $crud;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud');
	}

	public function index()
	{
		$this->load->model('crud');
		$data['buku'] = $this->crud->getDataBuku();
		$data['content'] = $this->load->view('tokobuku/index', $data, TRUE);

		$this->load->view('layouts/layout', $data);
	}

	public function cari()
	{
		$judul = $this->input->post('keyword'); // Ambil kata kunci dari form
		$data['buku'] = $this->crud->cari($judul);
		$data['content'] = $this->load->view('tokobuku/index', $data, TRUE);

		$this->load->view('layouts/layout', $data);
	}
	public function dataBuku()
	{
		$this->load->model('crud');
		$data['buku'] = $this->crud->getDataBuku();
		$data['content'] = $this->load->view('tokobuku/admin/databuku', $data, TRUE);

		$this->load->view('layouts/layout', $data);
	}

	public function addBuku()
	{
		$add['id_buku'] = $this->input->post('id_buku');
		$add['kategori'] = $this->input->post('kategori');
		$add['nama_buku'] = $this->input->post('nama_buku');
		$add['harga'] = $this->input->post('harga');
		$add['stok'] = $this->input->post('stok');
		$add['penerbit'] = $this->input->post('penerbit');

		$this->crud->addBuku('tb_buku', $add);

		$this->session->set_flashdata('success', 'Data berhasil ditambahkan.');

		redirect(site_url('Welcome/dataBuku'));
	}

	public function updateBuku()
	{
		$id_buku = $this->input->post('id_buku');

		$update['kategori'] = $this->input->post('kategori');
		$update['nama_buku'] = $this->input->post('nama_buku');
		$update['harga'] = $this->input->post('harga');
		$update['stok'] = $this->input->post('stok');
		$update['penerbit'] = $this->input->post('penerbit');

		$this->crud->updateBuku('tb_buku', 'id_buku', $id_buku, $update);

		$this->session->set_flashdata('primary', 'Data berhasil diedit.');

		redirect(site_url('Welcome/dataBuku'));
	}

	public function deleteBuku()
	{
		$dlt = $this->uri->segment(3);

		$this->crud->deleteBuku('tb_buku', 'id_buku', $dlt);

		$this->session->set_flashdata('danger', 'Data berhasil dihapus.');

		redirect(site_url('Welcome/dataBuku'));
	}

	public function dataPenerbit()
	{
		$this->load->model('crud');
		$data['penerbit'] = $this->crud->getDataPenerbit();
		$data['content'] = $this->load->view('tokobuku/admin/datapenerbit', $data, TRUE);

		$this->load->view('layouts/layout', $data);
	}

	public function addPenerbit()
	{
		$add['id_penerbit'] = $this->input->post('id_penerbit');
		$add['nama'] = $this->input->post('nama');
		$add['alamat'] = $this->input->post('alamat');
		$add['kota'] = $this->input->post('kota');
		$add['telp'] = $this->input->post('telp');

		$this->crud->addPenerbit('tb_penerbit', $add);

		$this->session->set_flashdata('success', 'Data berhasil ditambahkan.');

		redirect(site_url('Welcome/dataPenerbit'));
	}

	public function updatePenerbit()
	{
		$id_penerbit = $this->input->post('id_penerbit');

		$update['nama'] = $this->input->post('nama');
		$update['alamat'] = $this->input->post('alamat');
		$update['kota'] = $this->input->post('kota');
		$update['telp'] = $this->input->post('telp');

		$this->crud->updatePenerbit('tb_penerbit', 'id_penerbit', $id_penerbit, $update);

		$this->session->set_flashdata('primary', 'Data berhasil diedit.');

		redirect(site_url('Welcome/dataPenerbit'));
	}

	public function deletePenerbit()
	{
		$dlt = $this->uri->segment(3);

		$this->crud->deletePenerbit('tb_penerbit', 'id_penerbit', $dlt);

		$this->session->set_flashdata('danger', 'Data berhasil dihapus.');

		redirect(site_url('Welcome/dataPenerbit'));
	}

	public function pengadaan()
	{
		$this->load->model('crud');
		$data['pengadaan'] = $this->crud->getBukuPengadaan();
		$data['content'] = $this->load->view('tokobuku/pengadaan', $data, TRUE);

		$this->load->view('layouts/layout', $data);
	}
}
