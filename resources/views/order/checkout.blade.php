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
                                <a class="active" href="javascript:void(0)">{{__t('Я новый покупатель')}}</a>
                            </div>
                            <div class="nav__option">
                                <a href="javascript:void(0)">{{__t('Я постоянный покупатель')}}</a>
                            </div>
                        </div>
                        <div class="checkout__form">
                            <!-- field-->
                            <div class="field">
                                <div class="field__label">{{__t('Имя')}}</div>
                                <div class="field__wrap">
                                    <input type="text" name="first_name" value="{{ user_prop($user,'first_name') }}">
                                </div>
                            </div>
                            <!-- field-->
                            <div class="field">
                                <div class="field__label">{{__t('Фамилия')}}</div>
                                <div class="field__wrap">
                                    <input type="text" name="last_name" value="{{ user_prop($user,'last_name') }}">
                                </div>
                            </div>
                            <!-- field-->
                            <div class="field">
                                <div class="field__label">{{__t('Телефон')}}</div>
                                <div class="field__wrap">
                                    <input type="text" name="phone" value="{{ user_prop($user,'phone') }}">
                                </div>
                            </div>
                            <!-- field-->
                            <div class="field">
                                <div class="field__label">{{__t('Город')}}</div>
                                <div class="field__wrap">
                                    <input type="text" name="city">
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
                                <tr>
                                    <td><a class="order__preview"><img src="img/content/product-1.jpg" alt="Product 1"/></a></td>
                                    <td><a class="order__title title" href="#">Название товара</a>
                                        <div class="order__param">100г.</div>
                                    </td>
                                    <td>
                                        <!-- value-->
                                        <div class="value">
                                            <button class="value__minus" type="button">-</button>
                                            <input class="value__input" type="text" value="1"/>
                                            <button class="value__plus" type="button">+</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="order__price">350&nbsp;грн</div>
                                    </td>
                                    <td>
                                        <button class="order__remove">
                                            <svg class="icon icon-trash">
                                                <use xlink:href="#icon-trash"></use>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a class="order__preview"><img src="img/content/product-1.jpg" alt="Product 1"/></a></td>
                                    <td><a class="order__title title" href="#">Название товара</a>
                                        <div class="order__param">100г.</div>
                                    </td>
                                    <td>
                                        <!-- value-->
                                        <div class="value">
                                            <button class="value__minus" type="button">-</button>
                                            <input class="value__input" type="text" value="1"/>
                                            <button class="value__plus" type="button">+</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="order__price">350&nbsp;грн</div>
                                    </td>
                                    <td>
                                        <button class="order__remove">
                                            <svg class="icon icon-trash">
                                                <use xlink:href="#icon-trash"></use>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
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
                                        <input type="radio" name="delivery_type" value="{{$key}}" {{$loop->first ? 'checked' : ''}}><span>{{__t($type)}}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if(get_pay_types())
                        <div class="checkout__section">
                            <div class="checkout__subtitle title title_md">{{__t('Способ оплаты')}}:</div>
                            <div class="checkout__group">
                                @foreach(get_pay_types() as $key => $type)
                                    <!-- switch-->
                                    <label class="switch">
                                        <input type="radio" name="paid_type" value="{{$key}}" {{$loop->first ? 'checked' : ''}}><span>{{__t($type)}}</span>
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
                                        <a class="btn btn_black" href="javascript:void(0)">{{__t('Использовать')}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="total__row total__row_info">
                                <div class="total__cell">{{__t('К оплате')}}</div>
                                <div class="total__cell">
                                    <div class="total__price">{{$total}}&nbsp;{{__t('грн')}}</div>
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
@stop
