<?php

namespace CodeBugLab\NoonPayment\Helper;
use Illuminate\Http\Request;
if (! function_exists('uplode_image')) {
     function uplode_image($request)
    {

       $name="post-".uniqid().'.'.$request->image->getClientOriginalExtension();
       $request->image->move(public_path('uplodes/posts'),$name);
       return $name;
    }
}

class CurlHelper
{
    public static function post($url, $fields, $header)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_REFERER, 1);

        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public static function get($url, $header)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_REFERER, 1);

        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}