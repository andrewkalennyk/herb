<!-- login-->
<div class="auth js-auth" id="login" style="display: none">
    <div class="auth__title title">
        <div class="js-auth-title-login">{{__t('Авторизация')}}</div>
        <div class="js-auth-title-password" style="display: none">{{__t('Напоминание пароля')}}</div>
        <div class="js-auth-title-register" style="display: none">{{__t('Регистрация')}}</div>
    </div>
    <div class="auth__row">
        <div class="auth__col">
            @include('popups.forms.login')
            <!-- form reset password-->
            @include('popups.forms.reset')
            <!-- form registration-->
            @include('popups.forms.register')
        </div>
        <div class="auth__col">
            <!-- enter-->
            <div class="enter">
                <div class="enter__title title title_sm">{{__t('Войти как пользователь')}}</div>
                <div class="enter__wrap">
                    <a class="enter__link" href="{{ url('auth/facebook') }}">
                        <img src="{{asset('/img/facebook-color.svg')}}" alt="Facebook">Facebook</a>
                    <a class="enter__link" href="#">
                        <img src="/img/google-color.svg" alt="Google">Google</a></div>
            </div>
        </div>
    </div>
</div>
