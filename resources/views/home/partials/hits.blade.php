@if($hitProducts->count())
    <!-- category-->
    <div class="category js-category">
        <div class="category__title title">{{__t('Хиты продаж')}}</div>
        <div class="category__carousel js-category-carousel">
            @foreach($hitProducts as $product)
                @include('products.partials.product')
            @endforeach
        </div>
        <!-- slick nav-->
        <div class="slick-nav">
            <button class="slick-nav__prev js-slick-nav-prev">
                <svg class="icon icon-prev">
                    <use xlink:href="#icon-prev"></use>
                </svg>
            </button>
            <div class="slick-nav__dots js-slick-nav-dots"></div>
            <button class="slick-nav-next js-slick-nav-next">
                <svg class="icon icon-next">
                    <use xlink:href="#icon-next"></use>
                </svg>
            </button>
        </div>
    </div>
@endif
