TTP_Image_Altifier = function(){
  var $ = jQuery;
  var self = this;
  $(document).ready(function(){
    self.altifyImages();
  });
  $(window).on('load', function(){
    self.altifyImages();
  });
  this.altifyImages = function (){
    $('img').each(function(){
      var alt = $(this).attr('alt');
      if(alt != 'undefined'){
        alt = $.trim(alt);
      }
      if (typeof alt == 'undefined' || alt == ''){
        var imgSrc = $(this).attr('src');
        var posOfSlash = imgSrc.lastIndexOf('/') + 1;
        var posOfdot = imgSrc.lastIndexOf('.');
        if (posOfSlash >= posOfdot){
          posOfdot = posOfSlash + 10000;
        }
        var newAlt = imgSrc.slice(posOfSlash, posOfdot);
        $(this).attr('alt', newAlt);
      }
    });
  };
  this.countImages = function(){
    // console.log('image count:'+ $('img').length);
  }
  this.imageAlts = function(){
    $('img').each(function(){
      // console.log('image - src:'+ $(this).attr('src'));
      // console.log('image - alt:'+ $(this).attr('alt'));
    });
  }
}ttp_image_altifier = new TTP_Image_Altifier();