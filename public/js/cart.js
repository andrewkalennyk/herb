'use strict';

let Cart = {

    lang: '',
    langPrefix: '',

    init: function () {
        Cart.langPrefix = Cart.lang ? '/' + Cart.lang : '';

        $('.card__btn').click(function () {
            Cart.addToCart(this);
        });

        $('.cart_value .value__minus').click(function () {
            Cart.changeAmount(this, 'decr');
        });

        $('.cart_value .value__plus').click(function () {
            Cart.changeAmount(this, 'incr');
        });

        Cart.cartPopupEvents();
    },

    cartPopupEvents: function() {
        $('.cart_popup_value .value__plus').click(function () {
            Cart.changePopupAmount(this, 'incr');
        });

        $('.cart_popup_value .value__minus').click(function () {
            Cart.changePopupAmount(this, 'decr');
        });

        $('.icon-trash').click(function () {
            Cart.deleteFromCart(this);
        })
    },

    updateCartPopup: function(response) {
        $('.cart_content').html(response.cartView);

        if (response.total === '0') {
            $('.cart__foot').hide();
        } else {
            $('.cart__foot').show();
        }

        $('.cart_total').html(response.total);

        Cart.cartPopupEvents();
    },

    addToCart: function (el) {
        const productId = $(el).attr('data-product-id'),
              priceId = $(el).attr('data-price-id');

        jQuery.ajax({
            data: {
                priceId : priceId,
                productId: productId,
            },
            type: "POST",
            url: Cart.langPrefix + '/cart/add-to-cart',
            cache: false,
            dataType: "json",
            success: function (response) {
                if (response.status) {
                    Cart.content = response.carContent;
                    $('.cart_value .value_cart_row_id').val(response.rowId);
                    $('.cart_value .value__input').val(response.qty);
                    $('.select-unit-price-option[data-priceId="'+priceId+'"]').attr('data-rowId', response.rowId);

                    $(el).hide();
                    $('.cart_value').show();

                    Cart.updateCartPopup(response);
                }
            },
            error: function (error) {}
        });
    },

    changeAmount: function(el, type) {
        const cartValueBlock = $(el).parent(),
            cartValue = cartValueBlock.find('.value__input'),
            rowId = cartValueBlock.find('.value_cart_row_id').val(),
            qty = type === 'incr' ? parseInt($(cartValue).val()) + 1 : parseInt($(cartValue).val()) - 1;

        jQuery.ajax({
            data: {
                rowId : rowId,
                qty: qty
            },
            type: "POST",
            url: '/cart/change-cart-qty',
            cache: false,
            dataType: "json",
            success: function (response) {
                if (response.status) {
                    Cart.content = response.carContent;
                    Cart.updateCartPopup(response);

                    if (qty === 0) {
                        $('.select-unit-price-option[data-rowId="'+rowId+'"]').attr('data-rowId', '');
                        $(cartValueBlock).hide();
                        $('.cart__foot').hide();
                        $('.card__btn').show();
                    } else {
                        $('.cart__foot').show();
                        $(cartValue).val(qty);
                    }

                }
            },
            error: function (error) {}
        });
    },

    changePopupAmount: function(el, type) {
        const cartValueBlock = $(el).parent(),
            cartValue = cartValueBlock.find('.value__input'),
            rowId = cartValueBlock.find('.value_cart_row_id').val(),
            qty = type === 'incr' ? parseInt($(cartValue).val()) + 1 : parseInt($(cartValue).val()) - 1;

        jQuery.ajax({
            data: {
                rowId : rowId,
                qty: qty
            },
            type: "POST",
            url: '/cart/change-cart-qty',
            cache: false,
            dataType: "json",
            success: function (response) {
                if (response.status) {
                    Cart.updateCartPopup(response);

                    if (qty === 0) {
                        $('.select-unit-price-option[data-rowId="'+rowId+'"]').attr('data-rowId', '');
                        $(cartValueBlock).closest('tr').remove();
                    } else {
                        $(cartValue).val(qty);
                    }

                }
            },
            error: function (error) {}
        });
    },

    deleteFromCart: function (el) {
        const deleteBlock = $(el).parent(),
            rowId = deleteBlock.attr('data-row-id');

        jQuery.ajax({
            data: {
                rowId : rowId
            },
            type: "POST",
            url: '/cart/delete-item',
            cache: false,
            dataType: "json",
            success: function (response) {
                if (response.status) {
                    Cart.updateCartPopup(response);
                    $('.select-unit-price-option[data-rowId="'+rowId+'"]').attr('data-rowId', '');
                    $(el).closest('tr').remove();
                }
            },
            error: function (error) {}
        });


    },

};

$('document').ready(function () {
    Cart.init();
});
