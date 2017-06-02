<?php $this->load->view('partials/l_header') ?>
 <div class="site-inner">
                <div class="wrap">
                    <div class="content-sidebar-wrap">
                        <main class="content">
                            <article class="post-2573 page type-page status-publish entry" itemscope itemtype="http://schema.org/CreativeWork">
                                <header class="entry-header"><h1 class="entry-title" itemprop="headline">Floor Maintenance</h1> 
                                </header>
<div class="entry-content" itemprop="text">  <style>
                                        .slider_text {
            text-align: center;
        }
        *{
            text-decoration: none;
        }
        .the_page
        {
            padding: 0;
        }
        body
        {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            margin: 0;
        }
        .slider_info:hover
        {
            opacity: 1;
            animation: ease-in-out;
        }
        .slider_info
        {
            position: absolute;
            opacity: .8;
            top: 60px;
            left: 0;
            right: 0;
            animation: 10s fading;
        }
        .poster_title
        {
            display: none;
        }
        .banner
        {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
        }
        .slider_window
        {
            max-width: 1140px;
            margin: 0 auto;
            margin-bottom: 20px;
            overflow: hidden;
            position: relative;
        }
        @keyframes fading {
            0% {
                opacity: 1;
            }
            100% {
                opacity: .8;
            }
        }
        @keyframes slidy {
            0% {
                transform: translateX(0px)
            }
            8% {
                transform: translateX(0px)
            }
            11% {
                transform: translateX(-10%)
            }
            19% {
                transform: translateX(-10%)
            }
            22% {
                transform: translateX(-20%)
            }
            31% {
                transform: translateX(-20%)
            }
            33% {
                transform: translateX(-30%)
            }
            42% {
                transform: translateX(-30%)
            }
            44% {
                transform: translateX(-40%)
            }
            53% {
                transform: translateX(-40%)
            }
            56% {
                transform: translateX(-50%)
            }
            64% {
                transform: translateX(-50%)
            }
            67% {
                transform: translateX(-60%)
            }
            75% {
                transform: translateX(-60%)
            }
            78% {
                transform: translateX(-70%)
            }
            86% {
                transform: translateX(-70%)
            }
            89% {
                transform: translateX(-80%)
            }
            97% {
                transform: translateX(-80%)
            }
            100% {
                transform: translateX(-90%)
            }
        }

        li.slide {
            display: inline-block;
        }

        #slider_container {
            max-height: 450px;
            margin: 0 auto;
            position: relative;
            z-index: 0;
        }

        #slider {
            width: 1000%;
            position: relative;
            transition: all 500ms ease-in-out;
            animation: 20s slidy infinite;
            animation-delay: 5s;
            z-index: -1;
            margin: 0;
        }

        .poster_photo {
            width: 100%;
        }

        img.slide_img {
            position: absolute;
            bottom: 0px;
            left: 0;
            display: initial;
        }

        li.slide {
            //box-sizing:border-box;
            //border: 10px solid #16BBF0;
            width: 10%;
            height: 400px;
            z-index: -1;
            display: inline-block;
        }

        #slider div {
            position: absolute;
            width: 100%;
        }

        .tab {
            background-color: #333333;

            cursor: pointer; 

            float: left;
            margin-top: 390px;
            width: 12.5%;
            transition: all .2s linear;
            height: 35px;
            padding-top: 5px;
            border-bottom: 1px solid #d5d5d5;
            text-align: center;
            color: white;
        }

        img.tab_icon {
            width: 16%;
            display: inline-block;
        }

        h3.tab_label {
            font-family: 'Oswald', Arial, sans-serif;
            color: white;
            text-align: center;
            font-size: 14px;
            font-weight: 300;
            line-height: 1.625;
            margin: 0px;
            display: inline-block;
            vertical-align: top;
            margin-left: 7px;
        }

        #slider li:nth-child(1) {
            position: absolute;
            left: 0%;
        }

        #slider li:nth-child(2) {
            position: absolute;
            left: 10%;
        }

        #slider li:nth-child(3) {
            position: absolute;
            left: 20%;
        }

        #slider li:nth-child(4) {
            position: absolute;
            left: 30%;
        }

        #slider li:nth-child(5) {
            position: absolute;
            left: 40%;
        }

        #slider li:nth-child(6) {
            position: absolute;
            left: 50%;
        }

        #slider li:nth-child(7) {
            position: absolute;
            left: 60%;
        }

        #slider li:nth-child(8) {
            position: absolute;
            left: 70%;
        }

        #slider li:nth-child(9) {
            position: absolute;
            left: 80%;
        }

        #slider li:nth-child(10) {
            position: absolute;
            left: 90%;
        }

        #slider_container div:nth-child(1):hover ~ #slider {
            animation: paused;
            transform: translateX(-10%);
        }

        #slider_container div:nth-child(1):hover {
            background-color: #16BBF0;
            height: 60px;
            z-index: 1;
            margin-top: 365px;
        }

        #slider_container div:nth-child(2):hover {
            background-color: #16BBF0;
            height: 60px;
            z-index: 1;
            margin-top: 365px;
        }

        #slider_container div:nth-child(2):hover ~ #slider {
            animation: paused;
            transform: translateX(-20%);
        }

        #slider_container div:nth-child(3):hover {
            background-color: #16BBF0;
            height: 60px;
            z-index: 1;
            margin-top: 365px;
        }

        #slider_container div:nth-child(3):hover ~ #slider {
            animation: paused;
            transform: translateX(-30%);
        }

        #slider_container div:nth-child(4):hover {
            background-color: #16BBF0;
            height: 60px;
            z-index: 1;
            margin-top: 365px;
        }

        #slider_container div:nth-child(4):hover ~ #slider {
            animation: paused;
            transform: translateX(-40%);
        }

        #slider_container div:nth-child(5):hover {
            background-color: #16BBF0;
            height: 60px;
            z-index: 1;
            margin-top: 365px;
        }

        #slider_container div:nth-child(5):hover ~ #slider {
            animation: paused;
            transform: translateX(-50%);
        }

        #slider_container div:nth-child(6):hover {
            background-color: #16BBF0;
            height: 60px;
            z-index: 1;
            margin-top: 365px;
        }

        #slider_container div:nth-child(6):hover ~ #slider {
            animation: paused;
            transform: translateX(-60%);
        }

        #slider_container div:nth-child(7):hover {
            background-color: #16BBF0;
            height: 60px;
            z-index: 1;
            margin-top: 365px;
        }

        #slider_container div:nth-child(7):hover ~ #slider {
            animation: paused;
            transform: translateX(-70%);
        }

        #slider_container div:nth-child(8):hover {
            background-color: #16BBF0;
            height: 60px;
            z-index: 1;
            margin-top: 365px;
        }

        #slider_container div:nth-child(8):hover ~ #slider {
            animation: paused;
            transform: translateX(-80%);
        }

        h4.banner_home_button_link {
            color: white;
            margin: 0;
            line-height: 38px;
            vertical-align: middle;
            font-family: 'Titillium Web', sans-serif;
            font-size: 22px;
            background-color: #00AFF0;
            transition: background-color 0.3s ease;
            margin: 0 auto;
            width: 273px;
            height: 38px;
            display: block;
            text-align: center;
        }
        .title {
            margin: 0;
        }
        .slider_text
        {
            padding: 40px 0px 30px 20px;
            color: white;
            text-transform: uppercase;
            text-shadow: 1px 1px 7px #6B6B6B;
            font-family: 'Titillium Web', sans-serif;
            font-size: 50px;
        }
        .secondline:hover {
            opacity: 1;
            animation: ease-in-out;
        }
        .secondline {
            text-align: left;
            position: absolute;
            top: 110px;
            display: none;
            animation: 10s fading;
            opacity: .8;
        }
        .subtext
        {
            font-size: 22px;
        }
        .poster_photo
        {
            display: none;
        }
        /* vvvvvvvvvvvvvvvvvvvvvv MEDIA QUERY vvvvvvvvvvvvvvvvvvvvvv */
        @media screen and (max-width: 1050px)
        {
            h3.tab_label {
                font-size: 12px;
            }
        }
        /* vvvvvvvvvvvvvvvvvvvvvv MEDIA QUERY vvvvvvvvvvvvvvvvvvvvvv */
        @media screen and (max-width: 950px)
        {
            .t1
            {
                display: none;
            }
            .tab
            {
                width: 14.285%;
            }
            h3.tab_label {
                font-size: 13px;
            }
        }
        /* vvvvvvvvvvvvvvvvvvvvvv MEDIA QUERY vvvvvvvvvvvvvvvvvvvvvv */
        @media screen and (max-width: 905px)
        {
            h3.tab_label {
                font-size: 12px;
            }
        }
        /* vvvvvvvvvvvvvvvvvvvvvv MEDIA QUERIES FOR SMALLER WINDOWSvvvvvvvvvvvvvvvvvvvvvv */
        @media screen and (max-width: 890px)
        {
            h1.slider_text
            {
                font-size: 40px;
            }
            h1.secondline {
                top: 100px;
            }
        }
        /* vvvvvvvvvvvvvvvvvvvvvv MEDIA QUERY vvvvvvvvvvvvvvvvvvvvvv */
        @media screen and (max-width: 875px)
        {

        }
        /* vvvvvvvvvvvvvvvvvvvvvv MEDIA QUERY vvvvvvvvvvvvvvvvvvvvvv */
        @media screen and (max-width: 820px)
        {
            .t2
            {
                display: none;
            }
            h3.tab_label {
                font-size: 12px;
            }
            .tab
            {
                width: 16.6666%;
            }
        }
        /* vvvvvvvvvvvvvvvvvvvvvv MEDIA QUERIES FOR PHONES vvvvvvvvvvvvvvvvvvvvvv */
        @media (max-width: 765px) {
            .the_page
            {
                padding: 50px 0;
            }
            .poster_title
            {
                display: initial;
            }
            .slider_window
            {
                display: none;
            }
            .poster_photo
            {
                display: block;
            }
            .poster_photo
            {
                display: ;
            }
            .poster_photo {
                position: relative;
            }
            .slider_text
            {
                position: absolute;
                left: 0;
                font-size: 20px;
                text-align: center;
            }
        }
        .slider_text
        {
            width: 90%;
            padding: 2% 0 0 5%;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
            margin: 5% 0 0 5%;
            padding: 0;
        }
        .subtext {
            font-size: 22px;
        }
        .slider_home_button
        {
            display: none;
        }
                                    </style>
                                    <div class="poster_photo"><img src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/09/Open-Office-100.jpg" alt="big open office space"><div class="poster_title slider_text">Clean your air in circulation!<div class="subtext"></div></div></div>
                                    <div class="slider_window">
        <section id="slider_container">
           <a href="<?php echo base_url()?>building-services/office-cleaning-services">
                                        <div class="tab t1"><i class="material-icons">headset_mic</i>
                                            <h3 class="tab_label">Office</h3></div>
                                    </a>
                                    <a href="<?php echo base_url()?>building-services/healthcare-building">
                                        <div class="tab t2"><i class="material-icons">local_pharmacy</i>
                                            <h3 class="tab_label">Healthcare</h3></div>
                                    </a>
                                    <a href="<?php echo base_url()?>building-services/educational-building">
                                        <div class="tab t3"><i class="material-icons">school</i>
                                            <h3 class="tab_label">Education</h3></div>
                                    </a>
                                    <a href="<?php echo base_url()?>building-services/industrial-building">
                                        <div class="tab t4"><i class="material-icons">location_city</i>
                                            <h3 class="tab_label">Industrial</h3></div>
                                    </a>
                                    <a href="<?php echo base_url()?>building-services/financial-building">
                                        <div class="tab t5"><i class="material-icons">attach_money</i>
                                            <h3 class="tab_label">Financial</h3></div>
                                    </a>
                                    <a href="<?php echo base_url()?>building-services/religious-building">
                                        <div class="tab t6"><i class="material-icons">account_balance</i>
                                            <h3 class="tab_label">Religious</h3></div>
                                    </a>
                                    <a href="<?php echo base_url()?>building-services/commercial-building">
                                        <div class="tab t7"><i class="material-icons">business</i>
                                            <h3 class="tab_label">Commercial</h3></div>
                                    </a>
                                    <a href="<?php echo base_url()?>building-services/retail-building">
                                        <div class="tab t8"><i class="material-icons">shopping_cart</i>
                                            <h3 class="tab_label">Retail</h3></div>
                                    </a>
            <ul id="slider">
                <li class="slide">
                    <img class="slide_img" src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/09/oval-office-100.jpg" alt="">
                    <h1 class="secondline slider_text"></h1>
                </li>
                <li class="slide">
                    <img class="slide_img" src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/09/Open-Office-100.jpg" alt="big open office space">
                    <h1 class="secondline slider_text">in the office</h1>
                </li>
                <li class="slide">
                    <img class="slide_img" src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/09/healthcare-office-100.jpg" alt="hospital office desk with stethoscope">
                    <h1 class="secondline slider_text">in healthcare</h1>
                </li>
                <li class="slide">
                    <img class="slide_img" src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/08/School-Hallway-Clean-100.jpg" alt="colorful school hallway">
                    <h1 class="secondline slider_text">in educational buildings</h1>
                </li>
                <li class="slide">
                    <img class="slide_img" src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/09/gray-warehouse-100.jpg" alt="industrial warehouse with windows">
                    <h1 class="secondline slider_text">in industrial buildings</h1>
                </li>
                <li class="slide">
                    <img class="slide_img" src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/08/office-100.jpg" alt="financial bank lobby">
                    <h1 class="secondline slider_text">in financial buildings</h1>
                </li>
                <li class="slide">
                    <img class="slide_img" src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/08/Religious-100.jpg" alt="religious auditorium podium">
                    <h1 class="secondline slider_text">in religious buildings</h1>
                </li>
                <li class="slide">
                    <img class="slide_img" src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/08/Commercial-100.jpg" alt="commercial building">
                    <h1 class="secondline slider_text">in commercial buildings</h1>
                </li>
                <li class="slide">
                    <img class="slide_img" src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/08/retail-shops-100.jpg" alt="retail shops">
                    <h1 class="secondline slider_text">in retail buildings</h1>
                </li>
                <li class="slide">
                    <img class="slide_img" src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/09/oval-office-100.jpg" alt="">
                    <h1 class="secondline slider_text"></h1>
                </li>
            </ul>
        </section>
        <div class="slider_info">
            <h1 class="title slider_text">From post-construction cleanup to move-out services, we do it all<br><div class="subtext"></div></h1>
            <a href="../../index.html" onclick="__gaTracker('send', 'event', 'outbound-article', '../../index.html', '\n            knightjanitorial.com\n        ');" class="slider_home_button"  target="_blank">
                <h4 class="banner_home_button_link" style="padding:0 !important">RazorClean INc.</h4>
            </a>
        </div>
    </div>
                                    <div class="thirty">
                                        <div class="read_more"><style>
                                                .blue_arrow_flipped
                                                {
                                                    position: absolute;
                                                    left: -40px;
                                                    bottom: -25px;
                                                    transform: rotate(15deg);
                                                }
                                                .form_container
                                                {
                                                    padding: 0px;
                                                    font-size: 0;
                                                    box-shadow: 0 2px 8px #d5d5d5;
                                                    border: 2px solid #00AFF0;
                                                    position: relative;
                                                }
                                                .form_cta
                                                {
                                                    text-align: center;
                                                    padding-bottom: 10px;
                                                    background-color: #00aff0;
                                                }
                                                .privacy_policy
                                                {
                                                    font-family: 'Titillium Web';
                                                    font-size: 12px;   
                                                }
                                                .arrow-down {
                                                    width: 0; 
                                                    height: 0; 
                                                    border-left: 20px solid transparent;
                                                    border-right: 20px solid transparent;
                                                    border-top: 20px solid #00aff0;
                                                    margin: 0 auto;
                                                    display: none;
                                                }
                                                img.form_arrow
                                                {
                                                    position: absolute;
                                                    left: -35px;
                                                    top: -2px;
                                                    width: 35px;
                                                    background-color: #00AFF0;
                                                    display:none;
                                                }
                                                form
                                                {
                                                    font-size: 16px;
                                                    padding-bottom: 20px;
                                                }
                                                .ss-form-entry
                                                {
                                                    padding-left: 20px;
                                                    padding-right: 20px;
                                                }
                                                .form_call_header
                                                {
                                                    display: inline-block;
                                                    background-color: #F1F1F1;
                                                    border-bottom: 1px solid #d5d5d5;
                                                    position: relative;
                                                }
                                                .form_title
                                                {
                                                    font-family: 'Titillium Web';
                                                    text-transform: uppercase;
                                                    margin: 0;
                                                    text-align: center;
                                                    font-size: 22px;
                                                    color: white;
                                                    background-color: #00aff0;
                                                    width: 100%;
                                                    padding: 0 20px;
                                                    line-height: 20px;
                                                    padding-top: 10px;
                                                }
                                                .form_title_subtext
                                                {
                                                    font-size: 12px;
                                                    margin-top: 5px;
                                                    padding-top: 0;
                                                }
                                                .required-message
                                                {
                                                    display: none;
                                                }
                                                .form_text
                                                {
                                                    text-align: center;
                                                    background-color: #F1F1F1;
                                                    padding: 0 20px 5px 20px;
                                                    color: #333333;
                                                    font-family: 'Titillium Web';
                                                    /*        text-transform: uppercase;*/
                                                    margin: 0;
                                                    text-align: center;
                                                    font-size: 16px;
                                                }
                                                .form_wrapper
                                                {
                                                    width: 35%;
                                                    display: inline-block;
                                                    padding-top: 20px;
                                                    padding-right: 20px;
                                                    padding-left: 20px;
                                                }
                                                .bait {
                                                    position: absolute;
                                                    bottom: 3000px;
                                                }
                                                tbody.gtbody{
                                                    border-bottom: 0px;
                                                }
                                                tbody {
                                                    border-bottom: 0px;
                                                }
                                                td.ss-form-entry{
                                                    border-top: 0px;
                                                }
                                                input, select, textarea
                                                {
                                                    background-color: #fff;
                                                    border: 1px solid #d5d5d5;
                                                    border-radius: 3px;
                                                    box-shadow: inset 1px 1px 2px rgba(0, 0, 0, 0.06);
                                                    color: #333333;
                                                    font-size: 16px;
                                                    font-weight: 400;
                                                    padding: 0 5px;
                                                    /*
                                                      width: 100%;
                                                      background-color : white;
                                                    */
                                                }
                                                textarea
                                                {
                                                    height: 200px;
                                                }
                                                .ss-q-title
                                                {
                                                    color: #333333;
                                                }
                                                .ss-form-question
                                                {
                                                    padding-top: 5px;
                                                    font-family: 'Titillium Web';
                                                    /*        text-transform: uppercase;*/
                                                }
                                                button, input[type="button"], input[type="reset"], .button, .home-top .more-link
                                                {
                                                    background-color: #00AFF0;
                                                    border: none;
                                                    border-radius: 0;
                                                    color: #fff;
                                                    cursor: pointer;
                                                    font-size: 16px;
                                                    font-weight: 400;
                                                    padding: 16px 24px;
                                                    width: auto;
                                                    transition: background-color 0.3s ease;
                                                }
                                                input[type="submit"]
                                                {
                                                    font-size: 20px;
                                                    text-decoration: none;
                                                    font-weight: 300;
                                                    font-weight: bold;
                                                    margin: 0;
                                                    color: white;
                                                    border: none;
                                                    border-radius: 0;
                                                    cursor: pointer;
                                                    padding: 16px 24px;
                                                    transition: background-color 0.3s ease;
                                                    margin: 10px 20px 0 20px;
                                                }
                                                input:hover[type="submit"]
                                                {
                                                    background-color: white;
                                                    color: #00AFF0;
                                                }
                                                ::-webkit-input-placeholder {
                                                    color: #646464;
                                                    opacity: 0.35;
                                                }

                                                :-moz-placeholder { /* Firefox 18- */
                                                    color: #646464;
                                                    opacity: 0.35;
                                                }

                                                ::-moz-placeholder {  /* Firefox 19+ */
                                                    color: #646464;
                                                    opacity: 0.35;
                                                }

                                                :-ms-input-placeholder {
                                                    color: #646464;
                                                    opacity: 0.35;
                                                }
                                                .mobile_form_cta
                                                {
                                                    display: none;
                                                    position: relative;
                                                    color: #00aff0;
                                                    font-weight: bold;
                                                    text-align: center;
                                                }
                                                /* vvvvvvvvvvvvvvvvvvvvvv MEDIA QUERIES FOR LARGER THAN PHONES vvvvvvvvvvvvvvvvvvvvvv */
                                                @media (min-width: 765px) {
                                                    .mobile
                                                    {
                                                        display: none;
                                                    }
                                                }
                                                /* vvvvvvvvvvvvvvvvvvvvvv MEDIA QUERIES FOR PHONES vvvvvvvvvvvvvvvvvvvvvv */
                                                @media (max-width: 765px) {
                                                    .form_call_header
                                                    {
                                                        display: none;
                                                    }
                                                    input[type="submit"] {
                                                        margin: 15px auto;
                                                    }
                                                    p.form_welcome
                                                    {
                                                        display: initial;
                                                        font-family: 'Open Sans', sans-serif;
                                                        font-weight: initial;
                                                        font-size: 23px;
                                                    }
                                                    .form_container
                                                    {
                                                        border: none;
                                                        box-shadow: none;
                                                        margin: 0;
                                                    }
                                                    .form_wrapper
                                                    {
                                                        width: 100%;
                                                        padding: 0px;
                                                    }
                                                    input.jfk-button
                                                    {
                                                        display: block;
                                                    }
                                                    .thirty
                                                    {
                                                        padding: 0 20px;
                                                    }
                                                    .ss-form-question {
                                                        padding-top: 0px;
                                                    }
                                                    br
                                                    {
                                                        display: none;
                                                    }
                                                    .mobile_form_cta
                                                    {
                                                        display: inline-block;
                                                        width: 100%;
                                                    }
                                                    .mobile_form_cta_text
                                                    {
                                                        font-family: 'Titillium Web', sans-serif;
                                                        font-size: 23px;
                                                    }
                                                    img.blue_arrow
                                                    {
                                                        position: absolute;
                                                        width: 75px;
                                                        top: 10px;
                                                        z-index: 1;
                                                        display: initial;
                                                    }
                                                    .blue_arrow_flipped
                                                    {
                                                        display: none;
                                                    }
                                                    .nMobile
                                                    {
                                                        display: none; 
                                                    }
                                                }
                                            </style>
                                            <div class="mobile_form_cta">
                                                <p class="mobile_form_cta_text">GET A FREE QUOTE!<img class="blue_arrow" src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/07/Arrow.png"></p>
                                            </div>
                                            <div class="form_container module">
                                                <img class="form_arrow" src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/08/ic_arrow_forward_white_3x.png">
                                                <div class="form_call_header">
                                                    <img class="blue_arrow_flipped" src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/09/Arrow-75-flipped.png">
                                                    <div class="form_cta" style="text-align:center;">
                                                        <div class="form_title">Let the experts handle it!</div>
                                                        <div class="form_title form_title_subtext">RAZORCLEAN BUILDING SERVICES HAS OVER A DECADE IN EXPERIENCE!</div>
                                                    </div>
                                                    <div class="arrow-down"></div>
                                                    <p class="form_text">Tell us a little about yourself and we'll call you within one business day!</p>
                                                </div>

                                                <form action="" method="post" target="hidden_iframe" id='contactform1'>
                <div id='rspstatus2'></div>
                <ol role="list" class="ss-question-list" style="padding-left: 0">
                    <div class="field_container">

                        <div title="name" class="ss-form-question errorbox-good" role="listitem">
                            <div dir="ltr" class="ss-item ss-item-required ss-text">
                                <div class="ss-form-entry">
                                    <label class="ss-q-item-label" for="entry_1397236735">
                                        <div class="ss-q-title">Name
                                            <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                                            <span class="ss-required-asterisk" aria-hidden="true">*</span>
                                        </div>
                                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                                    </label>
                                    <input type="text" placeholder="first and last" required name="contact_name" value="" class="ss-q-short" id="entry_1397236735" dir="auto" aria-label="Name  " aria-required="true" title="">
                                    <input type='hidden' name='service_category' value='Building Services'>
                                </div>
                            </div>
                        </div>

                        <div title="building type" class="ss-form-question errorbox-good" role="listitem" style="display:" title=market>
                            <div dir="ltr" class="ss-item  ss-select">
                                <div class="ss-form-entry">
                                    <label class="ss-q-item-label" for="entry_418491460">
                                        <div class="ss-q-title">What's your building type?</div>
                                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                                    </label>
                                    <select name="building_type" id="entry_418491460" aria-label="What&#39;s your building type?  ">
                                        <option value=""></option>
                                        <option value="Commercial" >Commercial</option> 
                                        <option value="Educational" >Educational</option> 
                                        <option value="Financial" >Financial</option> 
                                        <option value="Healthcare" >Healthcare</option> 
                                        <option value="Hospitality" >Hospitality</option> 
                                        <option value="Industrial" >Industrial</option> 
                                        <option value="Religious" >Religious</option> 
                                        <option value="Retail" >Retail</option> 
                                        <option value="Office" >Office</option> 
                                        <option value="Other" >Other</option>
                                        <option value="Floor Maintenance" style="display: none" >Floor Maintenance</option>
                                    </select>
                                    <div class="required-message"></div>
                                </div>
                            </div>
                        </div>
                        <div title="mobile email" class="ss-form-question errorbox-good nMobile" role="listitem">
                            <div dir="ltr" class="ss-item  ss-text">
                                <div class="ss-form-entry">
                                    <label class="ss-q-item-label" for="entry_1589209054">
                                        <div class="ss-q-title">E-Mail</div>
                                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                                    </label>
                                    <input type="email" required placeholder="your e-mail address" name="contact_email" value="" class="ss-q-short" id="entry_1589209054" dir="auto" aria-label="Email  " title="">

                                </div>
                            </div>
                        </div>
                        <div title="mobile phone no" class="ss-form-question errorbox-good nMobile" role="listitem">
                            <div dir="ltr" class="ss-item  ss-text">
                                <div class="ss-form-entry">
                                    <label class="ss-q-item-label" for="entry_1671946840">
                                        <div class="ss-q-title">Phone Number</div>
                                        <div class="ss-q-help ss-secondary-text" dir="ltr">
                                        </div>
                                    </label>
                                    <input type="text" required placeholder="##########" name="contact_phone" value="" class="ss-q-short" id="entry_1671946840" dir="auto" aria-label="Phone Number  " title="">

                                </div>
                            </div>
                        </div>
                        <div title="address" class="ss-form-question errorbox-good nMobile" role="listitem" title=address>
                            <div dir="ltr" class="ss-item  ss-text">
                                <div class="ss-form-entry">
                                    <label class="ss-q-item-label" for="entry_1923790664">
                                        <div class="ss-q-title">Address</div>
                                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                                    </label>
                                    <input type="text" placeholder="Full Address" name="address" value="" class="ss-q-short" id="entry_1923790664" dir="auto" aria-label="Address  " title="">

                                </div>
                            </div>
                        </div>


                        <div title="message" class="ss-form-question errorbox-good" role="listitem">
                            <div dir="ltr" class="ss-item  ss-paragraph-text">
                                <div class="ss-form-entry">
                                    <label class="ss-q-item-label" for="entry_132663279">
                                        <div class="ss-q-title">Message</div>
                                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                                    </label>
                                    <textarea name="contact_message" placeholder="Sq Ft, Supplies, Special Requests, etc." rows="3" cols="0" class="ss-q-long"></textarea>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="ss-item ss-navigate">
                        <table id="navigation-table" style="margin:0;">
                            <tbody>
                                <tr>
                                    <td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr" style="padding:0;">
                                        <input type="submit" name="submit" value="Free Quote!" id="ss-submit" class="jfk-button jfk-button-action ">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </ol>
            </form>
                                            </div>
                                            <p class="privacy_policy">We'll never share your email address and you can opt out at any time.</p>

                                            <script>
                                                setInterval(function(){document.getElementById('entry_1257225578').value = screen.width; }, 1500);</script></div>
                                    </div>
                                    <div class="sixty">
                                        <div class="info_block">
                                            <div class="fact-sheet">
                                                <h1 style="margin-bottom: 20px;">Why should you have your HVAC system cleaned?</h1>
                                                 <img class="ninty" src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/12/rbs_hvac1.gif" alt="" />
                                                <div>An HVAC system accumulates debris over time and has the potential to put large amounts of dust and particulates into circulation around your building.</div>
                                                <h3>Indoor Air Quality</h3>
                                                <p>Indoor air quality is one concern that building managers and building inhabitants have when they decide to investigate HVAC system. Through normal occupation in a building, we generate a great deal of contaminants and air pollutants, such as dander, dust, and chemicals. These contaminants are pulled into the HVAC system and re-circulated 5 to 7 times per day, on average. Over time, this re-circulation causes a build-up of contaminants in the ductwork. </p>
                                                <p>While a contaminated HVAC system doesn't necessarily mean unhealthy air, the situation may be contributing to larger health issues or harboring contaminants that could cause serious problems for people with respiratory health conditions, autoimmune disorders, or some environmental allergies.</p>
                                                
                                                <h3>Energy Savings</h3>
                                                <div>
                                                    <ul>
                                                        <li>According to the U.S. Department of Energy, 25 to 40 percent of the energy used for heating or cooling is wasted.</li>
                                                        <li>Contaminants in the heating and cooling system cause it to work harder and shorten the life of your system.</li>
                                                        <li>When an HVAC system is clean, it doesn't have to work as hard to maintain the temperature you desire.</li>
                                                    </ul>
                                                </div>
                                            </div>


                                            <!--        this will place a photo and description next to it      -->
                                            <!--
                                    <img class="fifty" src="http://www.knightjanitorial.com/wp-content/uploads/2016/01/iStock_000005853930_Large.jpg" alt=""/>
                                    <div class="forty">
                                    <ul>
                                    <li>Provide Emergency Cleaning (Fire, Flood, Etc)</li>
                                    </ul>
                                    </div>
                                            -->
                                            <div class="bullets">
                                                <h2>The Process</h2>
                                                <ul style="text-align: left;">
                                                    <li>Removal begins through agitation of contaminants achieved through hand brushing or contact vacuuming.</li>
                                                    <li>During cleaning, the entire HVAC system is placed under continuous negative pressure (with a vacuum) to prevent the spread of and extract the contaminants.</li>
                                                    <li>Continuous negative pressure allows very fine particles to be removed from the system as they become airborne, ensuring that these particles are not released into the living space when the system is turned on after cleaning.</li>
                                                    <li>This negative pressure also serves to extract the loosened contaminants, which are collected and removed from your home.</li>
                                                </ul>
                                            </div>
                                            <h3 class="subject">System Access</h3>
                                                                                    <p>HVAC system cleaning is not a complex process, but each job is unique.  Where possible, access to duct interiors should be made through existing openings such as supply diffusers, return grills, duct end caps, and existing service openings.  The technicians may need to cut access holes in the duct work in order to reach inside various cleaning tools.  Creation of these service openings and their subsequent closure, requires craftsmanship and professional skills.</p>
