<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
        <title>Lawn Care</title>

        <link href="favicon.png" type="image/x-icon" rel="shortcut icon">
        <link href="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/css/master.css" rel="stylesheet">

        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/plugins/jquery/jquery-1.11.3.min.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/js/modernizr.custom.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/js/jquery.nav.js"></script>
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
                        <div class="col-md-3 col-xs-12"> <a href="index.html" class="logo"> <img src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/img/logo3.png" width="250" height="55" alt="logo"></a> </div>
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
                        <img class="sp-image img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/slider/2.jpg" height="580" width="1600" alt="slider">

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
                        <img class="sp-image img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/slider/1.jpg" height="580" width="1600" alt="slider">

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
                                Welcome to RazorClean Lawn Care 
                                <div class="border-decor border-decor_mod-b center-element"></div>
                            </div>

                           
                                
                                <p class="fnt-monserrat">RazorClean Lawn Care, Inc., is an affordable, premium lawn care and landscaping company providing unmatched service to commercial and residential customers. We have built a reputation for quality and reliability. We respect our customers, their time, and most of all, their businesses and homes. We will customize a program to fit your needs and will guarantee that our service will exceed your expectations. Remember with RazorClean Lawn Care, you will have 
"No Worries...Relax, You Are Not That Yard!" We are bonded and insured.</p>
			<p class="fnt-monserrat">
RazorClean Lawn Care, Inc., has the best trained specialists in the industry. In addition to extensive in-house training programs, we also attend professional workshops and seminars every year. A RazorClean Lawn Care specialist is trained to evaluate, applicate, and communicate. This means that they look for current problems or potential problems on every visit. They take the time to let homeowners know what is being done or what needs to be done. 

</p>
			<p class="fnt-monserrat">
