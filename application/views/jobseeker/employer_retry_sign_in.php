<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->session->userdata('e_mail')!=''){
  redirect(base_url().'index.php/home');
}
?>
    <?php 
    	echo form_open('employer_sign_in/sing_in_user'); 
    	echo '<span style="color:red;">'.$this->session->flashdata('error').'</span>';
    ?>
	<div class="modal-header">
        <h4 class="modal-title">Employer Sign In</h4>
      </div>
	  <div class="modal-body">
      <div class="row">
	
	<div class="col-lg-12 form-group">
		<label>E-mail</label>
		<?php echo form_error('e_mail');?>
		<?php echo form_input(array('id' => 'e_mail', 'name' => 'e_mail', 'class'=>'form-control', 'placeholder'=>"E-mail", 'required'=>'required')); ?>
	</div>
	<div class="col-lg-12 form-group">
		<label>Password</label>
		<?php echo form_error('password');?>
		<?php echo form_password(array('id' => 'password', 'name' => 'password', 'class'=>'form-control', 'placeholder'=>"Password", 'required'=>'required')); ?>
	</div>
	<div class="col-lg-12 form-group">
	<!--    Try next tmie -->
	<input type="checkbox" /> Remember Me 
	<!--                  -->
		<a href="<?php echo base_url();?>index.php/employer_sign_in/forgot_password" class="mt-3 pull-right">Forgot Password?</a>
	</div>
	<div class="col-lg-12">By signing, you agree to HedgeLinks <a href="<?php echo base_url();?>index.php/employer_sign_in/terms_of_use">Terms of use</a> and <a href="<?php echo base_url();?>index.php/employer_sign_in/privacy_policy">Privacy Policy</a>.</div>
	<div class="col-lg-12">Don't have account? <a href="<?php echo base_url();?>index.php/employer_register">Register Now</a>.</div>
	</div>
	
	</div>
	
	<div class="modal-footer">
        <input type="submit" value="Submit" class="theme-btn" />
    </div>
    <?php echo form_close(); ?>
    