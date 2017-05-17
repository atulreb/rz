<?php $this->load->view('partials/l_header') ?>

<div id="content">

    <div class="title-wrapper text- background-cover parallax with-overlay top-padding">


        <div class="bg-image" style="background-image:url(&#039;http://arizonapaintingcompany.com/dev/wp-content/uploads/header-image-3.jpg&#039;);"></div>




        <div class="section-overlay pattern-overlay">

        </div>


        <div class="container">

            <div class="title">

                <h2>

                </h2>

            </div>

        </div>


    </div>

    <div class="container main-content one-right">
        <div class="row">
            <div class="col-md-8 main">
                <div class="content">
                    <div class="blog-posts">
                        <div class="item-wrapper">
                            <ul class="view large row">


                                <?php foreach ($arr_blog_data as $blog) { ?>
                                    <li class="item clear">
                                        <article id="post-7646" class="has-cover clear post-7646 post type-post status-publish format-standard has-post-thumbnail hentry">
                                            <div class="post-header">
                                                <div class="post-date">
                                                    <span class="date"><?php echo date("F d, Y", strtotime($blog['posted_on'])) ?></span>
                                                </div>
                                                <div class="image-wrapper">
                                                    <a href="<?php echo base_url() . "blog-details/" . $blog['slug']; ?>">
                                                        <img width="800" height="450" src="<?php echo base_url() . "uploads/blogs/" . $blog['blog_image'] ?> ?>" class="attachment-blog-large size-blog-large wp-post-image" alt="" />	    </a>
                                                </div>
                                            </div>
                                            <div class="post-detail">
                                                <h3 class="post-title"><a href="<?php echo base_url() . "painters/blog-details/" . $blog['slug']; ?>"><?php echo $blog['post_title']?></a></h3>    <div class="post-meta">
                                                    <span class="post-datetime">
                                                    </span>
                                                    <span class="post-category">
                                                        <strong>In</strong><a href="javascript:;" title=""><?php echo $blog['service_category']?></a>            </span>  
                                                    <div class="meta-right">
                                                        <span class="comments-link"><a href=""><i class="fa fa-comment-o"></i>0</a></span>
                                                        <div class="share-icons navbar-right">
                                                            <a href="blog.html#"><i class="fa fa-share-alt"></i></a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i>Facebook</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i>Twitter</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank"><i class="fa fa-google-plus"></i>Google+</a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="post-summary">
                                                    <p><?php echo $blog['post_content']; ?></p>
                                                </div>
                                                <p class="post-more"><a class="ghost-button" href="<?php echo base_url() . "painters/blog-details/" . $blog['slug']; ?>">Read More</a></p>
                                            </div>
                                        </article>      
                                    </li>
                                <?php } ?>
                            </ul>
                            <div class="pagination numberic">
                                <?php echo $pg_link; ?>
                            </div>        
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar col-md-3 col-md-offset-1">
                <div class="content">
                    <div id="categories-2" class="widget widget_categories"><h3>Latest Blogs</h3>		<ul>
                            <?php foreach ($latest_blog as $lb) { ?>
                                <li class="cat-item cat-item-1"><a href="<?php echo base_url()."painters/blog-details/".$lb['slug'];?>" ><?php echo $lb['post_title']?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>        </div>
            </div>
        </div>
    </div>



</div><!--#content-->

<?php $this->load->view('partials/l_footer') ?>