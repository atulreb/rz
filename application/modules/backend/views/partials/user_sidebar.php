<?php $session_data = $this->session->userdata('user_account'); ?>
<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo base_url()?>user/dashboard" class="site_title"><img src="<?php echo base_url()?>media/frontend/img/logow.png" style="width: 90%;"></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?php echo backend_asset_url() ?>images/img.jpg" alt="" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo ucfirst($session_data['username']) ?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="<?php echo base_url() ?>user/dashboard"><i class="fa fa-home"></i> Dashboard </a>

                    </li>
                    <li><a href="<?php echo base_url() ?>user/order-list"><i class="fa fa-shopping-cart"></i> My Orders </a>

                    </li>
                    <li><a href="<?php echo base_url() ?>user/invoice-list"><i class="fa fa-print"></i> Invoices</a>

                    </li>

                    <li><a href="<?php echo base_url() ?>user/appoinments"><i class="fa fa-book"></i> Appointments</a>

                    </li>
                    <li>
                        <a><i class="fa fa-table"></i> Testimonials<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo base_url() ?>user/testimonials">Testimonial List</a></li>
                            <li><a href="<?php echo base_url() ?>user/add-testimonial">Add Testimonial</a></li>
                        </ul>
                    </li>

                    <li><a href="<?php echo base_url() ?>user/services"><i class="fa fa-credit-card"></i> Services</a>

                    </li>

                    </li>

                    <li><a href="<?php echo base_url() ?>user/donations"><i class="fa fa-credit-card"></i> Donations</a>

                    </li>


                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>