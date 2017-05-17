
<?php $this->load->view('partials/l_header')?>

         
        
        <div class="body_width site_middle_content"><!-- post title holder -->
<div class="page_title_holder">
	<div class="container">
		<div class="page_info">
        				<h1>Job Opportunities</h1>
					</div>
		<div class="page_nav">
		
		</div>
	</div>
</div>
<!-- end post title holder -->
<section class="main_content">
	<!-- start single portfolio container -->
		<div class="container services new_section">
		<div id="post-24135" class="portfolio_page row post-24135 project type-project status-publish has-post-thumbnail hentry tagportfolio-job-opportunities">
			<div class="span12 portfolio_items">
				<ul div id="portfolio_container" class="jobs_list thumbnails">
				<?php foreach($jobs as $job){?>
											<li class="portfolio_element span4 portfoliotagfilter-job-opportunities">
							<div class="portfolio_item">
                                    <a href="<?php echo base_url()?>media/landing-pages/staffing/wp-content/uploads/picking-packing-.jpg" class="prettyPhoto slideshow_24135" rel="prettyPhoto"></a>
										<div class="portfolio_thumbnail">
									

            <img width="520" height="337" src="<?php echo base_url()?>media/landing-pages/staffing/wp-content/uploads/picking-packing--520x337.jpg" class="attachment-portfolio size-portfolio wp-post-image" alt="" />
											<div class="portfolio_overlay">
                                    </div>
                                    <div class="center-bar">
                                        <a class="prettyPhotolink icon-search goup" rel="slideshow_24135"></a>
                                    </div>
								</div>
								<div class="portfolio_info">
									<a href="<?php echo base_url()."staffing/job-details/".$job['id']?>"><h5><?php echo $job['job_title']?></h5></a>
                            		<span class="portfolio_category"><a href="javascript:;" rel="tag"><?php echo $job['service_category']?></a></span>
								</div>
							</div>
						</li>
				<?php }?>
									</ul>
				<div style="clear:both;margin:20px"></div>

                            <div style="text-align: center;"><button class="loadmore btn btn-primary btn_with_icon btn-effect" data-page="1">Load More</button></div>
			</div>
		</div>
	</div>
		<!-- end single portfolio container -->


</section><!-- #content -->

</div> <!-- end body width from header -->


<?php $this->load->view('partials/l_footer')?>
<script>
 jQuery(document).on('click', '.loadmore', function () {
                    jQuery(this).text('Loading...');
                    var ele = jQuery(this).parent();
					alert( jQuery(this).data('page'));
                    jQuery.ajax({
                        url: '<?php echo base_url()?>landing-pages/staffing/loadMoreJobs',
                        type: 'POST',
                        data: {
                            page: jQuery(this).data('page'),
                        },
                        success: function (response) {
                            alert(response);
                            if (response) {
                                ele.hide();
                                jQuery("#portfolio_container").after(response);
                            }
                        }
                    });
                });
</script>