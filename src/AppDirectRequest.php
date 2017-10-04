<?php
declare(strict_types=1);

namespace adityasetiono\AppDirect;

class AppDirectRequest
{
    public static function send(string $url, string $oauth): AppDirectResponse
    {
        $curl = curl_init($url);
        $header = [
            "Authorization: ${oauth}"
        ];
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FAILONERROR, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        $response = json_decode(json_encode(simplexml_load_string(curl_exec($curl))), true);

        $appDirectResponse = \adityasetiono\util\serialize($response, AppDirectResponse::class);

        return $appDirectResponse;
    }
}