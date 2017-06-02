<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
        <title>Razor Clean Foundation</title>

        <link href="favicon.png" type="image/x-icon" rel="shortcut icon">
        <link href="<?php echo base_url() ?>media/landing-pages/foundation/assets/css/master.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/plugins/jquery/jquery-1.11.3.min.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/js/modernizr.custom.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/js/jquery.nav.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/js/script.js"></script>
        <script>
            var base_url = '<?php echo base_url() ?>';
            var page_name = '<?php echo $page; ?>';
        </script>
       
    </head>


    <body>
<div id="sticky-anchor"></div>
        <!-- Loader -->
        <!--div id="page-preloader"><span class="spinner"></span></div-->
        <!-- Loader end -->


        <div class="layout-theme animated-css" id="wrapper" data-header="sticky" data-header-top="200">

            <!-- HEADER -->
            <header class="header header_mod-a">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-12"> <a href="index.html" class="logo"> <img src="<?php echo base_url() ?>media/landing-pages/foundation/assets/img/logo3.png" width="250" height="55" alt="logo"></a> </div>
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
                                <div class="header-contacts__info">1-855-GO-RZCLN (467- 9256)</div>
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
                        <img class="sp-image img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/slider/1.jpg" height="580" width="1600" alt="slider">

                        <h1 class="main-slider__title sp-layer"
                            data-horizontal="13vw"
                            data-vertical="35%"
                            data-show-transition="up"
                            data-hide-transition="left"
                            data-show-duration="800"
                            data-show-delay="400"
                            data-hide-delay="400">
                            We strive to give every child the <br>
                            <strong>BEST START IN LIFE.</strong>
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
                            <!--p class="main-slider__text">
				Variety is dedicated to inspiring hope, enriching lives and building a better future for the children.
                            </p>
                            <div class="border-decor border-decor_mod-a"></div-->
                        </div>
                    </div>
                    <!-- end sp-slide -->

                    <!-- Slide 2 -->
                    <div class="sp-slide">
                        <img class="sp-image img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/slider/2.jpg" height="580" width="1600" alt="slider">

                        <h2 class="main-slider__title sp-layer"
                            data-horizontal="13vw"
                            data-vertical="35%"
                            data-show-transition="up"
                            data-hide-transition="left"
                            data-show-duration="800"
                            data-show-delay="400"
                            data-hide-delay="400">
                            We ENCOURAGE children to take <br>
                            their disabilities in stride.
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
                            <!--p class="main-slider__text">Vivamus elementum laoreet lorem. Maecenas erat felis sed mollis semper lobortis vitae phasellus commodo libero</p>
                            <div class="border-decor border-decor_mod-a"></div-->
                        </div>
                    </div>
                    <!-- end sp-slide -->

                </div>
            </div>

            <div id="cstm-about" class="section-banner ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h2 class="ui-title-block text-uppercase text-center">Our Cause</h2>
                            <div class="ui-subtitle-block ui-subtitle-block_large text-center">
                               RazorClean Foundation
                                <div class="border-decor border-decor_mod-b center-element"></div>
                            </div>

                            <p class="fnt20 fnt-monserrat">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
RazorClean Foundation believes every child deserves a quality education and a chance to live in a clean and safe environment. 
Creating the RazorClean Foundation has empowered communities to stress education and the importants of happiness through clean. 
Insuring that lives and communities are RazorClean, Safe, and Progressive. Together with the RazorClean customers, owner, 
friends and members -has banded together to provide greater awareness and support for education and clean living.
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>

                            <div class="col-md-3 col-sm-6 main-hover">
                                <div class="image-who-we-are">

                                </div>
                                <div class="description-div">
                                    <h3>Who we are</h3>
                                    <h5>Find out more about our history, where your donation goes, and the volunteers who make it all possible.</h5>
                                </div>

                            </div>
                            <div class="col-md-3 col-sm-6 main-hover">
                                <div class="image-fund">

                                </div>
                                <div class="description-div">
                                    <h3>Fundraising & events</h3>
                                    <h5>Learn more about specific events, activities, and fundraisers.</h5>
                                </div>

                            </div>

                            <div class="col-md-3 col-sm-6 main-hover">
                                <div class="image-news">

                                </div>
                                <div class="description-div">
                                    <h3>News/MEDIA</h3>
                                    <h5>Stay up to date on all the latest official announcements and sign up to receiveour newsletter.</h5>
                                </div>

                            </div>

                            <div class="col-md-3 col-sm-6 main-hover">
                                <div class="image-support">

                                </div>
                                <div class="description-div">
                                    <h3>Support</h3>
                                    <h5>Learn how you can help Variety to fulfill its mission and apply for grants.</h5>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- /section-banner -->


            <div  class="section-banner section-bg-2 ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner" id="banner01" style="text-align:center">
                                <div class="banner__description">
				When you donate you support programs in the areas of Education, Health Care and Mobility that will provide lifesaving 
