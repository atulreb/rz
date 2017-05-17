<script type="text/javascript">

    function changeStatus(post_id, post_status)
    {

        /* changing the user status*/
        var obj_params = new Object();
        obj_params.post_id = post_id;
        obj_params.post_status = post_status;
        jQuery.post("<?php echo base_url(); ?>backend/job/changeStatus", obj_params, function (msg) {
            if (msg.error === "1")
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
                <h2>Jobs List</h2>
                
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" >
                    <thead>
                        <tr role="row">
                            <th>Sr No</th>
                            <th>Job Title</th>
                            <th>Short Description</th>
                            <th>Posted Date</th>
                            <th>Service</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>


                    </thead>
                    <tbody>
                        <?php
                        $cnt = 1;
                        if (!empty($job_data)) {
                            foreach ($job_data as $job_data) {
                                ?>
                                <tr>

                                    <td class="worktd"  align="left"><?php echo $cnt++; ?></td>
                                    <td class="worktd"  align="left"><?php echo stripslashes($job_data['job_title']); ?></td>
                                    <td>
                                        <?php echo substr($job_data['short_desc'], '0', '40') . "..."; ?>
                                    </td>
                                    <td>
                                        <?php echo date("d/m/Y", strtotime($job_data['posting_date']));
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $job_data['service_category'];
                                        ?>
                                    </td>
                                    <td>
                                        <div id="inactive_div<?php echo $job_data['id']; ?>" <?php if ($job_data['status'] == '0') { ?> style="display:inline-block" <?php } else { ?> style="display:none;" <?php } ?> >
                                            <a class="label label-danger" title="Click to Change Status" onClick="changeStatus('<?php echo $job_data['id']; ?>', '1');" href="javascript:void(0);" id="status_<?php echo $job_data['id']; ?>">Unpublished</a>
                                        </div>
                                        <div id="active_div<?php echo $job_data['id']; ?>"<?php if ($job_data['status'] == '1') { ?> style="display:inline-block" <?php } else { ?>  style="display:none;" <?php } ?>>
                                            <a class="label label-success" title="Click to Change Status" onClick="changeStatus('<?php echo $job_data['id']; ?>', '0');" href="javascript:void(0);" id="status_<?php echo $job_data['id']; ?>">Published</a>
                                        </div>
                                    </td>
                                    <td class="worktd" style="text-align:left">
                                        <a class="btn btn-info btn-xs" title="Job Edit" href="<?php echo base_url(); ?>admin/edit-job/<?php echo $job_data['id']; ?>">
                                            <i class="fa fa-edit"></i>Edit</a>
                                            

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