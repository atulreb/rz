<?php $this->load->view('partials/l_header') ?>

<div id="services-background" class="section hide-from-tablet">


    <div id="body-wrap" class="wrap">
        <div id="body-top" class="section hide-from-tablet"></div>
        <div id="body" class="section">
            <div id="content" class="eight float-right">
                <div id="breadcrumb" class="hide-from-mobile" itemscope itemtype="http://schema.org/WebPage">
                    <ul itemprop="breadcrumb">
                        <li><a href="specials/www_yourpunchlist_default.html">Home</a>
                        </li>
                        <li><a href="testimonials.html">Testimonials</a>
                            </span>
                        </li>
                    </ul>
                </div>
                <h1>Razorclean Handyman Testimonials &amp; Reviews</h1>
                <p>
                    <iframe src="https://www.youtube.com/embed/Tih-rT9bQAI" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                    <br />
                    <br class="clearfix" />
                    <br />
                <div class="broadly-reviews">
                    <?php foreach($testi_data as $td){?>
                    <div id="review-yelp:RpuHJLF_8jA1Sq8oCTvTrg" class="broadly-review" style="position:relative;margin:8px;border-top:1px solid #eeeeee;padding:16px 0 8px 0;line-height:1.3">
                        <div class="broadly-review-avatar" style="float:left;overflow:hidden">
                            <img src="<?php if($td['client_image'] !='') { echo base_url().'uploads/testimonial_users/'.$td['client_image']; } else { echo base_url().'uploads/testimonial_users/default-avatar.jpg';}?>" style="width:48px;height:48px;border:none;border-radius:50%">
                        </div>
                        <div class="broadly-review-main" style="margin-left:64px">
                            <div class="broadly-review-heading">
                                
                                <span class="broadly-review-author" style="font-weight:bold"><?php echo $td['client_name'];?></span>
                                <time datetime="2015-05-26"><?php echo date("F d,Y",strtotime($td['created_time']));?></time>
                            </div>
                            <div class="broadly-review-body" style="margin:8px 0">
                                <?php echo $td['description'];?>
                            </div>
                            
                        </div>
                        <div class="broadly-clearfix" style="visibility:hidden;display:block;font-size:0;height:0;clear:both">&#xA0;</div>
                    </div>
                    <?php }?>
                </div>
                <br />
                <br class="clearfix" />
                </p>
                <h3>If you are looking for Punch List Testimonials then please call 1-855 GO RZCLN (467-9256)</h3>
            </div>
            <?php $this->load->view('partials/l_sidebar') ?>
        </div>
        <div id="body-bottom" class="section hide-from-tablet">
            <img src="<?php echo base_url() ?>media/landing-pages/handyman/wp-content/themes/Punch_List/images/body-bottom.jpg" alt="Chicago Handyman" />
        </div>
        <div id="cert" class="section hide-from-tablet"></div>
    </div>
</div>
<?php
$this->load->view('partials/l_footer')?>