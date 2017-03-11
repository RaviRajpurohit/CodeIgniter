<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
//----------------------------Index page without sing in-------------------------------------
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
    class Jobseeker extends CI_Controller{
        public function index(){
    //-------------variables--------------
            $data['title'] = 'Home';
            $data['active']=1;
    //-----------load helper---------------
            $this->load->helper('url');
    //-----------load views using functions-------------
            $this->head($data);
            $this->index_header();
    //--------------load model------------------------
            $this->load->model('jobs_list');
            $data['jobs_list']=$this->jobs_list->get_jobs_list();
            $data['posted_job'] = $this->jobs_list->get_posted_jobs();
    //----------------------------------------------------
            $this->load->view('jobseeker/index', $data);
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
        
    }

?>
