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
                    <h2>Contact Message View</small></h2>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form  id="demo-form2"  class="form-horizontal form-label-left" novalidate action="<?php echo base_url(); ?>backend/blog/edit_post"  enctype="multipart/form-data"  method="POST">

                        <div class="form-group">
                                <label for="" class="col-sm-3 control-label">From : </label>
                                <div class="col-sm-9">
                                    <input readonly="readonly" type="text" id="" name="" class="form-control" value="<?php echo ucfirst($arr_contact[0]['contact_name']); ?>">
                                </div>
                            </div>
                        <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Phone : </label>
                                <div class="col-sm-9">
                                    <input readonly="readonly" type="text" id="" name="" class="form-control" value="<?php echo ucfirst($arr_contact[0]['contact_phone']); ?>">
                                </div>
                            </div>
<!--                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Subject : </label>
                                <div class="col-sm-9">
                                    <input readonly="readonly" type="text" id="" name="" class="form-control" value="<?php echo $arr_contact[0]['contact_subject']; ?>">
                                </div>
                            </div>-->
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Email :  </label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="readonly" id="" name="" class="form-control" value="<?php echo $arr_contact[0]['contact_email']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Date :  </label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="readonly" id="" name="" class="form-control" value="<?php echo date($global['date_format'], strtotime($arr_contact[0]['contact_created_date'])); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Message :  </label>
                                <div class="col-sm-9">
                                    <textarea readonly="readonly" class="form-control" style="height: 260px;"><?php echo $message; ?></textarea>
                                </div>
                            </div>



                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <a href="<?php echo base_url() . 'admin/contact-us/reply/' . base64_encode($arr_contact[0]['contact_id']); ?>">
                                <button type="button" name="btnSubmit" class="btn btn-info pull-right" value="Save changes"><i class="fa fa-reply-all"></i> Reply</button>                       
                               
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