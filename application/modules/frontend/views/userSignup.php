<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $global['site_title']?> | User Signup</title>

        <link rel="stylesheet" href="<?php echo frontend_asset_url() ?>css/demo.css">
        <link rel="stylesheet" href="<?php echo frontend_asset_url() ?>css/register.css">
        <link href="<?php echo frontend_asset_url() ?>css/custom.css" rel="stylesheet">
        <script type="text/javascript">
            var base_url = '<?php echo base_url() ?>';
        </script>
        <style>
            #successdiv {
                padding-top: 1px;
                background: green;
                border-radius: 5px;
                margin: 0 0 21px 0;
                color: #fff;
                padding-bottom: 15px;
            }
            }
        </style>
    </head>

    <body>
        <div class="container-fluid ">
            <div class="main-content vertical-center">
                <!-- You only need this form and the form-mini.css -->

                <div class="form-mini-container">
                    <?php //if (!empty($this->session->userdata('msg'))) { ?> 

                    <?php //echo $this->session->userdata('msg'); ?>

                    <?php //} ?>
                    
                    <form class="form-mini" method="post"  id="signup" action="<?php echo base_url(); ?>register/user">
                        <div class="panel-heading">
                            <span id="msg"></span>
                            <span class="error"></span>
                            <div class="panel-title text-center">
                                <img class="logo" src="<?php echo frontend_asset_url() ?>img/logob.png" height="50" width="200">
                                <hr />
                                <p class="random-text">Sed <strong style="color:#ed1c24">ut perspiciatis </strong> unde omnis iste natus error sit voluptatem </p>
                                
								<div class="form-row">
                                    <input type="text" name="username" id="username" placeholder="USERNAME" required>
                                </div>
                                
								<div class="form-row">
                                    <input type="password" name="password" id="password" placeholder="PASSWORD" id="password" required>
                                </div>
                                
								<div class="form-row">
                                    <input type="email" name="email" id="email" placeholder="Email" required>
                                </div>
								
								<div class="form-row">
                                    <input type="text" name="fname" id="fname" placeholder="First Name" required>
                                </div>
								
								<div class="form-row">
                                    <input type="text" name="lname" id="lname" placeholder="Last Name" required>
                                </div>
								
								<div class="form-row">
                                    <input type="mobile" name="mobile" id="mobile" placeholder="Mobile Number" required>
                                </div>
								
								<div class="form-row">
                                   <input type="text" name="billing_address" id="billing_address" placeholder="Billing Address" required>
                                </div>
								
								<div class="form-row">
                                    <input type="text" name="shipping_address" id="shipping_address" placeholder="Shipping Address" required>
                                </div>
                                
								<div class="form-row form-last-row btn-signup">
                                    <button type="submit">SIGN UP</button>
                                </div>
                                <p class="bottom-form-text">By CLick "Signup", I agree <strong style="color:#ed1c24">Terms and Conditions</strong></p>


                            </div>


                        </div>
                    </form>
                    <div class="form-footer-text">Already Have an account?<strong style="color:#f7931e"> Login </strong></div>
                    <div class="footer-img">
                        <img src="<?php echo frontend_asset_url() ?>img/signup/linkedin-sign.png">
                        <img src="<?php echo frontend_asset_url() ?>img/signup/twitter-logo-silhouette.png">
                    </div>
                </div>
                </body>
                <script src="<?php echo frontend_asset_url() ?>vendor/jquery/jquery.min.js"></script>
                <script src="<?php echo frontend_asset_url() ?>/js/signup.js"></script>
                <script src="<?php echo frontend_asset_url() ?>/js/jquery.validate.js"></script>


                </html>
