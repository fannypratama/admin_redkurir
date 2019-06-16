<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model("M_order");
		
	}

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

	public function index()
	{
		$data["order"] = $this->M_order->getOrder();
		$data["barang"] = $this->M_order->getBarang();
		$data["pelanngan"] = $this->M_order->getPelanngan();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/Order', $data);
		$this->load->view('templates/footer');
	}

	function add()
	{
		$info = $this->M_order;
		$info->saveOrder();
		echo "<script>alert('Data berhasil disimpan.')</script>";	
		redirect(base_url('order'));
	}
	

}
