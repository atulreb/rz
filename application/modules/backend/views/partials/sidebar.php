<?php $session_data = $this->session->userdata('user_account'); ?>
<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo base_url()?>admin/dashboard" class="site_title"><img src="<?php echo base_url()?>media/landing-pages/building-services/assets/img/logo3.png" style="width: 90%;"></a> 
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
                    <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home"></i> Dashboard </a>

                    </li>
                    <li><a href="<?php echo base_url() ?>admin/contact-us"><i class="fa fa-envelope"></i>Contact Messages </a>

                    </li>
                    <li><a href="<?php echo base_url() ?>admin/global-setting"><i class="fa fa-globe"></i> Global Setting </a>

                    </li>
                    <li><a href="<?php echo base_url() ?>admin/blog"><i class="fa fa-globe"></i> Manage Blogs </a>

                    </li>
					
					<li><a href="<?php echo base_url() ?>user/appointmentlist"><i class="fa fa-book"></i> User Appoinments </a>

                    </li>
                    <li><a href="<?php echo base_url() ?>admin/email-template/list"><i class="fa fa-envelope"></i> Manage Email templates </a>

                    </li>

                    </li>
                    <li><a href="<?php echo base_url() ?>admin/category-list"><i class="fa fa-globe"></i> Manage Categories </a>

                    </li>
                    <li>
                        <a><i class="fa fa-table"></i> Manage Products<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo base_url() ?>admin/product-list">Product List</a></li>
                            <li><a href="<?php echo base_url() ?>admin/add-product">Add Product</a></li>
                            <li><a href="<?php echo base_url() ?>admin/variant-list">Manage Variants</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Product categories <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo base_url() ?>admin/product-category-list">Category</a></li>
                            <li><a href="<?php echo base_url() ?>admin/product-subcategory-list">Sub category</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-table"></i> Manage Testimonials<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo base_url() ?>admin/testimonial-list">Testimonial List</a></li>
                            <li><a href="<?php echo base_url() ?>admin/add-testimonial">Add Testimonial</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a><i class="fa fa-calendar"></i> Manage Events<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo base_url() ?>admin/event-list">Events List</a></li>
                            <li><a href="<?php echo base_url() ?>admin/add-event">Add Event</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-table"></i> Manage Jobs<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo base_url() ?>admin/jobs-list">Jobs List</a></li>
                            <li><a href="<?php echo base_url() ?>admin/add-job">Add Job</a></li>
                            <li><a href="<?php echo base_url() ?>admin/job-applications">Job Applications</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url() ?>admin/orders-list"><i class="fa fa-shopping-cart"></i>Manage Orders</a></li>
                    <li><a href="<?php echo base_url() ?>admin/vendor-list"><i class="fa fa-user"></i>Vendors</a></li>
					<li><a href="<?php echo base_url() ?>admin/service-request-list"><i class="fa fa-user"></i>Service Requests</a></li>
<li>
                        <a><i class="fa fa-table"></i> Manage Employee<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo base_url() ?>admin/employee-list">Employee List</a></li>
                            <li><a href="<?php echo base_url() ?>admin/add-employee">Add Employee</a></li>
                            <li><a href="<?php echo base_url() ?>admin/add-training-material">Add Training Material</a></li>
                            <li><a href="<?php echo base_url() ?>admin/add-payslip">Add Employee Payslip</a></li>
                            <li><a href="<?php echo base_url() ?>admin/employee-documents">Employee Documents</a></li>
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