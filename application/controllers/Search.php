<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
	{

		$id = 1;
		$data = [
				'header' => 'My Profile',
				'title' => '',
				'miniTitle' => 'HD',
				'activeStatus' => 'active',
				]; 
				
		$data['dbase'] = $this->db->get_where('user',['id' => $id])->row_array();

		$keyword = $this->input->post('keyword');
		

		$this->load->view('templates/header',$data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('search/index',$data);
		$this->load->view('templates/footer');

		if($this->form_validation->run()==false)
        {
        	echo "TAI";
        }else{
			
			$keyword = $this->input->post('nip');
			$data['products']=$this->searchPegawai->get_pegawai_keyword($keyword);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Actived</div>');
            redirect('search/index');
        }

	}

}