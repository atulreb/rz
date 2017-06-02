<?php $this->load->view('partials/l_header'); ?>


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
								<h1 class="page_header">Full Auto Detail Service</h1>
					 
					<div class="content"><dl class="price">
<dt>Cars</dt>
<dd>$149 &#8211; $159</dd>
<dt>Truck/SUV</dt>
<dd>$179 &#8211; $199</dd>
</dl>
<p>The best of both an interior and exterior detail all wrapped in one for the best value. This is our most popular service.</p>
<div class="row "><div class="col-lg-6 col-md-6 col-xs-12 col-sm-12"></p>
<ul>
<li>Vacuum all seats, mats, carpets including trunk</li>
<li>Scrub and shampoo mats to remove spots/stains</li>
<li>Hand wash exterior</li>
<li>Clay bar to remove contaminants like tree sap, bug residue, etc.</li>
</ul>
<p></div>
<div class="col-lg-6 col-md-12 col-xs-12 col-sm-12"></p>
<ul>
<li>Clean and condition dashboard and all compartments and vents</li>
<li>Clean glass inside and out</li>
<li>Clean door jambs</li>
<li>Mothers carnauba hand wax to protect mirror like finish</li>
</ul>
<p></div>
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
