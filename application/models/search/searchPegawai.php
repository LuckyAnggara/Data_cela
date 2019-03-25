<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class SearchPegawai extends CI_Model{

		public function get_all(){
			return $this->db->get('hukdis')->result();
		}

		public function get_pegawai_keyword($keyword){
			$this->db->select('*');
			$this->db->from('hukdis');
			$this->db->like('name',$keyword);
			$this->db->or_like('nip',$keyword);
			return $this->db->get()->result();
		}
	}