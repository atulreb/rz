<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
        <title>Housekeepers</title>

        <link href="favicon.png" type="image/x-icon" rel="shortcut icon">
        <link href="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/css/master.css" rel="stylesheet">

        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/plugins/jquery/jquery-1.11.3.min.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/js/modernizr.custom.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/js/jquery.nav.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/js/script.js"></script>
        <script>
            var base_url = '<?php echo base_url() ?>';
            var page_name = '<?php echo $page; ?>';
        </script>
    </head>


    <body>

        <!-- Loader -->
        <!--div id="page-preloader"><span class="spinner"></span></div-->
        <!-- Loader end -->


        <div class="layout-theme animated-css" id="wrapper" data-header="sticky" data-header-top="200">

            <!-- HEADER -->
            <header class="header header_mod-a">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-12"> <a href="index.html" class="logo"> <img src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/img/logo4.png" width="250" height="55" alt="logo"></a> </div>
                        <div class="col-md-9 col-xs-12">
                            <!-- <div class="header-cart">
                                    <a class="header-cart__link" href="home-1.html">
                                            <i class="icon icon_phone"></i>
                                            <span class="header-cart__qty">2</span>
                                            <span class="header-cart__amount">Cart - $16.00</span>
                                    </a>
                            </div> -->
                            <div class="header-contacts">
                                <i class="icon icon_phone header-call"></i>
                                <div class="header-contacts__name">Call Support</div>
                                <div class="header-contacts__info">0800.123.9876</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="main-navig">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">

                                <div class="navbar yamm">
                                        <!-- <a class="btn_header_search visible-xs" href="#"><i class="icon icon_search"></i></a> -->
                                    <div class="search-form-modal transition">
                                        <form class="navbar-form header_search_form">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                            </div>
                                            <button class="btn_search btn btn-primary btn-effect">Search</button>
                                            <i class="fa fa-times search-form_close"></i>
                                        </form>
                                    </div>
                                    <div class="navbar-header visible-xs">
                                        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                    </div>

                                    <nav id="navbar-collapse-1" class="navbar-collapse collapse">
                                            <!-- <a class="btn_header_search hidden-xs" href="#"><i class="icon icon_search"></i></a> -->
                                        <div class="search-form-modal transition">
                                            <form class="navbar-form header_search_form">
                                                <i class="fa fa-times search-form_close"></i>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                </div>
                                                <button class="btn_search btn btn-primary btn-effect">Search</button>
                                            </form>
                                        </div>
                                        <ul class="navigation nav navbar-nav">
                                            <li><a href="#cstm-about">ABOUT US</a></li>
                                            <li><a href="#cstm-services">OUR SERVICES</a></li>
                                            <li><a href="#cstm-quote">GET A QUOTE</a></li>
                                            <li><a href="#cstm-career">CAREER OPPORTUNITIES</a></li>
                                            <li><a href="#cstm-FAQ">FAQ</a></li>
                                            <li><a href="#cstm-testimonial">TESTIMONIAL</a></li>
                                            <li><a href="#cstm-contact">CONTACT US</a></li>
                                            <li><a href="#cstm-blog">BLOG</a></li>
                                        </ul>
                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /navig -->
            </header><!-- /header -->


            <div class="main-slider slider-pro" id="my-slider"
                 data-slider-width="1920"
                 data-slider-height="1045">

                <div class="sp-slides">

                    <!-- Slide 1 -->
                    <div class="sp-slide">
                        <img class="sp-image img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/slider/1.jpg" height="580" width="1600" alt="slider">

                        <h1 class="main-slider__title sp-layer"
                            data-horizontal="13vw"
                            data-vertical="35%"
                            data-show-transition="up"
                            data-hide-transition="left"
                            data-show-duration="800"
                            data-show-delay="400"
                            data-hide-delay="400">
                            best cleaning services<br>
                            in your area
                        </h1>

                        <div class="main-slider__text sp-layer hidden-xs"
                             data-horizontal="13vw"
                             data-vertical="50%"
                             data-height="30%"
                             data-width="35%"
                             data-show-transition="up"
                             data-hide-transition="left"
                             data-show-duration="800"
                             data-show-delay="1200"
                             data-hide-delay="1200">
                            <p class="main-slider__text">Vivamus elementum laoreet lorem. Maecenas erat felis sed mollis semper lobortis vitae phasellus commodo libero</p>
                            <div class="border-decor border-decor_mod-a"></div>
                        </div>
                    </div>
                    <!-- end sp-slide -->

                    <!-- Slide 2 -->
                    <div class="sp-slide">
                        <img class="sp-image img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/slider/2.jpg" height="580" width="1600" alt="slider">

                        <h2 class="main-slider__title sp-layer"
                            data-horizontal="13vw"
                            data-vertical="35%"
                            data-show-transition="up"
                            data-hide-transition="left"
                            data-show-duration="800"
                            data-show-delay="400"
                            data-hide-delay="400">
                            best cleaning services<br>
                            in your area
                        </h2>

                        <div class="main-slider__text sp-layer hidden-xs"
                             data-horizontal="13vw"
                             data-vertical="50%"
                             data-height="30%"
                             data-width="35%"
                             data-show-transition="up"
                             data-hide-transition="left"
                             data-show-duration="800"
                             data-show-delay="1200"
                             data-hide-delay="1200">
                            <p class="main-slider__text">Vivamus elementum laoreet lorem. Maecenas erat felis sed mollis semper lobortis vitae phasellus commodo libero</p>
                            <div class="border-decor border-decor_mod-a"></div>
                        </div>
                    </div>
                    <!-- end sp-slide -->

                </div>
            </div>

            <div id="cstm-about" class="section-banner wow">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h2 class="ui-title-block text-uppercase text-center">About Us</h2>
                            <div class="ui-subtitle-block ui-subtitle-block_large text-center">
                                Trusted, Professional, Commercial & Residential Service Provider
                                <div class="border-decor border-decor_mod-b center-element"></div>
                            </div>

                            <p class="fnt-monserrat">
