<?php $this-> load->view('partials/l_header')?>



        <div class="body_width site_middle_content"><!-- post title holder -->


<div class="page_title_holder container-fluid">
    <div class="container">
        <div class="page_info">
            <h1><?php echo $job_details[0]['job_title']?></h1>
            
        </div>
      
    </div>
</div>
<!-- end post title holder -->
<section class="main_content">
    <!-- start single portfolio container -->
            <div class="container new_section">
                            <div id="post-24119" class="project_post row-fluid post-24119 project type-project status-publish has-post-thumbnail hentry tagportfolio-job-opportunities">
                    <div class="span8 portfolio_banner blog_main_content  pull-right">
        		<header class="content_banner blog_post_banner clearfix">
		<a href="http://www.pscstaffing.com/wp-content/uploads/crown-image.jpg" class="prettyPhoto" rel="prettyPhoto">

            <img src="http://www.pscstaffing.com/wp-content/uploads/crown-image.jpg" class="featured_image">

        </a>
		</header>
		                    </div>
                    <div class="span4 portfolio_details_content side_content  pull-left">
                        <div class="new_content">
                            <div class="portfolio_section_title"><h4 class="page-header"><span class="page_header_title">Project Overview</span>


                                </h4></div>
                            <div class="portfolio_section_title">
       <?php echo $job_details[0]['long_desc']?> </div>
                        </div>


                                                            

            
    
                    </div>
                </div>
    


    </div>
            <div class="container-fluid another_projects new_section"><div class="container">
                <div id="anotherprojects-24119" class="row-fluid">
                    <div class="span12">

        
	 	    <div class="row-fluid">
        		<div class="span12">
		<div class="row-fluid">
		<div class="span12">
            <div class="portfolio_section_title"><h3 class="page-header">
						<span class="page_header_title">Other Projects</span>
						<span id="right_car_arrow1anotherprojects-24119" class="cars_arrow_control right_car_arrow" style="display: block;"><i class="icon-angle-right"></i></span><span id="left_car_arrow1anotherprojects-24119" class="cars_arrow_control left_car_arrow" style="display: block;"><i class="icon-angle-left"></i></span></h3></div>
            <div class="portfolio_section_title">
            <p></p>
            </div>
        </div>
		</div>

		<div class="row-fluid">
        <div class="portfolio_carousel span12">
            <div class="carousel">
                <div class="slides row-fluid list_carousel responsive clearfix">
                <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 954px; height: 300px; margin: 0px; overflow: hidden;"><div class="portfolio_cars" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 6678px; height: 300px;">
                                       
                                       
                                       
                                        
                                       
                                       <?php foreach($slider_jobs as $sj){?>
                                        <div class="the_portfolio_list_li_div" id="post-24048" style="width: 302px;">
                    <div class="portfolio_item">
                            <a href="http://www.pscstaffing.com/wp-content/uploads/ForkLift-Operator.jpg" class="prettyPhoto slideshow_24048" rel="prettyPhoto"></a>
		                        <div class="portfolio_thumbnail">
                            

            <img width="520" height="337" src="http://www.pscstaffing.com/wp-content/uploads/ForkLift-Operator-520x337.jpg" class="attachment-portfolio size-portfolio wp-post-image" alt="">
		                                <div class="portfolio_overlay">
                                </div>
                                                                <div class="center-bar">
                                    <a class="icon-link" href="<?php echo base_url()."staffing/job-details/".$sj['id']?>"></a>
                                </div>
                                
                        </div>
                        <div class="portfolio_info">
                            <a href="<?php echo base_url()."staffing/job-details/".$sj['id']?>"><h5><?php echo $sj['job_title']?></h5></a>
                            <span class="portfolio_category"><a href="javascript:;" rel="tag"><?php echo $sj['service_category']?></a></span>
                        </div>

                    </div>
                    </div>
									   <?php }?>
                                    </div></div>
                </div>
            </div>
        </div>
		</div>
		</div>
		        <script type="text/javascript" language="javascript">
			jQuery(document).ready(function() {
        if (jQuery('.widgets_nav .portfolio_carousel').length) {
          var carpar = jQuery('.portfolio_carousel').parents('.widgets_nav');
          carpar.addClass('hidden_carousel');
          carpar.show();
          //jQuery('body').append('<style>.widgets_nav .row-fluid::before, .row-fluid::after {display: table;content: "";line-height: 0;}</style>')
        }
//
				//	Responsive layout, resizing the items

        jQuery('#anotherprojects-24119 .portfolio_cars').carouFredSel({
					responsive: true,
					prev: '#anotherprojects-24119 #left_car_arrow1anotherprojects-24119',
					next: '#anotherprojects-24119 #right_car_arrow1anotherprojects-24119',
					auto: false,
										swipe: {
						onTouch: true,
					},
					items: {
						visible: {
							min: 1,
							max: 4						}
					}
				});


        jQuery('#anotherprojects-24119 .portfolio_cars').imagesLoaded( function () {
				jQuery('#anotherprojects-24119 .portfolio_cars').carouFredSel({
					responsive: true,
					prev: '#anotherprojects-24119 #left_car_arrow1anotherprojects-24119',
					next: '#anotherprojects-24119 #right_car_arrow1anotherprojects-24119',
					auto: false,
										swipe: {
						onTouch: true,
					},
					items: {
						visible: {
							min: 1,
							max: 4						}
					}
				});

			}); });

//			var owl = jQuery("#anotherprojects-24119 .portfolio_cars");
//
//			   owl.owlCarousel({
//			       items : 4, //10 items above 1000px browser width
//			       itemsDesktop : [1000,3], //5 items between 1000px and 901px
//			       itemsDesktopSmall : [900,3], // betweem 900px and 601px
//			       itemsTablet: [600,2], //2 items between 600 and 0
//			       itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
//			       pagination : false,
//			       scrollPerPage: true,
//			       slideSpeed: 1000,
//
//			   });
//
//			   // Custom Navigation Events
//			   jQuery("#anotherprojects-24119 #right_car_arrow1").click(function(){
//			     owl.trigger('owl.next');
//			   })
//			   jQuery("#anotherprojects-24119 #left_car_arrow1").click(function(){
//			     owl.trigger('owl.prev');
//			   })
//
//			});
		</script>
    </div>
	
                    </div>
                </div>
            </div></div>
    

<!-- end single portfolio container -->


</section><!-- #content -->

</div> <!-- end body width from header -->
<?php $this-> load->view('partials/l_footer')?>
