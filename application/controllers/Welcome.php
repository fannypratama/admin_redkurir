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
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
		$this->load->model('M_katalog');
		$this->load->model('M_ongkir');
		$this->load->model('M_Pelanggan');
		function convRupiah($angka){
			$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
			return $hasil_rupiah;
		}
	}
		//katalog
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
		$this->load->view('admin/Katalog', $data);
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
	//katalog

	//pelanggan
	public function hapus_pelanggan($id)
	{
		$this->M_Pelanggan->delete($id);
		redirect('welcome/pelanggan');
	}

	public function pelanggan()
	{
		$data['pelanggan'] = $this->M_Pelanggan->view();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/pelanggan', $data);
		$this->load->view('templates/footer');
	}

	public function edit_data_pelanggan($id)
	{
		$where = array('id_pelanngan' => $id);
		$data['pelanggan'] = $this->M_Pelanggan->edit_data_pelanggan($where, 'pelanggan')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/edit_pelanggan', $data);
		$this->load->view('templates/footer');
	}
		public function update_pelanggan(){
		$username= $this->input->post('username');
		$email= $this->input->post('email');
		$password= $this->input->post('password');
		$nama_pelanngan= $this->input->post('nama_pelanngan');
		$telp= $this->input->post('telp');
		$Alamat= $this->input->post('Alamat');
		$kecamatan= $this->input->post('kecamatan');
		$kode_pos= $this->input->post('kode_pos');

		$data = array(
			'username' => $username,
			'email'=> $email,
			'password'=> $password, 
			'nama_pelanngan' => $nama_pelanngan,
			'telp'=> $telp,
			'Alamat'=> $Alamat,
			'kecamatan'=> $kecamatan, 
			'kode_pos' => $kode_pos
		);

		$where = array(
		'id_pelanngan' => $id
		);

		$this->M_Pelanggan->update_pelanggan($where,$data,'pelanggan');
		redirect('welcome/pelanggan');
	}
	//pelanggan

	//ongkir	
public function ongkir(){
		$data['ongkir'] = $this->M_ongkir->view();
		$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
		$this->load->view('admin/ongkir/tambah_ongkir', $data);
		$this->load->view('templates/footer');
	}
	public function form_ongkir(){
		$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
		$this->load->view('admin/ongkir/form_ongkir');
		$this->load->view('templates/footer');
	}
	public function tambah_ongkir(){
		if($this->input->post('submit')){
			if($this->M_ongkir->validation("save")){
				$this->M_ongkir->save();
				redirect('welcome/ongkir');
			}
		}

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/ongkir/ongkir');
		$this->load->view('templates/footer');
	}
	
	public function hapus_ongkir($id){
		$this->M_ongkir->delete($id);
		redirect('welcome/ongkir');
	}

	public function edit($id)
	{
		$where = array('id_ongkir' => $id);
		$data['ongkir'] = $this->M_ongkir->edit_data($where, 'ongkir')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/ongkir/edit_ongkir', $data);
		$this->load->view('templates/footer');
	}

	public function update_baru_pelanggan(){
		$id= $this->input->post('id_pelanngan');
		$username= $this->input->post('username');
		$email= $this->input->post('email');
		$password= $this->input->post('password');
		$nama_pelanngan= $this->input->post('nama_pelanngan');
		$telp= $this->input->post('telp');
		$alamat= $this->input->post('Alamat');
		$kecamatan= $this->input->post('kecamatan');
		$kode_pos= $this->input->post('kode_pos');

		$data = array(
			'username' => $username,
			'email' => $email,
			'password' => $password,
			'nama_pelanngan' => $nama_pelanngan,
			'telp' => $telp,
			'Alamat' => $alamat,
			'kecamatan' => $kecamatan,
			'kode_pos' => $kode_pos,
			 );

		$where = array(
		'id_pelanngan' => $id
		);

		$this->M_Pelanggan->update_data($where,$data,'pelanggan');
		redirect('welcome/pelanggan');
	}

	public function update(){
		$id= $this->input->post('id_ongkir');
		$Kecamatan= $this->input->post('Kecamatan');
		$kode_pos= $this->input->post('kode_pos');
		$Tarif= $this->input->post('Tarif');

		$data = array(
			'Kecamatan' => $Kecamatan,
			'kode_pos'=> $kode_pos,
			'Tarif'=> $Tarif );

		$where = array(
		'id_ongkir' => $id
		);

		$this->M_ongkir->update_data($where,$data,'ongkir');
		redirect('welcome/ongkir');
	}
	
}
	