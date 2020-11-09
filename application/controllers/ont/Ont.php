<?php 
	class Ont extends CI_Controller{

		public function __construct()
	{
		parent::__construct();
		$this->load->model('M_ont');
		$this->load->helper('url');
	}

		public function index(){
		$data['ont'] = $this->m_ont->tampil_data()->result();
		$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$user);
		$this->load->view('ont/v_ont',$data);
		$this->load->view('templates/footer');
		}

			public function tambah_aksi(){
			$snlama	= $this->input->post('snlama');
			$snbaru	= $this->input->post('snbaru');
			$tiket	= $this->input->post('tiket');
			$ba		= $this->input->post('ba');
			
			

			$data =array(
				'snlama' 	=> $snlama,
				'snbaru' 	=> $snbaru,
				'tiket' 	=> $tiket,
				'ba' 	=> $ba
				
				
);
		
		$this->m_ont->input_data($data,'ont');
		redirect('ont/ont/index');
	}

public function hapus($id)
{
	$where = array('id' => $id);
	$this->m_ont->hapus_data($where, 'ont');
	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
Data Berhasil Dihapus
</div>');
	redirect('ont/ont/index');
}	

public function edit($id)
	{
		$where = array('id' => $id);
		$data['ont'] = $this->m_ont->edit_data($where, 'ont')->result();
		$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$user);
		$this->load->view('ont/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$snlama = $this->input->post('snlama');
		$snbaru = $this->input->post('snbaru');
		$tiket = $this->input->post('tiket');
		$ba = $this->input->post('ba');
		
		
		

		$data = array(
			'snlama'		=> $snlama,
			'snbaru'		=> $snbaru,
			'tiket'		=> $tiket,
			'ba'		=> $ba,
			
			
			
		);

		$where = array(
			'id' => $id
		);

		$this->m_ont->update_data($where, $data, 'ont');
		$this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Diupdate
</div>');
		redirect('ont/ont/index');
	}

		public function detail($id){
	$this->load->model('m_ont');
	$detail = $this->m_ont->detail_data($id);
	$data['detail'] = $detail;
	$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	$this->load->view('templates/header');
	$this->load->view('templates/sidebar',$user);
	$this->load->view('ont/detail', $data);
	$this->load->view('templates/footer');
	}

	public function search(){
	$keyword = $this->input->post('keyword');
	$data['ont']=$this->m_ont->get_keyword($keyword);
	$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	$this->load->view('templates/header');
	$this->load->view('templates/sidebar',$user);
	$this->load->view('ont/v_ont', $data);
	$this->load->view('templates/footer');
	}
}
 ?>