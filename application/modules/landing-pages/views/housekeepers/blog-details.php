<?php $this->load->view('partials/l_header') ?>
<div id="main" style="padding-top: 100px;" class="all_colors" data-scroll-offset="88">
    <div class="container_wrap container_wrap_first main_color sidebar_right">
        <div class="container template-blog template-single-blog ">
            <main class="content units av-content-small alpha  av-blog-meta-html-info-disabled" role="main" itemscope="itemscope" itemtype="https://schema.org/Blog">
                <article class="post-entry post-entry-type-standard post-entry-1068 post-loop-1 post-parity-odd post-entry-last single-big with-slider post-1068 post type-post status-publish format-standard has-post-thumbnail hentry category-cleaning-service tag-downtown-maid tag-miami tag-party-cleanup" itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost">
                    <div class="big-preview single-big">
                        <a href="<?php echo base_url()?>uploads/blogs/<?php echo $blog_details[0]['blog_image']?>" title="" class="lightbox-added"><img width="700" height="321" src="<?php echo base_url()?>uploads/blogs/<?php echo $blog_details[0]['blog_image']?>" class="attachment-entry_with_sidebar size-entry_with_sidebar wp-post-image" alt="After Party Clean Up Services in Miami Downtownmaid"><span class="image-overlay overlay-type-image" style="left: -5px; top: 0px; overflow: hidden; display: block; height: 365px; width: 807px;"><span class="image-overlay-inside"></span></span>
                        </a>
                    </div>
                    <div class="blog-meta"></div>
                    <div class="entry-content-wrapper clearfix standard-content">
                        <header class="entry-content-header">
                            <h1 class="post-title entry-title" itemprop="headline"> <a href="javascript:;" rel="bookmark" title="Permanent Link: Hassle Free Parties in Miami"><?php echo $blog_details[0]['post_title'] ?> <span class="post-format-icon minor-meta"></span> </a></h1><span class="post-meta-infos">
                                <time class="date-container minor-meta updated"><?php echo date("F d, Y",strtotime($blog_details[0]['posted_on']))?></time><span class="text-sep text-sep-date">/</span><span class="blog-categories minor-meta">in <a href="javascript:;" rel="tag"><?php echo $blog_details[0]['service_category']?></a> </span><span class="text-sep text-sep-cat">/</span><span class="blog-author minor-meta">by <span class="entry-author-link"><span class="vcard author"><span class="fn"><a href="javascript:;" title="" rel="author">Admin</a></span></span>
                                    </span>
                                </span>
                            </span>
                        </header>
                        <div class="entry-content" itemprop="text">
                            <p class="p1"><?php echo $blog_details[0]['post_content'] ?></p>
                        </div>
                        <div class="post_delimiter"></div>
                    </div>
                </article>
                <div class="single-big"></div>

                <div class="comment-entry post-entry">
                </div>

            </main>
            <aside class="sidebar sidebar_right  alpha units" role="complementary" itemscope="itemscope" itemtype="https://schema.org/WPSideBar">
                <div class="inner_sidebar extralight-border">

                    <section id="avia_combo_widget-2" class="widget clearfix avia_combo_widget">
                        <div class="tabcontainer border_tabs top_tab tab_initial_open tab_initial_open__1">

                            <div class="tab first_tab active_tab widget_tab_popular fullsize-tab"><span>Popular</span>
                            </div>
                            <div class="tab_content active_tab_content">
                                <ul class="news-wrap">
                                    <?php foreach ($latest_blog as $lb) { ?>
                                        <li class="news-content post-format-standard">
                                            <a class="news-link" title="" href="<?php echo base_url() . "housekeepers/blog-details/" . $lb['slug'] ?>"><span class="news-thumb ">
                                                    <img width="36" height="36" src="<?php echo base_url() . "uploads/blogs/" . $lb['blog_image'] ?>" class="attachment-widget size-widget wp-post-image" alt="woman cleaning the kitche" srcset="<?php echo base_url() . "uploads/blogs/" . $lb['blog_image'] ?> 36w, <?php echo base_url() . "uploads/blogs/" . $lb['blog_image'] ?> 80w, <?php echo base_url() . "uploads/blogs/" . $lb['blog_image'] ?> 180w, <?php echo base_url() . "uploads/blogs/" . $lb['blog_image'] ?> 120w, <?php echo base_url() . "uploads/blogs/" . $lb['blog_image'] ?> 450w" sizes="(max-width: 36px) 100vw, 36px"></span>
                                                <strong class="news-headline"><?php echo $lb['post_title'] ?>
                                                    <span class="news-time"><?php echo date("F d, Y - h:i a", strtotime($lb['posted_on'])) ?></span>
                                                </strong>
                                                <span class="image-overlay overlay-type-extern">
                                                    <span class="image-overlay-inside icon-expand"></span>

                                                </span></a>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </div>                





                        </div><span class="seperator extralight-border"></span>
                    </section>
                   <section id="text-6" class="widget clearfix widget_text">
                                    <h3 class="widgettitle">Get In Touch</h3>
                                    <div class="textwidget">
                                        <p><span class="av_font_icon avia_animate_when_visible av-icon-style-  av-no-color avia-icon-pos-left  avia_start_animation avia_start_delayed_animation icon-chevron-right" style=""><span class="av-icon-char icon-home" style="font-size:20px;line-height:20px;"></span></span> RazorClean House Cleaning </p>
                                        </p>
                                        <p><span class="av_font_icon avia_animate_when_visible av-icon-style-  av-no-color avia-icon-pos-left  avia_start_animation avia_start_delayed_animation" style=""><span class="av-icon-char icon-email" style="font-size:20px;line-height:20px;" ></span></span> signup@rzclnhousecleaning.com</p>
                                        <p><span class="av_font_icon avia_animate_when_visible av-icon-style-  av-no-color avia-icon-pos-left  avia_start_animation avia_start_delayed_animation" style=""><span class="av-icon-char icon-phone" style="font-size:20px;line-height:20px;" ></span></span> 1-855 GO RZCLN (467-9256) </p>
                                        <p>We are here to help you, please give us a call or email us. Thank You</p>
                                    </div>
                                    <span class="seperator extralight-border"></span>
                                </section>
                </div>
            </aside>
        </div>
    </div><?php $this->load->view('partials/l_footer') ?>