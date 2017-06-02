<?php $this->load->view('partials/l_header') ?>
<div id="body-wrap" class="wrap">
    <div id="body-top" class="section hide-from-tablet"></div>
    <div id="body" class="section">
        <div id="content" class="eight float-right">
            <div id="breadcrumb" class="hide-from-mobile" itemscope="" itemtype="http://schema.org/WebPage">
                <ul itemprop="breadcrumb">
                    <li><a href="specials/www_yourpunchlist_default.html">Home</a>
                    </li>
                    <li><a href="contact-us.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            <h1>Contact Your Trusted RazorClean Handyman</h1>
            <div id="wufoo-p15d7r9c004gvnb">
                <div id="container" class="ltr">


                    <form id="webform-client-form-107" name="form728" class="wufoo topLabel page1" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post"  action="">

                        <header id="header" class="info">
                            <h2>Contact Us - Punch List</h2>
                            <div>Thank you for your interest in Punch List. We will respond to your request as quickly as possible. So that we may better assist you, please note that all fields marked with an asterisk must be filled in.
                                <br>
                                <br>Your information is safe with us and is for the exclusive use of Punch List. Punch List will not share or sell your information for any reason without your permission. Your information is for the express intent to better serve your handyman or remodeling needs.</div>
                        </header>


                        <ul>



                            <li id="fo728li231" class="complex notranslate      ">

                                <label class="desc" id="title231" for="Field231">
                                    Full Name *
                                </label>
                                <div style="    width: 100%;">
                                    <span class="full addr1">
                                        <input id="Field231" required name="contact_name" type="text" class="field text addr" value="" tabindex="7" onkeyup="handleInput(this);" onchange="handleInput(this);">
                                        <input type="hidden" name="service_category" value="Handyman">
                                    </span>
                                </div>
                            </li>



                            <li id="fo728li231" class="complex notranslate      ">

                                <label class="desc" id="title231" for="Field231">
                                    Number *
                                </label>
                                <div style="    width: 100%;">
                                    <span class="full addr1">
                                        <input id="Field231" required name="contact_phone" type="text" class="field text addr" value="" tabindex="7" onkeyup="handleInput(this);" onchange="handleInput(this);">

                                    </span>
                                </div>
                            </li>

                            <li id="fo728li231" class="complex notranslate      ">

                                <label class="desc" id="title231" for="Field231">
                                    Email *
                                </label>
                                <div style="    width: 100%;">
                                    <span class="full addr1">
                                        <input id="Field231" required name="contact_email" type="email" class="field text addr" value="" tabindex="7" onkeyup="handleInput(this);" onchange="handleInput(this);">

                                    </span>
                                </div>
                            </li>
                            <li id="fo728li120" class="notranslate      ">


                                <label class="desc" id="title120" for="Field120">
                                    Describe Services Needed
                                </label>

                                <div style="    width: 100%;">
                                    <textarea id="Field120" name="contact_message" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="13" onkeyup="handleInput(this);" onchange="handleInput(this);"></textarea>

                                </div>



                            </li>





                            <li class="buttons ">
                                <div>
                                   

                                    <input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit" >


                                </div>
                            </li>
                        </ul>
                        <div id="rsp2status"></div>
                    </form>


                </div>
            </div>
            <p>

            </p>
            <p>
                <br clear="all">
            </p>
            <h3>If you are looking to contact a RazorClean Handyman then call 1-855 GO RZCLN (467-9256).</h3>
        </div>
        <?php $this->load->view('partials/l_sidebar') ?>
    </div>
    <div id="body-bottom" class="section hide-from-tablet">
        <img src="<?php echo base_url() ?>media/landing-pages/handyman/wp-content/themes/Punch_List/images/body-bottom.jpg" alt="RazorClean Handyman" />
    </div>
    <div id="cert" class="section hide-from-tablet"></div>
</div>
<?php $this->load->view('partials/l_footer') ?>

<script>
    jQuery("#webform-client-form-107").submit(function (e) {
        jQuery("#saveForm").val("Sending...");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var url = "<?php echo base_url() ?>landing-pages/handyman/submitContactUsForm"; // the script where you handle the form input.
        //alert(url);
        jQuery.ajax({
            type: "POST",
            url: url,
            data: jQuery("#webform-client-form-107").serialize(), // serializes the form's elements.
            dataType: "json",
            success: function (data) {
                if (data.status === '0') {
                    jQuery("#saveForm").val("Submit");
                    jQuery("#rsp2status").html("<span style='color:red'>" + data.msg + "</span>");
                    jQuery("#gform_ajax_spinner_3").hide();
                } else {
                    jQuery("#saveForm").val("Submit");
                    jQuery("#rsp2status").html("<span style='color:green'>" + data.msg + "</span>");
                    jQuery("#gform_ajax_spinner_3").hide();
                    $('#webform-client-form-107')[0].reset();
                }
            }
        });
    });
</script>