<!DOCTYPE html>
<html>
<head>
<style>
			#sticky.stick {
				margin-bottom: 0 !important;
				position: fixed;
				bottom: 0;
				background: rgba(0, 0, 0, 0.41);
				z-index: 99999999;
				transition:All 0.998s ease;
				
			}

			#sticky {transition:All 0.998s ease; }
            
			/* carousel */
			.media-carousel
			{
				margin-bottom: 0;
				margin-top: 30px;
			}
			/* Previous button  */
			.media-carousel .carousel-control.left
			{
				left: -12px;
				background-image: none;
				background: none repeat scroll 0 0 #222222;
				border: 4px solid #FFFFFF;
				border-radius: 23px 23px 23px 23px;
				height: 40px;
				width : 40px;
				margin-top: 30px
			}
			/* Next button  */
			.media-carousel .carousel-control.right
			{
				right: -12px !important;
				background-image: none;
				background: none repeat scroll 0 0 #222222;
				border: 4px solid #FFFFFF;
				border-radius: 23px 23px 23px 23px;
				height: 40px;
				width : 40px;
				margin-top: 30px
			}
			/* Changes the position of the indicators */
			.media-carousel .carousel-indicators
			{
				right: 50%;
				top: auto;
				bottom: 0px;
				margin-right: -19px;
			}
			/* Changes the colour of the indicators */
			.media-carousel .carousel-indicators li
			{
				background: #c0c0c0;
			}
			.media-carousel .carousel-indicators .active
			{
				background: #333333;
			}
			.media-carousel img
			{
				width: 52px;
				height: 52px;
			}

			.desktop-logo-slider {
				text-align:center;
			}

			.desktop-logo-slider .top-slider {
				margin: 0px 10px;
				display: inline-block;
			}
			/* End carousel */
			.thumbnail{
				border:none;
			}
			
			#bs-example-navbar-collapse-1 {
					padding: 15px 0px;
				}

				.navbar-brand>img {
					margin-top: 9px;
				}


				.carousel-control .fa {
					line-height: 33px;
					margin-right: 0px;
				}

				.no-overflow {
					overflow: visible;
					padding-top: 6px;
				}

				.top-slider a {background: transparent}

				.targetDiv {
					position: fixed;
					top: 0;
					text-align:center;
					float: left;
					width: 100%;
					height: 100%;
					background: #fff;
					z-index: 999999999;
				}

				.targetDiv .image {
					position: fixed;
					left: 50%;
					top: 50%;
					transform: translate(-50%, -50%); /* Yep! */
					width: 200px;
					height: auto;
				}



				.showSingle {
					cursor:pointer;
				}
				
				.thumbnail {
					outline: 1px dotted rgba(255, 255, 255, 0);
				}

				.thumbnail img {
					outline: 1px dotted rgba(255, 255, 255, 0);
				}

				.img-hover:hover img {
					opacity: 1;
					transform:  rotate(0deg) translate(1px,-7px);
					-webkit-transform:  rotate(0deg) translate(1px,-7px);
					-moz-transform:  rotate(0deg) translate(1px,-7px);
					-o-transform:  rotate(0deg) translate(1px,-7px);
					-ms-transform:  rotate(0deg) translate(1px,-7px);
				}


				.img-hover img {
					transition:All 0.998s ease;
					-webkit-transition:All 0.998s ease;
					-moz-transition:All 0.998s ease;
					-o-transition:All 0.998s ease;
				}

				#sticky.stick {
					margin-bottom: 0 !important;
					position: fixed;
					bottom: 0;
					background: rgba(0, 0, 0, 0.41);
					z-index: 99999999;
					transition:All 0.998s ease;
					
				}

				#sticky {transition:All 0.998s ease; }



				.media-carousel {
					margin-bottom: 0;
					margin-top: 4px;
				}

				.thumbnail {
					margin-bottom: -4px;
				}

</style>

<script src="http://54.209.190.106/Razorclean/media/landing-pages/foundation/assets/plugins/jquery/jquery-1.11.3.min.js"></script>

</head>
<body>
<div style="clear:both"></div>

<!--
<a href="<?php echo base_url()?>painters" target="_blank">
				<div id="div2" class="targetDiv targetDiv1 fadeInUp animated">
				<div class="image"><img alt="" src="<?php echo frontend_asset_url() ?>img/loading/painter.png"/><br><img class="" alt="" src="<?php echo frontend_asset_url() ?>img/loading/ripple.gif"/></div>
				</div>
</a>

<a href="<?php echo base_url()?>lawn-care" target="_blank">
				<div id="div3" class="targetDiv targetDiv1 fadeInUp animated">
				<div class="image"><img alt="" src="<?php echo frontend_asset_url() ?>img/loading/lawn-care.png"/><br><img class="" alt="" src="<?php echo frontend_asset_url() ?>img/loading/ripple.gif"/></div>
				</div>
				</a>
				
