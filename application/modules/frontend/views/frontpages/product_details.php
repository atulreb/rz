<!--Banner-Start-->
<header class="inner">
    <div class="header-content">
        <h1 class="innerHeader">SHOP</h1><hr align="left" class="primary">
        <p class="innerSubheader">This is an adipscing subheading!</p>
    </div>
</header>
<!--Banner-End-->
<!--ICon DesktopSlider Start-->
<section id="productDetails">
    <div class="container">
        <div class="col-md-6">
            <div class="pdescslider">
                <ul class="pgwSlider">
                    <?php
                    foreach (unserialize($product_details[0]['thumbnails'])as $d) {
                        echo ' <li><img src="' . base_url() . 'uploads/products/thumbnails/' . $d['file_name'] . '" alt="" ></li>';
                    }
                    ?>

                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="pdescscontent">
                <h2><?php echo $product_details[0]['name'] ?></h2>
                <h2 class="productPrice">$<?php echo $product_details[0]['selling_price'] ?></h2>
                <input type="hidden" id='price' value='<?php echo $product_details[0]['selling_price'] ?>'>
                <input type="hidden" id='name' value='<?php echo $product_details[0]['name'] ?>'>
                <input type="hidden" id='product_id' value='<?php echo $product_details[0]['product_id'] ?>'>
                <p><?php echo $product_details[0]['short_desc'] ?></p>
                <div class="selectColor">
                    <?php
                    if (!empty($variant)) {
                        echo "<strong>Color :";
                        foreach ($variant as $val) {
                            if ($val['key'] == 'Color') {
                                echo '<span class="color1" style="background:' . $val['value'] . '"></span>';
                            }
                        }
                        echo "</strong>";
                    }
                    ?> 
                    <?php
                    if (!empty($variant)) {
                        echo "<strong>Size : <select id='size'><option value=''>Select Size</option>";
                        foreach ($variant as $val) {
                            if ($val['key'] == 'Size') {
                                echo '<option>' . $val['value'] . '</option>';
                            }
                        }
                        echo "</select> </strong>";
                    }
                    ?>
                </div>
                <div class="atc"><a href="javascript:;" id='add_to_cart' class="btn btn-default btn-lg">Add to cart</a><input type="number" name="qty" id='qty' value="1">Qty</div>
                <span id='msg'></span>

                <?php
                if ($product_details[0]['tags'] != '')
                    echo '<div class="ptags">Tags : ';
                $array = explode(',', $product_details[0]['tags']);
                foreach ($array as $t) {
                    ?>
                    <a class="btn btn-default"><?php echo $t; ?></a>
                <?php } echo '</div>'; ?>                    

                <div class="shareDetails">
                    Share : 
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>

<div id="exTab2" class="container">	
    <ul class="nav nav-tabs">
        <li class="active"><a href="#1" data-toggle="tab">Description</a></li>
        <li><a href="#2" data-toggle="tab">Reviews</a></li>
    </ul>
    <div class="tab-content ">
        <div class="tab-pane active" id="1">
            <p><?php echo $product_details[0]['long_desc'] ?></p>
        </div>
        <div class="tab-pane" id="2">
            <p>Notice the gap between the content and tab after applying a background color</p>
        </div>
    </div>
</div>
<div class="container featuredHeading">
    <div class="col-lg-8 col-lg-offset-2 text-center">
        <h2 class="section-heading .mob-center">Related<span> Products</span></h2>
        <hr class="primary">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
    </div></div>
<section id="fpSlider">

    <div class="container fpslider">

        <div class="sShop slider">
            <div class="fpslide">
                <div class="slideImage"><img src="<?php echo frontend_asset_url() ?>img/Image5.png"><img class="pricingBanner" src="<?php echo frontend_asset_url() ?>img/Pricing_Banner.png"><span class="pricingTag">$39</span></div>
                <div class="slideDesc">
                    <span><strong>Lorem Ipsum</strong></span>
                    <p>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum.</p>
                </div>
                <div class="slideRating">
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                </div>
            </div>
            <div class="fpslide">
                <div class="slideImage"><img src="<?php echo frontend_asset_url() ?>img/Image6.png"><img class="pricingBanner" src="<?php echo frontend_asset_url() ?>img/Pricing_Banner.png"><span class="pricingTag">$39</span></div>
                <div class="slideDesc">
                    <span><strong>Lorem Ipsum</strong></span>
                    <p>Lorem Ipsum is simply dummy text of the printing industry standard.</p>
                </div>
                <div class="slideRating">
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                </div>
            </div>
            <div class="fpslide">
                <div class="slideImage"><img src="<?php echo frontend_asset_url() ?>img/Image7.png"><img class="pricingBanner" src="<?php echo frontend_asset_url() ?>img/Pricing_Banner.png"><span class="pricingTag">$39</span></div>
                <div class="slideDesc">
                    <span><strong>Lorem Ipsum</strong></span>
                    <p>Lorem Ipsum has been the dummy text industry's standard.</p>
                </div>
                <div class="slideRating">
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                </div>
            </div>
            <div class="fpslide">
                <div class="slideImage"><img src="<?php echo frontend_asset_url() ?>img/Image5.png"><img class="pricingBanner" src="<?php echo frontend_asset_url() ?>img/Pricing_Banner.png"><span class="pricingTag">$39</span></div>
                <div class="slideDesc">
                    <span><strong>Lorem Ipsum</strong></span>
                    <p>Limply dummy text and typesetting Ipsum has been standard.</p>
                </div>
                <div class="slideRating">
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                </div>
            </div>
            <div class="fpslide">
                <div class="slideImage"><img src="<?php echo frontend_asset_url() ?>img/Image6.png"><img class="pricingBanner" src="<?php echo frontend_asset_url() ?>img/Pricing_Banner.png"><span class="pricingTag">$39</span></div>
                <div class="slideDesc">
                    <span><strong>Lorem Ipsum</strong></span>
                    <p>Printing and typesetting standard industry industry's standard.</p>
                </div>
                <div class="slideRating">
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="customHr">

