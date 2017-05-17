










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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/js/add-blog.js"></script>

<!-- page content -->
<div class="right_col" role="main"> <!-- top tiles -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit Blog</h2>
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
                    <form id="demo-form2" class="form-horizontal form-label-left" novalidate action="<?php echo base_url(); ?>admin/blog/edit-post/<?php echo $post_id; ?>"  enctype="multipart/form-data"  method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $post_id; ?>" id="edit_id" />
                        <input type="hidden" name="email_template_hidden_id" id="email_template_hidden_id" value="<?php echo(isset($email_template_id)) ? $email_template_id : ''; ?>">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" required="required" name="inputName" value="<?php echo stripslashes($post_info["post_title"]); ?>"  id="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  dir="ltr"  class="form-control" id="img_file" name="img_file" type="file" accept="image/*" >
                                    <?php if ($post_info["blog_image"] != '') { ?>
                                        <input type="hidden" name="old_img_file" id="old_img_file" value="<?php echo stripslashes($post_info["blog_image"]); ?>">
                                        <br>
                                        <img width="100" height="100" src="<?php echo base_url(); ?>uploads/blogs/<?php echo stripslashes($post_info["blog_image"]); ?>" id="front_image_tag_id" title="image" > 
                                    <?php } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Content <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea class="ckeditor form-control col-md-7 col-xs-12" id="productdescription" name="inputPostDescription" ><?php echo stripslashes($post_info['post_content']); ?></textarea>
                                    <div class="error hidden" id="labelProductError">Enter content length should be greater than 12. </div>
                                
                            </div>
                        </div>
                         <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Blog Category <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="blog_category" required="required" class="form-control" autocomplete="off">
                                        <option value="">Select</option>
                                        <?php foreach($category as $category){?>
                                        <option <?php if ($post_info["blog_category"] == $category['category_name']) echo 'selected="selected"';?> value="<?php echo $category['category_name']?>"><?php echo $category['category_name']?></option>
                                        <?php }?>
                                    </select>
                            </div>
                        </div>
						<div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Service <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <select name="service" required="required" class="form-control input-md" autocomplete="off">
                                    <option value="">Select</option>
                                    <option <?php if($post_info["service_category"] == 'Foundation') echo "selected";?> value="Foundation">Foundation</option>
                                    <option <?php if($post_info["service_category"] == 'Painters') echo "selected";?> value="Painters">Painters</option>
                                    <option <?php if($post_info["service_category"] == 'Lawn Care') echo "selected";?> value="Lawn Care">Lawn Care</option>
                                    <option <?php if($post_info["service_category"] == 'Building Services') echo "selected";?> value="Building Services">Building Services</option>
                                    <option <?php if($post_info["service_category"] == 'Pest Control') echo "selected";?> value="Pest Control">Pest Control</option>
                                    <option <?php if($post_info["service_category"] == 'Staffing') echo "selected";?> value="Staffing">Staffing</option>
                                    <option <?php if($post_info["service_category"] == 'Housekeepers') echo "selected";?> value="Housekeepers">Housekeepers</option>
                                    <option <?php if($post_info["service_category"] == 'Towing') echo "selected";?> value="Towing">Towing</option>
                                    <option <?php if($post_info["service_category"] == 'Handyman') echo "selected";?> value="Handyman">Handyman</option>
                                    <option <?php if($post_info["service_category"] == 'Mobile Detail') echo "selected";?> value="Mobile Detail">Mobile Detail</option>
                                    <option <?php if($post_info["service_category"] == 'Moving and Transport') echo "selected";?> value="Moving and Transport">Moving and Transport</option>
                                    <option <?php if($post_info["service_category"] == 'Pool Cleaning') echo "selected";?> value="Pool Cleaning">Pool Cleaning</option>
                                    <option <?php if($post_info["service_category"] == 'Security') echo "selected";?> value="Security">Security</option>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select required="required" name="blog_status" name="blog_status" class="form-control col-md-7 col-xs-12" autocomplete="off">
                                        <option value="">Select</option>
                                        <option <?php if ($post_info["status"] == "1") echo 'selected="selected"'; ?> value="1">Published</option>
                                        <option <?php if ($post_info["status"] == "0") echo 'selected="selected"'; ?> value="0">Unpublished</option>
                                    </select>
                            </div>
                        </div>
                        



                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">Submit</button>
                               
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