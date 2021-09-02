<?php

namespace App\Http\Controllers\Auth;

use App\Events\ResetPasswordEvent;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ResetRequest;
use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Illuminate\Auth\Events\Registered;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Hash;

class RegisterController
{
    public function register(RegisterRequest $request)
    {
        event(new Registered($this->create($request->all())));
        return [
            'status' => true,
            'message' => __t('Реестрация успешна! Последущие инструкции на почте!')
        ];
    }

    public function activate()
    {
        $data = request()->all();

        if (!empty($data['email']) && !empty($data['code'])) {

            $user = Sentinel::findUserByCredentials(['email' => $data['email']]);
            if ($user) {
                if (Activation::complete($user, $data['code']) || Activation::completed($user)) {
                    Sentinel::login($user, false);
                    return redirect(route('profile'));
                } else {
                    $result = __t("Ошибка. Пользователя код активации не подходит");
                }
            }

            //return View::make('registration::activatingUser', compact("result", "status"));
        }
    }

    public function reset(ResetRequest $request)
    {
        try {
            event(new ResetPasswordEvent($request->input('email')));
            return [ 'status' => true , 'message' => __t('Пароль изменен и отправлен на почту!')];
        } catch (\Exception $e) {
            return ['status' => false, 'message' => $e->getMessage()];
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data) :User
    {
        $data['password'] = Hash::make($data['password']);
        return Sentinel::register($data, false);
    }
}
