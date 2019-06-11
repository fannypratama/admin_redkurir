<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_katalog');
		$this->load->model('M_Pelanggan');
		function convRupiah($angka){
			$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
			return $hasil_rupiah;
		}
	}

	public function edit_katalog2($id)
	{
		$id = $this->input->post('id_barang');

		$insert = $this->M_katalog->update(array(
			'nama_barang' => $this->input->post('nm_brg'), 
			'harga_barang' => $this->input->post('hrg_brg'), 
			'Kategori' => $this->input->post('ktgr_brg'),
			'stok_barang' => $this->input->post('stok_barang'),
			'gambar_barang' => $this->input->post('gmb_barang')
		), $id);
		redirect('Welcome/katalog');
	}

	public function edit_pelanggan2($id)
	{
		$id = $this->input->post('id_pelanggan');
		$insert = $this->M_Pelanggan->update(array(
			'username' => $this->input->post('username'), 
			'email' => $this->input->post('email'), 
			'password' => $this->input->post('password'),
			'nama_pelanngan' => $this->input->post('nama_pelanggan'),
			'Wa' => $this->input->post('wa'),
			'Alamat' => $this->input->post('alamat'),
			'kecamatan' => $this->input->post('kecamatan'),
			'kode_pos' => $this->input->post('kode_pos')
		), $id);
		redirect('Welcome/pelanggan');
	}

	public function edit_katalog($id){
		if($this->input->post('submit')){
			if($this->M_katalog->validation("update")){
				$this->M_katalog->edit($id);
				redirect('welcome/katalog');
			}
		}

		$data['katalog'] = $this->M_katalog->view_by($id);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/edit_katalog', $data);
		$this->load->view('templates/footer');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('templates/footer');
	}

	public function hapus_katalog($id){
		$this->M_katalog->delete($id);
		redirect('welcome/katalog');
	}

	public function katalog()
	{
		$data['katalog'] = $this->M_katalog->view();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/Katalog', $data);
		$this->load->view('templates/footer');
		// $data['katalog'] = $this->M_katalog->view();
	}

	public function tambah_katalog()
	{
		$data['katalog'] = $this->M_katalog->view();
		if($this->input->post('submit')){
			if($this->M_katalog->validation("save")){
				$this->M_katalog->save();
				redirect('welcome/katalog');
			}
		}

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/Katalog', $data);
		$this->load->view('templates/footer');
	}

	public function hapus_pelanggan($id)
	{
		$this->M_Pelanggan->delete($id);
		redirect('welcome/pelanggan');
	}

	public function edit_pelanggan($id)
	{
		if($this->input->post('submit')){
			if($this->M_Pelanggan->validation("update")){
				$this->M_Pelanggan->edit($id);
				redirect('welcome/pelanggan');
			}
		}

		$data['pelanggan'] = $this->M_Pelanggan->view_by($id);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/edit_pelanggan', $data);
		$this->load->view('templates/footer');
	}

	public function pelanggan()
	{
		$data['pelanggan'] = $this->M_Pelanggan->view();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/Pelanggan', $data);
		$this->load->view('templates/footer');
	}



}
