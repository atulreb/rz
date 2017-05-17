<!--navigation-->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand desktop-only" href="#">
                    <img src="<?php echo frontend_asset_url()?>img/logow.png" alt="">
                </a>
                <a class="navbar-brand-mobile mobile-only" href="#">
                    <img src="<?php echo frontend_asset_url()?>img/logob.png" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="<?php echo base_url()?>">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url()?>about-us">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url()?>blog">Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url()?>testimonials">Testimonials</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url()?>shop">Shop</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url()?>brand-services">Brands /Services</a>
                    </li>
                    <li>
                        <a class="page-scroll btn-custom btn-signin" style="color:#fff " href="<?php echo base_url()?>login">Sign In</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!--navigation-End-->