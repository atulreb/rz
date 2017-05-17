<?php // echo "<pre>"; print_r($category_details);?>
<!--Banner-Start-->
<header class="inner">
    <div class="header-content">
        <h1 class="innerHeader">SHOP</h1><hr align="left" class="primary">
        <p class="innerSubheader">This is an adipscing subheading!</p>
    </div>
</header>
<!--Banner-End-->
<!--ICon DesktopSlider Start-->
<section id="shopGrid">
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2 class="section-heading .mob-center"><span> Lorem Ipsum</span> Dolor sit Amet </h2>
            <hr class="primary">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
        </div><div class="clearfix"></div>
        <div class="row no-gutter gridwrap">
            <div class="col-md-6 col-sm-6 itemGrid1"><img src="<?php echo base_url().'uploads/category/'.$category_details[0]['cat_image']?>"><a href="<?php echo base_url().'product/category/'. $category_details[0]['category_id'];?>" class="btn btn-default page-scroll"><?php echo $category_details[0]['category_name'];?></a></div>
            <div class="col-md-6 col-sm-6 gridwrap2">
                <div class="col-md-6 col-sm-6 gridwrap3">
                    <div class="col-md-12 col-sm-12 itemGrid3"><img src="<?php echo base_url().'uploads/category/'.$category_details[1]['cat_image']?>"><a href="<?php echo base_url().'product/category/'. $category_details[1]['category_id'];?>" class="btn btn-default page-scroll"><?php echo $category_details[1]['category_name'];?></a></div>
                    <div class="col-md-12 col-sm-12 itemGrid3"><img src="<?php echo base_url().'uploads/category/'.$category_details[2]['cat_image']?>"><a href="<?php echo base_url().'product/category/'. $category_details[2]['category_id'];?>" class="btn btn-default page-scroll"><?php echo $category_details[2]['category_name'];?></a></div>
                </div>
                <div class="col-md-6 col-sm-6 itemGrid2"><img src="<?php echo base_url().'uploads/category/'.$category_details[3]['cat_image']?>"><a href="<?php echo base_url().'product/category/'. $category_details[3]['category_id'];?>" class="btn btn-default page-scroll"><?php echo $category_details[3]['category_name'];?></a></div>
            </div>
        </div>
    </div>
</section>
<section id="headline" class="no-padding"><div class="container">Lorem Ipsum is simply dummy text of the printing and dummy text of typesetting industry.</div></section>
<div class="container featuredHeading">
    <div class="col-lg-8 col-lg-offset-2 text-center">
        <h2 class="section-heading .mob-center"><span> Lorem Ipsum</span> Dolor sit Amet </h2>
        <hr class="primary">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
    </div>
</div>
<section id="fpSlider">

    <div class="container fpslider">

        <div class="sShop slider">
           
            
            
          <?php foreach($products as $product){?> 
            <div class="fpslide">
                <div class="slideImage"><img src="<?php echo base_url().'uploads/products/400x400/'.unserialize($product['product_image']); ?>"><img class="pricingBanner" src="<?php echo frontend_asset_url() ?>img/Pricing_Banner.png"><span class="pricingTag">$<?php echo $product['selling_price'];?></span></div>
                <div class="slideDesc">
                    <span><strong><a href="<?php echo base_url().'products/'.$product['slug']?>"><?php echo $product['name']?></a></strong></span>
                    <p><?php echo $product['short_desc']?></p>
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
          <?php }?>
        </div>
    </div>
</section>
<hr class="customHr">
