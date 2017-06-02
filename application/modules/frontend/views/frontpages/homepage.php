<script src="http://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>
<link href='http://fonts.googleapis.com/css?family=Buenard:700' rel='stylesheet' type='text/css'>
<style>
    .job_list_icon {
        float: left;
        width: 50px;
        height: 50px;
        background: #bf1e2d;
        padding: 0;
		text-align: center;
        font-size: 34px;
        color: #fff;
    }
	#footer-menu {
		/*margin-bottom: 81px;*/
	}
	.scroll-listing {
		position:absolute;
		bottom:80px;
	}
	.tabright {
		height: 530px;
		
	}
	.top-slider a {background: transparent}
	

    #mCSB_2_container .active {    
		background: #bf1e2d;
		border: 2px solid #bf1e2d;
		color: #fff;
	}
	
	#quality, #service, #trust {
		margin: 0 auto;
		width: 75%;
		/*background: rgba(244, 67, 54, 0.82);*/
		padding: 10px 20px;
		border-radius: 12px;
		color: #ab2430;
		text-align:center;
	}
</style>

<style type="text/css" data-type="vc_custom-css">

    .h31 {
        font-size:50px !important;
        display: inline-block;
        padding: 10px;
        font-weight:bold !important;
        /*background: #B9121B;*/
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .full-screen1 {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    #myDiv img {
        position:absolute;
        color:#fff;
        top:50%;
        left:50%;
        padding:15px;
        -ms-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
    }
    #myDiv p {
        position:absolute;
        color:#000;
        top:68%;
        left:50%;
        padding:15px;
        -ms-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
    }
    
    .carousel-caption {top :40% !important}
</style>
<div id="myDiv" style="position: fixed;
     width: 100%;
     height: 100%;
     background: #fff;
     z-index: 999999;
     top: 0;">

    <img id="myImage" src="<?php echo frontend_asset_url() ?>img/loading/painter.png"><br><br><br>
    <p>RazorClean, The Circle Of Trust. Save Money, Live RazorClean</p><br>
    <p style="margin-top:120px !important;"><img class="" style="position:relative;" alt="" src="<?php echo frontend_asset_url() ?>img/loading/ripple.gif"/></p>
