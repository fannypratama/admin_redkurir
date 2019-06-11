<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class M_katalog extends CI_Model{

	public function update($data=array(),$id){
		$this->db->where('id_barang', $id);
		$this->db->update('tb_barang', $data);
	}

	public function view_by($id){
		$this->db->where('id_barang', $id);
		return $this->db->get('tb_barang')->row();
	}

	public function delete($id){
		$this->db->where('id_barang', $id);
		$this->db->delete('tb_barang');
	}

	public function view(){
		return $this->db->get('tb_barang')->result();
		//$query = $this->db->query("SELECT * FROM news ORDER BY id DESC");
		//$this->db->order_by("judul","tanggal","author","isi","kategori","views");
		//return $this->db->get('news')->result();
	}

public function validation($mode){
		$this->load->library('form_validation');
		if($mode == "save")
			$this->form_validation->set_rules('nm_brg', 'nm_brg', 'required');
			$this->form_validation->set_rules('hrg_brg', 'hrg_brg', 'required');
			$this->form_validation->set_rules('ktgr_brg', 'ktgr_brg', 'required');
			$this->form_validation->set_rules('stok_brg', 'stok_brg', 'required');
			$this->form_validation->set_rules('stok_brg', 'gmb_barang');
			if($this->form_validation->run())
				return TRUE;
			else
				return FALSE;
	}
	public function save(){
		$data = array(
			'nama_barang' => $this->input->post('nm_brg'), 
			'harga_barang' => $this->input->post('hrg_brg'), 
			'Kategori' => $this->input->post('ktgr_brg'),
			'stok_barang' => $this->input->post('stok_brg')
		);

		$this->db->insert('tb_barang', $data);
	}
}
?>