@if($slides->count())
    <div class="collection__carousel js-collection-carousel">
        @foreach($slides as $slide)
            <a class="collection__item" href="{{$slide->getLink()}}">
                <div class="collection__preview">
                    {!! $page->getImg("1280", "500"); !!}
                </div>
                <div class="collection__center center">
                    <div class="collection__title">{{$slide->t('title')}}</div>
                </div>
            </a>
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
@endif
