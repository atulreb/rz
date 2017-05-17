<?php $this->load->view('partials/l_header'); ?>
    <!-- CONTENT -->
    <div class="wrapper" id="WrapperContent">
        <div class="container">
            <div class="wrapper site-content content-with-sidebar">
                <div class="entry-content">
                    <!-- Entry header -->
                    <header class='entry-header'>
                        <h1 class='entry-title post-title'><?php echo $blog_details[0]['post_title']?></h1>

                        <p class='entry-meta'>
                            Posted on
                            <span class='entry-date'><?php echo date("d F Y",strtotime($blog_details[0]['posted_on']))?></span> in
                            <span class="entry-category"><?php echo $blog_details[0]['blog_category']?></span>
                        </p>
                    </header>

                    <!-- Entry Content -->
                    <div class="entry-post-content">
                        <p><img class="alignright wp-image-3425" src="<?php echo base_url() ."uploads/blogs/".$blog_details[0]['blog_image'];?>" alt="home-22.jpg" width="460" height="177" srcset="<?php echo base_url() ."uploads/blogs/".$blog_details[0]['blog_image'];?> 1024w, <?php echo base_url() ."uploads/blogs/".$blog_details[0]['blog_image'];?> 300w, <?php echo base_url() ."uploads/blogs/".$blog_details[0]['blog_image'];?> 768w" sizes="(max-width: 460px) 100vw, 460px" />
                            <?php echo $blog_details[0]['post_content']?>
                        </p>

                        
                    </div>

                  
                </div>
                <aside class="sidebar main-sidebar">
                    <div class="widget widget-main_sidebar"><span class="widget-title widget-title-main_sidebar">Get a Free Quote!</span>
                        <link rel='stylesheet' id='gforms_reset_css-css' href='../wp-content/plugins/gravityforms/css/formreset.min7b47.css?ver=1.9.17' type='text/css' media='all' />
                        <link rel='stylesheet' id='gforms_formsmain_css-css' href='../wp-content/plugins/gravityforms/css/formsmain.min7b47.css?ver=1.9.17' type='text/css' media='all' />
                        <link rel='stylesheet' id='gforms_ready_class_css-css' href='../wp-content/plugins/gravityforms/css/readyclass.min7b47.css?ver=1.9.17' type='text/css' media='all' />
                        <link rel='stylesheet' id='gforms_browsers_css-css' href='../wp-content/plugins/gravityforms/css/browsers.min7b47.css?ver=1.9.17' type='text/css' media='all' />
                        <script type='text/javascript' src='../wp-content/plugins/gravityforms/js/jquery.maskedinput.min7b47.js?ver=1.9.17'></script>

                        <div class='gf_browser_unknown gform_wrapper' id='gform_wrapper_1'>
                            <form method='post' enctype='multipart/form-data' id='gform_1' action='#'>
                                <div class='gform_body'>
                                    <ul id='gform_fields_1' class='gform_fields top_label form_sublabel_below description_below'>
                                        <li id='field_1_1' class='gfield gfield_contains_required field_sublabel_below field_description_below hidden_label'>
                                            <label class='gfield_label' for='input_1_1'><span class='gfield_required'>*</span></label>
                                            <div class='ginput_container ginput_container_text'>
                                                <input name='input_1' id='input_1_1' type='text' value='' class='large' tabindex='1' placeholder='Name *' />
                                            </div>
                                        </li>
                                        <li id='field_1_3' class='gfield gfield_contains_required field_sublabel_below field_description_below hidden_label'>
                                            <label class='gfield_label' for='input_1_3'><span class='gfield_required'>*</span></label>
                                            <div class='ginput_container ginput_container_email'>
                                                <input name='input_3' id='input_1_3' type='text' value='' class='large' tabindex='2' placeholder='Email *' />
                                            </div>
                                        </li>
                                        <li id='field_1_4' class='gfield gfield_contains_required field_sublabel_below field_description_below hidden_label'>
                                            <label class='gfield_label' for='input_1_4'><span class='gfield_required'>*</span></label>
                                            <div class='ginput_container ginput_container_phone'>
                                                <input name='input_4' id='input_1_4' type='text' value='' class='large' tabindex='3' placeholder='Phone *' />
                                            </div>
                                        </li>
                                        <li id='field_1_5' class='gfield field_sublabel_below field_description_below hidden_label'>
                                            <label class='gfield_label' for='input_1_5'></label>
                                            <div class='ginput_container ginput_container_textarea'>
                                                <textarea name='input_5' id='input_1_5' class='textarea medium' tabindex='4' placeholder='Message' rows='10' cols='50'></textarea>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class='gform_footer top_label'>
                                    <input type='submit' id='gform_submit_button_1' class='gform_button button' value='GET QUOTE' tabindex='5' onclick='if (window["gf_submitting_1"]) {
                                return false;
                            }
                            window["gf_submitting_1"] = true;
                                                                        ' />
                                    <input type='hidden' class='gform_hidden' name='is_submit_1' value='1' />
                                    <input type='hidden' class='gform_hidden' name='gform_submit' value='1' />

                                    <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
                                    <input type='hidden' class='gform_hidden' name='state_1' value='WyJbXSIsIjVlZjhiM2MwMTg4MGY2MzVjYmQ0ZTc3OGZhNDkxYmNjIl0=' />
                                    <input type='hidden' class='gform_hidden' name='gform_target_page_number_1' id='gform_target_page_number_1' value='0' />
                                    <input type='hidden' class='gform_hidden' name='gform_source_page_number_1' id='gform_source_page_number_1' value='1' />
                                    <input type='hidden' name='gform_field_values' value='' />

                                </div>
                            </form>
                        </div>
                        <script type='text/javascript'>
                            jQuery(document).bind('gform_post_render', function(event, formId, currentPage) {
                                if (formId == 1) {
                                    if (typeof Placeholders != 'undefined') {
                                        Placeholders.enable();
                                    }
                                    if (!/(android)/i.test(navigator.userAgent)) {
                                        jQuery('#input_1_4').mask('(999) 999-9999').bind('keypress', function(e) {
                                            if (e.which == 13) {
                                                jQuery(this).blur();
                                            }
                                        });
                                    }
                                }
                            });
                            jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit) {});
                        </script>
                        <script type='text/javascript'>
                            jQuery(document).ready(function() {
                                jQuery(document).trigger('gform_post_render', [1, 1])
                            });
                        </script>
                    </div>
                    <div class="widget widget-main_sidebar"> <span class="widget-title widget-title-main_sidebar">Recent Posts</span>
                        <ul>
                        <?php foreach($latest_blog as $lb){ ?>
                        <li> <a href="<?php echo base_url()."pool-cleaning/blog-details/".$lb['slug']?>"><?php echo $lb['post_title']?></a> </li>
                        <?php }?>
                    </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <?php $this->load->view('partials/l_footer'); ?>