<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Employer_register extends CI_Controller{
        public function index(){
        //--------------load library----------------------
            $this->load->library('form_validation');
        
        //----------------form validation---------------            
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            $this->form_validation->set_rules('first_name', 'First Name',  'trim|required');
            $this->form_validation->set_rules('last_name', 'Last Name',  'trim|required');
            $this->form_validation->set_rules('e_mail', 'E-mail',  'trim|required|valid_email|callback_check_if_email_exists');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('phone', "Phone", 'trim|max_length[12]|min_length[10]|required|numeric');
            $this->form_validation->set_rules('company_name', 'Company Name',  'trim|required');
            $this->form_validation->set_rules('company_website', 'Company Website',  'trim|required|valid_url');
            $this->form_validation->set_rules('zip_code', 'ZIP Code',  'trim|required');

        //----------------check form validation-------------
            if ($this->form_validation->run() == FALSE)//not valid
            {
                $this->try_again();
            }
            else{
                $this->account_created();
            }
        }
//------------------------------------------------------------------------
//--------------------------employee validation---------------------------
//------------------------------------------------------------------------
        public function try_again($value='')
        {
    //-------------variables----------------------
            $data['title'] = 'Employer Register';
            $data['active']=6;
    //-----------load helper---------------
            $this->load->helper('url');
    //-----------load views using functions-------------
            $this->head($data);
            $this->index_header();
            $this->load->view('jobseeker/employer_register');
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
//-----------------------------------------------------------------------
//-------------------------when account created--------------------------
        public function account_created(){
        //----------------variables-----------------
            $data['created'] ='created';
            $data['title']='Account Created';
            $data['active']=null;
        //---------Helper---------------
            $this->load->helper('url');
        //-----------load model----------
            $this->load->model('employer_register_model');
            $query = $this->employer_register_model->create_account();
        //-----------load view-----------
            if($query){
                $this->head($data);
                $this->index_header();
                $this->load->view('jobseeker/employer_created_account', $data);
                $this->footer();
            }
            else{
                $this->index();
            }
        }


//------------------------ Contact Us function---------------
        public function  contact_us(){
    //-------------variables--------------
            $data['title'] = 'Contact Us';
            $data['active']=null;
    //-----------load helper---------------
            $this->load->helper('url');
    //-----------load views using functions-------------
            $this->head($data);
            $this->index_header();
            $this->load->view('jobseeker/contact_us');
            $this->footer();
        }
//------------------------call back function--------------------
        public function check_if_email_exists($requested_email){
        //-------------load model------------
            $this->load->model('employer_register_model');
            $email_available = $this->employer_register_model->check_if_email_exists($requested_email);
            if($email_available){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }
    }
?>