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
			$error = $this->session->userdata('error');
			$this->session->unset_userdata('error');
			if (isset($error) != '') {
				?>
				<div class="alert alert-danger alert-dismissable">
					<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
					<h4><i class="fa fa-times" aria-hidden="true"></i>
					</i> Error!</h4>
					<?php echo $error; ?>
				</div>
    <?php } ?>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add New Appoinment</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form  id="demo-form2"  class="form-horizontal form-label-left" novalidate action="<?php echo base_url(); ?>backend/User/saveUserAppoinment" method="POST">

                        
						 <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Select A Service <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="service" required="required"  class="form-control input-md" autocomplete="off">
                                    <option value="">Select</option>
                                    <option value="Foundation">Foundation</option>
                                    <option value="Painters">Painters</option>
                                    <option value="Lawn Care">Lawn Care</option>
                                    <option value="Building Services">Building Services</option>
                                    <option value="Pest Control">Pest Control</option>
                                    <option value="Staffing">Staffing</option>
                                    <option value="Housekeepers">Housekeepers</option>
                                    <option value="Towing">Towing</option>
                                    <option value="Handyman">Handyman</option>
                                    <option value="Mobile Detail">Mobile Detail</option>
                                    <option value="Moving and Transport">Moving and Transport</option>
                                    <option value="Pool Cleaning">Pool Cleaning</option>
                                    <option value="Security">Security</option>

                                </select>
                            </div>
                        </div>
						
						 
						
						<div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Preferred Date <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="preferred_date" type="text" class="form-control"  id="single_cal2" aria-describedby="inputSuccess2Status2">
                            </div>
                        </div>
						
						<div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Preferred Time <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" name="preferred_time"  required="required"  id="preferred_time">
                            </div>
                        </div>
						
						<div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Preferred Contact <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" name="preferred_contact"  required="required"  id="preferred_contact">
                            </div>
                        </div>
						
						
						
						<div class="item control-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Short Description</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea name="description" cols="12" rows="10" required="required"  class="form-control" id="description"> </textarea>
                                </br>
                            </div>
                        </div>
						
						<div class="clear"></div>
						
						
                       
                        
					


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
<script src="<?php echo backend_asset_url() ?>vendors/jquery/dist/jquery.min.js"></script>

<script type="text/javascript">
  function isNumberKey(evt)
  {
   var charCode = (evt.which) ? evt.which : event.keyCode;
   if (charCode != 46 && charCode > 31
      && (charCode < 48 || charCode > 57))
    return false;

   return true;
  }
</script>

	
<!-- /page content -->
