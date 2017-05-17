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


<section id="blogsearchContent">
    <div class="container">
        <div class="col-md-8">
            <?php if (isset($search_term)) { ?><h3 class="searchTitle">Search results for "<span><?php echo $search_term ?></span>"</h3><?php } ?>
            <?php
            if (!empty($arr_blog_data)) {
                foreach ($arr_blog_data as $blog) {
                    ?>
                    <div class="col-md-12">
                        <div class="postThumb col-md-12">
                            <img src="<?php echo base_url() . "uploads/blogs/670x470/" . $blog['blog_image'] ?>">
                            <h3><?php echo $blog['post_title'] ?></h3>
                            <span><?php echo  date('d F Y',strtotime($blog['posted_on'])) ?></span>
                            <p><?php echo substr($blog['post_content'],0,150) ?></p>
                            <a href="<?php echo base_url() . $blog['slug'] ?>">Read more</a>
                        </div>

                    </div>
                    <?php
                }
            } else {
                echo "<h3>No results found</h3>";
            }
            ?>
            <div class="text-center">
                <nav aria-label="pages">
                    <ul class="pagination">
<!--                        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2 <span class="sr-only"></span></a></li>
                        <li><a href="#">3 <span class="sr-only"></span></a></li>
                        <li><a href="#">4 <span class="sr-only"></span></a></li>-->
                        <?php echo $pg_link; ?>
                    </ul>

                </nav>
            </div>

        </div>



        <?php echo $template['partials']['blog_sidebar']; ?>


    </div>

    <div class="hr_Line"><hr></div>
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
                        <p><?php echo substr($blog['post_content'], 0, 100); ?></p>
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
                <a href="<?php echo base_url() ?>blog"><button type="submit" class="postbtn btn btn-default btn-lg">VIEW ALL POSTS</button></a>

            </div>
        </div>
    </div>
</section>
<hr class="customHr">