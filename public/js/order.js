'use strict';

let Order = {
    init: function () {
        Order.orderForm();

        $('.btn_black').click(function () {
            const form = $(this).closest('form');
            $(form).submit();
        });

        $('.use_promo').click(function () {
            $('.promo_code_block').toggle();
        });

        $('.promo_code_btn').click(function (e) {
            e.preventDefault();
            Order.usePromo();
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
    },
    usePromo: function () {
        jQuery.ajax({
            data: {
                promo_code: $('.promo_code_block input[name="promo_code"]').val()
            },
            type: "POST",
            url: $('.promo_code_btn').data('url'),
            cache: false,
            dataType: "json",
            success: function (response) {
                if (response.status) {
                    $('#total_price').addClass('cross');
                    $('.new_total').html(response.total);
                    $('#discount_total_price').show();
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
};

$(document).ready(function () {
    Order.init();
});