<i class="fa fa-quote-left" aria-hidden="true"></i>                                
RazorClean Maids, Inc., is an Arkansas janitorial provider of both commercial and residential cleaning. We have built a reputation for quality and reliability. We provide a consistent, thorough cleaning. Call us today to request a free, no-obligation estimate for our professional cleaning service. e respect our customers, their time, and most of all, their businesses and homes. Our commercial and residential cleaning experts will ask you questions about your business or home and walk you through our cleaning process. You will be impressed with the steps we use to take care of you. We start with offering you the RazorClean Maids Check Plus Guarantee, where janitorial and maid work is always checked. At RazorClean Maids, you will always come first, and we will always provide the lowest price and the greatest service. We allow you to be assured that you are not paying too much. To learn more about the RazorClean Maids check plus guarantee. 
<i class="fa fa-quote-right" aria-hidden="true"></i>                            
</p>

<div class="col-md-3 text-center">
<img src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/img/pic1.png" class="img-responsive" style="margin:0 auto"/>
</div>

<div class="col-md-9">
 <p class="fnt-monserrat text-left">
Before joining the RazorClean Maids team, each janitorial technician and maid is professionally trained, regardless of previous experience. Every RazorClean janitorial and maid team member goes through an extensive training process before ever entering your business or home. Also, ongoing training classes keep cleaning skills up to date. RazorClean Maids normally work in teams of three/seven for janitorial cleaning and two/three for maid service. We make every effort to assign the same team to your business or home for each visit. Our teams will perform the detailed services that our customers have grown to love. We assure you that with RazorClean Maids all you have to do is "Run Out To A Clean Business!" or "Run Home To A Clean House!". 
</p>
</div>


<div class="col-md-9">
<p class="fnt-monserrat text-left">
Having a clean, comfortable home is important. Finding the time to conduct a thorough cleaning is difficult, especially with all the pressures and demands already placed on you. Let us take the worry out of your cleaning projects. 

Run into a business cleaned to your complete satisfaction. We also understand that your business is your biggest investment, and you want your clients to see nothing short of excellence. Our professionals can help your business shine. 
</p>
</div>

