<!-- header-->
<header class="header js-header @yield('header_class')">
    <div class="header__center center">
        <button class="header__burger js-header-burger">
            <svg viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="20" height="1.5" rx="0.75"/>
                <rect y="7" width="20" height="1.5" rx="0.75"/>
                <rect y="14" width="20" height="1.5" rx="0.75"/>
            </svg>
        </button>
        <div class="header__wrap js-header-wrap">
            <div class="header__inner">

                @include('partials.menu_header')

                <div class="header__group">
                    @if(!$user)
                        <a class="header__link" data-fancybox data-src="#login" data-touch="false" href="javascript:;">
                            <svg class="icon icon-user">
                                <use xlink:href="#icon-user"></use>
                            </svg>
                        </a>
                    @else
                        <a class="header__link" data-touch="false" href="{{route('profile')}}">
                            <svg class="icon icon-user">
                                <use xlink:href="#icon-user"></use>
                            </svg>
                        </a>
                    @endif
                    <!-- select-->
                    @include('partials.langs')
                </div>
            </div>
            <div class="header__close js-header-close"></div>
        </div>
        <a class="header__logo" href="{{geturl('/')}}">
            @if(!empty($page) && $page->template == 'main')
                <img src="{{asset('/img/herbarius-white.svg')}}" alt="Herbarius">
            @else
                <img src="{{asset('/img/herbarius.svg')}}" alt="Herbarius">
            @endif
        </a>
        <div class="header__menu">
            <button class="header__link js-header-link">
                <svg class="icon icon-search">
                    <use xlink:href="#icon-search"></use>
                </svg>
            </button>

            @include('partials.header_search')

            <a class="header__link" data-fancybox data-src="#cart" data-touch="false" href="javascript:;">
                <svg class="icon icon-cart">
                    <use xlink:href="#icon-cart"></use>
                </svg>
                <div class="header__counter"
                     style="{{\Gloudemans\Shoppingcart\Facades\Cart::count() == 0 ? 'display: none' : ''}}"
                >
                    {{\Gloudemans\Shoppingcart\Facades\Cart::count()}}
                </div>
            </a>
        </div>
    </div>
</header>
