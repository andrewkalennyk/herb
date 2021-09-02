'use strict';

let Profile = {

    usedVocabulary: [],

    init: function() {
        Profile.doRepeatOrder();
        Profile.doGeneratePromoCode();
    },

    doRepeatOrder: function () {
        $('.repeat-order').click(function () {
            jQuery.ajax({
                data: {
                    orderId: $(this).data('order-id')
                },
                type: "POST",
                url: $(this).data('url'),
                cache: false,
                dataType: "json",
                success: function (response) {
                    if (response.status) {
                        return location.href = '/checkout';
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
        });
    },

    doGeneratePromoCode:function () {
        $('.generate_promo_code').click(function () {
            jQuery.ajax({
                type: "POST",
                url: $(this).data('url'),
                cache: false,
                dataType: "json",
                success: function (response) {
                    if (response.status && response.codes) {
                       let lastCode = response.codes.shift();
                       $('.last-promo-code').html(lastCode.code + '('+ Profile.checkUsed(lastCode.is_used)+')');

                       let othersHtml = '';

                        response.codes.forEach(
                            element =>
                                othersHtml +=
                                    '<li>'+
                                    element.code + '('+ Profile.checkUsed(element.is_used) +')' +
                                    '</li>'
                        );

                        $('.promo-codes-list').html(othersHtml);
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
        });
    },

    checkUsed(isUsed) {
        return isUsed ? Profile.usedVocabulary.used : Profile.usedVocabulary.active;
    }
}

$('document').ready(function () {
    Profile.init();
});
