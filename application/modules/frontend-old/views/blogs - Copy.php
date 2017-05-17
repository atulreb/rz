<!--Banner-Start-->
<header class="Bg_Image_faq">
    <div class="terms_condition_hearder">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Blog</h1>

                <p>Razor Clean, Inc. A Company Built On Integrity, Quality and Trust.</p>


            </div>
        </div>
    </div>
</header>
<!--Banner-End-->
<section id="blogContent">
    <div class="container">
        <div class="col-md-8">
            <ul class="pgwSlider2">
                    <!-- <li><img style="visibility:hidden;" src="paris.jpg" alt="Paris, France" data-description="Eiffel Tower and Champ de Mars"></li> -->


                <?php foreach ($slide_arr_blog_data as $blog) { ?>
                    <li>
                        <a href="#" target="_blank">
                            <img style="visibility:hidden;display:none;" src="<?php echo base_url() . "uploads/blogs/" . $blog['blog_image'] ?>">
                            <p class="sliderpostTitle"><?php echo $blog['post_title'] ?></p>
                            <!-- <span>New York, NY, USA</span> -->
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <div class="clearfix">
                <h3>Recent Posts</h3>


                <?php foreach ($arr_blog_data as $blog) { ?>
                    <div class="col-md-6">
                        <div class="postThumb col-md-12">
                            <img src="<?php echo base_url() . "uploads/blogs/" . $blog['blog_image'] ?>">
                            <h3><?php echo $blog['post_title'] ?></h3>
                            <span><?php echo date("m F Y", strtotime($blog['posted_on'])) ?></span>
                            <p><?php echo $blog['post_content'] ?></p>
                            <a href="<?php echo base_url() . $blog['slug'] ?>">Read more</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php echo $pg_link; ?>

            <button type="submit" class="postbtn btn btn-default btn-lg">VIEW ALL POSTS</button>
        </div> 
        <?php echo $template['partials']['blog_sidebar']; ?>
    </div>
</section>

<hr class="customHr">