<style>
    .loadmore{
        background-color: #ed1c24;
        border: 0px;
        color: #fff;
        padding: 10px 25px;
        border-radius: 2px;
        margin-top: 40px;
    }
</style>
<!--Banner-Start-->
<header class="head-bottom-border-style">
    <div class="header-content">
        <div class="header-content-inner innerpage-heading text-left">
            <h2 id="homeHeading">Testimonials</h2>
            <hr>
            <p>RazorClean, Inc. A Company Built On Integrity, Quality and Trust.</p>
            <!--<a href="#about" class="btn btn-primary btn-xl page-scroll">Enter Site</a>-->

        </div>
    </div>
</header>

<section class="testimonial_slider" id="testimonials">
    <div class=" container-fluid">
        <div class="row border_box">
            <div class="testiMonial slider">
                <?php
                foreach ($testimonial_data as $testimonial_data) {
                    if ($testimonial_data['is_featured'] == '1') {
                        ?>
                        <div class="testimonial1">

                            <div class="">
                                <div class="testimonials">
                                    <div class="active item">
                                        <blockquote><p><?php echo substr($testimonial_data['description'], '0', '250'); ?></p></blockquote>
                                        <div class="carousel-info">
                                            <img alt="" src="<?php echo base_url() . "uploads/testimonial_users/50x50/" . $testimonial_data['client_image'] ?>" class="pull-left">
                                            <div class="pull-left">
                                                <span class="testimonials-name"><?php echo $testimonial_data['client_name'] ?></span>
                                                <!--<span class="testimonials-post">Commercial Director</span>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <?php
                    }
                }
                ?>


            </div>
        </div>
    </div>
</section>

<section id="head-sub-heading">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h2><span class="hightlight-text">Previous </span>Testimonials</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat volutpat 
                    enim a eleifend. Nam suscipit diam non pulvinar varius. Integer convallis dui a nulla 
                    laoreet, vitae ultricies purus molestie.</p>
                <img src="<?php echo frontend_asset_url() ?>img/Line.png"/>
            </div>
        </div>
    </div>
</section>



<section id="Testimonial_Grid">
    <div class="container">
        <div class="row testidata">

            <?php if(!empty($testimonial_data1)) { foreach ($testimonial_data1 as $testimonial_data1) { ?>


                <div class="col-md-4 col-sm-6 Border_Grid">
                    <div class="testimonials">
                        <div class="active item">
                            <blockquote><p><?php echo substr($testimonial_data1['description'], '0', '150'); ?></p></blockquote>
                            <div class="carousel-info">
                                <img alt="" src="<?php
                                if ($testimonial_data1['client_image'] != NULL && file_exists(FCPATH . "uploads/testimonial_users/" . $testimonial_data1['client_image'])) {
                                    echo base_url() . "uploads/testimonial_users/" . $testimonial_data1['client_image'];
                                } else {
                                    echo base_url() . "uploads/testimonial_users/default-avatar.jpg";
                                }
                                ?>" class="pull-left">
                                <div class="pull-left">
                                    <span class="testimonials-name"><?php echo $testimonial_data1['client_name']; ?></span>
                                    <!--<span class="testimonials-post">Commercial Director</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }  ?>




            <br>
            <div style="clear:both;margin:20px"></div>

            <div style="text-align: center;"><button class="loadmore" data-page="3">Load More</button></div>

			<?php } else { echo "<h3 style=text-align:center>No testimonials found for this service.</h3>";}?>






        </div>
    </div>

</section>




<!--Two Tabs section Start-->
<!--Contact form and testimonials section start-->

<!--Contact form and testimonials section start-->
<!--partner with us area start-->


<div class="hr_Line"><hr></div> 
