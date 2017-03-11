<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Footer_links extends CI_Model{
		public function get_footer_links(){
			$this->load->database();
			//$query=$this->db->query("SELECT * FROM `footerLinks` WHERE `_id`=1");
			$this->db->where('_id',1);
			$query=$this->db->get('footerLinks');
			return $query->result_array();
			//return $query->result();
		}
	}
?>