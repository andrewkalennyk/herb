@extends('layouts.default')

@section('main')
    <!-- center-->
    <div class="center">
        <!-- profile-->
        <div class="profile">
            <div class="profile__title title">{{__t('Личный кабинет')}}</div>

            @include('profile.partials.profile_nav')

            <div class="profile__container">
                <!-- loyalty-->
                <div class="loyalty">
                    <div class="loyalty__content">
                        <p>{{__t('Здесь Вы можете сгенериовать промо-код и поделеиться им с другом.')}}</p>
                        <p>{{__t('Промо-код дает право на единоразовую скидку в размере')}} <strong>{{setting('skidka-po-promokodu')}}%</strong>.</p>
                        <p>{{__t('После того, как Ваш друг использует скидку, Вы также получаете скидку в размере')}} <strong>{{setting('skidka-po-promokodu')}}%</strong> {{__t('на следующий заказ.')}}</p><br>
                        <p>{{__t('Скдики на заказ не суммируются. Новый код можно будет сгенерировать только после того, как будет использован предыдущий.')}}</p>
                    </div>
                    <div class="loyalty__row">
                        <div class="loyalty__col">
                            <div class="title title_sm">{{__t('Ваша скидка')}}:</div>
                        </div>
                        <div class="loyalty__col">{{setting('skidka-po-promokodu')}}%</div>
                    </div>
                    <div class="loyalty__row">
                        <div class="loyalty__col">
                            <button class="btn btn_black generate_promo_code"
                                    data-url="{{route('generate_promo_code')}}">
                                {{__t('Сгенерировать код')}}
                            </button>
                        </div>
                        <div class="loyalty__col last-promo-code">
                            @if($promoCodes->count())
                                {{$promoCodes->first()->code}} ({{$promoCodes->first()->is_used ? __t('Использовано') : __t('Активно')}})
                            @endif
                        </div>
                    </div>

                    @if($promoCodes->count())
                        <ul class="promo-codes-list">
                            @foreach($promoCodes as $promoCode)
                                @if(!$loop->first)
                                    <li>
                                      {{$promoCode->code}} ( {{$promoCode->is_used ? __t('Использовано') : __t('Активно')}} )
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop

@section('after_script')
    <script src="/js/profile.js"></script>

    <script>
        Profile.usedVocabulary = {
            used : '{{__t('Использовано')}}',
            active: '{{__t('Активно')}}'
        };
    </script>
@stop

