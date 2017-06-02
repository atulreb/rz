<?php $this->load->view('partials/l_header');?>

<!--Include bootstrap menu for mobile devices-->
<div class="container visible-xs">
<nav class="navbar navbar-default" role="navigation">
	<!-- <nav class="navbar navbar-default navbar-fixed-top visible-sm visible-xs" role="navigation"> -->
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a class="navbar-brand" href="../index.html"><a href="../index.html" rel="home"><img src="../wp-content/themes/onsitedetailing/images/logo-osd.png" class="img-responsive logo-osd"></a><!-- On-Site Auto Detailing --></a>
		</div>

		<div class="collapse navbar-collapse navbar-ex1-collapse"><ul id="menu-main-menu" class="nav navbar-nav"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a title="Home" href="../index.html"><span class="glyphicon Welcome to On-Site Detailing"></span>&nbsp;Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9"><a title="About Us" href="../about-mobile-auto-detailing/index.html"><span class="glyphicon Mobile Auto Detailing Service"></span>&nbsp;About Us</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11"><a title="Schedule Appointment" href="../schedule-appointment/index.html">Schedule Appointment</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-ancestor current-menu-parent current-post-parent menu-item-has-children menu-item-19 dropdown"><a title="Services" href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon Auto Detailing Services"></span>&nbsp;Services <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-20"><a title="Interior Auto Detailing Service" href="../interior-auto-detailing/index.html">Interior Auto Detailing Service</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-post current-menu-item menu-item-21 active"><a title="Freshen Up Auto Detail Service" href="index.html">Freshen Up Auto Detail Service</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-34"><a title="Ultimate Auto Detail Service" href="../ultimate-auto-detail-service/index.html">Ultimate Auto Detail Service</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-35"><a title="Full Auto Detail Service" href="../full-auto-detail-service/index.html">Full Auto Detail Service</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-36"><a title="Exterior Auto Detailing Service" href="../exterior-auto-detailing/index.html">Exterior Auto Detailing Service</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-55"><a title="Testimonials" href="../category/testimonials/index.html"><span class="glyphicon Customer Testimonials"></span>&nbsp;Testimonials</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-89"><a title="Contact Us" href="../contact-us/index.html">Contact Us</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118"><a title="Special Offers" href="../special-offers/index.html">Special Offers</a></li>
</ul></div>		
	</div>
</nav>
</div>
<!--End bootstrap menu for mobile devices-->


<div class="container page_body">

<script>            
		var searchBox = document.getElementById('searchinput');
		searchBox.onfocus=function(){
			if (this.value == 'search...') {
				this.value = '';
			}
		}

		searchBox.onblur=function(){
			if (this.value == '') {
				this.value = 'search...';
			}
		}
</script>
	<div class="row">
		<div class=" col-md-12">
								<h1 class="page_header">Freshen Up Auto Detail Service</h1>
					 
					<div class="content"><dl class="price">
<dt>Cars</dt>
<dd>$49 &#8211; $69</dd>
<dt>Truck/SUV</dt>
<dd>$79 &#8211; $99</dd>
</dl>
<p>A maintenance service, perfect for in-between details, to keep your vehicle feeling fresh.</p>
<div class="row "><div class="col-lg-6 col-md-6 col-xs-12 col-sm-12"></p>
<ul>
<li>Vacuum (includes trunk)</li>
<li>Clean center console/cup holders</li>
<li>Shampoo floor mats</li>
<li>Wipe down dash and doors</li>
</ul>
<p></div>
<div class="col-lg-6 col-md-12 col-xs-12 col-sm-12"></p>
<ul>
<li>Clean windows inside and out</li>
<li>Executive hand wash</li>
<li>Clean wheels and apply tire shine</li>
<li>Spray wax</li>
</ul>
<p></div>
</div>
<a class="btn btn-primary btn-lg  " href="<?php echo base_url()?>mobile-detail/contact"  rel=""  target="_self"><i class="glyphicon glyphicon-pencil" ></i> Schedule an Appointment</a>
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
<?php $this->load->view('partials/l_footer');?>