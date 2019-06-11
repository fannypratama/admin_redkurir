
<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class M_Pelanggan extends CI_Model{

	public function update($data=array(),$id){

		$this->db->where('id_pelanggan', $id);
		$this->db->update('pelanggan', $data);
	}

	public function view_by($id){

		$this->db->where('kode_pos', $id);

		$this->db->where('id_pelanggan', $id);

		return $this->db->get('pelanggan')->row();
	}

	public function delete($id){

		$this->db->where('kode_pos', $id);

		$this->db->where('id_pelanggan', $id);

		$this->db->delete('pelanggan');
	}

	public function view(){
		return $this->db->get('pelanggan')->result();
		//$query = $this->db->query("SELECT * FROM news ORDER BY id DESC");
		//$this->db->order_by("judul","tanggal","author","isi","kategori","views");
		//return $this->db->get('news')->result();
	}

public function validation($mode){

			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_rules('nama_pelanngan', 'nama_pelanggan', 'required');
			$this->form_validation->set_rules('wa', 'Wa', 'required');
			$this->form_validation->set_rules('Alamat', 'alamat', 'required');
			$this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
			$this->form_validation->set_rules('kode_pos', 'kode_pos', 'required');
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

		$this->db->insert('pelanggan', $data);
	}
}
?>