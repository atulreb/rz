<?php $this->load->view('partials/l_header') ?>

<link re='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<div class="entry-content" itemprop="text"><style>

        section#contact {
            background-color: #222222;
            background-image: url('http://artdnaswitchbd.com/componants/images/map-image.png');
            background-position: center;
            background-repeat: no-repeat;
        }
        section {
            padding: 30px 0PX;
        }
        section#contact .section-heading {
            color: white;
        }
        section#contact .form-group {
            margin-bottom: 25px;
        }
        section#contact .form-group input,
        section#contact .form-group textarea {
            padding: 20px;
        }
        section#contact .form-group input.form-control {
            height: auto;
        }
        section#contact .form-group textarea.form-control {
            height: 236px;
        }
        section#contact .form-control:focus {
            border-color: #fed136;
            box-shadow: none;
        }
        section#contact ::-webkit-input-placeholder {
            font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-transform: uppercase;
            font-weight: 700;
            color: #eeeeee;
        }
        .gellary_bg_none img{
            width: 100%;
            height: 250px;
        }
        section#contact :-moz-placeholder {
            /* Firefox 18- */
            font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-transform: uppercase;
            font-weight: 700;
            color: #eeeeee;
        }
        section#contact ::-moz-placeholder {
            /* Firefox 19+ */
            font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-transform: uppercase;
            font-weight: 700;
            color: #eeeeee;
        }
        section#contact :-ms-input-placeholder {
            font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-transform: uppercase;
            font-weight: 700;
            color: #eeeeee;
        }
        section#contact .text-danger {
            color: #e74c3c;
        }

        .about_our_company{
            text-align: center;
        }
        .about_our_company h1{
            font-size: 25px;
        }
        .titleline-icon {
            position: relative;
            max-width: 100px;
            border-top: 4px double #F99700;
            margin: 20px auto 20px;
        }
        .titleline-icon:after {
            position: absolute;
            top: -11px;
            left: 0;
            right: 0;
            margin: auto;
            font-family: 'FontAwesome';
            content: "\f141";
            font-size: 20px;
            line-height: 1;
            color: #F99700;
            text-align: center;
            vertical-align: middle;
            width: 40px;
            height: 20px;
            background: #ffffff;
        }
        #rspstatus3 p{color:#fff !important}

    </style>
     <div class="site-inner">
                <div class="wrap">
                    <div class="content-sidebar-wrap">
                        <main class="content">
                            <article class="post-2573 page type-page status-publish entry" itemscope itemtype="http://schema.org/CreativeWork">
                                <header class="entry-header"><h1 class="entry-title" itemprop="headline">Floor Maintenance</h1> 
                                </header>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <div class="jumbotron-sm" style='margin-top:20px'>
        <div class="container">
            <div class="row">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
    <section id="contact" style="">
        <div class="container">
            <div class="row">
                <div class="about_our_company" style="margin-bottom: 20px;">
                    <h1 style="color:#fff;">Write Your Message</h1>
                    <div class="titleline-icon"></div>
                    <p style="color:#fff;">Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div id='rspstatus3'></div>
                    <form name="sentMessage" id="contactform2" >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name='contact_name' class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                                    <input type='hidden' name='service_category' value='Building Services'>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name='contact_email' class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" name='contact_phone' class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name='contact_message' placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" id='submitfrm' class="btn btn-xl get">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <p style="color:#fff;">
                        <strong><i class="fa fa-map-marker"></i> Address</strong><br>
                        1216/Mirpur_10 Beach, Dhaka(Bangladesh)
                    </p>
                    <p style="color:#fff;"><strong><i class="fa fa-phone"></i> Phone Number</strong><br>
                        (+8801)7123456</p>
                    <p style="color:#fff;">
                        <strong><i class="fa fa-envelope"></i>  Email Address</strong><br>
                        Email@info.com</p>
                    <p></p>
                </div>
            </div>
        </div>
    </section>

</div></article>
</main>
<aside class="sidebar sidebar-primary widget-area" role="complementary" aria-label="Primary Sidebar" itemscope itemtype="http://schema.org/WPSideBar">
    <section id="text-7" class="widget widget_text">
        <div class="widget-wrap">		
            <div class="textwidget"><a href="../get-a-quote/index.html">
                    <img src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/01/bigquote-btn.png"></a>
            </div>

        </div>
    </section>
    <section id="text-2" class="widget widget_text"><div class="widget-wrap"><h4 class="widget-title widgettitle">Association Involvement</h4>
            <div class="textwidget"><p style="padding-left:70px;"><a href="http://www.bbb.org/" target="_blank"><img src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/02/bbb-aplus-rating1.jpg" alt="Better Business Bureau" style="
                                                                                                                     width: 125px;
                                                                                                                     margin-left: -26px;
                                                                                                                     "></a></p>

                <p style="
                   padding-left:50px;
                   width: 170px;"><img src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/02/CPAA_logo.jpg" alt="CPAA Certified" /></a></p>
            </div>
        </div></section>
</aside></div><aside class="sidebar sidebar-secondary widget-area" role="complementary" aria-label="Secondary Sidebar" itemscope itemtype="http://schema.org/WPSideBar"></aside></div></div>
<?php $this->load->view('partials/l_footer') ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function () {
        jQuery("#contactform2").submit(function (e) {
            jQuery("#submitfrm").html('Please wait...');
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var url = "<?php echo base_url() ?>landing-pages/building_services/submitContactForm1"; // the script where you handle the form input.
            alert(url);
            jQuery.ajax({
                type: "POST",
                url: url,
                data: jQuery("#contactform2").serialize(), // serializes the form's elements.
                dataType: "json",
                success: function (data) {
                    jQuery("#submitfrm").html('Send Message');
                    if (data.status === '0') {
                        jQuery("#rspstatus3").html("<span style='color:#fff !important'>" + data.msg + "</span>");
                    } else {
                        jQuery("#rspstatus3").html("<span style='color:green'><b>" + data.msg + "</b></span>");
                        jQuery('#contactform2')[0].reset();
                    }
                }
            });


        });
    });
</script>