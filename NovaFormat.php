<?php


/**
 * @author Nova
 */
class NovaBot
{
    const VERSION = '0.0.1';


    public static function ShopifyFour(string $str) : string 
    {
        return preg_replace('/^(\d{4})(\d{4})(\d{4})(\d{1,4})$/', '$1+$2+$3+$4', $str);
    }

    public static function CleanNumber(string $str) :string 
    {
        preg_match_all("/(\d{15,16})[\/\s:|]*?(\d{1,2})[\/\s|]*?(\d{2,4})[\/\s|-]*?(\d{3,4})/", $str, $matches);
        $tarjetas = $matches[0];
        return implode("\n", array_slice($tarjetas, 0, 1));
    }

    
    public static function Webtit($string, $first, $second, $third, $fourth)
    {
        $result = '';
        $string = urlencode($string);
        $first = urlencode($first);
        $second = urlencode($second);
    
        for ($i = 1; $i < substr_count($string, $first) + 1; $i++){
          $one = explode($second, explode($first, $string)[$i])[0];
          $two = urlencode(trim(preg_replace('/\s\s+/', '', explode($fourth, explode($third, urldecode($string))[$i])[0])));
          $result .= $one."=".$two.'&';
          };
    
        return rtrim($result, '&');
    }
}