and life-changing assistance to disabled, abused and disadvantaged children.
				</div>
                                <div class="banner__btn-wrap" style="float:none !important;">

                                    <a href="javascript:;" class="button1 btn btn-primary btn_with_icon btn-effect ">CONTACT NOW <i class="icon arrow_carrot-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /section-banner -->


            <div id="cstm-services" class="section-area ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-default border-top">
                                <h2 class="ui-title-block text-uppercase text-center">OUR services</h2>
                                <div class="ui-subtitle-block ui-subtitle-block_large text-center">
				Variety works hard to make sure that we get the greatest benefit possible from every dollar we receive. 
				</div>
                                <div class="carousel_mod-b owl-carousel owl-theme enable-owl-carousel"
                                     data-min480="1"
                                     data-min768="2"
                                     data-min992="2"
                                     data-min1200="3"
                                     data-pagination="false"
                                     data-navigation="true"
                                     data-auto-play="4000"
                                     data-stop-on-hover="true">

                                    <article class="post post_mod-a clearfix">
                                        <div class="entry-media">
                                            <a href="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/posts/370x220/1.jpg" class="prettyPhoto">
                                                <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/posts/370x220/1.jpg" width="370" height="220" alt="Foto">
                                            </a>
                                        </div>
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                
                                                <div class="entry-header__wrap no-margin">
                                                    <h3 class="entry-title ui-title-inner"><a href="blog-details.html">HEALTHCARE</a></h3>
                                                    <div class="border-decor border-decor_mod-b"></div>
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Children battling illness need relief from the pain and chaos of treatments. Variety supports camps and programs for kids affected by HIV/AIDS, Cancer, and other life threatening illness.</p>
                                            </div>
                                            <a class="link" href="blog-details.html">READ MORE</a>
                                        </div>
                                    </article>

                                    <article class="post post_mod-a clearfix">
                                        <div class="entry-media">
                                            <a href="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/posts/370x220/2.jpg" class="prettyPhoto">
                                                <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/posts/370x220/2.jpg" width="370" height="220" alt="Foto">
                                            </a>
                                        </div>
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                               
                                                <div class="entry-header__wrap no-margin">
                                                    <h3 class="entry-title ui-title-inner"><a href="blog-details.html">EDUCATION</a></h3>
                                                    <div class="border-decor border-decor_mod-b"></div>
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Variety supports organizations which provide underprivileged children and at-risk youth the tools necessary to pursue their education and dreams, and to overcome the barriers of poverty, poor performing schools and high levels of unemployment.</p>
                                            </div>
                                            <a class="link" href="blog-details.html">READ MORE</a>
                                        </div>
                                    </article>

                                    <article class="post post_mod-a clearfix">
                                        <div class="entry-media">
                                            <a href="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/posts/370x220/3.jpg" class="prettyPhoto">
                                                <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/posts/370x220/3.jpg" height="220" width="370" alt="Foto">
                                            </a>
                                        </div>
                                        <div class="entry-main">
                                            <div class="entry-header clearfix">
                                                
                                                <div class="entry-header__wrap no-margin">
                                                    <h3 class="entry-title ui-title-inner"><a href="blog-details.html">MOBILITY</a></h3>
                                                    <div class="border-decor border-decor_mod-b"></div>
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                <p>No child should miss out on the simple pleasures of childhood because his or her family cannot afford the necessary equipment. Variety's Mobility Program steps in where insurance and other funding step out.</p>
                                            </div>
                                            <a class="link" href="blog-details.html">READ MORE</a>
                                        </div>
                                    </article>

                                </div><!-- /carousel -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /section-area -->


            <div id="cstm-quote" class="postn"></div>
            <section class="section-default section-bg-1 video-link ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="prettyPhoto" href="https://www.youtube.com/watch?v=DIGfO2Dgc9Y&rel=0">
                                <div class="video-link__img"><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/menu/promo.jpg" width="550" height="250" alt="video"></div>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <div class="video-link__wrap">
                                <h2 class="ui-title-block">DONATE</h2>
                                <div class="ui-subtitle-block ui-subtitle-block_mod-a">

                                    <div class="border-decor border-decor_mod-a mt10"></div>
                                </div>


                                <div class="col-md-6 col-sm-6 main-hover main-hover1">
                                    <a href="#" data-toggle="modal" data-target="#getQuote">
                                        <div class="image-donate">

                                        </div>
                                        <div class="description-div">
                                            <h3>Donate</h3>
                                            <h5>Get involved and help Variety to help children.</h5>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-md-6 col-sm-6 main-hover main-hover1">
                                    <div class="image-volunteer">

                                    </div>
                                    <div class="description-div">
                                        <h3>Volunteer</h3>
                                        <h5>Join our volunteer database so you can donate your time, or send us a donation.</h5>
                                    </div>
                                </div>




