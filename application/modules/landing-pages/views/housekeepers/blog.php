<?php $this->load->view('partials/l_header') ?>
<div id="main" class="all_colors" data-scroll-offset="88">
    <div id="full_slider_1" class="avia-fullwidth-slider main_color avia-shadow  avia-builder-el-0  el_before_av_blog  avia-builder-el-first  container_wrap sidebar_right">
        <div data-size="no scaling" data-lightbox_size="large" data-animation="slide" data-ids="725" data-video_counter="0" data-autoplay="false" data-bg_slider="false" data-slide_height="" data-handle="av_slideshow_full" data-interval="5" data-class=" " data-css_id="" data-scroll_down="" data-control_layout="av-control-default" data-custom_markup="" data-perma_caption="" data-autoplay_stopper="" data-image_attachment="" data-min_height="350px" data-src="" data-position="top left" data-repeat="no-repeat" data-attach="scroll" data-stretch="" class="avia-slideshow avia-slideshow-1  av-control-default avia-slideshow-no scaling av_slideshow_full   avia-slide-slider" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
            <ul class="avia-slideshow-inner" style="padding: 0px;">
                <li class="av-single-slide slide-1  active-slide" style="visibility: visible; opacity: 1; transition: none; transform: translateZ(0px);">
                    <div data-rel="slideshow-1" class="avia-slide-wrap">
                        <div class="caption_fullwidth av-slideshow-caption caption_left caption_left_framed caption_framed">
                            <div class="container caption_container">
                                <div class="slideshow_caption">
                                    <div class="slideshow_inner_caption">
                                        <div class="slideshow_align_caption">
                                            <h2 style="font-size:28px; " class="avia-caption-title" itemprop="name">Latest News</h2>
                                            <br><a href="<?php echo base_url()?>housekeepers/contact" class="avia-slideshow-button avia-button avia-color-orange avia-multi-slideshow-button" data-duration="800" data-easing="easeInOutQuad">Book Now</a><a href="<?php echo base_url()?>housekeepers/services" class="avia-slideshow-button avia-button avia-color-theme-color avia-multi-slideshow-button avia-slideshow-button-2" data-duration="800" data-easing="easeInOutQuad">Services</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><img src="<?php echo base_url()?>media/landing-pages/housekeepers/img/interior-of-modern-apartment-panorama-3d-render-1.jpg" width="1550" height="430" title="interior-of-modern-apartment-panorama-3d-render (1)" alt="RazorClean House Cleaning header" itemprop="thumbnailUrl" style="min-height: 350px; min-width: 1262px; left: 0px;">
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="after_full_slider_1" class="main_color av_default_container_wrap container_wrap sidebar_right">
        <div class="container">
            <div class="template-page content  av-content-small alpha units">
                <div class="post-entry post-entry-type-page post-entry-452">
                    <div class="entry-content-wrapper clearfix">
                        <div class="template-blog  av-blog-meta-html-info-disabled" itemscope="itemscope" itemtype="https://schema.org/Blog">
                            
                            
                            
                            
                            <?php foreach($arr_blog_data as $data){?>
                            <article class="post-entry post-entry-type-standard post-entry-983 post-loop-6 post-parity-even post-entry-last single-big with-slider post-983 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized" itemscope="itemscope" itemtype="https://schema.org/BlogPosting">
                                <div class="big-preview single-big">
                                    <a href="<?php echo base_url()."housekeepers/blog-details/".$data['slug'];?>" title="Brickell Guide for Newcomers"><img width="700" height="321" src="<?php echo base_url()."uploads/blogs/".$data['blog_image']?>" class="attachment-entry_with_sidebar size-entry_with_sidebar wp-post-image" alt="The Brickell Guide Fro Newcomers"><span class="image-overlay overlay-type-extern"><span class="image-overlay-inside"></span></span>
                                    </a>
                                </div>
                                <div class="blog-meta"></div>
                                <div class="entry-content-wrapper clearfix standard-content">
                                    <header class="entry-content-header">
                                        <h2 class="post-title entry-title" itemprop="headline"> 
                                            <a href="<?php echo base_url()."housekeepers/blog-details/".$data['slug'];?>" rel="bookmark" title=""><?php echo $data['post_title']?> <span class="post-format-icon minor-meta"></span> </a></h2><span class="post-meta-infos"><time class="date-container minor-meta updated"><?php echo date("F d, Y",strtotime($data['posted_on']))?></time><span class="text-sep text-sep-date">/</span>
                                                </span>
                                            </span>
                                        </span>
                                    </header>
                                    <div class="entry-content" itemprop="text">
                                        <p><?php echo substr($data['post_content'],0,100);?></p>
                                    </div>
                                    <footer class="entry-footer"></footer>
                                    <div class="post_delimiter"></div>
                                </div>
                                <div class="post_author_timeline"></div><span class="hidden">
                                    <span class="av-structured-data" itemscope="itemscope" itemtype="https://schema.org/ImageObject" itemprop="image">
                                        <span itemprop="url">https://downtownmaid.com/wp-content/uploads/2016/06/The-Brickell-Guide-Fro-Newcomers.png</span>
                                        <span itemprop="height">400</span>
                                        <span itemprop="width">700</span>
                                    </span><span class="av-structured-data" itemprop="publisher" itemtype="https://schema.org/Organization" itemscope="itemscope">
                                        <span itemprop="name">Mariann</span>
                                        <span itemprop="logo" itemscope="" itemtype="http://schema.org/ImageObject">
                                            <span itemprop="url">https://downtownmaid.com/wp-content/uploads/2015/01/downtown-maid-fianal-logo-flat-300x69.png</span>
                                        </span>
                                    </span><span class="av-structured-data" itemprop="author" itemscope="itemscope" itemtype="https://schema.org/Person"><span itemprop="name">Mariann</span></span><span class="av-structured-data" itemprop="datePublished" datetime="2016-06-30T14:43:55+00:00">2016-06-30 14:43:55</span><span class="av-structured-data" itemprop="dateModified" itemtype="https://schema.org/dateModified">2017-04-12 13:14:07</span><span class="av-structured-data" itemprop="mainEntityOfPage" itemtype="https://schema.org/mainEntityOfPage"><span itemprop="name">Brickell Guide for Newcomers</span></span>
                                </span>
                            </article>
                            <?php }?>
                            <div class="single-big">
                                <div class="pagination">
                                    <?php echo $pg_link;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="sidebar sidebar_right  alpha units" role="complementary" itemscope="itemscope" itemtype="https://schema.org/WPSideBar">
                <div class="inner_sidebar extralight-border">
                    
                    <section id="avia_combo_widget-2" class="widget clearfix avia_combo_widget">
                        <div class="tabcontainer border_tabs top_tab tab_initial_open tab_initial_open__1">
                            
                            <div class="tab first_tab active_tab widget_tab_popular fullsize-tab"><span>Popular</span>
                            </div>
                            <div class="tab_content active_tab_content">
                                <ul class="news-wrap">
                                    <?php foreach($latest_blog as $lb){?>
                                    <li class="news-content post-format-standard">
                                        <a class="news-link" title="" href="<?php echo base_url()."housekeepers/blog-details/".$lb['slug']?>"><span class="news-thumb "><img width="36" height="36" src="<?php echo base_url()."uploads/blogs/".$lb['blog_image']?>" class="attachment-widget size-widget wp-post-image" alt="woman cleaning the kitche" srcset="<?php echo base_url()."uploads/blogs/".$lb['blog_image']?> 36w, <?php echo base_url()."uploads/blogs/".$lb['blog_image']?> 80w, <?php echo base_url()."uploads/blogs/".$lb['blog_image']?> 180w, <?php echo base_url()."uploads/blogs/".$lb['blog_image']?> 120w, <?php echo base_url()."uploads/blogs/".$lb['blog_image']?> 450w" sizes="(max-width: 36px) 100vw, 36px"></span><strong class="news-headline"><?php echo $lb['post_title']?><span class="news-time"><?php echo date("F d, Y - h:i a",strtotime($lb['posted_on']))?></span></strong><span class="image-overlay overlay-type-extern"><span class="image-overlay-inside"></span></span></a>
                                    </li>
                                    <?php }?>
                                    
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
    </div>
    <?php $this->load->view('partials/l_footer') ?>