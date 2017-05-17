<?php $this->load->view('partials/l_header') ?>
<div id="mobile-menu" data-mobile-fixed="1">

    <div class="container">
        <ul>
            <li><a href="#">No menu assigned!</a></li>		
        </ul>
    </div>

</div>

<div id="ajax-loading-screen" data-disable-fade-on-click="0" data-effect="standard" data-method="ajax">

    <span class="loading-icon none"> 
        <span class="default-skin-loading-icon"></span> 
    </span>
</div>

<div id="ajax-content-wrap">





    <div class="container-wrap">

        <div class="container main-content">

            <div class="row">




                <div id="fws_58f66e8e322cf" data-midnight="dark" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row standard_section   "  style="padding-top: 0px; padding-bottom: 0px; "><div class="row-bg-wrap"> <div class="row-bg   "  style="" data-color_overlay="" data-color_overlay_2="" data-gradient_direction="" data-overlay_strength="0.3" data-enable_gradient="false"></div> </div><div class="col span_12 dark ">
                        <div  class="vc_col-sm-8 wpb_column column_container col no-extra-padding"  data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">

                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <h1 style="text-align: center;">Career Opportunities with Razorclean Lawn care service</h1>
                                        <p style="text-align: center;">Are you looking for landscaping jobs? Olympic Lawn is seeking reliable, professional and all around career-minded team members to join our growing staff of landscapers and landscape professionals.</p>
                                        <h2 style="text-align: center;">PLEASE DO NOT CALL OR EMAIL &#8211; All applicants should apply at our home office.</h2>
                                        <p style="text-align: center;">114 W. Cannon Drive<br />
                                            <strong>Lone Jack, MO 64070</strong></p>
                                        <h3 style="text-align: left;">Currently we are accepting in-person applications to fill the follow landscaping jobs:</h3>
                                        <p>&nbsp;</p>
                                        <ul>
                                            <?php foreach($job_data as $jd){?>
                                            <li style="text-align: left;">
                                                <h3><?php echo $jd['job_title']?></h3>
                                            </li>
                                            <?php }?>
                                        </ul>
                                        <p>&nbsp;</p>
                                        <p style="text-align: center;">Please bring a resume or other relevant info into the office for the chance to join on of Kansas Cities fastest growing Landscape companies.</p>
                                        <p style="text-align: center;">Thank you for your interest in Olympic Lawn &amp; Landscape.</p>

                                    </div>
                                </div>

                            </div> 
                        </div> 

                        <div  class="vc_col-sm-4 wpb_column column_container col boxed padding-2-percent"  data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="img-with-aniamtion-wrap center"><img class="img-with-animation " data-delay="0" height="100%" width="100%" data-animation="fade-in-from-bottom" src="<?php echo base_url() ?>media/landing-pages/lawncare/wp-content/uploads/2015/04/favicon.png" alt="favicon" /></div><div  class="divider"></div>
                                <div class="wpb_widgetised_column wpb_content_element">
                                    <div id="sidebar" class="wpb_wrapper">
                                        <div id="text-8" class="widget widget_text"><h4 class="widget-title">Sign up to receive free landscaping and lawn care tips</h4>			<div class="textwidget"><div role="form" class="wpcf7" id="wpcf7-f3182-p3976-o1" lang="en-US" dir="ltr">
                                                    <div class="screen-reader-response"></div>
                                                    <form action="http://olympiclawn.net/careers/#wpcf7-f3182-p3976-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                                        <div style="display: none;">
                                                            <input type="hidden" name="_wpcf7" value="3182" />
                                                            <input type="hidden" name="_wpcf7_version" value="4.7" />
                                                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f3182-p3976-o1" />
                                                            <input type="hidden" name="_wpnonce" value="1f7aaccbd0" />
                                                        </div>
                                                        <p>First Name <br />
                                                            <span class="wpcf7-form-control-wrap first-name"><input type="text" name="first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </p>
                                                        <p>Last Name <br />
                                                            <span class="wpcf7-form-control-wrap last-name"><input type="text" name="last-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span></p>
                                                        <p>Email Address<br />
                                                            <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </p>
                                                        <p><input type="submit" value="Get FREE Tips" class="wpcf7-form-control wpcf7-submit" /></p>
                                                        <div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div>
                                        </div>
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div></div>
               


            </div><!--/row-->

        </div><!--/container-->

    </div>
    <?php $this->load->view('partials/l_footer') ?>