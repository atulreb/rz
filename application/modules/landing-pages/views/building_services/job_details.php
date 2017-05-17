<?php $this->load->view('partials/l_header') ?>
 
<div class="site-inner"><div class="wrap"><div class="container sjb-container" id="container"><div id="content" class="sjb-content" role="main">
                <!-- Start Content Wrapper
                ================================================== -->
                <div class="sjb-page">
                    <div class="sjb-detail">
                        <div class="list-data">

                            <!-- Start Job Details
                            ================================================== -->


                            <!-- Start Company Meta
                            ================================================== -->
                            <header>
                                <div class="row">            

                                    <!-- Start Job Title 
                                    ================================================== -->
                                    <div class="col-md-12">
                                        <div class="job-detail">        
                                            <h3><span class="job-title"><?php echo $job_detail[0]['job_title'] ?></span></h3>            
                                        </div>
                                    </div>
                                    <!-- End Job Title 
                                    ================================================== -->


                                    <div class="col-md-11 col-sm-10 header-margin-top">
                                        <div class="row">


                                            <!-- Start Company Name 
                                            ================================================== -->
                                            <div class="col-md-5">
                                                <div class="job-info ">
                                                    <h4>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!-- End Company Name 
                                            ================================================== -->


                                            <!-- Start Job Type 
                                            ================================================== -->
                                            <div class="col-md-2 col-sm-4">

                                            </div>
                                            <!-- ==================================================
                                            End Job Type  -->


                                            <!-- Start Job Location
                                            ================================================== -->
                                            <div class="col-md-2 col-sm-4">
                                                <div class="job-location"><i class="fa fa-map-marker"></i><?php echo $job_detail[0]['state_name'] ?></div>

                                            </div>
                                            <!-- ==================================================
                                            End Job Location -->


                                            <!-- Start Job Posted Date 
                                            ================================================== -->
                                            <div class="col-md-3 col-sm-4">
                                                <div class="job-date"><i class="fa fa-calendar-check-o"></i><?php echo date("F d, Y", strtotime($job_detail[0]['created_time'])) ?></div>

                                            </div>
                                            <!-- ==================================================
                                            End Job Posted Date -->

                                        </div>
                                    </div>        

                                    <!-- Start Company Tagline 
                                    ================================================== -->
                                    <!-- ==================================================
                                    End Company Tagline  -->

                                </div>
                            </header>
                            <!-- ==================================================
                            End Company Meta -->


                            <div class="job-description">

                                <strong><?php echo $job_detail[0]['job_title'] ?> - <?php echo $job_detail[0]['state_name'] ?></strong><br><br>
                                <strong> Job Summary:</strong><br>
                                <?php echo $job_detail[0]['long_desc'] ?>
                                <strong>Please submit your resume if you are a resourceful team player who excels at building trusting relationships, with clients and coworkers.  </strong><br><br>

                                <!--Salary: $12.00-$15.00 an Hour, plus time and a half overtime as needed.--> 

                            </div>
                            <div class="clearfix"></div>


                            <!-- Start Job Features
                            ================================================== -->
                            <div class="job-features">

                                <table class="table">
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <!-- ==================================================
                            End Job Features -->

                            <div class="clearfix"></div>

                            <!-- Start Job Application Form
                            ================================================== -->
                            <form class="jobpost-form" id="jobAppplyForm" name="c-assignments-form"  enctype="multipart/form-data">
                                <h3>Apply Online</h3>    
                                <div id="applystatus"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jobapp_name">Name<span class="required">*</span></label>
                                            <input type="text" name="full_name" class="form-control sjb-required" id="jobapp_name" required="required" >
                                            <input type="hidden" class="form-control"  name="job_id" id="dyn_job_id" value="<?php echo $job_id; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="jobapp_phone">Phone<span class="required">*</span></label>
                                            <input type="tel" name="mobile" class="form-control sjb-phone-number sjb-required" id="jobapp_phone" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobapp_e-mail">E-Mail<span class="required">*</span></label>
                                            <input type="text" name="email" class="form-control sjb-not-required" id="jobapp_e_mail"  >
                                        </div>
                                        <div class="form-group">
                                            <label for="jobapp_e-mail">Experience<span class="required">*</span></label>
                                            <input type="text" name="experience" class="form-control sjb-not-required" id="jobapp_e_mail"  >
                                        </div>
                                        <div class="form-group">
                                            <label for="jobapp_state">State<span class="required">*</span></label>
                                            <select name="state" class="form-control" >
                                                <option value="">Select State</option>
                                                <?php
                                                foreach ($states as $state) {
                                                    echo "<option value='" . $state['id'] . "'>" . $state['name'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="applicant_resume">Attach Resume<span class="sjb-required required">*</span></label>
                                            <input type="file" name="resume" id="applicant-resume" class="sjb-attachment form-control "required="required">
                                            <span class="sjb-invalid-attachment validity-note" id="file-error-message"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="jobapp_e-mail">Message</label>
                                            <textarea name="message" class="form-control sjb-not-required" id="jobapp_e_mail"  ></textarea>
                                        </div>
                                        <div class="form-group" id="sjb-form-padding-button">
                                            <button id="submitJobApplication" class="btn btn-primary app-submit">Submit</button>
                                        </div>
                                    </div>    
                                </div>
                            </form>
                            <div class="clearfix"></div>

                            <div id="jobpost_form_status"></div>
                            <!-- ==================================================
                            End Job Application Form -->

                            <!-- ==================================================
                            End Job Details -->

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- ==================================================
                End Content Wrapper -->

            </div></div></div></div>
<?php $this->load->view('partials/l_footer') ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    jQuery(document).on('click', '#submitJobApplication', function (e) {
        jQuery("#submitJobApplication").html("Please wait...");
        e.preventDefault();
        var formData = new FormData(jQuery("#jobAppplyForm")[0]);
        //alert();
        jQuery.ajax({
            url: '<?php echo base_url() ?>backend/job/applyToJob',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            mimeType: "multipart/form-data",
            dataType: 'json',
            success: function (response) {
                //alert(response);
                jQuery("#submitJobApplication").html("Submit");
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