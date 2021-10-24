<?php


namespace App\Models;


use LisDev\Delivery\NovaPoshtaApi2;

class NpApi extends NovaPoshtaApi2
{
    public function getWareHouseTypes()
    {
        return $this->npRequest('Address', 'getWarehouseTypes', array(
            'Page' => 0,
        ));
    }

    public function getSettlements($cityRef)
    {
        return $this->npRequest('Address', 'getSettlements', array(
            'SettlementRef' =>  $cityRef,
            'Page' => 0,
        ));
    }

    private function npRequest($model, $method, $params = null)
    {
        // Get required URL
        $url = 'xml' == $this->format
            ? self::API_URI.'/xml/'
            : self::API_URI.'/json/';

        $data = [
            'apiKey' => $this->key,
            'modelName' => $model,
            'calledMethod' => $method,
            'language' => $this->language,
            'methodProperties' => $params,
        ];
        $result = [];

        $post = json_encode($data);

        $ch = curl_init($url);
        if (is_resource($ch)) {
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            $result = curl_exec($ch);
            curl_close($ch);
        }


        return json_decode($result, true);
    }
}
