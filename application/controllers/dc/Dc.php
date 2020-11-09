<?php 
	class Dc extends CI_Controller{

		public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dc');
		$this->load->helper('url');
	}

		public function index(){
		$data['dc'] = $this->m_dc->tampil_data()->result();
		$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$user);
		$this->load->view('dc/v_dc',$data);
		$this->load->view('templates/footer');
		}

			public function tambah_aksi(){
			$meter	= $this->input->post('meter');
			$tiket	= $this->input->post('tiket');
			$ba	= $this->input->post('ba');
		
			$data =array(
				'meter' 	=> $meter,
				'tiket' 	=> $tiket,
				'ba' 	=> $ba
				
);
		
		$this->m_dc->input_data($data,'dc');
		redirect('dc/dc/index');
	}

public function hapus($id)
{
	$where = array('id' => $id);
	$this->m_dc->hapus_data($where, 'dc');
	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
Data Berhasil Dihapus
</div>');
	redirect('dc/dc/index');
}	

public function edit($id)
	{
		$where = array('id' => $id);
		$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dc'] = $this->m_dc->edit_data($where, 'dc')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$user);
		$this->load->view('dc/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$meter = $this->input->post('meter');
		$tiket = $this->input->post('tiket');
		$ba = $this->input->post('ba');
		
		
		
		

		$data = array(
			'meter'		=> $meter,
			'tiket'		=> $tiket,
			'ba'		=> $ba,
			
		);

		$where = array(
			'id' => $id
		);

		$this->m_dc->update_data($where, $data, 'dc');
		$this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Diupdate
</div>');
		redirect('dc/dc/index');
	}

		public function detail($id){
	$this->load->model('m_dc');
	$detail = $this->m_dc->detail_data($id);
	$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	$data['detail'] = $detail;
	$this->load->view('templates/header');
	$this->load->view('templates/sidebar',$user);
	$this->load->view('dc/detail', $data);
	$this->load->view('templates/footer');
	}

	public function search(){
	$keyword = $this->input->post('keyword');
	$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	$data['dc']=$this->m_dc->get_keyword($keyword);
	$this->load->view('templates/header');
	$this->load->view('templates/sidebar',$user);
	$this->load->view('dc/v_dc', $data);
	$this->load->view('templates/footer');
	}
}
 ?>