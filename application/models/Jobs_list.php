<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Jobs_list extends CI_Model{
		public function get_jobs_list(){
			$this->load->database();
			//$query=$this->db->query("SELECT * FROM `jobs_list`");
			$query=$this->db->get('jobs_list');
			return $query->result_array();
			//return $query->result();
		}
		public function get_posted_jobs(){
			$this->load->database();
			//$query=$this->db->query("SELECT * FROM `posted_job`");
			$query=$this->db->get('posted_job');
			return $query->result_array();
			//return $query->result();
		}
	}
?>