Our day to day management team has over 20 years of experience with lawn, tree, and shrub care in the state of Arkansas. We have a state-of-the-art area network communication system that is between management and every technician in the field. This allows us to be available to answer your questions or concerns quickly and efficiently. Service calls and consultations are provided at no additional charge. 
</p>
                               
                            
                        </div>
                    </div>
                </div>
            </div><!-- /section-banner -->


            <div  class="section-banner section-bg-2 wow">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner" id="banner01">
                                <div class="banner__description">Click On Contact Us for your FREE NO-OBLIGATION ESTIMATE TODAY!</div>
                                <div class="banner__btn-wrap">

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
                                <div class="ui-subtitle-block ui-subtitle-block_large text-center">RazorClean Services Include</div>
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
                                               <i class="icon icon1 flaticon-price-tag"></i>
                                                <h3 class="entry-title ui-title-inner">Free Estimates</h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>No two projects are the same. We do not believe that one price fits all because we will not skimp on your service. We provide the most accurate, realistic, and reasonable estimates.</p>
                                            </div>
                                           
                                        </div>
                                    </article>

                                    <article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                              <i class="icon icon1 flaticon-plant"></i>
                                                <h3 class="entry-title ui-title-inner">Tree Trimming</h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>We professionally trim and shape trees.</p>
                                            </div>
                                          
                                        </div>
                                    </article>

                                    <article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-mower"></i>
                                                <h3 class="entry-title ui-title-inner">Lawn Installation</h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>We will professionally install a lush lawn for you. We ensure the correct seed for your climate.</p>
                                            </div>
                                            
                                        </div>
                                    </article>

					<article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-water"></i>
                                                <h3 class="entry-title ui-title-inner">Lawn Maintenatance</h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Will maintain your lawn all year long.</p>
                                            </div>
                                            
                                        </div>
                                    </article>

				<article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-sprout"></i>
                                                <h3 class="entry-title ui-title-inner">Flower Beds and Gardens</h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>We install colorful flower beds, using creative designs. We can design beautiful gardens including rock beds.</p>
                                            </div>
                                            
                                        </div>
                                    </article>

				<article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-nature"></i>
                                                <h3 class="entry-title ui-title-inner">Irrigation</h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>We install and maintain irrigation systems.</p>
                                            </div>
                                            
                                        </div>
                                    </article>

				<article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-leaves"></i>
                                                <h3 class="entry-title ui-title-inner">Clean Up</h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Hate raking leaves or hauling debris? Leave it to us. Reasonable rates!</p>
                                            </div>
                                            
                                        </div>
                                    </article>

				<article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-plant"></i>
                                                <h3 class="entry-title ui-title-inner">Bush Trimming</h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>We will leave your bushes looking beautiful and designed just how you like.</p>
                                            </div>
                                            
                                        </div>
                                    </article>

				<article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-waste-pipe"></i>
                                                <h3 class="entry-title ui-title-inner">Gutter Cleaning</h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Do not hassle with trying to clean your gutters. It can be frustrating, time consuming, and dangerous. We will do it for you, and do a great job.</p>
                                            </div>
                                            
                                        </div>
                                    </article>

				<article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-bench"></i>
                                                <h3 class="entry-title ui-title-inner">Aeration</h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>We can help your landscaping look beautiful by aerating your soil so that water can reach the root. Great around trees!</p>
                                            </div>
                                            
                                        </div>
                                    </article>

				<article class="post post_mod-d clearfix">
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                <i class="icon icon1 flaticon-sprout"></i>
                                                <h3 class="entry-title ui-title-inner">Fertilizing</h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                            <div class="entry-content">
                                                <p>We use only the finest fertilizers to achieve beautiful results.</p>
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
                            <a class="prettyPhoto" href="https://www.youtube.com/watch?v=DIGfO2Dgc9Y&rel=0">
                                <div class="video-link__img"><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/menu/promo.jpg" width="550" height="250" alt="video"></div>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <div class="video-link__wrap">
                                <h2 class="ui-title-block">GET A QUOTE</h2>
                                <div class="ui-subtitle-block ui-subtitle-block_mod-a">
                                    <div class="border-decor border-decor_mod-a mt10"></div>
                                </div>

                                <p class="video-link__text">Our day to day management team has over 20 years of experience with lawn, tree, and shrub care in the state of Arkansas. We have a state-of-the-art area network communcation system that is between management and every technician in the field. This allows us to be available to answer your questions or concerns quickly and efficiently. Service calls and consultations are provided at no additional charge.</p>
                                <p class="video-link__text">RazorClean Lawn Care Inc., is a full service landscaping company providing everything you need to create and maintain a beautiful and functional landscape. From installation to upkeep, RazorClean Lawn Care and Landscape does it all and does it well.</p>
                             
                                <a style="margin-top: 32px;" href="#" data-toggle="modal" data-target="#getQuote" class="btn btn-primary btn_with_icon btn-effect">GET A QUOTE<i class="icon arrow_carrot-right"></i></a>
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
                                    <div class="isotope-item renovations"> <img src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/isotop/400x320/1.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item plumbing"><img src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/isotop/400x320/2.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION </h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item interior"> <img src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/isotop/400x320/3.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item renovations"><img src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/isotop/400x320/4.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item renovations"> <img src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/isotop/400x320/5.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item buildings"> <img src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/isotop/400x320/6.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item interior"> <img src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/isotop/400x320/7.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item interior"> <img src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/isotop/400x320/8.jpg" width="400" height="320" alt="img">
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
                                                                            <a href="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/posts/370x220/1-1.png" class="prettyPhoto">
                                                                                    <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/posts/370x150/1.jpg" width="370" height="150" alt="Foto">
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
                                                            <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
                                                            <p>Maecenas er felis se mollis semper lobortis vitae phasellus commodo libero Vivamus sed dolor. Quisque portitor leoa tincidu rutrum urna turpis nullam consequat.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab2">
                                                            <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
                                                            <p>Mollis semper lobortis vitae phasellus commodo libero Vivamus sed dolor. Quisque portitor leoa tincidu rutrum urna turpis nullam consequat.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab3">
                                                            <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
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
                                <div class="banner__description">RazorClean Lawn Care is taking every step to be the best in the industry.</div>
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
                                        <div class="entry-header clearfix">
                                                <!-- <i class="icon icon_globe-2"></i> -->
                                            <div class="entry-header__wrap no-margin">
                                                <h3 class="entry-title ui-title-inner">RAZORCLEAN PROVIDES </h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                        </div>
                                        <div class="entry-media">
                                            <a href="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/posts/370x220/1-1.png" class="prettyPhoto">
                                                <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/posts/370x150/1.jpg" width="370" height="150" alt="Foto">
                                            </a>
                                        </div>
                                        <div class="entry-content">
                                            <p>RazorClean Lawn Care not only promises to deliver beautiful landscaping, but that you will never have to worry about clean-up. We leave every site immaculate. We are bonded and insured.</p>
                                        </div>
                                        
                                    </div>
                                </article>

                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="entry-header clearfix">
                                                                    <!-- <i class="icon icon_globe-2"></i> -->
                                <div class="entry-header__wrap no-margin">
                                    <h3 class="entry-title ui-title-inner no-margin">FAQ</h3>
                                    <div class="border-decor border-decor_mod-b"></div>
                                </div>
                            </div>
                            <div class="panel-group accordion" id="accordion-1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1">1. Lorem ipsum dolor <i class="icon"></i></a></h3>
                                    </div>
                                    <div id="collapse-1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Maecenas er felis se mollis semper lobortis vitae phasellus commodo libero Vivamus sed dolor. Quisque portitor leoa tincidu rutrum urna turpis nullam consequat.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-2">2. Lorem ipsum dolor<i class="icon"></i></a></h3>
                                    </div>
                                    <div id="collapse-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Fusce eleifend. Donec sapien sed phase lusa . Pellentesque lacus.Vivamus lorem arcu semper duiac. Cras ornare arcu vamus nda leo. Etiam ind arc morbi justo mauris temd pus pharetra interdum at congue semper purus.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-3">3. Lorem ipsum dolor<i class="icon"></i></a></h3>
                                    </div>
                                    <div id="collapse-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Fusce eleifend. Donec sapien sed phase lusa . Pellentesque lacus.Vivamus lorem arcu semper duiac. Cras ornare arcu vamus nda leo. Etiam ind arc morbi justo mauris temd pus pharetra interdum at congue semper purus.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-4">4. Lorem ipsum dolor<i class="icon"></i></a></h3>
                                    </div>
                                    <div id="collapse-4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Fusce eleifend. Donec sapien sed phase lusa . Pellentesque lacus.Vivamus lorem arcu semper duiac. Cras ornare arcu vamus nda leo. Etiam ind arc morbi justo mauris temd pus pharetra interdum at congue semper purus.</p>
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
                                                <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
                                                <p>Maecenas er felis se mollis semper lobortis vitae phasellus commodo libero Vivamus sed dolor. Quisque portitor leoa tincidu rutrum urna turpis nullam consequat.</p>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                                <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
                                                <p>Mollis semper lobortis vitae phasellus commodo libero Vivamus sed dolor. Quisque portitor leoa tincidu rutrum urna turpis nullam consequat.</p>
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                                <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
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
                        <div style="background-image:url(<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/bg/1.jpg)" class="bg-slide"></div>
                    </li>
                    <li>
                        <div style="background-image:url(<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/bg/1.jpg)" class="bg-slide"></div>
                    </li>
                </ul>

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="list-progress list-progress_mod-a list-unstyled">
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__wrap">
                                        <i class="icon icon1 flaticon-loupe"></i>
                                        <div class="list-progress__inner">
                                            <span class="list-progress__percent chart" data-percent="8960"><span class="percent"></span></span>
                                            <span class="list-progress__name">LOREM ISPUM</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__wrap">
                                        <i class="icon icon1 flaticon-check-square"></i>
                                        <div class="list-progress__inner">
                                            <span class="list-progress__percent chart" data-percent="230"><span class="percent"></span></span>
                                            <span class="list-progress__name">LOREM ISPUM</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__wrap">
                                        <i class="icon icon1 flaticon-leaves"></i>
                                        <div class="list-progress__inner">
                                            <span class="list-progress__percent chart" data-percent="60"><span class="percent"></span></span>
                                            <span class="list-progress__name">LOREM ISPUM</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__wrap">
                                        <i class="icon icon1 flaticon-communication"></i>
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
                                    <div class="clients clients_mod-a"> <a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/brand/1.png" height="57" width="90" alt="brand"> </a></div>
                                    <div class="clients clients_mod-a"> <a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/brand/2.png" height="46" width="111" alt="brand"> </a></div>
                                    <div class="clients clients_mod-a"> <a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/brand/3.png" height="46" width="107" alt="brand"> </a> </div>
                                    <div class="clients clients_mod-a"> <a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/brand/4.png" height="52" width="112" alt="brand"> </a> </div>
                                    <div class="clients clients_mod-a"> <a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/brand/5.png" height="36" width="118" alt="brand"> </a> </div>
                                    <div class="clients clients_mod-a"><a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/media/brand/6.png" height="53" width="120" alt="brand"> </a> </div>
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
                                <h2 class="title-w-bg__inner">Latest from blog<a class="btn btn-effect" href="<?php echo base_url()."service/".$page?>">Read Full Blog</a></h2>
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
                                <div class="footer__logo"><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/img/logo3.png" height="" width="210" alt="logo"></div>
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

        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/js/jquery-migrate-1.2.1.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/js/waypoints.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/js/modernizr.custom.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/js/cssua.min.js"></script>


        <!--SCRIPTS THEME-->

        <!-- Home slider -->
        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/plugins/slider-pro/dist/js/jquery.sliderPro.js"></script>
        <!-- Sliders -->
        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
        <!-- Isotope -->
        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/plugins/isotope/isotope.pkgd.min.js"></script>
        <!-- Modal -->
        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
        <!-- Chart -->
        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <!-- Animation -->
        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/plugins/scrollreveal/dist/scrollreveal.min.js"></script>
        <!-- Flickr-->
        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/plugins/jflickrfeed/jflickrfeed.min.js" ></script>
        <!-- Menu for android-->
        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/js/doubletaptogo.js" ></script>

        <!-- Custom -->
        <script src="<?php echo base_url() ?>media/landing-pages/lawn-care/assets/js/custom.js"></script>
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
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
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


