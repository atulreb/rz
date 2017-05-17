<style>
#testimonials  .Icon_Service img {width:80%}
</style>
<!--Banner-Start-->
<header class="head-bottom-border-style">
    <div class="header-content">
        <div class="header-content-inner innerpage-heading text-left">
            <h2 id="homeHeading">Testimonials</h2>
            <hr>
            <p>RazorClean, Inc. A Company Built On Integrity, Quality and Trust.</p>
            <!--<a href="#about" class="btn btn-primary btn-xl page-scroll">Enter Site</a>-->

        </div>
    </div>
</header>

<section class="testimonial_slider" id="testimonials_pg">
    <div class=" container-fluid">
        <div class="row">
            <div class="testiMonial slider">


                <?php foreach ($testimonial_data as $testimonial_data) { ?>
                    <div class="testimonial1">

                        <div class="bg_img_testmonials">
				<?php if($testimonial_data['client_image']==''){
					echo '<img src='.base_url().'uploads/testimonial_users/default_testimonial.png />';
				} else {?>
                            <img style="height:382px" src="<?php echo base_url() . "uploads/testimonial_users/" . $testimonial_data['client_image'] ?>"> 
				<?php }?>
                        </div>


                        <div class="testimonialContent">

                            <p>

                                <?php echo substr($testimonial_data['description'], '0', '250'); ?>

                            </p>

                            <p class="align_right">

                                - <?php echo $testimonial_data['client_name'] ?>

                            </p>

                        </div>


                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>





<!--Two Tabs section Start-->
<!--Contact form and testimonials section start-->
<section class="bg_color_testimonial" id="testimonials">
    <div class=" container-fluid">
        <div class="row">

            <!--Contact form End-->
            <div class="col-lg-8 col-sm-12 bgcolor_service_select" style="padding-bottom:46px">


                <h2 class="section-heading">What <span>Service</span> are you interested in?</h2>

                <div class="Icon_Service">
		
                    <div class="col-md-2 col-sm-6 pest_control text-center">
					<a href="<?php echo base_url() ?>testimonials-detail/Pest Control">
                        <img src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Pest.png">
                        <p>Pest Control</p>
						</a>
                    </div>

                    <div class="col-md-2 col-sm-6 lawn_care text-center">
					<a href="<?php echo base_url() ?>testimonials-detail/Lawn care">
                        <img src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Lawn Care.png">
                        <p>Lawn Care</p>
						</a>
                    </div>

                    <div class="col-md-2 col-sm-6 bulding_services text-center">
					<a href="<?php echo base_url() ?>testimonials-detail/Building Services">
                        <img src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Building.png">
                        <p>Building Services</p>
						</a>
                    </div>
                    <div class="col-md-2 col-sm-6 cleaning_services text-center">
					<a href="<?php echo base_url() ?>testimonials-detail/Pool Cleaning">
                        <img src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/pool-cleaning.png">
                        <p>Pool Cleaning</p>
						</a>
                    </div>

                    <div class="col-md-2 col-sm-6 pest_control text-center">
					<a href="<?php echo base_url() ?>testimonials-detail/Towing">
                        <img src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Towing.png">
                        <p>Towing</p>
						</a>
                    </div>

                    <div class="col-md-2 col-sm-6 lawn_care text-center">
					<a href="<?php echo base_url() ?>testimonials-detail/Foundation">
                        <img src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Foundation.png">
                        <p>Foundation</p>
						</a>
                    </div>

			<div style="clear:both"></div>

                    <div class="col-md-2 col-sm-6 bulding_services text-center">
					<a href="<?php echo base_url() ?>testimonials-detail/Security">
                        <img src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/security.png">
                        <p>Security</p>
						</a>
                    </div>

                    <div class="col-md-2 col-sm-6 cleaning_services text-center">
					<a href="<?php echo base_url() ?>testimonials-detail/Painters">
                        <img src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Painters.png">
                        <p>Painter</p>
						</a>
                    </div>
			
		    <div class="col-md-2 col-sm-6 cleaning_services text-center">
			<a href="<?php echo base_url() ?>testimonials-detail/Staffing">
                        <img src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Staffing.png">
                        <p>Staffing</p>
						</a>
                    </div>

		   <div class="col-md-2 col-sm-6 cleaning_services text-center">
		   <a href="<?php echo base_url() ?>testimonials-detail/Handyman">
                        <img src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/handyman.png">
                        <p>Handyman</p>
						</a>
                    </div>

		   <div class="col-md-2 col-sm-6 cleaning_services text-center">
		   <a href="<?php echo base_url() ?>testimonials-detail/Transport">
                        <img src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/transport.png">
                        <p>Movers and Transport</p>
						</a>
                    </div>

		    <div class="col-md-2 col-sm-6 cleaning_services text-center">
			<a href="<?php echo base_url() ?>testimonials-detail/Housekeepers">
                        <img src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/House Keepers.png">
                        <p>House Keepers</p>
						</a>
                    </div>

			<div style="clear:both"></div>

		    <div class="col-md-2 col-sm-6 cleaning_services text-center">
			<a href="<?php echo base_url() ?>testimonials-detail/Mobile Detail">
                        <img src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/mobile-detail.png">
                        <p>Mobile Detail</p>
						</a>
                    </div>

                </div>


            </div>



            <div class="col-lg-4 col-sm-12 bg_color_form">
                <h2 class="section-heading"><span>Tell us</span> how we are doing</h2>
                <form novalidate class="form-horizontal" id="submit_testimonial">
                    <span id="testi_status"></span>
                    <fieldset>
                        
                        <!-- Text input-->
                        <div class="item form-group">
                            <label class="col-md-1 control-label" for="namec"></label>
                            <div class="col-md-10">
                                <input id="namec" name="client_name" type="text" placeholder="Name " class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="item  form-group">
                            <label class="col-md-1 control-label" for="servicec"></label>
                            <div class="col-md-10">
                                <select name="service" required="required"  class="form-control input-md" autocomplete="off">
                                    <option value="">Select</option>
                                    <option value="Foundation">Foundation</option>
                                    <option value="Painters">Painters</option>
                                    <option value="Lawn Care">Lawn Care</option>
                                    <option value="Building Services">Building Services</option>
                                    <option value="Pest Control">Pest Control</option>
                                    <option value="Staffing">Staffing</option>
                                    <option value="Housekeepers">Housekeepers</option>
                                    <option value="Towing">Towing</option>
                                    <option value="Handyman">Handyman</option>
                                    <option value="Mobile Detail">Mobile Detail</option>
                                    <option value="Moving and Transport">Moving and Transport</option>
                                    <option value="Pool Cleaning">Pool Cleaning</option>
                                    <option value="Security">Security</option>
                                </select>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="item form-group">
                            <label class="col-md-1 control-label" for="comentc"></label>
                            <div class="col-md-10">
                                <textarea required="required" class="form-control" placeholder="Comment" id="comentc" name="comment"></textarea>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">

                            <div class="button_Submit">
                                <button>Submit</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>



        </div>
    </div>
</section>
<!--Contact form and testimonials section start-->