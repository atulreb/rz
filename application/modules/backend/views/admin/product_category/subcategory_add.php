<script type="text/javascript">
    $(document).ready(function (e) {
        jQuery("#frm_add_category").validate({
            errorClass: 'danger',
            rules: {
                cat_name:
                        {
                            required: true,
                            minlength: 3
                        },
                cat_title:
                        {
                            required: true,
                            minlength: 3
                        },
                cat_meta:
                        {
                            required: true,
                            minlength: 3
                        },
                cat_desc:
                        {
                            required: true,
                            minlength: 3
                        }
            },
            messages: {
                cat_name: {
                    required: "Please enter category name.",
                    minlength: "Please enter at least 3 characters."
                },
                cat_title: {
                    required: "Please enter category title.",
                    minlength: "Please enter at least 3 characters."
                },
                cat_meta: {
                    required: "Please enter category meta keywords.",
                    minlength: "Please enter at least 3 characters."
                },
                cat_desc: {
                    required: "Please enter category meta description.",
                    minlength: "Please enter at least 3 characters."
                }

            }
        });

    });
</script>
<style>
    .danger, .mandatory {
        color: #BD4247;
    }
    .alert{
        padding:8px 0px;
    }
</style> 

<!-- page content -->
<div class="right_col" role="main"> <!-- top tiles -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add Category</h2>
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
                    <form  id="demo-form2"  class="form-horizontal form-label-left" novalidate action="<?php echo base_url() ?>admin/product-subcategory-add"  enctype="multipart/form-data"  method="POST">

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" required="required" name="cat_id">
                                    <option value="">Select Category</option>
                                    <?php
                                    foreach ($category_data as $cat_data) {
                                        echo "<option value=" . $cat_data['category_id'] . ">" . $cat_data['category_name'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sub Category Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="sub_category_name" required="required" class="form-control  col-md-7 col-xs-12" id="sub_category_name"  placeholder="Enter Subject">
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

<
<!-- /page content -->