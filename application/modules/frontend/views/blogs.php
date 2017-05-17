<!--Banner-Start-->
<header class="head-bottom-border-style">
    <div class="header-content">
        <div class="header-content-inner innerpage-heading text-left">
            <h2 id="homeHeading">Blog</h2>
            <hr>
            <p>RazorClean, Inc. A Company Built On Integrity, Quality and Trust.</p>
            <!--<a href="#about" class="btn btn-primary btn-xl page-scroll">Enter Site</a>-->

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
                            <img style="visibility:hidden;display:none;" src="<?php echo base_url() . "uploads/blogs/540x360/" . $blog['blog_image'] ?>">
                            <p class="sliderpostTitle"><i class="fa fa-circle" aria-hidden="true"></i><?php echo $blog['post_title'] ?></p>
                            <!-- <span>New York, NY, USA</span> -->
                        </a>
                    </li>
                <?php } ?>
            </ul>



        </div> 
        <?php echo $template['partials']['blog_sidebar']; ?>
    </div>
    <div class="clearfix"></div>
    <section id="recentTitle">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h2><span class="hightlight-text">Recent</span> Posts</h2>
                    <img src="<?php echo frontend_asset_url() ?>img/Line.png"/>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">



            <?php foreach ($slide_arr_blog_data as $blog) { ?>
                <div class="col-md-3">
                    <div class="postThumb">
                        <img src="<?php echo base_url() . "uploads/blogs/233x155/" . $blog['blog_image'] ?>">
                        <h3><?php echo $blog['post_title'] ?></h3>
                        <span><?php echo  date('d F Y',strtotime($blog['posted_on'])) ?></span>
                        <p><?php echo substr($blog['post_content'], 0, 100); ?>...</p>
                        <a href="<?php echo base_url() . $blog['slug'] ?>">Read more</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        <div class="row">
            <div class="text-center">
                <a href="<?php echo base_url()?>allblog">  <button type="submit" class="postbtn btn btn-default btn-lg">VIEW ALL POSTS</button>

            </div>
        </div>
    </div>


</section>


<div class="hr_Line"><hr></div> 