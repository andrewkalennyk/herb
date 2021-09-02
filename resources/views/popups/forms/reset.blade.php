<form class="auth__form js-auth-form-password reset-form" action data-action="{{route('profile-reset')}}" style="display: none">
    <!-- field-->
    <div class="auth__field field">
        <div class="field__label">Email</div>
        <div class="field__wrap">
            <input type="email" name="email" required>
        </div>
    </div>
    <div class="auth__actions">
        <button class="btn btn_light" type="submit">{{__t('Получить временный пароль')}}</button>
        <a class="auth__link" href="#" data-toggle="login">{{__t('Уже не нужно')}}</a>
    </div>
    <div class="auth__foot">
        <button class="btn btn_black" data-toggle="login">{{__t('Авторизироваться')}}</button>
        <button class="btn" data-toggle="register">{{__t('Зарегистрироваться')}}</button>
    </div>
</form>
