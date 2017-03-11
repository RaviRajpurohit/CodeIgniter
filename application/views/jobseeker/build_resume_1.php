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
<h2 class="page-heading">Step - 1</h2>
<h4 class="col-lg-3">HedgeLink</h4>
<span class="col-lg-5 col-xs-12 pull-right text-center">
<button id="save_draft" form="resume_form" class="theme-btn">Save Draft</button>
<button class="theme-btn">Download PDF</button><button class="theme-btn">Set Default</button></span>
<div class="clearfix"></div>


<div class="row">
	<div class="col-lg-6 col-xs-12 pull-left resume-builder-section">
		<h4>Resume Builder</h4>
		<p>Let's get started</p>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="First Name" value="<?= $user[0]['first_name'];?>" readonly="readonly">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Last Name" value="<?= $user[0]['last_name'];?>" readonly="readonly">
		</div>
		<div class="clearfix"></div>
		<div class="form-group">
			<input type="submit" class="pull-right theme-btn" onclick="window.location.href='<?= base_url();?>index.php/build_resume/step_2'" value="Next">
		</div>
		<script type="text/javascript"> 
			$('#save_draft').click(function(){
				$('#resume_form').attr('action', "<?= base_url();?>index.php/build_resume/save_draft/5"); 
			});
		</script>
	
	
	</div>
	<div class="col-lg-6 col-xs-12 pull-right resume-builder-section">
		<div class="col-lg-12 col-xs-12">
			<h4 class="text-center"><?= $user[0]['first_name'].' '.$user[0]['last_name'];?></h4>
			<p class="custom-title text-center">Build your best resume.<br> Read the article : <br><span>The 8 minute resume</span></p>
		</div>
	</div>
	<div class="clearfix"></div>
	
	</div>
</div>
</section>