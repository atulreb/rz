<?php // echo '<pre>'; print_r($arr_email_template_details['email_template_title']).'SSSSSSS'; die;    ?>
<style>
    .danger, .mandatory {
        color: #BD4247;
    }
    .alert{
        padding:8px 0px;
    }
</style>
<script src="<?php echo base_url(); ?>assets/backend/js/jquery.validate.min.js"></script> 
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script type="text/javascript" language="javascript">

    $(document).ready(function () {


        jQuery("#frm_email_template").validate({
            errorClass: 'danger',
            rules: {
                input_subject: {
                    required: true
                },
                text_content: {
                    required: true
                }
            },
            messages: {
                input_subject: {
                    required: "Please enter the email template subject."
                },
                text_content: {
                    required: "Please enter the email template content."
                }
            },
            submitHandler: function (form) {

                if ((jQuery.trim(jQuery("#cke_productdescription iframe").contents().find("body").html())).length < 12)
                {
                    jQuery("#labelProductError").removeClass("hidden");
                    jQuery("#labelProductError").show();
                } else {
                    jQuery("#labelProductError").addClass("hidden");
                    form.submit();
                }
            },
            // set this class to error-labels to indicate valid fields
            success: function (label) {
                // set &nbsp; as text for IE
                label.hide();
            }
        });
        CKEDITOR.replace('productdescription',
                {
                    filebrowserUploadUrl: '<?php echo base_url(); ?>media/backend/editor-image-upload'
                });
    });

</script>

<script>
    function showblock()
    {
        $(".passblock").show();
    }
</script>

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
                    <h2>Global Parameter</small></h2>
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
                    <form class="cmxform form-horizontal tasi-form" name="frm_email_template" id="frm_email_template" action="<?php echo base_url(); ?>admin/edit-email-template/<?php echo(isset($email_template_id)) ? $email_template_id : ''; ?>" method="POST" >
                        <input type="hidden" name="email_template_hidden_id" id="email_template_hidden_id" value="<?php echo(isset($email_template_id)) ? $email_template_id : ''; ?>">
                        <div class="form-group ">
                            <label for="inputEmail3" class="col-sm-3 control-label">Title<sup class="mandatory">*</sup> : </label>
                            <div class="col-sm-9">
                                <input type="text" name="inputTitle" readonly value="<?php echo stripslashes($arr_email_template_details[0]['email_template_title']); ?>" class="form-control" id="inputTitle" size="100"  placeholder="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="inputEmail3" class="col-sm-3 control-label">Subject<sup class="mandatory">*</sup> : </label>
                            <div class="col-sm-9">
                                <input type="text" name="input_subject" value="<?php echo stripslashes($arr_email_template_details[0]['email_template_subject']); ?>" class="form-control" id=input_subject"  placeholder="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="inputEmail3" class="col-sm-3 control-label">Content<sup class="mandatory">*</sup> : </label>
                            <div class="col-sm-9">
                                <textarea  class="ckeditor" name="text_content" id="productdescription" dir="ltr"  class="cleditor" style="width:100%" ><?php echo set_value('input_content'); ?><?php echo stripslashes($arr_email_template_details[0]['email_template_content']); ?></textarea>
                                <div class="error hidden" id="labelProductError">Enter Message length should be greater than 12 .</div>
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
