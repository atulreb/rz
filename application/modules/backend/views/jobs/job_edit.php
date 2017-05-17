<style>
    .danger, .mandatory {
        color: #BD4247;
    }
    .alert{
        padding:8px 0px;
    }
</style> 
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

<!-- page content -->
<div class="right_col" role="main"> <!-- top tiles -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit job</small></h2>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form  id="demo-form2"  class="form-horizontal form-label-left" novalidate action="<?php echo base_url(); ?>backend/job/editJob"  enctype="multipart/form-data"  method="POST">
                         <input type="hidden" name="edit_id" value="<?php echo $edit_id; ?>" id="edit_id" />
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Job Title <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12"name="job_title" value="<?php echo $job_data[0]['job_title']?>"  required="required"  id="name">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Short Description <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea class="form-control col-md-7 col-xs-12"   required="required" name="short_desc"><?php echo $job_data[0]['short_desc']?></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Requirement <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea class="ckeditor form-control col-md-7 col-xs-12" required="required" data-validate-length-range="5,100" id="productdescription" name="long_desc" ><?php echo $job_data[0]['long_desc']?></textarea>
                                <div class="error hidden" id="labelProductError">Enter content length should be greater than 12. </div>

                            </div>
                        </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">State<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="state" required="required"  onchange="selectCity(this.options[this.selectedIndex].value)" class="form-control" >
                                    <option value="">Select State</option>
                                    <?php
                                    foreach ($states as $state) {
                                        if($state['id'] == $job_data[0]['state']) echo $selected="selected"; else $selected = "";
                                        echo "<option ".$selected." value='" . $state['id'] . "'>" . $state['name'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Publish date<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" name="posting_date" value="<?php echo date("m/d/Y",strtotime($job_data[0]['posting_date']))?>" id="single_cal3" placeholder="First Name" aria-describedby="inputSuccess2Status3">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Service Category<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="service_category" required="required"  class="form-control" autocomplete="off">
                                    <option value="">Select</option>
                                    <option <?php if($job_data[0]['service_category'] == 'Foundation') echo "Selected";?> value="Foundation">Foundation</option>
                                    <option <?php if($job_data[0]['service_category'] == 'Painters') echo "Selected";?>  value="Painters">Painters</option>
                                    <option <?php if($job_data[0]['service_category'] == 'Lawn Care') echo "Selected";?>  value="Lawn Care">Lawn Care</option>
                                    <option <?php if($job_data[0]['service_category'] == 'Building Services') echo "Selected";?>  value="Building Services">Building Services</option>
                                    <option <?php if($job_data[0]['service_category'] == 'Pest Control') echo "Selected";?>  value="Pest Control">Pest Control</option>
                                    <option <?php if($job_data[0]['service_category'] == 'Staffing') echo "Selected";?>  value="Staffing">Staffing</option>
                                    <option <?php if($job_data[0]['service_category'] == 'Housekeepers') echo "Selected";?>  value="Housekeepers">Housekeepers</option>
                                    <option <?php if($job_data[0]['service_category'] == 'Towing') echo "Selected";?>  value="Towing">Towing</option>
                                    <option <?php if($job_data[0]['service_category'] == 'Handyman') echo "Selected";?>  value="Handyman">Handyman</option>
                                    <option <?php if($job_data[0]['service_category'] == 'Mobile Detail') echo "Selected";?>  value="Mobile Detail">Mobile Detail</option>
                                    <option <?php if($job_data[0]['service_category'] == 'Moving and Transport') echo "Selected";?>  value="Moving and Transport">Moving and Transport</option>
                                    <option <?php if($job_data[0]['service_category'] == 'Pool Cleaning') echo "Selected";?>  value="Pool Cleaning">Pool Cleaning</option>
                                    <option <?php if($job_data[0]['service_category'] == 'Security') echo "Selected";?>  value="Security">Security</option>

                                </select>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="status" required="required" name="blog_status" class="form-control" autocomplete="off">
                                    <option  value="">Select</option>
                                    <option <?php if($job_data[0]['status'] == '1') echo "selected";?> value="1">Active</option>
                                    <option <?php if($job_data[0]['status'] == '0') echo "selected";?> value="0">Inactive</option>
                                </select>
                            </div>
                        </div>




                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button id="send" type="submit" class="btn btn-success">Submit</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end of weather widget -->
</div>
</div>
</div>
</div>


<!-- /page content -->