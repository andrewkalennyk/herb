<!-- login-->
<div class="auth js-auth" id="login" style="display: none">
    <div class="auth__title title">
        <div class="js-auth-title-login">Авторизация</div>
        <div class="js-auth-title-password" style="display: none">Напоминание пароля</div>
        <div class="js-auth-title-register" style="display: none">Регистрация</div>
    </div>
    <div class="auth__row">
        <div class="auth__col">
            @include('popups.forms.login')
            <!-- form reset password-->
            <form class="auth__form js-auth-form-password" action style="display: none">
                <!-- field-->
                <div class="auth__field field">
                    <div class="field__label">Email</div>
                    <div class="field__wrap">
                        <input type="email" required>
                    </div>
                </div>
                <div class="auth__actions">
                    <button class="btn btn_light" type="submit">Получить временный пароль</button><a class="auth__link" href="#" data-toggle="login">Уже не нужно</a>
                </div>
                <div class="auth__foot">
                    <button class="btn btn_black" data-toggle="login">Авторизироваться</button>
                    <button class="btn" data-toggle="register">Зарегистрироваться</button>
                </div>
            </form>
            <!-- form registration-->
            <form class="auth__form js-auth-form-register" action style="display: none">
                <!-- field-->
                <div class="auth__field field">
                    <div class="field__label">Фамилия</div>
                    <div class="field__wrap">
                        <input type="text" required>
                    </div>
                </div>
                <!-- field-->
                <div class="auth__field field">
                    <div class="field__label">Имя</div>
                    <div class="field__wrap">
                        <input type="text" required>
                    </div>
                </div>
                <!-- field-->
                <div class="auth__field field">
                    <div class="field__label">Номер телефона</div>
                    <div class="field__wrap">
                        <input type="text" required>
                    </div>
                </div>
                <!-- field-->
                <div class="auth__field field">
                    <div class="field__label">Email</div>
                    <div class="field__wrap">
                        <input type="email" required>
                    </div>
                </div>
                <!-- field-->
                <div class="auth__field field">
                    <div class="field__label">Пароль</div>
                    <div class="field__wrap">
                        <input type="password" required>
                    </div>
                    <div class="field__hint">Пароль должен содержать не менее 1 символа, не менее одной строчной и одной прописной буквы, а также не менее 1 цифры.</div>
                </div>
                <div class="auth__actions">
                    <!-- switch-->
                    <label class="switch">
                        <input type="checkbox" required><span>Подтверждаю согласие на обработку персональных данных</span>
                    </label>
                </div>
                <div class="auth__foot">
                    <button class="btn btn_black" type="submit">Зарегистрироваться</button>
                    <button class="btn" data-toggle="login">Я уже зарегистрирован</button>
                </div>
            </form>
        </div>
        <div class="auth__col">
            <!-- enter-->
            <div class="enter">
                <div class="enter__title title title_sm">Войти как пользователь</div>
                <div class="enter__wrap"><a class="enter__link" href="#"><img src="img/facebook-color.svg" alt="Facebook">Facebook</a><a class="enter__link" href="#"><img src="img/google-color.svg" alt="Google">Google</a></div>
            </div>
        </div>
    </div>
</div>