<!-- <a href="#" data-toggle="modal" data-target="#getQuote" class="btn btn-primary btn_with_icon btn-effect ">GET A QUOTE<i class="icon arrow_carrot-right"></i></a> -->
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
                                    <div class="isotope-item renovations"> <img src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/isotop/400x320/1.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item plumbing"><img src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/isotop/400x320/2.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION </h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item interior"> <img src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/isotop/400x320/3.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item renovations"><img src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/isotop/400x320/4.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item renovations"> <img src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/isotop/400x320/5.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item buildings"> <img src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/isotop/400x320/6.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item interior"> <img src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/isotop/400x320/7.jpg" width="400" height="320" alt="img">
                                            <div class="isotope__hover">
                                                    <div class="isotope__inner">
                                                            <h3 class="isotope__title">EXTERIOR DECORATION</h3>
                                                            <a class="btn btn-default btn-effect" href="project-details.html" >View Details</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="isotope-item interior"> <img src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/isotop/400x320/8.jpg" width="400" height="320" alt="img">
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
                                                                            <a href="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/posts/370x220/1-1.png" class="prettyPhoto">
                                                                                    <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/posts/370x150/1.jpg" width="370" height="150" alt="Foto">
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
                                                            <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
                                                            <p>Maecenas er felis se mollis semper lobortis vitae phasellus commodo libero Vivamus sed dolor. Quisque portitor leoa tincidu rutrum urna turpis nullam consequat.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab2">
                                                            <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
                                                            <p>Mollis semper lobortis vitae phasellus commodo libero Vivamus sed dolor. Quisque portitor leoa tincidu rutrum urna turpis nullam consequat.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab3">
                                                            <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
                                                            <p>Leoa tincidu rutrum urna turpis nullam consequat.</p>
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
            </div><!-- /section-default -->

            <div id="cstm-career" class="postn"></div>
            <section class="section-area ">
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

            <div  class="section-banner section-bg-2 ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner" id="banner01">
                                <div class="banner__description"> We look forward to hearing from you.</div>
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

            <div class="section-default ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="carousel ">
                                <article class="post post_mod-b clearfix">
                                    <div class="entry-main">
                                        <div class="entry-header clearfix">
                                                <!-- <i class="icon icon_globe-2"></i> -->
                                            <div class="entry-header__wrap no-margin">
                                                <h3 class="entry-title ui-title-inner">MAKE A DONATION</h3>
                                                <div class="border-decor border-decor_mod-b"></div>
                                            </div>
                                        </div>
                                        <div class="entry-media">
                                            <a href="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/posts/370x220/1-1.png" class="prettyPhoto">
                                                <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/posts/370x150/1.jpg" width="370" height="150" alt="Foto">
                                            </a>
                                        </div>
                                        <div class="entry-content">
                                            <p>
					    Healthcare, Education, and Mobility. Within each of these three areas, Variety works hard to make sure that we get the greatest benefit possible from every dollar we receive. 
					    </p>
                                        </div>
                                        <a class="link" href="blog-details.html">READ MORE</a>
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
                                                <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
                                                <p>Maecenas er felis se mollis semper lobortis vitae phasellus commodo libero Vivamus sed dolor. Quisque portitor leoa tincidu rutrum urna turpis nullam consequat.</p>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                                <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
                                                <p>Mollis semper lobortis vitae phasellus commodo libero Vivamus sed dolor. Quisque portitor leoa tincidu rutrum urna turpis nullam consequat.</p>
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                                <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/posts/370x150/1.jpg" height="150" width="370" alt="foto">
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
                        <div style="background-image:url(<?php echo base_url() ?>media/landing-pages/foundation/assets/media/slider/1.jpg)" class="bg-slide"></div>
                    </li>
                    <li>
                        <div style="background-image:url(<?php echo base_url() ?>media/landing-pages/foundation/assets/media/slider/2.jpg)" class="bg-slide"></div>
                    </li>
                </ul>

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="list-progress list-progress_mod-a list-unstyled">
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__wrap">
                                        <i class="icon icon1 flaticon-book"></i>
                                        <div class="list-progress__inner">
                                            <span class="list-progress__percent chart" data-percent="8960"><span class="percent"></span></span>
                                            <span class="list-progress__name">LOREM ISPUM</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__wrap">
                                        <i class="icon icon1 flaticon-transport"></i>
                                        <div class="list-progress__inner">
                                            <span class="list-progress__percent chart" data-percent="230"><span class="percent"></span></span>
                                            <span class="list-progress__name">LOREM ISPUM</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__wrap">
                                        <i class="icon icon1 flaticon-donation"></i>
                                        <div class="list-progress__inner">
                                            <span class="list-progress__percent chart" data-percent="60"><span class="percent"></span></span>
                                            <span class="list-progress__name">LOREM ISPUM</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__wrap">
                                        <i class="icon icon1 flaticon-happy-kids"></i>
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

            <div class="section-default section-bg-1 " >

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
                                    <div class="clients clients_mod-a"> <a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/brand/1.png" height="57" width="90" alt="brand"> </a></div>
                                    <div class="clients clients_mod-a"> <a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/brand/2.png" height="46" width="111" alt="brand"> </a></div>
                                    <div class="clients clients_mod-a"> <a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/brand/3.png" height="46" width="107" alt="brand"> </a> </div>
                                    <div class="clients clients_mod-a"> <a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/brand/4.png" height="52" width="112" alt="brand"> </a> </div>
                                    <div class="clients clients_mod-a"> <a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/brand/5.png" height="36" width="118" alt="brand"> </a> </div>
                                    <div class="clients clients_mod-a"><a class="clients__link" href="home-1.html"><span class="helper-2"></span><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/media/brand/6.png" height="53" width="120" alt="brand"> </a> </div>
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
                       <!--<div class="col-md-3">
                            <section class="section_mod-h">
                                <h2 class="ui-title-inner ui-title-inner_small text-uppercase">CONTACT INFO.</h2>
                                <div class="border-decor border-decor_mod-b border-decor_mod-e"></div>
                                <ul class="list-contacts">
                                    <li class="list-contacts__item"><i class="icon icon_pin"></i>6929 JFK Blvd. #20-286 <br>
