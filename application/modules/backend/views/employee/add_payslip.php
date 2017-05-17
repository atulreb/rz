<style>
    .danger, .mandatory {
        color: #BD4247;
    }
    .alert{
        padding:8px 0px;
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
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    <?php echo $msg; ?>
                </div>
            <?php } ?>
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add Payslip</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form  id="demo-form2"  class="form-horizontal form-label-left" novalidate action="<?php echo base_url(); ?>backend/employee/addPaySlip"  enctype="multipart/form-data"  method="POST">

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Employee name<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="emp_id" id="emp_code" class="form-control">
                                    <option value="all">All Employee</option>
                                    <?php
                                    foreach ($employee as $employee) {
                                        echo "<option value='" . $employee['emp_id'] . "@".$employee['starting_salary']."'>" . $employee['emp_name'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Month <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" id="single_cal2" name="month" required="required" >
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Present Days 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" name="present_days" required="required"  placeholder="Enter Present Day" aria-describedby="inputSuccess2Status3">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Salary<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" name="salary" id="salary" required="required"  placeholder="Enter Salary" aria-describedby="inputSuccess2Status3">
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
<script>
$('#emp_code').on('change', function() {
  var value = this.value;
 var splited_val = value.split('@');
$("#salary").val(splited_val[1]);
})
</script>
<!-- /page content -->