<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="clearfix"></div>
<div>
  <section class="banner">
    <h2 class="banner-heading">Find Your Dream Job</h2>
    <form class="form-inline">
      <input type="text" class="custom-input col-xs-10 col-xs-push-1" id="exampleInputName2" placeholder="Job Title, Keywords or Company">
      <input type="text" class="custom-input col-xs-10 col-xs-push-1" id="exampleInputEmail2" placeholder="Location">
      <select class="custom-input col-xs-10 col-xs-push-1">
        <option>Jobs</option>
        <?php
          foreach ($jobs_list as $key => $value) {
            echo '<option>'.$value['job_name'].'</option>';
          }
        ?>
      </select>
      <button type="submit" class="custom-input"><i class="glyphicon glyphicon-search"></i></button>
    </form>
  </section>
  <section class="slider">
    <div class="slider-form col-lg-8 col-lg-push-2 col-sm-8 col-sm-push-2">
      <h2 class="banner-heading">Find Your Dream Job</h2>
      <input type="text" class="custom-input col-lg-5 col-sm-5" id="exampleInputName2" placeholder="Job Title, Keywords or Company">
      <input type="text" class="custom-input col-lg-3 col-sm-3 location-input" id="exampleInputEmail2" placeholder="Location">
      <select class="custom-input col-lg-3">
        <option>Jobs</option>
        <?php
          foreach ($jobs_list as $key => $value) {
            echo '<option>'.$value['job_name'].'</option>';
          }
        ?>
      </select>
      <button type="submit" class="custom-input"><i class="glyphicon glyphicon-search"></i></button>
    </div>
    <div class="flexslider">
      <ul class="slides">
        <li> <img src="<?php echo base_url();?>images/banner-1.jpg" /> </li>
        <li> <img src="<?php echo base_url();?>images/banner-2.jpg" /> </li>
      </ul>
    </div>
  </section>
</div>
<section class="service-info-block">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="col-md-10 col-md-push-1 text-center info-detail-box"> <i class="fa fa-briefcase"></i>
          <div class="count-box">354,256</div>
          <div class="service-content-box">Freshly Posted Jobs</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="col-md-10 col-md-push-1 text-center info-detail-box"> <i class="fa fa-group"></i>
          <div class="count-box">16500</div>
          <div class="service-content-box">Active Employers</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="col-md-10 col-md-push-1 text-center info-detail-box"> <i class="fa fa-search"></i>
          <div class="count-box">250,000</div>
          <div class="service-content-box">Recruiter Searches For<br/>
            Candidates</div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="job-block">
  <div class="container">
    <div class="job-block-title">Jobs you may be interested in</div>
    <!--
          Posted jobs view
    -->
    <div class="row">
