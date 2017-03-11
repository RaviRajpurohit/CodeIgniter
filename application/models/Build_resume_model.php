<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Build_resume_model extends CI_Model{
	//-----------------------------------------------------------------
	//-----------------------------------------------------------------
	//---------------------Dreaft values-------------------------------
	//-----------------------------------------------------------------
		public function draft_value_from_resume(){
			$this->db->where('e_mail',$this->session->userdata('e_mail'));
			//$query=$this->db->query("SELECT * FROM `resume` where e_mail="$e_mail");
			$query=$this->db->get('resume');
			return $query->result_array();
			//return $query->result();
		}
		public function draft_value_from_ideal_job_title(){
			$this->db->where('e_mail',$this->session->userdata('e_mail'));
			//$query=$this->db->query("SELECT * FROM `ideal_job_titles` where e_mail="$e_mail");
			$query=$this->db->get('ideal_job_titles');
			return $query->result_array();
			//return $query->result();
		}
		public function draft_value_from_employement_history(){
			$this->db->where('e_mail',$this->session->userdata('e_mail'));
			//$query=$this->db->query("SELECT * FROM `employement_history` where e_mail="$e_mail");
			$query=$this->db->get('employement_history');
			return $query->result_array();
			//return $query->result();
		}
		public function draft_value_from_users(){
			$this->db->where('e_mail',$this->session->userdata('e_mail'));
			//$query=$this->db->query("SELECT * FROM `users` where e_mail="$e_mail");
			$query=$this->db->get('users');
			return $query->result_array();
			//return $query->result();
		}
	//------------------------------------------------------------------
	//------------------------------------------------------------------
	//----------------------update data---------------------------------
	//------------------------------------------------------------------
		public function step_2_update()
		{
			
			// gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2
			$this->db->set('street_address', $this->input->post('street_address'));
			$this->db->set('city',$this->input->post('city'));
			$this->db->set('country', $this->input->post('country'));
			$this->db->set('zip_code', $this->input->post('zip_code'));
			$this->db->where('e_mail', $this->session->userdata('e_mail'));
			$update = $this->db->update('resume'); 
			return $update;
		}

		public function step_3_update()
		{
			
			// gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2
			$this->db->set('phone',$this->input->post('phone'));
			$this->db->where('e_mail', $this->session->userdata('e_mail'));
			$update = $this->db->update('resume'); 
			return $update;
		}

		public function step_4_update()
		{
			
			// gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2
			$this->db->set('ideal_job_title_1', $this->input->post('ideal_job_title_1'));
			$this->db->set('ideal_job_title_2', $this->input->post('ideal_job_title_2'));
			$this->db->set('ideal_job_title_3', $this->input->post('ideal_job_title_3'));
			$this->db->set('ideal_job_title_4', $this->input->post('ideal_job_title_4'));
			$this->db->set('ideal_job_title_5', $this->input->post('ideal_job_title_5'));
			$this->db->where('e_mail', $this->session->userdata('e_mail'));
			$update = $this->db->update('ideal_job_titles'); 
			return $update;
		}

		public function step_5_update()
		{
			
			// gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2
			$this->db->set('job_title', $this->input->post('job_title'));
			$this->db->set('company',$this->input->post('company'));
			$this->db->set('company',$this->input->post('start_year'));
			$this->db->set('company',$this->input->post('end_year'));
			$this->db->set('company',$this->input->post('city'));
			$this->db->set('company',$this->input->post('state'));
			$this->db->set('company',$this->input->post('company_description'));
			$this->db->where('e_mail', $this->session->userdata('e_mail'));
			$update = $this->db->update('employement_history'); 
			$this->db->set('created_at', date('20y-m-d'));
			$this->db->where('e_mail', $this->session->userdata('e_mail'));
			$update1 = $this->db->update('resume');
			return $update;
		}
	}
?>