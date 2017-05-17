<?php $this->load->view('partials/l_header')?>

    <div class="clear"></div>

    <div id="page-content-title">
        <div id="page-content-header" class="container_24">

            <div id="page-title">
                <h1>Contact Us</h1>
            </div>
            <!-- end page-title -->
        </div>
        <!-- end page-content-header -->
    </div>
    <!-- end page-content-title -->
    <div class="clear"></div>

    <div id="page-content">
        <div class="no-breadcrumbs-padding"></div>

        <div id="content-container" class="container_24">
            <div id="main-content" class="grid_16 push_8">
                <div class="main-content-padding">
                    <div class="post" id="post-14">
                        <div class="entry">
                            <p><img class="aligncenter size-full wp-image-68" alt="" src="<?php echo base_url()."uploads/blogs/".$blog_details[0]['blog_image']?>" width="566" height="60" /></p>
                            <h1><span style="color: #ff0000;"><?php echo $blog_details[0]['post_title']?></span></h1>
                            <p style="text-align: center;"><?php echo $blog_details[0]['post_content']?>
                            </p>
                                <div id="rspstatus1"></div>
                                
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- end main-content-padding -->
            </div>
            <!-- end main-content -->

            <div id="sidebar" class="grid_8 pull_16 sidebar-box">
                <div id="sidebarSubnav">

                    <div id="text-2" class="widget widget_text substitute_widget_class">
                        <div class="textwidget">
                            <br>
                            <br>
                            <br>
                            <br>
                            <a id="call" href="tel:6159742222"></span>
                            </a>
                        </div>
                    </div>
                    <div id="gform_widget-2" class="widget gform_widget substitute_widget_class">
                        <div class='gf_browser_unknown gform_wrapper' id='gform_wrapper_2'>
                            <div id="rspstatus"></div>
                            <form method='post' enctype='multipart/form-data' id='gform_2' action=''>
                                <div class='gform_body'>
                                    <ul id='gform_fields_2' class='gform_fields top_label description_below'>
                                        <li id='field_2_4' class='gfield'>
                                            <label class='gfield_label' for='input_2_4'>Name</label>
                                            <div class='ginput_container'>
                                                <input name='contact_name' id='input_2_4' type='text' value='' class='medium' />

                                            </div>
                                        </li>
                                        <li id='field_2_2' class='gfield'>
                                            <label class='gfield_label' for='input_2_2'>Phone</label>
                                            <div class='ginput_container'>
                                                <input name='contact_email' id='input_2_2' type='text' value='' class='medium' />
                                            </div>
                                        </li>
                                        <li id='field_2_3' class='gfield'>
                                            <label class='gfield_label' for='input_2_3'>Email</label>
                                            <div class='ginput_container'>
                                                <input name='contact_phone' id='input_2_3' type='text' value='' class='medium' />
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class='gform_footer top_label'>
                                    <input type='submit' id='gform_submit_button_2' class='button gform_button' value='Submit' />

                                </div>
                            </form>
                        </div>
                        <script type='text/javascript'>
                            jQuery(document).ready(function() {
                                jQuery(document).trigger('gform_post_render', [2, 1])
                            });
                        </script>
                    </div>
                    <div id="text-8" class="widget widget_text substitute_widget_class">
                        <div class="textwidget">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            
                        </div>
                    </div>
                </div>
                <!-- end sidebarSubnav -->
            </div>
            <!-- end sidebar -->

        </div>
        <!-- end content-container -->

        <div class="clear"></div>

    </div>
    
    <!-- end page-content -->
    <?php $this->load->view('partials/l_footer')?>
<script>
    jQuery(document).ready(function () {
    jQuery("#gform_1").submit(function (e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var url = "<?php echo base_url() ?>landing-pages/towing/submitContactForm"; // the script where you handle the form input.
        //alert(url);
        jQuery.ajax({
            type: "POST",
            url: url,
            data: jQuery("#gform_1").serialize(), // serializes the form's elements.
            dataType: "json",
            success: function (data)
            {
                if (data.status === '0') {
                    jQuery("#rspstatus1").html("<span style='color:red'>"+data.msg+"</span>");
                } else {
                    jQuery("#rspstatus1").html("<span style='color:green'>"+data.msg+"</span>");
                    jQuery('#gform_1')[0].reset();
                }
            }
        });


    });
    });

</script>
