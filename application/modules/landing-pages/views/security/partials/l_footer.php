
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




<style>
.main-footer {
	background-color: #444444;
	width: 100%;
	float:left;
}

.copyright-text {
    color: #fff;
    font-size: 13px;
    text-align: center;
    line-height: 61px;
}

.social-links {
	list-style:none;
	margin-top: 15px;
}

.social-links li { 
	width: 35px;
	height: 35px;
	border-radius: 50%;
	background-color: #272727;
	text-align: center;
	line-height: 36px;
	float: left;
	margin-right: 5px;
}

.social-links li a {
	color:#fff;
} 

.social-links .facebook:hover {
	background: #5c7ff6;
} 

.social-links .twitter:hover {
	background: #22d5e3;
}

.social-links .google:hover {
	background: #f82d2d;
}

.copyright-text, .social-links {
	width: 22%;
	float:left;
}

.leftDiv1 {
	width: 8%;
    float: left;
}

@media only screen and (max-width: 425px) and (min-width: 200px) {
  .copyright-text {
		width: 100%;
		line-height: 30px;
  }
  
  .leftDiv1 {
	  margin:10px 5px;
	  }
  
  
  .social-links {
	    padding-left: 35%;
		margin-botttom:20px;
		width: 100%;
		line-height: 30px;
  }
}
</style>


<footer class="main-footer">
   <div class="">
	      <div class="leftDiv1">&nbsp;</div>
	
           <span class="copyright-text">© Copyright 2017 - RazorClean Inc. </span>
           
		   <span class="copyright-text">Call- 1-855 GO RZCLN (467-9256)</span>
        
		   <span class="copyright-text">Email- signup@rzclnsecurityservices.com</span>
		   
		   <ul class="social-links">
				<li class="facebook">
					<a target="_blank" href="http://facebook.com/razorclean">
					<i class="fa fa-facebook" aria-hidden="true"></i>
					</a>
				</li>
				<li class="twitter">
					<a target="_blank" href="http://twitter.com">
					<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>
				</li>
				<li class="google">
					<a target="_blank" href="http://plus.google.com">
					<i class="fa fa-google-plus" aria-hidden="true"></i>
					</a>
				</li>
			</ul>
    </div>
</footer>
<div style="clear:both"></div>
<iframe src="<?php echo base_url()?>razorclean/stickyfooter" style="left: 0;width: 100%;height: 66px;padding-top: 0px;position: fixed;bottom: 0;background: rgba(0, 0, 0, 0.45);z-index: 99999;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0"></iframe>

</BODY>

</html>