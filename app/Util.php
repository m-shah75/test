<?php

namespace App;

class Util
{
    private $url;
    private $request_type;

    public function __construct($url, $request_type)
    {
        $this->url = $url;
        $this->request_type = $request_type;
    }

    public function get_web_page()
    {
        $options = array(
            CURLOPT_CUSTOMREQUEST => $this->request_type, //set request type post or get
            CURLOPT_POST => false, //set to GET
            CURLOPT_COOKIEFILE => "cookie.txt", //set cookie file
            CURLOPT_COOKIEJAR => "cookie.txt", //set cookie jar
            CURLOPT_RETURNTRANSFER => true, // return web page as string
            CURLOPT_HEADER => false, // don't return headers
            CURLOPT_FOLLOWLOCATION => true, // follow redirects
            CURLOPT_ENCODING => "", // handle all encodings
            CURLOPT_AUTOREFERER => true, // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 120, // timeout on connect
            CURLOPT_TIMEOUT => 120, // timeout on response
            CURLOPT_MAXREDIRS => 10, // stop after 10 redirects
        );
        $ch = curl_init($this->url);
        curl_setopt_array($ch, $options);
        $content = curl_exec($ch);
        curl_close($ch);
        $header['content'] = $content;
        return $header['content'];
    }
}











