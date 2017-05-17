<?php $this->load->view('partials/l_header') ?>
<style>
.blog_filter ul li{   padding: 8px 20px;
    /*border: 1px solid #AB2438;*/
    background: #fff;
    /*color: #AB2438;*/
}

.blog_filter .active {
	border: 1px solid #AB2438;
    color: #AB2438;
    background: #fff !important;
    color: #AB2438 !important;
}
</style>
<section class="container" role="document">


    <article class="post-1017 page type-page status-publish hentry" id="post-1017">
        <div class="entry-content">
            <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="video_div" style="position:relative;overflow:hidden;background: #1cce9e;">
                                <div class="video_wrap" style="height: auto; width: 100%; position: absolute; bottom: 0px; opacity: 1;">


                                </div>
                                <div style="position:absolute;position: absolute;height: 100%;width: 100%;top: 0;left: 0;background-image: url(http://54.209.190.106/Razorclean/media/frontend/img/Banner.png"></div><div class="video_content" style="padding:160px 0 40px 0;position: relative;">
                                    <div class="wpb_text_column wpb_content_element  vc_custom_1464454469800 show-for-medium-up">
                                        <div class="wpb_wrapper">
                                            <h4 style="text-align: center;"><span style="color:#ffffff;font-size:72px;text-transform:uppercase;"><span dir="auto">Blogs</span></span></h4>

                                        </div>
                                    </div>

                                    <div class="wpb_text_column wpb_content_element  vc_custom_1464454457904 show-for-small-only">
                                        <div class="wpb_wrapper">
                                            <h4 style="text-align: center;"><span style="color:#ffffff;font-size:32px;text-transform:uppercase;"><span dir="auto">Blogs</span></span></h4>

                                        </div>
                                    </div>
                                </div></div><div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
                        </div></div></div></div><div class="vc_row wpb_row vc_row-fluid confine"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">

                            <div id="posts_index" class="blog_vc">

                                <div class="blog_filter">
                                    <ul>
                                        <li class="active" data-filter="*" class="active"> All</li>
                                        <li data-filter=".Foundation" >Foundation</li>
                                        <li data-filter=".Painters">Painters</li>
                                        <li data-filter=".Lawn_Care">Lawn Care</li>
                                        <li data-filter=".Building_services">Building Services</li>
                                        <li data-filter=".Pest_control">Pest Control</li>
                                        <li data-filter=".Staffing">Staffing</li><br>
                                        <li data-filter=".Housekeepers">Housekeepers</li>
                                        <li data-filter=".Towing">Towing</li>
                                        <li data-filter=".Handyman">Handyman</li>
                                        <li data-filter=".Mobile_Detail">Mobile Detail</li>
                                        <li data-filter=".Moving_and_Transport">Moving and Transport</li>
                                        <li data-filter=".Pool_Cleaning">Pool Cleaning</li>
                                        <li data-filter=".Security">Security</li>
                                    </ul>
                                </div>



                                <div class="masonry_full col-3">

                                    <div class="posts_inner" style="position: relative; height: 674px; opacity: 1;">










                                        <?php foreach ($arr_blog_data as $bd) {
                                            
                                            ?>
                                            <div class="post_inner <?php echo str_replace(' ', '_', $bd['service_category']); ?>" style="position: absolute; left: 0px; top: 1050px;">

                                                <article id="post-10" class="post-10 post type-post status-publish format-standard has-post-thumbnail hentry category-thoughts tag-common tag-deep tag-thoughts tag-wise">
                                                    <div class="thumbnail_wrap">
                                                        <a href="<?php echo base_url()."razor/blog-details/".$bd['slug']?>">
                                                            <img width="1024" height="683" src="<?php echo base_url()."uploads/blogs/".$bd['blog_image']?>" class="attachment-large size-large wp-post-image" alt="photo-1439737567250-e9ea931e97a4s" srcset="<?php echo base_url()."uploads/blogs/".$bd['blog_image']?> 1024w, <?php echo base_url()."uploads/blogs/".$bd['blog_image']?> 300w, <?php echo base_url()."uploads/blogs/".$bd['blog_image']?> 768w" sizes="(max-width: 1024px) 100vw, 1024px">							<div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <header>
                                                        <h2><a href="<?php echo base_url()."razor/blog-details/".$bd['slug']?>"><?php echo $bd['post_title']?></a></h2>
                                                    </header>
                                                    <time datetime="2016-04-25T13:52:57+00:00"><a href="http://quartz.themegasm.net/how-to-disappear-completely/"><?php echo date("d F Y",strtotime($bd['posted_on']))?></a></time>
                                                    <div class="entry-content">
                                                        <p>
                                                           <?php echo substr($bd['post_content'],0,100)?> [...]						<a href="<?php echo base_url()."razor/blog-details/".$bd['slug']?>"> Read More</a>
                                                        </p>
                                                    </div>
                                                   
                                                </article>	
                                            </div>
                                        <?php } ?>


                                    </div>


                                  
                                    <div class="pagination-centered"><ul class="pagination">
                                           <?php echo $pg_link ;?>
                                        </ul>
                                    </div><!--// end .pagination -->	


                                </div>


                            </div>
                        </div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                            <div class="tweets_slider" data-id="370217609347612673" data-number="6" data-retweets="1"></div></div></div></div></div>
        </div>
    </article>


</section>
<?php $this->load->view('partials/l_footer') ?>
<script>
    jQuery(document).ready(function () {
        jQuery('#seriverequestfrm').on('submit', function (e) {
            e.preventDefault();
            alert();
            jQuery('#request_reservice_btn').attr('disabled', true);
            jQuery('#request_reservice_btn').html('Please wait...');
            var url = "<?php echo base_url() ?>backend/Request_service/requestServiceForm"; // the script where you handle the form input.

            var formData = jQuery("#seriverequestfrm").serialize();
            jQuery.ajax({
                type: "POST",
                url: url,
                data: formData,
                dataType: 'json',
                success: function (data)
                {
                    //alert(data);
                    jQuery('#request_reservice_btn').attr('disabled', false);
                    jQuery('#request_reservice_btn').html('Submit');
                    if (data.status === '1') {
                        jQuery("#frmerror").html('<span style="color:green;font-weight: bold !important;">' + data.msg + '</span>');
                        jQuery('#seriverequestfrm')[0].reset();
                        return true;
                    } else {
                        jQuery("#frmerror").html('<span style="color:red;font-weight;bold!important">' + data.msg + '</span>');
                        return false;
                    }
                }
            });

        });

    });
    function selectCity(state_id) {
        if (state_id != "-1") {
            loadData('city', state_id);
        } else {
            $("#city_dropdown").html("<option value='-1'>Select city</option>");
        }
    }
    function loadData(loadType, loadId) {
        var dataString = 'loadType=' + loadType + '&loadId=' + loadId;
        jQuery("#" + loadType + "_loader").show();
        jQuery("#" + loadType + "_loader").fadeIn(400).html('Loading ' + loadType + '...');
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>frontend/location/loadData",
            data: dataString,
            cache: false,
            success: function (result) {
                jQuery("#" + loadType + "_loader").hide();
                jQuery("#" + loadType + "_dropdown").html("<option value='-1'>Select " + loadType + "</option>");
                jQuery("#" + loadType + "_dropdown").append(result);
            }
        });
    }
</script>