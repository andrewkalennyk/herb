'use strict';

let Login = {

    init: function() {
        Login.doLogin();
    },

    doLogin: function () {
        $('form.login-form').validate({
            rules : {
                email : { required : true, email:true },
                password : { required : true }
            },
            errorPlacement : function(error, element) {},
            submitHandler: function(form) {
                window.console.log($(form).serializeArray());
                jQuery.ajax({
                    data: $(form).serializeArray(),
                    type: "POST",
                    url: $(form).data('action'),
                    cache: false,
                    dataType: "json",
                    success: function (response) {
                        if (response.status) {
                        }
                    },
                    error: function (error) {
                        var errors = error.responseJSON.errors;
                        var errorMessage = '';
                        $.each(errors, function (key, value) {
                            errorMessage += value + '<br>';
                        });

                    }
                });
            }
        });
    }
}

$('document').ready(function () {
    Login.init();
});
