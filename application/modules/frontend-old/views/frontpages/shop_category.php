<!--Banner-Start-->
<header class="inner">
    <div class="header-content">
        <h1 class="innerHeader">SHOP</h1><hr align="left" class="primary">
        <p class="innerSubheader">This is an adipscing subheading!</p>
    </div>
</header>
<!--Banner-End-->
<!--ICon DesktopSlider Start-->
<div class="container featuredHeading">
    <div class="col-lg-8 col-lg-offset-2 text-center">
        <h2 class="section-heading .mob-center"><span> Lorem Ipsum</span> Dolor sit Amet </h2>
        <hr class="primary">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
    </div>
</div>
<section id="fpSlider">
    <div class="container fpslider">
        <div class="col-md-8">
            <div class="headerBar">
                <div class="btn-group">
                    <button type="button" class="btn btn-danger">Action</button>
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-danger">Action</button>
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
            </div><div class="clearfix"></div>
            <?php if(!empty($products)){ foreach($products as $product){?>
            <div class="col-md-4">
                <div class="slideImage"><img src="<?php echo base_url().'uploads/products/400x400/'.unserialize($product['product_image']);?>"><img class="pricingBanner" src="<?php echo frontend_asset_url() ?>img/Pricing_Banner.png">
                    <span class="pricingTag">$<?php echo $product['selling_price']?></span></div>
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
            <?php } } else { echo "<h3>No products found</h3>";}?>
            
            
            
            <div class="clearfix"></div>
            <ul class="pagination"><?php echo $pg_link;?></ul>
            
<!--            <div class="paginationwrap">
                <ul class="pagination">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">></a></li>
                </ul>
            </div>-->
        </div>

        <div class="col-md-4 tag-sidebar">
            <h3>Filter By Price</h3>
            <!-- <input
                    type="range"
                    min="10"                    // default 0
                    max="1000"                  // default 100
                    step="10"                   // default 1
                    value="300"                 // default min + (max-min)/2
                    data-orientation="vertical" // default horizontal
            > -->
            <input type="hidden" class="slider-input" value="23" />
            <div class="rangebtn"><a class="btn btn-default">Filter</a><span>Price : $270 - $1700</span></div>
            <hr class="primary">

            <h3>Products Tags</h3>

            <a class="btn btn-default">T-shirt</a>
            <a class="btn btn-default">slim</a>
            <a class="btn btn-default">black</a>
            <a class="btn btn-default">lorem</a>
            <a class="btn btn-default">ipsum</a>

            <br>		
            <hr class="primary mt20">
            <h3>Related Products</h3>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img src="http://placehold.it/65x65">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    <span>$39</span>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img src="http://placehold.it/65x65">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    <span>$39</span>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img src="http://placehold.it/65x65">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    <span>$39</span>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="customHr">
