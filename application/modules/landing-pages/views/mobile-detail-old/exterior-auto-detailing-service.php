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
								<h1 class="page_header">Exterior Auto Detailing Service</h1>
					 
					<div class="content"><dl class="price">
<dt>Cars</dt>
<dd>$99 &#8211; $129</dd>
<dt>Truck/SUV</dt>
<dd>$149 &#8211; $179</dd>
</dl>
<p>Make your vehicle’s paint shine like it did in the showroom! An exterior detail can remove oxidation, light scratches and swirl marks, leaving a mirror like finish.</p>
<div class="row "><div class="col-lg-6 col-md-6 col-xs-12 col-sm-12"></p>
<ul>
<li>Executive hand wash</li>
<li>Clay bar to remove contaminants like tree sap, bug residue, etc.</li>
<li>Compound/polish to remove swirl marks, surface scratches, and minor oxidation</li>
</ul>
<p></div>
<div class="col-lg-6 col-md-12 col-xs-12 col-sm-12"></p>
<ul>
<li>Mothers carnauba hand wax to protect mirror like finish</li>
<li>Clean glass inside and out</li>
</ul>
<p></div>
</div>
<a class="btn btn-primary btn-lg  " href="../schedule-appointment/index.html"  rel=""  target="_self"><i class="glyphicon glyphicon-pencil" ></i> Schedule an Appointment</a>
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
