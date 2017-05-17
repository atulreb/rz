<?php $this->load->view('partials/l_header') ?>

<div id="mobile-menu" data-mobile-fixed="1">

    <div class="container">
        <ul>
            <li><a href="#">No menu assigned!</a></li>		
        </ul>
    </div>

</div>

<div id="ajax-loading-screen" data-disable-fade-on-click="0" data-effect="standard" data-method="ajax">

    <span class="loading-icon none"> 
        <span class="default-skin-loading-icon"></span> 
    </span>
</div>

<div id="ajax-content-wrap">









    <div class="container-wrap  ">

        <div class="container main-content">



            <div class="row heading-title" data-header-style="default">
                <div class="col span_12 section-title blog-title">
                    <h1 class="entry-title"> <?php echo $blog_details[0]['post_title']?></h1>

                    <div id="single-below-header">
                        <span class="meta-author vcard author"><span class="fn">By <a href="../../author/admin/index.html" title="Posts by Admin" rel="author">Admin</a></span></span><!--
                        --><span class="meta-date date updated"> <?php echo date("F d, Y",strtotime($blog_details[0]['posted_on']))?></span><!--
                        --><span class="meta-category"><a href="javascript:;"><?php echo $blog_details[0]['service_category']?></a></span> 							</ul><!--project-additional-->
                    </div><!--/single-below-header-->

                    <div id="single-meta" data-sharing="1">
                        <ul>

                            <li class="meta-comment-count">
                                <a href="index.html#respond"><i class="icon-default-style steadysets-icon-chat"></i> No Comments</a>
                            </li>

                            <li>
                                <span class="n-shortcode"><a href="#" class="nectar-love" id="nectar-love-3939" title="Love this"> <i class="icon-salient-heart"></i><span class="nectar-love-count">0</span></a></span>									   	</li>

                            <li class="meta-share-count"><a href="#"><i class="icon-default-style steadysets-icon-share"></i><span class="share-count-total">0</span></a> <div class="nectar-social"><a class='facebook-share nectar-sharing' href='#' title='Share this'> <i class='icon-facebook'></i> <span class='count'></span></a><a class='twitter-share nectar-sharing' href='#' title='Tweet this'> <i class='icon-twitter'></i> <span class='count'></span></a><a class='pinterest-share nectar-sharing' href='#' title='Pin this'> <i class='icon-pinterest'></i> <span class='count'></span></a></div></li>


                        </ul>


                    </div><!--/single-meta-->

                </div><!--/section-title-->
            </div><!--/row-->



            <div class="row">

                <div id="post-area" class="col span_9">
                    <article id="post-3939" class="regular post-3939 post type-post status-publish format-standard has-post-thumbnail hentry category-gardening-as-a-hobby">

                        <div class="inner-wrap animated">

                            <div class="post-content">



                                <div class="content-inner">

                                    <span class="post-featured-img"><img width="1600" height="1067" src="<?php echo base_url() . "uploads/blogs/" . $blog_details[0]['blog_image'] ?>" class="attachment-full size-full wp-post-image" alt="" title="" srcset="<?php echo base_url() . "uploads/blogs/" . $blog_details[0]['blog_image'] ?> 1600w, <?php echo base_url() . "uploads/blogs/" . $blog_details[0]['blog_image'] ?> 1024w" sizes="(max-width: 1600px) 100vw, 1600px" /></span>				


                                    <?php echo $blog_details[0]['post_content'] ?>

                                    <h2></h2>


                                </div><!--/content-inner-->

                            </div><!--/post-content-->

                        </div><!--/inner-wrap-->

                    </article><!--/article-->






                </div><!--/span_9-->


                <div id="sidebar" class="col span_3 col_last">
                    <div id="nav_menu-2" class="widget widget_nav_menu"><h4>Latest Blogs</h4><div class="menu-footer-container">
                            <ul id="menu-footer" class="menu">
                                <?php foreach($latest_blog as $lb){?>
                                <li id="menu-item-2820" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2820"><a href="<?php echo base_url()."lawncare/blog-details/".$lb['slug']?>"><?php echo $lb['post_title']?></a></li>
                                <?php }?>
                            </ul></div></div>    
                </div><!--/sidebar-->




            </div><!--/row-->



            <!--ascend only author/comment positioning-->
            <div class="row">





            </div>



        </div><!--/container-->

    </div><!--/container-wrap-->
    <?php $this->load->view('partials/l_footer') ?>