<script type="text/javascript">

    function changeStatus(post_id, post_status)
    {
        /* changing the user status*/
        var obj_params = new Object();
        obj_params.post_id = post_id;
        obj_params.post_status = post_status;
        jQuery.post("<?php echo base_url(); ?>backend/testimonial/changeStatus", obj_params, function (msg) {
            if (msg.error == "1")
            {
                alert(msg.error_message);
            } else
            {
                /* togling the Active and Inactive div of user*/
                if (post_status == '0')
                {
                    $("#inactive_div" + post_id).css('display', 'inline-block');
                    $("#active_div" + post_id).css('display', 'none');
                } else
                {
                    $("#active_div" + post_id).css('display', 'inline-block');
                    $("#inactive_div" + post_id).css('display', 'none');
                }
            }
        }, "json");
    }
</script>







<!-- page content -->
<div class="right_col" role="main">

    <!-- /top tiles -->


    <br />



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
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>All Documents of Employee</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="table table-striped table-bordered dt-responsive nowrap" >
                    <thead>
                        <tr role="row">
                            <th>Sr No</th>
                            <th>Document Name</th>
                            <th>Preview</th>
                            <th>Option</th>


                    </thead>
                    <tbody>
                        <?php
                        $cnt = 1;
                        if (!empty($docs)) {
                            foreach ($docs as $docs) {
                                ?>
                                <tr>

                                    <td class="worktd"  align="left"><?php echo $cnt++; ?></td>
                                    <td class="worktd"  align="left"><?php echo stripslashes($docs['document_name']); ?></td>
                                    <td class="worktd"  align="left"><img style="width:50px" src="<?php echo base_url()."uploads/employee_documents/".$docs['document']; ?>"></td>
                                    <td>
                                        <a download href="<?php echo base_url() ."uploads/employee_documents/". $docs['document']; ?>" class="btn btn-success btn-xs"><i class="fa fa-download"></i> Download</a>
                                    </td>

                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <?php // if (!empty($blog_posts)) {  ?>
                    <!--<input type="submit" id="btn_delete_all" name="btn_delete_all" class="btn btn-danger" onClick="return deleteConfirm();"  value=" Delete Selected">-->
                <?php //}  ?>


            </div>
        </div>
    </div>
</div>
<!-- /page content -->