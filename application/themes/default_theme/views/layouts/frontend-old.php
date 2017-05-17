<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $template['title']; ?></title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo frontend_asset_url() ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?php echo frontend_asset_url() ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!-- Plugin CSS -->
        <link href="<?php echo frontend_asset_url() ?>vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
        <!-- CSS Styles -->
        <link href="<?php echo frontend_asset_url() ?>css/creative.css" rel="stylesheet">
        <link href="<?php echo frontend_asset_url() ?>css/custom.css" rel="stylesheet">
        <link href="<?php echo frontend_asset_url() ?>css/custom-responsive.css" rel="stylesheet">
        <link href="<?php echo frontend_asset_url() ?>css/jquery.mCustomScrollbar.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo frontend_asset_url() ?>slick/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php echo frontend_asset_url() ?>slick/slick-theme.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <?php if ($page == 'contact') { ?>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTedM0VXyLBD-u_-6CWfkOzAP0GAFljAo&callback=initMap"
            async defer></script>
        <?php } ?>
        <script type="text/javascript">
            var base_url = '<?php echo base_url() ?>';
            var asset_url = '<?php echo frontend_asset_url() ?>';
            var vpage = '<?php echo $page; ?>';

        </script>
        <?php if ($page == 'product_details' || $page == 'shop' || $page == 'bloglist') { ?>
            <link rel="stylesheet" type="text/css" href="<?php echo frontend_asset_url() ?>css/pgwslider.min.css">
        <?php } ?>
    </head>

    <body id="page-top">
        <?php
        if (isset($template['partials']['header'])) {
            echo $template['partials']['header'];
        }
        ?>
        <?php echo $template['body']; ?>

        <?php
        if (isset($template['partials']['footer'])) {
            echo $template['partials']['footer'];
        }
        ?>
        <!-- jQuery -->
        <script src="<?php echo frontend_asset_url() ?>vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo frontend_asset_url() ?>vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
        <script src="<?php echo frontend_asset_url() ?>vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="<?php echo frontend_asset_url() ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <!-- Theme JavaScript -->
        <script src="<?php echo frontend_asset_url() ?>js/creative.min.js"></script>
        <script src="<?php echo frontend_asset_url() ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?php echo frontend_asset_url() ?>slick/slick.js" type="text/javascript" charset="utf-8"></script>

        <script type="text/javascript">
            $(document).on('ready', function () {
                $(".regular").slick({
                    infinite: true,
                    slidesToShow: 8,
                    slidesToScroll: 1,
                });

            });
           $(document).on('ready', function() {
               $(".testiMonial").slick({

                   infinite: true,
                   slidesToShow: 1,
                   slidesToScroll: 1,
                     responsive: [
       {
         breakpoint: 1024,
         settings: {
           slidesToShow: 3,
           slidesToScroll: 3,
           infinite: true,
           dots: true
         }
       },
       {
         breakpoint: 800,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1
         }
       },
       {
         breakpoint: 600,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1
         }
       },
       {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1
         }
       }

     ]
               });

           });
        </script>


        <script>
            $(window).scroll(function () {
                if ($(".navbar").offset().top > 50) {
                    $('#custom-nav').addClass('affix');
                    $(".navbar-fixed-top").addClass("top-nav-collapse");
                    $('.navbar-brand img').attr('src', '<?php echo frontend_asset_url() ?>img/logob.png'); //change src
                } else {
                    $('#custom-nav').removeClass('affix');
                    $(".navbar-fixed-top").removeClass("top-nav-collapse");
                    $('.navbar-brand img').attr('src', '<?php echo frontend_asset_url() ?>img/logow.png')
                }
            });
            $(document).on('ready', function () {
                $(".regular").slick({
                    infinite: true,
                    slidesToShow: 8,
                    slidesToScroll: 1
                });

            });
            $(document).on('ready', function () {
                $(".testiMonial").slick({
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 1
                });

            });

        </script>
        <script>
            $(document).ready(function () {
                $('#media1').carousel({
                    pause: true,
                    interval: false,
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $('#media').carousel({
                    pause: true,
                    interval: false,
                });
            });
        </script>
        <script>
            $(function () {
                $('[data-toggle=popover]').popover({
                    trigger: 'hover',
                    html: true,
                    content: function () {
                        return $('#ToolMenu').html();
                    },
                    animation: true,
                    delay: {show: 300, hide: 100}
                })
            });
        </script>
        <script>
            function initMap() {
                // Create a map object and specify the DOM element for display.
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: -34.397, lng: 150.644},
                    scrollwheel: false,
                    zoom: 8
                });
            }

        </script>

        <script>
            (function ($) {
                $(window).on("load", function () {
                    $(".content, #accordion1").mCustomScrollbar();
                    //  alert('hi');
                });
            })(jQuery);
        </script>

        <?php if ($page == 'calendar') { ?>
            <script>

                $.getScript('http://arshaw.com/js/fullcalendar-1.6.4/fullcalendar/fullcalendar.min.js', function () {

                    var date = new Date();
                    var d = date.getDate();
                    var m = date.getMonth();
                    var y = date.getFullYear();

                    $('#calendar').fullCalendar({
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,agendaWeek,agendaDay'
                        },
                        editable: true,
                        events: [
                            {
                                title: 'All Day Event',
                                start: new Date(y, m, 1)
                            },
                            {
                                title: 'Long Event',
                                start: new Date(y, m, d - 5),
                                end: new Date(y, m, d - 2)
                            },
                            {
                                id: 999,
                                title: 'Repeating Event',
                                start: new Date(y, m, d - 3, 16, 0),
                                allDay: false
                            },
                            {
                                id: 999,
                                title: 'Repeating Event',
                                start: new Date(y, m, d + 4, 16, 0),
                                allDay: false
                            },
                            {
                                title: 'Meeting',
                                start: new Date(y, m, d, 10, 30),
                                allDay: false
                            },
                            {
                                title: 'Lunch',
                                start: new Date(y, m, d, 12, 0),
                                end: new Date(y, m, d, 14, 0),
                                allDay: false
                            },
                            {
                                title: 'Birthday Party',
                                start: new Date(y, m, d + 1, 19, 0),
                                end: new Date(y, m, d + 1, 22, 30),
                                allDay: false
                            },
                            {
                                title: 'Click for Google',
                                start: new Date(y, m, 28),
                                end: new Date(y, m, 29),
                                url: 'http://google.com/'
                            }
                        ]
                    });
                })

            </script>
        <?php } ?>
        <?php if ($page == 'product_details' || $page == 'shop' || $page == 'bloglist') { ?>
            <script src='<?php echo frontend_asset_url() ?>js/cart.js'></script>
            <script src="<?php echo frontend_asset_url() ?>js/pgwslider.min.js"></script>
            <script>

                $(document).on('ready', function () {
                    $(".sShop").slick({
                        infinite: true,
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        arrows: true,
                        centerMode: false,
                        responsive: [
                            {
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 1,
                                    infinite: true,
                                    dots: true
                                }
                            },
                            {
                                breakpoint: 600,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1
                                }
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            }
                            // You can unslick at a given breakpoint now by adding:
                            // settings: "unslick"
                            // instead of a settings object
                        ]
                    });

                });

                $(document).ready(function () {
                    $('.pgwSlider').pgwSlider({
                        displayControls: true,
                        autoSlide: false
                    });
                });

                $(document).ready(function () {
                    $('.pgwSlider2').pgwSlider({
                        displayControls: true,
                        autoSlide: false
                    });
                });
                var selectIds = $('#panel1,#panel2,#panel3');
                $(function ($) {
                    selectIds.on('show.bs.collapse hidden.bs.collapse', function () {
                        $(this).prev().find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
                    })
                });
            </script>
        <?php } ?>

    </body>
</html>