</p>
                                            <div class="bullets">
                                                <h2>The Antimicrobial Chemicals</h2>
                                                <ul style="text-align: left;">
                                                    <li>Antimicrobial chemicals include sanitizers, disinfectants, and deodorizers that can be applied to non-porous surfaces in HVAC systems to address microbial contamination and help control odors. </li> 
                                                    <li>Only chemicals registered with the United States Environmental Protection Agency (EPA) can be used.</li>
                                                    <li>These products should only be considered after mechanical surface cleaning has been performed and if the need for such treatment has been deemed necessary.</li>
                                                </ul>
                                            </div>
                                            <style>
                                                #read_more_toggle
                                                {
                                                    background-color: #00aff0;
                                                    color: white;
                                                    width: 150px;
                                                    margin: 0 auto 20px auto;
                                                    font-weight: bold;
                                                    text-align: center;
                                                    display: none;
                                                    cursor: pointer;
                                                    -webkit-touch-callout: none;
                                                    -webkit-user-select: none;
                                                    -khtml-user-select: none;
                                                    -moz-user-select: none;
                                                    -ms-user-select: none;
                                                    user-select: none;
                                                    position: absolute;
                                                    bottom: 0;
                                                    left: 0; 
                                                    right: 0;
                                                }
                                            </style>
                                            <div id="read_more_toggle" class="pop">Get A Quote!</div>
                                            <script>
                                                $("#read_more_toggle").appendTo(".poster_photo");
                                                $("#read_more_toggle").click(function(){
                                                $('html, body').animate({
                                                scrollTop: $(".read_more").offset().top
                                                }, 1000, function()
                                                {
                                                $(".read_more").animate({height: $(".read_more").get(0).scrollHeight}, 1000);
                                                });
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <style>
                                        /* vvvvvvvvvvvvvvvvvvvvvv MEDIA QUERIES FOR PHONES vvvvvvvvvvvvvvvvvvvvvv */
                                        /*
                                        @media (max-width: 765px) {
                                        .sixty{padding: 0 20px;background-color: white;}
                                        }
                                        */
                                    </style></div></article></main><aside class="sidebar sidebar-primary widget-area" role="complementary" aria-label="Primary Sidebar" itemscope itemtype="http://schema.org/WPSideBar"><section id="text-7" class="widget widget_text"><div class="widget-wrap">			<div class="textwidget"><a href="../../get-a-quote/index.html"><img src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/01/bigquote-btn.png"></a></div>
                                </div></section>
                            <section id="text-2" class="widget widget_text"><div class="widget-wrap"><h4 class="widget-title widgettitle">Association Involvement</h4>
                                    <div class="textwidget"><p style="padding-left:70px;"><a href="http://www.bbb.org/" target="_blank"><img src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/02/bbb-aplus-rating1.jpg" alt="Better Business Bureau" style="
                                                                                                                                             width: 125px;
                                                                                                                                             margin-left: -26px;
                                                                                                                                             "></a></p>

                                        <p style="
                                           padding-left:50px;
                                           width: 170px;"><img src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/uploads/2015/02/CPAA_logo.jpg" alt="CPAA Certified" /></a></p>
                                    </div>
                                </div></section>
                        </aside></div><aside class="sidebar sidebar-secondary widget-area" role="complementary" aria-label="Secondary Sidebar" itemscope itemtype="http://schema.org/WPSideBar"></aside></div></div>
            <?php $this->load->view('partials/l_footer') ?>