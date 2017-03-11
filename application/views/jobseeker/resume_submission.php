<?php
/*-----------------------------------------------------------------
*			normal user login file
*-------------------------------------------------------------------*/
defined('BASEPATH') OR exit('No direct script access allowed');
	if($this->session->userdata('e_mail')==''){
		redirect(base_url());
	}
	else{
		if($this->session->userdata('user_type')!='normal_user'){
			redirect(base_url());
		}
	}
?>
<section class="inner-page-block">
<div class="container">
<div class="clearfix"></div>
<h2 class="page-heading">Resume Submission</h2>
<div class="row">
	<div class="col-lg-2 col-xs-12 candidate-img">
		<img src="<?= base_url();?>images/candidate-img.jpg" alt="Candidate" class="" />
	</div>
	<div class="col-lg-9 col-xs-12">
		<div class="col-lg-12 col-xs-12">
			<h4>Sunita Verma</h4>
			<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
		</div>
		<span style="font-weight: bold">Please upload only PDF files</span>
		<?php echo form_open_multipart('resume_submission/upload_resume','id="upload_resume_form"');?>
			<?php echo form_upload('resume');?>
			<?= @$upload_error;?>
		<?php echo form_close(); ?>
	</div>
	<div class="col-lg-12 col-xs-12 text-center">
		<input type="submit" form="upload_resume_form" value="Upload Resume" class="theme-btn" />
		
		<input type="submit" value="Build A New Resume" class="theme-btn" onclick="window.location='<?= base_url();?>index.php/resume_submission/create'"/>
	</div>
	<div class="clearfix"></div>
	
	</div>
</div>
</section>