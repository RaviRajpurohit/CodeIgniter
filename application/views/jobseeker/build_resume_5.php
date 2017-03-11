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
<h2 class="page-heading">Step - 2</h2>
<h4 class="col-lg-3">HedgeLink</h4>
<span class="col-lg-5 col-xs-12 pull-right text-center">
	<button id="save_draft" form="resume_form" class="theme-btn">Save Draft</button>
	<button class="theme-btn">Download PDF</button>
	<button class="theme-btn">Set Default</button>
</span>
<div class="clearfix"></div>


<div class="row">
	<div class="col-lg-6 col-xs-12 pull-left resume-builder-section">
	<form id="resume_form" method="post">
		<h4>Resume Builder</h4>
		<p>Employement History</p>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Job Title" name="job_title" view="<?= $employement_history[0]['job_title'];?>">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Company" name="company" view="<?= $employement_history[0]['company'];?>">
		</div>
		<div class="form-group col-lg-5 col-xs-12 no-padding">
			<select class="form-control" name="start_year">
				<option>Start Year</option>
				<option>2010</option>
				<option>2011</option>
			</select>
		</div>
		<div class="form-group col-lg-5 col-xs-12 pull-right no-padding">
			<select class="form-control" name="end_year">
				<option>End Year</option>
				<option>2010</option>
				<option>2011</option>
			</select>
		</div>
		<div class="form-group col-lg-5 col-xs-12 no-padding">
			<input type="text" class="form-control" placeholder="City" name="city"  view="<?= $employement_history[0]['city'];?>">
		</div>
		<div class="form-group col-lg-5 col-xs-12 no-padding pull-right">
			<input type="text" class="form-control" placeholder="State" name="state" view="<?= $employement_history[0]['state'];?>">
		</div>
		<div class="form-group">
			<textarea class="form-control" placeholder="Company Description" name="company_description"><?= $employement_history[0]['company_description'];?>"</textarea>
		</div>
	</form>
		<div class="clearfix"></div>
		<div class="form-group">
			<input type="submit" class="pull-right theme-btn" id="next" form="resume_form" value="Next">
			<input type="submit" class="pull-right theme-btn" onclick="window.location.href='<?= base_url();?>index.php/build_resume/step_4'" value="Previous">
		</div>
		<script type="text/javascript"> 
			$('#next').click(function(){
				$('#resume_form').attr('action', "<?= base_url();?>index.php/build_resume/step_5"); 
			});
			$('#save_draft').click(function(){
				$('#resume_form').attr('action', "<?= base_url();?>index.php/build_resume/save_draft/5"); 
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
			<?php if($employement_history[0]['job_title']!=''){ echo $employement_history[0]['job_title'].'<br />'.$employement_history[0]['company'].'<br />Start Year: '.$employement_history[0]['start_year'].', End Year:'.$employement_history[0]['end_year'].'<br />'.$employement_history[0]['city'].', '.$employement_history[0]['state'].'<br />'.$employement_history[0]['company_description']; }?></p>
		</div>
	</div>
</div>
</section>
