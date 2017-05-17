<?php $this->load->view('partials/l_header'); ?>
<!-- Content -->
<section id="WrapperContent" class="wrapper">
    <div class="container">
        <div class="wrapper site-content content-with-sidebar">
            <!-- Entries -->
            <div class="entry-content">
                <!-- Entry box -->
                <?php foreach ($arr_blog_data as $blog) { ?>
                    <!-- Entry box -->
                    <article class="entry-index wrapper">
                        <!-- Entry box header -->
                        <header class='entry-header'>
                            <h1 class='entry-title-index'><?php echo $blog['post_title'] ?></h1>
                            <p class='entry-meta'> Posted by <span class='entry-author'><a href="../author/lytronwriter/index.html" title="Posts by lytronwriter" rel="author">lytronwriter</a></span> <span class='entry-date'>on October 18, 2016</span> <span class="entry-category">in <a href="../category/blog/index.html" rel="category tag">BLOG</a></span> </p>
                        </header>
                        <!-- Entry box content -->
                        <div class='entry-excerpt wrapper'>
                            <div class="entry-index-thumbnail entry-index-thumbnail--postimg"><a href="../sand-enemy-swimming-pools/index.html"><img src="<?php echo base_url() . "uploads/blogs/" . $blog['blog_image']; ?>" alt=""></a>
                            </div>
                            <div class="entry-excerpt-text">
                                <?php
                                echo substr($blog[
                                        'post_content'], 0, 250)
                                ?> <a href="<?php echo base_url() . " pool-cleaning/blog-details/" . $blog['slug'] ?>" class="entry-excerpt-readmore">Read More</a> </div>
                        </div>
                    </article>
                <?php } ?>
                <div class="paginate paginate-dark wrapper">
                    <ul>
                    <?php echo $pg_link; ?>
                    </ul>
                </div>
            </div>
            <!-- Sidebar -->
            <aside class="sidebar main-sidebar">
                <div class="widget widget-main_sidebar"><span class="widget-title widget-title-main_sidebar">Get a Free Quote!</span>
                    <link rel='stylesheet' id='gforms_reset_css-css' href='<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/plugins/gravityforms/css/formreset.min7b47.css?ver=1.9.17' type='text/css' media='all' />
                    <link rel='stylesheet' id='gforms_formsmain_css-css' href='<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/plugins/gravityforms/css/formsmain.min7b47.css?ver=1.9.17' type='text/css' media='all' />
                    <link rel='stylesheet' id='gforms_ready_class_css-css' href='<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/plugins/gravityforms/css/readyclass.min7b47.css?ver=1.9.17' type='text/css' media='all' />
                    <link rel='stylesheet' id='gforms_browsers_css-css' href='<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/plugins/gravityforms/css/browsers.min7b47.css?ver=1.9.17' type='text/css' media='all' />
                    <script type='text/javascript' src='<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/plugins/gravityforms/js/jquery.maskedinput.min7b47.js?ver=1.9.17'></script>
                    <div class='gf_browser_unknown gform_wrapper' id='gform_wrapper_1'>
                        <span style="" id="rsp1status"></span>
                        <form method='post' enctype='multipart/form-data' id='gform_1' action=''>
                            <div class='gform_body'>
                                <ul id='gform_fields_1' class='gform_fields top_label form_sublabel_below description_below'>
                                    <li id='field_1_1' class='gfield gfield_contains_required field_sublabel_below field_description_below hidden_label'>
                                        <label class='gfield_label' for='input_1_1'><span class='gfield_required'>*</span>
                                        </label>
                                        <div class='ginput_container ginput_container_text'>
                                            <input name='contact_name' id='input_1_1' required type='text' value='' class='large' tabindex='1' placeholder='Name *' />
                                            <input type="hidden" value="Pool Cleaning" name="service_category">
                                        </div>
                                    </li>
                                    <li id='field_1_3' class='gfield gfield_contains_required field_sublabel_below field_description_below hidden_label'>
                                        <label class='gfield_label' for='input_1_3'><span class='gfield_required'>*</span>
                                        </label>
                                        <div class='ginput_container ginput_container_email'>
                                            <input name='contact_email' id='input_1_3' required type='email' value='' class='large' tabindex='2' placeholder='Email *' /> </div>
                                    </li>
                                    <li id='field_1_4' class='gfield gfield_contains_required field_sublabel_below field_description_below hidden_label'>
                                        <label class='gfield_label' for='input_1_4'><span class='gfield_required'>*</span>
                                        </label>
                                        <div class='ginput_container ginput_container_phone'>
                                            <input name='contact_phone' id='input_1_4' type='text' value='' class='large' required tabindex='3' placeholder='Phone *' />
                                        </div>
                                    </li>
                                    <li id='field_1_5' class='gfield field_sublabel_below field_description_below hidden_label'>
                                        <label class='gfield_label' for='input_1_5'></label>
                                        <div class='ginput_container ginput_container_textarea'>
                                            <textarea name='contact_message' id='input_1_5' class='textarea medium' tabindex='4' placeholder='Message' rows='10' cols='50'></textarea>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class='gform_footer top_label'>
                                <input type='submit' id='gform_submit_button_1' class='gform_button button' value='GET QUOTE' /> </div>
                        </form>
                    </div>
                    <script type='text/javascript'>
                        jQuery(document).bind(
                                'gform_post_render',
                                function (event, formId,
                                        currentPage) {
                                    if (formId == 1) {
                                        if (typeof Placeholders !=
                                                'undefined') {
                                            Placeholders.enable();
                                        }
                                        if (!/(android)/i.test(
                                                navigator.userAgent)) {
                                            jQuery('#input_1_4').mask(
                                                    '(999) 999-9999').bind(
                                                    'keypress',
                                                    function (e) {
                                                        if (e.which == 13) {
                                                            jQuery(this).blur();
                                                        }
                                                    });
                                        }
                                    }
                                });
                        jQuery(document).bind(
                                'gform_post_conditional_logic',
                                function (event, formId, fields,
                                        isInit) {});
                    </script>
                    <script type='text/javascript'>
                        jQuery(document).ready(function () {
                            jQuery(document).trigger(
                                    'gform_post_render', [1, 1])
                        });
                    </script>
                </div>
                <div class="widget widget-main_sidebar">
                    <span class="widget-title widget-title-main_sidebar">Recent Posts</span>
                    <ul>
                        <?php foreach($latest_blog as $lb){ ?>
                        <li> <a href="<?php echo base_url()."pool-cleaning/blog-details/".$lb['slug']?>"><?php echo $lb['post_title']?></a> </li>
                        <?php }?>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>
<?php $this->load->view('partials/l_footer'); ?>