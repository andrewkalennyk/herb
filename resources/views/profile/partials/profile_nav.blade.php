
<div class="profile__nav nav">
    <div class="nav__option">
        <a @if($type == 'profile') class="active" @endif href="{{route('profile')}}">{{__t('Личные данные')}}</a>
    </div>
    <div class="nav__option">
        <a @if($type == 'orders') class="active" @endif href="{{route('profile-orders')}}">{{__t('Мои заказы')}}</a>
    </div>
    <div class="nav__option">
        <a @if($type == 'loyalty') class="active" @endif href="{{route('profile-loyalty')}}">{{__t('Программа лояльности')}}</a>
    </div>
</div>
