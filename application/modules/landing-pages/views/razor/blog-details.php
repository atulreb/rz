<?php $this->load->view('partials/l_header') ?>

<section class="container" role="document" style="transform: none;">


    <div id="text_page_title" class="single ">
        <div class="row">
            <div class="small-12 columns">
                <div class="breadcrumbs"><i class="icon-home-3"></i><span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="http://quartz.themegasm.net" rel="v:url" property="v:title">Home</a> / <span typeof="v:Breadcrumb"><a href="http://quartz.themegasm.net/blog/" rel="v:url" property="v:title">Blog</a> / <span class="breadcrumb_last"><?php echo $blog_details[0]['post_title']?></span></span>
                    </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row single_wrap" style="transform: none;">


        <div class="small-12 medium-7 large-8 columns stick_side content_col" role="main" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">



            <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static;">
                <article class="post-10 post type-post status-publish format-standard has-post-thumbnail hentry category-thoughts tag-common tag-deep tag-thoughts tag-wise" id="post-10">

                    <div class="post_content_wrap">



                        <div class="post_content">
                            <header class="standard">
                                <div class="featured_area">
                                    <div><img width="1024" height="683" src="<?php echo base_url()."uploads/blogs/670x470/".$blog_details[0]['blog_image']?>" class="attachment-large size-large wp-post-image" alt="photo-1439737567250-e9ea931e97a4s" srcset="<?php echo base_url()."uploads/blogs/670x470/".$blog_details[0]['blog_image']?> 1024w, <?php echo base_url()."uploads/blogs/670x470/".$blog_details[0]['blog_image']?> 300w, <?php echo base_url()."uploads/blogs/670x470/".$blog_details[0]['blog_image']?> 768w" sizes="(max-width: 1024px) 100vw, 1024px">
                                    </div>
                                </div>
                                <h1 class="entry-title"><?php echo $blog_details[0]['post_title']?></h1>
                                
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <time datetime=""><i class="icon-clock-5"></i><?php echo date("d F Y",strtotime($blog_details[0]['posted_on']))?></time>
                                        </li>
                                        <li><i class="icon-pencil-2"></i> <a href="javascript:;" rel="author" class="fn">Admin</a>
                                        </li>
                                        <li><i class="icon-folder-open-empty"></i> <a href="javascript:;" rel="category tag"><?php echo $blog_details[0]['service_category']?></a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </header>
                            <div class="entry-content">

                                <p>
                                    <?php echo $blog_details[0][ 'post_content']?>
                                </p>
                            </div>


                            <hr class="post_end">
                        </div>

                    </div>

                    <!--                    <div class="author_info">
                        <div class="img" style="background-image: url(http://quartz.themegasm.net/wp-content/uploads/2016/04/3c173e5d802dbac962203cab56f1fc03.jpeg)"></div>
                        <div class="c">
                            <h3><a href="http://quartz.themegasm.net/author/alialaa/">Ali Alaa (alialaa)</a></h3>
                            <p>I believe in unicorns &lt;3. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                            <ul><li data-tooltip="" data-options="disable_for_touch:true;" data-selector="tooltip-j2g7tstf6" aria-describedby="tooltip-j2g7tstf6" title=""><a href="#"><i class="icon-facebook"></i></a></li><li data-tooltip="" data-options="disable_for_touch:true;" data-selector="tooltip-j2g7tstf7" aria-describedby="tooltip-j2g7tstf7" title=""><a href="https://twitter.com/alialaa"><i class="icon-twitter"></i></a></li><li data-tooltip="" data-options="disable_for_touch:true;" data-selector="tooltip-j2g7tstf8" aria-describedby="tooltip-j2g7tstf8" title=""><a href="https://www.instagram.com/alialaa17/"><i class="icon-instagram-filled"></i></a></li><li data-tooltip="" data-options="disable_for_touch:true;" data-selector="tooltip-j2g7tstf9" aria-describedby="tooltip-j2g7tstf9" title=""><a href="#"><i class="icon-pinterest"></i></a></li><li data-tooltip="" data-options="disable_for_touch:true;" data-selector="tooltip-j2g7tstfa" aria-describedby="tooltip-j2g7tstfa" title=""><a href="#"><i class="icon-youtube-play"></i></a></li><li data-tooltip="" data-options="disable_for_touch:true;" data-selector="tooltip-j2g7tstfb" aria-describedby="tooltip-j2g7tstfb" title=""><a href="#"><i class="icon-github"></i></a></li></ul>				</div>
                    </div>-->


                    <!--                    <div class="posts_nav" data-equalizer="">
                        <div class="prev_post has_thumbnail" data-equalizer-watch=""><a href="http://quartz.themegasm.net/wolf-alice-on-soundcloud/"><div class="prev_post_content"><img width="150" height="150" src="http://quartz.themegasm.net/wp-content/uploads/2016/04/Wolf_Alice_-_My_Love_Is_Cool-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Wolf_Alice_-_My_Love_Is_Cool" srcset="http://quartz.themegasm.net/wp-content/uploads/2016/04/Wolf_Alice_-_My_Love_Is_Cool-150x150.jpg 150w, http://quartz.themegasm.net/wp-content/uploads/2016/04/Wolf_Alice_-_My_Love_Is_Cool-300x300.jpg 300w, http://quartz.themegasm.net/wp-content/uploads/2016/04/Wolf_Alice_-_My_Love_Is_Cool.jpg 500w, http://quartz.themegasm.net/wp-content/uploads/2016/04/Wolf_Alice_-_My_Love_Is_Cool-180x180.jpg 180w" sizes="(max-width: 150px) 100vw, 150px"><div class="prev_post_content_text"><p>Previous Story</p><h5>Wolf Alice on Soundcloud!</h5></div></div></a></div><div class="next_post has_thumbnail" data-equalizer-watch=""><a href="http://quartz.themegasm.net/big-banner-post/"><div class="next_post_content"><img width="150" height="150" src="http://quartz.themegasm.net/wp-content/uploads/2016/04/photo-1458532239918-14dabba19de5s-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="photo-1458532239918-14dabba19de5s" srcset="http://quartz.themegasm.net/wp-content/uploads/2016/04/photo-1458532239918-14dabba19de5s-150x150.jpg 150w, http://quartz.themegasm.net/wp-content/uploads/2016/04/photo-1458532239918-14dabba19de5s-180x180.jpg 180w, http://quartz.themegasm.net/wp-content/uploads/2016/04/photo-1458532239918-14dabba19de5s-300x300.jpg 300w, http://quartz.themegasm.net/wp-content/uploads/2016/04/photo-1458532239918-14dabba19de5s-600x600.jpg 600w" sizes="(max-width: 150px) 100vw, 150px"><div class="next_post_content_text"><p>Next Story</p><h5>Big Banner Post!</h5></div></div></a></div>			</div>-->


                    <!--                    <div id="comments" class="comments-area" data-comments_per_page="50">

                        <h5 class="comments-title">
                            (<span>2</span>) comments	</h5>

                        <div class="comments_wrap ajax">

                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/how-to-disappear-completely/#respond" style="display:none;">Cancel reply</a></small></h3>				<form action="http://quartz.themegasm.net/wp-comments-post.php?wpe-comment-post=alialaa" method="post" id="commentform" class="comment-form">
                                    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p class="comment-form-comment"><label for="comment">Comment <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea><div id="comment-status"></div></p><p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" aria-required="true" required="required"></p>
                                    <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required="true" required="required"></p>
                                    <p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="text" value="" size="30" maxlength="200"></p>
                                    <p class="form-submit"><div id="loading-status"></div><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="10" id="comment_post_ID">
                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                    </p>				</form>
                            </div> #respond 




                            <ul class="comment_list">
                                <li id="comment-3" class="comment byuser comment-author-alialaa bypostauthor even thread-even depth-1 post_comment">

                                    <div class="post_comment_avatar">
                                        <img alt="" src="http://1.gravatar.com/avatar/ad4494b5bc835ab8fa6d4c29c6499384?s=55&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/ad4494b5bc835ab8fa6d4c29c6499384?s=110&amp;d=mm&amp;r=g 2x" class="avatar avatar-55 photo" height="55" width="55">        </div>

                                    <div class="post_comment_content">
                                        <div class="post_comment_info"><h6><a href="http://themegasm.net">alialaa</a></h6><p class="comment_time">1 year ago</p></div>

                                        <p style="margin: 0px; line-height: 0;"></p><p>ere</p>
                                        <p style="margin: 0px; line-height: 0;"></p>
                                        <p class="comment_reply">
                                            <i class="icon-reply"></i> <a rel="nofollow" class="comment-reply-link" href="http://quartz.themegasm.net/how-to-disappear-completely/?replytocom=3#respond" onclick="return addComment.moveForm( & quot; comment - 3 & quot; , & quot; 3 & quot; , & quot; respond & quot; , & quot; 10 & quot; )" aria-label="Reply to alialaa">Reply</a>        </p>
                                    </div>

                                </li> #comment-## 
                                <li id="comment-2" class="comment byuser comment-author-alialaa bypostauthor odd alt thread-odd thread-alt depth-1 post_comment">

                                    <div class="post_comment_avatar">
                                        <img alt="" src="http://1.gravatar.com/avatar/ad4494b5bc835ab8fa6d4c29c6499384?s=55&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/ad4494b5bc835ab8fa6d4c29c6499384?s=110&amp;d=mm&amp;r=g 2x" class="avatar avatar-55 photo" height="55" width="55">        </div>

                                    <div class="post_comment_content">
                                        <div class="post_comment_info"><h6><a href="http://themegasm.net">alialaa</a></h6><p class="comment_time">1 year ago</p></div>

                                        <p style="margin: 0px; line-height: 0;"></p><p>e3e</p>
                                        <p style="margin: 0px; line-height: 0;"></p>
                                        <p class="comment_reply">
                                            <i class="icon-reply"></i> <a rel="nofollow" class="comment-reply-link" href="http://quartz.themegasm.net/how-to-disappear-completely/?replytocom=2#respond" onclick="return addComment.moveForm( & quot; comment - 2 & quot; , & quot; 2 & quot; , & quot; respond & quot; , & quot; 10 & quot; )" aria-label="Reply to alialaa">Reply</a>        </p>
                                    </div>

                                </li> #comment-## 
                            </ul> .comment-list 

                            <div class="more_comments_ajax_wrap"></div>



                        </div>


                    </div> #comments -->


                </article>
            </div>
        </div>

        <div class="small-12 medium-4 large-3 columns stick_side side_col" role="main" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

            <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; top: 80px; left: 994.5px;">
                
                
                <article id="quartz_most_recent-2" class="dark widget widget_quartz_most_recent">
                    <h6>Most Recent</h6>
                    <ul class="recent_widget_list">
                        <?php foreach($latest_blog as $lb){?>
                        <li class="thumbnail">
                            <img width="150" height="150" src="<?php echo base_url()."uploads/blogs/".$lb['blog_image']?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Paranoid_Android_CD1" srcset="<?php echo base_url()."uploads/blogs/".$lb['blog_image']?> 150w, <?php echo base_url()."uploads/blogs/".$lb['blog_image']?> 300w, <?php echo base_url()."uploads/blogs/".$lb['blog_image']?> 180w" sizes="(max-width: 150px) 100vw, 150px">
                            <div class="content">
                                <h6><a href="<?php echo base_url()."razor/blog-details/".$lb['slug']?>"><?php echo $lb['post_title']?></a></h6>
                                <p><?php echo substr($lb['post_content'],0,40)?>[..]</p>
                            </div>
                        </li>
                        <?php }?>
                        
                    </ul>
                </article>
                
                
            </div>
        </div>

    </div>


