<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hukdis extends CI_Controller {
	
	public function daftar()
	{
		$id = 1;
		$data = [
				'header' => 'Daftar Hukdis',
				'title' => '',
				'miniTitle' => 'HD',
				'activeStatus' => 'active',
				]; 
		$data['dbase'] = $this->db->get_where('user',['id' => $id])->row_array();

		$this->db->select('hukdis.*,wilayah.nama_wilayah');
		$this->db->from('hukdis');
		$this->db->join('wilayah','wilayah.id = hukdis.kanwil_id');
		$dataHukdis['hukdis'] = $this->db->get(null)->result_array();


		$this->load->view('templates/header',$data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('hukdis/daftar', $dataHukdis);
		$this->load->view('templates/footer');
	}
}