<?php $this->load->view('partials/l_header'); ?>

<div class="container page_body">

    <script>
        var searchBox = document.getElementById('searchinput');
        searchBox.onfocus = function () {
            if (this.value == 'search...') {
                this.value = '';
            }
        }

        searchBox.onblur = function () {
            if (this.value == '') {
                this.value = 'search...';
            }
        }
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page_header">RazorClean Mobile Detailing Customer Testimonials</h1>
                <div id="lessonCatDesc"><div class="clear"></div></div>



               
                <!--Start row--><div class="row testimonial" id="latest">
                    <?php foreach($testi_data as $tdata){?>
                    <div class="col-md-6">

                        <div class="icon-testimonial">
                            <div id="latestimg" style="background-image: url(<?php if($tdata['client_image'] !='') { echo base_url().'uploads/testimonial_users/'.$tdata['client_image']; } else { echo base_url().'uploads/testimonial_users/default-avatar.jpg';}?>); width: 150px; height: 150px;">
                                <div id="latestimgframe"></div>
                            </div>
                            
                            <h3><?php echo $tdata['client_name']?></h3>
                            <!-- </a> -->
                            <p><?php echo $tdata['description']?></p>
                            </p>
                            <div class="clear"></div>
                            <!-- <a href="http://www.onsitedetailing.net/laurie-newman/" title="&#8221; I couldn&#8217;t be happier with the job you did" rel="bookmark"><button class="btn btn-mini btn-primary btn-block" type="button">Read more...</button></a> -->
                        </div>


                    </div>
                    <?php }?>
                </div><!--End row if items end in uevan num-->
            </div><!--span8-->
            <!-- <div class="col-md-4">
                                    </div> -->
        </div><!--row-->
    </div><!--container-->
</div><!--end page_body container-->
<!-- <div class="container footer visible-lg">
        <div class="row footer-bg">
                <div class="col-md-12 footer-right">
                </div>
        </div>
</div> -->
<?php $this->load->view('partials/l_footer'); ?>