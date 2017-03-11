<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Register extends CI_Controller{
//----------------Method to call view---------------
		public function index(){
		//---------Variable-------------
			$data['title'] = 'Register';
            $data['active']=5;
        //------------------------------
        //---------Helper---------------
            $this->load->helper('url');
        //------------------------------
        //---------Models-------------
            $this->load->model('register_model');
            $data['fun']=$this->register_model->fun();
            $data['total_compensation']=$this->register_model->total_compensation();
        //---------------------------
            $this->head($data);
            $this->index_header();
            $this->load->view('jobseeker/register', $data);
            $this->footer();
		}
//------------------load head view-----------------------
		public function head($data){
            $this->load->view('jobseeker/section/head', $data);
        }
//------------------load index_header view-----------------------
        public function index_header(){
            $this->load->view('jobseeker/section/index_header');
        }
//------------------load footer view-----------------------
        public function footer(){
            //--------------load model------------------------
            $this->load->model('footer_links');
            $data['footer_links']=$this->footer_links->get_footer_links();
            //--------------load view--------------------------
            $this->load->view('jobseeker/section/footer',$data);
        }
//------------------load register view with valid form value-----------------------
        public function sign_up(){
        //--------------load library----------------------
            $this->load->library('form_validation');
        
        //----------------form validation---------------            
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            $this->form_validation->set_rules('first_name', 'First Name',  'trim|required');
            $this->form_validation->set_rules('last_name', 'Last Name',  'trim|required');
            $this->form_validation->set_rules('e_mail', 'E-mail',  'trim|required|valid_email|callback_check_if_email_exists');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('target_job_title', "Target Job Title", 'trim');
            $this->form_validation->set_rules('function', 'Function',  'trim|required');
            $this->form_validation->set_rules('total_compensation', 'Total Compensation',  'trim|required');

        //----------------check form validation-------------
            if ($this->form_validation->run() == FALSE)//not valid
            {
                $this->index();
            }
            else{
                $this->account_created();
            }

        }
//-------------------------when account created--------------------------
        public function account_created(){
        //----------------variables-----------------
            $data['created'] ='created';
            $data['title']='Account Created';
            $data['active']=null;
        //---------Helper---------------
            $this->load->helper('url');
        //-----------load model----------
            $this->load->model('register_model');
            $query = $this->register_model->create_account();
        //-----------load view-----------
            if($query){
                $this->head($data);
                $this->index_header();
                $this->load->view('jobseeker/created_account', $data);
                $this->footer();
            }
            else{
                $this->index();
            }
        }
//------------------------call back function--------------------
        public function check_if_email_exists($requested_email){
        //-------------load model------------
            $this->load->model('register_model');
            $email_available = $this->register_model->check_if_email_exists($requested_email);
            if($email_available){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }
	}
?>