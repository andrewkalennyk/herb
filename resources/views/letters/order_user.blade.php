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
                <p>Заказ № <strong>{{$order->id}}</strong></p>
                <p>В близжайшее время с вами свяжется менеджер! </p>
            </td>
        </tr>
    </table>
@stop
