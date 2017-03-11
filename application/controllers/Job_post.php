<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Job_post extends CI_Controller{
        public function try_again(){
    //-------------variables--------------
            $data['title'] = 'Post A Job';
            $data['active']=null;
    //-----------load helper---------------
            $this->load->helper('url');
    //-----------load views using functions-------------
            $this->head($data);
            $this->signin_header();
    //--------------load model------------------------
            $this->load->model('job_post_model');
            $get_employer_name = $this->job_post_model->get_employer_name();
    //--------------set employer full name-----------
            $data['employer_name'] = $get_employer_name[0]['first_name'].' '.$get_employer_name[0]['last_name'];
    //----------------------------------------------------
            $this->load->view('jobseeker/job_post', $data);
            $this->footer();
        }
//------------------load head view-----------------------
        public function head($data){
            $this->load->view('jobseeker/section/head', $data);
        }
//------------------load signin_header view-----------------------
        public function signin_header(){
            $this->load->view('jobseeker/section/signin_header');
        }
///------------------load footer view-----------------------
        public function footer(){
            //--------------load model------------------------
            $this->load->model('footer_links');
            $data['footer_links']=$this->footer_links->get_footer_links();
            //--------------load view--------------------------
            $this->load->view('jobseeker/section/footer',$data);
        }
//----------------------form validation and submittion------------------------
        public function index()
        {
        //--------------load library----------------------
            $this->load->library('form_validation');
        //----------------form validation---------------            
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_rules('short_description','Short Desciption', 'required|min_length[50]');
        //----------------check form validation-------------
            if ($this->form_validation->run() == FALSE)//not valid
            {
                $this->try_again();
            }
            else{
                $this->post_job();
            }
        }
        public function post_job()
        {
        //-------------load model to post job---------------
            $this->load->model('job_post_model');
            $inserted = $this->job_post_model->post_job();
            if($inserted){
                echo '<script>var ask = window.confirm("Job Posted Successfully");
            if (ask) {
                window.location.href = "'.base_url().'";
            }
            else{
                window.location.href = "'.base_url().'index.php/job_post";
            }</script>';
            }
            else{
                redirect(base_url().'index.php/job_post');
            }
        }
    }

?>
