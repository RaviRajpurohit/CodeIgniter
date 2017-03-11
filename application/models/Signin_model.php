<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Signin_model extends CI_Model{
	//----------------check user in database---------------
		public function check_user_singin($e_mail,$password){
            //---------------------where condition-------------
                $this->db->where('e_mail',$e_mail);
                $this->db->where('password',$password);
            $query=$this->db->get('users');
            if($query->num_rows()>0){
            	return true;
            }
            else{
            	return false;
            }
		}
    //----------------upload resume with that user------------
        public function upload_resume($file_name)
        {
        //------------------where condition-----------
            $this->db->where('e_mail',$this->session->userdata('e_mail'));
            $insert_data=array(
                'resume_name' => $file_name
            );
            $result = $this->db->update('users',$insert_data);
            return $result;
        }
	}
?>