<?php $this->load->view('partials/l_header');?>

       


        <div class="container page_body">

            <script>
                var searchBox = document.getElementById('searchinput');
                searchBox.onfocus = function(){
                if (this.value == 'search...') {
                this.value = '';
                }
                }

                searchBox.onblur = function(){
                if (this.value == '') {
                this.value = 'search...';
                }
                }
            </script>
            <div class="row featured-head">
                <div class="col-md-12">
                    <!--Main Content-->
                    <style>
                        #wds_container1_0 #wds_container2_0 {
                            text-align: center;
                            margin: 0px ;
                            visibility: hidden;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_slideshow_image_wrap_0 * {
                            box-sizing: border-box;
                            -moz-box-sizing: border-box;
                            -webkit-box-sizing: border-box;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_slideshow_image_wrap_0 {
                            background-color: rgba(0, 0, 0, 0.00);
                            border-width: 0px;
                            border-style: none;
                            border-color: #000000;
                            border-radius: ;
                            border-collapse: collapse;
                            display: inline-block;
                            position: relative;
                            text-align: center;
                            width: 100%;
                            max-width: 1140px;
                            box-shadow: ;
                            overflow: hidden;
                            z-index: 0;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_slideshow_image_0 {
                            padding: 0 !important;
                            margin: 0 !important;
                            float: none !important;
                            vertical-align: middle;
                            background-position: center center;
                            background-repeat: no-repeat;
                            background-size: cover;
                            width: 100%;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_slideshow_image_container_0 {
                            display: /*table*/block;
                            position: absolute;
                            text-align: center;
                            none: 0px;
                            vertical-align: middle;
                            width: 100%;
                            height: /*inherit*/100%;
                        }

                        @media only screen and (min-width: 0px) and (max-width: 320px) {
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
                                height: 16px;
                                width: 80px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
                                font-size: 12px;
                                width: 12px;
                                margin: 2px;
                                height: 12px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
                                font-size: 20px;
                                height: 20px;
                                width: 20px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
                            #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
                                height: 20px;
                                font-size: 20px;
                                width: 20px;
                            }
                        }
                        @media only screen and (min-width: 321px) and (max-width: 480px) {
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
                                height: 22px;
                                width: 110px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
                                font-size: 18px;
                                width: 18px;
                                margin: 2px;
                                height: 18px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
                                font-size: 30px;
                                height: 30px;
                                width: 30px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
                            #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
                                height: 30px;
                                font-size: 30px;
                                width: 30px;
                            }
                        }
                        @media only screen and (min-width: 481px) and (max-width: 640px) {
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
                                height: 26px;
                                width: 130px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
                                font-size: 20px;
                                width: 20px;
                                margin: 3px;
                                height: 20px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
                                font-size: 40px;
                                height: 40px;
                                width: 40px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
                            #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
                                height: 40px;
                                font-size: 40px;
                                width: 40px;
                            }
                        }
                        @media only screen and (min-width: 641px) and (max-width: 768px) {
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
                                height: 26px;
                                width: 130px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
                                font-size: 20px;
                                width: 20px;
                                margin: 3px;
                                height: 20px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
                                font-size: 40px;
                                height: 40px;
                                width: 40px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
                            #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
                                height: 40px;
                                font-size: 40px;
                                width: 40px;
                            }
                        }
                        @media only screen and (min-width: 769px) and (max-width: 800px) {
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
                                height: 26px;
                                width: 130px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
                                font-size: 20px;
                                width: 20px;
                                margin: 3px;
                                height: 20px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
                                font-size: 40px;
                                height: 40px;
                                width: 40px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
                            #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
                                height: 40px;
                                font-size: 40px;
                                width: 40px;
                            }
                        }
                        @media only screen and (min-width: 801px) and (max-width: 1024px) {
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
                                height: 26px;
                                width: 130px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
                                font-size: 20px;
                                width: 20px;
                                margin: 3px;
                                height: 20px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
                                font-size: 40px;
                                height: 40px;
                                width: 40px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
                            #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
                                height: 40px;
                                font-size: 40px;
                                width: 40px;
                            }
                        }
                        @media only screen and (min-width: 1025px) and (max-width: 1366px) {
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
                                height: 26px;
                                width: 130px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
                                font-size: 20px;
                                width: 20px;
                                margin: 3px;
                                height: 20px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
                                font-size: 40px;
                                height: 40px;
                                width: 40px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
                            #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
                                height: 40px;
                                font-size: 40px;
                                width: 40px;
                            }
                        }
                        @media only screen and (min-width: 1367px) and (max-width: 1824px) {
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
                                height: 26px;
                                width: 130px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
                                font-size: 20px;
                                width: 20px;
                                margin: 3px;
                                height: 20px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
                                font-size: 40px;
                                height: 40px;
                                width: 40px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
                            #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
                                height: 40px;
                                font-size: 40px;
                                width: 40px;
                            }
                        }
                        @media only screen and (min-width: 1825px) and (max-width: 3000px) {
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
                                height: 26px;
                                width: 130px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
                                font-size: 20px;
                                width: 20px;
                                margin: 3px;
                                height: 20px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
                                font-size: 40px;
                                height: 40px;
                                width: 40px;
                            }
                            #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
                            #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
                                height: 40px;
                                font-size: 40px;
                                width: 40px;
                            }
                        }

                        #wds_container1_0 #wds_container2_0 .wds_slideshow_video_0 {
                            padding: 0 !important;
                            margin: 0 !important;
                            float: none !important;
                            width: 100%;
                            vertical-align: middle;
                            display: inline-block;
                        }
                        #wds_container1_0 #wds_container2_0 #wds_slideshow_play_pause_0 {  
                            color: #000000;
                            cursor: pointer;
                            position: relative;
                            z-index: 13;
                            width: inherit;
                            height: inherit;
                            font-size: inherit;
                        }
                        #wds_container1_0 #wds_container2_0 #wds_slideshow_play_pause_0:hover {  
                            color: #000000;
                            cursor: pointer;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_left-ico_0,
                        #wds_container1_0 #wds_container2_0 .wds_right-ico_0 {
                            background-color: rgba(255, 255, 255, 0.00);
                            border-radius: 20px;
                            border: 0px none #FFFFFF;
                            border-collapse: separate;
                            color: #000000;
                            left: 0;
                            top: 0;
                            -moz-box-sizing: content-box;
                            box-sizing: content-box;
                            cursor: pointer;
                            line-height: 0;
                            width: inherit;
                            height: inherit;
                            font-size: inherit;
                            position: absolute;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_left-ico_0 {
                            left: -4000px;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_right-ico_0 {
                            left: 4000px;
                        }
                        #wds_container1_0 #wds_container2_0 #wds_slideshow_play_pause_0 {
                            opacity: 0;
                            filter: "Alpha(opacity=0)";
                        }
                        #wds_container1_0 #wds_container2_0 .wds_left-ico_0:hover,
                        #wds_container1_0 #wds_container2_0 .wds_right-ico_0:hover {
                            color: #000000;
                            cursor: pointer;
                        }

                        #wds_container1_0 #wds_container2_0 .wds_none_selectable_0 {
                            -webkit-touch-callout: none;
                            -webkit-user-select: none;
                            -khtml-user-select: none;
                            -moz-user-select: none;
                            -ms-user-select: none;
                            user-select: none;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_slide_container_0 {
                            display: table-cell;
                            margin: 0 auto;
                            position: absolute;
                            vertical-align: middle;
                            width: 100%;
                            height: 100%;
                            overflow: hidden;
                            cursor: inherit;
                            cursor: inherit;
                            cursor: inherit;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_slide_container_0:active {
                            cursor: inherit;
                            cursor: inherit;
                            cursor: inherit;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_slide_bg_0 {
                            margin: 0 auto;
                            width: /*inherit*/100%;
                            height: /*inherit*/100%;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_slider_0 {
                            height: /*inherit*/100%;
                            width: /*inherit*/100%;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_slideshow_image_spun_0 {
                            width: /*inherit*/100%;
                            height: /*inherit*/100%;
                            display: table-cell;
                            filter: Alpha(opacity=100);
                            opacity: 1;
                            position: absolute;
                            vertical-align: middle;
                            z-index: 2;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_slideshow_image_second_spun_0 {
                            width: /*inherit*/100%;
                            height: /*inherit*/100%;
                            display: table-cell;
                            filter: Alpha(opacity=0);
                            opacity: 0;
                            position: absolute;
                            vertical-align: middle;
                            z-index: 1;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_grid_0 {
                            display: none;
                            height: 100%;
                            overflow: hidden;
                            position: absolute;
                            width: 100%;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_gridlet_0 {
                            opacity: 1;
                            filter: Alpha(opacity=100);
                            position: absolute;
                        }

                        /* Dots.*/
                        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_container_0 {
                            opacity: 1;
                            filter: "Alpha(opacity=100)";
                        }
                        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_container_0 {
                            display: block;
                            overflow: hidden;
                            position: absolute;
                            width: 100%;
                            none: 0;
                            /*z-index: 17;*/
                        }
                        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
                            left: 0px;
                            font-size: 0;
                            margin: 0 auto;
                            position: relative;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
                            display: inline-block;
                            position: relative;
                            color: #FFFFFF;
                            cursor: pointer;
                            z-index: 17;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_active_0 {
                            color: #FFFFFF;
                            opacity: 1;
                            filter: Alpha(opacity=100);
                        }
                        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_deactive_0 {
                        }

                        /* Line timer.*/
                        #wds_container1_0 #wds_container2_0 .wds_line_timer_container_0 {
                            display: block;
                            position: absolute;
                            overflow: hidden;
                            bottom: 0;
                            z-index: 16;
                            width: 100%;
                            height: 5px;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_line_timer_0 {
                            z-index: 17;
                            width: 0;
                            height: 5px;
                            background: #BBBBBB;
                            opacity: 0.50;
                            filter: alpha(opacity=50);
                        }

                        #wds_container1_0 #wds_container2_0 .wds_slideshow_image_spun1_0 {
                            display: table; 
                            width: /*inherit*/100%; 
                            height: /*inherit*/100%;
                        }
                        #wds_container1_0 #wds_container2_0 .wds_slideshow_image_spun2_0 {
                            display: table-cell; 
                            vertical-align: middle; 
                            text-align: center;
                            overflow: hidden;
                        }
                    </style>
                    <script>
                        var wds_data_0 = [];
                        var wds_event_stack_0 = [];
                        var wds_clear_layers_effects_in_0 = [];
                        var wds_clear_layers_effects_out_0 = [];
                        var wds_clear_layers_effects_out_before_change_0 = [];
                        if (0) {
                        var wds_duration_for_change_0 = 500;
                        var wds_duration_for_clear_effects_0 = 530;
                        }
                        else {
                        var wds_duration_for_change_0 = 0;
                        var wds_duration_for_clear_effects_0 = 0;
                        }
                        wds_clear_layers_effects_in_0["0"] = [];
                        wds_clear_layers_effects_out_0["0"] = [];
                        wds_clear_layers_effects_out_before_change_0["0"] = [];
                        wds_data_0["0"] = [];
                        wds_data_0["0"]["id"] = "8";
                        wds_data_0["0"]["image_url"] = "<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/slider-wd/carplanerboat.jpg";
                        wds_data_0["0"]["thumb_url"] = "<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/slider-wd/thumb/carplanerboat.jpg";
                        wds_data_0["0"]["is_video"] = "image";
                        wds_data_0["0"]["slide_layers_count"] = 0;
                        wds_clear_layers_effects_in_0["1"] = [];
                        wds_clear_layers_effects_out_0["1"] = [];
                        wds_clear_layers_effects_out_before_change_0["1"] = [];
                        wds_data_0["1"] = [];
                        wds_data_0["1"]["id"] = "9";
                        wds_data_0["1"]["image_url"] = "<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/slider-wd/commonemenys.jpg";
                        wds_data_0["1"]["thumb_url"] = "<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/slider-wd/thumb/commonemenys.jpg";
                        wds_data_0["1"]["is_video"] = "image";
                        wds_data_0["1"]["slide_layers_count"] = 0;
                        wds_clear_layers_effects_in_0["2"] = [];
                        wds_clear_layers_effects_out_0["2"] = [];
                        wds_clear_layers_effects_out_before_change_0["2"] = [];
                        wds_data_0["2"] = [];
                        wds_data_0["2"]["id"] = "10";
                        wds_data_0["2"]["image_url"] = "<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/slider-wd/leather.jpg";
                        wds_data_0["2"]["thumb_url"] = "<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/slider-wd/thumb/leather.jpg";
                        wds_data_0["2"]["is_video"] = "image";
                        wds_data_0["2"]["slide_layers_count"] = 0;
                        wds_clear_layers_effects_in_0["3"] = [];
                        wds_clear_layers_effects_out_0["3"] = [];
                        wds_clear_layers_effects_out_before_change_0["3"] = [];
                        wds_data_0["3"] = [];
                        wds_data_0["3"]["id"] = "12";
                        wds_data_0["3"]["image_url"] = "<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/slider-wd/rain-x.jpg";
                        wds_data_0["3"]["thumb_url"] = "<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/slider-wd/thumb/rain-x.jpg";
                        wds_data_0["3"]["is_video"] = "image";
                        wds_data_0["3"]["slide_layers_count"] = 0;
                        wds_clear_layers_effects_in_0["4"] = [];
                        wds_clear_layers_effects_out_0["4"] = [];
                        wds_clear_layers_effects_out_before_change_0["4"] = [];
                        wds_data_0["4"] = [];
                        wds_data_0["4"]["id"] = "13";
                        wds_data_0["4"]["image_url"] = "<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/slider-wd/wecometoyouad.jpg";
                        wds_data_0["4"]["thumb_url"] = "<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/slider-wd/thumb/wecometoyouad.jpg";
                        wds_data_0["4"]["is_video"] = "image";
                        wds_data_0["4"]["slide_layers_count"] = 0;
                    </script>
                    <div id="wds_container1_0">
                        <div class="wds_loading">
                            <img src="<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/plugins/slider-wd/images/ajax_loader.png" class="wds_loading_img" style="float: none; width:50px;" />
                        </div>
                        <div id="wds_container2_0">
                            <div class="wds_slideshow_image_wrap_0">
                                <div id="wds_slideshow_image_container_0" class="wds_slideshow_image_container_0">
                                    <div class="wds_line_timer_container_0"><div class="wds_line_timer_0"></div></div>			
                                    <div class="wds_slide_container_0" id="wds_slide_container_0">
                                        <div class="wds_slide_bg_0">
                                            <div class="wds_slider_0">
                                                <span class="wds_slideshow_image_spun_0" id="wds_image_id_0_8">
                                                    <span class="wds_slideshow_image_spun1_0">
                                                        <span class="wds_slideshow_image_spun2_0">
                                                            <div img_id="wds_slideshow_image_0"
                                                                 class="wds_slideshow_image_0"
                                                                 onclick=""
                                                                 style="background-image: url('<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/slider-wd/carplanerboat.jpg');">
                                                            </div>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="wds_slideshow_image_second_spun_0" id="wds_image_id_0_9">
                                                    <span class="wds_slideshow_image_spun1_0">
                                                        <span class="wds_slideshow_image_spun2_0">
                                                            <div img_id="wds_slideshow_image_second_0"
                                                                 class="wds_slideshow_image_0"
                                                                 onclick=""
                                                                 style="">
                                                            </div>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="wds_slideshow_image_second_spun_0" id="wds_image_id_0_10">
                                                    <span class="wds_slideshow_image_spun1_0">
                                                        <span class="wds_slideshow_image_spun2_0">
                                                            <div img_id="wds_slideshow_image_second_0"
                                                                 class="wds_slideshow_image_0"
                                                                 onclick=""
                                                                 style="">
                                                            </div>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="wds_slideshow_image_second_spun_0" id="wds_image_id_0_12">
                                                    <span class="wds_slideshow_image_spun1_0">
                                                        <span class="wds_slideshow_image_spun2_0">
                                                            <div img_id="wds_slideshow_image_second_0"
                                                                 class="wds_slideshow_image_0"
                                                                 onclick=""
                                                                 style="">
                                                            </div>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="wds_slideshow_image_second_spun_0" id="wds_image_id_0_13">
                                                    <span class="wds_slideshow_image_spun1_0">
                                                        <span class="wds_slideshow_image_spun2_0">
                                                            <div img_id="wds_slideshow_image_second_0"
                                                                 class="wds_slideshow_image_0"
                                                                 onclick=""
                                                                 style="">
                                                            </div>
                                                        </span>
                                                    </span>
                                                </span>
                                                <input type="hidden" id="wds_current_image_key_0" value="0" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        var wds_trans_in_progress_0 = false;
                        var wds_transition_duration_0 = 800;
                        if (5 < 4) {
                        if (5 != 0) {
                        wds_transition_duration_0 = (5 * 1000) / 4;
                        }
                        }
                        var wds_playInterval_0;
                        var progress = 0;
                        var bottom_right_deggree_0;
                        var bottom_left_deggree_0;
                        var top_left_deggree_0;
                        var curent_time_deggree_0 = 0;
                        var circle_timer_animate_0;
                        function circle_timer_0(angle) {
                        circle_timer_animate_0 = jQuery({deg: angle}).animate({deg: 360}, {
                        duration: 5000,
                                step: function(now) {
                                curent_time_deggree_0 = now;
                                if (now >= 0) {
                                if (now < 271) {
                                jQuery('#top_right_0').css({
                                '-moz-transform':'rotate(' + now + 'deg)',
                                        '-webkit-transform':'rotate(' + now + 'deg)',
                                        '-o-transform':'rotate(' + now + 'deg)',
                                        '-ms-transform':'rotate(' + now + 'deg)',
                                        'transform':'rotate(' + now + 'deg)',
                                        '-webkit-transform-origin': 'left bottom',
                                        '-ms-transform-origin': 'left bottom',
                                        '-moz-transform-origin': 'left bottom',
                                        'transform-origin': 'left bottom'
                                });
                                }
                                }
                                if (now >= 90) {
                                if (now < 271) {
                                bottom_right_deggree_0 = now - 90;
                                jQuery('#bottom_right_0').css({
                                '-moz-transform':'rotate(' + bottom_right_deggree_0 + 'deg)',
                                        '-webkit-transform':'rotate(' + bottom_right_deggree_0 + 'deg)',
                                        '-o-transform':'rotate(' + bottom_right_deggree_0 + 'deg)',
                                        '-ms-transform':'rotate(' + bottom_right_deggree_0 + 'deg)',
                                        'transform':'rotate(' + bottom_right_deggree_0 + 'deg)',
                                        '-webkit-transform-origin': 'left top',
                                        '-ms-transform-origin': 'left top',
                                        '-moz-transform-origin': 'left top',
                                        'transform-origin': 'left top'
                                });
                                }
                                }
                                if (now >= 180) {
                                if (now < 361) {
                                bottom_left_deggree_0 = now - 180;
                                jQuery('#bottom_left_0').css({
                                '-moz-transform':'rotate(' + bottom_left_deggree_0 + 'deg)',
                                        '-webkit-transform':'rotate(' + bottom_left_deggree_0 + 'deg)',
                                        '-o-transform':'rotate(' + bottom_left_deggree_0 + 'deg)',
                                        '-ms-transform':'rotate(' + bottom_left_deggree_0 + 'deg)',
                                        'transform':'rotate(' + bottom_left_deggree_0 + 'deg)',
                                        '-webkit-transform-origin': 'right top',
                                        '-ms-transform-origin': 'right top',
                                        '-moz-transform-origin': 'right top',
                                        'transform-origin': 'right top'
                                });
                                }
                                }
                                if (now >= 270) {
                                if (now < 361) {
                                top_left_deggree_0 = now - 270;
                                jQuery('#top_left_0').css({
                                '-moz-transform':'rotate(' + top_left_deggree_0 + 'deg)',
                                        '-webkit-transform':'rotate(' + top_left_deggree_0 + 'deg)',
                                        '-o-transform':'rotate(' + top_left_deggree_0 + 'deg)',
                                        '-ms-transform':'rotate(' + top_left_deggree_0 + 'deg)',
                                        'transform':'rotate(' + top_left_deggree_0 + 'deg)',
                                        '-webkit-transform-origin': 'right bottom',
                                        '-ms-transform-origin': 'right bottom',
                                        '-moz-transform-origin': 'right bottom',
                                        'transform-origin': 'right bottom'
                                });
                                }
                                }
                                }
                        });
                        }
                        /* Stop autoplay.*/
                        window.clearInterval(wds_playInterval_0);
                        var wds_current_key_0 = '0';
                        var wds_current_filmstrip_pos_0 = 0;
                        function wds_move_dots_0() {
                        var image_left = jQuery(".wds_slideshow_dots_active_0").position().left;
                        var image_right = jQuery(".wds_slideshow_dots_active_0").position().left + jQuery(".wds_slideshow_dots_active_0").outerWidth(true);
                        var wds_dots_width = jQuery(".wds_slideshow_dots_container_0").outerWidth(true);
                        var wds_dots_thumbnails_width = jQuery(".wds_slideshow_dots_thumbnails_0").outerWidth(true);
                        var long_filmstrip_cont_left = jQuery(".wds_slideshow_dots_thumbnails_0").position().left;
                        var long_filmstrip_cont_right = Math.abs(jQuery(".wds_slideshow_dots_thumbnails_0").position().left) + wds_dots_width;
                        if (wds_dots_width > wds_dots_thumbnails_width) {
                        return;
                        }
                        if (image_left < Math.abs(long_filmstrip_cont_left)) {
                        jQuery(".wds_slideshow_dots_thumbnails_0").animate({
                        left: - image_left
                        }, {
                        duration: 500
                        });
                        }
                        else if (image_right > long_filmstrip_cont_right) {
                        jQuery(".wds_slideshow_dots_thumbnails_0").animate({
                        left: - (image_right - wds_dots_width)
                        }, {
                        duration: 500
                        });
                        }
                        }
                        function wds_testBrowser_cssTransitions_0() {
                        return wds_testDom_0('Transition');
                        }
                        function wds_testBrowser_cssTransforms3d_0() {
                        return wds_testDom_0('Perspective');
                        }
                        function wds_testDom_0(prop) {
                        /* Browser vendor CSS prefixes.*/
                        var browserVendors = ['', '-webkit-', '-moz-', '-ms-', '-o-', '-khtml-'];
                        /* Browser vendor DOM prefixes.*/
                        var domPrefixes = ['', 'Webkit', 'Moz', 'ms', 'O', 'Khtml'];
                        var i = domPrefixes.length;
                        while (i--) {
                        if (typeof document.body.style[domPrefixes[i] + prop] !== 'undefined') {
                        return true;
                        }
                        }
                        return false;
                        }
                        function wds_set_dots_class_0() {
                        jQuery(".wds_slideshow_dots_0").removeClass("wds_slideshow_dots_active_0").addClass("wds_slideshow_dots_deactive_0");
                        jQuery("#wds_dots_" + wds_current_key_0 + "_0").removeClass("wds_slideshow_dots_deactive_0").addClass("wds_slideshow_dots_active_0");
                        jQuery(".wds_slideshow_dots_0").removeClass("fa-square").addClass("fa-square-o");
                        jQuery("#wds_dots_" + wds_current_key_0 + "_0").removeClass("fa-square-o").addClass("fa-square");
                        }
                        function wds_grid_0(cols, rows, ro, tx, ty, sc, op, current_image_class, next_image_class, direction, random, roy, easing) {
                        /* If browser does not support CSS transitions.*/
                        if (!wds_testBrowser_cssTransitions_0()) {
                        return wds_fallback_0(current_image_class, next_image_class, direction);
                        }
                        wds_trans_in_progress_0 = true;
                        /* Set active thumbnail.*/
                        wds_set_dots_class_0();
                        /* The time (in ms) added to/subtracted from the delay total for each new gridlet.*/
                        var count = (wds_transition_duration_0) / (cols + rows);
                        /* Gridlet creator (divisions of the image grid, positioned with background-images to replicate the look of an entire slide image when assembled)*/
                        function wds_gridlet(width, height, top, img_top, left, img_left, src, imgWidth, imgHeight, c, r) {
                        var delay = random ? Math.floor((cols + rows) * count * Math.random()) : (c + r) * count;
                        /* Return a gridlet elem with styles for specific transition.*/
                        var grid_div = jQuery('<span class="wds_gridlet_0" />').css({
                        display: "block",
                                width : imgWidth, /*"100%"*/
                                height : jQuery(".wds_slideshow_image_spun_0").height() + "px",
                                top : - top,
                                left : - left,
                                backgroundImage : src,
                                backgroundSize: jQuery(".wds_slideshow_image_0").css("background-size"),
                                backgroundPosition: jQuery(".wds_slideshow_image_0").css("background-position"),
                                /*backgroundColor: jQuery(".wds_slideshow_image_wrap_0").css("background-color"),*/
                                backgroundRepeat: 'no-repeat'
                        });
                        return jQuery('<span class="wds_gridlet_0" />').css({
                        display: "block",
                                width : width, /*"100%"*/
                                height : height,
                                top : top,
                                left : left,
                                backgroundSize : imgWidth + 'px ' + imgHeight + 'px',
                                backgroundPosition : img_left + 'px ' + img_top + 'px',
                                backgroundRepeat: 'no-repeat',
                                overflow: "hidden",
                                transition : 'all ' + wds_transition_duration_0 + 'ms ' + easing + ' ' + delay + 'ms',
                                transform : 'none'
                        }).append(grid_div);
                        }
                        /* Get the current slide's image.*/
                        var cur_img = jQuery(current_image_class).find('div');
                        /* Create a grid to hold the gridlets.*/
                        var grid = jQuery('<span style="display: block;" />').addClass('wds_grid_0');
                        /* Prepend the grid to the next slide (i.e. so it's above the slide image).*/
                        jQuery(current_image_class).prepend(grid);
                        /* vars to calculate positioning/size of gridlets*/
                        var cont = jQuery(".wds_slide_bg_0");
                        var imgWidth = cur_img.width();
                        var imgHeight = cur_img.height();
                        var contWidth = cont.width(),
                                contHeight = cont.height(),
                                imgSrc = cur_img.css('background-image'), /*.replace('/thumb', ''),*/
                                colWidth = Math.floor(contWidth / cols),
                                rowHeight = Math.floor(contHeight / rows),
                                colRemainder = contWidth - (cols * colWidth),
                                colAdd = Math.ceil(colRemainder / cols),
                                rowRemainder = contHeight - (rows * rowHeight),
                                rowAdd = Math.ceil(rowRemainder / rows),
                                leftDist = 0,
                                img_leftDist = (jQuery(".wds_slide_bg_0").width() - cur_img.width()) / 2;
                        /* tx/ty args can be passed as 'auto'/'min-auto' (meaning use slide width/height or negative slide width/height).*/
                        tx = tx === 'auto' ? contWidth : tx;
                        tx = tx === 'min-auto' ? - contWidth : tx;
                        ty = ty === 'auto' ? contHeight : ty;
                        ty = ty === 'min-auto' ? - contHeight : ty;
                        /* Loop through cols*/
                        for (var i = 0; i < cols; i++) {
                        var topDist = 0,
                                img_topDst = (jQuery(".wds_slide_bg_0").height() - cur_img.height()) / 2,
                                newColWidth = colWidth;
                        /* If imgWidth (px) does not divide cleanly into the specified number of cols, adjust individual col widths to create correct total.*/
                        if (colRemainder > 0) {
                        var add = colRemainder >= colAdd ? colAdd : colRemainder;
                        newColWidth += add;
                        colRemainder -= add;
                        }
                        /* Nested loop to create row gridlets for each col.*/
                        for (var j = 0; j < rows; j++)  {
                        var newRowHeight = rowHeight,
                                newRowRemainder = rowRemainder;
                        /* If contHeight (px) does not divide cleanly into the specified number of rows, adjust individual row heights to create correct total.*/
                        if (newRowRemainder > 0) {
                        add = newRowRemainder >= rowAdd ? rowAdd : rowRemainder;
                        newRowHeight += add;
                        newRowRemainder -= add;
                        }
                        /* Create & append gridlet to grid.*/
                        grid.append(wds_gridlet(newColWidth, newRowHeight, topDist, img_topDst, leftDist, img_leftDist, imgSrc, imgWidth, imgHeight, i, j));
                        topDist += newRowHeight;
                        img_topDst -= newRowHeight;
                        }

                        img_leftDist -= newColWidth;
                        leftDist += newColWidth;
                        }
                        /* Show grid & hide the image it replaces.*/
                        grid.show();
                        cur_img.css('opacity', 0);
                        /* Add identifying classes to corner gridlets (useful if applying border radius).*/
                        grid.children().first().addClass('rs-top-left');
                        grid.children().last().addClass('rs-bottom-right');
                        grid.children().eq(rows - 1).addClass('rs-bottom-left');
                        grid.children().eq( - rows).addClass('rs-top-right');
                        /* Execution steps.*/
                        setTimeout(function () {
                        grid.children().css({
                        opacity: op,
                                transform: 'rotate(' + ro + 'deg) rotateY(' + roy + 'deg) translateX(' + tx + 'px) translateY(' + ty + 'px) scale(' + sc + ')'
                        });
                        }, 1);
                        jQuery(next_image_class).css('opacity', 1);
                        /* After transition.*/
                        var cccount = 0;
                        var obshicccount = cols * rows;
                        grid.children().one('webkitTransitionEnd transitionend otransitionend oTransitionEnd mstransitionend', jQuery.proxy(wds_after_trans_each));
                        function wds_after_trans_each() {
                        if (++cccount == obshicccount) {
                        wds_after_trans();
                        }
                        }
                        function wds_after_trans() {
                        jQuery(current_image_class).css({'opacity' : 0, 'z-index': 1});
                        jQuery(next_image_class).css({'opacity' : 1, 'z-index' : 2});
                        cur_img.css('opacity', 1);
                        grid.remove();
                        wds_trans_in_progress_0 = false;
                        if (typeof wds_event_stack_0 !== 'undefined') {
                        if (wds_event_stack_0.length > 0) {
                        key = wds_event_stack_0[0].split("-");
                        wds_event_stack_0.shift();
                        wds_change_image_0(key[0], key[1], wds_data_0, true);
                        }
                        }
                        }
                        }
                        function wds_none_0(current_image_class, next_image_class, direction) {
                        jQuery(current_image_class).css({'opacity' : 0, 'z-index': 1});
                        jQuery(next_image_class).css({'opacity' : 1, 'z-index' : 2});
                        /* Set active thumbnail.*/
                        wds_set_dots_class_0();
                        }
                        function wds_fade_0(current_image_class, next_image_class, direction) {
                        /* Set active thumbnail.*/
                        wds_set_dots_class_0();
                        if (wds_testBrowser_cssTransitions_0()) {
                        jQuery(next_image_class).css('transition', 'opacity ' + wds_transition_duration_0 + 'ms linear');
                        jQuery(current_image_class).css({'opacity' : 0, 'z-index': 1});
                        jQuery(next_image_class).css({'opacity' : 1, 'z-index' : 2});
                        }
                        else {
                        jQuery(current_image_class).animate({'opacity' : 0, 'z-index' : 1}, wds_transition_duration_0);
                        jQuery(next_image_class).animate({
                        'opacity' : 1,
                                'z-index': 2
                        }, {
                        duration: wds_transition_duration_0,
                                complete: function () {  }
                        });
                        /* For IE.*/
                        jQuery(current_image_class).fadeTo(wds_transition_duration_0, 0);
                        jQuery(next_image_class).fadeTo(wds_transition_duration_0, 1);
                        }
                        }
                        function wds_sliceH_0(current_image_class, next_image_class, direction) {
                        if (direction == 'right') {
                        var translateX = 'min-auto';
                        }
                        else if (direction == 'left') {
                        var translateX = 'auto';
                        }
                        wds_grid_0(1, 8, 0, translateX, 0, 1, 0, current_image_class, next_image_class, direction, 0, 0, 'ease-in-out');
                        }
                        function wds_fan_0(current_image_class, next_image_class, direction) {
                        if (direction == 'right') {
                        var rotate = 45;
                        var translateX = 100;
                        }
                        else if (direction == 'left') {
                        var rotate = - 45;
                        var translateX = - 100;
                        }
                        wds_grid_0(1, 10, rotate, translateX, 0, 1, 0, current_image_class, next_image_class, direction, 0, 0, 'ease-in-out');
                        }
                        function wds_scaleIn_0(current_image_class, next_image_class, direction) {
                        wds_grid_0(1, 1, 0, 0, 0, 0.5, 0, current_image_class, next_image_class, direction, 0, 0, 'ease-in-out');
                        }
                        function iterator_0() {
                        var iterator = 1;
                        if (0) {
                        iterator = Math.floor((wds_data_0.length - 1) * Math.random() + 1);
                        }
                        return iterator;
                        }
                        function wds_change_image_0(current_key, key, wds_data_0, from_effect) {
                        /* Pause videos.*/
                        jQuery("#wds_slideshow_image_container_0").find("iframe").each(function () {
                        if (typeof jQuery(this)[0].contentWindow != "undefined") {
                        jQuery(this)[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
                        jQuery(this)[0].contentWindow.postMessage('{ "method": "stop" }', "*");
                        jQuery(this)[0].contentWindow.postMessage('stop', '*');
                        }
                        });
                        /* Pause layer videos.*/
                        jQuery(".wds_video_layer_frame_0").each(function () {
                        if (typeof jQuery(this)[0].contentWindow != "undefined") {
                        jQuery(this)[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
                        jQuery(this)[0].contentWindow.postMessage('{ "method": "pause" }', "*");
                        jQuery(this)[0].contentWindow.postMessage('pause', '*');
                        }
                        });
                        if (wds_data_0[key]) {
                        if (jQuery('.wds_ctrl_btn_0').hasClass('fa-pause') || ('1')) {
                        play_0();
                        }
                        if (!from_effect) {
                        /* Change image key.*/
                        jQuery("#wds_current_image_key_0").val(key);
                        if (current_key == '-1') { /* Filmstrip.*/
                        current_key = jQuery(".wds_slideshow_thumb_active_0").children("img").attr("image_key");
                        }
                        else if (current_key == '-2') { /* Dots.*/
                        current_key = jQuery(".wds_slideshow_dots_active_0").attr("image_key");
                        }
                        }
                        if (wds_trans_in_progress_0) {
                        wds_event_stack_0.push(current_key + '-' + key);
                        return;
                        }
                        var direction = 'right';
                        var int_curr_key = parseInt(wds_current_key_0);
                        var int_key = parseInt(key);
                        var last_pos = wds_data_0.length - 1;
                        if (int_curr_key > int_key) {
                        direction = 'left';
                        }
                        else if (int_curr_key == int_key) {
                        return;
                        }
                        if (int_key == 0) {
                        if (int_curr_key == last_pos) {
                        direction = 'right';
                        }
                        }
                        if (int_key == last_pos) {
                        if (int_curr_key == 0) {
                        direction = 'left';
                        }
                        }
                        /* Set active thumbnail position.*/
                        wds_current_filmstrip_pos_0 = key * (jQuery(".wds_slideshow_filmstrip_thumbnail_0").width() + 2 + 2 * 0);
                        wds_current_key_0 = key;
                        /* Change image id.*/
                        jQuery("div[img_id=wds_slideshow_image_0]").attr('image_id', wds_data_0[key]["id"]);
                        var current_image_class = "#wds_image_id_0_" + wds_data_0[current_key]["id"];
                        var next_image_class = "#wds_image_id_0_" + wds_data_0[key]["id"];
                        if (wds_data_0[key]["is_video"] == 'image') {
                        jQuery(next_image_class).find(".wds_slideshow_image_0").css("background-image", 'url("' + wds_data_0[key]["image_url"] + '")');
                        }
                        var current_slide_layers_count = wds_data_0[current_key]["slide_layers_count"];
                        var next_slide_layers_count = wds_data_0[key]["slide_layers_count"];
                        /* Clear layers before image change.*/
                        function set_layer_effect_out_before_change(m) {
                        wds_clear_layers_effects_out_before_change_0[current_key][m] = setTimeout(function() {
                        if (wds_data_0[current_key]["layer_" + m + "_type"] != 'social') {
                        jQuery('#wds_0_slide' + wds_data_0[current_key]["id"] + '_layer' + wds_data_0[current_key]["layer_" + m + "_id"]).css('-webkit-animation-duration', 0.6 + 's').css('animation-duration', 0.6 + 's');
                        jQuery('#wds_0_slide' + wds_data_0[current_key]["id"] + '_layer' + wds_data_0[current_key]["layer_" + m + "_id"]).removeClass().addClass(wds_data_0[current_key]["layer_" + m + "_layer_effect_out"] + ' animated');
                        }
                        else {
                        jQuery('#wds_0_slide' + wds_data_0[current_key]["id"] + '_layer' + wds_data_0[current_key]["layer_" + m + "_id"]).css('-webkit-animation-duration', 0.6 + 's').css('animation-duration', 0.6 + 's');
                        jQuery('#wds_0_slide' + wds_data_0[current_key]["id"] + '_layer' + wds_data_0[current_key]["layer_" + m + "_id"]).removeClass().addClass(wds_data_0[current_key]["layer_" + m + "_layer_effect_out"] + ' fa fa-' + wds_data_0[current_key]["layer_" + m + "_social_button"] + ' animated');
                        }
                        }, 10);
                        }
                        if (0) {
                        for (var m = 0; m < current_slide_layers_count; m++) {
                        if (jQuery('#wds_0_slide' + wds_data_0[current_key]["id"] + '_layer' + wds_data_0[current_key]["layer_" + m + "_id"]).css('opacity') != 0) {
                        set_layer_effect_out_before_change(m);
                        }
                        }
                        }
                        /* Loop through current slide layers for clear effects.*/
                        setTimeout(function() {
                        for (var k = 0; k < current_slide_layers_count; k++) {
                        clearTimeout(wds_clear_layers_effects_in_0[current_key][k]);
                        clearTimeout(wds_clear_layers_effects_out_0[current_key][k]);
                        if (wds_data_0[current_key]["layer_" + k + "_type"] != 'social') {
                        jQuery('#wds_0_slide' + wds_data_0[current_key]["id"] + '_layer' + wds_data_0[current_key]["layer_" + k + "_id"]).removeClass().addClass('wds_layer_' + wds_data_0[current_key]["layer_" + k + "_id"]);
                        }
                        else {
                        jQuery('#wds_0_slide' + wds_data_0[current_key]["id"] + '_layer' + wds_data_0[current_key]["layer_" + k + "_id"]).removeClass().addClass('fa fa-' + wds_data_0[current_key]["layer_" + k + "_social_button"] + ' wds_layer_' + wds_data_0[current_key]["layer_" + k + "_id"]);
                        }
                        }
                        }, wds_duration_for_clear_effects_0);
                        /* Loop through layers in.*/
                        for (var j = 0; j < next_slide_layers_count; j++) {
                        wds_set_layer_effect_in_0(j, key);
                        }
                        /* Loop through layers out if pause button not pressed.*/
                        for (var i = 0; i < next_slide_layers_count; i++) {
                        wds_set_layer_effect_out_0(i, key);
                        }
                        setTimeout(function() {
                        if (typeof jQuery().finish !== 'undefined') {
                        if (jQuery.isFunction(jQuery().finish)) {
                        jQuery(".wds_line_timer_0").finish();
                        }
                        }
                        jQuery(".wds_line_timer_0").css({width: 0});
                        wds_fade_0(current_image_class, next_image_class, direction);
                        if ('bottom' != 'none') {
                        if (1 || jQuery('.wds_ctrl_btn_0').hasClass('fa-pause')) {
                        if ('bottom' == 'top' || 'bottom' == 'bottom') {
                        if (!jQuery(".wds_ctrl_btn_0").hasClass("fa-play")) {
                        jQuery(".wds_line_timer_0").animate({
                        width: "100%"
                        }, {
                        duration: 5000,
                                specialEasing: {width: "linear"}
                        });
                        }
                        }
                        else if ('bottom' != 'none') {
                        if (typeof circle_timer_animate_0 !== 'undefined') {
                        circle_timer_animate_0.stop();
                        }
                        jQuery('#top_right_0').css({
                        '-moz-transform':'rotate(0deg)',
                                '-webkit-transform':'rotate(0deg)',
                                '-o-transform':'rotate(0deg)',
                                '-ms-transform':'rotate(0deg)',
                                'transform':'rotate(0deg)',
                                '-webkit-transform-origin': 'left bottom',
                                '-ms-transform-origin': 'left bottom',
                                '-moz-transform-origin': 'left bottom',
                                'transform-origin': 'left bottom'
                        });
                        jQuery('#bottom_right_0').css({
                        '-moz-transform':'rotate(0deg)',
                                '-webkit-transform':'rotate(0deg)',
                                '-o-transform':'rotate(0deg)',
                                '-ms-transform':'rotate(0deg)',
                                'transform':'rotate(0deg)',
                                '-webkit-transform-origin': 'left top',
                                '-ms-transform-origin': 'left top',
                                '-moz-transform-origin': 'left top',
                                'transform-origin': 'left top'
                        });
                        jQuery('#bottom_left_0').css({
                        '-moz-transform':'rotate(0deg)',
                                '-webkit-transform':'rotate(0deg)',
                                '-o-transform':'rotate(0deg)',
                                '-ms-transform':'rotate(0deg)',
                                'transform':'rotate(0deg)',
                                '-webkit-transform-origin': 'right top',
                                '-ms-transform-origin': 'right top',
                                '-moz-transform-origin': 'right top',
                                'transform-origin': 'right top'
                        });
                        jQuery('#top_left_0').css({
                        '-moz-transform':'rotate(0deg)',
                                '-webkit-transform':'rotate(0deg)',
                                '-o-transform':'rotate(0deg)',
                                '-ms-transform':'rotate(0deg)',
                                'transform':'rotate(0deg)',
                                '-webkit-transform-origin': 'right bottom',
                                '-ms-transform-origin': 'right bottom',
                                '-moz-transform-origin': 'right bottom',
                                'transform-origin': 'right bottom'
                        });
                        if (!jQuery(".wds_ctrl_btn_0").hasClass("fa-play")) {
                        /* Begin circle timer on next.*/
                        circle_timer_0(0);
                        }
                        else {
                        curent_time_deggree_0 = 0;
                        }
                        }
                        }
                        }
                        if (wds_data_0[key]["is_video"] != 'image') {
                        jQuery("#wds_slideshow_play_pause_0").css({display: 'none'});
                        }
                        else {
                        jQuery("#wds_slideshow_play_pause_0").css({display: ''});
                        }
                        }, wds_duration_for_change_0);
                        }
                        }
                        function wds_resize_slider_0() {
                        var slide_orig_width = 1140;
                        var slide_orig_height = 378;
                        var slide_width = jQuery("#wds_container1_0").parent().width();
                        if (slide_width > slide_orig_width) {
                        slide_width = slide_orig_width;
                        }
                        var ratio = slide_width / slide_orig_width;
                        var slide_height = slide_orig_height;
                        if (slide_orig_width > slide_width) {
                        slide_height = Math.floor(slide_width * slide_orig_height / slide_orig_width);
                        }

                        jQuery(".wds_slideshow_image_wrap_0, #wds_container2_0").height(slide_height + 0);
                        jQuery(".wds_slideshow_image_container_0").height(slide_height);
                        jQuery(".wds_slideshow_image_0").height(slide_height);
                        jQuery(".wds_slideshow_video_0").height(slide_height);
                        jQuery(".wds_slideshow_image_0 img").each(function () {
                        var wds_theImage = new Image();
                        wds_theImage.src = jQuery(this).attr("src");
                        var wds_origWidth = wds_theImage.width;
                        var wds_origHeight = wds_theImage.height;
                        var wds_imageWidth = jQuery(this).attr("wds_image_width");
                        var wds_imageHeight = jQuery(this).attr("wds_image_height");
                        var wds_width = wds_imageWidth;
                        if (wds_imageWidth > wds_origWidth) {
                        wds_width = wds_origWidth;
                        }
                        var wds_height = wds_imageHeight;
                        if (wds_imageHeight > wds_origHeight) {
                        wds_height = wds_origHeight;
                        }
                        jQuery(this).css({
                        maxWidth: (parseFloat(wds_imageWidth) * ratio) + "px",
                                maxHeight: (parseFloat(wds_imageHeight) * ratio) + "px",
                        });
                        if (jQuery(this).attr("wds_scale") != "on") {
                        jQuery(this).css({
                        width: (parseFloat(wds_imageWidth) * ratio) + "px",
                                height: (parseFloat(wds_imageHeight) * ratio) + "px"
                        });
                        }
                        else if (wds_imageWidth > wds_origWidth || wds_imageHeight > wds_origHeight) {
                        if (wds_origWidth / wds_imageWidth > wds_origHeight / wds_imageHeight) {
                        jQuery(this).css({
                        width: (parseFloat(wds_imageWidth) * ratio) + "px"
                        });
                        }
                        else {
                        jQuery(this).css({
                        height: (parseFloat(wds_imageHeight) * ratio) + "px"
                        });
                        }
                        }

                        });
                        jQuery(".wds_slideshow_image_0 span, .wds_slideshow_image_0 i").each(function () {
                        jQuery(this).css({
                        fontSize: (parseFloat(jQuery(this).attr("wds_fsize")) * ratio) + "px",
                                lineHeight: "1.25em",
                                paddingLeft: (parseFloat(jQuery(this).attr("wds_fpaddingl")) * ratio) + "px",
                                paddingRight: (parseFloat(jQuery(this).attr("wds_fpaddingr")) * ratio) + "px",
                                paddingTop: (parseFloat(jQuery(this).attr("wds_fpaddingt")) * ratio) + "px",
                                paddingBottom: (parseFloat(jQuery(this).attr("wds_fpaddingb")) * ratio) + "px",
                        });
                        });
                        }
                        /* Generate background position for Zoom Fade effect.*/
                        function wds_genBgPos_0() {
                        var bgSizeArray = [0, 70];
                        var bgSize = bgSizeArray[Math.floor(Math.random() * bgSizeArray.length)];
                        var bgPosXArray = ['left', 'right'];
                        var bgPosYArray = ['top', 'bottom'];
                        var bgPosX = bgPosXArray[Math.floor(Math.random() * bgPosXArray.length)];
                        var bgPosY = bgPosYArray[Math.floor(Math.random() * bgPosYArray.length)];
                        jQuery(".wds_slideshow_image_0").css({
                        backgroundPosition: bgPosX + " " + bgPosY,
                                backgroundSize : (100 + bgSize) + "%",
                                webkitAnimation: '5s linear 0s alternate infinite wdszoom' + bgSize,
                                mozAnimation: '5s linear 0s alternate infinite wdszoom' + bgSize,
                                animation: '5s linear 0s alternate infinite wdszoom' + bgSize
                        });
                        }
                        jQuery(window).resize(function () {
                        wds_resize_slider_0();
                        });
                        function wds_full_width_0() {
                        var left = jQuery("#wds_container1_0").offset().left;
                        jQuery(".wds_slideshow_image_wrap_0").css({
                        left: ( - left + 0) + "px",
                                width: (jQuery(window).width() - 0) + "px",
                                maxWidth: "none"
                        });
                        }
                        if ("http://www.onsitedetailing.net//<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/slider-wd//carplanerboat.jpg" != '') {
                        jQuery('<img />').attr("src", "<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/slider-wd/carplanerboat.jpg").load(function() {
                        jQuery(this).remove();
                        wds_ready_0();
                        });
                        }
                        else {
                        jQuery(document).ready(function () {
                        wds_ready_0();
                        });
                        }
                        function wds_ready_0() {
                        jQuery(".wds_slideshow_image_0 span, .wds_slideshow_image_0 i").each(function () {
                        jQuery(this).attr("wds_fpaddingl", jQuery(this).css("paddingLeft"));
                        jQuery(this).attr("wds_fpaddingr", jQuery(this).css("paddingRight"));
                        jQuery(this).attr("wds_fpaddingt", jQuery(this).css("paddingTop"));
                        jQuery(this).attr("wds_fpaddingb", jQuery(this).css("paddingBottom"));
                        });
                        if (4000) {
                        jQuery("#wds_container2_0").hover(function () {
                        jQuery(".wds_right-ico_0").animate({left: 0}, 700, "swing");
                        jQuery(".wds_left-ico_0").animate({left: 0}, 700, "swing");
                        jQuery("#wds_slideshow_play_pause_0").animate({opacity: 1, filter: "Alpha(opacity=100)"}, 700, "swing");
                        }, function () {
                        jQuery(".wds_right-ico_0").css({left: 4000});
                        jQuery(".wds_left-ico_0").css({left: - 4000});
                        jQuery("#wds_slideshow_play_pause_0").css({opacity: 0, filter: "Alpha(opacity=0)"});
                        });
                        }
                        if (!1) {
                        jQuery("#wds_container2_0").hover(function () {
                        jQuery(".wds_slideshow_dots_container_0").animate({opacity: 1, filter: "Alpha(opacity=100)"}, 700, "swing");
                        }, function () {
                        jQuery(".wds_slideshow_dots_container_0").css({opacity: 0, filter: "Alpha(opacity=0)"});
                        });
                        }

                        wds_resize_slider_0();
                        jQuery("#wds_container2_0").css({visibility: 'visible'});
                        jQuery(".wds_loading").hide();
                        var curr_img_id = wds_data_0[parseInt(jQuery('#wds_current_image_key_0').val())]["id"];
                        jQuery("#wds_image_id_0_" + curr_img_id).css('transition', 'opacity ' + wds_transition_duration_0 + 'ms linear');
                        var isMobile = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
                        if (isMobile) {
                        if (1) {
                        wds_swipe();
                        }
                        }
                        else {
                        if (0) {
                        wds_swipe();
                        }
                        }
                        function wds_swipe() {
                        if (typeof jQuery().swiperight !== 'undefined') {
                        if (jQuery.isFunction(jQuery().swiperight)) {
                        jQuery('#wds_container1_0').swiperight(function () {
                        wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), (parseInt(jQuery('#wds_current_image_key_0').val()) - iterator_0()) >= 0 ? (parseInt(jQuery('#wds_current_image_key_0').val()) - iterator_0()) % wds_data_0.length : wds_data_0.length - 1, wds_data_0);
                        return false;
                        });
                        }
                        }
                        if (typeof jQuery().swipeleft !== 'undefined') {
                        if (jQuery.isFunction(jQuery().swipeleft)) {
                        jQuery('#wds_container1_0').swipeleft(function () {
                        wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), (parseInt(jQuery('#wds_current_image_key_0').val()) + iterator_0()) % wds_data_0.length, wds_data_0);
                        return false;
                        });
                        }
                        }
                        }

                        var wds_click = isMobile ? 'touchend' : 'click';
                        var mousewheelevt = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel"; /* FF doesn't recognize mousewheel as of FF3.x */
                        var wds_play_pause = 0;
                        function wds_play_pause_0() {
                        if (jQuery(".wds_ctrl_btn_0").hasClass("fa-play") || wds_play_pause) {
                        wds_play_pause = 0;
                        /* Play.*/
                        jQuery(".wds_slideshow_play_pause_0").attr("title", "Pause");
                        jQuery(".wds_slideshow_play_pause_0").attr("class", "wds_ctrl_btn_0 wds_slideshow_play_pause_0 fa fa-pause");
                        /* Finish current animation and begin the other.*/
                        if (1) {
                        if ('bottom' != 'top') {
                        if ('bottom' != 'bottom') {
                        if (typeof circle_timer_animate_0 !== 'undefined') {
                        circle_timer_animate_0.stop();
                        }
                        circle_timer_0(curent_time_deggree_0);
                        }
                        }
                        }
                        play_0();
                        if (0) {
                        document.getElementById("wds_audio_0").play();
                        }
                        }
                        else {
                        /* Pause.*/
                        /* Pause layers out effect.*/
                        wds_play_pause = 1;
                        var current_key = jQuery('#wds_current_image_key_0').val();
                        var current_slide_layers_count = wds_data_0[current_key]["slide_layers_count"];
                        setTimeout(function() {
                        for (var k = 0; k < current_slide_layers_count; k++) {
                        clearTimeout(wds_clear_layers_effects_out_0[current_key][k]);
                        }
                        }, wds_duration_for_clear_effects_0);
                        window.clearInterval(wds_playInterval_0);
                        jQuery(".wds_slideshow_play_pause_0").attr("title", "Play");
                        jQuery(".wds_slideshow_play_pause_0").attr("class", "wds_ctrl_btn_0 wds_slideshow_play_pause_0 fa fa-play");
                        if (0) {
                        document.getElementById("wds_audio_0").pause();
                        }
                        if (typeof jQuery().stop !== 'undefined') {
                        if (jQuery.isFunction(jQuery().stop)) {
                        jQuery(".wds_line_timer_0").stop();
                        }
                        }
                        }
                        }
                        /* Mouswheel navigation.*/
                        if (0) {
                        jQuery('.wds_slide_container_0').bind(mousewheelevt, function(e) {
                        var evt = window.event || e; /* Equalize event object.*/
                        evt = evt.originalEvent ? evt.originalEvent : evt; /* Convert to originalEvent if possible.*/
                        var delta = evt.detail ? evt.detail * ( - 40) : evt.wheelDelta; /* Check for detail first, because it is used by Opera and FF.*/
                        if (delta > 0) {
                        /* Scroll up.*/
                        wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), (parseInt(jQuery('#wds_current_image_key_0').val()) - iterator_0()) >= 0 ? (parseInt(jQuery('#wds_current_image_key_0').val()) - iterator_0()) % wds_data_0.length : wds_data_0.length - 1, wds_data_0);
                        }
                        else {
                        /* Scroll down.*/
                        wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), (parseInt(jQuery('#wds_current_image_key_0').val()) + iterator_0()) % wds_data_0.length, wds_data_0);
                        }
                        return false;
                        });
                        }
                        /* Keyboard navigation.*/
                        if (0) {
                        jQuery(document).on('keydown', function (e) {
                        if (e.keyCode === 39 || e.keyCode === 38) { /* Right arrow.*/
                        wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), (parseInt(jQuery('#wds_current_image_key_0').val()) + iterator_0()) % wds_data_0.length, wds_data_0);
                        if (e.preventDefault) {
                        e.preventDefault();
                        }
                        else {
                        e.returnValue = false;
                        }
                        }
                        else if (e.keyCode === 37 || e.keyCode === 40) { /* Left arrow.*/
                        wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), (parseInt(jQuery('#wds_current_image_key_0').val()) - iterator_0()) >= 0 ? (parseInt(jQuery('#wds_current_image_key_0').val()) - iterator_0()) % wds_data_0.length : wds_data_0.length - 1, wds_data_0);
                        if (e.preventDefault) {
                        e.preventDefault();
                        }
                        else {
                        e.returnValue = false;
                        }
                        }
                        else if (e.keyCode === 32) { /* Space.*/
                        wds_play_pause_0();
                        if (e.preventDefault) {
                        e.preventDefault();
                        }
                        else {
                        e.returnValue = false;
                        }
                        }
                        });
                        }
                        /* Play/pause.*/
                        jQuery("#wds_slideshow_play_pause_0").on(wds_click, function () {
                        wds_play_pause_0();
                        });
                        if (1) {
                        play_0();
                        jQuery(".wds_slideshow_play_pause_0").attr("title", "Pause");
                        jQuery(".wds_slideshow_play_pause_0").attr("class", "wds_ctrl_btn_0 wds_slideshow_play_pause_0 fa fa-pause");
                        if (0) {
                        document.getElementById("wds_audio_0").play();
                        }
                        if ('bottom' != 'none') {
                        if ('bottom' != 'top') {
                        if ('bottom' != 'bottom') {
                        circle_timer_0(0);
                        }
                        }
                        }
                        }
                        function wds_preload_0(preload_key) {
                        jQuery('<img />')
                                .load(function() { if (preload_key < wds_data_0.length - 1) wds_preload_0(preload_key + 1); })
                                .error(function() { if (preload_key < wds_data_0.length - 1) wds_preload_0(preload_key + 1); })
                                .attr("src", (wds_data_0[preload_key]["is_video"] == 'image' ? wds_data_0[preload_key]["image_url"] : ""));
                        }
                        wds_preload_0(0);
                        var first_slide_layers_count_0 = wds_data_0[0]["slide_layers_count"];
                        if (first_slide_layers_count_0) {
                        /* Loop through layers in.*/
                        for (var j = 0; j < first_slide_layers_count_0; j++) {
                        wds_set_layer_effect_in_0(j, 0);
                        }
                        /* Loop through layers out.*/
                        for (var i = 0; i < first_slide_layers_count_0; i++) {
                        wds_set_layer_effect_out_0(i, 0);
                        }
                        }
                        jQuery(".wds_slideshow_filmstrip_0").hover(function() {
                        jQuery(".wds_slideshow_filmstrip_left_0 i, .wds_slideshow_filmstrip_right_0 i").animate({opacity: 1, filter: "Alpha(opacity=100)"}, 700, "swing");
                        }, function () {
                        jQuery(".wds_slideshow_filmstrip_left_0 i, .wds_slideshow_filmstrip_right_0 i").animate({opacity: 0, filter: "Alpha(opacity=0)"}, 700, "swing");
                        });
                        }
                        function wds_stop_animation_0() {
                        window.clearInterval(wds_playInterval_0);
                        /* Pause layers out effect.*/
                        var current_key = jQuery('#wds_current_image_key_0').val();
                        var current_slide_layers_count = wds_data_0[current_key]["slide_layers_count"];
                        setTimeout(function() {
                        for (var k = 0; k < current_slide_layers_count; k++) {
                        clearTimeout(wds_clear_layers_effects_out_0[current_key][k]);
                        }
                        }, wds_duration_for_clear_effects_0);
                        if (0) {
                        document.getElementById("wds_audio_0").pause();
                        }
                        if (typeof jQuery().stop !== 'undefined') {
                        if (jQuery.isFunction(jQuery().stop)) {
                        if ('bottom' == 'top' || 'bottom' == 'bottom') {
                        jQuery(".wds_line_timer_0").stop();
                        }
                        else if ('bottom' != 'none') {
                        circle_timer_animate_0.stop();
                        }
                        }
                        }
                        }
                        function wds_play_animation_0() {
                        if (jQuery(".wds_ctrl_btn_0").hasClass("fa-play")) {
                        return;
                        }
                        play_0();
                        if ('bottom' != 'none') {
                        if ('bottom' != 'bottom') {
                        if ('bottom' != 'top') {
                        if (typeof circle_timer_animate_0 !== 'undefined') {
                        circle_timer_animate_0.stop();
                        }
                        circle_timer_0(curent_time_deggree_0);
                        }
                        }
                        }
                        if (0) {
                        document.getElementById("wds_audio_0").play();
                        }
                        }
                        /* Effects in part.*/
                        function wds_set_layer_effect_in_0(j, key) {
                        wds_clear_layers_effects_in_0[key][j] = setTimeout(function(){
                        if (wds_data_0[key]["layer_" + j + "_type"] != 'social') {
                        jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + j + "_id"]).css('-webkit-animation-duration', wds_data_0[key]["layer_" + j + "_duration_eff_out"] / 1000 + 's').css('animation-duration', wds_data_0[key]["layer_" + j + "_duration_eff_out"] / 1000 + 's');
                        jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + j + "_id"]).removeClass().addClass(wds_data_0[key]["layer_" + j + "_layer_effect_in"] + ' animated');
                        }
                        else {
                        jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + j + "_id"]).css('-webkit-animation-duration', wds_data_0[key]["layer_" + j + "_duration_eff_out"] / 1000 + 's').css('animation-duration', wds_data_0[key]["layer_" + j + "_duration_eff_out"] / 1000 + 's');
                        jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + j + "_id"]).removeClass().addClass(wds_data_0[key]["layer_" + j + "_layer_effect_in"] + ' fa fa-' + wds_data_0[key]["layer_" + j + "_social_button"] + ' animated');
                        }
                        /* Play video on layer in.*/
                        if (wds_data_0[key]["layer_" + j + "_type"] == "video") {
                        if (wds_data_0[key]["layer_" + j + "_video_autoplay"] == "on") {
                        jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + j + "_id"]).find("iframe").each(function () {
                        jQuery(this)[0].contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
                        jQuery(this)[0].contentWindow.postMessage('{ "method": "play" }', "*");
                        });
                        }
                        }
                        }, wds_data_0[key]["layer_" + j + "_start"]);
                        }
                        /* Effects out part.*/
                        function wds_set_layer_effect_out_0(i, key) {
                        wds_clear_layers_effects_out_0[key][i] = setTimeout(function() {
                        if (wds_data_0[key]["layer_" + i + "_layer_effect_out"] != 'none') {
                        if (wds_data_0[key]["layer_" + i + "_type"] != 'social') {
                        jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + i + "_id"]).css('-webkit-animation-duration', wds_data_0[key]["layer_" + i + "_duration_eff_out"] / 1000 + 's').css('animation-duration', wds_data_0[key]["layer_" + i + "_duration_eff_out"] / 1000 + 's');
                        jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + i + "_id"]).removeClass().addClass(wds_data_0[key]["layer_" + i + "_layer_effect_out"] + ' animated');
                        }
                        else {
                        jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + i + "_id"]).css('-webkit-animation-duration', wds_data_0[key]["layer_" + i + "_duration_eff_out"] / 1000 + 's').css('animation-duration', wds_data_0[key]["layer_" + i + "_duration_eff_out"] / 1000 + 's');
                        jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + i + "_id"]).removeClass().addClass(wds_data_0[key]["layer_" + i + "_layer_effect_out"] + ' fa fa-' + wds_data_0[key]["layer_" + i + "_social_button"] + ' animated');
                        }
                        }
                        }, wds_data_0[key]["layer_" + i + "_end"]);
                        }
                        function play_0() {
                        if ('bottom' != 'none') {
                        if (1 || jQuery('.wds_ctrl_btn_0').hasClass('fa-pause')) {
                        jQuery(".wds_line_timer_0").animate({
                        width: "100%"
                        }, {
                        duration: 5000,
                                specialEasing: {width: "linear"}
                        });
                        }
                        }
                        window.clearInterval(wds_playInterval_0);
                        /* Play.*/
                        wds_playInterval_0 = setInterval(function () {
                        var iterator = 1;
                        if (0) {
                        iterator = Math.floor((wds_data_0.length - 1) * Math.random() + 1);
                        }
                        wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), (parseInt(jQuery('#wds_current_image_key_0').val()) + iterator) % wds_data_0.length, wds_data_0);
                        }, parseInt('5000') + wds_duration_for_change_0);
                        }
                        jQuery(window).focus(function() {
                        if (!jQuery(".wds_ctrl_btn_0").hasClass("fa-play")) {
                        if (1) {
                        play_0();
                        if ('bottom' != 'none') {
                        if ('bottom' != 'top') {
                        if ('bottom' != 'bottom') {
                        if (typeof circle_timer_animate_0 !== 'undefined') {
                        circle_timer_animate_0.stop();
                        }
                        circle_timer_0(curent_time_deggree_0);
                        }
                        }
                        }
                        }
                        }
                        var i_0 = 0;
                        jQuery(".wds_slider_0").children("span").each(function () {
                        if (jQuery(this).css('opacity') == 1) {
                        jQuery("#wds_current_image_key_0").val(i_0);
                        }
                        i_0++;
                        });
                        });
                        jQuery(window).blur(function() {
                        wds_event_stack_0 = [];
                        window.clearInterval(wds_playInterval_0);
                        if (typeof jQuery().stop !== 'undefined') {
                        if (jQuery.isFunction(jQuery().stop)) {
                        if ('bottom' == 'top' || 'bottom' == 'bottom') {
                        jQuery(".wds_line_timer_0").stop();
                        }
                        else if ('bottom' != 'none') {
                        circle_timer_animate_0.stop();
                        }
                        }
                        }
                        });
                    </script>
                </div>
                <!-- <div class="col-md-3">
                                        </div> -->
            </div>
            <div class="row empty">
                <div class="col-md-12">
                    &nbsp;
                </div>
            </div>
            <div class="row featured-content">
                <div class="col-md-4 newStuff"><div class="innerStuff">
                        <aside id="text-3" class="widget widget_text">			<div class="textwidget"><a href="javascript:;"><img src="<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/2015/06/schedule.jpg" class="img-responsive" / ></a></div>
                        </aside>		</div></div>
                <div class="col-md-4 newStuff"><div class="innerStuff">
                        <aside id="text-2" class="widget widget_text">			<div class="textwidget"><a href="<?php echo base_url()?>mobile-detail/special-offer"><img src="<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/2015/06/Specials.jpg" class="img-responsive" / ></a></div>
                        </aside>		</div></div>
                <div class="col-md-4 newStuff"><div class="innerStuff">
                        <aside id="text-4" class="widget widget_text">			<div class="textwidget"><a href="<?php echo base_url()?>mobile-detail/testimonials"><img src="<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/2015/06/testimonials.jpg" class="img-responsive" / ></a></div>
                        </aside>		</div></div>
            </div>
            <div class="row">	
                <div class="col-md-12 mainContent">
                    <h1 class="page_header">Welcome to On-Site Detailing</h1>
                    <p><a href="https://member.angieslist.com/member/store/1934016?ref=search&amp;categoryId=16"><img class="alignleft size-full wp-image-129" src="<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/2016/11/angies-list.png" alt="Angies List" width="225" height="186" /></a>Professional, mobile auto detailing service is what On-Site Detailing, Inc does. Located in Wilmington, Delaware and Incorporated in 2003 On-Site detailing was developed by Owner and auto enthusiast Demetri Kyranakis who was formerly a sales representative w/ Mercedes Benz. It was here that many would call and ask “where should I take my car to have it cleaned properly?&#8221;. At the time, there was no good answer. Now, On-Site Detailing is the solution! Whether you are at home or at the office, On-Site Detailing comes to you! We strive for perfection on every appointment and welcome everyone’s feedback. Our client base consists of corporate as well as individual clients.</p>
                    <p>On-Site Detailing – Delaware, Pennsylvania, New Jersey and Maryland’s leading mobile auto detailing service On-Site Detailing comes to your home or office to wash or fully detail your vehicle! Don’t wait in line for a disappointing service at your local “car wash�?. Our employees are certified auto detailers with certificates in automotive appearance. We treat you vehicle like it’s our own, our services start at $49.00. We also offer group discounts.</p>
                </div>
            </div>
            <div class="row">	
                <div class="col-md-12 mainBody">

                    <div class="innerStuff2">
                        <!--Start row--><div class="row" id="latest">
                            <div class="col-md-6">
                                <div class="home-icon">
                                    <a href="<?php echo base_url()?>mobile-detail/ultimate-auto-detailing-service" title="Cars $249 &#8211; $259 Truck/SUV $279 &#8211; $299 This comprehensive" rel="bookmark">        <h3>Ultimate Auto Detail Service</h3>
                                    </a>
                                    <a href="<?php echo base_url()?>mobile-detail/ultimate-auto-detailing-service" title="Cars $249 &#8211; $259 Truck/SUV $279 &#8211; $299 This comprehensive" rel="bookmark"><div class="latestimg pull-left" style="background-image: url(<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/2015/06/bigstockphoto_Washing_Car_Close_Up_2938823.jpg); width: 90px; height: 90px;"></div></a>
                                <!-- <a href="http://www.onsitedetailing.net/ultimate-auto-detail-service/" title="Cars $249 &#8211; $259 Truck/SUV $279 &#8211; $299 This comprehensive" rel="bookmark"><img src="http://www.onsitedetailing.net/<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/2015/06/bigstockphoto_Washing_Car_Close_Up_2938823.jpg" class="img-thumbnail pull-left"></a> -->

                                    <p>Cars $249 &#8211; $259 Truck/SUV $279 &#8211; $299 This comprehensive detailing will make you feel like you purchased a</p>
                                    <div class="clearfix"></div>
                                    <a href="<?php echo base_url()?>mobile-detail/ultimate-auto-detailing-service" title="Cars $249 &#8211; $259 Truck/SUV $279 &#8211; $299 This comprehensive" rel="bookmark"><button class="btn btn-mini btn-primary btn-block" type="button">Read more...</button></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="home-icon">
                                    <a href="<?php echo base_url()?>mobile-detail/full-auto-detailing-service" title="Cars $149 &#8211; $159 Truck/SUV $179 &#8211; $199 The best" rel="bookmark">        <h3>Full Auto Detail Service</h3>
                                    </a>
                                    <a href="<?php echo base_url()?>mobile-detail/full-auto-detailing-service" title="Cars $149 &#8211; $159 Truck/SUV $179 &#8211; $199 The best" rel="bookmark"><div class="latestimg pull-left" style="background-image: url(<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/themes/onsitedetailing/images/cssimgs/icondefault.png); width: 90px; height: 90px;"></div></a>
                                <!-- <a href="http://www.onsitedetailing.net/full-auto-detail-service/" title="Cars $149 &#8211; $159 Truck/SUV $179 &#8211; $199 The best" rel="bookmark"><img src="http://www.onsitedetailing.net/<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/themes/onsitedetailing/images/cssimgs/icondefault.png" class="img-thumbnail pull-left"></a> -->

                                    <p>Cars $149 &#8211; $159 Truck/SUV $179 &#8211; $199 The best of both an interior and exterior detail all wrapped</p>
                                    <div class="clearfix"></div>
                                    <a href="<?php echo base_url()?>mobile-detail/full-auto-detailing-service" title="Cars $149 &#8211; $159 Truck/SUV $179 &#8211; $199 The best" rel="bookmark"><button class="btn btn-mini btn-primary btn-block" type="button">Read more...</button></a>
                                </div>
                            </div>
                        </div><!--End row-->
                        <!--Start row--><div class="row" id="latest">
                            <div class="col-md-6">
                                <div class="home-icon">
                                    <a href="<?php echo base_url()?>mobile-detail/exterior-auto-detailing-service" title="Cars $99 &#8211; $129 Truck/SUV $149 &#8211; $179 Make your" rel="bookmark">        <h3>Exterior Auto Detailing Service</h3>
                                    </a>
                                    <a href="<?php echo base_url()?>mobile-detail/exterior-auto-detailing-service" title="Cars $99 &#8211; $129 Truck/SUV $149 &#8211; $179 Make your" rel="bookmark"><div class="latestimg pull-left" style="background-image: url(<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/themes/onsitedetailing/images/cssimgs/icondefault.png); width: 90px; height: 90px;"></div></a>
                                <!-- <a href="http://www.onsitedetailing.net/exterior-auto-detailing/" title="Cars $99 &#8211; $129 Truck/SUV $149 &#8211; $179 Make your" rel="bookmark"><img src="http://www.onsitedetailing.net/<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/themes/onsitedetailing/images/cssimgs/icondefault.png" class="img-thumbnail pull-left"></a> -->

                                    <p>Cars $99 &#8211; $129 Truck/SUV $149 &#8211; $179 Make your vehicle’s paint shine like it did in the showroom!</p>
                                    <div class="clearfix"></div>
                                    <a href="<?php echo base_url()?>mobile-detail/exterior-auto-detailing-service" title="Cars $99 &#8211; $129 Truck/SUV $149 &#8211; $179 Make your" rel="bookmark"><button class="btn btn-mini btn-primary btn-block" type="button">Read more...</button></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="home-icon">
                                    <a href="<?php echo base_url()?>mobile-detail/interior-auto-detailing-service" title="Cars $99 &#8211; $129 Truck/SUV $149 &#8211; $179 This service" rel="bookmark">        <h3>Interior Auto Detailing Service</h3>
                                    </a>
                                    <a href="<?php echo base_url()?>mobile-detail/interior-auto-detailing-service" title="Cars $99 &#8211; $129 Truck/SUV $149 &#8211; $179 This service" rel="bookmark"><div class="latestimg pull-left" style="background-image: url(<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/themes/onsitedetailing/images/cssimgs/icondefault.png); width: 90px; height: 90px;"></div></a>
                                <!-- <a href="http://www.onsitedetailing.net/interior-auto-detailing/" title="Cars $99 &#8211; $129 Truck/SUV $149 &#8211; $179 This service" rel="bookmark"><img src="http://www.onsitedetailing.net/<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/themes/onsitedetailing/images/cssimgs/icondefault.png" class="img-thumbnail pull-left"></a> -->

                                    <p>Cars $99 &#8211; $129 Truck/SUV $149 &#8211; $179 This service will transform your vehicle’s interior and feel great! Stop</p>
                                    <div class="clearfix"></div>
                                    <a href="<?php echo base_url()?>mobile-detail/interior-auto-detailing-service" title="Cars $99 &#8211; $129 Truck/SUV $149 &#8211; $179 This service" rel="bookmark"><button class="btn btn-mini btn-primary btn-block" type="button">Read more...</button></a>
                                </div>
                            </div>
                        </div><!--End row-->
                        <!--Start row--><div class="row" id="latest">
                            <div class="col-md-6">
                                <div class="home-icon">
                                    <a href="<?php echo base_url()?>mobile-detail/freshenup-auto-detailing-service" title="Cars $49 &#8211; $69 Truck/SUV $79 &#8211; $99 A maintenance" rel="bookmark">        <h3>Freshen Up Auto Detail Service</h3>
                                    </a>
                                    <a href="<?php echo base_url()?>mobile-detail/freshenup-auto-detailing-service" title="Cars $49 &#8211; $69 Truck/SUV $79 &#8211; $99 A maintenance" rel="bookmark"><div class="latestimg pull-left" style="background-image: url(<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/2015/06/Cleaning_Headlights.jpg); width: 90px; height: 90px;"></div></a>
                                <!-- <a href="http://www.onsitedetailing.net/freshen-up-auto-detail-service/" title="Cars $49 &#8211; $69 Truck/SUV $79 &#8211; $99 A maintenance" rel="bookmark"><img src="http://www.onsitedetailing.net/<?php echo base_url()?>media/landing-pages/mobile-detail/wp-content/uploads/2015/06/Cleaning_Headlights.jpg" class="img-thumbnail pull-left"></a> -->

                                    <p>Cars $49 &#8211; $69 Truck/SUV $79 &#8211; $99 A maintenance service, perfect for in-between details, to keep your vehicle</p>
                                    <div class="clearfix"></div>
                                    <a href="<?php echo base_url()?>mobile-detail/freshenup-auto-detailing-service" title="Cars $49 &#8211; $69 Truck/SUV $79 &#8211; $99 A maintenance" rel="bookmark"><button class="btn btn-mini btn-primary btn-block" type="button">Read more...</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Main Content-->

                    <!-- <div class="col-md-3">
                            <div class="widget-area">
                                            </div>
                    </div> -->
                </div>	
            </div><!--end page_body container-->
            <!-- <div class="container footer visible-lg">
                    <div class="row footer-bg">
                            <div class="col-md-12 footer-right">
                            </div>
                    </div>
            </div> -->

          <?php $this->load->view('partials/l_footer');?>