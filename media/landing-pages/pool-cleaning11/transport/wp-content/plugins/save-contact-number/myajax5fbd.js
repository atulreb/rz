jQuery(document).ready(function($){
    jQuery(function($){
      $("#c_phone").mask("000-000-0000",{'translation': {0: {pattern: /[0-9]/}}});
      $("#cn_phone").mask("000-000-0000",{'translation': {0: {pattern: /[0-9]/}}});
    });
    $('#my-contact-form').submit(function(e){
        var review_phone = $('#c_phone').val();
        var email_name = $('#c_email').val();
        var c_name = $.trim($('#c_name').val());
        //console.log(c_name);
        if(c_name === ''){
          alert("Field cannot be empty or whitespace characters used.");
          return false;
        }
        if(!ValidatePhone(review_phone)){
          return false;
        }

        if(!ValidateEmail(email_name)){
          return false;
        }
        $('#ajaxloader').show();
        $.ajax({ 
            data: jQuery("#my-contact-form").serialize(),
            type: 'post',
            url: the_ajax_script.ajaxurl,
            success: function(response_from_the_action_function) {
              console.log(response_from_the_action_function);
              var response = response_from_the_action_function.trim();
               // $("#response_area").html(response_from_the_action_function);
                $('#ajaxloader').hide();
                /*captcha*/
                if (response==='CAPTCHA Invalid.' || response==='Please select your CAPTCHA.') {
                   alert(response);
                   return false;
                } else{
                   grecaptcha.reset(recaptcha2);
                           document.getElementById('c_name').value="";
                           document.getElementById('c_email').value="";
                           document.getElementById('c_phone').value="";
                           document.getElementById('msg').value="";
                          alert('Your submission has been received, Thank You!');
                          window.location = "http://www.protransportusa.com/";
                }
                /*captcha*/
            }
        });
        return false; //don't let the page refresh on submit.
    });
   
});
jQuery(document).ready(function($){
    $('#my-contact-form-need').submit(function(e){
       var review_phone = $('#cn_phone').val();
        var cn_name = $.trim($('#cn_name').val());
        if(!ValidatePhone(review_phone)){
          return false;
        }
        var email_name = $('#cn_email').val();
        if(!ValidatePhone(review_phone)){
          return false;
        }
        if(cn_name === ''){
          alert("Field cannot be empty or whitespace characters used.");
          return false;
        }
        $('#ajaxloader').show();
        $.ajax({ 
            data: jQuery("#my-contact-form-need").serialize(),
            type: 'post',
            url: the_ajax_script.ajaxurl,
            success: function(response_from_the_action_function) {
                console.log(response_from_the_action_function);
                var response = response_from_the_action_function.trim();
               // $("#response_area").html(response_from_the_action_function);
                $('#ajaxloader').hide();
                /*captcha*/
                if (response=='CAPTCHA Invalid.' || response=='Please select your CAPTCHA.') {
                   alert(response);
                   return false;
                }else{
                 grecaptcha.reset(recaptcha1);
                 document.getElementById('cn_name').value="";
                 document.getElementById('cn_email').value="";
                 document.getElementById('cn_phone').value="";
                 document.getElementById('cn_msg').value="";
                 alert('Your submission has been received, Thank You!');
                 window.location = "http://www.protransportusa.com/";
                }
                /*captcha*/
            }
        });
        return false; //don't let the page refresh on submit.
    });
   
});

jQuery(document).ready(function($){
    $('#my-orderservice-form').submit(function(e){
      var review_phone = $('#ord_phoneno').val();
      var ord_name =  $.trim($('#ord_name').val());
       if(!ValidatePhone(review_phone)){
          return false;
        }
        if(ord_name === ''){
          alert("Field cannot be empty or whitespace characters used.");
          return false;
        }
        $('#ajaxloader').show();
        $.ajax({ 
            data: jQuery("#my-orderservice-form").serialize(),
            type: 'post',
            url: the_ajax_script.ajaxurl,
            success: function(response_from_the_action_function) {
               // $("#response_area").html(response_from_the_action_function);
               // console.log(response_from_the_action_function);
               var response = response_from_the_action_function.trim();
                $('#ajaxloader').hide();
                /*captcha*/
                if (response=='CAPTCHA Invalid.' || response=='Please select your CAPTCHA.') {
                   alert(response);
                   return false;
                }
                else{
                 grecaptcha.reset(recaptcha3);
                document.getElementById('ord_name').value="";
                document.getElementById('ord_phoneno').value="";
                alert('Your submission has been received, Thank You!')
               
                }
                /*captcha*/
            }
        });
        return false; //don't let the page refresh on submit.
    });
   
});

function enterNumber(event){
 var key = window.event ? event.keyCode : event.which;

if (event.keyCode == 8 || event.keyCode == 46
 || event.keyCode == 37 || event.keyCode == 39) {
    return true;
}
else if ( key < 48 || key > 57 ) {
  //alert('Pleae enter mobile number in proper format Like : 444-444-4444');
    return false;
}
else return true;

}

// function enterText(event){
//  var key = window.event ? event.keyCode : event.which;

// if (event.keyCode == 8 || event.keyCode == 46
//  || event.keyCode == 37 || event.keyCode == 39) {
//     return true;
// }
// else if (!(key >= 65 && key <= 120) && (key != 32 && key != 0)) {
//   //alert('Number is not allowed in name');
//     return false;
// }
// else return true;

