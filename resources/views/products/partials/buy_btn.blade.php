<button class="card__btn btn" @if($cartProduct && $cartProduct->id == $defaultPrice->id) style="display: none" @endif
        data-price-id="{{$defaultPrice->id}}"
        data-product-id="{{$page->id}}"
>
    <svg class="icon icon-branch">
        <use xlink:href="#icon-branch"></use>
    </svg>
    {{__t('Купить')}}
</button>
<div class="value cart_value" @if(!$cartProduct || ($cartProduct && $cartProduct->id != $defaultPrice->id)) style="display: none" @endif>
    <button class="value__minus" type="button">-</button>
    <input class="value__input" type="text" value="{{$cartProduct ? $cartProduct->qty : '1'}}">
    <input class="value_cart_row_id" type="hidden" value="{{$cartProduct ? $cartProduct->rowId : ''}}">
    <button class="value__plus" type="button">+</button>
</div>
