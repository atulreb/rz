<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $template['title'] ?> </title>

        <!-- Bootstrap -->
        <link href="<?php echo backend_asset_url() ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo backend_asset_url() ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo backend_asset_url() ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?php echo backend_asset_url() ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
         <link href="<?php echo backend_asset_url() ?>/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
        <!-- bootstrap-progressbar -->
        <link href="<?php echo backend_asset_url() ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="<?php echo backend_asset_url() ?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="<?php echo backend_asset_url() ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?php echo backend_asset_url() ?>/build/css/custom.min.css" rel="stylesheet">
        <?php if ($page == 'bloglist' || $page == 'commentlist' || $page=='jobs_list' || $page =='job_applications' || $page ='testimonial_list') { ?>
        <link href="<?php echo backend_asset_url() ?>/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo backend_asset_url() ?>/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo backend_asset_url() ?>/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo backend_asset_url() ?>/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo backend_asset_url() ?>/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
        <?php } ?>
		<script src="<?php echo backend_asset_url() ?>/vendors/jquery/dist/jquery.min.js"></script>
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <?php if (isset($template['partials']['sidebar'])) echo $template['partials']['sidebar']; ?>
                <?php if (isset($template['partials']['header'])) echo $template['partials']['header']; ?>
                <?php echo $template['body']; ?>
                <?php if (isset($template['partials']['footer'])) echo $template['partials']['footer']; ?>
            </div>
        </div>
<script type="text/javascript">
            var base_url = '<?php echo base_url() ?>';
            var asset_url = '<?php echo frontend_asset_url() ?>';
            var vpage = '<?php echo $page; ?>';
        </script>
		  <!-- jQuery -->
        
		  <script type="text/javascript" src='<?php echo backend_asset_url() ?>js/cart.js'></script>
      
        <!-- Bootstrap -->
        <script src="<?php echo backend_asset_url() ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo backend_asset_url() ?>/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?php echo backend_asset_url() ?>/vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="<?php echo backend_asset_url() ?>/vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- gauge.js -->
        <script src="<?php echo backend_asset_url() ?>/vendors/gauge.js/dist/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="<?php echo backend_asset_url() ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo backend_asset_url() ?>/vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="<?php echo backend_asset_url() ?>/vendors/skycons/skycons.js"></script>
        <!-- Flot -->
        <script src="<?php echo backend_asset_url() ?>/vendors/Flot/jquery.flot.js"></script>
        <script src="<?php echo backend_asset_url() ?>/vendors/Flot/jquery.flot.pie.js"></script>
        <script src="<?php echo backend_asset_url() ?>/vendors/Flot/jquery.flot.time.js"></script>
        <script src="<?php echo backend_asset_url() ?>/vendors/Flot/jquery.flot.stack.js"></script>
        <script src="<?php echo backend_asset_url() ?>/vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="<?php echo backend_asset_url() ?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="<?php echo backend_asset_url() ?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="<?php echo backend_asset_url() ?>/vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="<?php echo backend_asset_url() ?>/vendors/DateJS/build/date.js"></script>
        <!-- JQVMap -->
        <script src="<?php echo backend_asset_url() ?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
        <script src="<?php echo backend_asset_url() ?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="<?php echo backend_asset_url() ?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="<?php echo backend_asset_url() ?>/vendors/moment/min/moment.min.js"></script>
        <script src="<?php echo backend_asset_url() ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <?php if ($page == 'bloglist' || $page='commentlist' || $page == 'jobs_list' || $page =='job_applications') { ?>
            <script src="<?php echo backend_asset_url() ?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="<?php echo backend_asset_url() ?>/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
            <script src="<?php echo backend_asset_url() ?>/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
            <script src="<?php echo backend_asset_url() ?>/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
            <script src="<?php echo backend_asset_url() ?>/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
            <script src="<?php echo backend_asset_url() ?>/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
            <script src="<?php echo backend_asset_url() ?>/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
            <script src="<?php echo backend_asset_url() ?>/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
            <script src="<?php echo backend_asset_url() ?>/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
            <script src="<?php echo backend_asset_url() ?>/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="<?php echo backend_asset_url() ?>/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
            <script src="<?php echo backend_asset_url() ?>/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
            <script src="<?php echo backend_asset_url() ?>/vendors/jszip/dist/jszip.min.js"></script>
            <script src="<?php echo backend_asset_url() ?>/vendors/pdfmake/build/pdfmake.min.js"></script>
            <script src="<?php echo backend_asset_url() ?>/vendors/pdfmake/build/vfs_fonts.js"></script>
            <script src="<?php echo backend_asset_url() ?>/js/select-all.js"></script>
        <?php } ?>
		
        <!-- validator -->
        <script src="<?php echo backend_asset_url() ?>/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
        <script src="<?php echo backend_asset_url() ?>/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
        <script src="<?php echo backend_asset_url() ?>/vendors/validator/validator.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="<?php echo backend_asset_url() ?>/build/js/custom.min.js"></script>
        <script src="<?php echo backend_asset_url() ?>/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
            $(document).ready(function () {
                //alert();
                $('#cat_id').on('change', function () {

                    var query_value = $('#cat_id').val();
                    //alert(query_value);
                    if (query_value !== '') {
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url()?>getSubCategory",
                            data: {category: query_value},
                            cache: false,
                            success: function (data) {
                                //alert(data);
                                $("#subcat_id").html(data);
                            }
                        });
                    }
                    return false;
                });
            });
            
        </script>
    </body>
</html>
