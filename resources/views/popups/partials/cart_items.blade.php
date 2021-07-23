@foreach($items as $item)
    <tr>
        <td>
            <a class="order__preview">
                {!! $item->product->getImg('150','150') !!}
            </a>
        </td>
        <td>
            <a class="order__title title" href="{{$item->product->getUrl()}}">{{$item->product->t('title')}}</a>
            <div class="order__param">{{$item->weight}} {{__t($item->options->unit_type)}}</div>
        </td>
        <td>
            <!-- value-->
            <div class="value cart_popup_value">
                <button class="value__minus" type="button">-</button>
                <input class="value_cart_row_id" type="hidden" value="{{$item->rowId}}">
                <input class="value__input" type="text" value="{{$item->qty}}"/>
                <button class="value__plus" type="button">+</button>
            </div>
        </td>
        <td>
            <div class="order__price">{{$item->price}}&nbsp;{{__t('грн')}}</div>
        </td>
        <td>
            <button class="order__remove" data-row-id="{{$item->rowId}}">
                <svg class="icon icon-trash">
                    <use xlink:href="#icon-trash"></use>
                </svg>
            </button>
        </td>
    </tr>
@endforeach
