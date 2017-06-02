<!--navigation-->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand desktop-only" href="<?php echo base_url()?>">
                    <img style="width:285px" src="<?php echo frontend_asset_url()?>img/logow.png" alt="">
                </a>
                <a class="navbar-brand-mobile mobile-only" href="<?php echo base_url()?>">
                    <img src="<?php echo frontend_asset_url()?>img/logowl.png" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <!--li>
                        <a class="page-scroll" href="<?php echo base_url()?>">Home</a>
                    </li-->
                    <li class="dropdown-content">
                        <a class="page-scroll" href="<?php echo base_url()?>razor">About RazorClean, Inc</a>
                        <ul class="submenu">
                            <li> <a href="<?php echo base_url()?>razor/media">Media</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="<?php echo base_url()?>blog">Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url()?>testimonials">Testimonials</a>
                    </li>
					<li>
                        <a class="page-scroll" href="<?php echo base_url()?>partner">Partner With Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url()?>shop">Shop</a>
                    </li>
					<!--li>
                        <a class="page-scroll" href="<?php echo base_url()?>razor">RazorClean Inc.</a>
                    </li-->
                    <li>
                        <a class="page-scroll" href="<?php echo base_url()?>brand-services">Brands /Services</a>
                    </li>
					<li style="margin-right:10px">
                        <a class="page-scroll btn-custom btn-signin" style="color:#fff " href="<?php echo base_url()?>user-signup">User Sign Up</a>
                    </li>
                    <li>
                        <a class="page-scroll btn-custom btn-signin" style="color:#fff " href="<?php echo base_url()?>login">Sign In</a>
                    </li>
					
					<!--li>
					<a class="slide-toggle">A</a>
					</li-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!--navigation-End-->