</div>
<!--Banner-Start-->
<div id="sticky-anchor"></div>
<header class='content-section video-section'>
    <!-- div class="header-content">
        <div class="header-content-inner">
            <h2 id="homeHeading">Welcome to Razor Clean, Inc.</h2>
            <hr>
            <p>Razor Clean, Inc. A Company Built On Integrity, Quality and Trust.</p>
            <a href="#about" class="btn btn-primary btn-xl page-scroll">Enter Site</a>
            <span class="scroll-btn" style="padding-top:60px;">
                <a href="#">
                    <span class="mouse">
                        <span>
                        </span>
                    </span>
                </a>
            </span>
        </div>
    </div -->
	
	
	
	 <!--div id="sliderFrame">
        <div id="slider">
           
           
            <a class="video" href="https://www.youtube.com/watch?v=fdJc1_IBKJA">
                <b data-src="<?php echo frontend_asset_url() ?>images/image-slider-3.jpg">Image Slider</b>
            </a>
			
			 <a class="video" href="https://www.youtube.com/watch?v=fdJc1_IBKJA">
                <b data-src="<?php echo frontend_asset_url() ?>images/image-slider-3.jpg">Image Slider</b>
            </a>
           
           
           
        </div>
    </div-->

	
	
  <!--div class="pattern-overlay ">
		<a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=fdJc1_IBKJA',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:1}">bg</a>
		<div class="container">
			  <div class="row">
				<div class="col-lg-12">
					<h1>Welcome to RazorClean, Inc.</h1>  <br>
				<h3>RazorClean, Inc. A Company Built On Integrity, Quality and Trust.</h3>
			   </div>
			  </div>
		</div>
  </div-->
   <div id="mycarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mycarousel" data-slide-to="1"></li>
            <li data-target="#mycarousel" data-slide-to="2"></li>
            <li data-target="#mycarousel" data-slide-to="3"></li>
            <li data-target="#mycarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item">
                <img src="<?php echo frontend_asset_url()?>home_slider/1.jpg" data-color="lightblue" alt="First Image">
                <div class="carousel-caption">
                    <h3 class="h31">RazorClean Building Services</h3>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo frontend_asset_url()?>home_slider/3.jpg" data-color="firebrick" alt="Second Image">
                <div class="carousel-caption">
                    <h3 class="h31">RazorClean Housekeepers</h3>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo frontend_asset_url()?>home_slider/2.jpg" data-color="firebrick" alt="Second Image">
                <div class="carousel-caption">
                    <h3 class="h31">RazorClean Mobile Detail</h3>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo frontend_asset_url()?>home_slider/10.jpg" data-color="firebrick" alt="Second Image">
                <div class="carousel-caption">
                    <h3 class="h31">RazorClean Termite & Pest Control</h3>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo frontend_asset_url()?>home_slider/4.jpg" data-color="firebrick" alt="Second Image">
                <div class="carousel-caption">
                    <h3 class="h31">RazorClean Lawn Care</h3>
                </div>
            </div>
             <div class="item">
                <img src="<?php echo frontend_asset_url()?>home_slider/14.jpg" data-color="firebrick" alt="Second Image">
                <div class="carousel-caption">
                    <h3 class="h31">RazorClean Towing</h3>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo frontend_asset_url()?>home_slider/5.jpg" data-color="firebrick" alt="Second Image">
                <div class="carousel-caption">
                    <h3 class="h31">RazorClean Painters</h3>
                </div>
            </div>
             <div class="item">
                <img src="<?php echo frontend_asset_url()?>home_slider/7.jpg" data-color="firebrick" alt="Second Image">
                <div class="carousel-caption">
                    <h3 class="h31">RazorClean Handyman</h3>
                </div>
            </div>
             <div class="item">
                <img src="<?php echo frontend_asset_url()?>home_slider/8.jpg" data-color="firebrick" alt="Second Image">
                <div class="carousel-caption">
                    <h3 class="h31">RazorClean Security Services</h3>
                </div>
            </div>
             <div class="item">
                <img src="<?php echo frontend_asset_url()?>home_slider/11.jpg" data-color="firebrick" alt="Second Image">
                <div class="carousel-caption">
                    <h3 class="h31">RazorClean Pool Cleaning</h3>
                </div>
            </div>
             <div class="item">
                <img src="<?php echo frontend_asset_url()?>home_slider/13.jpg" data-color="firebrick" alt="Second Image">
                <div class="carousel-caption">
                    <h3 class="h31">RazorClean Movers & Transport</h3>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo frontend_asset_url()?>home_slider/6.jpg" data-color="firebrick" alt="Second Image">
                <div class="carousel-caption">
                    <h3 class="h31">RazorClean Foundation</h3>
                </div>
            </div>
           
           
            <div class="item">
                <img src="<?php echo frontend_asset_url()?>home_slider/9.jpg" data-color="firebrick" alt="Second Image">
                <div class="carousel-caption">
                    <h3 class="h31">RazorClean Staffing</h3>
                </div>
            </div>
            
           
            <div class="item">
                <img src="<?php echo frontend_asset_url()?>home_slider/12.jpg" data-color="firebrick" alt="Second Image">
                <div class="carousel-caption">
                    <h3 class="h31">RazorClean Inc.</h3>
                </div>
            </div>
           
           
            
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

  
</header>
<!--Banner-End-->
<!--ICon DesktopSlider Start-->
<!--a href="<?php echo base_url()?>foundation" target="_blank">
	<div id="div1" class="targetDiv targetDiv1 fadeInUp animated" >
		<div class="image">
		<img class="" alt="" src="<?php echo frontend_asset_url() ?>img/loading/foundation.png"/><br>
		<img class="" alt="" src="<?php echo frontend_asset_url() ?>img/loading/ripple.gif"/>		
		</div>
	</div>
</a>

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


