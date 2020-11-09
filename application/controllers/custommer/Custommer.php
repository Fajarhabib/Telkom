<?php 
	class Custommer extends CI_Controller{

		public function __construct()
	{
		parent::__construct();
		$this->load->model('M_custommer');
		$this->load->helper('url');
	}

		public function index(){
		$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['custommer'] = $this->m_custommer->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$user);
		$this->load->view('custommer/v_custommer',$data);
		$this->load->view('templates/footer');
		}

			public function tambah_aksi(){
			$nama	= $this->input->post('nama');
			$inet	= $this->input->post('inet');
			$alamat	= $this->input->post('alamat');
			$cp		= $this->input->post('cp');
			
			

			$data =array(
				'nama' 	=> $nama,
				'inet' 	=> $inet,
				'alamat' 	=> $alamat,
				'cp' 	=> $cp
				
				
);
		
		$this->m_custommer->input_data($data,'pelanggan');
		redirect('custommer/custommer/index');
	}

public function hapus($id)
{
	$where = array('id' => $id);
	$this->m_custommer->hapus_data($where, 'pelanggan');
	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
Data Berhasil Dihapus
</div>');
	redirect('custommer/custommer/index');
}	

public function edit($id)
	{
		$where = array('id' => $id);
		$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['custommer'] = $this->m_custommer->edit_data($where, 'pelanggan')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$user);
		$this->load->view('custommer/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$inet = $this->input->post('inet');
		$alamat = $this->input->post('alamat');
		$cp = $this->input->post('cp');
		
		
		

		$data = array(
			'nama'		=> $nama,
			'inet'		=> $inet,
			'alamat'		=> $alamat,
			'cp'		=> $cp,
			
			
			
		);

		$where = array(
			'id' => $id
		);

		$this->m_custommer->update_data($where, $data, 'pelanggan');
		$this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Diupdate
</div>');
		redirect('custommer/custommer/index');
	}

		public function detail($id){
	$this->load->model('m_custommer');
	$detail = $this->m_custommer->detail_data($id);
	$data['detail'] = $detail;
	$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	$this->load->view('templates/header');
	$this->load->view('templates/sidebar',$user);
	$this->load->view('custommer/detail', $data);
	$this->load->view('templates/footer');
	}

	public function search(){
	$keyword = $this->input->post('keyword');
	$data['custommer']=$this->m_custommer->get_keyword($keyword);
	$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	$this->load->view('templates/header');
	$this->load->view('templates/sidebar',$user);
	$this->load->view('custommer/v_custommer', $data);
	$this->load->view('templates/footer');
	}
}
 ?>