<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class M_ongkir extends CI_Model{
	public function edit($id){
		$data = array(
			'id_ongkir' => $this->input->post('id_ongkir'), 
			'Kecamatan' => $this->input->post('Kecamatan'), 
			'kode_pos' => $this->input->post('kode_pos'),
			'Tarif' => $this->input->post('Tarif'),
			);

		$this->db->where('id_ongkir', $id);
		$this->db->update('ongkir', $data);
	}

	public function view_by($id){
		$this->db->where('id_ongkir', $id);
		return $this->db->get('ongkir')->row();
	}

	public function delete($id){
		$this->db->where('id_ongkir', $id);
		$this->db->delete('ongkir');
	}

	public function view(){
		return $this->db->get('ongkir')->result();
		//$query = $this->db->query("SELECT * FROM news ORDER BY id DESC");
		//$this->db->order_by("judul","tanggal","author","isi","kategori","views");
		//return $this->db->get('news')->result();
	}

public function validation($mode){
		$this->load->library('form_validation');
		if($mode == "save")
			$this->form_validation->set_rules('id_ongkir', 'id_ongkir', 'required');
			$this->form_validation->set_rules('Kecamatan', 'Kecamatan', 'required');
			$this->form_validation->set_rules('kode_pos', 'kode_pos', 'required');
			$this->form_validation->set_rules('Tarif', 'Tarif', 'required');
			if($this->form_validation->run())
				return TRUE;
			else
				return FALSE;
	}
	public function save(){
		$data = array(
			'id_ongkir' => $this->input->post('id_ongkir'), 
			'Kecamatan' => $this->input->post('Kecamatan'), 
			'kode_pos' => $this->input->post('kode_pos'),
			'Tarif' => $this->input->post('Tarif')
		);

		$this->db->insert('ongkir', $data);
	}
}
?>