<div class="container-fluid desktop-only">
    <div class="row">



        <div id="sticky" class="col-md-12 col-xs-11">
            <div class="carousel slide media-carousel" id="media1">
                <div class="carousel-inner no-overflow">
                    <div class="item active">
                        <div class="row desktop-logo-slider">
                     <div class="item  active top-slider">
				
                                
                                <a onclick='window.location.href="<?php echo base_url()?>foundation";return false;' class="openpopup thumbnail img-hover showSingle" target="1"><img alt="" src=<?php echo frontend_asset_url() ?>img/slider-icons/dark/Foundation.png data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
    				                       
					 </div>

                            <div class="item top-slider">
				
                                <a onclick='window.location.href="<?php echo base_url()?>painters";return false;' class="thumbnail img-hover showSingle" target="2"><img src=<?php echo frontend_asset_url() ?>img/slider-icons/dark/Painters.png data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body" /></a>
                                
				
                            </div>

                            <div class="item top-slider">
				
                                <a onclick='window.location.href="<?php echo base_url()?>lawncare";return false;' class="thumbnail img-hover showSingle" target="3"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Lawn Care.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                                
				
                            </div>

                            <div class="item top-slider">
				
                                <a onclick='window.location.href="<?php echo base_url()?>building-services";return false;' class="thumbnail img-hover showSingle" target="4"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Building.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            
				</div>

                            <div class="item top-slider">
				
                                <a onclick='window.location.href="<?php echo base_url()?>pest-control";return false;' class="thumbnail img-hover showSingle" target="5"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Pest.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            
			    </div>

                            <div class="item top-slider">
				
                                <a onclick='window.location.href="<?php echo base_url()?>staffing";return false;' class="thumbnail img-hover  showSingle" target="6"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Staffing.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            
			</div>


                            <div class="item top-slider">
				
                                <a onclick='window.location.href="<?php echo base_url()?>handyman";return false;' class="thumbnail img-hover  showSingle" target="7"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/handyman.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                           
			</div>

                        <div class="item top-slider">
				
                                <a onclick='window.location.href="<?php echo base_url()?>housekeepers";return false;' class="thumbnail img-hover  showSingle" target="8"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/House Keepers.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                           
			</div>

                        <div class="item top-slider">
				
                                <a onclick='window.location.href="<?php echo base_url()?>pool-cleaning";return false;' class="thumbnail img-hover  showSingle" target="9"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/pool-cleaning.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            
			</div>

                        <div class="item top-slider">
				
                                <a onclick='window.location.href="<?php echo base_url()?>security";return false;' class="thumbnail img-hover  showSingle" target="10"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/security.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            
			</div>
			
			<div class="item top-slider">
				
                            <a onclick='window.location.href="<?php echo base_url()?>transport";return false;' class="thumbnail img-hover  showSingle" target="11"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/transport.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            
		   </div>

                  <div class="item top-slider">
			
                            <a onclick='window.location.href="<?php echo base_url()?>mobile-detail";return false;' class="thumbnail img-hover  showSingle" target="12"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/mobile-detail.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            
		  </div>

                  <div class="item top-slider">
				
                            <a onclick='window.location.href="<?php echo base_url()?>towing";return false;' class="thumbnail img-hover  showSingle" target="13"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Towing.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            
		   </div>


                        </div>
                    </div>
                    

                </div>
                <!--a data-slide="prev" href="#media1" class="left carousel-control"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
                <a data-slide="next" href="#media1" class="right carousel-control"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div-->
<!--ICon Slider End-->
<!--ICon Mobile Slider Start-->
<div class="container mobile-only">
    <div class='row'>
        <div class='col-md-8'>
            <div class="carousel slide media-carousel" id="media" >
                <div class="carousel-inner">
                    <div class="item  active"  >
                        <div class="row" >
                            <div class="col-md-4 top-slider" style = "width:100%">
                                <a class="thumbnail img-hover  showSingle" ><img alt="" src=<?php echo frontend_asset_url() ?>img/slider-icons/dark/Foundation.png data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-4 top-slider"  style = "width:100%">
                                <a class="thumbnail img-hover "><img  src=<?php echo frontend_asset_url() ?>img/slider-icons/dark/Painters.png data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">

                            <div class="col-md-4 top-slider"  style = "width:100%">
                                <a class="thumbnail img-hover  showSingle" href="#"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Lawn Care.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">

                            <div class="col-md-4 top-slider"  style = "width:100%">
                                <a class="thumbnail img-hover  showSingle" href="#"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Building.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">

                            <div class="col-md-4 top-slider"  style = "width:100%">
                                <a class="thumbnail img-hover  showSingle" href="#"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Pest.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">

                            <div class="col-md-4 top-slider"  style = "width:100%">
                                <a class="thumbnail img-hover  showSingle" href="#"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Staffing.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">

                            <div class="col-md-4 top-slider"  style = "width:100%">
                                <a class="thumbnail img-hover  showSingle" href="#"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Towing.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <a data-slide="prev" href="#media" class="left carousel-control"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
                <a data-slide="next" href="#media" class="right carousel-control"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
<!--ICon Mobile Slider End-->
<!--icon tablet slider start-->
<div class="container tablet-only">
    <div class='row'>
        <div class='col-md-8'>
            <div class="carousel slide media-carousel" id="media2">
                <div class="carousel-inner">
                    <div class="item  active">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <a class="thumbnail img-hover  showSingle" ><img alt="" src=<?php echo frontend_asset_url() ?>img/slider-icons/dark/Foundation.png data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <a class="thumbnail img-hover "><img src=<?php echo frontend_asset_url() ?>img/slider-icons/dark/Painters.png data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body" /></a>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <a class="thumbnail img-hover  showSingle" href="#"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Lawn Care.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <a class="thumbnail img-hover  showSingle" href="#"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Building.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <a class="thumbnail img-hover  showSingle" href="#"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Pest.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <a class="thumbnail img-hover  showSingle" href="#"><img alt="" src="<?php echo frontend_asset_url() ?>img/slider-icons/dark/Staffing.png" data-toggle="popover" data-trigger="hover" tabindex="1" data-placement="top" data-container="body"></a>
                            </div>
                        </div>
                    </div>

                </div>
                <a data-slide="prev" href="#media2" class="left carousel-control"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
                <a data-slide="next" href="#media2" class="right carousel-control"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
