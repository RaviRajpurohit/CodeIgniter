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
<h2 class="page-heading">Step - 3</h2>
<h4 class="col-lg-3">HedgeLink</h4>
<span class="col-lg-5 col-xs-12 pull-right text-center">
	<button id="save_draft" form="resume_form" class="theme-btn">Save Draft</button>
	<button class="theme-btn">Download PDF</button>
	<button class="theme-btn">Set Default</button>
</span>
<div class="clearfix"></div>


<div class="row">
	<div class="col-lg-6 col-xs-12 pull-left resume-builder-section">
	<form method="post" id="resume_form">
		<h4>Resume Builder</h4>
		<p>Contact Information</p>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="E-mail" value="<?= $address[0]['e_mail'];?>" readonly>
		</div>
		<div class="form-group">
			<?= form_error('phone');?><br />
        <?php echo form_input(array('name' => 'phone', 'class'=>'form-control', 'placeholder'=>"Phone", 'value' => @$address[0]['phone']), set_value('phone')); ?>
		</div>
	</form>
		<div class="clearfix"></div>
		<div class="form-group">
			<input type="submit" class="pull-right theme-btn" id="next" form="resume_form" value="Next">
			<input type="submit" class="pull-right theme-btn" onclick="window.location.href='<?= base_url();?>index.php/build_resume/step_2'" value="Previous">
		</div>
		<script type="text/javascript"> 
			$('#next').click(function(){
				$('#resume_form').attr('action', "<?= base_url();?>index.php/build_resume/step_3"); 
			});
			$('#save_draft').click(function(){
				$('#resume_form').attr('action', "<?= base_url();?>index.php/build_resume/save_draft/3"); 
			});
		</script>
	
	
	</div>
	<div class="col-lg-6 col-xs-12 pull-right resume-builder-section">
		<div class="col-lg-12 col-xs-12">
			<h4 class="text-center"><?= $user[0]['first_name'].' '.$user[0]['last_name'];?></h4>
			<p class="text-center"><?php if($address[0]['street_address']!=''){ echo $address[0]['street_address'].', '.$address[0]['city'].', '.$address[0]['country'].', '.$address[0]['zip_code']; }?></p>
			<p class="text-center"><?php if($address[0]['phone']!='') { echo $address[0]['e_mail'].' | '.$address[0]['phone']; }?></p>
			<h6 class="custom-title">Professional Information</h6>
			
			<h6 class="custom-title">Employement History</h6>
			<p class="text-center">
			<?php if($employement_history[0]['job_title']!=''){ echo @$employement_history[0]['job_title'].'<br />'.$employement_history[0]['company'].'<br />Start Year: '.$employement_history[0]['start_year'].', End Year:'.$employement_history[0]['end_year'].'<br />'.$employement_history[0]['city'].', '.$employement_history[0]['state'].'<br />'.$employement_history[0]['company_description']; }?></p>
		</div>
	</div>
	<div class="clearfix"></div>
	
	
	</div>
</div>
</section>