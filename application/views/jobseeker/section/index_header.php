<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->session->userdata('e_mail')!=''){
  redirect(base_url().'index.php/home');
}
?>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header"> 
      <a class="navbar-brand" href="<?php echo base_url();?>">
        <img src="<?php echo base_url();?>images/logo.jpg" alt="HedgeLinks Logo" title="HedgeLinks" class="img-responsive" />
      </a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
        <span class="sr-only">Toggle navigation</span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="head-bar pull-right"> 
      <span class="head-title">Pay 
        <span class="price-highlight">$49.99</span> For Per Job Posting!
        <button class="post-job-btn" id="post-btn">Post Job</button>
      </span>
      <div class="clearfix"></div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li <?php ($active==1)?print_r('class="active"'):null;?> ><a href="<?php echo base_url();?>">Home</a></li>
          <li <?php ($active==2)?print_r('class="active"'):null;?> ><a href="#">Job</a></li>
          <li <?php ($active==3)?print_r('class="active"'):null;?> ><a href="#">Browse Job</a></li>
          <li <?php ($active==4)?print_r('class="active"'):null;?> ><a href="#">Search Resume</a></li>
          <li><a href="#" data-toggle="modal" data-target=".employee-login"><i class="fa fa-user"></i> <u>Sign In</u></a></li>
          <li class="divider">|</li>
          <li>
            <a href="#" data-toggle="modal" data-target=".employer-login"><i class="fa fa-user-md"></i> <u>Employers</u></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
