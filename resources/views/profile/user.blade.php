@extends('layouts.default')

@section('main')
<!-- center-->
<div class="center">
    <!-- profile-->
    <div class="profile">
        <div class="profile__title title">{{__t('Личный кабинет')}}</div>
        <!-- nav-->
        <div class="profile__nav nav">
            <div class="nav__option">
                <a class="active" href="javascript:void(0)">{{__t('Личные данные')}}</a></div>
            <div class="nav__option"><a href="javascript:void(0)">{{__t('Мои заказы')}}</a></div>
            <div class="nav__option"><a href="javascript:void(0)">{{__t('Программа лояльности')}}</a></div>
        </div>
        <div class="profile__container">
            <!-- account-->
            <div class="account">
                <div class="account__col">
                    <div class="account__preview">
                        <img src="img/content/image-7.jpg" alt="Avatar">
                    </div>
                    <div class="account__upload">{{__t('Изменить фото')}}
                        <input type="file" name="image">
                    </div>
                </div>
                <div class="account__col">
                    <div class="account__info">
                        <div class="account__line">
                            <div class="account__cell">{{__t('Имя')}}:</div>
                            <div class="account__cell">{{$user->first_name}}</div>
                        </div>
                        <div class="account__line">
                            <div class="account__cell">{{__t('Отчество')}}:</div>
                            <div class="account__cell">{{$user->last_name}}</div>
                        </div>
                        <div class="account__line">
                            <div class="account__cell">{{__t('Фамилия')}}:</div>
                            <div class="account__cell">Тратата</div>
                        </div>
                        <div class="account__line">
                            <div class="account__cell">{{__t('Дата рождения')}}:</div>
                            <div class="account__cell">01.01.2000</div>
                        </div>
                        <div class="account__line mt">
                            <div class="account__cell">{{__t('Телефон')}}:</div>
                            <div class="account__cell">+38 063 333-66-77</div>
                        </div>
                        <div class="account__line">
                            <div class="account__cell">E-mail:</div>
                            <div class="account__cell">{{$user->email}}</div>
                        </div>
                        <div class="account__line">
                            <div class="account__cell">{{__t('Город')}}:</div>
                            <div class="account__cell">Киев</div>
                        </div>
                        <div class="account__line">
                            <div class="account__cell">{{__t('Адрес доставки')}}:</div>
                            <div class="account__cell">пр-т Победы 20., кв. 3</div>
                        </div>
                    </div>
                    <div class="account__actions">
                        <button class="btn">{{__t('Изменить')}}</button>
                        <button class="btn btn_black">{{__t('Изменить пароль')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
