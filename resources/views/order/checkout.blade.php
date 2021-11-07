@extends('layouts.default')

@section('main')
    <!-- center-->
    <div class="center">
        <!-- checkout-->
        <form class="checkout" action data-action="{{route('order')}}">
            <div class="checkout__title title">{{__t('Оформление заказа')}}</div>
            <input type="hidden" name="user_id" value="{{user_prop($user,'id')}}">
            <input type="hidden" name="total" value="{{$total}}">
            <div class="checkout__row">
                <div class="checkout__col">
                    <div class="checkout__section">
                        <div class="checkout__subtitle title title_md">{{__t('Контактные данные')}}:</div>
                        <!-- nav-->
                        <div class="checkout__nav nav">
                            <div class="nav__option">
                                <a class="active" href="javascript:void(0)" data-customer="new">{{__t('Я новый покупатель')}}</a>
                            </div>
                            <div class="nav__option">
                                <a href="javascript:void(0)" {{!$user ? 'data-fancybox data-src=#login data-touch=false' : ''}} data-customer="often">{{__t('Я постоянный покупатель')}}</a>
                            </div>
                        </div>
                        <div class="checkout__form">
                            <!-- field-->
                            <div class="field">
                                <div class="field__label">{{__t('Имя')}}</div>
                                <div class="field__wrap">
                                    <input type="text" class="changeable" name="first_name" data-value="{{ user_prop($user,'first_name') }}" value="">
                                </div>
                            </div>
                            <!-- field-->
                            <div class="field">
                                <div class="field__label">{{__t('Фамилия')}}</div>
                                <div class="field__wrap">
                                    <input type="text" class="changeable" name="last_name" data-value="{{ user_prop($user,'last_name') }}" value="">
                                </div>
                            </div>
                            <!-- field-->
                            <div class="field">
                                <div class="field__label">{{__t('Телефон')}}</div>
                                <div class="field__wrap">
                                    <input type="text" class="changeable" name="phone" data-value="{{ user_prop($user,'phone') }}" value="">
                                </div>
                            </div>
                            <!-- field-->
                            <div class="field">
                                <div class="field__label">{{__t('Email')}}</div>
                                <div class="field__wrap">
                                    <input type="text" class="changeable" name="email" data-value="{{ user_prop($user,'email') }}" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checkout__section">
                        <div class="checkout__subtitle title title_md">{{__t('Заказ')}}:</div>
                        <!-- order-->
                        <div class="order">
                            <table>
                                <tbody>
                                    @foreach($cart as $product)
                                        @include('order.partials.product')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if(get_delivery_types())
                        <div class="checkout__section">
                            <div class="checkout__subtitle title title_md">{{__t('Способ доставки')}}:</div>

                            <div class="checkout__group">
                                <!-- switch-->
                                @foreach(get_delivery_types() as $key => $type)
                                    <label class="switch">
                                        <input type="radio" name="delivery_type" value="{{$key}}" {{$loop->last ? 'checked' : ''}}><span>{{__t($type)}}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <div class="checkout__section np_section">
                        @if($regions->count())
                            <div class="checkout__group np_region_group">
                                <select name="np_region_id">
                                    <option value="">{{__t('Выберите регион')}}</option>
                                    @foreach($regions as $region)
                                        <option value="{{$region->id}}">{{$region->t('title')}}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                        <div class="checkout__group np_city_group">
                            <select name="np_city_id">
                                <option value="">{{__t('Выберите город')}}</option>
                            </select>
                        </div>
                        <div class="checkout__group np_warehouse_group">
                            <select name="np_warehouse_id">
                                <option value="">{{__t('Выберите отделение')}}</option>
                            </select>
                        </div>
                        <div class="checkout__group np_street_group">
                            <select name="np_street_id">
                                <option value="">{{__t('Выберите улицу')}}</option>
                            </select>
                        </div>
                        <div class="checkout__group np_street_group">
                            <!-- field-->
                            <div class="field">
                                <div class="field__label">{{__t('Дом')}}</div>
                                <div class="field__wrap">
                                    <input type="text" class="changeable" name="house" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(get_pay_types())
                        <div class="checkout__section">
                            <div class="checkout__subtitle title title_md">{{__t('Способ оплаты')}}:</div>
                            <div class="checkout__group">
                                @foreach(get_pay_types() as $key => $type)
                                    <!-- switch-->
                                    <label class="switch">
                                        <input type="radio" name="paid_type" value="{{$key}}" {{$loop->last ? 'checked' : ''}}><span>{{__t($type)}}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
                <div class="checkout__col">
                    <!-- total-->
                    <div class="total">
                        <div class="total__title title title_md">{{__t('Итого')}}:</div>
                        <div class="total__table">
                            <div class="total__row">
                                <div class="total__cell">
                                    <div class="total__gray">{{$cart->count()}} {{__t('товар(a/ов) на сумму')}}</div>
                                </div>
                                <div class="total__cell">
                                    <div class="total__price"> {{$total}}  {{__t('грн')}}</div>
                                </div>
                            </div>
                            <div class="total__row">
                                <div class="total__cell">
                                    <div class="total__gray">{{__t('Стоимость доставки')}}</div>
                                </div>
                                <div class="total__cell">
                                    <div class="total__short">{{__t('По тарифам перевозчика')}}</div>
                                </div>
                            </div>
                            <div class="total__row">
                                <div class="total__cell">
                                    <div class="total__gray"></div>
                                </div>
                                <div class="total__cell">
                                    <div class="total__short">
                                        <a href="javascript:void(0)" class="use_promo">{{__t('Использовать промокод')}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="total__row promo_code_block" style="display: none">
                                <div class="total__cell">
                                    <div class="total__gray field">
                                        <input type="text" name="promo_code">
                                    </div>
                                </div>
                                <div class="total__cell">
                                    <div class="total__short">
                                        <a class="btn btn_black promo_code_btn" data-url="{{route('use-promo')}}" href="javascript:void(0)">{{__t('Использовать')}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="total__row total__row_info">
                                <div class="total__cell">{{__t('К оплате')}}</div>
                                <div class="total__cell">
                                    <div class="total__price {{$discount > 0 ? 'cross' : '' }}" id="total_price">{{$total}}&nbsp;{{__t('грн')}}</div>
                                    <div class="total__price" id="discount_total_price" style="{{$discount > 0 ? '' : 'display: none' }}">
                                        <span class="new_total">{{$discountTotal}}</span>{{__t('грн')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="total__btn btn btn_black" href="javascript:void(0)">{{__t('Заказ подтверждаю')}}</a>
                        <div class="total__msg">{{__t('Подтверждая заказ, я принимаю условия')}} <a href='#'>{{__t('пользовательского соглашения')}}</a></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop

@section('after_script')
    <script src="/js/order.js"></script>
    <script>
        Order.isUser = {{ (bool)$user}};
        Order.cities = {!! $cities->toJson() !!};
        Order.warehouses = {!! $wareHouses->toJson() !!};
        Order.streets = {!! $streets->toJson() !!};
        Order.lang = '{{ app()->getLocale() }}';
    </script>
    <style>
        .cross {
            text-decoration: line-through;
        }
    </style>
@stop
