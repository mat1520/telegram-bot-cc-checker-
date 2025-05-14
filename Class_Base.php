<?php
class Base {
    /**
     * Función para validar y limpiar datos de entrada
     */
    public static function sanitize($input) {
        if (is_array($input)) {
            foreach ($input as $key => $value) {
                $input[$key] = self::sanitize($value);
            }
        } else {
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        }
        return $input;
    }

    /**
     * Función para validar un número de tarjeta usando el algoritmo de Luhn
     */
    public static function validateLuhn($number) {
        $sum = 0;
        $numDigits = strlen($number);
        $parity = $numDigits % 2;

        for ($i = $numDigits - 1; $i >= 0; $i--) {
            $digit = intval($number[$i]);
            if ($i % 2 != $parity) {
                $digit *= 2;
                if ($digit > 9) {
                    $digit -= 9;
                }
            }
            $sum += $digit;
        }

        return ($sum % 10) == 0;
    }

    /**
     * Función para determinar el tipo de tarjeta basado en el número
     */
    public static function getCardType($number) {
        $firstDigit = substr($number, 0, 1);
        $firstTwoDigits = substr($number, 0, 2);
        
        if ($firstDigit == '3') {
            if (in_array($firstTwoDigits, ['34', '37'])) {
                return 'amex';
            }
        } elseif ($firstDigit == '4') {
            return 'visa';
        } elseif ($firstDigit == '5') {
            if (in_array($firstTwoDigits, ['51', '52', '53', '54', '55'])) {
                return 'mastercard';
            }
        }
        
        return 'unknown';
    }

    /**
     * Función para formatear un número de tarjeta (mostrar solo últimos 4 dígitos)
     */
    public static function formatCardNumber($number) {
        $length = strlen($number);
        if ($length < 4) {
            return $number;
        }
        return str_repeat('*', $length - 4) . substr($number, -4);
    }
}