<?php
  if(isset($posted_job)){
    foreach ($posted_job as $key => $value) {
?>
      <div class="col-md-6 col-xs-12">
        <div class="col-md-12 job-detail-box">
          <div class="col-md-3 text-center">
            <span class="job-img">
               <img src="<?php echo base_url();?>images/job-img-1.jpg" alt="job image" />
            </span> 
          </div>
          <div class="col-md-9">
            <div class="col-md-12 job-sector"><?= $value['job_title'];?></div>
            <p class="col-md-12 job-desc"><?= $value['short_description'];?></p>
            <div class="col-md-6 job-post"><i class="fa fa-file-text"></i> Job Post <span class="job-count">150</span></div>
            <div class="col-md-6 open-job"><i class="fa fa-folder-open"></i> Open Job <span class="job-count">4550</span></div>
            <div class="col-md-6 job-salary"><i class="fa fa-dollar"></i> 79K to 250K</div>
            <div class="col-md-6">
              <button class="apply-job-btn">Apply Job</button>
            </div>
          </div>
        </div>
      </div>
<?php
    }
  }
  else{
?>
    
      <div class="col-md-6 col-xs-12">
        <div class="col-md-12 job-detail-box">
          <div class="col-md-3 text-center">
            <span class="job-img">
               <img src="<?php echo base_url();?>images/job-img-1.jpg" alt="job image" />
            </span> 
          </div>
          <div class="col-md-9">
            <div class="col-md-12 job-sector">Information Technology Job</div>
            <p class="col-md-12 job-desc">Lorem Ipsume Text goest here uite luie ym Text goest here jase. Tuimo nokron ipsum ofr </p>
            <div class="col-md-6 job-post"><i class="fa fa-file-text"></i> Job Post <span class="job-count">150</span></div>
            <div class="col-md-6 open-job"><i class="fa fa-folder-open"></i> Open Job <span class="job-count">4550</span></div>
            <div class="col-md-6 job-salary"><i class="fa fa-dollar"></i> 79K to 250K</div>
            <div class="col-md-6">
              <button class="apply-job-btn">Apply Job</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xs-12">
        <div class="col-md-12 job-detail-box">
          <div class="col-md-3 text-center"> 
            <span class="job-img">
              <img src="<?php echo base_url();?>images/job-img-1.jpg" alt="job image" />
            </span> 
          </div>
          <div class="col-md-9">
            <div class="col-md-12 job-sector">Healthcare Job</div>
            <p class="col-md-12 job-desc">Lorem Ipsume Text goest here uite luie ym Text goest here jase. Tuimo nokron ipsum ofr </p>
            <div class="col-md-6 job-post"><i class="fa fa-file-text"></i> Job Post <span class="job-count">150</span></div>
            <div class="col-md-6 open-job"><i class="fa fa-folder-open"></i> Open Job <span class="job-count">4550</span></div>
            <div class="col-md-6 job-salary"><i class="fa fa-dollar"></i> 79K to 250K</div>
            <div class="col-md-6">
              <button class="apply-job-btn">Apply Job</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xs-12">
        <div class="col-md-12 job-detail-box">
          <div class="col-md-3 text-center"> 
            <span class="job-img">
              <img src="<?php echo base_url();?>images/job-img-1.jpg" alt="job image" />
            </span> 
          </div>
          <div class="col-md-9">
            <div class="col-md-12 job-sector">Manufacturing Jobs</div>
            <p class="col-md-12 job-desc">Lorem Ipsume Text goest here uite luie ym Text goest here jase. Tuimo nokron ipsum ofr </p>
            <div class="col-md-6 job-post"><i class="fa fa-file-text"></i> Job Post <span class="job-count">150</span></div>
            <div class="col-md-6 open-job"><i class="fa fa-folder-open"></i> Open Job <span class="job-count">4550</span></div>
            <div class="col-md-6 job-salary"><i class="fa fa-dollar"></i> 79K to 250K</div>
            <div class="col-md-6">
              <button class="apply-job-btn">Apply Job</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xs-12">
        <div class="col-md-12 job-detail-box">
          <div class="col-md-3 text-center"> <span class="job-img"><img src="<?php echo base_url();?>images/job-img-1.jpg" alt="job image" /></span> </div>
          <div class="col-md-9">
            <div class="col-md-12 job-sector">Mechanical Engineering Jobs</div>
            <p class="col-md-12 job-desc">Lorem Ipsume Text goest here uite luie ym Text goest here jase. Tuimo nokron ipsum ofr </p>
            <div class="col-md-6 job-post"><i class="fa fa-file-text"></i> Job Post <span class="job-count">150</span></div>
            <div class="col-md-6 open-job"><i class="fa fa-folder-open"></i> Open Job <span class="job-count">4550</span></div>
            <div class="col-md-6 job-salary"><i class="fa fa-dollar"></i> 79K to 250K</div>
            <div class="col-md-6">
              <button class="apply-job-btn">Apply Job</button>
            </div>
          </div>
        </div>
      </div>
    
<?php
  }
?>
    </div>
    <!--
        posted job view end
    -->
  </div>
</section>
<section class="client-block">
  <div class="container">
    <div class="row"> 
        <span class="col-lg-2 col-xs-4 text-center"><img src="<?php echo base_url();?>images/ibm-logo.jpg" alt="IBM" class="img-responsive" /></span> 
        <span class="col-lg-2 col-xs-4 text-center"><img src="<?php echo base_url();?>images/google-logo.jpg" alt="Google" class="img-responsive" /></span> 
        <span class="col-lg-2 col-xs-4 text-center"><img src="<?php echo base_url();?>images/infosys-logo.jpg" alt="Infosys" class="img-responsive" /></span> 
        <span class="col-lg-2 col-xs-4 text-center"><img src="<?php echo base_url();?>images/microsoft-logo.jpg" alt="Microsoft" class="img-responsive" /></span> 
        <span class="col-lg-2 col-xs-4 text-center"><img src="<?php echo base_url();?>images/cognizant-logo.jpg" alt="Cognizant" class="img-responsive" /></span> 
        <span class="col-lg-2 col-xs-4 text-center"><img src="<?php echo base_url();?>images/tcs-logo.jpg" alt="TCS" class="img-responsive" /></span> 
    </div>
  </div>
</section>