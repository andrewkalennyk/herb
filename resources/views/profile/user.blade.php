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
            <!-- account-->
            <form class="account js-account" action="" data-action="{{route('profile-save')}}">
                <div class="account__col">
                    <div class="account__preview">
                        <img src="/img/content/image-7.jpg" alt="Avatar">
                    </div>
                    <div class="account__upload">{{__t('Изменить фото')}}
                        <input type="file" name="image">
                    </div>
                </div>
                <div class="account__col">
                    <div class="account__info">
                        <div class="account__line">
                            <div class="account__cell">{{__t('Имя')}}:</div>
                            <div class="account__cell">
                                <input class="account__input" type="text" value="{{$user->first_name}}" name="first_name" readonly>
                            </div>
                        </div>
                        <div class="account__line">
                            <div class="account__cell">{{__t('Отчество')}}:</div>
                            <div class="account__cell">
                                <input class="account__input" type="text" value="{{$user->patronymic_name}}" name="patronymic_name" readonly>
                            </div>
                        </div>
                        <div class="account__line">
                            <div class="account__cell">{{__t('Фамилия')}}:</div>
                            <div class="account__cell">
                                <input class="account__input" type="text" value="{{$user->last_name}}" name="last_name" readonly>
                            </div>
                        </div>
                        <div class="account__line">
                            <div class="account__cell">{{__t('Дата рождения')}}:</div>
                            <div class="account__cell">
                                <input class="account__input" type="text" value="{{$user->date_birth}}" name="date_birth" readonly>
                            </div>
                        </div>
                        <div class="account__line mt">
                            <div class="account__cell">{{__t('Телефон')}}:</div>
                            <div class="account__cell">
                                <input class="account__input" type="text" value="{{$user->phone}}" name="phone" readonly>
                            </div>
                        </div>
                        <div class="account__line">
                            <div class="account__cell">E-mail:</div>
                            <div class="account__cell">
                                <input class="account__input" type="email" disabled value="{{$user->email}}" name="email" readonly>
                            </div>
                        </div>
                        {{--<div class="account__line">
                            <div class="account__cell">{{__t('Город')}}:</div>
                            <div class="account__cell">Киев</div>
                        </div>
                        <div class="account__line">
                            <div class="account__cell">{{__t('Адрес доставки')}}:</div>
                            <div class="account__cell">пр-т Победы 20., кв. 3</div>
                        </div>--}}
                    </div>
                    <div class="account__actions js-account-actions">
                        <button class="btn js-account-change" type="button">{{__t('Изменить')}}</button>
                        <button class="btn btn_black" type="button" data-fancybox data-src="#change-password" data-touch="false">{{__t('Изменить пароль')}}</button>
                    </div>
                    <div class="account__actions account__actions_save js-account-actions-save">
                        <button class="btn btn_black" type="submit">{{__t('Сохранить')}}</button>
                        <button class="btn js-account-cancel" type="button">{{__t('Отменить')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('after_script')
    <script src="/js/profile.js"></script>
@stop
