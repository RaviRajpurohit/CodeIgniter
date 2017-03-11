<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Register_model extends CI_Model{
	//----------------function values from database---------------
		public function fun(){
			$this->load->database();
			// $query=$this->db->query("SELECT * FROM `function`");
			$query=$this->db->get('function');
			return $query->result_array();
		}
	//----------------total compensation values from database---------------
		public function total_compensation(){
			$this->load->database();
			// $query=$this->db->query("SELECT * FROM `total_compensation`");
			$query=$this->db->get('total_compensation');
			return $query->result_array();
		}
	//----------------insert new user data in database---------------
		public function create_account(){
			//----------------array of form values------------------
            $insert_form_value_users=array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'e_mail' => $this->input->post('e_mail'),
                'password' => md5($this->input->post('password')),
                'target_job_title' => $this->input->post('target_job_title'),
                'function' => $this->input->post('function'),
                'total_compensation' => $this->input->post('total_compensation')
            );

            $insert=$this->db->insert('users',$insert_form_value_users);

           	//----------------------------------------------------------
           	//----------------initiate user resume----------------------
           	//----------------------------------------------------------
           	$insert_form_value_remuse=array(
                'e_mail' => $this->input->post('e_mail'),
            );
            $this->db->insert('resume',$insert_form_value_remuse);
            $this->db->insert('ideal_job_titles',$insert_form_value_remuse);
            $this->db->insert('employement_history',$insert_form_value_remuse);
            return $insert;
		}
	//----------------callback function to check email exists---------------
		public function check_if_email_exists($requested_email){
			$this->db->where('e_mail',$requested_email);
			$result=$this->db->get('users');
			if($result->num_rows()>0){
				return FALSE;	
			}
			else {
				return TRUE;
			}
		}
	}
?>