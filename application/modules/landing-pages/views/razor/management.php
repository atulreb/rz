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
                                                        <h2 style="text-align: center;"><span style="font-weight:600;color:#ffffff;font-size:64px;text-transform:uppercase;">Management</span></h2>

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
                                                    <h4 style="text-align: center;">RazorClean Inc. Management</h4>
                                                    <p style="text-align: justify;">RazorClean Inc. management portion involves identifying the mission, objective, procedures, rules and manipulation of the human capital of an enterprise to contribute to the success of the enterprise. This implies effective communication: an enterprise environment (as opposed to a physical or mechanical mechanism) implies human motivation and implies some sort of successful progress or system outcome. RazorClean Inc. management doesn't need to be seen from enterprise point of view alone, because management is an essential function to improve one's company life and relationships. Management is therefore everywhere and it has a wider range of application.</p>
                                                    <p style="text-align: justify;">Based on this, management must have humans, communication, and a positive enterprise endeavor. Plans, measurements, motivational psychological tools, goals, and economic measures (profit, etc.) may or may not be necessary components for there to be management. At first, one views management functionally, such as measuring quantity, adjusting plans, meeting goals. This applies even in situations where planning does not take place. When forecasting RazorClean Inc., management focuses on five key components. We would like to show you how we go about implementing the five. </p>
                                                    <ul>
                                                        <li><a href="javascript:;">Planning</a></li>
                                                        <li><a href="javascript:;">Organizing</a></li>
                                                        <li><a href="javascript:;">Commanding</a></li>
                                                        <li><a href="javascript:;">Coordinating</a></li>
                                                        <li><a href="javascript:;">Controlling</a></li>
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