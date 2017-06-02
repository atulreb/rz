<?php $this->load->view('partials/l_header'); ?>
<!--Include bootstrap menu for mobile devices-->
<div class="container visible-xs">
    <nav class="navbar navbar-default" role="navigation">
        <!-- <nav class="navbar navbar-default navbar-fixed-top visible-sm visible-xs" role="navigation"> -->
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="../index.html"><a href="../index.html" rel="home"><img src="<?php echo base_url() ?>media/landing-pages/mobile-detail/wp-content/themes/onsitedetailing/images/logo-osd.png" class="img-responsive logo-osd"></a><!-- On-Site Auto Detailing --></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse"><ul id="menu-main-menu" class="nav navbar-nav"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a title="Home" href="../index.html"><span class="glyphicon Welcome to RazorClean Mobile Detailing"></span>&nbsp;Home</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9"><a title="About Us" href="../about-mobile-auto-detailing/index.html"><span class="glyphicon Mobile Auto Detailing Service"></span>&nbsp;About Us</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11"><a title="Schedule Appointment" href="../schedule-appointment/index.html">Schedule Appointment</a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-19 dropdown"><a title="Services" href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon Auto Detailing Services"></span>&nbsp;Services <span class="caret"></span></a>
                        <ul role="menu" class=" dropdown-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-20"><a title="Interior Auto Detailing Service" href="../interior-auto-detailing/index.html">Interior Auto Detailing Service</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-21"><a title="Freshen Up Auto Detail Service" href="../freshen-up-auto-detail-service/index.html">Freshen Up Auto Detail Service</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-34"><a title="Ultimate Auto Detail Service" href="../ultimate-auto-detail-service/index.html">Ultimate Auto Detail Service</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-35"><a title="Full Auto Detail Service" href="../full-auto-detail-service/index.html">Full Auto Detail Service</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-36"><a title="Exterior Auto Detailing Service" href="../exterior-auto-detailing/index.html">Exterior Auto Detailing Service</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-55"><a title="Testimonials" href="../category/testimonials/index.html"><span class="glyphicon Customer Testimonials"></span>&nbsp;Testimonials</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-88 current_page_item menu-item-89 active"><a title="Contact Us" href="index.html">Contact Us</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118"><a title="Special Offers" href="../special-offers/index.html">Special Offers</a></li>
                </ul></div>		
        </div>
    </nav>
</div>
<!--End bootstrap menu for mobile devices-->