<a href="<?php echo base_url()?>building-services" target="_blank">
				<div id="div4" class="targetDiv targetDiv1 fadeInUp animated">
				<div class="image"><img alt="" src="<?php echo frontend_asset_url() ?>img/loading/building-services.png"/><br><img class="" alt="" src="<?php echo frontend_asset_url() ?>img/loading/ripple.gif"/></div>
				</div>
				</a>

<a href="<?php echo base_url()?>pest-control" target="_blank">
				<div id="div5" class="targetDiv targetDiv1 fadeInUp animated">
				<div class="image"><img alt="" src="<?php echo frontend_asset_url() ?>img/loading/pest-control.png"/><br><img class="" alt="" src="<?php echo frontend_asset_url() ?>img/loading/ripple.gif"/></div>
				</div>
				</a>
				
<a href="<?php echo base_url()?>staffing" target="_blank">
				<div id="div6" class="targetDiv targetDiv1 fadeInUp animated">
				<div class="image"><img alt="" src="<?php echo frontend_asset_url() ?>img/loading/staffing.png"/><br><img class="" alt="" src="<?php echo frontend_asset_url() ?>img/loading/ripple.gif"/></div>
				</div>
				</a>
				
<a href="<?php echo base_url()?>handyman" target="_blank">
				 <div id="div7" class="targetDiv targetDiv1 fadeInUp animated">
				<div class="image"><img alt="" src="<?php echo frontend_asset_url() ?>img/loading/handyman.png"/><br><img class="" alt="" src="<?php echo frontend_asset_url() ?>img/loading/ripple.gif"/></div>
				</div>
				</a>
				
<a href="<?php echo base_url()?>housekeepers" target="_blank">
				 <div id="div8" class="targetDiv targetDiv1 fadeInUp animated">
				<div class="image"><img alt="" src="<?php echo frontend_asset_url() ?>img/loading/house-keepers.png"/><br><img class="" alt="" src="<?php echo frontend_asset_url() ?>img/loading/ripple.gif"/></div>
				</div>
				</a>
				
<a href="<?php echo base_url()?>pool-cleaning" target="_blank">
				<div id="div9" class="targetDiv targetDiv1 fadeInUp animated">
				<div class="image"><img alt="" src="<?php echo frontend_asset_url() ?>img/loading/pool-cleaning.png"/><br><img class="" alt="" src="<?php echo frontend_asset_url() ?>img/loading/ripple.gif"/></div>
				</div>
				</a>
				
<a href="<?php echo base_url()?>security" target="_blank">
				<div id="div10" class="targetDiv targetDiv1 fadeInUp animated">
				<div class="image"><img alt="" src="<?php echo frontend_asset_url() ?>img/loading/security.png"/><br><img class="" alt="" src="<?php echo frontend_asset_url() ?>img/loading/ripple.gif"/></div>
				</div>
				</a>

<a href="<?php echo base_url()?>transport" target="_blank">
				<div id="div11" class="targetDiv targetDiv1 fadeInUp animated">
				<div class="image"><img alt="" src="<?php echo frontend_asset_url() ?>img/loading/transport.png"/><br><img class="" alt="" src="<?php echo frontend_asset_url() ?>img/loading/ripple.gif"/></div>
				</div>
				</a>
				
<a href="<?php echo base_url()?>mobile-detail" target="_blank">
			<div id="div12" class="targetDiv targetDiv1 fadeInUp animated">
			<div class="image"><img alt="" src="<?php echo frontend_asset_url() ?>img/loading/mobile-detail.png"/><br><img class="" alt="" src="<?php echo frontend_asset_url() ?>img/loading/ripple.gif"/></div>
			</div>
			</a>	

<a href="<?php echo base_url()?>towing" target="_blank">
				<div id="div13" class="targetDiv targetDiv1 fadeInUp animated">
				<div class="image"><img alt="" src="<?php echo frontend_asset_url() ?>img/loading/Main_Logo.png"/><br><img class="" alt="" src="<?php echo frontend_asset_url() ?>img/loading/ripple.gif"/></div>
				</div>
				</a>			

