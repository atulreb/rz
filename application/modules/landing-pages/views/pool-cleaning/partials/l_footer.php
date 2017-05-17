<!-- Footer -->
<div id="WrapperFooter" class="wrapper vc_custom_1466694806195 pool-form" style="padding-top: 100px;">
    <div class="templatera_shortcode">
        <div id="footer_form" class="vc_row vc_row-fluid">
            <div class="vcsp_container vcsp_row_container vcsp_container_desktop">
                <div class="wpb_column vc_column_container vcsp_col vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">

                            <div class='gf_browser_unknown gform_wrapper' id='gform_wrapper_2'>
                                <a id='gf_2' class='gform_anchor'></a>
                                <form method='post' enctype='multipart/form-data' target='gform_ajax_frame_2' id='gform_2' action=''>
                                    <div class='gform_body pool-form'>
                                        <ul id='gform_fields_2' class='gform_fields top_label form_sublabel_below description_below'>
                                            <li id='field_2_1' class='gfield gf_left_third field_sublabel_below field_description_below hidden_label'>
                                                <label class='gfield_label' for='input_2_1'>Name</label>
                                                <div class='ginput_container ginput_container_text'>
                                                    <input name='contact_name' required id='input_2_1' type='text' value='' class='large pool-form' tabindex='1' placeholder='Name *' style="background: #0081ff !important;	color: #fff !important;"/>
                                                    <input name='service_category' id='input_2_1' type='hidden' value='Pool Cleaning' class='large pool-form' tabindex='1' placeholder='Name' style="background: #0081ff !important;	color: #fff !important;"/>
                                                </div>
                                            </li>
                                            <li id='field_2_2' class='gfield gf_middle_third gfield_contains_required field_sublabel_below field_description_below hidden_label'>
                                                <label class='gfield_label' for='input_2_2'>Email<span class='gfield_required'>*</span></label>
                                                <div class='ginput_container ginput_container_email'>
                                                    <input name='contact_email' required id='input_2_2' type='email' value='' class='large pool-form' tabindex='2' placeholder='Email *' style="background: #0081ff !important;	color: #fff !important;"/>
                                                </div>
                                            </li>
                                            <li id='field_2_3' class='gfield gf_right_third field_sublabel_below field_description_below hidden_label'>
                                                <label class='gfield_label' for='input_2_3'>Phone</label>
                                                <div class='ginput_container ginput_container_phone'>
                                                    <input name='contact_phone' required id='input_2_3' type='text' value='' class='large pool-form' tabindex='3' placeholder='Phone *' style="background: #0081ff !important;	color: #fff !important;"/>
                                                </div>
                                            </li>
                                            <li id='field_2_4' class='gfield field_sublabel_below field_description_below hidden_label'>
                                                <label class='gfield_label' for='input_2_4'>Message</label>
                                                <div class='ginput_container ginput_container_textarea'>
                                                    <textarea name='contact_message' id='input_2_4' class='textarea medium pool-form' tabindex='4' placeholder='Message' rows='10' cols='50' style="background: #0081ff !important;	color: #fff !important;"></textarea>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class='gform_footer top_label'>
                                        <input type='submit' id='gform_submit_button_2' class='gform_button button' value='Send' tabindex='5'  />

                                    </div>
                                </form>

                            </div>
                            <span id="rspstatus"></span>
                            <script type='text/javascript'>
                                jQuery(document).ready(function ($) {
                                    gformInitSpinner(2, '<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/plugins/gravityforms/images/spinner.gif');
                                    jQuery('#gform_ajax_frame_2').load(function () {
                                        var contents = jQuery(this).contents().find('*').html();
                                        var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;
                                        if (!is_postback) {
                                            return;
                                        }
                                        var form_content = jQuery(this).contents().find('#gform_wrapper_2');
                                        var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_2').length > 0;
                                        var is_redirect = contents.indexOf('gformRedirect(){') >= 0;
                                        var is_form = form_content.length > 0 && !is_redirect && !is_confirmation;
                                        if (is_form) {
                                            jQuery('#gform_wrapper_2').html(form_content.html());
                                            setTimeout(function () { /* delay the scroll by 50 milliseconds to fix a bug in chrome */
                                                jQuery(document).scrollTop(jQuery('#gform_wrapper_2').offset().top);
                                            }, 50);
                                            if (window['gformInitDatepicker']) {
                                                gformInitDatepicker();
                                            }
                                            if (window['gformInitPriceFields']) {
                                                gformInitPriceFields();
                                            }
                                            var current_page = jQuery('#gform_source_page_number_2').val();
                                            gformInitSpinner(2, '<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/plugins/gravityforms/images/spinner.gif');
                                            jQuery(document).trigger('gform_page_loaded', [2, current_page]);
                                            window['gf_submitting_2'] = false;
                                        } else if (!is_redirect) {
                                            var confirmation_content = jQuery(this).contents().find('#gforms_confirmation_message_2').html();
                                            if (!confirmation_content) {
                                                confirmation_content = contents;
                                            }
                                            setTimeout(function () {
                                                jQuery('#gform_wrapper_2').replaceWith('<' + 'div id=\'gforms_confirmation_message_2\' class=\'gform_confirmation_message_2 gforms_confirmation_message\'' + '>' + confirmation_content + '<' + '/div' + '>');
                                                jQuery(document).scrollTop(jQuery('#gforms_confirmation_message_2').offset().top);
                                                jQuery(document).trigger('gform_confirmation_loaded', [2]);
                                                window['gf_submitting_2'] = false;
                                            }, 50);
                                        } else {
                                            jQuery('#gform_2').append(contents);
                                            if (window['gformRedirect']) {
                                                gformRedirect();
                                            }
                                        }
                                        jQuery(document).trigger('gform_post_render', [2, current_page]);
                                    });
                                });
                            </script>
                            <script type='text/javascript'>
                                if (typeof gf_global == 'undefined')
                                    var gf_global = {
                                        "gf_currency_config": {
                                            "name": "U.S. Dollar",
                                            "symbol_left": "$",
                                            "symbol_right": "",
                                            "symbol_padding": "",
                                            "thousand_separator": ",",
                                            "decimal_separator": ".",
                                            "decimals": 2
                                        },
                                        "base_url": "/wp-content\/plugins\/gravityforms",
                                        "number_formats": [],
                                        "spinnerUrl": "/wp-content\/plugins\/gravityforms\/images\/spinner.gif"
                                    };
                                jQuery(document).bind('gform_post_render', function (event, formId, currentPage) {
                                    if (formId == 2) {
                                        if (typeof Placeholders != 'undefined') {
                                            Placeholders.enable();
                                        }
                                        if (!/(android)/i.test(navigator.userAgent)) {
                                            jQuery('#input_2_3').mask('(999) 999-9999').bind('keypress', function (e) {
                                                if (e.which == 13) {
                                                    jQuery(this).blur();
                                                }
                                            });
                                        }
                                    }
                                });
                                jQuery(document).bind('gform_post_conditional_logic', function (event, formId, fields, isInit) {});
                            </script>
                            <script type='text/javascript'>
                                jQuery(document).ready(function () {
                                    jQuery(document).trigger('gform_post_render', [2, 1])
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer_address" class="vc_row vc_row-fluid">
            <div class="vcsp_container vcsp_row_container vcsp_container_desktop">
                <div class="wpb_column vc_column_container vcsp_col vc_col-sm-8">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="vc_text wpb_content_element  _left ">
                                <p><a id="footer_phone" href="tel:/18554679256">1-855 GO RZCLN (467-9256)</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vcsp_col vc_col-sm-4">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="vc_text wpb_content_element  _middle ">
                                <!--p>17200 Chenal Parkway Suite 300-272 Little Rock, AR 72223</p-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_col_right wpb_column vc_column_container vcsp_col vc_col-sm-3">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="vc_text wpb_content_element  _right ">
                                <p><a target="_blank" href="<?php echo $global['facebook_link'] ?>"><img class="aligncenter size-full wp-image-1830" src="<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/uploads/home-4.png" alt="home-4" width="24" height="24" /></a><a target="_blank" href="<?php echo $global['twitter_link'] ?>"><img class="aligncenter size-full wp-image-1825" src="<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/uploads/home-24.png" alt="home-24" width="24" height="24" /></a><a target="_blank" href="<?php echo $global['google_link'] ?>"><img class="aligncenter size-full wp-image-1812" src="<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/uploads/home-12.png" alt="home-12" width="24" height="24" /></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer_menu" class="vc_row vc_row-fluid">
            <div class="vcsp_container vcsp_row_container vcsp_container_desktop">
                <div class="wpb_column vc_column_container vcsp_col vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="vc_wp_custommenu wpb_content_element">
                                <div class="widget widget_nav_menu">
                                    <div class="menu-footer-container">
                                        <ul id="menu-footer" class="menu">
                                            <li id="menu-item-3439" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3369 current_page_item menu-item-3439"><a href="index.html">Home</a></li>
                                            <li id="menu-item-3440" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3440"><a href="<?php echo base_url() ?>pool-cleaning/about-us">About us</a></li>
                                            <li id="menu-item-3441" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3441"><a href="<?php echo base_url() ?>pool-cleaning/services">Services</a></li>
                                            <li id="menu-item-3445" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3445"><a href="<?php echo base_url() ?>pool-cleaning/contact">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer_license" class="vc_row vc_row-fluid">
            <div class="vcsp_container vcsp_row_container vcsp_container_desktop">
                <div class="wpb_column vc_column_container vcsp_col vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="vc_text wpb_content_element   vcsp_align_center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div id="customHeading" style="
    background: #0081ff;padding:25px 0
">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 style="font-size:30px" class="section-heading"><marquee><i class="fa fa-angle-double-left" aria-hidden="true"></i> RazorClean, The Circle of Trust. Save Money, Live RazorClean</marquee></h2>
            </div>
        </div>
    </div>
</div>
        <div id="footer_copyrights" class="vc_row vc_row-fluid">
            <div class="vcsp_container vcsp_row_container vcsp_container_desktop">
                <div class="wpb_column vc_column_container vcsp_col">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="vc_text wpb_content_element">
                                <p>© <?php echo date("Y")?>. RazorClean Pool Cleaning Service. All rights reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vcsp_col vc_col-sm-6">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="vc_text wpb_content_element  _right ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper">
    <div class="container">
        <!-- ngg_resource_manager_marker -->
		

        <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/pool-cleaning/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
        <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/pool-cleaning/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
        <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/pool-cleaning/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
        <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/pool-cleaning/wp-includes/js/jquery/ui/resizable.min.js?ver=1.11.4'></script>
        <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/pool-cleaning/wp-includes/js/jquery/ui/draggable.min.js?ver=1.11.4'></script>
        <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/pool-cleaning/wp-includes/js/jquery/ui/button.min.js?ver=1.11.4'></script>
        <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/pool-cleaning/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4'></script>
        <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/pool-cleaning/wp-includes/js/jquery/ui/dialog.min.js?ver=1.11.4'></script>
        <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/pool-cleaning/wp-includes/js/wpdialog.min.js?ver=4.5.8'></script>
        <script type='text/javascript' src='<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/themes/lytron/js/hover-intent5152.js?ver=1.0'></script>
        <script type='text/javascript' src='<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/themes/lytron/js/dropdown.min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/themes/lytron/js/main5152.js?ver=1.0'></script>
        <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/pool-cleaning/wp-includes/js/wp-embed.min.js?ver=4.5.8'></script>
        <script type='text/javascript' src='<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/plugins/saragna-vc-addon/assets/js/imagesloaded.pkgd.minfc12.js?ver=4.5.8'></script>
        <script type='text/javascript' src='<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min2720.js?ver=4.11.2'></script>
        <script type='text/javascript' src='<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/plugins/saragna-vc-addon/assets/js/megnificfc12.js?ver=4.5.8'></script>
        <script type='text/javascript' src='<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/plugins/saragna-vc-addon/assets/js/isotope.pkgd.minfc12.js?ver=4.5.8'></script>
        <script type='text/javascript' src='<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/plugins/saragna-vc-addon/assets/js/post-grid-scriptfc12.js?ver=4.5.8'></script>
        <script type='text/javascript' src='<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/plugins/saragna-vc-addon/assets/js/jquery.ddslick.minfc12.js?ver=4.5.8'></script>
        <script type='text/javascript' src='<?php echo base_url() ?>media/landing-pages/pool-cleaning/wp-content/plugins/saragna-vc-addon/assets/js/owl.carousel.minfc12.js?ver=4.5.8'></script>
        
		<script>
                                var $RMjQuery = jQuery.noConflict();
                                $RMjQuery(document).ready(function () {
                                    var isOpen = false;
                                    $RMjQuery(document).on('click', '#click-menu', function () {
                                        $RMjQuery('#responsive-menu').css('height', $RMjQuery(document).height());
                                        !isOpen ? openRM() : closeRM()
                                    });

                                    function openRM() {
                                        $RMjQuery('#responsive-menu').css('display', 'block');
                                        $RMjQuery('#responsive-menu').addClass('RMOpened');
                                        $RMjQuery('#click-menu').addClass('click-menu-active');
                                        $RMjQuery('#responsive-menu').stop().animate({
                                            left: "0"
                                        }, 300, 'linear', function () {
                                            $RMjQuery('#responsive-menu').css('height', $RMjQuery(document).height());
                                            isOpen = true
                                        })
                                    }

                                    function closeRM() {
                                        $RMjQuery('#responsive-menu').animate({
                                            left: "-75%"
                                        }, 300, 'linear', function () {
                                            $RMjQuery('#responsive-menu').css('display', 'none');
                                            $RMjQuery('#responsive-menu').removeClass('RMOpened');
                                            $RMjQuery('#click-menu').removeClass('click-menu-active');
                                            isOpen = false
                                        })
                                    }
                                    $RMjQuery(window).resize(function () {
                                        $RMjQuery('#responsive-menu').css('height', $RMjQuery(document).height());
                                        if ($RMjQuery(window).width() > 1200) {
                                            if ($RMjQuery('#responsive-menu').css('left') != '-75%') {
                                                closeRM()
                                            }
                                        }
                                    });
                                    $RMjQuery('#responsive-menu ul ul').css('display', 'none');
                                    clickLink = '<span class=\"appendLink\">▼</span>';
                                    clickedLink = '<span class=\"appendLink rm-append-active\">▲</span>';
                                    excludeList = '.current-menu-item, .current-menu-ancestor, .current_page_ancestor';
                                    $RMjQuery('#responsive-menu .menu-item-has-children').not(excludeList).prepend(clickLink);
                                    $RMjQuery('#responsive-menu .page_item_has_children.current-menu-item').prepend(clickedLink);
                                    $RMjQuery('#responsive-menu .page_item_has_children.current-menu-ancestor').prepend(clickedLink);
                                    $RMjQuery('#responsive-menu .menu-item-has-children.current-menu-item').prepend(clickedLink);
                                    $RMjQuery('#responsive-menu .menu-item-has-children.current-menu-ancestor').prepend(clickedLink);
                                    $RMjQuery('#responsive-menu .page_item_has_children').not(excludeList).prepend(clickLink);
                                    $RMjQuery('#responsive-menu .menu-item-has-children.current_page_ancestor').prepend(clickedLink);
                                    $RMjQuery('#responsive-menu .page_item_has_children.current_page_ancestor').prepend(clickedLink);
                                    $RMjQuery('.appendLink').on('click', function () {
                                        $RMjQuery(this).nextAll('#responsive-menu ul ul').slideToggle();
                                        $RMjQuery(this).html($RMjQuery(this).hasClass('rm-append-active') ? '▼' : '▲');
                                        $RMjQuery(this).toggleClass('rm-append-active');
                                        $RMjQuery('#responsive-menu').css('height', $RMjQuery(document).height())
                                    });
                                    $RMjQuery('.rm-click-disabled').on('click', function () {
                                        $RMjQuery(this).nextAll('#responsive-menu ul ul').slideToggle();
                                        $RMjQuery(this).siblings('.appendLink').html($RMjQuery(this).hasClass('rm-append-active') ? '▼' : '▲');
                                        $RMjQuery(this).toggleClass('rm-append-active');
                                        $RMjQuery('#responsive-menu').css('height', $RMjQuery(document).height())
                                    });
                                    $RMjQuery('#responsive-menu .current_page_ancestor.menu-item-has-children').children('ul').css('display', 'block');
                                    $RMjQuery('#responsive-menu .current-menu-ancestor.menu-item-has-children').children('ul').css('display', 'block');
                                    $RMjQuery('#responsive-menu .current-menu-item.menu-item-has-children').children('ul').css('display', 'block');
                                    $RMjQuery('#responsive-menu .current_page_ancestor.page_item_has_children').children('ul').css('display', 'block');
                                    $RMjQuery('#responsive-menu .current-menu-ancestor.page_item_has_children').children('ul').css('display', 'block');
                                    $RMjQuery('#responsive-menu .current-menu-item.page_item_has_children').children('ul').css('display', 'block')
                                });

                                $RMjQuery("#gform_2").submit(function (e) {
                                    e.preventDefault(); // avoid to execute the actual submit of the form.
                                    var url = "<?php echo base_url() ?>backend/contact_us/submitContactFormFrontent"; // the script where you handle the form input.
                                    //alert(url);
                                    $RMjQuery.ajax({
                                        type: "POST",
                                        url: url,
                                        data: $RMjQuery("#gform_2").serialize(), // serializes the form's elements.
                                        dataType: "json",
                                        success: function (data)
                                        {
                                            if (data.status === '0') {
                                                $RMjQuery("#rspstatus").html("Please provide required field");
                                                $RMjQuery("#gform_ajax_spinner_2").hide();
                                            } else {
                                                $RMjQuery("#rspstatus").html(data.msg);
                                                $RMjQuery("#gform_ajax_spinner_2").hide();
                                                $('#gform_2')[0].reset();
                                            }
                                        }
                                    });


                                });
                                $RMjQuery("#gform_1").submit(function (e) {
                                    e.preventDefault(); // avoid to execute the actual submit of the form.
                                    var url = "<?php echo base_url() ?>landing-pages/Pool_Clenaing/getFreeQuote"; // the script where you handle the form input.
                                    //alert(url);
                                    $RMjQuery.ajax({
                                        type: "POST",
                                        url: url,
                                        data: $RMjQuery("#gform_1").serialize(), // serializes the form's elements.
                                        dataType: "json",
                                        success: function (data)
                                        {
                                            if (data.status === '0') {
                                                $RMjQuery("#rsp1status").html(data.msg);
                                                $RMjQuery("#gform_ajax_spinner_1").hide();
                                            } else {
                                                $RMjQuery("#rsp1status").html(data.msg);
                                                $RMjQuery("#gform_ajax_spinner_1").hide();
                                                $('#gform_1')[0].reset();
                                            }
                                        }
                                    });


                                });
                                $RMjQuery("#gform_3").submit(function (e) {
                                    e.preventDefault(); // avoid to execute the actual submit of the form.
                                    var url = "<?php echo base_url() ?>landing-pages/Pool_Clenaing/submitContactUsForm"; // the script where you handle the form input.
                                    alert(url);
                                    $RMjQuery.ajax({
                                        type: "POST",
                                        url: url,
                                        data: $RMjQuery("#gform_3").serialize(), // serializes the form's elements.
                                        dataType: "json",
                                        success: function (data) {
                                            if (data.status === '0') {
                                                $RMjQuery("#rsp2status").html("<span style='color:red'>"+data.msg+"</span>");
                                                $RMjQuery("#gform_ajax_spinner_3").hide();
                                            } else {
                                                $RMjQuery("#rsp2status").html("<span style='color:green'>"+data.msg+"</span>");
                                                $RMjQuery("#gform_ajax_spinner_3").hide();
                                                $('#gform_3')[0].reset();
                                            }
                                        }
                                    });
                                });
        </script>
		
		<script>
            jQuery(document).ready(function () {
                document.getElementById("myDiv").style.display="none";  // 5 seconds
            });
        </script>
    </div>
</div>


</body>



</html>