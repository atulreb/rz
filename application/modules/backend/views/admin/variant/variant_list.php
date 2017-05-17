<script type="text/javascript">

    function changeBlogStatus(post_id, post_status)
    {
        /* changing the user status*/
        var obj_params = new Object();
        obj_params.post_id = post_id;
        obj_params.post_status = post_status;
        jQuery.post("<?php echo base_url(); ?>admin/blog/change-status", obj_params, function (msg) {
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

    <?php
    $error = $this->session->userdata('error');
    $this->session->unset_userdata('error');
    if (isset($error) != '') {
        ?>
        <div class="alert alert-success alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <h4><i class="icon fa fa-check"></i> Success!</h4>
            <?php echo $error; ?>
        </div>
    <?php } ?>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Products List</h2>
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
                <a title="Add new product" class="btn btn-info pull-right" href="<?php echo base_url(); ?>admin/add-variant"><i class="fa fa-plus-circle"></i></a>		


                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" >
                    <thead>
                        <tr role="row">
                            <th>Sr No.</th>
                            <th>Key</th>
                            <th>Values</th>
                            <th>Action</th>
                        </tr>


                    </thead>
                    <tbody>
                        <?php
                        $cnt = 0;
                        if (!empty($arr_variant_data)) {
                            foreach ($arr_variant_data as $post) {
                                $cnt++;
                                ?>
                                <tr>

                                    <td class="worktd"  align="left"><?php echo $cnt ?></td>
                                    <td class="worktd"  align="left"><?php echo stripslashes($post['variant_key']); ?></td>
                                    <td class="worktd"  align="left">
                                        <?php $sr=1;
                                        $array = explode(',', unserialize($post['variant_value']));
                                        foreach ($array as $t) {
                                            echo $sr++." - ".$t . "<br>";
                                        }
                                        ?>
                                    </td>

                                    <td><a title="Edit Sub Category Details" href="<?php echo base_url(); ?>admin/edit-variant/<?php echo $post['variant_id']?>" class="btn btn-info"><i class="fa fa-edit"></i></a></td>

                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <?php // if (!empty($blog_posts)) {     ?>
                    <!--<input type="submit" id="btn_delete_all" name="btn_delete_all" class="btn btn-danger" onClick="return deleteConfirm();"  value=" Delete Selected">-->
                <?php //}     ?>


            </div>
        </div>
    </div>
</div>
<!-- /page content -->