<!--    <div class="related_posts_wrap">
        <div class="row">
            <div class="small-12 columns">
                <div class="related_posts">
                    <h5>You may also like</h5>
                    <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4">
                        <li>
                            <div>
                                <a href="http://quartz.themegasm.net/big-banner-post/">
                                    <div data-mh="rp" style="height: 177px;"><img width="800" height="500" src="http://quartz.themegasm.net/wp-content/uploads/2016/04/photo-1458532239918-14dabba19de5s-800x500.jpg" class="attachment-quartz_landscape_thumbnail size-quartz_landscape_thumbnail wp-post-image" alt="photo-1458532239918-14dabba19de5s">
                                    </div>
                                    <h6>Big Banner Post!</h6>
                                    <time datetime="2016-04-25T14:55:26+00:00">25 Apr 2016</time>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="http://quartz.themegasm.net/new-york-graffiti/">
                                    <div data-mh="rp" style="height: 177px;"><img width="800" height="500" src="http://quartz.themegasm.net/wp-content/uploads/2016/04/photo-1461504775992-a24f27e35986-800x500.jpg" class="attachment-quartz_landscape_thumbnail size-quartz_landscape_thumbnail wp-post-image" alt="photo-1461504775992-a24f27e35986">
                                    </div>
                                    <h6>New York Graffiti</h6>
                                    <time datetime="2016-03-25T16:26:01+00:00">25 Mar 2016</time>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="http://quartz.themegasm.net/planetary/">
                                    <div data-mh="rp" style="height: 177px;"><img width="800" height="500" src="http://quartz.themegasm.net/wp-content/uploads/2016/04/F55294-800x500.jpg" class="attachment-quartz_landscape_thumbnail size-quartz_landscape_thumbnail wp-post-image" alt="F55294">
                                    </div>
                                    <h6>PLANETARY</h6>
                                    <time datetime="2016-02-25T16:25:28+00:00">25 Feb 2016</time>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="http://quartz.themegasm.net/html-5-videos-are-out/">
                                    <div data-mh="rp" style="height: 177px;"><img width="800" height="500" src="http://quartz.themegasm.net/wp-content/uploads/2016/04/photo-1440404653325-ab127d49abc1s-800x500.jpg" class="attachment-quartz_landscape_thumbnail size-quartz_landscape_thumbnail wp-post-image" alt="A Caption">
                                    </div>
                                    <h6>HTML 5 Videos are Out</h6>
                                    <time datetime="2016-01-25T16:02:25+00:00">25 Jan 2016</time>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>-->




