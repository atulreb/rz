<?php $session_data = $this->session->userdata('user_account'); ?>
<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo base_url()?>finance/dashboard" class="site_title"><img src="<?php echo base_url()?>media/landing-pages/building-services/assets/img/logo3.png" style="width: 90%;"></a> 
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
                    <li><a href="<?php echo base_url() ?>finance/dashboard"><i class="fa fa-home"></i> Dashboard </a>

                    </li>
                    <li><a href="<?php echo base_url() ?>finance/invoice-list"><i class="fa fa-shopping-cart"></i> Invoices </a>

                    </li>
                    <li>
                        <a><i class="fa fa-table"></i> Invoices<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo base_url() ?>finance/invoice-list">Invoices </a>

                    </li>
                            <li><a href="<?php echo base_url() ?>finance/add-invoice">Create Invoice </a>

                    </li>
                            
                        </ul>
                    </li>
<!--                    <li><a href="<?php echo base_url() ?>finance/recurring-invoices"><i class="fa fa-shopping-cart"></i> Recurring Invoices </a>

                    </li>-->
                    <li><a href="<?php echo base_url() ?>finance/payment-received"><i class="fa fa-dollar"></i>Payment Received</a>

                    </li>
                    <li><a href="<?php echo base_url() ?>finance/donations"><i class="fa fa-dollar"></i>Donations</a>

                    </li>
                   
                    <li>
                        <a><i class="fa fa-table"></i> Expense<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo base_url() ?>finance/expense-list">Expense List</a></li>
                            <li><a href="<?php echo base_url() ?>finance/add-expense">Add Expense</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-table"></i> Reports<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo base_url() ?>finance/expense-report">Expense</a></li>
                            <li><a href="javascript:;">Income</a></li>
                        </ul>
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