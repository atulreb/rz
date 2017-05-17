jQuery(document).ready(function($){
    $('#my-review-form').submit(function(e){
        var rating = $('#info').val();
        var email_name = $('#email_name').val();
        var review_message = $('#review_message').val();
        var review_phone = $('#c_phone').val();
        if(rating == 0 || rating == ''){
          alert('Please select a rating, use the stars to rate us 1 to 5');
          return false;
        }
        if(!ValidateEmail(email_name)){
          return false;
        }
        $('#ajaxloader').show();
        $.ajax({ 
            data: jQuery("#my-review-form").serialize(),
            type: 'post',
            url: the_ajax_script.ajaxurl,
            success: function(response_from_the_action_function) {
               // $("#response_area").html(response_from_the_action_function);
               /*captcha*/
               $('#ajaxloader').hide();
                if (response_from_the_action_function=='CAPTCHA Invalid.' || response_from_the_action_function=='Please select your CAPTCHA.') {
                   alert(response_from_the_action_function);
                   return false;
                }
                else{
                   grecaptcha.reset(recaptcha2);
                 document.getElementById('reviewer_name').value="";
                 document.getElementById('info').value="";
                 document.getElementById('email_name').value="";
                 document.getElementById('review_message').value="";
                 document.getElementById('reviewer_company').value="";
                 jQuery('.group1 .jr-ratenode').removeClass('jr-rating');
                 jQuery('.group1 .jr-ratenode').addClass('jr-nomal');
                alert('Thank you for your comments!');
                }
            }
        });
        return false; //don't let the page refresh on submit.
    });
});


function enterText(event){
 var key = window.event ? event.keyCode : event.which;

if (event.keyCode == 8 || event.keyCode == 46
 || event.keyCode == 37 || event.keyCode == 39) {
    return true;
}
else if (!(key >= 65 && key <= 120) && (key != 32 && key != 0)) {
  alert('Number is not allowed in name');
    return false;
}
else return true;

}
 function ValidatePhoneR(phone) 
    {
     if (/^\(?(\d{3})\)?[-]?(\d{3})[-]?(\d{4})$/.test(phone))
      {
        return (true)
      }
        alert("You have entered an invalid phone number!")
        return (false)
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
    //manish kumar