
<?php $this->load->view('partials/l_header')?>

         
        
        <div class="body_width site_middle_content"><!-- post title holder -->
<div class="page_title_holder">
	<div class="container">
		<div class="page_info">
        				<h1>Blogs</h1>
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
				<ul div id="portfolio_container" class="thumbnails">
				
				<?php foreach($arr_blog_data as $bd){ ?>
				<li class="portfolio_element span4 portfoliotagfilter-job-opportunities">
							<div class="portfolio_item">
                                    <a href="<?php echo base_url() ."uploads/blogs/233x155/".$bd['blog_image']?>" class="prettyPhoto slideshow_24135" rel="prettyPhoto"></a>
										<div class="portfolio_thumbnail">
									

            <img width="520" height="337" src="<?php echo base_url() ."uploads/blogs/233x155/".$bd['blog_image']?>" class="attachment-portfolio size-portfolio wp-post-image" alt="" />
											<div class="portfolio_overlay">
                                    </div>
                                    <div class="center-bar">
                                        <a class="prettyPhotolink icon-search goup" rel="slideshow_24135"></a>
                                    </div>
								</div>
								<div class="portfolio_info">
									<a href="<?php echo base_url()."staffing/blog-details/".$bd['slug']?>"><h5><?php echo $bd['post_title']?></h5></a>
                            		<span class="portfolio_category"><a href="index.html" rel="tag"><?php echo $bd['service_category']?></a></span>
								</div>
							</div>
						</li>
				<?php }?>
											
											
											
											
									
									</ul>
				<div class='pagination'>
				<ul>
				<?php echo $pg_link ?></ul></div>
			</div>
		</div>
	</div>
		<!-- end single portfolio container -->


</section><!-- #content -->

</div> <!-- end body width from header -->


<?php $this->load->view('partials/l_footer')?>