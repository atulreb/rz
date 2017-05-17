jQuery(document).ready(function($){

      $(".phoneno").mask("000-000-0000",{'translation': {0: {pattern: /[0-9]/}}});
      // $( ".row.section.fp-section" ).wrapInner( "<div class='FullHeight'></div>");
     
    
});


//jQuery(document.body).on('click','.contact-page .contact-submit',function(e){
//     var name=jQuery('#name').val();
//     var email=jQuery('#email').val();
//     var phone=jQuery('#phone').val();
//     var message=jQuery('#message').val();
//     if(name==''){
//      alert('Name can\'t be empty');
//      jQuery( "#name" ).focus();
//      return false;
//     }
//     if(email==''){
//      alert('Email can\'t be empty');
//      jQuery( "#email" ).focus();
//      return false;
//     }
//      if(!validateEmail(email)) {
//      alert('Please add valid email address');
//      jQuery( "#email" ).focus();
//      return false;
//      }
//
//     if(phone==''){
//      alert('Phone can\'t be empty');
//      jQuery( "#phone" ).focus();
//      return false;
//     }
//     if(phone!=''){
//      var phoneno = /^\d{10}$/;
//      if(!phone.match(phoneno))  
//      { 
//        alert('Please add valid phone number');
//        jQuery( "#phone" ).focus();
//        return false;
//      }  
//     }
//     if(message==''){
//      alert('Message can\'t be empty');
//      jQuery( "#message" ).focus();
//      return false;
//     }
//     jQuery('.loader').show();
//     $.post( ajax_object.ajaxurl, { action: 'send_mail', name: name,email: email,phone: phone,message: message}, function ( response ){
//      jQuery('.loader').hide();
//      if(response==1){
//        alert("Thanks for enquiry Our team member contact you soon !");
//        jQuery('#name').val("");
//        jQuery('#email').val("");
//        jQuery('#phone').val("");
//        jQuery('#message').val("");
//      }else{
//         alert("Their is problem occerd during submit informetion please try again !");
//      }
//        
//        });
//     
//  })
//});
//jQuery(document.body).on('click','#owner-operation-contact',function(e){
//     var name=jQuery('#name').val();
//     
//     var phone=jQuery('#phone').val();
//     
//     if(name==''){
//      alert('Name can\'t be empty');
//      jQuery( "#name" ).focus();
//      return false;
//     }
//     
//
//     if(phone==''){
//      alert('Phone can\'t be empty');
//      jQuery( "#phone" ).focus();
//      return false;
//     }
//     if(phone!=''){
//      var phoneno = /^\d{10}$/;
//      if(!phone.match(phoneno))  
//      { 
//        alert('Please add valid phone number');
//        jQuery( "#phone" ).focus();
//        return false;
//      }  
//     }
//     
//     jQuery('.loader').show();
//     $.post( ajax_object.ajaxurl, { action: 'send_mail', name: name,phone: phone}, function ( response ){
//      jQuery('.loader').hide();
//      if(response==1){
//        alert("Thanks for enquiry Our team member contact you soon !");
//        jQuery('#name').val("");
//        jQuery('#phone').val("");
//      }else{
//         alert("Their is problem occerd during submit informetion please try again !");
//      }
//        
//        });
//     
//});
function validateEmail(email) {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
  }
  function phonenumber(inputtxt)  
  {  
    var phoneno = /^\d{10}$/;  
    if(inputtxt.value.match(phoneno))  
    {  
        return true;  
    }  
    else  
    {  
       return false;  
    }  
  } 