<script type="text/javascript">

    function toggle(source) {

        var checkboxes = document.getElementsByName('checkbox[]');
        //alert(checkboxes.length);
        for (var i = 0, n = checkboxes.length; i < n; i++) {
            checkboxes[i].checked = source.checked;
        }
    }
    function deleteConfirm() {
        if (confirm("Are you sure to delete selected entries?")) {
            return true;
        } else {
            return flase;
        }

    }
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
                <h2>Product Sub Category List</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">

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
            <form name="frm_newsletter" action="<?php echo base_url(); ?>admin/product-category-list" method="post">
                <div class="x_content">
                    <a title="Add New Category " class="btn btn-info pull-right" href="<?php echo base_url(); ?>admin/product-subcategory-add"><i class="fa fa-plus-circle"></i></a>	


                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" >
                        <thead>
                           <tr>
                                        <th class="workcap">
                                            <input type="checkbox" name="check_all" id="check_all"  class="select_all_button_class" value="select all" />
                                            </center>
                                        </th>
                                        <th>Sub Category Name</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                        </thead>
                       <tbody>
                                    <?php
                                    foreach ($subcat_data as $cat) {
                                        ?>
                                        <tr>
                                            <td>
                                    <center>
                                        <input name="checkbox[]" class="case" type="checkbox" id="checkbox[]" value="<?php echo $cat['sub_category_id']; ?>" />        
                                    </center>
                                    </td>
                                    <td><?php echo $cat['sub_category_name']; ?></td>
                                    <td><?php echo $cat['category_name']; ?></td>
                                    <td><a title="Edit Sub Category Details" href="<?php echo base_url(); ?>backend/subcategory-edit/<?php echo $cat['sub_category_id']; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a></td>
                                    </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                    </table>
                    <?php if (count($subcat_data) > 0) { ?>
                        <input type="submit" id="btn_delete_all" name="btn_delete_all" class="btn btn-danger" onClick="deleteConfirm();"  value="Delete Selected">
                    <?php } ?>


                </div>
            </form>
        </div>
    </div>
</div>
<!-- /page content -->