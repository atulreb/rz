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
                <h2>Jobs Applications</h2>
                
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" >
                    <thead>
                        <tr role="row">
                            <th>Sr No</th>
                            <th>Job Title</th>
                            <th>Applicant Name</th>
                            <th>State</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Resume</th>
                            <th>Message</th>
                            <th>Apply Date</th>
                            
                        </tr>


                    </thead>
                    <tbody>
                        <?php
                        $cnt = 1;
                        if (!empty($appliation_data)) {
                            foreach ($appliation_data as $appliation_data) {
                                ?>
                                <tr>

                                    <td class="worktd"  align="left"><?php echo $cnt++; ?></td>
                                    <td class="worktd"  align="left"><?php echo stripslashes($appliation_data['job_title']); ?></td>
                                    <td>
                                        <?php echo $appliation_data['applicant_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $appliation_data['state'] ?>
                                    </td>
                                    <td>
                                        <?php echo $appliation_data['email'];?>
                                    </td>
                                    <td>
                                        <?php echo $appliation_data['mobile'];?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url() .$appliation_data['resume'];?>" download class="btn btn-primary btn-xs"><i class="fa fa-download"></i>Download</a>
                                    </td>
                                     <td>
                                        <?php echo $appliation_data['message'];?>
                                    </td>
<!--                                    <td>
                                        <div id="inactive_div<?php echo $appliation_data['id']; ?>" <?php if ($appliation_data['status'] == '0') { ?> style="display:inline-block" <?php } else { ?> style="display:none;" <?php } ?> >
                                            <a class="label label-danger" title="Click to Change Status" onClick="changeStatus('<?php echo $job_data['id']; ?>', '1');" href="javascript:void(0);" id="status_<?php echo $appliation_data['id']; ?>">Unpublished</a>
                                        </div>
                                        <div id="active_div<?php echo $appliation_data['id']; ?>"<?php if ($appliation_data['status'] == '1') { ?> style="display:inline-block" <?php } else { ?>  style="display:none;" <?php } ?>>
                                            <a class="label label-success" title="Click to Change Status" onClick="changeStatus('<?php echo $appliation_data['id']; ?>', '0');" href="javascript:void(0);" id="status_<?php echo $appliation_data['id']; ?>">Published</a>
                                        </div>
                                    </td>-->
                                    <td class="worktd" style="text-align:left">
                                      <?php echo date("Y-m-d H:i A",strtotime($appliation_data['apply_date']))?>

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