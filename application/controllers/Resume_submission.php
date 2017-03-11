<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Resume_submission extends CI_Controller{ 
		public function index(){
        //----------------variables-----------------
            $data['title']='Resume Submission';
            $data['active']=3;
        //---------Helper---------------
            $this->load->helper('url');
        //-----------load views using functions-------------
            $this->head($data);
            $this->signin_header();
    	//--------------load model------------------------
            $this->load->model('jobs_list');
            $data['jobs_list']=$this->jobs_list->get_jobs_list();
    	//----------------------------------------------------
            $this->load->view('jobseeker/resume_submission', $data);
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
//----------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------
//---------------------------upload resume in folder and database-------------------------
//----------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------
        public function upload_resume(){
       //---------------load library------------------
        	//$this->load->library('upload');

       //---------------------------------------------
        	$resume = array();
        	$isUpload = FALSE;
        	$result = array(
        		'upload_path' => './resumes/', 
        		'allowed_types' => 'pdf',
        		'overwrite' => TRUE,
        		'file_name' => $this->session->userdata('e_mail').'_resume.pdf'
        	);
        	//$this->upload->initialize($result);
        	$this->load->library('upload',$result);
        	if ( ! $this->upload->do_upload('resume'))
            {
        //----------------variables-----------------
	            $data['title']='Resume Submission';
	            $data['active']=3;
	            $data['upload_error']=$this->upload->display_errors();
        //---------Helper---------------
            	$this->load->helper('url');
        //-----------load views using functions-------------
	            $this->head($data);
	            $this->signin_header();
    	//--------------load model------------------------
	            $this->load->model('jobs_list');
	            $data['jobs_list']=$this->jobs_list->get_jobs_list();
    	//----------------------------------------------------
	            $this->load->view('jobseeker/resume_submission', $data);
	            $this->footer();
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
        //---------------load model to save in database----------
                $this->load->model('signin_model');
                $result = $this->signin_model->upload_resume($result['file_name']);
        //-------------------------------------------------------
            if($result){
                    echo '<script>var ask = window.confirm("Resume Uploaded Successfully");
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
//------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------
//------------------------------Create resume-----------------------------------------------
//------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------
        public function create(){
       	    redirect(base_url().'index.php/build_resume/step_1');
        }
    }
?>
