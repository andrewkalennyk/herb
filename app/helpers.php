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
