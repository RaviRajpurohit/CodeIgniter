<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Employer_sign_in extends CI_Controller{

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
//----------------------on retry sign in--------------------------
        public function retry_sign_in(){
    //-------------variables--------------
            $data['title'] = 'Retry Sing In';
            $data['active']=1;
    //-----------load helper---------------
            $this->load->helper('url');
    //-----------load views using functions-------------
            $this->head($data);
            $this->index_header();
    //--------------load model------------------------
            $this->load->model('jobs_list');
            $data['jobs_list']=$this->jobs_list->get_jobs_list();
    //----------------------------------------------------
            $this->load->view('jobseeker/employer_retry_sign_in', $data);
            $this->footer();
        }
//----------------------validation function for login--------------
        public function sing_in_user(){
        //--------------load library----------------------
            $this->load->library('form_validation');
        
        //----------------form validation---------------            
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            $this->form_validation->set_rules('e_mail', 'E-mail',  'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');

        //----------------check form validation-------------
            if ($this->form_validation->run() == FALSE)//not valid
            {
                $this->retry_sign_in();
            }
            else{
                $this->check_user_singin();
            }

        }
//---------when input values are valid then check for sing in--------
        public function check_user_singin(){
        //----------------variables-----------------
            $data['title']='Home';
            $data['active']=1;
        //---------Helper---------------
            $this->load->helper('url');
        //--------form values-----------
            $e_mail = $this->input->post('e_mail');
            $password = md5($this->input->post('password'));
        //-----------load model----------
            $this->load->model('employer_signin_model');
            $query = $this->employer_signin_model->check_user_singin($e_mail,$password);
        //-----------load view-----------
            if($query){
            //----------sesion data------------
                $session_data = array(
                    'e_mail' => $e_mail,
                    'user_type' => 'employer_user'
                );
                $this->session->set_userdata($session_data);
                redirect(base_url().'index.php/home');
            }
            else{
                $this->session->set_flashdata('error', 'Invalid username or password');
                //redirect(base_url().'index.php/sign_in/retry_sign_in');
                $this->retry_sign_in();
            }
        }
//------------------------Forgot Password function---------------
        public function forgot_password(){
    //-------------variables--------------
            $data['title'] = 'Forgot Password';
            $data['active']=null;
    //-----------load helper---------------
            $this->load->helper('url');
    //-----------load views using functions-------------
            $this->head($data);
            $this->index_header();
            $this->load->view('jobseeker/employer_forgot_password');
            $this->footer();
        }
//------------------------ Terms of use function---------------
        public function  terms_of_use(){
    //-------------variables--------------
            $data['title'] = 'Terms of use';
            $data['active']=null;
    //-----------load helper---------------
            $this->load->helper('url');
    //-----------load views using functions-------------
            $this->head($data);
            $this->index_header();
            $this->load->view('jobseeker/employer_terms_of_use');
            $this->footer();
        }
//------------------------ Privacy Policy function---------------
        public function  privacy_policy(){
    //-------------variables--------------
            $data['title'] = 'Privacy Policy';
            $data['active']=null;
    //-----------load helper---------------
            $this->load->helper('url');
    //-----------load views using functions-------------
            $this->head($data);
            $this->index_header();
            $this->load->view('jobseeker/employer_privacy_policy');
            $this->footer();
        }
    }
?>