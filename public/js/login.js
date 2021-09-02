'use strict';

let Login = {

    init: function() {
        Login.doLogin();
        Login.doRegister();
        Login.doReset();
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
                            return location.href = '/profile';
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
    },
    doRegister: function () {
        $('form.register-form').validate({
            rules : {
                last_name : { required : true },
                first_name : { required : true },
                phone : { required : true },
                email : { required : true, email:true },
                password : { required : true, /*pattern: "^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)[a-zA-Z\\d]{8,}$"*/  },
                is_agree : { required : true },

            },
            errorPlacement : function(error, element) {},
            submitHandler: function(form) {
                jQuery.ajax({
                    data: $(form).serializeArray(),
                    type: "POST",
                    url: $(form).data('action'),
                    cache: false,
                    dataType: "json",
                    success: function (response) {
                        $('.error-message-registration').hide();
                        if (response.status) {
                            $(form)[0].reset();
                            $('.error-message-registration').html(response.message);
                            $('.error-message-registration').show();
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
    },
    doReset: function () {
        $('form.reset-form').validate({
            rules : {
                email : { required : true, email:true },
            },
            errorPlacement : function(error, element) {},
            submitHandler: function(form) {
                jQuery.ajax({
                    data: $(form).serializeArray(),
                    type: "POST",
                    url: $(form).data('action'),
                    cache: false,
                    dataType: "json",
                    success: function (response) {
                        $('.error-message-registration').hide();
                        if (response.status) {
                            $(form)[0].reset();
                            $('.error-message-registration').html(response.message);
                            $('.error-message-registration').show();
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
