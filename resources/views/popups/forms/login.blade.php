<!-- form authorization-->
<form class="auth__form js-auth-form-login login-form" action data-action="{{route('profile-login')}}">
    <div class="auth__field field">
        <div class="field__label">Email</div>
        <div class="field__wrap">
            <input type="email" required name="email">
        </div>
    </div>
    <div class="auth__field field">
        <div class="field__label">{{__t('Пароль')}}</div>
        <div class="field__wrap">
            <input type="password" required name="password">
        </div>
    </div>
    <div class="auth__actions">
        <label class="switch">
            <input type="checkbox" checked><span>{{__t('Запомнить меня')}}</span>
        </label>
        <a class="auth__link" href="javascript:void(0)" data-toggle="password">{{__t('Напомнить пароль')}}</a>
    </div>
    <div class="auth__foot">
        <button class="btn btn_black" type="submit">{{__t('Авторизироваться')}}</button>
        <button class="btn" data-toggle="register">{{__t('Зарегистрироваться')}}</button>
    </div>
</form>
