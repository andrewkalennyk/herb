<form class="auth__form js-auth-form-register register-form" action  data-action="{{route('profile-register')}}" style="display: none">
    <!-- field-->
    <div class="auth__field field">
        <div class="field__label">{{__t('Фамилия')}}</div>
        <div class="field__wrap">
            <input type="text" required name="last_name">
        </div>
    </div>
    <!-- field-->
    <div class="auth__field field">
        <div class="field__label">{{__t('Имя')}}</div>
        <div class="field__wrap">
            <input type="text" required name="first_name">
        </div>
    </div>
    <!-- field-->
    <div class="auth__field field">
        <div class="field__label">{{__t('Номер телефона')}}</div>
        <div class="field__wrap">
            <input type="text" name="phone" required>
        </div>
    </div>
    <!-- field-->
    <div class="auth__field field">
        <div class="field__label">Email</div>
        <div class="field__wrap">
            <input type="email" name="email" required>
        </div>
    </div>
    <!-- field-->
    <div class="auth__field field">
        <div class="field__label">{{__t('Пароль')}}</div>
        <div class="field__wrap">
            <input type="password" name="password" required>
        </div>
        <div class="field__hint">{{__t('Пароль должен содержать не менее 1 символа, не менее одной строчной и одной прописной буквы, а также не менее 1 цифры.')}}</div>
    </div>
    <div class="auth__field field">
        <div class="field__label">{{__t('Подтверждение пароля')}}</div>
        <div class="field__wrap">
            <input type="password" name="password_confirmation" required>
        </div>
    </div>
    <div class="auth__actions">
        <!-- switch-->
        <label class="switch">
            <input type="checkbox" name="is_agree" required>
            <span>{{__t('Подтверждаю согласие на обработку персональных данных')}}</span>
        </label>
    </div>
    <div class="auth__actions error-message-registration"></div>
    <div class="auth__foot">
        <button class="btn btn_black" type="submit">{{__t('Зарегистрироваться')}}</button>
        <button class="btn" data-toggle="login">{{__t('Я уже зарегистрирован')}}</button>
    </div>
</form>

<style>
    .error-message-registration {
        color: red;
        margin-top: 30px;
        display: none;
    }
</style>
