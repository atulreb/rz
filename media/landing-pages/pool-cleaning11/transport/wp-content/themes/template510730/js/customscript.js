/* For Responsive
 ========================================================*/
// (function ($) {
//     $('.top-menu a').on('click', function(e){
//     	e.preventDefault();
//         console.log("clicked");
//         $('div.top-menu').toggleClass('top-slide-menu');
//     });
// })(jQuery);

jQuery( document ).ready(function() {

    jQuery('.top-menu a').first().on('click', function(e){
    	e.preventDefault();
        jQuery('nav.top-menu').toggleClass('top-slide-menu');
    });

    

    // jQuery("a>span:contains('Contact Us')").on('click', function(e){
    //     jQuery('#enquiries_for').val('General Inquiries (default)');
    // });

    // jQuery("#Marco").on('click', function(e){
    // 	jQuery('#enquiries_for').val('Miami - Marco Belusic');
    // });

    // jQuery("#Frances").on('click', function(e){
    // 	jQuery('#enquiries_for').val('Charleston - Frances Lewis');
    // });

    // jQuery("#Rachel").on('click', function(e){
    // 	jQuery('#enquiries_for').val('Jacksonville - Rachel Denmark');
    // });

    // jQuery("#Crystal").on('click', function(e){
    // 	jQuery('#enquiries_for').val('Savannah - Crystal Ringnalda');
    // });

    // jQuery("#Michelle").on('click', function(e){
    // 	jQuery('#enquiries_for').val('Tampa - Michelle Stephenson');
    // });

    // jQuery('#tawktoLink').hide();
    


});