North Little Rock, AR 72116 </li>
                                    <li class="list-contacts__item"><i class="icon icon_phone"></i>1-855-GO-RZCLN (467- 9256)</li>
                                    <li class="list-contacts__item"><i class="icon icon_mail"></i><a class="list-contacts__link" href="mailto:signup@razorcleanmaids.com">signup@razorcleanmaids.com</a></li>
                                   
                                    <li class="list-contacts__item"><i class="icon icon_clock"></i> Mon - Fri: 8:00 a.m. - 8:00 p.m.</li>
                                </ul>
                            </section>
                        </div>-->
                        <div class="col-md-12">
                            <section class="section_mod-h">
                                <h2 class="ui-title-inner ui-title-inner_small text-uppercase">SEND US A MESSAGE</h2>
                                <div class="border-decor border-decor_mod-b border-decor_mod-e"></div>
                                <div id="contacttatus_error" class="form-contact__info text-success"></div>
                                <form id="submitContactFrm" class="form-contact ui-form"  method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input class="form-control" type="hidden" name="service_category" value="<?php echo $page ?>" id="user-name" placeholder="Your Name" required>
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

            <section class="section-area ">
                <div class="title-w-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <h2 class="title-w-bg__inner">Latest from blog<a class="btn btn-effect" href="services.html">Read Full Blog</a></h2>
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

                                    <?php if (!empty($blogs)) {
                                        foreach ($blogs as $blogs) { ?>
                                            <article class="post post_mod-e clearfix">
                                                <div class="entry-media">
                                                    <a href="<?php echo base_url() ?>uploads/blogs/<?php echo $blogs['blog_image'] ?>" class="prettyPhoto">
                                                        <img class="img-responsive" src="<?php echo base_url() ?>uploads/blogs/<?php echo $blogs['blog_image'] ?>" style="height:214px" alt="Foto">
                                                    </a>
                                                </div>
                                                <div class="entry-date"><span class="entry-date__number"><?php echo date("d", strtotime($blogs['posted_on'])) ?></span><?php echo date("M", strtotime($blogs['posted_on'])) ?></div>
                                                <div class="entry-main">
                                                    <div class="entry-header clearfix">
                                                        <h3 class="entry-title ui-title-inner"><a href="<?php echo base_url() . $blogs['slug'] ?>"><?php echo $blogs['post_title'] ?></a></h3>
                                                        <div class="border-decor border-decor_mod-b"></div>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p><?php echo substr($blogs['post_content'], '0', '116'); ?></p>
                                                    </div>
                                                </div>
                                            </article>
    <?php }
} else {
    echo "<h3>No blogs found</h3>";
} ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<div id="customHeading" style="
    background: #0081ff;padding:13px 0;color:#fff
