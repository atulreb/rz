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
		<div class="col-lg-12 col-md-12">

			
							<h1 class="page_header">Special Offers</h1>
			 
						
			<div class="page_content">
			<div id="lessonCatDesc">						<p>Check our <a href="<?php echo $global_setting['facebook_link']?>" target="_blank">facebook</a> page,  or join our <a href="<?php echo base_url()?>mobile-detail/contact">email list</a> to be the first to hear about all of our Special Offers!</p>
			<div class="clear"></div></div>
			</div>
			
				
					</div>
		<!-- <div class="col-lg-3 col-md-12">
					</div> -->
	</div>
</div><!--end page_body container-->
<!-- <div class="container footer visible-lg">
	<div class="row footer-bg">
		<div class="col-md-12 footer-right">
		</div>
	</div>
</div> -->
<?php $this->load->view('partials/l_footer'); ?>