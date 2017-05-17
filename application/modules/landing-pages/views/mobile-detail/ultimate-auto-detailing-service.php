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
    <div class="row">
        <div class=" col-md-12">
            <h1 class="page_header">Ultimate Auto Detail Service</h1>

            <div class="content"><dl class="price">
                    <dt>Cars</dt>
                    <dd>$249 &#8211; $259</dd>
                    <dt>Truck/SUV</dt>
                    <dd>$279 &#8211; $299</dd>
                </dl>
                <p>This comprehensive detailing will make you feel like you purchased a new vehicle! We will go above and beyond to make your vehicle perfect inside and out.</p>
                <div class="large-12 small-12 large-centered columns">
                    <div class="row">
                        <div class="row "><div class="col-lg-6 col-md-6 col-xs-12 col-sm-12"></p>
                                <ul>
                                    <li>FULL INTERIOR AND EXTERIOR DETAILS, plus…</li>
                                    <li>Blacken all rubber trim and moldings</li>
                                    <li>Compound exterior</li>
                                    <li>3 stage polish to remove swirl marks</li>
                                </ul>
                                <p></div>
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12"></p>
                                <ul>
                                    <li>Engine bay cleaning</li>
                                    <li>Mothers carnauba hand wax to protect mirror like finish</li>
                                    <li>Or paint sealant for newer vehicles</li>
                                    <li>New car scent available upon request</li>
                                </ul>
                                <p></div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary btn-lg  " href="../schedule-appointment/index.html"  rel=""  target="_self"><i class="glyphicon glyphicon-pencil" ></i> Schedule an Appointment</a>
                <p>&nbsp;</p>
            </div>
        </div><!--col 9-->
    </div><!--row-->
</div><!--end page_body container-->
<!-- <div class="container footer visible-lg">
        <div class="row footer-bg">
                <div class="col-md-12 footer-right">
                </div>
        </div>
</div> -->
<?php $this->load->view('partials/l_footer'); ?>