<!---icon-tablet slider end--->




<!--Customer Satisfaction Section Start-->
<section id="qualities" style="background-color:#f3f3f4;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center ">

                <h2 class="section-heading partner-heading cs-heading" style="color:#222;"><span>&nbsp; Customer <strong style="color:#ed1c24;">Satisfaction</strong> Company Built On... &nbsp; </span></h2>
                <hr class="primary" style="display:none;">
            </div>
            <div class="col-md-4 col-sm-4 text-center test mout">
                <div class="qualitiesIcon1" data-toggle="tooltip"  onmouseover="showthreeIconContents('quality')">

                </div>
                <h3 style="font-weight:800;">Quality</h3>
				
			</div>
            <div class="col-md-4 col-sm-4 text-center mout" data-toggle="tooltip" onmouseover="showthreeIconContents('service')" >
                <div class="qualitiesIcon2">
                </div>
                <h3 style="font-weight:800;">Service</h3>
				</div>
            <div class="col-md-4 col-sm-4 text-center mout" onmouseover="showthreeIconContents('trust')" data-toggle="tooltip" >
                <div class="qualitiesIcon3">
                </div>
                <h3 style="font-weight:800;">Trust</h3>
				</div>
        </div>
		<div id="quality" style="display:none">
				<p><b>Stewardship</b><br>RazorClean is fulfilling our obligation of building a better, stronger and more durable company for the future. Protecting the RazorClean brands while providing quality, service and trust to our clients. Always developing our people and helping improve communities and the global environment.</p>
				<p><b>Best People</b><br>we believe in attracting, developing and retaining the best talent for our brands. We believe in always challenging our people, demonstrating a “can-do” attitude and fostering a collaborative and mutually supportive environment. </p>
				</div>
				<div id="service" style="display:none">
				<p><b>Customer/Member Value Creation</b><br>RazorClean focus on building relationships by being responsive and relevant by consistently delivering value to our customers. </p>
				<p><b>One Global Network</b><br>we believe in leveraging the power of insight, relationship collaboration and learning to deliver exceptional customer service to our clients. </p>
            
				</div>
				<div id="trust" style="display:none">
				<p><b>Respect for the Individual</b><br>RazorClean value diversity and unique contributions, fostering a trusting, open and inclusive environment and treating each person in a manner that reflects RazorClean values.</p>
				<p><b>Integrity</b><br>we strive to always be ethically unyielding, honest and inspiring trust by saying and doing right by our fellow man/women.</p>
            
				</div>
    </div>
</section>
<!--Customer Satisfaction Section End-->

