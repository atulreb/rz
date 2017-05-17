<?php $this->load->view('partials/l_header') ?>

<section class="container" role="document">


    <article class="post-471 page type-page status-publish hentry" id="post-471">
        <div class="entry-content">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="section " style="position: relative;overflow:hidden; background: url(http://quartz.themegasm.net/wp-content/uploads/2016/05/footer_lodyas.png) #ffffff scroll repeat; padding:140px 0 5px 0; ">
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <h2 style="text-align: center;"><span style="font-weight:600;color:#ffffff;font-size:64px;text-transform:uppercase;">Supplies</span></h2>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vc_row wpb_row vc_row-fluid confine">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span>
                            </div>
                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-2">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-8">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element  vc_custom_1463130207028">
                                                <div class="wpb_wrapper">
                                                    <h4 style="text-align: center;">RazorClean Inc. Supplies</h4>
                                                    <p style="text-align: justify;">RazorClean Inc. Supply portion provides CUSTOMER FRIENDLY online ordering Office Products. From floors and windows to bathrooms and mirrors, you can trust all your professional cleaning product needs to RazorClean Inc. Every product in our portfolio is backed by scientific cleaning expertise and a passion for positive consumer experience - making them some of the most trusted cleaning products by business professionals.</p>
                                                    <p style="text-align: justify;">Our system can show your current LOW PRICE and compares it to the prices of the superstores. We GUARANTEE that you will save by shopping at RazorCleanInc.com. </p>
                                                    <p style="text-align: justify;">Our product lines have expanded to include an enhanced office supply selection of commercial supplies for residential house cleaning, commercial janitors and restaurants. </p>
                                                    <p style="text-align: justify;">Also includes custom RazorClean Logo clothing and accessories. </p>
                                                    <h4>SAME DAY SHIPPING</h4>
                                                    <p style="text-align: justify;">All orders received before 1:00 PM Local Warehouse Time (Central) are shipped the same day*</p>
                                                    
                                                    <h4>LOWEST FREIGHT COST</h4>
                                                    <p style="text-align: justify;">We have negotiated very aggressive discounts with common carriers that we pass on to you. In addition, for all ground shipments we take the extra step to strap cartons together, when possible, to help reduce your freight costs.</p>
                                                    
                                                     <h4>STORE SUPPLY SHIPPING OPTIONS - GROUND</h4>
                                                    <p style="text-align: justify;">All Ground deliveries will be shipped the same day if placed before 1PM local time.
                                                        We offer next day service to 88.8% of the U.S. population at no extra charge. If you reside outside of our
                                                        one day shipping zones, Next Day Air or Second Day Air is available. </p>
                                                    
                                                     <h4>ECONOMY SHIPPING</h4>
                                                    <p style="text-align: justify;">If you select Economy Shipping as your shipping option please allow 3-5 business days for your order to arrive</p>
                                                    
                                                    
                                                    <h4>ECONOMY SHIPPING - USPS PRIORITY MAIL</h4>
                                                    <p style="text-align: justify;">If you select Economy Shipping - USPS Priority Mail, please allow 3-5 business days for your order to arrive. Your package will be delivered by the US Postal Service (USPS) instead of a private carrier. 
                                                      This option is offered when USPS delivery is less expensive than regular Economy Shipping.</p>
                                                    
                                                    
                                                    <h4>TRUCK DELIVERY </h4>
                                                    
                                                    <p style="text-align: justify;">May be available for Choose this option if your receiving 
                                                        location is within our truck delivery are for free. May be based on how many items ordered. </p>
                                                    
                                                    <h4>WHITE GLOVE SERVICE IS AVAILABLE </h4>
                                                    
                                                    <p style="text-align: justify;">1-2 drivers will help with delivery. Please call 1-855 GO RZCLN (467-9256) for a quote</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-2">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top:20px !important; margin-bottom:60px !important ; " class="themegasm_hr_wrap center">
                                <hr class="themegasm_hr solid thick" style="border-color:#0a0a0a; max-width:50px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            




        </div>
    </article>


</section>
<?php $this->load->view('partials/l_footer') ?>
<script>
    jQuery(document).ready(function () {
        jQuery('#seriverequestfrm').on('submit', function (e) {
            e.preventDefault();
            alert();
            jQuery('#request_reservice_btn').attr('disabled', true);
            jQuery('#request_reservice_btn').html('Please wait...');
            var url = "<?php echo base_url() ?>backend/Request_service/requestServiceForm"; // the script where you handle the form input.

            var formData = jQuery("#seriverequestfrm").serialize();
            jQuery.ajax({
                type: "POST",
                url: url,
                data: formData,
                dataType: 'json',
                success: function (data) {
                    //alert(data);
                    jQuery('#request_reservice_btn').attr('disabled', false);
                    jQuery('#request_reservice_btn').html('Submit');
                    if (data.status === '1') {
                        jQuery("#frmerror").html('<span style="color:green;font-weight: bold !important;">' + data.msg + '</span>');
                        jQuery('#seriverequestfrm')[0].reset();
                        return true;
                    } else {
                        jQuery("#frmerror").html('<span style="color:red;font-weight;bold!important">' + data.msg + '</span>');
                        return false;
                    }
                }
            });

        });

    });

    function selectCity(state_id) {
        if (state_id != "-1") {
            loadData('city', state_id);
        } else {
            $("#city_dropdown").html("<option value='-1'>Select city</option>");
        }
    }

    function loadData(loadType, loadId) {
        var dataString = 'loadType=' + loadType + '&loadId=' + loadId;
        jQuery("#" + loadType + "_loader").show();
        jQuery("#" + loadType + "_loader").fadeIn(400).html('Loading ' + loadType + '...');
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>frontend/location/loadData",
            data: dataString,
            cache: false,
            success: function (result) {
                jQuery("#" + loadType + "_loader").hide();
                jQuery("#" + loadType + "_dropdown").html("<option value='-1'>Select " + loadType + "</option>");
                jQuery("#" + loadType + "_dropdown").append(result);
            }
        });
    }
</script>