<?php $this->load->view('partials/l_header') ?>

    <div class="clear"></div>

    <div id="page-content-title">
        <div id="page-content-header" class="container_24">

            <div id="page-title">
                <h1>Blog</h1>
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
            <div id="main-content" class="grid_16">
                <div class="main-content-padding">

                    <div class="clear"></div>

                    <div class="post-219 post type-post status-publish format-standard hentry category-blog" id="post-219">
                        <?php foreach ($arr_blog_data as $blog) { ?>
                            <div class="entry" style="height:auto !Important;overflow:hidden">
                                <div class="post-top">
                                    <h2><a href="javascript:;"><?php echo $blog['post_title'] ?></a></h2>
                                    <div class="postmetadata">
                                        <span>
                                        On <?php echo date("d F Y", strtotime($blog['posted_on'])) ?>                                     </span> &nbsp; / &nbsp; <span><a href="javascript:;" title="View all posts in Blog" rel="category tag"><?php echo $blog['service_category'] ?></a></span>
                                    </div>
                                </div>
                                <div class="clear"></div>

                                <div class="post-image-holder pngfix">
                                    <div class="post-image">
                                        <span class="post-hover-image pngfix"> </span>
                                        <img class="hover-opacity" src="<?php echo base_url() . "uploads/blogs/670x470/" . $blog['blog_image'] ?>" alt="Steps to Towing  A Car" />
                                    </div>
                                    <!--                                <div>
                                    <?php //echo $blog['post_content']?>
                                </div>-->
                                </div>

                                <p>&nbsp; &nbsp; &nbsp; &nbsp;</p>
                                <a class="read-more-align-left" href="<?php echo base_url()."towing/blog-details/".$blog['slug'];?>" title="Read more"><span>Read more</span> &rarr;</a>
                                <div class="clear"></div>
                            </div>
                            <!-- end entry -->
                            <?php } ?>
                    </div>
                    <div class="paginate paginate-dark wrapper">
                    <ul>
                    <?php echo $pg_link; ?>
                    </ul>
                </div>
                        <div class="divider top-of-page"><a href="#top" title="Top of Page">Back to Top</a></div>
                        <div class="clear"></div>

                </div>
                <!-- end main-content-padding -->
            </div>
            <!-- end main-content -->

            <div id="sidebar" class="grid_8">
                <div id="sidebarSubnav">

                    <div id="text-4" class="widget widget_text substitute_widget_class">
                        <div class="textwidget">
                            <br>
                            <br>
                            <br>
                            <br>
                            <a id="call" href="tel:6159742222"></span>
                            </a>
                            <br>
                            <script type='text/javascript'>
                                if (typeof(ecfconfig) == 'undefined') {
                                    var ecfconfig = {};
                                }
                                ecfconfig[3] = {};
                                var ufobaseurl = '<?php echo base_url()?>media/landing-pages/towing/wp-content/admin-ajax.html';
                                if (typeof(ufoFormsConfig) == 'undefined') {
                                    var ufoFormsConfig = {};
                                    ufoFormsConfig.submits = [];
                                    ufoFormsConfig.resets = [];
                                    ufoFormsConfig.validations = [];
                                }
                                ufoFormsConfig.phonenumberre = /^(\+{0,1}\d{1,2})*\s*(\(?\d{3}\)?\s*)*\d{3}(-{0,1}|\s{0,1})\d{2}(-{0,1}|\s{0,1})\d{2}$/;
                            </script>
                            <link href='../<?php echo base_url() ?>media/landing-pages/towing/wp-content/plugins/easy-contact-forms/forms/styles/easyform/css/stde29d.css?ver=1.4.9' rel='stylesheet' type='text/css' />
                            <div class='gf_browser_unknown gform_wrapper' id='gform_wrapper_2'>
                                <div id="rspstatus"></div>
                                <form method='post' enctype='multipart/form-data' id='gform_2' action=''>
                                    <div class='gform_body'>
                                        <ul id='gform_fields_2' class='gform_fields top_label description_below'>
                                            <li id='field_2_4' class='gfield'>
                                                <label class='gfield_label' for='input_2_4'>Name</label>
                                                <div class='ginput_container'>
                                                    <input name='contact_name' id='input_2_4' type='text' value='' class='medium' tabindex='1' />
                                                </div>
                                            </li>
                                            <li id='field_2_2' class='gfield'>
                                                <label class='gfield_label' for='input_2_2'>Phone</label>
                                                <div class='ginput_container'>
                                                    <input name='contact_email' id='input_2_2' type='text' value='' class='medium' tabindex='2' />
                                                </div>
                                            </li>
                                            <li id='field_2_3' class='gfield'>
                                                <label class='gfield_label' for='input_2_3'>Email</label>
                                                <div class='ginput_container'>
                                                    <input name='contact_phone' id='input_2_3' type='text' value='' class='medium' tabindex='3' />
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class='gform_footer top_label'>
                                        <input type='submit' id='gform_submit_button_2' class='button gform_button' value='Submit' tabindex='4' />
                                       

                                    </div>
                                </form>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end sidebar -->

        </div>
        <!-- end content-container -->

        <div class="clear"></div>

    </div>
    <!-- end page-content -->
    <script type='text/javascript'>
        if (typeof(ecfconfig) == 'undefined') {
            var ecfconfig = {};
        }
        ecfconfig[3] = {};
        var ufobaseurl = '<?php echo base_url()?>media/landing-pages/towing/wp-content/admin-ajax.html';
        if (typeof(ufoFormsConfig) == 'undefined') {
            var ufoFormsConfig = {};
            ufoFormsConfig.submits = [];
            ufoFormsConfig.resets = [];
            ufoFormsConfig.validations = [];
        }
        ufoFormsConfig.phonenumberre = /^(\+{0,1}\d{1,2})*\s*(\(?\d{3}\)?\s*)*\d{3}(-{0,1}|\s{0,1})\d{2}(-{0,1}|\s{0,1})\d{2}$/;
    </script>
    <link href='<?php echo base_url()?>media/landing-pages/towing/wp-content/plugins/easy-contact-forms/forms/styles/easyform/css/stde29d.css?ver=1.4.9' rel='stylesheet' type='text/css' />
    
    <br>
    <?php
$this->load->view('partials/l_footer')?>