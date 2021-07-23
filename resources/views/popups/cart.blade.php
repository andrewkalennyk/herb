<!-- cart-->
<div class="cart" id="cart" style="display: none">
    <div class="cart__body">
        <div class="cart__title title">{{__t('Корзина')}}</div>
        <!-- order-->
        <div class="order">

            <table>
                <tbody class="cart_content">
                    @if($content->count())
                        @include('popups.partials.cart_items', with(['items' => $content]))
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="cart__foot" @if(!$content->count()) style="display: none" @endif>
        <div class="cart__label">{{__t('Итого')}}:</div>
        <div class="cart__total"> <span class="cart_total">{{$total}}</span>  {{__t('грн')}}</div>
        <a class="cart__btn btn" href="{{route('checkout')}}">{{__t('Оформить заказ')}}</a>
    </div>
</div>
