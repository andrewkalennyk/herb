<div class="product">
    <a class="product__preview" href="{{$product->getUrl()}}">
        @if($product->is_discount_fifty)
            <img class="product__badge" src="/img/discount-50.svg" alt="-50%"/>
        @endif
        @if($product->is_sold_out)
            <img class="product__badge" src="/img/sold-out.svg" alt="sold-out">
        @endif
        {!!  $page->getImg("611", "654") !!}
    </a>
    <a class="product__title" href="{{$product->getUrl()}}">{{$product->t('title')}}</a>
    <div class="product__details">{{$product->unit_value}} {{__t($product->unit_type)}}</div>
    <div class="product__price">
        @if($product->old_price)
            <span class="product__before">{{$product->old_price}} {{__t('грн')}} </span>
        @endif
        {{$product->price}} {{__t('грн')}}
    </div>
    @if($product->is_sold_out)
        <a class="product__btn btn" href="#">
            <svg class="icon icon-branch">
                <use xlink:href="#icon-branch"></use>
            </svg>
            {{__t('Сообщить о наличии')}}
        </a>
    @else
        @include('products.partials.buy_btn_catalog')
    @endif


</div>