-->
<div class="container-fluid desktop-only">
    <div class="row">



        <div id="sticky" class="col-md-12 col-xs-11">
            <div class="carousel slide media-carousel" id="media1">
                <div class="carousel-inner no-overflow">
                    <div class="item active">
                        <div class="row desktop-logo-slider">
						
						<div class="item  active top-slider">
				
                                
                                <a target="_parent" href="<?php echo base_url()?>" class="openpopup thumbnail img-hover showSingle" target="1"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Main_Logo.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
    				                       
					 </div>
                     <div class="item  active top-slider">
				
                                
                                <a target="_parent" href="<?php echo base_url()?>foundation" class="openpopup thumbnail img-hover showSingle" target="1"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Foundation.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
    				                       
					 </div>

                            <div class="item top-slider">
				
                                <a target="_parent" href="<?php echo base_url()?>painters" class="thumbnail img-hover showSingle" target="2"><img src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Painters.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body" /></a>
                                
				
                            </div>

                            <div class="item top-slider">
				
                                <a target="_parent" href="<?php echo base_url()?>lawncare" class="thumbnail img-hover showSingle" target="3"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Lawn Care.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                                
				
                            </div>

                            <div class="item top-slider">
				
                                <a target="_parent" href="<?php echo base_url()?>building-services" class="thumbnail img-hover showSingle" target="4"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Building.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            
				</div>

                            <div class="item top-slider">
				
                                <a target="_parent" href="<?php echo base_url()?>pest-control" class="thumbnail img-hover showSingle" target="5"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Pest.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            
			    </div>

                            <div class="item top-slider">
				
                                <a target="_parent" href="<?php echo base_url()?>staffing" class="thumbnail img-hover  showSingle" target="6"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Staffing.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            
			</div>


                            <div class="item top-slider">
				
                                <a target="_parent" href="<?php echo base_url()?>handyman" class="thumbnail img-hover  showSingle" target="7"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/handyman.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                           
			</div>

                        <div class="item top-slider">
				
                                <a target="_parent" href="<?php echo base_url()?>housekeepers" class="thumbnail img-hover  showSingle" target="8"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/House Keepers.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                           
			</div>

                        <div class="item top-slider">
				
                                <a target="_parent" href="<?php echo base_url()?>pool-cleaning" class="thumbnail img-hover  showSingle" target="9"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/pool-cleaning.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            
			</div>

                        <div class="item top-slider">
				
                                <a target="_parent" href="<?php echo base_url()?>security" class="thumbnail img-hover  showSingle" target="10"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/security.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            
			</div>
			
			<div class="item top-slider">
				
                            <a target="_parent" href="<?php echo base_url()?>transport" class="thumbnail img-hover  showSingle" target="11"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/transport.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            
		   </div>

                  <div class="item top-slider">
			
                            <a target="_parent" href="<?php echo base_url()?>mobile-detail" class="thumbnail img-hover  showSingle" target="12"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/mobile-detail.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            
		  </div>

                  <div class="item top-slider">
				
                            <a target="_parent" href="<?php echo base_url()?>towing" class="thumbnail img-hover  showSingle" target="13"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Towing.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            
		   </div>


                        </div>
                    </div>
                    

                </div>
                <!--a data-slide="prev" href="#media1" class="left carousel-control"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
                <a data-slide="next" href="#media1" class="right carousel-control"><i class="fa fa-caret-right" aria-hidden="true"></i></a-->
            </div>
        </div>
    </div>
</div>
<!--ICon Slider End-->

<script type="text/javascript">//<![CDATA[
$(window).load(function(){
	

        $('.targetDiv').hide();
		
        $('.showSingle').click(function() {
	      $('.targetDiv').hide();
		  
              $('#div'+$(this).attr('target')).show();
			  
			  if($(".foot").css('bottom') == '0px'){
				  $(".foot").animate({bottom:'300px'},1000);
			  }
			  else
			  {
				  $(".foot").animate({bottom:'0px'},1000);
			  }
			  
        });
	$('#about, header, #Footer, #Footer, #customHeading, #customSocial, #customAreas, #testimonials, #customTabs, #qualities, #portfolio, .overlay-div').mouseover(function(){
		//$('.targetDiv').hide();
	});

});//]]> 
</script>

<script type="text/javascript">//<![CDATA[

function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('#sticky').addClass('stick');
        $('#sticky-anchor').height($('#sticky').outerHeight());
    } else {
        $('#sticky').removeClass('stick');
        $('#sticky-anchor').height(0);
    }
}

$(function() {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});

var dir = 1;
var MIN_TOP = 200;
var MAX_TOP = 350;

function autoscroll() {
    var window_top = $(window).scrollTop() + dir;
    if (window_top >= MAX_TOP) {
        window_top = MAX_TOP;
        dir = -1;
    } else if (window_top <= MIN_TOP) {
        window_top = MIN_TOP;
        dir = 1;
    }
    $(window).scrollTop(window_top);
    window.setTimeout(autoscroll, 100);
}

//]]> 

</script>



<script type="text/javascript">//<![CDATA[
$(function(){
$('.overlay-div').hide();	
$('.showSingle').on('click', function(){
  $('.wrap').toggleClass('active');
  $('.overlay-div').toggle();
  var url = $(this).parent().attr("href");
  setTimeout(function () {
            $('.overlay-div, .wrap').hide();
			
        }, 4000);
		
		setTimeout(function () {
            
			//alert(url);
	    window.location = url;
        }, 3000);
   //alert(url);
   //window.location = $(this).parent().attr("href");
   //window.open($(this).parent().attr("href"),'_blank');
  return false;
});

//$('.overlay-div').on('click', function(){
	//$('.overlay-div, .wrap').toggle();
//});



});//]]> 
</script>
</body>
</html>