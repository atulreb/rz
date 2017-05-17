<div id="customHeading" style="
    background: #9e0000;
    padding: 13px 0;
">
    
        <div class="">
            <div class="">
                <h2 style="font-size:30px;color:#fff" class="section-heading"><marquee><i class="fa fa-angle-double-left" aria-hidden="true"></i> RazorClean, The Circle of Trust. Save Money, Live RazorClean</marquee></h2>
            </div>
        </div>
    
</div>
    <footer class="container-fluid site_footer body_width">
        <div class="container">
            <div class="row-fluid">
                <div id="first_footer" class="widget_area span3">
                    <div id="text-5" class="widget_container clearfix widget widget_text">
                        <h3 class="page-header"><span class="page_header_title"> Staffing</span></h3>
                        <div class="textwidget"> Staffing has been established in the Memphis Area for the last 30 years. We provide our service to Memphis and surrounding areas as well as Greenville, MS and Dallas/Fort Worth TX.</div>
                    </div>
                </div>

                <div id="second_footer" class="widget_area span3">
                    <div id="postlist-widget-2" class="widget_container clearfix widget postlist-widget">
                        <h3 class="page-header"><span class="page_header_title">Recent Job Postings</span></h3>

                        <div class="post_list itswidget">
						<?php foreach($footer_jobs as $fj){?>
                            <div class="post_row clearfix">
                               
                                <div class="post_info">
                                    <div class="post_title"><a href="<?php echo base_url()."staffing/job-details/".$fj['id']?>"><h6><?php echo $fj['job_title']?></h6></a></div>
                                    <span class="blog_date meta_item"><?php echo date("d F Y",strtotime($fj['posting_date']))?></span>

                                </div>
                            </div>
						<?php }?>
                        </div>

                    </div>
                </div>

                <div id="third_footer" class="widget_area span3">
                    <div id="recent-posts-2" class="widget_container clearfix widget widget_recent_entries">
                        <h3 class="page-header"><span class="page_header_title">Recent Announcements</span></h3>
                        <ul>
						<?php foreach($footer_blog as $fb){?>
                            <li>
                                <a href="<?php echo base_url()."staffing/blog-details/".$fb['slug']?>"><?php echo $fb['post_title']?></a>
                            </li>
						<?php }?>
                        </ul>
                    </div>
                </div>

                <div id="fourth_footer" class="widget_area span3">
                    <div id="text-6" class="widget_container clearfix widget widget_text">
                        <h3 class="page-header"><span class="page_header_title">Contact </span></h3>
                        <div class="textwidget">RazorClean Inc.
                            <br />

                            <body onload="_googWcmGet('number', '(1-855467-9256')"><span class="number">1-855 GO RZCLN (467-9256)</span></body>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <div class="container-fluid site_secondary_footer body_width">
        <div class="container secondary_footer_container">
            <div class="row-fluid">
                <div class="span12 pull-left">
                    © <?php echo date("Y")?>  RazorClean Staffing | All rights reserved | <a href="<?php echo base_url()?>staffing/privacy-policy">Privacy Policy</a> </div>
            </div>
        </div>

    </div>
   
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var var_gclid = '';
            var var_referrer = '';
            var var_utm_source = '';
            var var_utm_medium = '';
            var var_utm_term = '';
            var var_utm_content = '';
            var var_utm_campaign = '';
            var var_1 = '';
            var var_2 = '';
            var var_3 = '';
            var var_4 = '';
            var var_5 = '';
            var var_6 = '';

            var cookie_parameters = {
                expires: 30,
                path: '/',
                domain: '',
                secure: false
            };

            /////////read cookie
            var var_gclid_to_decode = '';
            var var_referrer_to_decoded = '';
            var var_campaing_n_customs_to_decoded = '';

            //gclid
            var exist_gclid_cookie_data = jQuery.cookie('ct_gclid_tracking_cookie');
            if (exist_gclid_cookie_data) {
                var_gclid_to_decode = exist_gclid_cookie_data;
            } else {
                var_gclid = get_url_parameter_by_name('gclid');
            }
            //traffic
            var exist_traffic_source_cookie_data = jQuery.cookie('ct_traffic_source_cookie');
            if (exist_traffic_source_cookie_data) {
                var_referrer_to_decoded = exist_traffic_source_cookie_data;
            } else {
                var_referrer = document.referrer;
                if (var_referrer == "") {
                    var_referrer = 'Direct';
                }
            }
            //campaign and custom variables
            var exist_campaign_n_customs_cookie_data = jQuery.cookie('ct_tracking_cookie');
            if (exist_campaign_n_customs_cookie_data) {
                var_campaing_n_customs_to_decoded = exist_campaign_n_customs_cookie_data;
            } else {
                var_utm_source = get_url_parameter_by_name('utm_source');
                var_utm_medium = get_url_parameter_by_name('utm_medium');
                var_utm_term = get_url_parameter_by_name('utm_term');
                var_utm_content = get_url_parameter_by_name('utm_content');
                var_utm_campaign = get_url_parameter_by_name('utm_campaign');
            }
            //use ajax to decode data
            if (var_gclid_to_decode || var_referrer_to_decoded || var_campaing_n_customs_to_decoded) {
                var data = {
                    'action': 'ct_decode_cookie_data',
                    'gclid_data': var_gclid_to_decode,
                    'traffic_data': var_referrer_to_decoded,
                    'camaign_n_customs_data': var_campaing_n_customs_to_decoded
                }
                jQuery.post('wp-admin/admin-ajax.php', data, function(response) {
                    if (response.indexOf("ERROR") != -1) {
                        alert(response);
                        return;
                    }
                    var return_obj = jQuery.parseJSON(response);
                    //gclid
                    if (var_gclid_to_decode) {
                        var_gclid = return_obj.gclid;
                    }
                    //traffic
                    if (var_referrer_to_decoded) {
                        var_referrer = return_obj.referrer;
                    }
                    //campaing & customs
                    if (var_campaing_n_customs_to_decoded) {
                        var_utm_source = return_obj.s;
                        var_utm_medium = return_obj.m;
                        var_utm_term = return_obj.t;
                        var_utm_content = return_obj.c;
                        var_utm_campaign = return_obj.ca;
                    }

                    /////////set cookie
                    var data_2_encode = {
                        'gclid': '',
                        'referrer': '',
                        'utm_source': '',
                        'utm_medium': '',
                        'utm_term': '',
                        'utm_content': '',
                        'utm_campaign': '',
                    };
                    //gclid
                    var_gclid = get_url_parameter_by_name('gclid');
                    if (var_gclid == "") {
                        delete data_2_encode['gclid'];
                        //if there's new glicd then just use the saved cookie if there it is
                        if (var_gclid_to_decode) {
                            var_gclid = return_obj.gclid;
                        }
                    } else {
                        data_2_encode.gclid = var_gclid;
                    }
                    //trafic source
                    if (var_referrer_to_decoded == "") {
                        if (var_referrer == "") {
                            delete data_2_encode['referrer'];
                        } else {
                            data_2_encode.referrer = var_referrer;
                        }
                    } else {
                        delete data_2_encode['referrer'];
                    }

                    if (var_campaing_n_customs_to_decoded == "") {
                        if (var_utm_source == "") {
                            delete data_2_encode['utm_source'];
                        } else {
                            data_2_encode.utm_source = var_utm_source;
                        }
                        if (var_utm_medium == "") {
                            delete data_2_encode['utm_medium'];
                        } else {
                            data_2_encode.utm_medium = var_utm_medium;
                        }
                        if (var_utm_term == "") {
                            delete data_2_encode['utm_term'];
                        } else {
                            data_2_encode.utm_term = var_utm_term;
                        }
                        if (var_utm_content == "") {
                            delete data_2_encode['utm_content'];
                        } else {
                            data_2_encode.utm_content = var_utm_content;
                        }
                        if (var_utm_campaign == "") {
                            delete data_2_encode['utm_campaign'];
                        } else {
                            data_2_encode.utm_campaign = var_utm_campaign;
                        }
                    } else {
                        delete data_2_encode['utm_source'];
                        delete data_2_encode['utm_medium'];
                        delete data_2_encode['utm_term'];
                        delete data_2_encode['utm_content'];
                        delete data_2_encode['utm_campaign'];
                    }

                    if (!jQuery.isEmptyObject(data_2_encode)) {
                        data_2_encode['action'] = 'ct_encode_cookie_data';
                        jQuery.post('wp-admin/admin-ajax.php', data_2_encode, function(response) {
                            if (response.indexOf("ERROR") != -1) {
                                alert(response);
                                return;
                            }
                            var return_obj = jQuery.parseJSON(response);
                            //gclid
                            if (return_obj.gclid) {
                                jQuery.cookie('ct_gclid_tracking_cookie', return_obj.gclid, cookie_parameters);
                            }
                            //traffic
                            if (return_obj.referrer) {
                                jQuery.cookie('ct_traffic_source_cookie', return_obj.referrer, cookie_parameters);
                            }
                            //campaing & customs
                            if (return_obj.campaign_n_customs) {
                                jQuery.cookie('ct_tracking_cookie', return_obj.campaign_n_customs, cookie_parameters);
                            }

                            //populate forms
                        });
                    } else {
                        //populate forms
                    }
                });
            } else {
                /////////set cookie
                var data_2_encode = {
                    'gclid': '',
                    'referrer': '',
                    'utm_source': '',
                    'utm_medium': '',
                    'utm_term': '',
                    'utm_content': '',
                    'utm_campaign': '',
                };
                //gclid
                var_gclid = get_url_parameter_by_name('gclid');
                if (var_gclid == "") {
                    delete data_2_encode['gclid'];
                    //if there's new glicd then just use the saved cookie if there it is
                    if (var_gclid_to_decode) {
                        var_gclid = return_obj.gclid;
                    }
                } else {
                    data_2_encode.gclid = var_gclid;
                }
                //trafic source
                if (var_referrer_to_decoded == "") {
                    if (var_referrer == "") {
                        delete data_2_encode['referrer'];
                    } else {
                        data_2_encode.referrer = var_referrer;
                    }
                } else {
                    delete data_2_encode['referrer'];
                }

                if (var_campaing_n_customs_to_decoded == "") {
                    if (var_utm_source == "") {
                        delete data_2_encode['utm_source'];
                    } else {
                        data_2_encode.utm_source = var_utm_source;
                    }
                    if (var_utm_medium == "") {
                        delete data_2_encode['utm_medium'];
                    } else {
                        data_2_encode.utm_medium = var_utm_medium;
                    }
                    if (var_utm_term == "") {
                        delete data_2_encode['utm_term'];
                    } else {
                        data_2_encode.utm_term = var_utm_term;
                    }
                    if (var_utm_content == "") {
                        delete data_2_encode['utm_content'];
                    } else {
                        data_2_encode.utm_content = var_utm_content;
                    }
                    if (var_utm_campaign == "") {
                        delete data_2_encode['utm_campaign'];
                    } else {
                        data_2_encode.utm_campaign = var_utm_campaign;
                    }
                } else {
                    delete data_2_encode['utm_source'];
                    delete data_2_encode['utm_medium'];
                    delete data_2_encode['utm_term'];
                    delete data_2_encode['utm_content'];
                    delete data_2_encode['utm_campaign'];
                }

                if (!jQuery.isEmptyObject(data_2_encode)) {
                    data_2_encode['action'] = 'ct_encode_cookie_data';
                    jQuery.post('wp-admin/admin-ajax.php', data_2_encode, function(response) {
                        if (response.indexOf("ERROR") != -1) {
                            alert(response);
                            return;
                        }
                        var return_obj = jQuery.parseJSON(response);
                        //gclid
                        if (return_obj.gclid) {
                            jQuery.cookie('ct_gclid_tracking_cookie', return_obj.gclid, cookie_parameters);
                        }
                        //traffic
                        if (return_obj.referrer) {
                            jQuery.cookie('ct_traffic_source_cookie', return_obj.referrer, cookie_parameters);
                        }
                        //campaing & customs
                        if (return_obj.campaign_n_customs) {
                            jQuery.cookie('ct_tracking_cookie', return_obj.campaign_n_customs, cookie_parameters);
                        }

                        //populate forms
                    });
                } else {
                    //populate forms
                }
            }
			
			 document.getElementById("myDiv").style.display="none";  // 5 seconds
	
  

        });
    </script>
    <script type="text/javascript">
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        }
    </script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/framework/aqua/assets/javascripts/aqpb-view4685.js?ver=1494394024'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-includes/js/comment-reply.min125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/framework/bootstrap/js/bootstrap.min125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/eslider/jquery.eislideshow125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/jquery.fitvids125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/jquery.ticker125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/flexslider/jquery.flexslider-min125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/jquery.easing125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/owl-carousel/owl.carousel.min125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/prettyphoto/js/jquery.prettyPhoto125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/jquery.mousewheel125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/carousel/jquery.carouFredSel-6.2.0-packed125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/jquery.jcarousel.min125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/jquery.transit.min125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/jquery.ba-throttle-debounce.min125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/component125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/isotope/jquery.isotope.min125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/tweets/jquery.tweet125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/imagesloaded.pkgd.min125b.js?ver=4.7.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-content/themes/bostan/js/asalah7793.js?ver=2.4'></script>
    <script type='text/javascript' src='<?php echo base_url()?>media/landing-pages/staffing/wp-includes/js/wp-embed.min125b.js?ver=4.7.4'></script>
</body>

<!-- Mirrored from www.pscstaffing.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2017 11:03:42 GMT -->

</html>