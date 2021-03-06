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
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Orders List</h2>
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
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" >
                    <thead>
                        <tr role="row">
                            <th>Customer Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Delivery Type</th>
                            <th>Action</th>
                        </tr>


                    </thead>
                    <tbody>
                        <?php
                        $cnt = 0;
                        if (!empty($orders)) {
                            foreach ($orders as $orders) {
                                ?>
                                <tr>

                                    <td class="worktd"  align="left"><?php echo stripslashes($orders['ord_bill_name']); ?></td>
                                    <td>
                                        <?php echo $orders['ord_phone']; ?>
                                    </td>
                                    <td class="worktd"  align="left"><?php echo stripslashes($orders['ord_bill_address_01']); ?></td>
                                    <td>
                                        <?php echo date($global['date_format'], strtotime($orders['ord_date']));
                                        ; ?>
                                    </td>
                                    <td>
                                        <b> <?php echo $orders['delivery_option'];
                                        ?></b>
                                    </td>
                                    <td class="worktd" style="text-align:left">
                                        <a class="btn btn-primary" title="Order Details" href="<?php echo base_url(); ?>admin/order-details/<?php echo $orders['ord_order_number']; ?>">
                                            <i class="fa fa-shopping-cart"></i></a>

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