// }

function enterText(e){
 var key = window.event ? event.keyCode : event.which;

  if (e.ctrlKey || e.altKey) {
             //e.preventDefault();
             return false;
  } else {
         //var key = e.keyCode;
         if (!((key == 8) || (key == 32)  || (key >= 65 && key <= 90) || (key >= 97 && key <= 122))) {
              // e.preventDefault();
              return false;
         }
  }
  return true;
}


function ValidatePhone(phone) 
{
 if (/^\(?(\d{3})\)?[-]?(\d{3})[-]?(\d{4})$/.test(phone))
  {
    return true;
  }
  alert("You have entered an invalid phone number!")
  return false;
}

function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return true
  }
    alert("You have entered an invalid email address!")
    return false
}

/*captcha*/
  var recaptcha1;
  var recaptcha2;
  var recaptcha3;
  var recaptcha4;
  var myCallBack = function() {
    var id_recaptcha1 =  document.getElementById('recaptcha1');
    if (typeof(id_recaptcha1) != 'undefined' && id_recaptcha1 != null)
    {
      //Render the recaptcha1 on the element with ID "recaptcha1"
      recaptcha1 = grecaptcha.render('recaptcha1', {
        'sitekey' : '6LdAlAsUAAAAAGuWvUi8Lpznv28VzdPWXf-uZEm-', //Replace this with your Site key
        'theme' : 'light'
      });
    }
    
    var id_recaptcha2 =  document.getElementById('recaptcha2');
    if (typeof(id_recaptcha2) != 'undefined' && id_recaptcha2 != null)
    {
      //Render the recaptcha2 on the element with ID "recaptcha2"
      recaptcha2 = grecaptcha.render('recaptcha2', {
        'sitekey' : '6LdAlAsUAAAAAGuWvUi8Lpznv28VzdPWXf-uZEm-', //Replace this with your Site key
        'theme' : 'light'
      });
    }
    var id_recaptcha3 =  document.getElementById('recaptcha3');
    if (typeof(id_recaptcha3) != 'undefined' && id_recaptcha3 != null)
    {
      recaptcha3 = grecaptcha.render('recaptcha3', {
        'sitekey' : '6LdAlAsUAAAAAGuWvUi8Lpznv28VzdPWXf-uZEm-', //Replace this with your Site key
        'theme' : 'light'
      });
    }

    var id_recaptcha4 =  document.getElementById('recaptcha4');
    if (typeof(id_recaptcha4) != 'undefined' && id_recaptcha4 != null)
    {
      recaptcha4 = grecaptcha.render('recaptcha4', {
        'sitekey' : '6LdAlAsUAAAAAGuWvUi8Lpznv28VzdPWXf-uZEm-', //Replace this with your Site key
        'theme' : 'light'
      });
    }

    var id_recaptcha4 =  document.getElementById('dform1');
    if (typeof(id_recaptcha4) != 'undefined' && id_recaptcha4 != null)
    {
      recaptcha4 = grecaptcha.render('dform1', {
        'sitekey' : '6LdAlAsUAAAAAGuWvUi8Lpznv28VzdPWXf-uZEm-', //Replace this with your Site key
        'theme' : 'light'
      });
    }

    var id_recaptcha4 =  document.getElementById('dform2');
    if (typeof(id_recaptcha4) != 'undefined' && id_recaptcha4 != null)
    {
      recaptcha4 = grecaptcha.render('dform2', {
        'sitekey' : '6LdAlAsUAAAAAGuWvUi8Lpznv28VzdPWXf-uZEm-', //Replace this with your Site key
        'theme' : 'light'
      });
    }

    var id_recaptcha4 =  document.getElementById('dform3');
    if (typeof(id_recaptcha4) != 'undefined' && id_recaptcha4 != null)
    {
      recaptcha4 = grecaptcha.render('dform3', {
        'sitekey' : '6LdAlAsUAAAAAGuWvUi8Lpznv28VzdPWXf-uZEm-', //Replace this with your Site key
        'theme' : 'light'
      });
    }

    var id_recaptcha4 =  document.getElementById('dform4');
    if (typeof(id_recaptcha4) != 'undefined' && id_recaptcha4 != null)
    {
      recaptcha4 = grecaptcha.render('dform4', {
        'sitekey' : '6LdAlAsUAAAAAGuWvUi8Lpznv28VzdPWXf-uZEm-', //Replace this with your Site key
        'theme' : 'light'
      });
    }

    var id_recaptcha4 =  document.getElementById('dform5');
    if (typeof(id_recaptcha4) != 'undefined' && id_recaptcha4 != null)
    {
      recaptcha4 = grecaptcha.render('dform5', {
        'sitekey' : '6LdAlAsUAAAAAGuWvUi8Lpznv28VzdPWXf-uZEm-', //Replace this with your Site key
        'theme' : 'light'
      });
    }

    var id_recaptcha4 =  document.getElementById('dform6');
    if (typeof(id_recaptcha4) != 'undefined' && id_recaptcha4 != null)
    {
      recaptcha4 = grecaptcha.render('dform6', {
        'sitekey' : '6LdAlAsUAAAAAGuWvUi8Lpznv28VzdPWXf-uZEm-', //Replace this with your Site key
        'theme' : 'light'
      });
    }
  };

/*captcha*/