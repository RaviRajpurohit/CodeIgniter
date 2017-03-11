<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 footer-note">
			<img src="<?php echo base_url();?>images/footer-logo.png" class="footer-logo" alt="Hedge Links" />
			<p>Get the edge you need to find and apply for the right technology jobs fast. Browse thousands of open positions. Java, project manager, business analyst, .net, SAP, start-ups, systems administrator, DBA, Hadoop, SQL, programming, VMware, software engineer, Ruby, and so many more....</p>
			<div class="phone-email">Phone:<span>183 5425 5896</span></div>
			<div class="phone-email">e-mail:<span>info@hedgelink.com</span></div>
			</div>
			<div class="col-lg-2 link-block">
			<h3>Company</h3>
				<ul>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Award &amp; Trends</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Testimonials</a></li>
				</ul>
			</div>
			<div class="col-lg-2 link-block">
			<h3>Community</h3>
				<ul>
					<li><a href="#">Help Centre</a></li>
					<li><a href="#">Guidelines</a></li>
					<li><a href="#">Terms of Use</a></li>
				</ul>
			</div>
			<div class="col-lg-2 link-block">
			<h3>Work With Us</h3>
				<ul>
					<li><a href="#">Job</a></li>
					<li><a href="#">Advertisers</a></li>
					<li><a href="#">Developers</a></li>
					<li><a href="#">Careers</a></li>
				</ul>
			</div>
			<div class="col-lg-2 link-block">
			<h3>Employers</h3>
				<ul>
					<li><a href="#">Employer Center</a></li>
					<li><a href="#">Free Employee Account</a></li>
					<li><a href="#">Post a Job</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="copyright">
	<div class="container">
		<div class="row">
			<span class="col-lg-6 col-xs-6 text-left">Copyright&copy; 2016, Hedge links</span>
			<span class="col-lg-6 col-xs-6 text-right">
				<a href="<?= $footer_links[0]['fbLink'];?>" target=_blnak"><img src="<?php echo base_url();?>images/facebook-icon.png" alt="Facebook" /></a>
				<a href="<?= $footer_links[0]['gPlushLink'];?>" target=_blnak"><img src="<?php echo base_url();?>images/gplus-icon.png" alt="Google Plus" /></a>
				<a href="<?= $footer_links[0]['twitterLink'];?>" target=_blnak"><img src="<?php echo base_url();?>images/twitter-icon.png" alt="Twitter" /></a>
				<a href="<?= $footer_links[0]['rssLink'];?>" target=_blnak"><img src="<?php echo base_url();?>images/rss-icon.png" alt="RSS" /></a>
			</span>
		</div>
	</div>
</section>
<!---------------------------------------normal user sign in poup------------------------------>
<div class="modal fade bs-example-modal-sm employee-login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
	    	<?php echo form_open('sign_in/sing_in_user'); ?>
			<div class="modal-header">
		    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Sign In</h4>
		    </div>
			<div class="modal-body">
		    	<div class="row">
		    		<div class="col-lg-12 form-group">
						<label>E-mail</label>
						<?php echo form_input(array('id' => 'e_mail', 'name' => 'e_mail', 'class'=>'form-control', 'placeholder'=>"E-mail")); ?>
					</div>
					<div class="col-lg-12 form-group">
						<label>Password</label>
						<?php echo form_password(array('id' => 'password', 'name' => 'password', 'class'=>'form-control', 'placeholder'=>"Password")); ?>
					</div>
			
					<div class="col-lg-12 form-group">
			<!--    Try next tmie -->
			<input type="checkbox" /> Remember Me 
			<!--                   -->
						<a href="<?php echo base_url();?>index.php/sign_in/forgot_password" class="mt-3 pull-right">Forgot Password?</a>
					</div>
					<div class="col-lg-12">By signing, you agree to HedgeLinks <a href="<?php echo base_url();?>index.php/sign_in/terms_of_use">Terms of use</a> and <a href="<?php echo base_url();?>index.php/sign_in/privacy_policy">Privacy Policy</a>.</div>
					<div class="col-lg-12">Don't have account? <a href="<?php echo base_url();?>index.php/register">Register Now</a>.</div>
				</div>
			</div>
			
			<div class="modal-footer">
		        <input type="submit" value="Submit" class="theme-btn" />
		    </div>
			<?php echo form_close(); ?>
		</div>
  </div>
</div>


<!---------------------------------------employer user sign in poup------------------------------>
<div class="modal fade bs-example-modal-sm employer-login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
    <?php echo form_open('employer_sign_in/sing_in_user'); ?>
	<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Employer Sign In</h4>
      </div>
	  <div class="modal-body">
      <div class="row">
	
	<div class="col-lg-12 form-group">
	<label>E-mail</label><input type="text" placeholder="E-mail" name="e_mail" class="form-control" />
	</div>
	<div class="col-lg-12 form-group">
	<label>Password</label><input type="password" placeholder="Password" name="password" class="form-control"/>
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
    </div>
  </div>
</div>

<!--------------------------------------------------------------------------------------->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?php echo base_url();?>js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script> 

<!-- FlexSlider --> 
<script defer src="<?php echo base_url();?>js/jquery.flexslider.js"></script> 
<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
<script type="text/javascript">
$('#post-btn').click(function(){
  window.location.href='<?php echo base_url();?>index.php/job_post';
});
</script>
</body>
</html>
