<style>
    .danger, .mandatory {
        color: #BD4247;
    }
    .alert{
        padding:8px 0px;
    }
    .readonly,.oro {
        border: none;
        box-shadow: none;
        pointer-events: none;
        border-bottom: 1px solid #ccc;
        resize:none;
    }
</style> 

<!-- page content -->
<div class="right_col" role="main"> <!-- top tiles -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
 <?php
    $msg = $this->session->userdata('msg');
    $this->session->unset_userdata('msg');
    if (isset($msg) != '') {
        ?>
        <div class="alert alert-success alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <h4><i class="icon fa fa-check"></i> Success!</h4>
            <?php echo $msg; ?>
        </div>
    <?php } ?>
            <?php
            if (isset($error) != '') {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    <?php echo $error; ?>
                </div>
            <?php } ?>
            <div class="x_panel">
                <div class="x_title">
                    <h2>Employee Profile</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form  id="demo-form2"  class="form-horizontal form-label-left" novalidate action="<?php echo base_url(); ?>backend/employee/profile"  enctype="multipart/form-data"  method="POST">

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Employee name<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12 readonly"name="emp_name" value="<?php echo $userdata[0]['emp_name'] ?>"  required="required"  id="name">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Employee ID <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12 oro"name="emp_id" value="<?php echo $userdata[0]['emp_id'] ?>" required="required"   id="name">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea class="ckeditor form-control col-md-7 col-xs-12 readonly" data-validate-length-range="5,100" name="address"><?php echo $userdata[0]['address'] ?></textarea>


                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" class="form-control oro" name="email" required="required" value="<?php echo $userdata[0]['email'] ?>"  placeholder="First Name" aria-describedby="inputSuccess2Status3">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control readonly" name="phone" required="required" value="<?php echo $userdata[0]['phone'] ?>"  placeholder="Enter Phone number" aria-describedby="inputSuccess2Status3">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hire date<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control readonly" name="hire_date" required="required" value="<?php echo date("m/d/Y", strtotime($userdata[0]['hire_date'])) ?>" id="single_cal3" placeholder="Select hire date" aria-describedby="inputSuccess2Status3">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Start date<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control readonly" name="start_date" id="single_cal2" value="<?php echo date("m/d/Y", strtotime($userdata[0]['start_date'])) ?>" placeholder="Select Start date" aria-describedby="inputSuccess2Status3">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Starting Salary<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control readonly" name="starting_salary" id="single_cal3" value="<?php echo $userdata[0]['starting_salary'] ?>" required="required"  placeholder="Enter salary" aria-describedby="inputSuccess2Status3">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button id="send" type="button" class="btn btn-success">Update Profile</button>
                                <button id="showsubmit" style="display:none" type="submit" class="btn btn-success">Update Profile</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end of weather widget -->
</div>

<script>
    $("#send").click(function () {
        $("input,textarea").removeClass("readonly");
        $("#send").remove();
        $("#showsubmit").show();
        
        return false;
    });
</script>


<!-- /page content -->