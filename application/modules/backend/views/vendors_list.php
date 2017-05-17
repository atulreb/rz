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
                <h2>Vendors List</h2>
                
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" >
                    <thead>
                        <tr role="row">
                            <th>Sr No</th>
                            <th>Vendor Name</th>
                            <th>Service</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Posted Date</th>
                        </tr>


                    </thead>
                    <tbody>
                        <?php
                        $cnt = 1;
                        if (!empty($vendor_list)) {
                            foreach ($vendor_list as $vendor_list) {
                                ?>
                                <tr>

                                    <td class="worktd"  align="left"><?php echo $cnt++; ?></td>
                                    <td class="worktd"  align="left"><?php echo stripslashes($vendor_list['name']); ?></td>
                                    <td>
                                        <?php echo $vendor_list['service']; ?>
                                    </td>
                                    <td>
                                        <?php echo $vendor_list['email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $vendor_list['phone']; ?>
                                    </td>
                                    <td class="worktd"  align="left"><?php echo substr($vendor_list['message'], 0, 30); ?></td>
                                    <td>
                                        <?php echo date($global['date_format'], strtotime($vendor_list['created_time']));
                                        ; ?>
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