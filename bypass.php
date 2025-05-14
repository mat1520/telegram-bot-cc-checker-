<?php


class BypassV3Invisible {
    private $SITE;
    private $GET;

    public function __construct($SITE, $GET) {
        $this->SITE = $SITE;
        $this->GET = $GET;
    }

    public function bypass() {
        $query = parse_url($this->GET)['query'];
        $site_key = explode('&', $query);
        $key = $site_key[1];
        $URL = "https://www.google.com/recaptcha/api2/anchor?$query";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $URL);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'authority: www.google.com',
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
            'accept-language: en-US,en;q=0.9',
            'referer: ' . $this->SITE . '',
            'sec-fetch-dest: iframe',
            'sec-fetch-mode: navigate',
            'sec-fetch-site: cross-site',
            'upgrade-insecure-requests: 1'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $G_v3 = curl_exec($ch);
        $rtk = $this->getStr($G_v3, '<input type="hidden" id="recaptcha-token" value="', '"');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api2/reload?$key");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'authority: www.google.com',
            'accept: */*',
            'accept-language: en-US,en;q=0.9',
            'content-type: application/x-www-form-urlencoded',
            'origin: https://www.google.com'
        ));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "c=$rtk&reason=q&$key");
        $G_v3 = curl_exec($ch);
        $captcha = $this->getStr($G_v3, '["rresp","', '"');
        return $captcha;
    }

    private function GetStr($string, $start, $end)
    {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
    }
}