<div class="container page_body">

    <script>
        var searchBox = document.getElementById('searchinput');
        searchBox.onfocus = function () {
            if (this.value == 'search...') {
                this.value = '';
            }
        }

        searchBox.onblur = function () {
            if (this.value == '') {
                this.value = 'search...';
            }
        }
    </script>
    <div class="row">
        <div class="col-lg-12 col-md-12">


            <h1 class="page_header">Contact Us</h1>
            <div class="col-lg-12 col-md-12">
                <div id="secondary" class="widget-area" role="complementary">
                    <aside id="sci_info_widget-2" class="widget widget_sci_info_widget">		<div class="sci-contact">
                            <p class="sci-address-phone">
                                <span>Phone: </span>
                                1-855 GO RZCLN (467-9256)		</p>



                            <p class="sci-address-email">
                                <span>Email: </span>
                                <a href="mailto:info@onsitedetailing.net" rel="nofollow">signup@rzclnmobiledetail.com</a>
                            </p>
                        </div>
                    </aside><aside id="sci_social_widget-2" class="widget widget_sci_social_widget">		<div class="sci-social-icons">
                            <ul class="sci-social-icons-horizontal">
                                <li class="sci-social-twitter">
                                    <a href="<?php echo $global_setting['twitter_link']?>" target="_blank" title="Twitter">
                                        <img src="<?php echo base_url() ?>media/landing-pages/mobile-detail/wp-content/plugins/simple-contact-info/icons/twitter/4.png" alt="Twitter">
                                    </a>
                                </li>

                                <li class="sci-social-facebook">
                                    <a href="<?php echo $global_setting['facebook_link']?>" target="_blank" title="Facebook">
                                        <img src="<?php echo base_url() ?>media/landing-pages/mobile-detail/wp-content/plugins/simple-contact-info/icons/facebook/4.png" alt="Facebook">
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </aside>	</div><!-- secondary -->
            </div>


            <div class="page_content">
                <div id="lessonCatDesc">						

                    <!-- Fast Secure Contact Form plugin 4.0.38 - begin - FastSecureContactForm.com -->
                    <div style="clear:both;"></div>

                    <div id="FSContact1" style="width:99%; max-width:555px; margin: auto;">
                        <form action="#" id="fscf_form1" method="post">
                            <fieldset id="fscf_form_fieldset1" style="border:1px solid gold; width:99%; max-width:550px; padding:10px;">
                                <legend>Send us a message</legend>

                                <div id="fscf_required1">
                                    <span style="text-align:left;">*</span> <span style="text-align:left;">indicates required field</span>
                                </div>


                                <div id="fscf_div_clear1_0" style="clear:both;">
                                    <div id="fscf_div_field1_0" style="clear:left; float:left; width:99%; max-width:250px; margin-right:10px;">
                                        <div style="text-align:left; padding-top:5px;">
                                            <label style="text-align:left;" for="fscf_name1">Name:<span style="text-align:left;">*</span></label>
                                        </div>
                                        <div style="text-align:left;">
                                            <input style="text-align:left; margin:0; width:99%; max-width:250px;" type="text" id="fscf_name1" name="full_name" value=""  />
                                        </div>
                                    </div>
                                    <div id="fscf_div_follow1_4" style="float:left; padding-left:10px; width:99%; max-width:250px;">
                                        <div  id="fscf_label1_4" style="text-align:left; padding-top:5px;">
                                            <label style="text-align:left;" for="fscf_field1_4">Phone (optional):</label>
                                        </div>
                                        <div style="text-align:left;">
                                            <input style="text-align:left; margin:0; width:99%; max-width:250px;" type="text" id="fscf_field1_4" name="Phone-optional" value=""  />
                                        </div>
                                    </div>
                                </div>

                                <div id="fscf_div_clear1_1" style="clear:both;">
                                    <div id="fscf_div_field1_1" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                        <div style="text-align:left; padding-top:5px;">
                                            <label style="text-align:left;" for="fscf_email1">Email:<span style="text-align:left;">*</span></label>
                                        </div>
                                        <div style="text-align:left;">
                                            <input style="text-align:left; margin:0; width:99%; max-width:250px;" type="text" id="fscf_email1" name="email" value=""  />
                                        </div>
                                    </div>
                                </div>

                                <div id="fscf_div_clear1_3" style="clear:both;">
                                    <div id="fscf_div_field1_3" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                        <div style="text-align:left; padding-top:5px;">
                                            <label style="text-align:left;" for="fscf_field1_3">Message:<span style="text-align:left;">*</span></label>
                                        </div>
                                        <div style="text-align:left;">
                                            <textarea style="text-align:left; margin:0; width:99%; max-width:250px; height:120px;" id="fscf_field1_3" name="message" cols="30" rows="10" ></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div id="fscf_div_clear1_5" style="clear:both;">
                                    <div id="fscf_div_field1_5" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                        <div  id="fscf_label1_5" style="text-align:left; padding-top:5px;">
                                        </div>
                                        <div style="text-align:left;">
                                            <span><input type="checkbox" style="width:22px; height:22px;" id="fscf_field1_5" name="I-want-RazorClean Mobile-Detailing-to-contact-me" value="1" /> <label style="display:inline;" for="fscf_field1_5">I want RazorClean Mobile Detailing to contact me:</label></span>
                                        </div>
                                    </div>
                                </div>
                                <div style="clear:both;"></div>

                                <div style="text-align:left; padding-top:5px;">
                                </div>
                               

                              
                             

                                <div id="fscf_submit_div1" style="text-align:left; clear:both; padding-top:15px;">
                                    <input type="submit" id="fscf_submit1" style="cursor:pointer; margin:0;" value="Submit"  onclick="this.disabled = true; this.value = 'Submitting...'; this.form.submit();" /> 
                                </div>
                            </fieldset>


                        </form>
                    </div>
                    <div style="clear:both;"></div>

                    <!-- Fast Secure Contact Form plugin 4.0.38 - end - FastSecureContactForm.com -->

                    <div class="clear"></div></div>
            </div>


        </div>
        <!-- <div class="col-lg-3 col-md-12">
                                </div> -->
    </div>
</div><!--end page_body container-->
<!-- <div class="container footer visible-lg">
        <div class="row footer-bg">
                <div class="col-md-12 footer-right">
                </div>
        </div>
</div> -->



<?php $this->load->view('partials/l_footer'); ?>
<link rel='stylesheet' id='google-style-css'  href='<?php echo base_url() ?>media/landing-pages/mobile-detail/wp-content/developers.google.com/maps/documentation/javascript/examples/defaultbf88.css' type='text/css' media='all' />
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?sensor=false&amp;ver=1.0'></script>
<script type='text/javascript' src='<?php echo base_url() ?>media/landing-pages/mobile-detail/wp-content/plugins/simple-contact-info/js/contact-info-googlemap5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo base_url() ?>media/landing-pages/mobile-detail/wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='<?php echo base_url() ?>media/landing-pages/mobile-detail/wp-content/plugins/si-contact-form/includes/fscf-scripts8a69.js?ver=169'></script>