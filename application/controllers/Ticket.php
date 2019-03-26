<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {
	public function index()
	{
		$id = 1;
		$data = [
				
				]; 
		$data['dbase'] = $this->db->get_where('user',['id' => $id])->row_array();
		$data['wilayah'] = $this->getWilayah->getNamaWilayah();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('ticket/index',$data);
		$this->load->view('templates/footer');
	}

	public function getDataWilayah()
	{
		$input = $this->input->get('kec');
		$query = $this->getWilayah->getNamaWilayah($input,'wilayah');
		echo json_encode($query);
	}

	public function getDataSatker()
	{
		$input = $this->input->post('id');
		$query = $this->getWilayah->getNamaSatker($input,'id');
		echo json_encode($query);
	}
}