$().ready(function () {
    // validate signup form on keyup and submit
    $("#signup").validate({
        rules: {
            username: "required",
            password: "required",
            confirm_password: {required: true,
                equalTo: "#password"
            },
            agree: "required"
        },
        messages: {
            username: "Please enter username",
            password: "Please enter password",
            confirm_password: {
                required: "Please enter confirm password.",
                equalTo: "Please enter same password as above",
            }
        },
        submitHandler: function () {
            $("#signup").submit(function (e) {
                e.preventDefault();
                var url = this.action; // the script where you handle the form input.
                alert(this.action);
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $(this).serialize(),
                    dataType: 'json', // serializes the form's elements.
                    success: function (data)
                    {
                        alert(data.status);
                        if (data.status === 1) {
                            $("#signup")[0].reset();
                            $("#msg").html('<div id="successdiv">'+ data.msg +'</div>');
                            var delay = 5000; //Your delay in milliseconds
                            setTimeout(function () {
                                window.location = "login";
                            }, delay);
                        } else {
                            $(".error").html(data.msg);
                        }
                    }
                });
            });
        }
    });

});