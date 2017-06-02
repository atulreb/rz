<style>
.active1 {
    background: #bf1e2d;
    border: 2px solid #bf1e2d !important;
    color: #fff !important;
}
.btnapply {background: #a30d0d;
    padding: 8px 22px;
    bottom: 31px;
    position: relative;
    left: 211px;
    color: #fff;
	border:none;
	}
</style>
<?php $this->load->view('partials/l_header')?>

         
        
        <div class="body_width site_middle_content"><!-- post title holder -->
		<div class="page_title_holder">
			<div class="container">
				<div class="page_info">
								<h1>Job Opportunities</h1>
							</div>
				<div class="page_nav">
				
				</div>
			</div>
		</div>
		
<!-- end post title holder -->
<section class="main_content">
	<!-- start single portfolio container -->
		<!--div class="container services new_section">
		<div id="post-24135" class="portfolio_page row post-24135 project type-project status-publish has-post-thumbnail hentry tagportfolio-job-opportunities">
			<div class="span12 portfolio_items">
				<ul div id="portfolio_container" class="jobs_list thumbnails">
				<?php foreach($jobs as $job){?>
											<li class="portfolio_element span4 portfoliotagfilter-job-opportunities">
							<div class="portfolio_item">
                                    <a href="<?php echo base_url()?>media/landing-pages/staffing/wp-content/uploads/picking-packing-.jpg" class="prettyPhoto slideshow_24135" rel="prettyPhoto"></a>
										<div class="portfolio_thumbnail">
									

            <img width="520" height="337" src="<?php echo base_url()?>media/landing-pages/staffing/wp-content/uploads/picking-packing--520x337.jpg" class="attachment-portfolio size-portfolio wp-post-image" alt="" />
											<div class="portfolio_overlay">
                                    </div>
                                    <div class="center-bar">
                                        <a class="prettyPhotolink icon-search goup" rel="slideshow_24135"></a>
                                    </div>
								</div>
								<div class="portfolio_info">
									<a href="<?php echo base_url()."staffing/job-details/".$job['id']?>"><h5><?php echo $job['job_title']?></h5></a>
                            		<span class="portfolio_category"><a href="javascript:;" rel="tag"><?php echo $job['service_category']?></a></span>
								</div>
							</div>
						</li>
				<?php }?>
									</ul>
				<div style="clear:both;margin:20px"></div>

                            <div style="text-align: center;"><button class="loadmore btn btn-primary btn_with_icon btn-effect" data-page="1">Load More</button></div>
			</div>
		</div>
	</div-->
	
	
	<div class="container-fluid" style="padding: 0;">
		<div class="row">
			 <div class="span7" style="margin-left: 4%;">
				<div class="left-tab">
					<div class="image-top">
						 <img id="dynicon" src="<?php echo frontend_asset_url()?>img/loading/Main_Logo.png" width="60"/>
					</div>
					<div class="main-heading">
						 <h3 class="text-left red-text" id="dyn_job_title"><?php echo $jobs[0]['job_title'] ?></h3>
						 <h6 class="text-right grey-text">Job Description</h6>
					</div>
					<div class="left-main-description content mCustomScrollbar" data-mcs-theme="dark">
						 <h3>Description</h3>
						 <p id="dyn_job_short_desc"> <?php echo $jobs[0]['short_desc'] ?>  </p>
						 
						 <span id="dyn_job_long_desc"><?php echo $jobs[0]['long_desc'] ?></span>
					</div>
					
				</div>
				<button type="button" data-toggle="modal" data-target="#jobApplyModal" class="btnapply">Apply</button>
				
			 </div>
			 <div class="span10" style="margin-left: 0;">
					<div class="right-tab">
						  <div class="right-main-head">
							 <h2 class="text-center red-text">JOB LISTING</h2>
						  </div>
						  <div class="right-main-description">
							 <div class="span2 cbutton content mCustomScrollbar" data-mcs-theme="dark">
								<a class="list-btn" id="3960"  onclick="getStateJobs('3960')" href="javascript:;">Oklahoma</a>
               <a class="list-btn" id="3970" onclick="getStateJobs('3970')" href="javascript:;">Texas</a>
               <a class="list-btn" id="3922" onclick="getStateJobs('3922')" href="javascript:;">Arkansas</a>
               <a class="list-btn" id="3939" onclick="getStateJobs('3939')" href="javascript:;">Louisiana</a>
               <a class="list-btn" id="3947" onclick="getStateJobs('3947')" href="javascript:;">Mississippi</a>
               <a class="list-btn" id="3919" onclick="getStateJobs('3919')" href="javascript:;">Alabama</a>
               <a class="list-btn" id="3974" onclick="getStateJobs('3974')" href="javascript:;">Virginia</a>
        
			   <a class="list-btn" id="3930" onclick="getStateJobs('3930')" href="javascript:;">Florida</a>
               <a class="list-btn" id="3931" onclick="getStateJobs('3931')" href="javascript:;">Georgia</a>
               <a class="list-btn" id="3938" onclick="getStateJobs('3938')" href="javascript:;">Kentucky</a>
               <a class="list-btn" id="3957" onclick="getStateJobs('3957')" href="javascript:;">North Carolina</a>
               <a class="list-btn" id="3966" onclick="getStateJobs('3966')" href="javascript:;">South Carolina</a>
               <a class="list-btn" id="3969" onclick="getStateJobs('3969')" href="javascript:;">Tennessee</a>
               <a class="list-btn" id="3976" onclick="getStateJobs('3976')" href="javascript:;">West Virginia</a>

							 </div>
							 <div class="span7 all-right-description content mCustomScrollbar" data-mcs-theme="dark" >
							 
							
							  <div class="listing-job" id="statejobsresult">
							  <ul>
							  
							 <?php foreach($jobs as $job_data1){?>
							  <li>
									<div class="job_list_icon"><?php echo substr($job_data1['job_title'], '0', '1') ?></div>
									<div class="listing-description">
										<h3><?php echo $job_data1['job_title'] ?></h3>
										<h6 class="text-right" style="color:#25aae1;cursor:pointer;" onclick="getJobDesc(<?php echo $job_data1['id']; ?>)">Job Description</h6>
										<p>
											<?php echo $job_data1['short_desc'] ?>
										</p>
									</div>
							  </li>
							 <?php }?>
							  </div>
							 
							 </div>
						  </div>
					</div>
			 </div>
		</div>
	</div>
	
	<div class="modal fade" id="jobApplyModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Apply to job</h5>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="jobAppplyForm" method="post" class="form-horizontal">
                    <span id="applystatus"></span>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Full Name</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="full_name" />
                            <input type="hidden" name="job_id" id="dyn_job_id" value="<?php echo $jobs[0]['id'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Email</label>
                        <div class="col-xs-5">
                            <input type="email" class="form-control" placeholder="Enter your mobile" name="email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Mobile</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Experience</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" placeholder="Enter your experience" name="experience" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">State</label>
                        <div class="col-xs-5">
                            <select name="state"  onchange="selectCity(this.options[this.selectedIndex].value)" class="form-control" >
                                <option value="">Select State</option>
                                <?php
                                foreach ($states as $state) {
                                    echo "<option value='" . $state['id'] . "'>" . $state['name'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Upload Resume</label>
                        <div class="col-xs-5">
                            <input type="file" class="form-control" placeholder="Upload resume" name="resume" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Message</label>
                        <div class="col-xs-5">
                            <textarea  class="form-control" name="message" placeholder="ENter your message here" ></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="button" id="submitJobApplication" class="btnapply">Apply</button>
                            <button type="button" class="btnapply"  data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
	
	
		<!-- end single portfolio container -->


</section><!-- #content -->

</div> <!-- end body width from header -->


<?php $this->load->view('partials/l_footer')?>
<script>
 jQuery(document).on('click', '.loadmore', function () {
                    jQuery(this).text('Loading...');
                    var ele = jQuery(this).parent();
					//alert( jQuery(this).data('page'));
                    jQuery.ajax({
                        url: '<?php echo base_url()?>landing-pages/staffing/loadMoreJobs',
                        type: 'POST',
                        data: {
                            page: jQuery(this).data('page'),
                        },
                        success: function (response) {
                            //alert(response);
                            if (response) {
                                ele.hide();
                                jQuery("#portfolio_container").after(response);
                            }
                        }
                    });
                });
				
				
function getJobDesc(id) {

       jQuery.ajax({
            url: '<?php echo base_url()?>backend/job/getJobDescription',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'json',
            success: function (response) {
                //alert(response.job_title);
                if (response.status === '1') {

                    jQuery("#dyn_job_title").html(response.job_title);
                    jQuery("#dyn_job_short_desc").html(response.short_desc);
                    jQuery("#dyn_job_long_desc").html(response.long_desc);
                    jQuery("#dyn_job_id").val(response.job_id);
					jQuery("#dynicon").attr("src", response.icon);
                }
            }
        });
    }
function getStateJobs(id) {
	//alert(id);
	jQuery(".list-btn").removeClass("active1"); 
	jQuery("#"+id).addClass('active1');
        jQuery.ajax({
            url: '<?php echo base_url()?>backend/job/getStateJobs',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'json',
            success: function (response) {
                //alert(response.job_title);
                if (response.status === '1' && response.job_title !=='') {
                    jQuery("#dyn_job_title").html(response.job_title);
                    jQuery("#dyn_job_short_desc").html(response.short_desc);
                    jQuery("#dyn_job_long_desc").html(response.long_desc);
                    jQuery("#dyn_job_id").val(response.job_id);
                   jQuery("#statejobsresult").html(response.result);
                }
else {
                    alert("No jobs found in this state");
                    return false;
                }
            }
        });
    }
	
	jQuery(document).on('click', '#submitJobApplication', function () {
                    var formData = new FormData(jQuery("#jobAppplyForm")[0]);
                   jQuery.ajax({
                        url: '<?php echo base_url()?>backend/job/applyToJob',
                        type: 'POST',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        mimeType: "multipart/form-data",
                        dataType: 'json',
                        success: function (response) {
                            //alert(response);
                            if (response.status === '1') {
                                jQuery("#applystatus").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">X</button><strong>' + response.msg + '</div>');
                                jQuery('#jobAppplyForm')[0].reset();
                                return true;
                            } else {
                                jQuery("#applystatus").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">X</button><strong>' + response.msg + '</div>');
                                return false;
                            }
                        }
                    });
                });
</script>