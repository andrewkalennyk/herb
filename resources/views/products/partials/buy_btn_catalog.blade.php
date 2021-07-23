<a class="product__btn btn add_to_cart_catalog_btn" @if($product->is_in_cart) style="display: none" @endif
   data-product-id="{{$product->id}}"
   data-price-id="{{$product->product_price_id}}"
   href="javascript:void(0)">
    <svg class="icon icon-branch">
        <use xlink:href="#icon-branch"></use>
    </svg>
    {{__t('Купить')}}
</a>

<a class="product__btn btn product_btn_in_cart" data-fancybox data-src="#cart" @if(!$product->is_in_cart)) style="display: none" @endif
   href="javascript:void(0)">
    <svg class="icon icon-branch">
        <use xlink:href="#icon-branch"></use>
    </svg>
    {{__t('В корзине')}}
</a>
