<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->session->userdata('e_mail')!=''){
  redirect(base_url().'index.php/home');
}
?>
<section class="inner-page-block">
<div class="container">
<div class="clearfix"></div>
<h2 class="page-heading">Employer Registration</h2>
<p class="custom-title"><span>Post a job in minutes.</span> Have an account? If you don't have any account you can create one below by entering your required details. Your account details can be confirmed via e-mail.</p>
<span class="pull-right note-links"><a href="<?php echo base_url();?>index.php/employer_register/contact_us">Contact Us</a> | <a href="#" data-toggle="modal" data-target=".employer-login">Employers Sing In</a></span>
<div class="clearfix"></div>
<form action="<?= base_url();?>index.php/employer_register" method="post">
<div class="row">

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
		<label>Phone Number</label>
		<?php echo form_error('phone'); ?><br />
		<?php echo form_input(array( 'placeholder'=>"Phone", 'class'=>"form-control", 'name'=>"phone"), set_value('phone'))?>
	</div>
	<div class="col-lg-6 form-group">
		<label>Company Name</label>
		<?php echo form_error('company_name'); ?><br />
		<?php echo form_input(array( 'placeholder'=>"Company Name", 'class'=>"form-control", 'name'=>"company_name"), set_value('company_name'))?>
	</div>
	<div class="col-lg-6 form-group">
		<label>Type of Company</label>
		<?php echo form_error('type_of_company'); ?><br />
		<?php echo form_input(array( 'placeholder'=>"Type of Company", 'class'=>"form-control", 'name'=>"type_of_company"), set_value('type_of_company'))?>
	</div>
	<div class="col-lg-6 form-group">
		<label>Company Website</label>
		<?php echo form_error('company_website'); ?><br />
		<?php echo form_input(array( 'placeholder'=>"Company Website", 'class'=>"form-control", 'name'=>"company_website"), set_value('company_website'))?>
	</div>
	<div class="col-lg-6 form-group">
		<label>Password</label>
		<?php echo form_error('password'); ?><br />
		<?php echo form_password(array( 'placeholder'=>"Password", 'class'=>"form-control", 'name'=>"password"), set_value('password'))?>
	</div>
	<div class="col-lg-6 form-group">
		<label>ZIP Code</label>
		<?php echo form_error('zip_code'); ?><br />
		<?php echo form_input(array( 'placeholder'=>"ZIP Code", 'class'=>"form-control", 'name'=>"zip_code"), set_value('zip_code'))?>
	</div>
	<div class="col-lg-12 form-group"><input type="submit" value="Continue" class="theme-btn pull-right" /></div>
</div>
</form>	
</div>
</section>
