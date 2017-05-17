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
                                                        <h2 style="text-align: center;"><span style="font-weight:600;color:#ffffff;font-size:64px;text-transform:uppercase;">Contracting</span></h2>

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
                                                    <h4 style="text-align: center;">RazorClean Inc. Contracting</h4>
                                                    <p style="text-align: justify;">RazorClean Inc. Contracting portion, contracting service has a complete national network of certified technicians and quality subcontractors that are pre-screened, licensed and committed to RazorClean standards and guarantee the quality of their contracting services. This allows us to respond to your needs immediately wherever you need us to be. Management team and dedicated account managers are committed to finding and providing you with a great contract within your professional field. </p>
                                                    <p style="text-align: justify">Not only do we have a vast amount of experience in both the commercial/retail and maintenance/construction industries, also staffing, lawn care, painters, housekeepers, mobile detail, handyman, termite & pest control , movers & transport, pool cleaning, security services, and non-profit sectors as well. You get a team that partner with you to effectively manage your service needs and progressively seek contract solutions that will save you time and money. If your company is in need of. Our experienced new contracts but don't have the manpower, time or resources, RazorClean Inc. contracting services is the answer. </p>
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