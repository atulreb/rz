<div id="customHeading" style="
    background: #bd252c;
    padding:15px 0;
    color: #fff;
">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 style="font-size:30px;margin-bottom:0" class="section-heading"><marquee><i class="fa fa-angle-double-left" aria-hidden="true"></i> RazorClean, The Circle of Trust. Save Money, Live RazorClean</marquee></h2>
            </div>
        </div>
    </div>
</div>




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
	width: 23%;
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
        
		   <span class="copyright-text">Email- signup@rzclnpestcontrol.com</span>
		   
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

<!--div id="zone-preface-wrapper" class="zone-wrapper zone-preface-wrapper clearfix">  
    <div id="zone-preface" class="zone zone-preface clearfix container-12">
        <div class="grid-4 region region-preface-first" id="region-preface-first">
            <div class="region-inner region-preface-first-inner">
                <div class="block block-block block-10 block-block-10 odd block-without-title" id="block-block-10">
                    <div class="block-inner clearfix">

                    </div>
                </div><div class="block block-block block-11 block-block-11 even block-without-title" id="block-block-11">
                    <div class="block-inner clearfix">

                        <div class="content clearfix">
                            <h2>Contact:</h2>

                            <p><br />
                                signup@rzclnpestcontrolservices.com</p>

                            <p><b>Phone/Fax:</b><br />
                                1-855 GO RZCLN (467-9256)<br />
                                </p>
                        </div>
                    </div>
                </div>  </div>
        </div>
        <div class="grid-4 region region-preface-second" id="region-preface-second">
           
            <div class="grid-4 region region-preface-third" id="region-preface-third">
            <div class="region-inner region-preface-third-inner">
                <div class="block block-block block-8 block-block-8 odd block-without-title" id="block-block-8">
                    <div class="block-inner clearfix">
 <p>Copyright <?php echo date("Y")?> RazorClean Termite & Pest Control </p> 
                    </div>
                </div> </div>
        </div>  </div>
</div></section>    
</div--> 
</div>  

<script type="text/javascript" src="<?php echo base_url() ?>media/landing-pages/pest-control/sites/default/files/js/js_5idECjjAo-X5YdkT65CaIiodkWmZlZv-WjSkHlWhoYk.js"></script>

<script>
                                jQuery("#webform-client-form-107").submit(function (e) {
                                    jQuery("#freeqt").val("Sending...");
                                    e.preventDefault(); // avoid to execute the actual submit of the form.
                                    var url = "<?php echo base_url() ?>landing-pages/Pest_Control/submitContactUsForm"; // the script where you handle the form input.
                                    //alert(url);
                                    jQuery.ajax({
                                        type: "POST",
                                        url: url,
                                        data: jQuery("#webform-client-form-107").serialize(), // serializes the form's elements.
                                        dataType: "json",
                                        success: function (data) {
                                            if (data.status === '0') {
                                                jQuery("#freeqt").val("Get Started");
                                                jQuery("#rsp2status").html("<span style='color:red'>" + data.msg + "</span>");
                                                jQuery("#gform_ajax_spinner_3").hide();
                                            } else {
                                                jQuery("#freeqt").val("Get Started");
                                                jQuery("#rsp2status").html("<span style='color:green'>" + data.msg + "</span>");
                                                jQuery("#gform_ajax_spinner_3").hide();
                                                $('#webform-client-form-107')[0].reset();
                                            }
                                        }
                                    });
                                });
</script>

<div style="clear:both"></div>
<iframe src="<?php echo base_url()?>razorclean/stickyfooter" style="left: 0;width: 100%;height: 66px;padding-top: 0px;position: fixed;bottom: 0;background: rgba(0, 0, 0, 0.45);z-index: 99999;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0"></iframe>

</body>

</html>