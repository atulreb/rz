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
        <div class="col-lg-8">
            <h1><?php echo $blog_posts[0]['post_title'] ?></h1>
            <p class="lead">
                by <a href="javascript:;"><?php echo $blog_posts[0]['posted_by'] ?></a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo date('d F Y', strtotime($blog_posts[0]['posted_on'])) ?></p>

            <img class="img-responsive" src="<?php echo base_url() . "uploads/blogs/" . $blog_posts[0]['blog_image'] ?>" alt="">

            <hr>
            <!-- Post Content -->
            <p class="lead"><?php echo $blog_posts[0]['post_content'] ?></p>

            <!-- Blog Comments -->
            <?php if ($this->session->userdata('success_msg') != ''): ?>
                <div class="alert alert-success alert-dismissible fade in" id="success_msg" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span>
                    </button>
                    <strong><?php echo $this->session->userdata('success_msg'); ?></strong> 
                </div>
            <?php endif;
            $this->session->unset_userdata('success_msg');
            ?>

            <!-- Comments Form -->
            <form method="POST" id="demo-form2" action="<?php echo base_url() ?>addComment/<?php echo $blog_posts[0]['slug'] ?>">
                <div class="well" id="commentfrm">
                    <h4>Leave a Comment:</h4>

                    <div class="item form-group">
                        <input type="text" class="form-control" style="color:#000!important" name="email" id="email" value="<?php echo $this->session->userdata('user_account')['email'];?>" required="required" />
                    </div>
                    <div class="item form-group">
                        <textarea class="form-control" style="color:#000!important" name="message" id="message" required="required" ></textarea>
                    </div>
                    <button type="submit" name="submit" class="postbtn btn btn-default">Submit</button>

                </div>
            </form>

            <hr>

            <!-- Posted Comments -->
<?php foreach ($blog_posts[0]['comments'] as $comment) { ?>
                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment['commented_user'] ?>
                            <small><?php echo $comment['comment_on'] ?></small>
                        </h4>
                <?php echo $comment['comment'] ?>
                    </div>
                </div>
<?php } ?>


        </div>
<?php echo $template['partials']['blog_sidebar']; ?>
    </div>
</section>

<hr class="customHr">
