<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Employer_register_model extends CI_Model{
	//----------------insert new user data in database---------------
		public function create_account(){
			//----------------array of form values------------------
            $insert_form_value=array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'e_mail' => $this->input->post('e_mail'),
                'password' => md5($this->input->post('password')),
            	'phone' => $this->input->post('phone'),
            	'company_name' => $this->input->post('company_name'),
            	'company_website' => $this->input->post('company_website'),
            	'zip_code' => $this->input->post('zip_code')
            );
            $insert=$this->db->insert('employer_users',$insert_form_value);
            return $insert;
		}
	//----------------callback function to check email exists---------------
		public function check_if_email_exists($requested_email){
			$this->db->where('e_mail',$requested_email);
			$result=$this->db->get('employer_users');
			if($result->num_rows()>0){
				return FALSE;	
			}
			else {
				return TRUE;
			}
		}
	}
?>