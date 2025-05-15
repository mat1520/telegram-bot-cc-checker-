<?php
// common.php: Funciones y clases compartidas para todos los gateways

// Placeholder de clase CurlX (debes pegar aquí la implementación real de CurlX)
class CurlX {
    // ... implementación real aquí ...
}

// Funciones auxiliares y parser universal
function cleanData($input) {
    $input = str_replace(['CVV2', 'cvv2'], ' ', $input);
    $input = preg_replace("/\r|\n/", ' ', $input);
    $input = preg_replace("/[^0-9]/", ' ', $input);
    $input = preg_replace('/\s+/', ' ', $input);
    $input = trim($input, ' ');
    return $input;
}

function Parser1($input) {
    $input = cleanData($input);
    $input = explode(' ', $input);
    $card = [];
    if (NumberLeng($input[0])) {
        $card['card'] = $input[0];
    } elseif (NumberLeng($input[1])) {
        $card['card'] = $input[1];
    } elseif (NumberLeng($input[2])) {
        $card['card'] = $input[2];
    } elseif (NumberLeng($input[3])) {
        $card['card'] = $input[3];
    } elseif (NumberLeng($input[4])) {
        $card['card'] = $input[4];
    } elseif (NumberLeng($input[5])) {
        $card['card'] = $input[5];
    }
    if (isset($card['card']) && $card['card'][0] == 3) {
        $card['Amex'] = true;
    } else {
        $card['Amex'] = false;
    }
    if(Is_ValidMes($input[0])) {
        $card["MES"] = $input[0];
    } elseif(Is_ValidMes($input[1])) {
        $card["MES"] = $input[1];
    } elseif(Is_ValidMes($input[2])) {
        $card["MES"] = $input[2];
    } elseif(Is_ValidMes($input[3])) {
        $card["MES"] = $input[3];
    } elseif(Is_ValidMes($input[4])) {
        $card["MES"] = $input[4];
    }
    if(is_valid_year($input[0])) {
        $card["ANO"] = $input[0];
    } elseif(is_valid_year($input[1])) {
        $card["ANO"] = $input[1];
    } elseif(is_valid_year($input[2])) {
        $card["ANO"] = $input[2];
    } elseif(is_valid_year($input[3])) {
        $card["ANO"] = $input[3];
    } elseif(is_valid_year($input[4])) {
        $card["ANO"] = $input[4];
    }
    if(isset($card["Amex"]) && $card["Amex"] == true) {
        if (strlen($input[0]) == 4 && $input[0] != $card["ANO"]) {
            $card["CVV"] = $input[0];
        } elseif (strlen($input[1]) == 4 && $input[1] != $card["ANO"]) {
            $card["CVV"] = $input[1];
        } elseif (strlen($input[2]) == 4 && $input[2] != $card["ANO"]) {
            $card["CVV"] = $input[2];
        } elseif (strlen($input[3]) == 4 && $input[3] != $card["ANO"]) {
            $card["CVV"] = $input[3];
        } elseif (strlen($input[4]) == 4 && $input[4] != $card["ANO"]) {
            $card["CVV"] = $input[4];
        }
        if(strlen($input[0]) == 3) {
            $card["CVV"] = $input[0];
        } elseif (strlen($input[1]) == 3) {
            $card["CVV"] = $input[1];
        } elseif (strlen($input[2]) == 3) {
            $card["CVV"] = $input[2];
        } elseif (strlen($input[3]) == 3) {
            $card["CVV"] = $input[3];
        } elseif (strlen($input[4]) == 3) {
            $card["CVV"] = $input[4];
        }
    }
    if (count($card) < 5) {
        $card['valid'] = "ERROR";
    }
    return $card;
}

function is_valid_year($ano) {
    if (strlen($ano) == 4 || strlen($ano) == 2) {
        if ($ano >= 23 && $ano <= 40 || $ano >= 2023 && $ano <= 2040) return true;
        return false;
    } else {
        return false;
    }
}

function Is_ValidMes($mes) {
    if (strlen($mes) <= 2) {
        if ($mes >= 1 && $mes <= 12) return true;
        return false;
    } else {
        return false;
    }
}

function TypeCard($input) {
    if($input[0] >= 3 && $input[0] <= 6) return true;
    return false;
}

function NumberLeng($input) {
    if(TypeCard($input)) {
        if ($input[0] == 3) {
            if (strlen($input) == 15) return true;
        } else {
            if (strlen($input) == 16) return true;
            return false;
        }
    }
    return false;
}

// Otras funciones auxiliares necesarias (rotate, socks5, bininfo, reply_to, bot, etc.)
// ... 

// Prototipos de funciones auxiliares universales (rellenar según necesidad real)
if (!function_exists('rotate')) { function rotate() { return null; } }
if (!function_exists('socks5')) { function socks5() { return null; } }
if (!function_exists('bininfo')) { function bininfo($bin) { return []; } }
if (!function_exists('reply_to')) { function reply_to() { } }
if (!function_exists('bot')) { function bot() { } }
if (!function_exists('sendaction')) { function sendaction() { } }
if (!function_exists('bannedbin')) { function bannedbin() { return false; } }
if (!function_exists('is_gateroff')) { function is_gateroff() { } }
if (!function_exists('is_premium')) { function is_premium() { } }
if (!function_exists('deleteprm')) { function deleteprm() { } }
if (!function_exists('Contador')) { function Contador() { } }
if (!function_exists('IS_BANNED')) { function IS_BANNED() { } }
if (!function_exists('verifiAdmin')) { function verifiAdmin() { return false; } }
if (!function_exists('veritimepremium')) { function veritimepremium() { return false; } }
if (!function_exists('verifiCharAdmin')) { function verifiCharAdmin() { return false; } }
if (!function_exists('verifiUser')) { function verifiUser() { return false; } }
if (!function_exists('antispamCheck')) { function antispamCheck() { return false; } }
if (!function_exists('antispamCheckperemium')) { function antispamCheckperemium() { return false; } }
if (!function_exists('infouser')) { function infouser() { return ['apodo'=>'']; } }
if (!function_exists('AntiScript')) { function AntiScript() { } }
if (!function_exists('is_Antispma')) { function is_Antispma() { } }
if (!function_exists('Dcred')) { function Dcred() { } }
if (!function_exists('deltecred')) { function deltecred() { } }
if (!function_exists('capture')) { function capture() { return null; } }
if (!function_exists('multiexplode')) { function multiexplode($delims, $string) { return explode($delims[0], $string); } }
if (!function_exists('Luhn')) { function Luhn($cc) { return true; } }
if (!function_exists('GetStr')) { function GetStr($string, $start, $end) { return ''; } }
if (!function_exists('getStr')) { function getStr($string, $start, $end) { return ''; } }
if (!function_exists('clean')) { function clean($str) { return $str; } }
if (!function_exists('checkWebhook')) { function checkWebhook() { return true; } }
if (!function_exists('processCard')) { function processCard($card) { return ''; } }
if (!function_exists('processCallback')) { function processCallback($chat_id, $data) { return ''; } }
if (!function_exists('Command')) { function Command($msg) { return ['command'=>'','data'=>'']; } } 