<?php


if (! function_exists('url_filter_generate')) {

    function url_filter_generate($param, $value = null)
    {
        $params = array_merge(request()->all(), [$param => $value]);
        $getParams = http_build_query($params);
        $delimiter = $getParams ? '?' : '';
        return url(request()->url() . $delimiter . $getParams);
    }

}

if (! function_exists('rand_passwd')) {

    function rand_passwd($length = 8) {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = []; //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

}

if (! function_exists('user_prop')) {

    function user_prop($user, $property) {
        return !empty($user->$property) ? $user->$property : '';
    }

}

if (! function_exists('get_delivery_types')) {

    function get_delivery_types(): Array {
        return \App\Models\Order::$typePaid;
    }

}

if (! function_exists('get_pay_types')) {

    function get_pay_types(): Array {
        return \App\Models\Order::$typePay;
    }

}

if (! function_exists('get_order_types')) {

    function get_order_types(): Array {
        return \App\Models\Order::$type;
    }

}

if (! function_exists('get_order_types_color')) {

    function get_order_types_color(): Array {
        return \App\Models\Order::$typeColor;
    }

}

if (!function_exists('get_lang_field')) {

    function get_lang_field(string $field): string {
        return app()->getLocale() == 'ru' ? $field : $field . app()->getLocale();
    }

}