<!--Two Tabs section Start-->
<section id="customTabs" style="padding:100px 0 15px 0 ">
    <div class="container-fluid" style="padding-right: 0px;">
        <div class="row" style=" margin-right:0px">
            <div class="col-lg-5" style="margin-left:3%; margin-right:5%;">

                <div class="tabLeft">
                    <div class=" tabIcon">
                        <img id="dynicon" src="<?php echo frontend_asset_url()?>img/loading/Main_Logo.png" alt="razorclean" height="60" width="60">
                    </div>
                    <h3  class="demo-text" style="padding-left:10%; color:#ed1c24;"><div id="dyn_job_title"><?php echo $job_data[0]['job_title'] ?></div> <small> Job Description</small></h3>
                    <hr>
                    <div class="tab-view-text ScrollStyle1 mCustomScrollbar" data-mcs-theme="dark">
                        <h4>Description</h4>
                        <p><div id="dyn_job_short_desc"><?php echo $job_data[0]['short_desc'] ?></div></p>
                        <hr>
                        <h4>Requirements</h4>
                        <div id="dyn_job_long_desc"><?php echo $job_data[0]['long_desc'] ?></div>

                    </div>
                    <button type="button" data-toggle="modal" data-target="#jobApplyModal" class="btn btn-primary apply-btn">Apply</button>
                </div>


            </div>
            <div style="position:relative"><div class="scroll-listing"></div></div>
            <div class="tabright col-lg-6" style="padding-bottom: 40px;">
                <div class="customtab mobile-right-tab">

                    <h2 class="mobile-heading-h2" style="text-align:center; padding-top:5%; color:#ed1c24;">&nbsp;Job Listing&nbsp;</h2>
                    <div class="" >
					
					
					<div class="col-lg-4" style="padding-left:10%;padding-right: 0;">
					<div class="button-list text-center ScrollStyle mCustomScrollbar" data-mcs-theme="dark">
					
			   <a class="list-btn" id="3960"  onclick="getStateJobs('3960')" href="javascript:;">Oklahoma</a>
               <a class="list-btn" id="3970" onclick="getStateJobs('3970')" href="javascript:;">Texas</a>
               <a class="list-btn" id="3922" onclick="getStateJobs('3922')" href="javascript:;">Arkansas</a>
               <a class="list-btn" id="3939" onclick="getStateJobs('3939')" href="javascript:;">Louisiana</a>
               <a class="list-btn" id="3947" onclick="getStateJobs('3947')" href="javascript:;">Mississippi</a>
               <a class="list-btn" id="3919" onclick="getStateJobs('3919')" href="javascript:;">Alabama</a>
               <a class="list-btn" id="3974" onclick="getStateJobs('3974')" href="javascript:;">Virginia</a>
        
			   <a class="list-btn" id="3930" onclick="getStateJobs('3930')" href="javascript:;">Florida</a>
               <a class="list-btn" id="3931" onclick="getStateJobs('3931')" href="javascript:;">Georgia</a>
               <a class="list-btn" id="3938" onclick="getStateJobs('3938')" href="javascript:;">Kentucky</a>
               <a class="list-btn" id="3957" onclick="getStateJobs('3957')" href="javascript:;">North Carolina</a>
               <a class="list-btn" id="3966" onclick="getStateJobs('3966')" href="javascript:;">South Carolina</a>
               <a class="list-btn" id="3969" onclick="getStateJobs('3969')" href="javascript:;">Tennessee</a>
               <a class="list-btn" id="3976" onclick="getStateJobs('3976')" href="javascript:;">West Virginia</a>
						
						
						
						
					</div>
					</div>
					
					
					
					<div id="statejobsresult">
                        <ul class="jobListing col-lg-8 ScrollStyle mCustomScrollbar" data-mcs-theme="dark" style="padding-left:0px">
                            <?php foreach ($job_data as $job_data1) { ?>
                                <li>
                                    <div class="job_list_icon"><?php echo substr($job_data1['job_title'], '0', '1') ?></div>
                                    <h4 class="col-lg-10" style="color:#ed1c24">
									<span style="width: 160px;float: left;height: 20px;overflow: hidden;"><?php echo $job_data1['job_title'] ?> </span>
									<small style="color:#25aae1;cursor:pointer;" onclick="getJobDesc(<?php echo $job_data1['id']; ?>)"> Job Description</small></h4>
                                    <p class="col-lg-10"><?php echo $job_data1['short_desc'] ?></p>
                                </li>
                            <?php } ?>


                        </ul>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="jobApplyModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Apply to job</h5>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="jobAppplyForm" method="post" class="form-horizontal">
                    <span id="applystatus"></span>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Full Name</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="full_name" />
                            <input type="hidden" name="job_id" id="dyn_job_id" value="<?php echo $job_data[0]['id'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Email</label>
                        <div class="col-xs-5">
                            <input type="email" class="form-control" placeholder="Enter your mobile" name="email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Mobile</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Experience</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" placeholder="Enter your experience" name="experience" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">State</label>
                        <div class="col-xs-5">
                            <select name="state"  onchange="selectCity(this.options[this.selectedIndex].value)" class="form-control" >
                                <option value="">Select State</option>
                                <?php
                                foreach ($states as $state) {
                                    echo "<option value='" . $state['id'] . "'>" . $state['name'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Upload Resume</label>
                        <div class="col-xs-5">
                            <input type="file" class="form-control" placeholder="Upload resume" name="resume" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Message</label>
                        <div class="col-xs-5">
                            <textarea  class="form-control" name="message" placeholder="ENter your message here" ></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="button" id="submitJobApplication" class="btn btn-primary" style="background:#ee4b28">Apply</button>
                            <button type="button" class="btn btn-default" style="background:#ee4b28" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!--Two Tabs section Start-->
<!--About Section Start-->
<section class=" bg-primary " id="about">
    <div class="container custom-bg1 ">
        <div class="row ">
            <div class="col-lg-6">
                <div class="col-lg-5">
                    <h2 class="section-heading mob-center" style="font-weight:800;">Request </h2>
                    <h2 class="section-heading mob-center" style="font-weight:800;">Our Services</h2>

                    <hr class="light mob-center">
                    <p class="text-faded mob-center">Only service that appears in your area may be available.</p>
                </div>
                <div class="col-lg-7">
                    <form id="seriverequestfrm">
                        <span id="frmerror"></span>
                        <div class="form-group">
                            <label for="companyName"><i class="fa fa-building-o fa-lg" aria-hidden="true"></i>&nbsp; Company Name</label>
                            <input type="text" class="form-control" name="company_name" id="cname">
                        </div>
                        <div class="form-group">
                            <label for="number"><i class="fa fa-phone fa-lg" aria-hidden="true"></i>&nbsp; Contact </label>
                            <input type="text" class="form-control" name="phone" id="num">
                        </div>
                        <div class="form-group">
                            <label for="name"><i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp; Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="state"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> State</label>
                            <select name="state"  onchange="selectCity(this.options[this.selectedIndex].value)" class="form-control" >
                                <option value="-1"></option>
                                <?php
                                foreach ($states as $state) {
                                    echo "<option value='" . $state['id'] . "'>" . $state['name'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> City</label>
                            <select id="city_dropdown" name="city" onchange='pickother(this.value);' class="form-control" >

                            </select>
							
                        </div>
						 <div class="form-group" id="othercity" style='display:none;'>
                            <label for="state"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> Other City</label>
                           
							<input type="text" class="form-control input-md" name="other_city" />
                        </div>
                        <div class="form-group">
                            <label for="state"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> Service</label>
                            <select name="service" required="required"  class="form-control input-md" autocomplete="off">
                                <option value=""></option>
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
                        <div class="form-group">
                            <label for="email"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>&nbsp; Email </label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <button type="button" id="request_reservice_btn" class="btn btn-default btn-lg col-lg-12 go-btn-mobile">Go</button>
                    </form>


                </div>
            </div>

            <div class="verticalLine col-xs-1"  >
            </div>
            <div class="col-lg-5">
                <h2 class="section-heading text-center p-t-20">Become A Member</h2>
                <hr class="light">
                <p class="text-faded mob-center" style="text-align:justify">What Is RazorClean?<br>
We are several different companies manage by one RazorClean Inc., dedicated to bringing our members

the best possible prices on quality, brand-name services. With hundreds of locations worldwide,

RazorClean provides a wide selection of services, plus the convenience of specialty programs and

exclusive member and non-member services, all designed to make your service experience a pleasurable

one.</p>
                <!--a href="<?php echo base_url() ?>user-signup" class="page-scroll btn btn-default btn-xl sr-button col-lg-4 active m-b-10 mob-btn-signup" style="color:#f05f40;">Sign Up!</a -->
                <a href="<?php echo base_url() ?>user-signup" class="page-scroll btn btn-default btn-xl sr-button mob-btn-mem">Sign Up!</a>
                <a href="<?php echo base_url()?>razor" class="page-scroll btn btn-default btn-xl sr-button col-lg-offset-1 mob-btn-mem">Why RazorClean</a>
                <div class="col-lg-6" style="padding-bottom:130px"> </div>
            </div>
        </div>

    </div>
</section>

<!--Service section square start-->
<section class="no-padding" id="portfolio">
    <div class="container-fluid">
        <div class="row no-gutter mob-view">
            <div class="customLinks col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="<?php echo base_url()?>shop" class="portfolio-box">
                    <img src="<?php echo frontend_asset_url() ?>img/services/shop.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">

                        </div>

                    </div>
                    <div class="hover-text-shop" >
                        Shop
                        <hr class="light" style="margin-top:2px;">
                    </div>
                </a>
            </div>
            <div class="customLinks col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="<?php echo base_url()?>blog" class="portfolio-box">
                    <img src="<?php echo frontend_asset_url() ?>img/services/blog.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">  </div>
                    </div>
                    <div class="hover-text-blog" >
                        Blog
                        <hr class="light" style="margin-top:2px;">
                    </div>
                </a>
            </div>
            <div class="customLinks col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="<?php echo base_url()?>calendar" class="portfolio-box">
                    <img src="<?php echo frontend_asset_url() ?>img/services/calender.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">


                        </div>
                    </div>
                    <div class="hover-text-calender" >
                        Calender
                        <hr class="light" style="margin-top:2px;">
                    </div>
                </a>
            </div>
            <div class="customLinks col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="<?php echo base_url()?>foundation" class="portfolio-box">
                    <img src="<?php echo frontend_asset_url() ?>img/services/foundation.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">

                        </div>
                    </div>
                    <div class="hover-text-foundation" >
                        Foundation
                        <hr class="light" style="margin-top:2px;">
                    </div>

                </a>
            </div>
        </div>
    </div>
</section>
<!--Service section square End-->

<!--partner with us area start-->
<section id="customAreas" class="no-padding bg-red">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading partner-heading .mob-center"> Partner With Us In These Areas! </h2>
				<p style="color:#fff">If You Are Interested in Becoming a Sub-Contractor With Us or Using Us as a Sub-Contractor, <br>
Click on Your State and Contact Us</p>
                <hr class="primary" style="display:none;">
            </div>
            <div class="col-lg-12">
                <div class="map-image"><a  href="<?php echo base_url()?>partner/3960"><img src="<?php echo frontend_asset_url() ?>img/Oklahoma.png"></a></div>
                <div class="map-image"><a  href="<?php echo base_url()?>partner/3970"><img src="<?php echo frontend_asset_url() ?>img/Texas.png"></a></div>
                <div class="map-image"><a  href="<?php echo base_url()?>partner/3922"><img src="<?php echo frontend_asset_url() ?>img/Arkansas.png"></a></div>
                <div class="map-image"><a  href="<?php echo base_url()?>partner/3939"><img src="<?php echo frontend_asset_url() ?>img/Louisiana.png"></a></div>
                <div class="map-image"><a  href="<?php echo base_url()?>partner/3947"><img src="<?php echo frontend_asset_url() ?>img/Mississippi.png"></a></div>
                <div class="map-image"><a  href="<?php echo base_url()?>partner/3917"><img src="<?php echo frontend_asset_url() ?>img/map/AL.png"></a></div>
                <div class="map-image"><a  href="<?php echo base_url()?>partner/3974"><img src="<?php echo frontend_asset_url() ?>img/map/VA.png"></a></div>
            <div class="clear"></div>
		<div class="map-image"><a  href="<?php echo base_url()?>partner/3930"><img src="<?php echo frontend_asset_url() ?>img/map/FL.png"></a></div>
                <div class="map-image"><a  href="<?php echo base_url()?>partner/3931"><img src="<?php echo frontend_asset_url() ?>img/map/GA.png"></a></div>
                <div class="map-image"><a href="<?php echo base_url()?>partner/3938"><img src="<?php echo frontend_asset_url() ?>img/map/KY.png"></a></div>
                <div class="map-image"><a  href="<?php echo base_url()?>partner/3957"><img src="<?php echo frontend_asset_url() ?>img/map/NC.png"></a></div>
                <div class="map-image"><a  href="<?php echo base_url()?>partner/3966"><img src="<?php echo frontend_asset_url() ?>img/map/SC.png"></a></div>
                <div class="map-image"><a  href="<?php echo base_url()?>partner/3969"><img src="<?php echo frontend_asset_url() ?>img/map/TN.png"></a></div>
                <div class="map-image"><a  href="<?php echo base_url()?>partner/3976"><img src="<?php echo frontend_asset_url() ?>img/map/WV.png"></a></div>
            
	    </div>

           
        </div>
    </div>
</section>


<!--Contact form and testimonials section start-->
<section class="bg-contact" id="testimonials" style="padding:0px 0;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4" style="background-color: rgba(34, 34, 34, 0.8)">
                <h2 class="section-heading tellus p-t-30" style="">Tell Us How We have Done!</h2>
                <form novalidate class="form-horizontal" id="submit_testimonial">
                    <span id="testi_status"></span>
                    <fieldset>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-1 control-label" for="namec"></label>
                            <div class="col-md-10">
                                <input id="namec" name="client_name" type="text" placeholder="Name " class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
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
                        <div class="form-group">
                            <label class="col-md-1 control-label" for="comentc"></label>
                            <div class="col-md-10">
                                <textarea required="required" class="form-control" placeholder="Comment" id="comentc" name="comment"></textarea>
                            </div>
                        </div>


                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="submitc"></label>
                            <div class="col-md-6">
                                <button id="submitc" name="submitc" class="btn btn-primary" >Submit</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
            <!--Contact form End-->
            <div class="col-lg-8 ">
                <div class="testiMonial1 slider ">
                    <?php foreach ($testimonial_data as $testimonial_data) { ?>
                        <div class="testimonial">
                            <div class="testimonialContent">
                                <p style="color:#ffffff">
                                    <?php echo substr($testimonial_data['description'], '0', '100'); ?>
                                </p>
                            </div>
                            <div class="arrow-down">
                            </div>
                            <div class="testimonialProfile">
                                <?php if ($testimonial_data['client_image'] != '' && file_exists(FCPATH . "uploads/testimonial_users/50x50/" . $testimonial_data['client_image'])) { ?>
                                    <img src="<?php echo base_url() . "uploads/testimonial_users/50x50/" . $testimonial_data['client_image'] ?>">
                                <?php } else { ?>
                                    <div class="author_initial"><?php echo substr($testimonial_data['client_name'], '0', '1'); ?></div>
                                <?php } ?>
                                <p style="color:#ffffff"><strong>Lorem Ipsum</strong><br/> <?php echo $testimonial_data['client_name'] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact form and testimonials section start-->




<script>
    function selectCity(state_id) {
        if (state_id != "-1") {
            loadData('city', state_id);
        } else {
            $("#city_dropdown").html("<option value='-1'>Select cityss</option>");
			
        }
    }
    function loadData(loadType, loadId) {
        var dataString = 'loadType=' + loadType + '&loadId=' + loadId;
        $("#" + loadType + "_loader").show();
        $("#" + loadType + "_loader").fadeIn(400).html('Loading ' + loadType + '...');
        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>frontend/location/loadData",
            data: dataString,
            cache: false,
            success: function (result) {
                $("#" + loadType + "_loader").hide();
                $("#" + loadType + "_dropdown").html("<option value='-1'>Select " + loadType + "</option>");
				
                $("#" + loadType + "_dropdown").append(result);
            }
        });
    }
	function pickother(val){
 var element=document.getElementById('othercity');
 if(val=='other')
   element.style.display='block';
 else  
   element.style.display='none';
}
function getJobDesc(id) {

        $.ajax({
            url: base_url + 'backend/job/getJobDescription',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'json',
            success: function (response) {
                //alert(response.job_title);
                if (response.status === '1') {

                    $("#dyn_job_title").html(response.job_title);
                    $("#dyn_job_short_desc").html(response.short_desc);
                    $("#dyn_job_long_desc").html(response.long_desc);
                    $("#dyn_job_id").val(response.job_id);
					$("#dynicon").attr("src", response.icon);
                }
            }
        });
    }
function getStateJobs(id) {
	$(".list-btn").removeClass("active"); 
$("#"+id).addClass('active');
        $.ajax({
            url: base_url + 'backend/job/getStateJobs',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'json',
            success: function (response) {
                //alert(response.job_title);
                if (response.status === '1' && response.job_title !=='') {
                    $("#dyn_job_title").html(response.job_title);
                    $("#dyn_job_short_desc").html(response.short_desc);
                    $("#dyn_job_long_desc").html(response.long_desc);
                    $("#dyn_job_id").val(response.job_id);
                    $("#statejobsresult").html(response.result);
                }
else {
                    alert("No jobs found in this state");
                    return false;
                }
            }
        });
    }
    $(document).ready(function () {
        $('#request_reservice_btn').on('click', function (e) {
            e.preventDefault();
            $('#request_reservice_btn').attr('disabled', true);
            $('#request_reservice_btn').val('Saving...');
            var url = base_url + "backend/Request_service/requestServiceForm"; // the script where you handle the form input.

            var formData = $("#seriverequestfrm").serialize();
            $.ajax({
                type: "POST",
                url: url,
                data: formData,
                dataType: 'json',
                success: function (data)
                {
                    //alert(data);
                    $('#request_reservice_btn').attr('disabled', false);
                    $('#request_reservice_btn').val('Submit');
                    if (data.status === '1') {
                        $("#frmerror").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">X</button><strong>' + data.msg + '</div>');
                        $('#seriverequestfrm')[0].reset();
                        return true;
                    } else {
                        $("#frmerror").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">X</button><strong>' + data.msg + '</div>');
                        return false;
                    }
                }
            });

        });

    });
</script>

<script type="text/javascript">//<![CDATA[
$(window).load(function(){
$(function(){
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
});
});//]]> 
</script>

<script type="text/javascript">//<![CDATA[

/*function sticky_relocate() {
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
});*/

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





<!--div class="overlay-div"></div-->

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

<script type="text/javascript">//<![CDATA[
$(function(){
$(".map-image").click(function() {
    $('html,body').animate({
        scrollTop: $(".scroll-listing").offset().top},
        'slow');
});
});//]]> 


function showthreeIconContents(id){
	if(id === 'quality'){
	$("#quality").show();
	$("#service").hide();
		$("#trust").hide();
	}else if(id==='trust'){
		$("#trust").show();
		$("#service").hide();
		$("#quality").hide();
	}else if(id==='service'){
		$("#service").show();
		$("#trust").hide();
		$("#quality").hide();
	}else{
		$("#service").hide();
		$("#trust").hide();
		$("#quality").hide();
	}
}

$( ".mout" ).mouseout(function() {
  $( "#quality, #service, #trust" ).hide();
});
</script>

<script>
    var $item = $('.carousel .item');
    var $wHeight = $(window).height();
    $item.eq(0).addClass('active');
    $item.height($wHeight);
    $item.addClass('full-screen1');

    $('.carousel img').each(function () {
        var $src = $(this).attr('src');
        var $color = $(this).attr('data-color');
        $(this).parent().css({
            'background-image': 'url(' + $src + ')',
            'background-color': $color
        });
        $(this).remove();
    });

    $(window).on('resize', function () {
        $wHeight = $(window).height();
        $item.height($wHeight);
    });

    $('.carousel').carousel({
        interval: 6000,
        pause: "false"
    });
//# sourceURL=pen.js
</script>

<script>
    jQuery(document).ready(function () {
        document.getElementById("myDiv").style.display = "none";  // 5 seconds
    });
</script>

