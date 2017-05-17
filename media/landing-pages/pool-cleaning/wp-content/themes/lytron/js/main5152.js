jQuery(document).ready(function($){

    //------------------------------------------------------
    //  Page with or without VC
    //------------------------------------------------------
    var vc = $('.page-content').find('.vc_row');
    if (vc.length == 0)
    {
        $('.page-content').addClass("page-novc-content");
        $('body').addClass('page-novc');
    }
    else {
        $('.page-content').addClass("page-vc-content");
        $('body').addClass('page-vc');
    }

});//end jQuery