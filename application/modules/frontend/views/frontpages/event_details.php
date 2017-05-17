<header class="head-bottom-border-style">
    <div class="header-content">
        <div class="header-content-inner innerpage-heading text-left">
            <h2 id="homeHeading"><?php echo $event_details['event_name']?></h2>
            <hr>
            <p><?php echo substr($event_details['short_desc'],'0','50')?></p>
            <!--<a href="#about" class="btn btn-primary btn-xl page-scroll">Enter Site</a>-->

        </div>
    </div>
</header>
<!--Banner-End-->


<div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
    <div class="container">
        <div class="c-shop-product-details-2">
            <div class="row">
                <div class="col-md-7">
                    <div class="c-product-gallery">
                        <div class="c-product-gallery-content">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img style="width:100%" src="<?php echo base_url(); ?>uploads/events/<?php echo $event_details['event_image']?>">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="c-product-meta">
                        <!--div class="c-content-title-1">
                            <h3 class="c-font-uppercase c-font-bold">Lorem ipsum dolor</h3>
                            <div class="c-line-left"></div>
                        </div-->

                        <div class="clear"></div>
                        <div class="c-product-price" style="margin-bottom: 0px;">Start On - <?php echo date("d M Y",strtotime($event_details['start_date']))?></div>
                        <div class="c-product-price" style="margin-bottom: 0px;">End On - <?php echo date("d M Y",strtotime($event_details['end_date']))?></div>

                        <div class="c-product-add-cart c-margin-t-20">
                            <div class="row btn_Alert_Share">

                               
                                <div class="clear" style="margin: 17px;"></div>
                                
                                <div class="col-sm-12 col-xs-12">
                                    <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo base_url()."event/".$event_details['id']?>" class="btn btn-lg c-btn-green c-btn-square c-btn-border-2x btn-block">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i> Share On Facebook</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->
<div class="c-content-box c-size-md c-no-padding">
    <div class="c-shop-product-tab-1" role="tabpanel" style="padding-bottom:0px">
        <div class="container">
            <ul class="nav nav-justified" role="tablist">
                <li role="presentation" class="active">
                    <a class="c-font-uppercase tab1 c-font-bold" href="http://sassconsultants.rebelute.in/frontend/project/productPage#tab-1" role="tab" data-toggle="tab">Description</a>
                </li>
                <li role="presentation">
                    <a class="c-font-uppercase c-font-bold" href="http://sassconsultants.rebelute.in/frontend/project/productPage#tab-2" role="tab" data-toggle="tab">Additional Information</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="tab-1">
                <div class="c-product-desc c-center" style="padding-top: 22px;">
                    <div class="container">
                        
                        <?php echo $event_details['long_desc']?>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab-2">
                <div class="container">
                    <p class="c-center">
                    </p><p>Lorem ipsum dolor sit amet, dolor adipisicing dolor sit amet dolor sit amet elit. Nulla nemo ad sapiente officia amet ipsum dolor sit amet.</p>
                    <br>

                    <br> </div>
            </div>

        </div>
    </div>
</div>















<div class="hr_Line"><hr></div> 