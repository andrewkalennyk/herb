@extends('layouts.letter')

@section('main')
    <table border="0"
           style="background-color:#fff;
                      color: #444;
                      width: 600px;
                      margin: 0 auto;
                      border-bottom-width: 1px;
                      border-bottom-style: solid;
                      border-bottom-color: #ddd;
                      font-family: Arial, Helvetica, sans-serif;"
           cellpadding="30" cellspacing="0"  width="600">
        <tr>
            <td colspan="2">
                <p>
                    Добро пожаловать! Вы успешно зарегистрировались!
                </p>
                <p>
                    Для завершения регистрации пройдите по ссылке!
                </p>
                <a href="{{route('profile-activate', ['code' => $activation->code, 'email' => $user->email])}}">Сcылка</a>
            </td>
        </tr>
    </table>
@stop
