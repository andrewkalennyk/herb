<tr>
    <td>
        <a class="order__preview">
            {!! $product->product->getImg('150','150') !!}
        </a>
    </td>
    <td>
        <a class="order__title title" href="{{$product->product->getUrl()}}">{{$product->product->t('title')}}</a>
        <div class="order__param">{{$product->weight}} {{__t($product->options->unit_type)}}</div>
    </td>
    <td>
        <!-- value-->
        <div class="value checkout_value">
            <button class="value__minus" type="button">-</button>
            <input class="value_cart_row_id" type="hidden" value="{{$product->rowId}}">
            <input class="value__input" type="text" value="{{$product->qty}}"/>
            <button class="value__plus" type="button">+</button>
        </div>
    </td>
    <td>
        <div class="order__price">{{$product->price}}&nbsp;{{__t('грн')}}</div>
    </td>
    <td>
        <button class="order__remove" data-row-id="{{$product->rowId}}">
            <svg class="icon icon-trash">
                <use xlink:href="#icon-trash"></use>
            </svg>
        </button>
    </td>
</tr>
