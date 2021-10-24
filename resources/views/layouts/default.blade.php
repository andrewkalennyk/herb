<!DOCTYPE html>
<html lang="[lang]" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <title>Home page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Production-ready Portfolio and Case Study Template for Visual Designers">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ui8">
    <meta name="twitter:title" content="Folio Designer">
    <meta name="twitter:description" content="Production-ready Portfolio and Case Study Template for Visual Designers">
    <meta name="twitter:creator" content="@ui8">
    <meta name="twitter:image" content="https://ui8-folio.herokuapp.com/img/twitter-card.jpg">
    <meta property="og:title" content="Folio Designer">
    <meta property="og:type" content="Article">
    <meta property="og:url" content="https://ui8.net/ui8/products/folio-designer">
    <meta property="og:image" content="https://ui8-folio.herokuapp.com/img/fb-og-image.jpg">
    <meta property="og:description" content="Production-ready Portfolio and Case Study Template for Visual Designers">
    <meta property="og:site_name" content="Folio Designer">
    <meta property="fb:admins" content="132951670226590"><link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300;500&amp;family=Montserrat:wght@300;400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" media="all" href="/css/app.min.css">
    <script>
        var viewportmeta = document.querySelector('meta[name="viewport"]');
        if (viewportmeta) {
            if (screen.width < 414) {
                var newScale = screen.width / 414;
                viewportmeta.content = 'width=414, minimum-scale=' + newScale + ', maximum-scale=1.0, user-scalable=no, initial-scale=' + newScale + '';
            } else {
                viewportmeta.content = 'width=device-width, maximum-scale=1.0, initial-scale=1.0';
            }
        }
    </script>

    @yield('seo_tags')

</head>
<body>

<!-- outer-->
<div class="outer">
    @include('partials.header')

    <div class="container">
        @yield('main')
    </div>

    @include('partials.footer')

</div>

@include('popups.cart')
@include('popups.login')

<!-- scripts-->
<script src="/js/lib/jquery.min.js"></script>
<script src="/js/lib/jquery.fancybox.min.js"></script>
<script src="/js/lib/jquery.validate.min.js"></script>
<script src="/js/lib/slick.min.js"></script>
<script src="/js/app.js"></script>
<script src="/js/login.js"></script>
<script src="/js/cart.js"></script>
<script src="/js/search.js"></script>

<script>
    Cart.lang = '{{app()->getLocale() !== 'ru' ? app()->getLocale() : ''}}'
</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@yield('after_script')

@include('partials.svg')

</body>
</html>