<div class="col-md-3 text-center">
<img src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/img/pic2.png" class="img-responsive" style="margin:0 auto"/>
</div>





                        </div>
                    </div>
                </div>
            </div><!-- /section-banner -->


            <div  class="section-banner section-bg-2 wow">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner" id="banner01" style="text-align:center">
                                <div class="banner__description">If you are not happy with your cleaning from our company, please call us within 24 hours so that we can honor our guarantee. </div>
                                <div class="banner__btn-wrap" style="float:none !important">

                                    <a href="javascript:;" class="button1 btn btn-primary btn_with_icon btn-effect ">CONTACT NOW <i class="icon arrow_carrot-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /section-banner -->


            <div id="cstm-services" class="section-area wow">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <section class="section-default border-top">
                                <h2 class="ui-title-block text-uppercase text-center">OUR services</h2>
                                <div class="ui-subtitle-block ui-subtitle-block_large text-center">professional home & office cleaning services</div>
                                <div class="carousel_mod-b owl-carousel owl-theme enable-owl-carousel"
                                     data-min480="1"
                                     data-min768="2"
                                     data-min992="2"
                                     data-min1200="3"
                                     data-pagination="false"
                                     data-navigation="true"
                                     data-auto-play="4000"
                                     data-stop-on-hover="true">

                                    <article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-man-vacuuming"></i>
                                                <h3 class="entry-title ui-title-inner">Cleaning of All Surfaces</h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Vivamus elementum laoreet lorem. Maecenas er </p>
                                            </div>
                                          
                                        </div>
                                    </article>

                                    <article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-vacuum-cleaner"></i>
                                                <h3 class="entry-title ui-title-inner">Vacuuming of carpets </h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Vivamus elementum laoreet lorem. Maecenas er </p>
                                            </div>
                                          
                                        </div>
                                    </article>

                                    <article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-cleaner"></i>
                                                <h3 class="entry-title ui-title-inner">Cleaning of Floors</h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Vivamus elementum laoreet lorem. Maecenas er </p>
                                            </div>
                                            
                                        </div>
                                    </article>

				    <article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-feather-duster"></i>
                                                <h3 class="entry-title ui-title-inner">Dusting </h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Vivamus elementum laoreet lorem. Maecenas er </p>
                                            </div>
                                            
                                        </div>
                                    </article>


				    <article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-stove"></i>
                                                <h3 class="entry-title ui-title-inner">Kitchen Appliances Covers </h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Vivamus elementum laoreet lorem. Maecenas er </p>
                                            </div>
                                            
                                        </div>
                                    </article>


				    <article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-bathtub"></i>
                                                <h3 class="entry-title ui-title-inner">Bath Tubs and Shower Stalls </h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Vivamus elementum laoreet lorem. Maecenas er </p>
                                            </div>
                                            
                                        </div>
                                    </article>


				    <article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-toilet"></i>
                                                <h3 class="entry-title ui-title-inner">Toilets </h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Vivamus elementum laoreet lorem. Maecenas er </p>
                                            </div>
                                            
                                        </div>
                                    </article>


				    <article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-washbasin"></i>
                                                <h3 class="entry-title ui-title-inner">Sinks and All Sink Fixtures </h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Vivamus elementum laoreet lorem. Maecenas er </p>
                                            </div>
                                            
                                        </div>
                                    </article>


				    <article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-furniture-1"></i>
                                                <h3 class="entry-title ui-title-inner">Change Linens-One Bed Free</h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Vivamus elementum laoreet lorem. Maecenas er </p>
                                            </div>
                                            
                                        </div>
                                    </article>


				    <article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-base"></i>
                                                <h3 class="entry-title ui-title-inner">Base Boards </h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Vivamus elementum laoreet lorem. Maecenas er </p>
                                            </div>
                                            
                                        </div>
                                    </article>


				    <article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-fan"></i>
                                                <h3 class="entry-title ui-title-inner">Ceiling Fan Cleaning </h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Vivamus elementum laoreet lorem. Maecenas er </p>
                                            </div>
                                            
                                        </div>
                                    </article>


				    <article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-furniture"></i>
                                                <h3 class="entry-title ui-title-inner">Polishing of (Wood) Furniture</h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Vivamus elementum laoreet lorem. Maecenas er </p>
                                            </div>
                                            
                                        </div>
                                    </article>


				   

                                </div><!-- /carousel -->
                            </section>
                        </div>
                    </div>
                </div>
            </div><!-- /section-area -->

            <div id="cstm-quote" class="postn"></div>
            <section class="section-default section-bg-1 video-link wow">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                           
                                <div class="video-link__img"><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/menu/promo.jpg" width="550" height="250" alt="video"></div>
                       
                        </div>

                        <div class="col-md-6">
                            <div class="video-link__wrap">
                                <h2 class="ui-title-block">GET A QUOTE</h2>
                                <div class="ui-subtitle-block ui-subtitle-block_mod-a">
                                    <div class="border-decor border-decor_mod-a mt10"></div>
                                </div>

                                <p class="video-link__text">We offer quality business and home cleaning services. Services are available daily, weekly, bi-weekly and monthly, or one-time deep clean. Give yourself one less thing to worry about and one more thing to enjoy, just "Run Out To A Clean Business!" or "Run Home To A Clean House!". </p>
                                <p class="video-link__text">Service areas are: Hot Springs, Malvern, Benton, Bryant, Alexander, Little Rock, North Little Rock, Maumelle, Sherwood, Conway, Jacksonville, and Surrounding Areas. More areas are soon to come!</p>
                                <p><br></p>
                                <a href="#" data-toggle="modal" data-target="#getQuote" class="btn btn-primary btn_with_icon btn-effect ">GET A QUOTE<i class="icon arrow_carrot-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /section-default -->


            <!--section class="section-area wow">
                    <div class="title-w-bg">
                            <div class="container">
                                    <div class="row">
                                            <div class="col-md-3">
                                                    <h2 class="title-w-bg__inner">FEATURED PROJECTS</h2>
                                            </div>
                                    </div>
                            </div>
                    </div>

                    <div class="container">
                            <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                            <div class="text-left filter " >
                                                    <div class="filter-isotope clearfix" id="filter">
                                                            <button class="filter-isotope__item current" data-filter="*">All Works</button>
                                                            <button class="filter-isotope__item" data-filter=".renovations">Home Renovations</button>
                                                            <button class="filter-isotope__item" data-filter=".buildings">Buildings</button>
                                                            <button class="filter-isotope__item" data-filter=".interior">Interior Design</button>
                                                            <button class="filter-isotope__item" data-filter=".plumbing">Plumbing</button>
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                    </div>

                    <div class="isotope-frame">
                            <div class="isotope-filter">
                                    <div class="isotope-item renovations"> <img src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/isotop/400x320/1.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item plumbing"><img src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/isotop/400x320/2.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION </h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item interior"> <img src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/isotop/400x320/3.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item renovations"><img src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/isotop/400x320/4.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item renovations"> <img src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/isotop/400x320/5.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item buildings"> <img src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/isotop/400x320/6.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item interior"> <img src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/isotop/400x320/7.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item interior"> <img src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/isotop/400x320/8.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
            </section--><!-- /section-area -->


            <!--div class="section-default wow">
                    <div class="container">
                            <div class="row">
                                    <div class="col-md-4">
                                            <div class="carousel wow">
                                                    <article class="post post_mod-b clearfix">
                                                            <div class="entry-main">
                                                                    <div class="entry-header clearfix">
                                                                            <i class="icon icon_globe-2"></i>
                                                                            <div class="entry-header__wrap">
                                                                                    <h3 class="entry-title ui-title-inner"><a href="blog-details.html">WHO WE ARE</a></h3>
                                                                                    <div class="border-decor border-decor_mod-b"></div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="entry-media">
                                                                            <a href="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/posts/370x220/1-1.png" class="prettyPhoto">
                                                                                    <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/posts/370x150/1.jpg" width="370" height="150" alt="Foto">
                                                                            </a>
                                                                    </div>
                                                                    <div class="entry-content">
                                                                            <p>Vivamus elementum laoreet lorem. Maecenas er felis sedu mollis semper lobortis vitae phasellus commodo liber ors Vivamus sed dolor. Quisque portitor leosd.</p>
                                                                    </div>
                                                                    <a class="link" href="blog-details.html">READ MORE</a>
                                                            </div>
                                                    </article>

                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="panel-group accordion" id="accordion-1">
                                                    <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                    <h3 class="panel-title"><a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1">WHO WE ARE<i class="icon"></i></a></h3>
                                                            </div>
                                                            <div id="collapse-1" class="panel-collapse collapse in">
                                                                    <div class="panel-body">
                                                                            <p>Maecenas er felis se mollis semper lobortis vitae phasellus commodo libero Vivamus sed dolor. Quisque portitor leoa tincidu rutrum urna turpis nullam consequat.</p>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    

                                                    <div class="panel">
                                                            <div class="panel-heading">
                                                                    <h3 class="panel-title"><a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-2">we do good work<i class="icon"></i></a></h3>
                                                            </div>
                                                            <div id="collapse-2" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                            <p>Fusce eleifend. Donec sapien sed phase lusa . Pellentesque lacus.Vivamus lorem arcu semper duiac. Cras ornare arcu vamus nda leo. Etiam ind arc morbi justo mauris temd pus pharetra interdum at congue semper purus.</p>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    

                                                    <div class="panel">
                                                            <div class="panel-heading">
                                                                    <h3 class="panel-title"><a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-3">best & perfect company<i class="icon"></i></a></h3>
                                                            </div>
                                                            <div id="collapse-3" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                            <p>Fusce eleifend. Donec sapien sed phase lusa . Pellentesque lacus.Vivamus lorem arcu semper duiac. Cras ornare arcu vamus nda leo. Etiam ind arc morbi justo mauris temd pus pharetra interdum at congue semper purus.</p>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    

                                                    <div class="panel">
                                                            <div class="panel-heading">
                                                                    <h3 class="panel-title"><a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-4">work strong live happily<i class="icon"></i></a></h3>
                                                            </div>
                                                            <div id="collapse-4" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                            <p>Fusce eleifend. Donec sapien sed phase lusa . Pellentesque lacus.Vivamus lorem arcu semper duiac. Cras ornare arcu vamus nda leo. Etiam ind arc morbi justo mauris temd pus pharetra interdum at congue semper purus.</p>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    

                                            </div>
                                            
                                    </div>

                                    <div class="col-md-4">
                                            
                                            <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#tab1" data-toggle="tab">OFFERS 1</a></li>
                                                    <li><a href="#tab2" data-toggle="tab">INFO 2</a></li>
                                                    <li><a href="#tab3" data-toggle="tab">OFFERS 3</a></li>
                                            </ul>

                                            
                                            <div class="tab-content">
                                                    <div class="tab-pane active" id="tab1">
                                                            <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
                                                            <p>Maecenas er felis se mollis semper lobortis vitae phasellus commodo libero Vivamus sed dolor. Quisque portitor leoa tincidu rutrum urna turpis nullam consequat.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab2">
                                                            <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
                                                            <p>Mollis semper lobortis vitae phasellus commodo libero Vivamus sed dolor. Quisque portitor leoa tincidu rutrum urna turpis nullam consequat.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab3">
                                                            <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
                                                            <p>Leoa tincidu rutrum urna turpis nullam consequat.</p>
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
            </div><!-- /section-default -->

            <div id="cstm-career" class="postn"></div>
            <section class="section-area wow">
                <div class="title-w-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                              <h2 class="title-w-bg__inner">CAREER OPPORTUNITIES <!--a class="btn btn-effect" href="">View All</a><span class="border-decor border-decor_mod-c"></span--></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section_mod-b">
                    <div class="container">
                        <div class="row jobs_data">
                            <?php foreach ($jobs as $job) { ?>
                                <div class="col-md-6">
                                    <article class="post post_mod-c clearfix">
                                        <div class="entry-media">
                                            <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/towing/assets/media/posts/220x130/4.jpg" height="130" width="220" alt="Foto">
                                        </div>
                                        <div class="entry-main">
                                            <h3 class="entry-title ui-title-inner">
                                                <a href="javascript:;" onclick="applyJob(<?php echo $job['id'] ?>)"><?php echo $job['job_title'] ?></a>
                                            </h3>
                                            <div class="border-decor border-decor_mod-b"></div>
                                            <div class="entry-content">
                                                 <p><?php echo $job['short_desc'] ?></p>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- end post -->
                                </div>
                            <?php } ?>
                            <div style="clear:both;margin:20px"></div>

                            <div style="text-align: center;"><button class="loadmore btn btn-primary btn_with_icon btn-effect" data-page="2">Load More</button></div>
                        </div>
                    </div>
                </div>
            </section><!-- /section-area -->

            <div  class="section-banner section-bg-2 wow">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner" id="banner01">
                                <div class="banner__description">RazorClean Maids offers Bonded, Insured janitorial and maid service. </div>
                                <div class="banner__btn-wrap">
                                    <!-- <a href="" class="btn btn-default btn-effect">VIEW SERVICES</a> -->
                                    <a href="javascript:;" class="btn btn-primary btn_with_icon btn-effect button">VIEW SERVICES<i class="icon arrow_carrot-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /section-banner -->

            <div id="cstm-FAQ" class="postn"></div>

            <div class="section-default wow">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="carousel wow">
                                <article class="post post_mod-b clearfix">
                                    <div class="entry-main">
                                        <div class="entry-header clearfix" style="margin-bottom: -18px;">
                                                <!-- <i class="icon icon_globe-2"></i> -->
                                            <div class="entry-header__wrap no-margin">
                                                <h3 class="entry-title ui-title-inner" style="text-transform:uppercase;">Top 10 Reasons People Choose RazorClean Maids </h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                        </div>
                                      
                                        <div class="entry-content">
