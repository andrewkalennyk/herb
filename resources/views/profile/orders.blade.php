@extends('layouts.default')

@section('main')
    <!-- center-->
    <div class="center">
        <!-- profile-->
        <div class="profile">
            <div class="profile__title title">{{__t('Личный кабинет')}}</div>
            <!-- nav-->
            @include('profile.partials.profile_nav')

            <div class="profile__container">
                <!-- orders-->
                <div class="orders">
                    <div class="orders__head">
                        <div class="orders__row">
                            <div class="orders__cell">{{__t('Номер заказа')}}</div>
                            <div class="orders__cell">{{__t('Дата')}}</div>
                            <div class="orders__cell">{{__t('Статус')}}</div>
                            <div class="orders__cell">{{__t('Сумма')}}</div>
                            <div class="orders__cell"></div>
                        </div>
                    </div>
                    <div class="orders__body">
                        @if($orders->count())
                            @foreach($orders as $order)
                                <div class="orders__row">
                                    <div class="orders__cell">
                                        <div class="orders__label">{{__t('Номер заказа')}}</div>
                                        <div class="orders__content">{{str_pad($order->id, 10, '0', STR_PAD_LEFT)}}</div>
                                    </div>
                                    <div class="orders__cell">
                                        <div class="orders__label">{{__t('Дата')}}</div>
                                        <div class="orders__content">{{$order->created_at->format('d.m.Y')}}</div>
                                    </div>
                                    <div class="orders__cell">
                                        <div class="orders__label">{{__t('Статус')}}</div>
                                        <div class="orders__content {{data_get(get_order_types_color(), $order->type)}}">{{__t(data_get(get_order_types(), $order->type))}}</div>
                                    </div>
                                    <div class="orders__cell">
                                        <div class="orders__label">{{__t('Сумма')}}</div>
                                        <div class="orders__content">{{$order->total}} {{__t('грн')}}.</div>
                                    </div>
                                    <div class="orders__cell">
                                        <a class="btn repeat-order"
                                           data-order-id="{{$order->id}}"
                                           data-url="{{route('repeat-order')}}"
                                           href="javascript:void(0)"
                                        >{{__t('Повторить')}}</a></div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('after_script')
    <script src="/js/profile.js"></script>
@stop

