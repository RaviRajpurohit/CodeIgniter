<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Job_post_model extends CI_Model{
		public function get_employer_name(){
			$this->db->where('e_mail',$this->session->userdata('e_mail'));
			$get_employer_name = $this->db->get('employer_users');
			return $get_employer_name->result_array();
		}
		public function post_job()
		{
		//--------------------get from data----------------
			$company_hiring_location=null;
			foreach ($this->input->post('hiring_location') as $key => $value) {
				if($company_hiring_location==null){
					$company_hiring_location=$value;
				}
				else{
					$company_hiring_location=$company_hiring_location.';'.$value;
				}
			}
			$is_salary_show = $this->input->post('is_salary_show');
			if (isset($is_salary_show)) {
				$is_salary_show = 1;
			} else {
				$is_salary_show = 0;
			}
			
			$is_cname_show = $this->input->post('is_cname_show');
			if (isset($is_cname_show)) {
				$is_cname_show = 1;
			} else {
				$is_cname_show = 0;
			}

			$is_recruiter_name_show = $this->input->post('is_recruiter_name_show');
			if (isset($is_recruiter_name_show)) {
				$is_recruiter_name_show = 1;
			} else {
				$is_recruiter_name_show = 0;
			}

			$is_automatically_repost = $this->input->post('is_automatically_repost');
			if (isset($is_automatically_repost)) {
				$is_automatically_repost = 1;
			} else {
				$is_automatically_repost = 0;
			}
		//------------------store all from data in single array------------
			$insert_job_data = array(
				'job_title' => $this->input->post('job_title'),
				'short_description' => $this->input->post('short_description'),
				'year_of_exprience' => $this->input->post('year_of_exprience'),
				'low_base_salary' => $this->input->post('low_base_salary'),
				'high_base_salary' => $this->input->post('high_base_salary'),
				'is_salary_show' => $is_salary_show,
				'company_name' => $this->input->post('company_name'),
				'is_cname_show' => $is_cname_show,
				'is_recruiter_name_show' => $is_recruiter_name_show,
				'number_of_employees' => $this->input->post('number_of_employees'),
				'company_hiring_location' => $company_hiring_location,
				'is_automatically_repost' => $is_automatically_repost,
				'job_recruiter' => $this->session->userdata('e_mail'),
				'created_at' => date('20y-m-d')
			);
		//------------------------insert job post in data base-----------
			$insert = $this->db->insert('posted_job',$insert_job_data);
			return $insert;
		}
	}
?>