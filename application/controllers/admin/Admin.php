<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

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
		function convRupiah($angka){
			$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
			return $hasil_rupiah;
		}
	}							

	public function index()
	{
		$this->load->view('admin/theme/header');
		$this->load->view('admin/vIndex');
		$this->load->view('admin/theme/footer');
	}
	public function katalog()
	{
		$data['katalog'] = $this->M_katalog->view();
		$this->load->view('admin/Katalog');
	}

	public function kategori(){
		$this->load->view('admin/theme/header');
		$this->load->view('admin/kategori/vTable_kategori');
		$this->load->view('admin/theme/footer');			
	}

	public function beranda(){
		$this->load->view('admin/theme/header');
		$this->load->view('admin/beranda/vIndex');
		$this->load->view('admin/theme/footer');	
	}

	public function edit_khimar($id){
		if($this->input->post('submit')){
			if($this->M_khimar->validation("update")){
				$this->M_khimar->edit($id);
				redirect('admin/khimar');
			}
		}

		$data['khimar'] = $this->M_khimar->view_by($id);
		$this->load->view('admin/theme/header');
		$this->load->view('admin/khimar/edit_khimar', $data);
		$this->load->view('admin/theme/footer');		
	}

	public function lihat_khimar($id){
		$data['khimar'] = $this->M_khimar->view_by($id);
		$this->load->view('admin/theme/header');
		$this->load->view('admin/khimar/cek_khimar', $data);
		$this->load->view('admin/theme/footer');
	}

	public function hapus_khimar($id){
		$this->M_khimar->delete($id);
		redirect('admin/khimar');
	}

	public function khimar(){
				

		$data['khimar'] = $this->M_khimar->view();
		$this->load->view('admin/theme/header');
		$this->load->view('admin/khimar/table_khimar', $data);
		$this->load->view('admin/theme/footer');
	}

	public function form_khimar(){
		$this->load->view('admin/theme/header');
		$this->load->view('admin/khimar/form_khimar');
		$this->load->view('admin/theme/footer');
	}

	public function tambah_khimar(){
		if($this->input->post('submit')){
			if($this->M_khimar->validation("save")){
				$this->M_khimar->save();
				redirect('admin/khimar');
			}
		}

		$this->load->view('admin/theme/header');
		$this->load->view('admin/khimar/form_khimar');
		$this->load->view('admin/theme/footer');
	}

	public function artikel(){
		$data['artikel'] = $this->M_artikel->view();
		$this->load->view('admin/theme/header');
		$this->load->view('admin/artikel/table_artikel', $data);
		$this->load->view('admin/theme/footer');
	}
	public function form_artikel(){
		$this->load->view('admin/theme/header');
		$this->load->view('admin/artikel/form_artikel');
		$this->load->view('admin/theme/footer');
	}
	public function tambah_artikel(){
		if($this->input->post('submit')){
			if($this->M_artikel->validation("save")){
				$this->M_artikel->save();
				redirect('admin/artikel');
			}
		}

		$this->load->view('admin/theme/header');
		$this->load->view('admin/artikel/form_artikel');
		$this->load->view('admin/theme/footer');
	}
	public function edit_artikel($id){
		if($this->input->post('submit')){
			if($this->M_artikel->validation("update")){
				$this->M_artikel->edit($id);
				redirect('admin/artikel');
			}
		}

		$data['artikel'] = $this->M_artikel->view_by($id);
		$this->load->view('admin/theme/header');
		$this->load->view('admin/artikel/edit_artikel', $data);
		$this->load->view('admin/theme/footer');		
	}

	public function lihat_artikel($id){
		$data['artikel'] = $this->M_artikel->view_by($id);
		$this->load->view('admin/theme/header');
		$this->load->view('admin/artikel/cek_artikel', $data);
		$this->load->view('admin/theme/footer');
	}

	public function hapus_artikel($id){
		$this->M_artikel->delete($id);
		redirect('admin/artikel');
	}

}
