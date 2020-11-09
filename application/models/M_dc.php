<?php 
class M_dc extends CI_Model{
	public function tampil_data(){
		 return $this->db->get('dc');
	}

	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function detail_data($id=null){
		$query = $this->db->get_where('dc',array('id' => $id))->row();
		return $query;
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('dc');
		$this->db->like('meter',$keyword);
		$this->db->or_like('tiket',$keyword);
		$this->db->or_like('ba',$keyword);
		

		return $this->db->get()->result();
	}
}
 ?>
