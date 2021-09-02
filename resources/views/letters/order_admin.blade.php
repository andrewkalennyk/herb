@extends('layouts.letter')

@section('main')
    <table border="0"
           style="background-color:#fff;
                      color: #444;
                      width: 600px;
                      margin: 0 auto;
                      border-bottom-width: 1px;
                      border-bottom-style: solid;
                      border-bottom-color: #ddd;
                      font-family: Arial, Helvetica, sans-serif;"
           cellpadding="30" cellspacing="0"  width="600">
        <tr>
            <td colspan="2">
                <p>Заказ № <strong>{{$order->id}}</strong></p>
                <p>Фамилия: <strong>{{$order->first_name}}</strong></p>
                <p>Имя: <strong>{{$order->last_name}}</strong></p>
                <p>Тип доставки: <strong>{{data_get(get_delivery_types(),$order->delivery_type, '-')}}</strong></p>
                <p>Тип заказа: <strong>{{data_get(get_pay_types(), $order->paid_type, '-')}}</strong></p>
                <p>Оплата пройдена: <strong>{{$order->is_paid ? 'да' : 'нет'}}</strong></p>
                <p>-------------------------</p>
                <h2>Товары</h2>
                @if($products->count())
                    @foreach($products as $product)
                        <p>{{$product->product->t('title')}}</p>
                        <p>Цена: <strong>{{$product->price}}</strong></p>
                        <p>Количество: <strong>{{$product->qty}}</strong></p>
                        <p>Вес/Объем: <strong>{{$product->weight}}</strong></p>
                    @endforeach
                @endif

            </td>
        </tr>
    </table>
@stop
