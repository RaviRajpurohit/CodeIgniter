<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Employer_signin_model extends CI_Model{
	//----------------check user in database---------------
		public function check_user_singin($e_mail,$password){
            //---------------------where condition-------------
                $this->db->where('e_mail',$e_mail);
                $this->db->where('password',$password);
            $query=$this->db->get('employer_users');
            if($query->num_rows()>0){
            	return true;
            }
            else{
            	return false;
            }
		}
	}
?>