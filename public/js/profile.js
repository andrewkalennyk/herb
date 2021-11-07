'use strict';

let Profile = {

    usedVocabulary: [],

    init: function() {
        Profile.doRepeatOrder();
        Profile.doGeneratePromoCode();
        Profile.saveProfile();

        $('input[name="date_birth"]').mask('00.00.0000', {placeholder: "__.__.____"});
        $('input[name="phone"]').mask('+38(000) 000-00-00', {placeholder: "+38(___) ___-__-__"});
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

    saveProfile: function () {
        $('form.account').validate({
            rules : {
                first_name : { required : true },
                last_name : { required : true },
                patronymic_name : { required : true },
                phone : { required : true },
                email : { required : true , email: true}
            },
            errorPlacement : function(error, element) {},
            submitHandler: function(form) {
                var disabled = $('form.account').find(':input:disabled').removeAttr('disabled');
                jQuery.ajax({
                    data: $(form).serializeArray(),
                    type: "POST",
                    url: $(form).data('action'),
                    cache: false,
                    dataType: "json",
                    success: function (response) {
                        if (response.status) {
                            var account = $('.js-account'),
                                actions = account.find('.js-account-actions'),
                                inputs = account.find('input[readonly]'),
                                actionsSave = account.find('.js-account-actions-save');

                            disabled.attr('disabled','disabled');
                            actions.show();
                            actionsSave.hide();
                            inputs.attr('readonly', true);
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

    changeProfileImage: function ()
    {

    },

    checkUsed(isUsed) {
        return isUsed ? Profile.usedVocabulary.used : Profile.usedVocabulary.active;
    }
}

$('document').ready(function () {
    Profile.init();
});
