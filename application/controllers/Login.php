<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}							

	public function index()
	{
		$this->load->view('login/index');
		// $this->load->view('templates/header');
		// $this->load->view('templates/footer');
		// $this->load->view('templates/sidebar');
		
	}

	public function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password 
		);
		$cek = $this->M_login->cek_login("login", $where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username, 
				'status' => "login"
			);

			$this->session->set_userdata($data_session);
			redirect(base_url("Welcome"));
		}else{
			echo "Username dan Password salah!";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url("Login"));
	}

}
?>
