<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Home extends CI_Controller{
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
//----------------------------Index page with sing in-------------------------------------
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
        public function index(){
        //----------------variables-----------------
            $data['title']='Home';
            $data['active']=1;
        //---------Helper---------------
            $this->load->helper('url');
        //-----------load views using functions-------------
            $this->head($data);
            $this->signin_header();
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
        public function signin_header(){
            $this->load->view('jobseeker/section/signin_header');
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