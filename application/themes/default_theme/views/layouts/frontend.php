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
        <link href="<?php echo frontend_asset_url() ?>css/video-slider.css" rel="stylesheet">
        <link href="<?php echo frontend_asset_url() ?>css/custom-responsive.css" rel="stylesheet">
        <link href="<?php echo frontend_asset_url() ?>css/jquery.mCustomScrollbar.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo frontend_asset_url() ?>slick/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php echo frontend_asset_url() ?>slick/slick-theme.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="<?php echo frontend_asset_url() ?>vendor/jquery/jquery.min.js"></script>
        
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
        
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo frontend_asset_url() ?>vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
        <script src="<?php echo frontend_asset_url() ?>vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="<?php echo frontend_asset_url() ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <!-- Theme JavaScript -->
        <script src="<?php echo frontend_asset_url() ?>js/creative.min.js"></script>
        <script src="<?php echo frontend_asset_url() ?>js/js-image-slider.js"></script>
        <script src="<?php echo frontend_asset_url() ?>js/mcVideoPlugin.js"></script>
        <script src="<?php echo frontend_asset_url() ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?php echo frontend_asset_url() ?>slick/slick.js" type="text/javascript" charset="utf-8"></script>

        
		
        <?php if ($page == 'checkout' || $page == 'testimonial') { ?>
            <style>
                .bad input, .bad select, .bad textarea {
                    border: 1px solid #CE5454;
                    box-shadow: 0 0 4px -2px #CE5454;
                    position: relative;
                    left: 0;
                    -moz-animation: .7s 1 shake linear;
                    -webkit-animation: .7s 1 shake linear;
                }
                .item .alert {
                    float: left;
                    margin: 3px 0 0px 0px;
                    padding: 3px 10px;
                    color: #ffffff;
                    border-radius: 3px 4px 4px 3px;
                    background-color: #CE5454;
                    max-width: 170px;
                    white-space: pre;
                    z-index: 1;
                    transition: .15s ease-out;
                }

            </style>
        <?php } ?>
        <script type="text/javascript">
            $(document).on('ready', function () {
                $(".regular").slick({
                    infinite: true,
                    slidesToShow: 8,
                    slidesToScroll: 1,
                });
            });
            $(document).on('ready', function () {
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
            $(document).on('ready', function () {
                $(".testiMonial1").slick({
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

      // The following example creates complex markers to indicate beaches near
      // Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
      // to the base of the flagpole.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: {lat: 34.8196184, lng: -92.2396483}
        });

        setMarkers(map);
      }

      // Data for the markers consisting of a name, a LatLng and a zIndex for the
      // order in which these markers should display on top of each other.
      var beaches = [
        ['Bondi Beach', 34.8196184, -92.2396483, 4]
      ];

      function setMarkers(map) {
        // Adds markers to the map.

        // Marker sizes are expressed as a Size of X,Y where the origin of the image
        // (0,0) is located in the top left of the image.

        // Origins, anchor positions and coordinates of the marker increase in the X
        // direction to the right and in the Y direction down.
        var image = {
          url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          // This marker is 20 pixels wide by 32 pixels high.
          size: new google.maps.Size(20, 32),
          // The origin for this image is (0, 0).
          origin: new google.maps.Point(0, 0),
          // The anchor for this image is the base of the flagpole at (0, 32).
          anchor: new google.maps.Point(0, 32)
        };
        // Shapes define the clickable region of the icon. The type defines an HTML
        // <area> element 'poly' which traces out a polygon as a series of X,Y points.
        // The final coordinate closes the poly by connecting to the first coordinate.
        var shape = {
          coords: [1, 1, 1, 20, 18, 20, 18, 1],
          type: 'poly'
        };
        for (var i = 0; i < beaches.length; i++) {
          var beach = beaches[i];
          var marker = new google.maps.Marker({
            position: {lat: beach[1], lng: beach[2]},
            map: map,
            icon: image,
            shape: shape,
            title: beach[0],
            zIndex: beach[3]
          });
        }
      }
    </script>
		
		<?php if ($page == 'contact') { ?>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzp5v4afLMilOqxI7GyvL72-EbiLQf-wM&callback=initMap" async defer></script>
        <?php } ?>

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
                    $.ajax({
                        url: '<?php echo base_url() ?>backend/event/getEventsOnCalendar',
                        type: 'POST',
                        data: 'type=fetch',
                        async: false,
                        success: function (response) {
                            json_events = response;
                        }
                    });
                    $('#calendar').fullCalendar({
                        events: JSON.parse(json_events),
                        eventClick: function (calEvent, jsEvent, view) {
//                            $(calEvent.title).attr('title', 'This is the hover-over text');
//                            $(this).css('border-color', 'red');
//                            $('#modalTitle').html(calEvent.title);
//                            $('#modalBody').html(calEvent.long_desc);
////                            $('#eventUrl').attr('href', event.url);
//                            $('#fullCalModal').modal();
                                window.location.href = '<?php echo base_url()?>event/'+ calEvent.id;

                        }
                    });
                });




            </script>
        <?php } ?>
        <div id="fullCalModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span> <span class="sr-only">close</span></button>
                        <h4 id="modalTitle" class="modal-title"></h4>
                    </div>
                    <div id="modalBody" class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" style="background:#ee4b28" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($page == 'product_details' || $page == 'shop' || $page == 'bloglist' || $page == 'cart') { ?>
            <script type="text/javascript" src='<?php echo frontend_asset_url() ?>js/cart.js'></script>
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
        <?php if ($page == "checkout") { ?>
            <!-- jQuery -->
            <script src="<?php echo backend_asset_url() ?>/vendors/jquery/dist/jquery.min.js"></script>

            <!-- Bootstrap -->
            <script src="<?php echo backend_asset_url() ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

            <!-- FastClick -->
            <script src="<?php echo backend_asset_url() ?>/vendors/fastclick/lib/fastclick.js"></script>

            <!-- NProgress -->
            <script src="<?php echo backend_asset_url() ?>/vendors/nprogress/nprogress.js"></script>

            <!-- validator -->
            <script src="<?php echo backend_asset_url() ?>/vendors/validator/validator.js"></script>

            <!-- Custom Theme Scripts -->
            <script src="<?php echo backend_asset_url() ?>/build/js/custom.min.js"></script> 
 
            <!--<link href="<?php echo backend_asset_url() ?>/build/css/custom.min.css" rel="stylesheet">-->

        <?php } ?>

        <?php if ($page == 'testimonial' || $page == 'home') { ?>
            <script>
                $("#submit_testimonial").submit(function (e) {
                    e.preventDefault();

                    var url = base_url + "submitTestimonial"; // the script where you handle the form input.


                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $("#submit_testimonial").serialize(), // serializes the form's elements.
                        dataType: 'json',
                        success: function (data)
                        {
                            if (data.status === '1') {
                                $("#testi_status").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">X</button><strong>' + data.msg + '</div>');
                                $('#submit_testimonial')[0].reset();
                                return true;
                            } else {
                                $("#testi_status").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">X</button><strong>' + data.msg + '</div>');
                                return false;
                            }
                        }
                    });
                });


                

                $(document).on('click', '#submitJobApplication', function () {
                    var formData = new FormData($("#jobAppplyForm")[0]);
                    $.ajax({
                        url: base_url + 'backend/job/applyToJob',
                        type: 'POST',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        mimeType: "multipart/form-data",
                        dataType: 'json',
                        success: function (response) {
                            //alert(response);
                            if (response.status === '1') {
                                $("#applystatus").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">X</button><strong>' + response.msg + '</div>');
                                $('#jobAppplyForm')[0].reset();
                                return true;
                            } else {
                                $("#applystatus").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">X</button><strong>' + response.msg + '</div>');
                                return false;
                            }
                        }
                    });
                });
                $(document).on('click', '.loadmore', function () {
                    $(this).text('Loading...');
                    var ele = $(this).parent('li');
                    $.ajax({
                        url: base_url + 'backend/testimonial/loadMoreTestimonials',
                        type: 'POST',
                        data: {
                            page: $(this).data('page'),
                        },
                        success: function (response) {
                            alert(response);
                            if (response) {
                                ele.hide();
                                $(".news_list").append(response);
                            }
                        }
                    });
                });
            </script>
        <?php } ?>
        <?php if ($page == 'testimonial_details') { ?>
            <script>
                $(document).on('click', '.loadmore', function () {
                    $(this).text('Loading...');
                    var ele = $(this).parent('div');
                    $.ajax({
                        url: base_url + 'backend/testimonial/loadMoreTestimonials',
                        type: 'POST',
                        data: {
                            page: $(this).data('page'),
                        },
                        success: function (response) {
                            //alert(response);
                            if (response) {
                                ele.hide();
                                $(".testidata").append(response);
                            }
                        }
                    });
                });
            </script>
        <?php } ?>
		
		<div class="panel1">
			
		</div>
		
		<script type="text/javascript">
    $(document).ready(function(){
        $(".slide-toggle").click(function(){
            $(".panel1").animate({
                width: "toggle"
            });
        });
    });
</script>
		
		
    </body>
</html>


