<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Build_resume extends CI_Controller{ 
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
//-----------------------------view function for build_resume---------------
        public function step_1(){
    //----------------variables-----------------
            $data['title']='Build Resume';
            $data['active']=null;
    //---------Helper---------------
            $this->load->helper('url');
    //-----------load views using functions-------------
            $this->head($data);
            $this->signin_header();
    //--------------load model------------------------
            $this->load->model('jobs_list');
            $data['jobs_list']=$this->jobs_list->get_jobs_list();
            $this->load->model('build_resume_model');
            $data['user'] = $this->build_resume_model->draft_value_from_users();
    //----------------------------------------------------
            $this->load->view('jobseeker/build_resume_1', $data);
            $this->footer();
        }

        public function step_2(){
        //--------------load library----------------------
            $this->load->library('form_validation');
        
        //----------------form validation----------------
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            $this->form_validation->set_rules('street_address', 'Address',  'trim|required');
            $this->form_validation->set_rules('city', 'City',  'trim|required');
            if ($this->form_validation->run() == FALSE)//not valid
            {
                $this->step_2_try();
            }
            else{
                $this->step_2_update();
            }
        }

        public function step_3(){
        //--------------load library----------------------
            $this->load->library('form_validation');
        
        //----------------form validation----------------
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            $this->form_validation->set_rules('phone', 'Phone',  'trim|max_length[13]|min_length[10]|required');
            if ($this->form_validation->run() == FALSE)//not valid
            {
                $this->step_3_try();
            }
            else{
                $this->step_3_update();
            }
        }

        public function step_4(){
        //--------------load library----------------------
            $this->load->library('form_validation');
        
        //----------------form validation----------------
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            $this->form_validation->set_rules('ideal_job_title_1', 'Ideal Job Title 1', 'trim');
            if ($this->form_validation->run() == FALSE)//not valid
            {
                $this->step_4_try();
            }
            else{
                $this->step_4_update();
            }
        }

        public function step_5(){
        //--------------load library----------------------
            $this->load->library('form_validation');
        
        //----------------form validation----------------
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            $this->form_validation->set_rules('job_title', 'Job Title', 'trim');
            if ($this->form_validation->run() == FALSE)//not valid
            {
                $this->step_5_try();
            }
            else{
                $this->step_5_update();
            }
        }
//----------------------------------------------------------------------
//----------------------------------------------------------------------
//-------------------------save Draft-----------------------------------
//----------------------------------------------------------------------
        public function save_draft($where_draft)
        {
            //--------------load library----------------------
            $this->load->library('form_validation');
            //------------------------------------------------
            if($this->form_validation->run() ==true){
            switch ($where_draft) {
                case 2:
                    $this->load->model('build_resume_model');
                    $update_2 = $this->build_resume_model->step_2_update();
                    break;
                case 3:
                    $this->load->model('build_resume_model');
                    $update_3 = $this->build_resume_model->step_3_update();
                    break;
                case 4:
                    $this->load->model('build_resume_model');
                    $update_4 = $this->build_resume_model->step_4_update();
                    break;
                case 5:
                    $this->load->model('build_resume_model');
                    $update_5 = $this->build_resume_model->step_5_update();
                    break;
                default:
                    redirect(base_url());
                    break;
            }
            }
            echo '<script>var ask = window.confirm("Draft your Resume Successfully");
                if (ask) {
                    window.location.href = "'.base_url().'";
                }
                else{
                    window.location.href = "'.base_url().'index.php/build_resume/step_1";
                }</script>';
        }
//----------------------------------------------------------------------
//----------------------------------------------------------------------
//---------------------try again methods--------------------------------
//----------------------------------------------------------------------
        public function step_2_try()
        {
    //----------------variables-----------------
            $data['title']='Build Resume';
            $data['active']=null;
    //---------Helper---------------
            $this->load->helper('url');
    //-----------load views using functions-------------
            $this->head($data);
            $this->signin_header();
    //-----------darft value model------------------------
            $data = $this->all_draft();
    //----------------------------------------------------
            $this->load->view('jobseeker/build_resume_2', $data);
            $this->footer();
        }

        public function step_3_try()
        {
    //----------------variables-----------------
            $data['title']='Build Resume';
            $data['active']=null;
    //---------Helper---------------
            $this->load->helper('url');
    //-----------load views using functions-------------
            $this->head($data);
            $this->signin_header();
    //-----------darft value model------------------------
            $data = $this->all_draft();
    //----------------------------------------------------
            $this->load->view('jobseeker/build_resume_3', $data);
            $this->footer();
        }

        public function step_4_try()
        {
    //----------------variables-----------------
            $data['title']='Build Resume';
            $data['active']=null;
    //---------Helper---------------
            $this->load->helper('url');
    //-----------load views using functions-------------
            $this->head($data);
            $this->signin_header();
    //-----------darft value model------------------------
            $data = $this->all_draft();
    //----------------------------------------------------
            $this->load->view('jobseeker/build_resume_4', $data);
            $this->footer();
        }

        public function step_5_try()
        {
    //----------------variables-----------------
            $data['title']='Build Resume';
            $data['active']=null;
    //---------Helper---------------
            $this->load->helper('url');
    //-----------load views using functions-------------
            $this->head($data);
            $this->signin_header();
    //-----------darft value model------------------------
            $data = $this->all_draft();
    //----------------------------------------------------
            $this->load->view('jobseeker/build_resume_5', $data);
            $this->footer();
        }
//----------------------------------------------------------------------
//----------------------------------------------------------------------
//------------------------update methods--------------------------------
//----------------------------------------------------------------------
        public function step_2_update()
        {
    //-----------------load model------------------
            $this->load->model('build_resume_model');
            $update_2 = $this->build_resume_model->step_2_update();
            if($update_2){
                redirect(base_url().'index.php/build_resume/step_3');
            }
            else{
                redirect(base_url().'index.php/build_resume/step_2');
            }
        }

        public function step_3_update()
        {
    //-----------------load model------------------
            $this->load->model('build_resume_model');
            $update_3 = $this->build_resume_model->step_3_update();
            if($update_3){
                redirect(base_url().'index.php/build_resume/step_4');
            }
            else{
                redirect(base_url().'index.php/build_resume/step_3');
            }
        }

        public function step_4_update()
        {
    //-----------------load model------------------
            $this->load->model('build_resume_model');
            $update_4 = $this->build_resume_model->step_4_update();
            if($update_4){
                redirect(base_url().'index.php/build_resume/step_5');
            }
            else{
                redirect(base_url().'index.php/build_resume/step_4');
            }
        }

        public function step_5_update()
        {
    //-----------------load model------------------
            $this->load->model('build_resume_model');
            $update_5 = $this->build_resume_model->step_5_update();
            if($update_5){
                //redirect(base_url();
                echo '<script>var ask = window.confirm("Build your Resume Successfully");
                if (ask) {
                    window.location.href = "'.base_url().'";
                }
                else{
                    window.location.href = "'.base_url().'index.php/build_resume/step_1";
                }</script>';
            }
            else{
                redirect(base_url().'index.php/build_resume/step_5');
            }
        }
//---------------------------------------------------------------------
//---------------------draft value function----------------------------
//---------------------------------------------------------------------
        public function all_draft()
        {
        //---------load model for show the data--------------
            $this->load->model('jobs_list');
            $data['jobs_list']=$this->jobs_list->get_jobs_list();
            $this->load->model('build_resume_model');
            $data['user'] = $this->build_resume_model->draft_value_from_users();
            $data['address'] = $this->build_resume_model->draft_value_from_resume();
            $data['ideal_job_titles'] = $this->build_resume_model->draft_value_from_ideal_job_title();
            $data['employement_history'] = $this->build_resume_model->draft_value_from_employement_history();
            return $data;
        }
    }
?>