<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Sign_out extends CI_Controller{
		public function index(){
			$this->session->unset_userdata('e_mail','user_type');
			redirect(base_url());
		}
	}
?>