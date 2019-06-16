<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class M_order extends CI_Model{
	public function edit($id){
		$data = array( 
			'id_barang' => $this->input->post('id_brg'), 
			'id_pelanngan' => $this->input->post('id_pelanngan'),
			'tanggal_pembelian' => $this->input->post('tanggal_pembelian'),
			'Status' => $this->input->post('Status'),
			'total_pembelian' => $this->input->post('total_pembelian'),
			// 'gambar_barang' => $this->input->post('gbr_brg')
		);

		$this->db->where('id_pembelian', $id);
		$this->db->update('pembelian', $data);
	}

	public function view_by($id){
		$this->db->where('id_pembelian', $id);
		return $this->db->get('pembelian')->row();
	}

	public function delete($id){
		$this->db->where('id_pembelian', $id);
		$this->db->delete('pembelian');
	}

	public function view(){
		return $this->db->get('pembelian')->result();
		//$query = $this->db->query("SELECT * FROM news ORDER BY id DESC");
		//$this->db->order_by("judul","tanggal","author","isi","kategori","views");
		//return $this->db->get('news')->result();
	}

public function validation($mode){
		$this->load->library('form_validation');
		if($mode == "save")
			$this->form_validation->set_rules('id_barang', 'id_barang', 'required');
			$this->form_validation->set_rules('id_pelanngan', 'id_pelanngan', 'required');
			$this->form_validation->set_rules('tanggal_pembelian', 'tanggal_pembelian', 'required');
			$this->form_validation->set_rules('status', 'status', 'required');
			$this->form_validation->set_rules('total_pembelian', 'total_pembelian', 'required');
			if($this->form_validation->run())
				return TRUE;
			else
				return FALSE;
	}
	public function save(){
		$data = array(
			'id_barang' => $this->input->post('id_brg'), 
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'tanggal_pembelian' => $this->input->post('tanggal_pembelian'),
			'status' => $this->input->post('status'),
			'total_pembelian' => $this->input->post('total_pembelian')
		);

		$this->db->insert('pembelian', $data);
	}

	public function getOrder()
	{
		$this->db->select('*');
		$this->db->from('pembelian');
		$query = $this->db->get();
		return $query->result();
	}

	public function getBarang()
	{
		$this->db->select('*');
		$this->db->from('tb_barang');
		$query = $this->db->get();
		return $query->result();
	}

	public function getPelanngan()
	{
		$this->db->select('*');
		$this->db->from('pelanggan');
		$query = $this->db->get();
		return $query->result();
	}

	public function saveOrder()
		{
		$post = $this->input->post();
		$this->id_barang = $post["id_brg"];
		$this->id_pelanggan = $post["id_plng"];
		$this->tanggal_pembelian = date("Y-m-d H:i:s");
		$this->status = $post["status"];
		$this->total_pembelian = $post["total"];
		$this->db->insert('pembelian', $this);
	}
}
?>