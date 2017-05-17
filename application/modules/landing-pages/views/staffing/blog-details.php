<?php $this-> load->view('partials/l_header')?>



        <div class="body_width site_middle_content">

<!-- post title holder -->
<!-- end post title holder -->

<section class="main_content">
	<div class="container single_blog blog_posts new_section">
		<div class="row-fluid">
        				<div class="span9 blog_main_content  pull-right">
																	<article id="post-24284" class="blog_post post-24284 post type-post status-publish format-standard hentry category-uncategorized">

						<div class="blog_info clearfix">
                                          <div class="blog_box_item post_type_box_item">
                                <i class="icon-pencil" title="Text"></i>                            </div>
                            							<div class="blog_heading">
								<div class="blog_title">
									<a href="index.html"><h3><?php echo $blog_details[0]['post_title']?></h3></a>
								</div>
                                                <div class="blog_info_box clearfix">


                                    <div class="blog_box_item"><span class="blog_date meta_item"><i class="icon-calendar meta_icon"></i> <?php echo date("F d, Y",strtotime($blog_details[0]['posted_on']))?></span></div>
                                                                                                            <div class="blog_box_item"><span class="blog_category meta_item"><i class="icon-folder-open meta_icon"></i> <a href="javascript:;" rel="category tag"><?php echo $blog_details[0]['service_category']?></a></span></div>
                                    
                                </div>
                              							</div>

						</div>
                        						<div class="blog_description">
							<?php echo $blog_details[0]['post_content']?>

							                        	<div class="blog_post_tags clearfix"></div>
													</div>

						<!-- start post author box -->
												<!-- end post author box -->

						
					</article>
											</div>
			<aside class="span3 side_content  pull-left">
				<img src="<?php echo base_url()."uploads/blogs/".$blog_details[0]['blog_image']?>">
							</aside>
             <!-- end if full width -->
		</div>
	</div>
</section><!-- #content -->

</div> <!-- end body width from header -->
<?php $this-> load->view('partials/l_footer')?>