">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 style="font-size:30px" class="section-heading"><marquee><i class="fa fa-angle-double-left" aria-hidden="true"></i> RazorClean, The Circle of Trust. Save Money, Live RazorClean</marquee></h2>
            </div>
        </div>
    </div>
</div>
<style>
.main-footer {
	background-color: #444444;
	width: 100%;
}

.copyright-text {
    color: #999;
    font-size: 13px;
    text-align: center;
    line-height: 61px;
}

.social-links {
	list-style:none;
	margin-top: 15px;
}

.social-links li { 
	width: 35px;
	height: 35px;
	border-radius: 50%;
	background-color: #272727;
	text-align: center;
	line-height: 36px;
	float: left;
	margin-right: 5px;
}

.social-links li a {
	color:#fff;
} 

.social-links .facebook:hover {
	background: #5c7ff6;
} 

.social-links .twitter:hover {
	background: #22d5e3;
}

.social-links .google:hover {
	background: #f82d2d;
}

.copyright-text, .social-links {
	width: 21%;
	float:left;
}

.leftDiv {
	width:16%;
	float:left;
}

@media all and (max-width: 425px) and (min-width: 200px) {
  .copyright-text, .social-links {
		width: 100%;
		line-height: 30px;
  }
  
  .social-links {
	    padding-left: 35%;
		margin-botttom:20px;
  }
}
</style>

<footer class="main-footer">
    <div class="container">
	      <div class="leftDiv"><img width="200" src="<?php echo frontend_asset_url()?>img/logow.png"></div>
	
           <span class="copyright-text">&copy; Copyright <?php echo date("Y")?> - RazorClean Foundation </span>
           
		   <span class="copyright-text">Call- 1-855 GO RZCLN (467-9256)</span>
        
		   <span class="copyright-text">Email- signup@rzclnhousecleaning.com</span>
		   
		   <ul class="social-links">
				<li class="facebook">
					<a target="_blank" href="<?php echo $global_setting['facebook_link']?>">
					<i class="fa fa-facebook" aria-hidden="true"></i>
					</a>
				</li>
				<li class="twitter">
					<a target="_blank" href="<?php echo $global_setting['twitter_link']?>">
					<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>
				</li>
				<li class="google">
					<a target="_blank" href="<?php echo $global_setting['google_link']?>">
					<i class="fa fa-google-plus" aria-hidden="true"></i>
					</a>
				</li>
			</ul>
    </div>
</footer>

            <!--footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer__section">
                                <div class="footer__logo"><img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/foundation/assets/img/logo3.png" height="" width="210" alt="logo"></div>
                                <div class="footer__info">
                                     <p>