</section>
<?php $this->load->view('partials/l_footer') ?>
<script>
    jQuery(document).ready(function() {
        jQuery('#seriverequestfrm').on('submit', function(e) {
            e.preventDefault();
            alert();
            jQuery('#request_reservice_btn').attr('disabled', true);
            jQuery('#request_reservice_btn').html('Please wait...');
            var url = "<?php echo base_url() ?>backend/Request_service/requestServiceForm"; // the script where you handle the form input.

            var formData = jQuery("#seriverequestfrm").serialize();
            jQuery.ajax({
                type: "POST",
                url: url,
                data: formData,
                dataType: 'json',
                success: function(data) {
                    //alert(data);
                    jQuery('#request_reservice_btn').attr('disabled', false);
                    jQuery('#request_reservice_btn').html('Submit');
                    if (data.status === '1') {
                        jQuery("#frmerror").html('<span style="color:green;font-weight: bold !important;">' + data.msg + '</span>');
                        jQuery('#seriverequestfrm')[0].reset();
                        return true;
                    } else {
                        jQuery("#frmerror").html('<span style="color:red;font-weight;bold!important">' + data.msg + '</span>');
                        return false;
                    }
                }
            });
        });
    });

    function selectCity(state_id) {
        if (state_id != "-1") {
            loadData('city', state_id);
        } else {
            $("#city_dropdown").html("<option value='-1'>Select city</option>");
        }
    }

    function loadData(loadType, loadId) {
        var dataString = 'loadType=' + loadType + '&loadId=' + loadId;
        jQuery("#" + loadType + "_loader").show();
        jQuery("#" + loadType + "_loader").fadeIn(400).html('Loading ' + loadType + '...');
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>frontend/location/loadData",
            data: dataString,
            cache: false,
            success: function(result) {
                jQuery("#" + loadType + "_loader").hide();
                jQuery("#" + loadType + "_dropdown").html("<option value='-1'>Select " + loadType + "</option>");
                jQuery("#" + loadType + "_dropdown").append(result);
            }
        });
    }
</script>