
<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class M_Pelanggan extends CI_Model{

	public function update($data=array(),$id){

		$this->db->where('id_pelanngan', $id);
		$this->db->update('pelanggan', $data);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function view_by($id){

		$this->db->where('id_pelanngan', $id);
		return $this->db->get('pelanggan')->row();
	}

	public function delete($id){

		$this->db->where('id_pelanngan', $id);

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
			'username' => $this->input->post('username'), 
			'email' => $this->input->post('email'), 
			'password' => $this->input->post('password'),
			'nama_pelanngan' => $this->input->post('nama_pelanggan'),
			'telp' => $this->input->post('telp'),
			'Alamat' => $this->input->post('alamat'),
			'kecamatan' => $this->input->post('kecamatan'),
			'kode_pos' => $this->input->post('kode_pos')
		);
		redirect('Welcome/pelanggan');

		$this->db->insert('pelanggan', $data);
	}
	function edit_data_pelanggan($where, $table){		
		return $this->db->get_where($table, $where);
	}
	function update_pelanggan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
?>