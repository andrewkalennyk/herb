'use strict';

let Search = {
    init: function () {
        const input = $('#search_input');

        $(input).on('keyup', function () {
            const max = 3;
            if ($(input).val().length > max) {
                Search.autocompleteInput($(input).val());
                $('.header__results').show();
            } else {
                $('.header__results').hide();
            }
        })
    },

    autocompleteInput: function (s) {
        jQuery.ajax({
            data: {
                s: s
            },
            type: "POST",
            url: $('.header__search.js-header-search').attr('action'),
            cache: false,
            dataType: "json",
            success: function (response) {
                const headerResults = $('.header__results');
                if (response.status) {
                    let results = '';
                    if (response.products.length) {
                        response.products.forEach(element =>
                            results += '<a href="' + element.url + '">' + element.title + '</a>'
                        );
                    } else {
                        results = $(headerResults).data('not-found');
                    }
                    $(headerResults).html(results);

                } else {
                    $(headerResults).hide();
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
    Search.init();
});
