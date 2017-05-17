<?php $this->load->view('partials/l_header') ?>
<div id="content">

    <div class="title-wrapper text- top-padding">




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
                <div class="blog-detail content">
                    <div class="blog-detail-inner">
                        <article id="post-7646" class="has-cover clear post-7646 post type-post status-publish format-standard has-post-thumbnail hentry ">
                            <div class="post-header">
                                <div class="image-wrapper">
                                    <a href="<?php echo base_url()."uploads/blogs/670x470/".$blog_details[0]['blog_image']?>" rel="prettyPhoto[blog]">
                                        <img width="800" height="450" src="<?php echo base_url()."uploads/blogs/670x470/".$blog_details[0]['blog_image']?>" class="attachment-blog-large size-blog-large wp-post-image" alt="" />        </a>
                                </div>
                            </div>
                            <div class="post-detail">
                                <h2 class="post-title"><?php echo $blog_details[0]['post_title']?></h2>    <div class="post-meta">
                                    <span class="post-datetime">
                                        <span class="date"><a href="javascript:;"><?php echo date("F d, Y",strtotime($blog_details[0]['posted_on']))?></a></span>
                                    </span>
                                    <span class="post-category">
                                        <strong>In</strong><a href="javascript:;" title=""><?php echo $blog_details[0]['service_category']?></a>            </span>  
                                    <div class="meta-right">
                                        <span class="comments-link"><a href="javascript:;"><i class="fa fa-comment-o"></i>0</a></span>
                                        

                                    </div>
                                </div>
                                <div class="post-content">
                                    <p><?php echo $blog_details[0]['post_content']?></p>
                                </div>
                            </div>
                        </article>

                    </div>

                </div>
            </div>
            <div class="sidebar col-md-3 col-md-offset-1">
                <div class="content">
                    <div id="categories-2" class="widget widget_categories"><h3>Categories</h3>		<ul>
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