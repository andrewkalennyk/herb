"use strict";

// check if touch device
function isTouchDevice() {
  var prefixes = ' -webkit- -moz- -o- -ms- '.split(' ');

  var mq = function mq(query) {
    return window.matchMedia(query).matches;
  };

  if ('ontouchstart' in window || window.DocumentTouch && document instanceof DocumentTouch) {
    return true;
  }

  var query = ['(', prefixes.join('touch-enabled),('), 'heartz', ')'].join('');
  return mq(query);
}

if (isTouchDevice()) {
  $('body').addClass('touch-device');
} // header


(function () {
  var header = $('.js-header'),
      burger = header.find('.js-header-burger'),
      wrap = header.find('.js-header-wrap'),
      link = header.find('.js-header-link'),
      search = header.find('.js-header-search'),
      input = search.find('input'),
      close = header.find('.js-header-close'),
      body = $('html, body');
  link.on('click', function (e) {
    e.stopPropagation();

    if (search.hasClass('visible')) {
      search.submit();
    } else {
      link.addClass('active');
      search.addClass('visible');
      input.focus();
    }
  });
  $(document).on('click', function (e) {
    link.removeClass('active');
    search.removeClass('visible');
  });
  search.on('click', function (e) {
    e.stopPropagation();
  });
  burger.on('click', function (e) {
    e.stopPropagation();
    burger.toggleClass('active');
    wrap.toggleClass('visible');
    body.toggleClass('no-scroll');
  });
  close.on('click', function (e) {
    burger.removeClass('active');
    wrap.removeClass('visible');
    body.removeClass('no-scroll');
  });
})(); // collection


(function () {
  var collection = $('.js-collection');

  if (collection.length) {
    var carousel = collection.find('.js-collection-carousel'),
        dots = collection.find('.js-slick-nav-dots'),
        prev = collection.find('.js-slick-nav-prev'),
        next = collection.find('.js-slick-nav-next');
    carousel.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      appendDots: dots,
      prevArrow: prev,
      nextArrow: next
    });
  }
})(); // auth


(function () {
  var auth = $('.js-auth');

  if (auth.length) {
    var toggle = auth.find('[data-toggle]'),
        titles = auth.find('[class*="js-auth-title"]'),
        forms = auth.find('[class*="js-auth-form"]');
    toggle.on('click', function (e) {
      e.preventDefault();
      var param = $(this).data('toggle');
      titles.hide();
      auth.find(".js-auth-title-".concat(param)).show();
      forms.hide();
      auth.find(".js-auth-form-".concat(param)).show();
    });
  }
})(); // select


(function () {
  var select = $('.js-select');

  if (select.length) {
    select.each(function () {
      var _this = $(this),
          head = _this.find('.js-select-head'),
          drop = _this.find('.js-select-drop'),
          option = _this.find('.js-select-option');

      head.on('click', function (e) {
        e.stopPropagation();

        if (_this.hasClass('open')) {
          _this.removeClass('open');
        } else {
          select.removeClass('open');

          _this.addClass('open');
        }
      });
      option.on('click', function (e) {
        e.preventDefault();
        head.find('span').text($(this).text());
      });
      $(document).on('click', function () {
        select.removeClass('open');
      });
    });
  }
})(); // category


(function () {
  var category = $('.js-category');

  if (category.length) {
    category.each(function () {
      var _this = $(this),
          carousel = _this.find('.js-category-carousel'),
          dots = _this.find('.js-slick-nav-dots'),
          prev = _this.find('.js-slick-nav-prev'),
          next = _this.find('.js-slick-nav-next');

      carousel.slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        appendDots: dots,
        prevArrow: prev,
        nextArrow: next,
        responsive: [{
          breakpoint: 1259,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 1023,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 767,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    });
  }
})(); // gallery


(function () {
  var gallery = $('.js-gallery');

  if (gallery.length) {
    var carousel = gallery.find('.js-gallery-carousel'),
        thumbs = gallery.find('.js-gallery-thumbs'),
        prevArrow = '<button class="slick-prev"><svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg></button>',
        nextArrow = '<button class="slick-next"><svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg></button>';
    carousel.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: thumbs,
      responsive: [{
        breakpoint: 1023,
        settings: {
          fade: false,
          dots: true,
          arrows: true,
          prevArrow: prevArrow,
          nextArrow: nextArrow
        }
      }]
    });
    thumbs.slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: carousel,
      focusOnSelect: true,
      prevArrow: prevArrow,
      nextArrow: nextArrow
    });
  }
})();