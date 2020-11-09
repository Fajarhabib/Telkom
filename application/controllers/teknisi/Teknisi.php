<?php 

class Teknisi extends CI_controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_teknisi');
		$this->load->helper('url');
	}

	public function index_teknisi(){
			$data['teknisi'] = $this->m_teknisi->tampil_datateknisi()->result();
		$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$user);
		$this->load->view('teknisi/v_teknisi', $data);
		$this->load->view('templates/footer');
		}

		public function edit_teknisi($id)
	{
		$where = array('id' => $id);
		$data['teknisi'] = $this->m_teknisi->edit_dataTeknisi($where, 'teknisi')->result();
		$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$user);
		$this->load->view('teknisi/editTeknisi', $data);
		$this->load->view('templates/footer');
	}

	public function update_teknisi()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$cp = $this->input->post('cp');
		$nik = $this->input->post('nik');
		
		

		$data = array(
			'nama'		=> $nama,
			'alamat'	=> $alamat,
			'cp'		=> $cp,
			'nik'		=> $nik
			
			
		);

		$where = array(
			'id' => $id
		);

		$this->m_teknisi->update_datateknisi($where, $data, 'teknisi');
		$this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Diupdate
</div>');
		redirect('teknisi/teknisi/index_teknisi');
}

public function detail_teknisi($id){
	$this->load->model('m_teknisi');
	$detailTeknisi = $this->m_teknisi->detail_dataTeknisi($id);
	$data['detailTeknisi'] = $detailTeknisi;
	$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	$this->load->view('templates/header');
	$this->load->view('templates/sidebar',$user);
	$this->load->view('teknisi/detailTeknisi', $data);
	$this->load->view('templates/footer');
	}

	public function hapusTeknisi($id)
	{
		$where = array('id' => $id);
		$this->m_teknisi->hapus_dataTeknisi($where, 'teknisi');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Dihapus
</div>');
		redirect('teknisi/teknisi/index_teknisi');
	}

	public function tambah_aksiTeknisi(){
			$nama	= $this->input->post('nama');
			$alamat	= $this->input->post('alamat');
			$cp		= $this->input->post('cp');
			$nik	= $this->input->post('nik');
			$foto 	= $_FILES['foto'];
			if ($foto=''){}else{
				$config['upload_path']	= './assets/foto';
				$config['allowed_types'] = 'jpg|png|gif';

				$this->load->library('upload',$config);
				if (!$this->upload->do_upload('foto')){
					echo "Upload Gagal"; die();
				}else{
					$foto=$this->upload->data('file_name');
				}
			}

			$data =array(
				'nama' 	=> $nama,
				'alamat' 	=> $alamat,
				'cp' 	=> $cp,
				'nik'	=> $nik,
				'foto' =>$foto
);
			$this->m_teknisi->input_dataTeknisi($data,'teknisi');
		redirect('teknisi/teknisi/index_teknisi');}
public function searchTeknisi(){
	$keyword = $this->input->post('keyword');
	$data['teknisi']=$this->m_teknisi->get_keyword($keyword);
	$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	$this->load->view('templates/header');
	$this->load->view('templates/sidebar',$user);
	$this->load->view('teknisi/v_teknisi', $data);
	$this->load->view('templates/footer');
	}



}
