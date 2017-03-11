<?php
/*-----------------------------------------------------------------
*			employer login file
*-------------------------------------------------------------------*/
defined('BASEPATH') OR exit('No direct script access allowed');
	if($this->session->userdata('e_mail')==''){
		redirect(base_url());
	}
	else{
		if($this->session->userdata('user_type')!='employer_user'){
			redirect(base_url());
		}
	}
?>
<section class="inner-page-block">
<div class="container">
<div class="clearfix"></div>
<h2 class="page-heading">Post A Job</h2>
<div class="clearfix"></div>
<div class="row">
<form id='job_post_form' method="post">
	<h5>Job Description</h5>
	<div class="col-lg-12 form-group">
		<label>Job Title</label>
		<input type="text" placeholder="Job Title" class="form-control" name="job_title" required="required" />
	</div>
	<div class="col-lg-12 form-group">
		<label>Short Description</label>
		<textarea class="form-control" name="short_description" required="required" minlength="50"></textarea>
	</div>
	<div class="col-lg-12 form-group">
		<label>Years of Experience</label>
		<select class="form-control" name="year_of_exprience">
			<option value="No Specific">No Specific</option>
			<option value="Less than 5">Less than 5</option>
			<option value="5-7">5-7</option>
			<option value="8-10">8-10</option>
			<option vlaue="11-15">11-15</option>
			<option value="15+">15+</option>
		</select>
	</div>
	<hr>
	<h5>Compensation</h5>
	<div class="col-lg-5 col-xs-12 form-group">
		<label>Low End Base Salary Estimate</label>
		<input type="text" class="form-control" name="low_base_salary">
	</div>
	<div class="col-lg-5 col-xs-12 form-group pull-right">
		<label>High End Base Salary Estimate</label>
		<input type="text" class="form-control" name="high_base_salary">
	</div>
	<div class="clearfix"></div>
	<div class="col-lg-12 form-group">
		<input type="checkbox" name="is_salary_show"> Don't show the salary to job-seeker
	</div>
	<hr>
	<h5>Hiring Company</h5>
	<div class="col-lg-6 form-group">
		<label>Company Name</label>
		<input type="text" placeholder="Company Name" class="form-control" name="company_name" required="required" />
		<div class="col-lg-12 form-group">
			<input type="checkbox" name="is_cname_show"> Hide company name from job-seeker
		</div>
	</div>
	<div class="col-lg-6 form-group text-center">
		<p class="custom-title">Recruiter profile shown as <br><span><?php echo $employer_name;?></span></p>
		<div class="col-lg-12 form-group">
			<input type="checkbox" name="is_recruiter_name_show" > Hide my recruiter profile from job-seeker
		</div>
	</div>
	<div class="col-lg-12 form-group">
		<label>Add Location (State, City, Zip) </label>
		<input type="text" placeholder="Eg. New York, NY" class="form-control" id="select_city_name" name="select_city_name" />
	</div>
	<div class="col-lg-6 col-xs-12 form-group">
		<label>Number of Employees</label>
		<select class="form-control" name="number_of_employees">
			<option value="0-100">0-100</option>
			<option value="100-150">100-150</option>
		</select>
	</div>
	<div class="col-lg-5 col-xs-12 form-group pull-right"><label>Company Hiring In These Location</label><br>
	<span style="color:red;" id="error">Please Add atleast one city</span>
	<ul class="nav nav-pills" id="selected_city_name" role="tablist">
	  <!--li role="presentation"><a href="#">New York, NY <span class="badge"><i class="fa fa-close"></i></span></a></li-->
	</ul>
	<script type="text/javascript">
		var $count_city=0;
		$('#select_city_name').change(function(){
			if ($('#selected_city_name').find('input[value=' + $('#select_city_name').val() + ']').length == 0)
			$('#selected_city_name').append('<li role="presentation" onclick="this.parentNode.removeChild(this);">'+
				'<a>'+ $('#select_city_name').val() +
				'<input type="hidden" name="hiring_location[]" value="'+ $('#select_city_name').val() +'">'+
				'<span class="badge"><i class="fa fa-close"></i></span></a></li>'
			);
			$(this).val(null);
			$('#error').hide(); 
		});
	</script>
	</div>
	<div class="col-lg-12 col-xs-12 form-group">
		<input type="checkbox" name="is_automatically_repost">Automatically repost this job after 28 if not filled
	</div>

	<div class="col-lg-12 form-group">
		<input type="submit" value="Post Job" id="submit" class="theme-btn pull-right" />
	</div>
</form>
<script type="text/javascript">
	$('#error').hide();
	$('#submit').click(function() {
		if($('#selected_city_name').find('input').val()==null){
			$('#error').show();
			$('#job_post_form').attr('action','');
		}
		else{
			$('#job_post_form').attr('action','<?php echo base_url();?>index.php/job_post');
			$('#error').hide();
		}
	});
</script>
</div>
	
</div>
</section>