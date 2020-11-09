<?php 
class M_teknisi extends CI_Model {
	public function tampil_datateknisi(){
		 return $this->db->get('teknisi');
	}

	public function update_datateknisi($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function detail_dataTeknisi($id=null){
		$query = $this->db->get_where('teknisi',array('id' => $id))->row();
		return $query;
	}

	public function edit_dataTeknisi($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function hapus_dataTeknisi($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function input_dataTeknisi($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('teknisi');
		$this->db->like('nama',$keyword);
		$this->db->or_like('alamat',$keyword);
		$this->db->or_like('cp', $keyword);

		return $this->db->get()->result();
	}

	
}

 ?>