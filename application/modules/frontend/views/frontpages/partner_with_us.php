<style>
    #status p{
        color: #ed1c24 !Important;
        padding: 1px;
        margin: 0px 11px;
    }
</style>
<!--Banner-Start-->
<header class="head-bottom-border-style">
    <div class="header-content">
        <div class="header-content-inner innerpage-heading text-left">
            <h2 id="homeHeading">Partner With Us</h2>
            <hr>
            <p>RazorClean, Inc. A Company Built On Integrity, Quality and Trust.</p>
            <!--<a href="#about" class="btn btn-primary btn-xl page-scroll">Enter Site</a>-->

        </div>
    </div>
</header>
<!--Banner-End-->


<section id="Patner_Service" class="service service02 space">
    <div class="container">
        <!--Heading-->
        <div class="main-heading col-sm-12 text-center">
            <h6>elaborated code and creative design</h6>
            <h2><span>Partner</span> With Us</h2>
            <div class="dot">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <p>Non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum</p>
        </div>

        <div class="services_icon">

            <div class="col-md-3 construction">
                <img src="<?php echo frontend_asset_url() ?>img/Construction_icon_grey.png">
                <p>Lorem Ipsum</p>
            </div>

            <div class="col-md-3 lawn">
                <img src="<?php echo frontend_asset_url() ?>img/Law_grey.png">
                <p>Lorem Ipsum</p>
            </div>

            <div class="col-md-3 construction">
                <img src="<?php echo frontend_asset_url() ?>img/Construction_icon_grey.png">
                <p>Lorem Ipsum</p>
            </div>

            <div class="col-md-3 lawn">
                <img src="<?php echo frontend_asset_url() ?>img/Law_grey.png">
                <p>Lorem Ipsum</p>
            </div>

        </div>


    </div>
</section>



<section id="contact-us" class="space bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 contact-block left">
                <div class="main-heading col-sm-12 text-left">
                    <h6>elaborated code and creative design</h6>
                    <h2><span> work with </span> us</h2>
                </div>
                <p>Non numquam eius modi tempora incidunt ut labore et dolore mag quaerat voluptatem. Ut enim ad minima veniam, quis nostrum. Dui eros, consequat et felis sit amet, porta fringilla tellus. Suspendisse lobortis odio non urna porttitor were up in iaculis. neque. </p>
                <p class="italic">
                    Incididunt ut labore et dolore magna aliqua. Ut enim ad Neque por ro quisquam estqui dolorem ipsum quisquam est.</p>
                <a href="http://www.themeforest.aurni.net/html/merab/#" class="btn black-border yellow">Read more</a>
            </div>
            <div class="col-sm-7 contact-block right">
                <span id="status"></span>
                <form id="vendorfrm" method="post">
                    <div class="form-group col-sm-6">
                        <input type="text" name="name" required="" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="email" name="email" required="" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="text" name="phone" placeholder="Phone" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <select name="service" required="required" autocomplete="off">
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
                    <div class="form-group col-sm-12">
                        <select name="state" >
                            <option value="">Select State</option>
                            <?php
                            foreach ($states as $state) {
                                if($stateid == $state['id']) $selected="selected"; else $selected = "";
                                echo "<option ".$selected." value='" . $state['id'] . "'>" . $state['name'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea name="message" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="button col-sm-12">
                        <button type="button" id="submitVendor" class="btn black-border">start your project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>











<!--<section id="meet_team">
    <div class="container">

        <div class="row">
            <h2>Meet the <span> Team </span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua. </p>
            <div class="line_Center">
                <img src="<?php echo frontend_asset_url() ?>img/Line.png"/>
            </div>

            <div class="team_img">
                <div class="col-md-3 center_img">
                    <img src="<?php echo frontend_asset_url() ?>img/Team_Img1.png">
                    <div class="overlay_bg">
                        <div class="text-overlay">
                            <h4>Lorem Ipsum</h4>
                            <p>Designation</p>
                            <ul class="social_icons">
                                <li> <i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                                <li> <i class="fa fa-twitter-square" aria-hidden="true"></i></li>
                                <li> <i class="fa fa-instagram" aria-hidden="true"></i></li>
                                <li> <i class="fa fa-linkedin-square" aria-hidden="true"></i></li>

                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 center_img">
                    <img src="<?php echo frontend_asset_url() ?>img/Team_Img2.png">

                    <div class="overlay_bg">
                        <div class="text-overlay">
                            <h4>Lorem Ipsum</h4>
                            <p>Designation</p>
                            <ul class="social_icons">
                                <li> <i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                                <li> <i class="fa fa-twitter-square" aria-hidden="true"></i></li>
                                <li> <i class="fa fa-instagram" aria-hidden="true"></i></li>
                                <li> <i class="fa fa-linkedin-square" aria-hidden="true"></i></li>

                            </ul>
                        </div>
                    </div>


                </div>

                <div class="col-md-3 center_img">
                    <img src="<?php echo frontend_asset_url() ?>img/Team_Img3.png">


                    <div class="overlay_bg">
                        <div class="text-overlay">
                            <h4>Lorem Ipsum</h4>
                            <p>Designation</p>
                            <ul class="social_icons">
                                <li> <i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                                <li> <i class="fa fa-twitter-square" aria-hidden="true"></i></li>
                                <li> <i class="fa fa-instagram" aria-hidden="true"></i></li>
                                <li> <i class="fa fa-linkedin-square" aria-hidden="true"></i></li>

                            </ul>
                        </div>
                    </div>	


                </div>

                <div class="col-md-3 center_img">
                    <img src="<?php echo frontend_asset_url() ?>img/Team_Img1.png">

                    <div class="overlay_bg">
                        <div class="text-overlay">
                            <h4>Lorem Ipsum</h4>
                            <p>Designation</p>
                            <ul class="social_icons">
                                <li> <i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                                <li> <i class="fa fa-twitter-square" aria-hidden="true"></i></li>
                                <li> <i class="fa fa-instagram" aria-hidden="true"></i></li>
                                <li> <i class="fa fa-linkedin-square" aria-hidden="true"></i></li>

                            </ul>
                        </div>
                    </div>


                </div>
            </div>



        </div>






    </div>



</section>-->




<div class="hr_Line"></div> 

<script>
    $(document).on('click', '#submitVendor', function () {
        var formData = $("#vendorfrm").serialize();
        $.ajax({
            url: base_url + 'backend/vendors/submitVendor',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function (response) {
                //alert(response);
                if (response.status === '1') {
                    $("#status").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">X</button><strong>' + response.msg + '</div>');
                    $('#vendorfrm')[0].reset();
                    return true;
                } else {
                    $("#status").html(response.msg);
                    return false;
                }
            }
        });
    });
</script>