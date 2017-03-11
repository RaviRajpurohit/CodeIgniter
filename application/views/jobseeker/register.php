<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->session->userdata('e_mail')!=''){
  redirect(base_url().'index.php/home');
}
?>
<section class="inner-page-block">
<div class="container">
<div class="clearfix"></div>
<h2 class="page-heading">Create A Free Account.</h2>

<div class="row">
	<?php echo form_open('register/sign_up'); ?>
	<div class="col-lg-6 form-group">
		<label>First Name</label>
		<?php echo form_error('first_name'); ?><br />
        <?php echo form_input(array('id' => 'first_name', 'name' => 'first_name', 'class'=>'form-control', 'placeholder'=>"First Name"), set_value('first_name')); ?>
	</div>
	<div class="col-lg-6 form-group">
		<label>Last Name</label>
		<?php echo form_error('last_name'); ?><br />
        <?php echo form_input(array('id' => 'last_name', 'name' => 'last_name', 'class'=>'form-control', 'placeholder'=>"Last Name"), set_value('last_name')); ?>
	</div>
	<div class="col-lg-6 form-group">
		<label>E-mail</label>
		<?php echo form_error('e_mail'); ?><br />
        <?php echo form_input(array('id' => 'e_mail', 'name' => 'e_mail', 'class'=>'form-control', 'placeholder'=>"E-mail"), set_value('e_mail')); ?>
	</div>
	<div class="col-lg-6 form-group">
		<label>Password</label>
		<?php echo form_error('password'); ?><br />
        <?php echo form_password(array('id' => 'password', 'name' => 'password', 'class'=>'form-control', 'placeholder'=>"Password"), set_value('password')); ?>
	</div>
	<div class="col-lg-6 form-group">
		<label>Target Job Title</label>
		<?php echo form_error('target_job_title'); ?><br />
        <?php echo form_input(array('id' => 'target_job_title', 'name' => 'target_job_title', 'class'=>'form-control', 'placeholder'=>"Target Job Title"), set_value('target_job_title')); ?>
	</div>
	<div class="col-lg-6 form-group"><label>Function</label>
		<?php echo form_error('function'); ?><br />
		<select class="form-control" name="function" id="function">
			<option value="">Select one</option>
		<?php 
			foreach ($fun as $key => $value) {
				echo '<option>'.$value['function_value'].'</option>';
			}
		?>
		</select>
	</div>
	<div class="col-lg-6 form-group"><label>Total Compensation</label>
		<?php echo form_error('total_compensation'); ?><br />
		<select class="form-control" name="total_compensation" id="total_compensation">
			<option value="">Select one</option>
		<?php
			foreach ($total_compensation as $key => $value) {
				echo '<option>'.$value['total_compensation_value'].'</option>';
			}
		?>
		</select>
	</div>
	<div class="col-lg-12 form-group">
		<input type="submit" value="Submit" class="theme-btn pull-right" />
	</div>
<?php echo form_close(); ?>
</div>
<span class="pull-right note-links">
	Already a member? <a href="#" data-toggle="modal" data-target=".employee-login"><u>Sign In here</u></a>
</span>
</div>
</section>