These simple, yet powerful values have continually guided our decision making as well as our interactions with our customers/members and each other. Our company is based on the belief that our customers/members needs are of the utmost importance. Our entire team is committed to meeting those needs. As a result, a high percentage of our business is from repeat customers and referrals.
				</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                   <ul class="social-links list-inline">
                                                <li><a target="_blank" href="<?php echo $global_setting['facebook_link'] ?>"><i class="ic social_facebook"></i></a></li>
                                                <li><a target="_blank" href="<?php echo $global_setting['twitter_link'] ?>"><i class="ic social_twitter"></i></a></li>
                                                <li><a target="_blank" href="<?php echo $global_setting['youtube_link'] ?>"><i class="ic social_youtube"></i></a></li>
                                                <li><a target="_blank" href="<?php echo $global_setting['instagram_link'] ?>"><i class="ic social_instagram"></i></a></li>
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
            </footer-->

        </div>
        <!-- end layout-theme -->


        <!-- SCRIPTS MAIN -->

        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/js/jquery-migrate-1.2.1.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/js/waypoints.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/js/modernizr.custom.js"></script>
        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/js/cssua.min.js"></script>


        <!--SCRIPTS THEME-->

        <!-- Home slider -->
        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/plugins/slider-pro/dist/js/jquery.sliderPro.js"></script>
        <!-- Sliders -->
        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
        <!-- Isotope -->
        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/plugins/isotope/isotope.pkgd.min.js"></script>
        <!-- Modal -->
        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
        <!-- Chart -->
        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <!-- Animation -->
        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/plugins/scrollreveal/dist/scrollreveal.min.js"></script>
        <!-- Flickr-->
        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/plugins/jflickrfeed/jflickrfeed.min.js" ></script>
        <!-- Menu for android-->
        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/js/doubletaptogo.js" ></script>

        <!-- Custom -->
        <script src="<?php echo base_url() ?>media/landing-pages/foundation/assets/js/custom.js"></script>
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
                        <?php $session = $this->session->userdata('user_account'); if(isset($msg) && $msg !='') echo $msg; ?>
                        <div class="col-xs-6">
                            <div class="well modal-bg">
                                <form id="donationFrm" method="POST" action="<?php echo base_url()?>backend/donate/foundationDonate">
                                    <div class="form-group">
                                        <!-- <label for="username" class="control-label">Username</label> -->
                                        <input type="text" class="form-control" value="<?php echo $session['fname']." ". $session['lname']?>" id="" name="name" value="" required=""  placeholder="Enter Name">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" value="<?php echo $session['email']?>" id="" name="email" value="" required=""  placeholder="Email Id">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $session['phone']?>" id="" name="phone" value="" required=""  placeholder="Phone Bumber">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" name="amount" value="" required=""  placeholder="Amout to donate">
<!--                                        <select class="form-control">
                                            <option>4$</option>
                                            <option>8$</option>
                                            <option>12$</option>
                                            <option>16$</option>
                                            <option>20$</option>
                                        </select>-->

                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="message" name="message" class="form-control" required placeholder="Message"></textarea>
                                        <span class="help-block"></span>
                                    </div>
                                    <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                                    <!--div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" id="remember"> Remember login
                                        </label>
                                        <p class="help-block">(if this is a private computer)</p>
                                    </div-->
                                    <button type="submit" id="dontateBtn" class="btn btn-success btn-block btn btn-primary btn_with_icon btn-effect ">Submit</button>

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


        <!--div id="rightSLideBar" class="hidden-xs hidden-sm">
            <div class="panel1 panel-default">
                <div class="panel-leftheading">
                    <h3 class="panel-lefttitle"><i class="fa fa-users"></i> Lorem ipsum <br> dolor sit amet</h3>
                </div>
                <div class="panel-rightbody">
                    <div class="col-md-3">
                        <img src="<?php echo base_url() ?>media/landing-pages/foundation/assets/img/family.png" alt="">
                    </div>
                    <div class="col-md-8">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet mollis massa. Donec sollicitudin libero quis ultrices scelerisque. Maecenas at eros sed sem faucibus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultrices egestas lacus ut pellentesque.</p>
                    </div>

                    <div id="botcell">
                        <div class="header-contacts" style="text-align:center;margin-left:20px;">
                            <i class="icon icon_phone header-call" style="font-size:16px;color:#fff"></i>
                            <div class="header-contacts__name" style="font-size:16px;color:#fff">Call Support</div>
                            <div class="header-contacts__info" style="font-size:16px;color:#fff">0800.123.9876</div>
                        </div>

                        <div class="header-contacts" style="text-align:center;">
                            <i class="fa fa-map-marker header-call" style="font-size:16px;color:#fff"></i>
                            <div class="header-contacts__name" style="font-size:16px;color:#fff">Lorem ipsum </div>
                            <div class="header-contacts__info" style="font-size:16px;color:#fff">dolor sit amet</div>
                        </div>
                    </div>


                </div>
                <div class="clearfix">
                </div>
            </div>
        </div-->	
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
		
		
		
		
		
		
<iframe src="<?php echo base_url()?>razorclean/stickyfooter" style="width: 100%;height: 66px;padding-top: 0px;position: fixed;bottom: 0;background: rgba(0, 0, 0, 0.45);z-index: 99999;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0"></iframe>

    </body>
</html>


