'use strict';

let Order = {
    isUser: false,
    cities: [],
    warehouses: [],
    lang: '',

    citiesBlock: $('.np_city_group'),
    warehouseBlock: $('.np_warehouse_group'),
    regionBlock: $('.np_region_group'),
    streetBlock: $('.np_street_group'),
    warehouse: $('.np_warehouse'),

    init: function () {

        $(Order.citiesBlock).hide();
        $(Order.warehouseBlock).hide();
        $(Order.streetBlock).hide();

        Order.orderForm();
        Order.changeDeliveryType();

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

        $('.checkout__nav .nav__option a').click(function () {
            Order.changeTabs($(this).data('customer'), this);
        });

        $('select[name="np_region_id"]').change(function () {
            Order.regionChange($(this).val());
        });

        $('select[name="np_city_id"]').change(function () {
            Order.cityChange($(this).val());
        });

        $('input[name="delivery_type"]').change(function () {
            Order.changeDeliveryType();
        })
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
                            $('.order_nmbr').html('№'+response.order_id);
                            $(".popup_success_btn").click();
                        } else {
                            $(".popup_success_btn").click();
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
    },

    changeTabs: function (typeCustomer, el) {
        $('.checkout__nav .nav__option a').removeClass('active');
        $(el).addClass('active');
        if (typeCustomer === 'often') {
            if (Order.isUser) {
                $('form.checkout input.changeable').each(function () {
                    $(this).val($(this).data('value'));
                });
            }
        } else {
            $('form.checkout input.changeable').each(function () {
                $(this).val('');
            });
        }
    },

    regionChange: function (regionId) {
        let cities = Order.cities.filter(city => city.np_area_id === parseInt(regionId));
        Order.deleteNonEmptyOptions('select[name="np_city_id"]');
        for (const [key, obj] of Object.entries(cities)) {
            $('select[name="np_city_id"]').append(new Option(Order.getTitleLang(obj), obj.id));
        }
        $(Order.citiesBlock).show();
    },

    cityChange: function (cityId) {
        window.console.log('city_change')
        let warehouses = Order.warehouses.filter(warehouse => warehouse.np_city_id === parseInt(cityId));
        Order.deleteNonEmptyOptions('select[name="np_warehouse_id"]');
        for (const [key, obj] of Object.entries(warehouses)) {
            $('select[name="np_warehouse_id"]').append(new Option(Order.getTitleLang(obj), obj.id));
        }

        let streets = Order.streets.filter(street => street.np_city_id === parseInt(cityId));
        Order.deleteNonEmptyOptions('select[name="np_street_id"]');
        for (const [key, obj] of Object.entries(streets)) {
            $('select[name="np_street_id"]').append(new Option(Order.getTitleLang(obj), obj.id));
        }

        Order.changeDeliveryType();

    },

    changeDeliveryType: function () {
        switch ($('input[name="delivery_type"]:checked').val()) {
            case 'np':
                $(Order.regionBlock).show();
                $(Order.warehouseBlock).show();
                $(Order.streetBlock).hide();
                break;
            case 'np_courier':
                $(Order.regionBlock).show();
                $(Order.warehouseBlock).hide();
                $(Order.streetBlock).show();
                break;
            case 'pickup':
                $(Order.regionBlock).hide();
                $(Order.warehouseBlock).hide();
                $(Order.streetBlock).hide();
                break;
        }
    },

    deleteNonEmptyOptions: function (selector) {
        $(selector)
            .filter(function() {
                return this.value || $.trim(this.value).length !== 0;
            })
            .remove();
    },

    getTitleLang: function (obj) {
        switch (Order.lang) {
            case "ru":
                return obj.title;
            case "ua":
                return obj.title_ua;
            case "en":
                return obj.title_en;
        }
    }
};

$(document).ready(function () {
    Order.init();
});
