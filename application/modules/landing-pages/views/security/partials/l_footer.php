
<DIV id="footer" style="clear:both;">
<div id="customHeading" style="
    background: #ccc;
    padding: 10px 20px;
    color: #fff !important;
">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 style="font-size: 27px;line-height: 40px;color: #000;" class="section-heading"><marquee><i class="fa fa-angle-double-left" aria-hidden="true"></i> RazorClean, The Circle of Trust. Save Money, Live RazorClean</marquee></h2>
            </div>
        </div>
    </div>
</div>
    <CENTER>
        <BR>
        <span class="footerlinks">
                        <A HREF="<?php echo base_url()?>security/cybersecurity">Cyber Security</A>  &nbsp; &nbsp;|&nbsp; &nbsp; <A HREF="<?php echo base_url()?>security/investigations">Private Investigator</A>  &nbsp; &nbsp;|&nbsp; &nbsp; <A HREF="<?php echo base_url()?>security/eventpermits">Event Permits</A> &nbsp; &nbsp;|&nbsp; &nbsp; <A HREF="<?php echo base_url()?>security/mediacenter">Media Center</A><BR>
                        <A HREF="<?php echo base_url()?>security/mediacenter">Press Release Archive</A>  &nbsp; &nbsp;|&nbsp; &nbsp; <A HREF="<?php echo base_url()?>security/about">About Us</A>  &nbsp; &nbsp;|&nbsp; &nbsp; <A HREF="<?php echo base_url()?>security/contact">Contact</A>  &nbsp; &nbsp;|&nbsp; &nbsp; <A HREF="<?php echo base_url()?>security/privacy">Privacy Statement</A>
                        <BR>&copy; <?php echo date("Y")?> RazorClean Security Services  &nbsp; &nbsp;|&nbsp; &nbsp; </A>
                        <BR><BR>
                        <TABLE BORDER="0" CELLSPACING="4" CELLPADDING="0">
                            <TR>
                                <TD ALIGN="center" VALIGN="top"><A HREF="<?php echo $global_setting['facebook_link']?>" TARGET="_blank"><IMG SRC="<?php echo base_url()?>media/landing-pages/security/images/facebook.jpg" ALT="MG Security on Facebook" WIDTH="30" HSPACE="0" VSPACE="0" BORDER="0"></A></TD>
                                <TD ALIGN="center" VALIGN="top"><A HREF="<?php echo $global_setting['twitter_link']?>" TARGET="_blank"><IMG SRC="<?php echo base_url()?>media/landing-pages/security/images/twitter.jpg" ALT="MG Security on Twitter" WIDTH="30" HSPACE="0" VSPACE="0" BORDER="0"></A></TD>
                                <TD ALIGN="center" VALIGN="top"><A HREF="#" TARGET="_blank"><IMG SRC="<?php echo base_url()?>media/landing-pages/security/images/linkedin.jpg" ALT="MG Security on LinkedIn" WIDTH="30" HSPACE="0" VSPACE="0" BORDER="0"></A></TD>
                            </TR>

                        </TABLE>
                    </span>
    </CENTER>
</DIV>

</DIV>
<!-- END BOTTOM PANELS DIV -->


</DIV>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function () {
        jQuery("#contactform1").submit(function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var url = "<?php echo base_url() ?>landing-pages/security/submitContactForm"; // the script where you handle the form input.
            alert(url);
            jQuery.ajax({
                type: "POST",
                url: url,
                data: jQuery("#contactform1").serialize(), // serializes the form's elements.
                dataType: "json",
                success: function (data) {
                    if (data.status === '0') {
                        jQuery("#rspstatus2").html("<span style='color:red'>" + data.msg + "</span>");
                    } else {
                        jQuery("#rspstatus2").html("<span style='color:green'><b>" + data.msg + "</b></span>");
                        jQuery('#contactform1')[0].reset();
                    }
                }
            });


        });
    });
</script>
<!-- END WRAPPER DIV -->
</BODY>

</html>