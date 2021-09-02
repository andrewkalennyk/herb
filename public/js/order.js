'use strict';

let Order = {
    init: function () {
        Order.orderForm();

        $('.btn_black').click(function () {
            const form = $(this).closest('form');
            $(form).submit();
        });

        $('.btn_black').click(function () {
            const form = $(this).closest('form');
            $(form).submit();
        });
    },

    orderForm: function () {
        $('form.checkout').validate({
            rules : {
                first_name : { required : true },
                last_name : { required : true },
                phone : { required : true },
                city : { required : true }
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
};

$(document).ready(function () {
    Order.init();
});
