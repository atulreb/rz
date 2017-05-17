<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $global['site_title']?> | Login</title>

        <link rel="stylesheet" href="<?php echo frontend_asset_url() ?>css/demo.css">
        <link rel="stylesheet" href="<?php echo frontend_asset_url() ?>css/register.css">

    </head>

    <body>
        <div class="container-fluid ">
            <div class="main-content vertical-center">
                <!-- You only need this form and the form-mini.css -->

                <div class="form-mini-container">
                   
                    <form class="form-mini" novalidate method="POST" action="<?php echo base_url() ?>submitlogin">
                         
                        <div class="panel-heading">
                            <?php if (!empty($this->session->userdata('msg'))) { ?> 
                            
                                <?php echo $this->session->userdata('msg'); 
                                $this->session->unset_userdata('msg');
                                ?>
                           
                        <?php } ?>
                            <div class="panel-title text-center">
                                <img class="logo"src="<?php echo frontend_asset_url() ?>img/logob.png" height="50" width="200">
                                <hr />
                                <p class="random-text">Sed <strong style="color:#ed1c24">ut perspiciatis </strong> unde omnis iste natus error sit voluptatem </p>
                                <div class="form-row">
                                    <input type="text" name="user_name" name="name" placeholder="USERNAME">
                                </div>
                                <div class="form-row">
                                    <input type="password" name="user_password" placeholder="PASSWORD" id="password" required>
                                </div>
                                <div class="form-row">
                                    <form action="#">
                                        <p>
                                            <input type="checkbox" id="test1" />
                                            <label for="test1">Forgot Password?</label>
                                        </p>

                                    </form>
                                </div>
                                <div class="form-row form-last-row btn-signup">
                                    <button type="submit" style="margin-bottom:-10px;">SIGN IN</button>
                                </div>


                                </form>
                            </div>


                        </div>
                        <div class="form-footer-text">not a user yet?<a href="<?php echo base_url()?>signup"> <strong style="color:#f7931e">SIGNUP </strong></a></div>
                        <div class="footer-img">
                            <img src="<?php echo frontend_asset_url() ?>img/signup/linkedin-sign.png">
                            <img src="<?php echo frontend_asset_url() ?>img/signup/twitter-logo-silhouette.png">
                        </div>
                </div>
                </body>
                </html>

