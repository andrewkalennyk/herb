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
                    Ваш Пароль успешно изменен!
                </p>
                <p>
                    Пароль : {{$password}}
                </p>
            </td>
        </tr>
    </table>
@stop
