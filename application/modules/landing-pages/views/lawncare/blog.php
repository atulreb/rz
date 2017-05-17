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




    <div id="page-header-wrap" data-animate-in-effect="none" data-midnight="light" class="" style="height: 300px;">	    <div class="not-loaded "  data-animate-in-effect="none" id="page-header-bg"  data-text-effect="" data-bg-pos="top" data-alignment="left" data-alignment-v="middle" data-parallax="1" data-height="300" style="background-color: #000;  height: 300px;">

            <div class="page-header-bg-image" style="background-image: url(<?php echo base_url() ?>media/landing-pages/lawncare/wp-content/uploads/2015/03/innerhead-Blog.jpg);"></div> 
            <div class="container">
                <div class="row">
                    <div class="col span_6">
                        <div class="inner-wrap">
                            <h1></h1>
                            <span class="subheader"></span>
                        </div>

                    </div>
                </div>




            </div>
        </div>

    </div>
    <div class="container-wrap">

        <div class="container main-content">

            <div class="row">




                <div class="row">

                    <div id="post-area" class="col span_9 masonry classic "> <div class="posts-container" data-load-animation="none">				
                            <?php foreach ($arr_blog_data as $data) { ?>

                                <article id="post-4331" class="regular post-4331 post type-post status-publish format-standard has-post-thumbnail hentry category-natural-insect-repellent">

                                    <div class="inner-wrap animated">

                                        <div class="post-content">



                                            <div class="post-meta ">


                                                <div class="date">
                                                    <?php echo date("F d, Y", strtotime($data['posted_on'])) ?>					</div><!--/date-->




                                            </div><!--/post-meta-->



                                            <div class="content-inner">

                                                <a href="<?php echo base_url() . "lawncare/blog-details/" . $data['slug'] ?>"><span class="post-featured-img"><img width="810" height="450" src="<?php echo base_url() . "uploads/blogs/" . $data['blog_image'] ?>" class="attachment-large size-large wp-post-image" alt="Best plants to use as natural insect repellant" title="" srcset="<?php echo base_url() . "uploads/blogs/" . $data['blog_image'] ?> 810w, <?php echo base_url() . "uploads/blogs/" . $data['blog_image'] ?> 768w, <?php echo base_url() . "uploads/blogs/" . $data['blog_image'] ?> 300w, <?php echo base_url() . "uploads/blogs/" . $data['blog_image'] ?> 390w" sizes="(max-width: 810px) 100vw, 810px" /></span></a>				


                                                <div class="article-content-wrap">

                                                    <div class="post-header">

                                                        <h2 class="title">

                                                            <a href="<?php echo base_url() . "lawncare/blog-details/" . $data['slug'] ?>"><?php echo $data['post_title'] ?>									 </a> 
                                                        </h2>


                                                        <span class="meta-author"><span>By</span> <a href="author/admin/index.html" title="Posts by Admin" rel="author">Admin</a></span> <span class="meta-category">| <a href="category/natural-insect-repellent/index.html">Natural Insect Repellent</a></span> <span class="meta-comment-count">| <a href="natural-insect-repellent/best-plants-to-use-as-natural-insect-repellant/index.html#respond">
                                                                No Comments</a></span>
                                                    </div><!--/post-header-->
                                                    <p>Noxious insects are the bane of any homeowner who enjoys spending time outside during the warmer months. Mosquitoes, flies, gnats and other insects can be controlled with chemical sprays, but there are also many natural insect repellents that can help. There has been both scientific and anecdotal evidence that shows the oils and compounds found in these natural insect repellent plants can help keep the yard free of bugs.</p>
                                                    <p> <a href="<?php echo base_url() . "lawncare/blog-details/" . $data['slug'] ?>" class="more-link"><span class="continue-reading">Read More</span></a></p>

                                                </div><!--article-content-wrap-->





                                            </div><!--/content-inner-->

                                        </div><!--/post-content-->

                                    </div><!--/inner-wrap-->

                                </article><!--/article-->
                            <?php } ?>

                        </div><!--/posts container-->

                        <div class="paginate paginate-dark wrapper">
                            <ul>
                                <?php echo $pg_link; ?>
                            </ul>
                        </div>		
                    </div><!--/span_9-->

                    <div id="sidebar" class="col span_3 col_last">
                        <div id="nav_menu-2" class="widget widget_nav_menu"><h4>Latest Blogs</h4><div class="menu-footer-container">
                                <ul id="menu-footer" class="menu">
                                    <?php foreach ($latest_blog as $lb) { ?>
                                        <li id="menu-item-2820" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2820"><a href="<?php echo base_url() . "lawncare/blog-details/" . $lb['slug'] ?>"><?php echo $lb['post_title'] ?></a></li>
                                    <?php } ?>
                                </ul></div></div>    
                    </div><!--/sidebar-->

                </div>




            </div><!--/row-->

        </div><!--/container-->

    </div>
    <input type="hidden" name="ESmUV52M2U0k" id="ESmUV52M2U0k" />
    <script type="text/javascript">
        function fPA1GbAt5i7ag() {
            var o = document.getElementById("ESmUV52M2U0k");
            o.value = "GHjBSfbcRI6H";
        }
        var btqh3lfEPgDW5 = document.getElementById("submit");
        if (btqh3lfEPgDW5) {
            var c1oBWUiSNtT7o = document.getElementById("ESmUV52M2U0k");
            var pac4UmomZcw5x = btqh3lfEPgDW5.parentNode;
            pac4UmomZcw5x.appendChild(c1oBWUiSNtT7o, btqh3lfEPgDW5);
            addHandler(btqh3lfEPgDW5, "mousedown", fPA1GbAt5i7ag);
            addHandler(btqh3lfEPgDW5, "keypress", fPA1GbAt5i7ag);
        }
    </script>
    <?php $this->load->view('partials/l_footer') ?>