<ul class="why-us-list" style="padding-left: 14px;">
<li>is trusted, reliable, consistent, and affordable</li>
<li>cares about your health</li>
<li>takes pride in customer service</li>
<li>screens, trains, and certifies every maid and janitorial technician</li>
<li>uses tested and proven methods</li>
<li>has established standard house or business cleaning procedures - every maid and janitorial team - every cleaning</li>
<li>learns your needs quickly</li>
<li>complies with federal, state, and local labor/tax laws and carries adequate insurance</li>
<li>brings their own maid and janitorial service equipment and supplies</li>
<li>allows you to "Run Out To A Clean Business!" or "Run Home To A Clean House!"</li>
</ul>
					</div>
                                       
                                    </div>
                                </article>

                            </div>
                        </div>
                        <div class="col-md-8 wow">
                            <div class="entry-header  clearfix">
                                                                    <!-- <i class="icon icon_globe-2"></i> -->
                                <div class="entry-header__wrap no-margin">
                                    <h3 class="entry-title ui-title-inner no-margin">FAQ</h3>
                                    <div class="border-decor border-decor_mod-b"></div>
                                </div>
                            </div>
                            <div class="panel-group accordion" id="accordion-1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1">1. What is RazorClean Maids Service? <i class="icon"></i></a></h3>
                                    </div>
                                    <div id="collapse-1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>RazorClean Maids is a commercial and residential cleaning service that was founded in the state of Arkansas. We hire janitorial cleaners and residential housekeepers who have provided quality service for a number of years, and we train them to provide professional RazorClean Maids service. Each janitorial and maid service team is comprised of bonded, insured, licensed, and uniformed cleaners who are regularly supervised. This means that you will always receive the RazorClean Maids Check Plus Guarantee. Yes, you don't have to worry about hiring us, and then six months or so later, the service starting to decline. We are not like other service providers that start out great but then turn into one more problem. RazorClean Maids will provide the same great service every time. </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-2">2. How does the RazorClean Maids Check Plus Guarantee work? <i class="icon"></i></a></h3>
                                    </div>
                                    <div id="collapse-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>One of our managers will personally come to your business or home to check our janitorial and maids cleaners at least once a month. This ensures that you will always receive the best professional service. Our managers will leave a personal note if not speak with assign contact or home owner. He/She will let you know that they have personally done the RazorClean Maids Check Plus Guarantee. They will leave you their phone number and email address. A questionnaire will be left asking you to please grade the service and the team providing it at least once a year. This questionnaire can be filled out and mailed back at your convenience. It is your choice whether you want to fill out the questionnaire, we just want to ensure that you are happy with your service. You can also email or call us at any time about concerns. These are just some of the ways we ensure that you will always receive great service from RazorClean Maids. </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-3">3. Do I have to check behind RazorClean Maids? <i class="icon"></i></a></h3>
                                    </div>
                                    <div id="collapse-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Can you imagine not ever having to check behind your janitorial or maid provider? With RazorClean Maids, you don't have to. If one of our managers conducting the RazorClean Maids Check Plus Guarantee finds something that does not pass RazorClean Maids' standards, he/she will personally call you to re-schedule a free cleaning and a new team will be assigned if requested. We are the first and only provider that offers this level of service. That's why people all over Arkansas are leaving other providers and joining the RazorClean Maids team. </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-4">4. Does RazorClean Maids offer Janitorial Services? <i class="icon"></i></a></h3>
                                    </div>
                                    <div id="collapse-4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Yes, RazorClean Maids is extremely proud to offer RazorClean Janitorial Services. From large to small, we can handle it. If you are looking for a general cleaning for your commercial property, please look no futher. We have affordable and great service for dentist offices, insurance agencies, doctor's offices, retail stores, car dealerships, churches, commercial buildings, and other businesses. We do it all, from deep cleaning your entryways to complete restroom sanitization. All of our cleaning and maintenance is built specifically with you, our customers, in mind. We provide detail-oriented cleaning services, mess-free methods, and odor, stain, or pollutant removal. Customer satisfaction is extremely important to us, so we will find a commercial cleaning program that works for you.</p>
                                        </div>
                                    </div>
                                </div>



				<div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-5">5. Is RazorClean Maids the cheapest service? <i class="icon"></i></a></h3>
                                    </div>
                                    <div id="collapse-5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>We will always be the best provider of service at the most affordable price. Yes, we said it, BEST and AFFORDABLE together. Don't you think it's about time a professional janitorial and maids service provider offered these two things together? BEST and AFFORDABLE. RazorClean Maids is willing to take the ball, run with it, and give you what others will not, affordable great service. (Touchdown!) Where others like to over charge and provide declining service, we offer you great service at a affordable rate so you will always be a member of the RazorClean Maids team. RazorClean Maids will always bet any other provider by 5- 10%, allowing you to save money! </p>
                                        </div>
                                    </div>
                                </div>


				<div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-6">6. Can I trust RazorClean Maids Service? <i class="icon"></i></a></h3>
                                    </div>
                                    <div id="collapse-6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>We are willing to work for your trust and business. The manager that is assigned to your business or home will call you to sit down and learn your cleaning needs before your first appoinment. We would like to get to know you better to ensure that we provide the best service with the RazorClean Maids Check Plus Guarantee. RazorClean Maids will always work hard to make sure you can "Run Out To A Clean Business!" or "Run Home To A Clean House!" Plus, you will always have access to our main office to discuss your professional cleaning service. Yes, you can trust RazorClean Maids to always provide great customer service. Your way, everytime! </p>
                                        </div>
                                    </div>
                                </div>

				<div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-7">7. How is RazorClean Maids Green? <i class="icon"></i></a></h3>
                                    </div>
                                    <div id="collapse-7" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>We work extremely hard to meet the local community's need for a balanced life and a clean business or home. Outside of offering green cleaning services, we also refill bottles, use less product, and protect our cleaning teams and customers from unnecessary exposure. We do use green cleaning products when they are requested. Yes, you can "Run Out To A Clean 'Green' Business!" or "Run Home To A Clean 'Green' House!"</p>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>

                        <!--div class="col-md-4">
                                
                                <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab1" data-toggle="tab">OFFERS 1</a></li>
                                        <li><a href="#tab2" data-toggle="tab">INFO 2</a></li>
                                        <li><a href="#tab3" data-toggle="tab">OFFERS 3</a></li>
                                </ul>

                                
                                <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                                <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
                                                <p>Maecenas er felis se mollis semper lobortis vitae phasellus commodo libero Vivamus sed dolor. Quisque portitor leoa tincidu rutrum urna turpis nullam consequat.</p>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                                <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
                                                <p>Mollis semper lobortis vitae phasellus commodo libero Vivamus sed dolor. Quisque portitor leoa tincidu rutrum urna turpis nullam consequat.</p>
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                                <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
                                                <p>Leoa tincidu rutrum urna turpis nullam consequat.</p>
                                        </div>
                                </div>
                        </div-->
                    </div>
                </div>
            </div><!-- /section-default -->


            <div class="section-progress no-bg-color-parallax parallax-yellow wow" id="charstart">
                <ul class="bg-slideshow">
                    <li>
                        <div style="background-image:url(<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/bg/1.jpg)" class="bg-slide"></div>
                    </li>
                    <li>
                        <div style="background-image:url(<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/bg/1.jpg)" class="bg-slide"></div>
                    </li>
                </ul>

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="list-progress list-progress_mod-a list-unstyled">
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__wrap">
                                        <i class="icon icon1 flaticon-toilet"></i>
                                        <div class="list-progress__inner">
                                            <span class="list-progress__percent chart" data-percent="8960"><span class="percent"></span></span>
                                            <span class="list-progress__name">LOREM ISPUM</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__wrap">
                                        <i class="icon icon1 flaticon-cleaner"></i>
                                        <div class="list-progress__inner">
                                            <span class="list-progress__percent chart" data-percent="230"><span class="percent"></span></span>
                                            <span class="list-progress__name">LOREM ISPUM</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__wrap">
                                        <i class="icon icon1 flaticon-vacuum-cleaner"></i>
                                        <div class="list-progress__inner">
                                            <span class="list-progress__percent chart" data-percent="60"><span class="percent"></span></span>
                                            <span class="list-progress__name">LOREM ISPUM</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__wrap">
                                        <i class="icon icon1 flaticon-feather-duster"></i>
                                        <div class="list-progress__inner">
                                            <span class="list-progress__percent chart" data-percent="2560"><span class="percent"></span></span>
                                            <span class="list-progress__name">LOREM ISPUM</span>
                                        </div>
                                    </div>
                                </li>
                            </ul><!-- /list-progress -->
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div><!-- /section-progress -->

            <div id="cstm-testimonial" class="postn"></div>

            <div class="section-default section-bg-1 wow" >

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <section class="section-area">
                                <h2 class="ui-title-block">Testimonials</h2>
                                <div class="ui-subtitle-block ui-subtitle-block_mod-a">Sed tempus tempor orc mauris viverra nunc diam</div>
                                <div class="owl-carousel owl-theme enable-owl-carousel"
                                     data-pagination="false"
                                     data-navigation="false"
                                     data-single-item="true"
                                     data-auto-play="7000"
                                     data-transition-style="fade"
                                     data-main-text-animation="true"
                                     data-after-init-delay="3000"
                                     data-after-move-delay="1000"
                                     data-stop-on-hover="true">

                                    <?php foreach ($testi_data as $testi_data) { ?>
                                    <div class="reviews reviews_mod-a">
                                        <blockquote class="reviews__blockquote">
                                            <?php echo $testi_data['description'] ?>
                                        </blockquote>
                                        <div class="reviews__autor">
                                            <div class="reviews__img">

                                                <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/pool-cleaning/assets/media/avatar/1.jpg" height="60" width="60" alt="Foto"></div>
                                            <div class="reviews__wrap">
                                                <div class="reviews__name"><?php echo ucfirst($testi_data['client_name']) ?></div>
                                                <div class="reviews__categories">Our Happy Customer</div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div><!-- end slider -->
                            </section>
                        </div>

                        <div class="col-md-6">
                            <section class="section-area">
                                <h2 class="ui-title-block">Our Partners</h2>
                                <div class="ui-subtitle-block">Sed tempus tempor orc mauris viverra nunc diam</div>
                                <div class="clients-wrap">
                                    <div class="clients clients_mod-a"> <a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/brand/1.png" height="57" width="90" alt="brand"> </a></div>
                                    <div class="clients clients_mod-a"> <a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/brand/2.png" height="46" width="111" alt="brand"> </a></div>
                                    <div class="clients clients_mod-a"> <a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/brand/3.png" height="46" width="107" alt="brand"> </a> </div>
                                    <div class="clients clients_mod-a"> <a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/brand/4.png" height="52" width="112" alt="brand"> </a> </div>
                                    <div class="clients clients_mod-a"> <a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/brand/5.png" height="36" width="118" alt="brand"> </a> </div>
                                    <div class="clients clients_mod-a"><a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/media/brand/6.png" height="53" width="120" alt="brand"> </a> </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div><!-- /section-default -->

            <div id="cstm-contact" class="postn"></div>
            <div class="section_mod-a">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <section class="section_mod-h">
                                <h2 class="ui-title-inner ui-title-inner_small text-uppercase">CONTACT INFO.</h2>
                                <div class="border-decor border-decor_mod-b border-decor_mod-e"></div>
                                
				<ul class="list-contacts list-contacts_mod-a">
                                    <li class="list-contacts__item"><i class="icon icon_pin"></i>6929 JFK Blvd. #20-286 <br>
North Little Rock, AR 72116 </li>
                                    <li class="list-contacts__item"><i class="icon icon_phone"></i>1-855-GO-RZCLN (467- 9256)</li>
                                    <li class="list-contacts__item"><i class="icon icon_mail"></i><a class="list-contacts__link" href="mailto:signup@razorcleanmaids.com">signup@razorcleanmaids.com</a></li>
                                   
                                    <li class="list-contacts__item"><i class="icon icon_clock"></i> Mon - Fri: 8:00 a.m. - 8:00 p.m.</li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-md-9">
                            <section class="section_mod-h">
                                <h2 class="ui-title-inner ui-title-inner_small text-uppercase">SEND US A MESSAGE</h2>
                                <div class="border-decor border-decor_mod-b border-decor_mod-e"></div>
                                <div id="contacttatus_error" class="form-contact__info text-success"></div>
                                <form id="submitContactFrm" class="form-contact ui-form"  method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input class="form-control" type="hidden" name="service_category" value="<?php echo $page?>" id="user-name" placeholder="Your Name" required>
                                            <input class="form-control" type="text" name="contact_name" id="user-name" placeholder="Your Name" required>
                                            <input class="form-control" type="email" name="contact_email" id="user-email" placeholder="Email address" required>
                                            <input class="form-control" type="text" name="contact_phone" id="user-phone" placeholder="Phone #">
                                        </div>
                                        <div class="col-md-7">
                                            <textarea class="form-control" id="user-message" name="contact_message" placeholder="Subject / Message" rows="11" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div id="contacttatus_success" class="form-contact__info text-success"></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <button type="button" id="submitContact" class="btn btn-primary btn-effect">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div><!-- end section_mod-a -->

            <div id="cstm-blog" class="postn"></div>

            <section class="section-area wow">
                <div class="title-w-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <h2 class="title-w-bg__inner">Latest from blog<a class="btn btn-effect" href="<?php echo base_url()."service/".$page?>">Read Full Blog</a><span class="border-decor border-decor_mod-c"></span></h2>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="section_mod-b">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="carousel_mod-a owl-carousel owl-theme enable-owl-carousel"
                                     data-min480="1"
                                     data-min768="2"
                                     data-min992="2"
                                     data-min1200="3"
                                     data-pagination="false"
                                     data-navigation="true"
                                     data-auto-play="4000"
                                     data-stop-on-hover="true">

                                     <?php if(!empty($blogs)) { foreach ($blogs as $blogs) { ?>
                                        <article class="post post_mod-e clearfix">
                                            <div class="entry-media">
                                                <a href="<?php echo base_url() ?>uploads/blogs/<?php echo $blogs['blog_image'] ?>" class="prettyPhoto">
                                                    <img class="img-responsive" src="<?php echo base_url() ?>uploads/blogs/<?php echo $blogs['blog_image'] ?>" style="height:214px" alt="Foto">
                                                </a>
                                            </div>
                                            <div class="entry-date"><span class="entry-date__number"><?php echo date("d", strtotime($blogs['posted_on'])) ?></span><?php echo date("M", strtotime($blogs['posted_on'])) ?></div>
                                            <div class="entry-main">
                                                <div class="entry-header clearfix">
                                                    <h3 class="entry-title ui-title-inner"><a href="<?php echo base_url().$blogs['slug']?>"><?php echo $blogs['post_title'] ?></a></h3>
                                                    <div class="border-decor border-decor_mod-b"></div>
                                                </div>
                                                <div class="entry-content">
                                                    <p><?php echo substr($blogs['post_content'], '0', '116'); ?></p>
                                                </div>
                                            </div>
                                        </article>
                                    <?php } } else { echo "<h3>No blogs found</h3>"; }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <footer class="footer wow">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer__section">
                                <div class="footer__logo"><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/img/logo3.png" height="" width="210" alt="logo"></div>
                                <div class="footer__info">
                                     <p>
These simple, yet powerful values have continually guided our decision making as well as our interactions with our customers/members and each other. Our company is based on the belief that our customers/members needs are of the utmost importance. Our entire team is committed to meeting those needs. As a result, a high percentage of our business is from repeat customers and referrals.
				</p>
                                </div>
                            </div>

                           <div class="row">
                                <div class="col-xs-12">
                                    <ul class="social-links list-inline">
                                        <li><a target="_blank" href="<?php echo $global_setting['facebook_link']?>"><i class="ic social_facebook"></i></a></li>
                                        <li><a target="_blank" href="<?php echo $global_setting['twitter_link']?>"><i class="ic social_twitter"></i></a></li>
                                        <li><a target="_blank" href="<?php echo $global_setting['youtube_link']?>"><i class="ic social_youtube"></i></a></li>
                                        <li><a target="_blank" href="<?php echo $global_setting['instagram_link']?>"><i class="ic social_instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <section class="footer__section">
                                <h3 class="footer__title">COMPANY PAGES</h3>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <ul class=" navigation footer__list">
                                            <li><a href="#cstm-services">OUR SERVICES</a></li>
                                            <li><a href="#cstm-quote">GET A QUOTE</a></li>
                                            <li><a href="#cstm-career">CAREER OPPORTUNITIES</a></li>
                                            <li><a href="#cstm-FAQ">FAQ</a></li>

                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <ul class="navigation footer__list">
                                            <li><a href="#cstm-testimonial">TESTIMONIAL</a></li>
                                            <li><a href="#cstm-contact">CONTACT US</a></li>
                                            <li><a href="#cstm-blog">BLOG</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <section class="footer__section">
                                <h3 class="footer__title">CONTACT INFO</h3>
                                <ul class="list-contacts">
                                    <li class="list-contacts__item"><i class="icon icon_pin"></i>6929 JFK Blvd. #20-286 <br>
North Little Rock, AR 72116 </li>
                                    <li class="list-contacts__item"><i class="icon icon_phone"></i>1-855-GO-RZCLN (467- 9256)</li>
                                    <li class="list-contacts__item"><i class="icon icon_mail"></i><a class="list-contacts__link" href="mailto:signup@razorcleanmaids.com">signup@razorcleanmaids.com</a></li>
                                   
                                    <li class="list-contacts__item"><i class="icon icon_clock"></i> Mon - Fri: 8:00 a.m. - 8:00 p.m.</li>
                                </ul>
                            </section>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <section class="footer__section">
                                <h3 class="footer__title">INSTAGRAM FEED</h3>
                                <ul class="footer-gallery" id="flickr-feed"></ul>
                            </section>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="copyright">Copyright &copy; 2017, Razor Clean. All rights reserved.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- end layout-theme -->


        <!-- SCRIPTS MAIN -->

        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/js/jquery-migrate-1.2.1.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/js/waypoints.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/js/modernizr.custom.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/js/cssua.min.js"></script>


        <!--SCRIPTS THEME-->

        <!-- Home slider -->
        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/plugins/slider-pro/dist/js/jquery.sliderPro.js"></script>
        <!-- Sliders -->
        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
        <!-- Isotope -->
        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/plugins/isotope/isotope.pkgd.min.js"></script>
        <!-- Modal -->
        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
        <!-- Chart -->
        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <!-- Animation -->
        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/plugins/scrollreveal/dist/scrollreveal.min.js"></script>
        <!-- Flickr-->
        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/plugins/jflickrfeed/jflickrfeed.min.js" ></script>
        <!-- Menu for android-->
        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/js/doubletaptogo.js" ></script>

        <!-- Custom -->
        <script src="<?php echo base_url() ?>media/landing-pages/housekeepers/assets/js/custom.js"></script>
        <script>
            $(document).ready(function () {
                $('.navigation').onePageNav();
            });
        </script>
        <script>
            $(".button").click(function () {
                $('html, body').animate({
                    scrollTop: $("#cstm-services").offset().top
                }, 600);
            });
            $(".button1").click(function () {
                $('html, body').animate({
                    scrollTop: $("#cstm-contact").offset().top
                }, 600);
            });
        </script>


        <div id="getQuote" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">�</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title text-center fnt-monserrat fnt20 " id="myModalLabel">GET A QUOTE</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="well modal-bg">
                                <form id="loginForm" method="POST" action="" novalidate="novalidate">
                                    <div class="form-group">
                                        <!-- <label for="username" class="control-label">Username</label> -->
                                        <input type="text" class="form-control" id="" name="username" value="" required=""  placeholder="Enter Name">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" name="password" value="" required=""  placeholder="Email Id">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" name="Number" value="" required=""  placeholder="Phone Bumber">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="message" name="phone" class="form-control" required placeholder="Message"></textarea>
                                        <span class="help-block"></span>
                                    </div>
                                    <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                                    <!--div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" id="remember"> Remember login
                                        </label>
                                        <p class="help-block">(if this is a private computer)</p>
                                    </div-->
                                    <button type="submit" class="btn btn-success btn-block btn btn-primary btn_with_icon btn-effect ">Submit</button>

                                </form>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <p class="lead">Get in touch <span class="text-success">With Us</span></p>
                            <ul class="list-unstyled" style="line-height: 2">
                                <li><span class="fa fa-check text-success"></span> Lorem ipsum dolor</li>
                                <li><span class="fa fa-check text-success"></span> Sed sit amet</li>
                                <li><span class="fa fa-check text-success"></span> Amet mollis massa</li>
                                <li><span class="fa fa-check text-success"></span> Sollicitudin libero quis</li>
                                <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>

                            </ul>
                            <p>Note: 
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet mollis massa.</p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet mollis massa. Donec sollicitudin libero quis ultrices scelerisque.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="applyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title text-center fnt-monserrat fnt20 " id="myModalLabel">Apply Form </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="well modal-bg">
                                <div id="applystatus" class="alert alert-error"></div>
                                <form id="jobAppplyForm" method="POST" novalidate="novalidate">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter your Full Name *" name="full_name" />
                                        <input type="hidden" class="form-control" placeholder="Enter your Full Name" name="job_id" id="dyn_job_id" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter your email *" name="email" />
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter your mobile *" name="mobile" />
                                        <span class="help-block"></span>
                                    </div>
                                     <div class="form-group">
                                        <select name="state"  onchange="selectCity(this.options[this.selectedIndex].value)" class="form-control" >
                                            <option value="">Select State</option>
                                            <?php
                                            foreach ($states as $state) {
                                                echo "<option value='" . $state['id'] . "'>" . $state['name'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter your experience" class="form-control" name="experience" />
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="resume" />
                                        <span class="help-block">Upload your resume *</span>
                                    </div>
                                    <div class="form-group">
                                        <textarea  class="form-control" name="message" placeholder="Enter your message "></textarea>
                                        <span class="help-block"></span>
                                    </div>

                                    <!--div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" id="remember"> Remember login
                                        </label>
                                        <p class="help-block">(if this is a private computer)</p>
                                    </div-->
                                    <button type="button" id="submitJobApplication" class="btn btn-success btn-block btn btn-primary btn_with_icon btn-effect ">Submit</button>

                                </form>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <p class="lead"> <span class="text-success" id="mod_job_title">With Us</span></p>
                            <div id="mod_job_long_desc"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>

