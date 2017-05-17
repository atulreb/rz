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
                <h2>Orders Details</h2>
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
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Customer Information</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">                           
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Name</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?php echo $ord_d[0]['ord_bill_name'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="x_content">   
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Email</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?php echo $ord_d[0]['ord_email'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="x_content">   
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Phone</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?php echo $ord_d[0]['ord_phone'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="x_content">   
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Postal Code</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?php echo $ord_d[0]['ord_bill_post_code'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="x_content">   
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Address</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?php echo $ord_d[0]['ord_bill_address_01'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="x_content">   
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Order Date</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?php echo date($global['date_format'], strtotime($ord_d[0]['ord_date'])); ?>
                            </div>
                        </div>
                    </div>
                    <div class="x_content">   
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Payment Mode</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <b><?php echo $ord_d[0]['delivery_option'] ." (Paid)"; ?></b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="x_content">
                <div class="x_title">
                        <h2>Product List</h2>

                        <div class="clearfix"></div>
                    </div>
                <table class="table table-hover" >
                    <thead>
                        <tr role="row">
                            <th>Sr</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>


                    </thead>
                    <tbody>
                        <?php
                        $cnt = 0;
                        if (!empty($orders)) {
                            foreach ($orders as $orders) {
                                $cnt++;
                                ?>
                                <tr>

                                    <td class="worktd"  align="left"><?php echo $cnt; ?></td>
                                    <td class="worktd"  align="left"><?php echo stripslashes($orders['ord_det_item_name']); ?></td>
                                    <td>
                                        <?php echo $global['currency_symbol'].$orders['ord_det_price']; ?>
                                    </td>
                                    <td class="worktd"  align="left"><?php echo stripslashes($orders['ord_det_quantity']); ?></td>
                                    <td>
                                        <?php
                                        echo $global['currency_symbol'].$orders['ord_det_price_total'];
                                        ;
                                        ?>
                                    </td>

                                </tr>
                                <?php
                            }
                        }
                        ?>
                                <tr>
                                    <td colspan="3" style="text-align:center;font-weight:bold;color:000">Total Amount</td>
                                    <td colspan="" style="font-weight:bold;color:000"><?php echo $global['currency_symbol'].$ord_d[0]['ord_total'];?> </td>
                                </tr>
                    </tbody>
                </table>
                <?php // if (!empty($blog_posts)) {    ?>
                    <!--<input type="submit" id="btn_delete_all" name="btn_delete_all" class="btn btn-danger" onClick="return deleteConfirm();"  value=" Delete Selected">-->
                <?php //}    ?>


            </div>
        </div>
    </div>
</div>
<!-- /page content -->