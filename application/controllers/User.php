<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

public function index(){
	$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	$data['custommer'] = $this->m_custommer->tampil_data()->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$user);
		$this->load->view('profile/index');
		$this->load->view('templates/footer');
}

public function profile(){
	$user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	$data['custommer'] = $this->m_custommer->tampil_data()->result();
	
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$user);
		$this->load->view('profile/index');
		$this->load->view('templates/footer');
}
}