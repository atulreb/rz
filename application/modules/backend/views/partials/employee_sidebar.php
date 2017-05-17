<?php $session_data = $this->session->userdata('user_account'); ?>
<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><img src="<?php echo base_url()?>media/frontend/img/logow.png" style="width: 90%;"></a> 
        </div>      
        <div class="clearfix"></div>  
        <!-- menu profile quick info --> 
        <div class="profile clearfix">   
            <div class="profile_pic">    
                <img src="<?php echo backend_asset_url() ?>images/img.jpg" alt="" class="img-circle profile_img">            </div>
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
                    <li><a href="<?php echo base_url() ?>employee/dashboard"><i class="fa fa-home"></i> Dashboard </a>

                    </li>
                   
					
					

                    </li>
                    <li><a href="<?php echo base_url() ?>employee/training-material"><i class="fa fa-globe"></i> Training Material </a>

                    </li>
                    <li><a href="<?php echo base_url() ?>employee/payslip"><i class="fa fa-globe"></i>Payslip </a>

                    </li>
                    <li><a href="<?php echo base_url() ?>employee/upload-document"><i class="fa fa-file"></i>Upload Document </a>

                    </li>
                    <li><a href="<?php echo base_url() ?>employee/profile"><i class="fa fa-user"></i>Update Profile </a>

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