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
                    <h2>Reply Message </small></h2>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form novalidate class="form-horizontal" name="form_reply"  id="form_reply" action="<?php echo base_url() . 'admin/contact-us/reply/' . base64_encode($arr_contact[0]['contact_id']); ?>" method="post">
                       <input type="hidden" name="contact_id" value="<?php echo $arr_contact[0]['contact_id']; ?>">
                        <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">To<sup class="mandatory">*</sup> : </label>
                                <div class="col-sm-9">
                                    <input readonly="readonly" type="text" size="80" value="<?php echo $arr_contact[0]['contact_email']; ?>" name="to" class="form-control"  dir="ltr">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">From Name<sup class="mandatory">*</sup> : </label>
                                <div class="col-sm-9">
                                    <input type="text" size="80" value="<?php echo $global['site_title']; ?>" name="from_name" class="form-control"  dir="ltr">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">From Email<sup class="mandatory">*</sup> : </label>
                                <div class="col-sm-9">
                                    <input type="text" size="80" value="<?php echo $global['contact_email']; ?>" name="from_email" class="form-control"  dir="ltr">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Subject<sup class="mandatory">*</sup> : </label>
                                <div class="col-sm-9">
                                    <input type="text" size="80" value="<?php echo 'Reply:' . $arr_contact[0]['contact_subject']; ?>" name="from_email" class="form-control"  dir="ltr">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Message<sup class="mandatory">*</sup> : </label>
                                <div class="col-sm-9">
                                    <textarea  class="form-control" name="message"></textarea>
                                </div>
                            </div>



                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-info pull-right"><i class="fa fa-send"></i> Send</button>
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