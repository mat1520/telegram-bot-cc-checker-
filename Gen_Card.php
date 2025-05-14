<?php

class CreditCardGenerator {
    public static function generateCC($number, $mes, $anio, $cvv, $cantidad = 10) {
        $number = self::checkEmpty($number);
        $mes = self::checkEmpty($mes);
        $anio = self::checkEmpty($anio);
        $cvv = self::checkCVV($cvv);
        $type = substr($number, 0, 1);
        $lenght = ($type == 3) ? 15 : 16;
        $cvv_length = ($type == 3) ? 4 : 3;
        $cc = self::generateCCNumbers($cantidad, $number, $lenght, $cvv, $cvv_length, $mes, $anio);
        return $cc;
    }

    private static function generateCCNumbers($cantidad, $card, $card_length, $cvv, $cvv_length, $mes, $anio) {
        $result = '';
        for ($i = 0; $i < $cantidad; $i++) {
            $ccnumber = self::replaceX($card);
            $cc = self::completedNumber($ccnumber, $card_length);
            $anioo = self::generateAnio($anio);
            $mess = self::validMes($mes, $anio);
            $result .= "<code>".$cc."|".$mess."|".$anioo."|".self::generateCVV($cvv_length, $cvv)."</code>\n";
        }
        return $result;
    }

    private static function checkCVV($input) {
        if (empty($input) xor ($input == 'rand' xor $input == 'rnd' xor $input == NULL)) {
            return 'x';
        } else {
            return $input;
        }
    }

    private static function checkEmpty($input) {
        if (empty($input) xor ($input == 'rand' xor $input == 'rnd' xor $input == NULL xor $input == 0)) {
            return NULL;
        } else {
            return $input;
        }
    }

    private static function completedNumber($prefix, $length) {
        $ccnumber = substr(self::replaceX($prefix), 0, $length);
        while (strlen($ccnumber) < ($length - 1)) {
            $ccnumber .= rand(0, 9);
        }
        $ccnumber = substr($ccnumber, 0, $length);
        $sum = 0;
        $pos = 0;
        $reversedCCnumber = strrev($ccnumber);
        while ($pos < $length - 1) {
            $odd = $reversedCCnumber[$pos] * 2;
            if ($odd > 9) {
                $odd -= 9;
            }
            $sum += $odd;
            if ($pos != ($length - 2)) {
                $sum += $reversedCCnumber[$pos + 1];
            }
            $pos += 2;
        }
        $checkdigit = ((floor($sum / 10) + 1) * 10 - $sum) % 10;
        $ccnumber .= $checkdigit;
        return $ccnumber;
    }

    private static function generateCVV($cvv_length, $cvv){
        $cvv  = preg_replace('/\D/', '', $cvv);            ;
        if ($cvv != 'xd') {
            $cvv_gen = $cvv;
            if (strlen($cvv_gen) < $cvv_length) {
                while(strlen($cvv_gen) < ($cvv_length)){
                    $cvv_gen .= rand(0, 9);
                }
            }
            $cvv_gen = substr($cvv_gen, 0, $cvv_length);
        } else {
            $cvv_gen = '';
            while (strlen($cvv_gen) < ($cvv_length)) {
                $cvv_gen .= rand(0, 9);
            }
        }
        $cvv_gen = self::replaceX($cvv_gen);
        return $cvv_gen;
    }

    private static function generateAnio($anio) {

        $anio  = preg_replace('/\D/', '', $anio);            ;
        if(is_numeric($anio) || strlen($anio) == 4 || strlen($anio) == 2){
            if(strlen($anio) == 2){
                return $anio = "20".$anio;
            }else{
                return $anio;
            }
        }
        if(empty($anio) xor ($anio == 'rand' xor $anio == 'rnd' xor $anio == NULL)){
            goto b;
        };
        $year_ac = date('Y');

        if(substr_count($anio, 'x') !== false) {
            $anio_gen = rand($year_ac, $year_ac + 10);
            return $anio_gen;
        };
        
        b:
      
        if (empty($anio)) {
            $anio_gen = rand($year_ac, $year_ac + 10);
        } elseif (strlen($anio) == 2) {
            $century = substr($year_ac, 0, 2);
            $anio_gen = $century . $anio;
        } else {
            $anio_gen = $anio;
        }
        return $anio_gen;
    }

    private static function validMes($mes, $anio) {
        $mes = self::replaceX($mes);
        $anio = self::generateAnio($anio);
        $mess = self::generateMes($mes, $anio);
        if(strlen($mess) < 2){
            $mess = self::generateMes($mes, $anio);
        }
        return $mess;
    }

    private static function generateMes($mes, $anio) {
        $mes  = preg_replace('/\D/', '', $mes);            ;
        $messs = date('m');
        $year_ac = date('Y');

        if(strpos($mes, 'x') !== false) {
            $mes = rand($messs, 12);
            return $mes;
        }
        $mes2 = intval($mes);
        $anio2 = intval($anio);
        if ($anio2 == $year_ac && $mes2 < $messs) {
            goto v;
        }
        if(strlen($mes) == 1 ||strlen($mes) == 2 ||$anio == $year_ac){
            if ($mes < 10) {
                $mes = substr($mes, -1);
           $mes = "0".$mes;
            return $mes;
            }
            $mes = $mes;
            return $mes;
        }
        v:
        if(empty($anio) || $anio == $year_ac) {
            $mes = rand($messs, 12);
        }
        
        if (empty($mes)) {
            $mes = rand(1, 12);
            if($anio == $year_ac){
                $mes = rand($messs, 12);
            }
            if (strlen($mes) == 1) {
                $mes = '0'.$mes;
            }
            return $mes;
        } else {
            if(strlen($mes) == 1) {
                $mes = '0'.$mes;
            }
            return $mes;
        }
    }

    private static function replaceX($input) {
        $lenght = strlen($input);
        $card = '';
        for ($i=0; $i < $lenght; $i++) {
            $card .= str_replace(['x', 'X'], rand(1, 9), $input[$i]);
        }
        $card = substr($card, 0, $lenght);
        return $card;
    }



    
}
   


//6011216418662272
//371796681861534
//4178490021124384