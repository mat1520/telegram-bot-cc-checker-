<?php
// ini_set("log_errors", TRUE);
// ini_set("error_log", "./error_log.txt");

ignore_user_abort(true);
// ob_end_clean();
// header("Connection: close\r\n");
// header("Content-Encoding: none\r\n");
// ob_start();
// echo 'Texto que verá el usuario';
// $size = ob_get_length();
// header("Content-Length: $size");
// ob_end_flush();
// flush();

// Si recibimos un POST con JSON, procesamos el mensaje manualmente para pruebas locales
if ($_SERVER['REQUEST_METHOD'] === 'POST' && strpos($_SERVER['CONTENT_TYPE'], 'application/json') !== false) {
    $input = file_get_contents('php://input');
    $update = json_decode($input, true);
    $message = $update['message'] ?? null;

    if ($message) {
        $text = $message['text'] ?? '';
        $card = Parser1($text);

        if (isset($card['valid']) && $card['valid'] === "ERROR") {
            echo "❌ Formato de tarjeta inválido. Use el formato: Número|Mes|Año|CVV";
            exit;
        }

        if (!isset($card['card']) || !isset($card['MES']) || !isset($card['ANO']) || !isset($card['CVV'])) {
            echo "❌ No se pudo extraer la información de la tarjeta. Verifique el formato.";
            exit;
        }

        // Aquí iría la lógica de verificación de la tarjeta
        // Por ahora solo mostramos la información extraída
        $response = "💳 Información de la tarjeta:\n\n";
        $response .= "Número: {$card['card']}\n";
        $response .= "Mes: {$card['MES']}\n";
        $response .= "Año: {$card['ANO']}\n";
        $response .= "CVV: {$card['CVV']}\n";
        $response .= "Tipo: " . ($card['Amex'] ? "American Express" : "Visa/Mastercard");

        echo $response;
        exit;
    }
}

// Configurar el directorio raíz
define('ROOT_DIR', __DIR__);

// Incluir los archivos necesarios
require_once ROOT_DIR . '/Telegram.php';
require_once ROOT_DIR . '/CurlX.php';
require_once ROOT_DIR . '/userAgent.php';
require_once ROOT_DIR . '/Class_Base.php';
require_once ROOT_DIR . '/bypass.php';
require_once ROOT_DIR . '/NovaFormat.php';
require_once ROOT_DIR . '/Gen_Card.php';
require_once ROOT_DIR . '/vendor/autoload.php';
require_once ROOT_DIR . '/Capsolver/vendor/autoload.php';

// Configuración del bot
$botToken = "7949646703:AAG7o1_6fIA7UCEK1PwKj1cagyxMUDkiNf4"; // Token del bot
$Mi_Id = "6332406416"; // ID del propietario
$telegram = new Telegram($botToken);

// Función para verificar si el usuario es el propietario
function isOwner($userId) {
    global $Mi_Id;
    return $userId == $Mi_Id;
}

// Funciones esenciales para el bot
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

	if ($card['card'][0] == 3) {
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

    if($card["Amex"] == true) {
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
    } else {
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
        if ($mes >= 01 && $mes <= 12) return true;
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

function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    if (count($str) < 2) {
        return "null"; 
    }
    $str = explode($end, $str[1]);
    if (count($str) < 2) {
        return "null"; 
    }
    return $str[0];
}

function bot($method, $data = []) {
    global $botToken;
    $api_url = "https://api.telegram.org/bot$botToken/$method";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    $result = curl_exec($ch);
    curl_close($ch);
    
    return json_decode($result, true);
}

function reply_to($chatId, $message_id, $keyboard, $message) {
    return bot('sendMessage', [
        'chat_id' => $chatId,
        'text' => $message,
        'reply_to_message_id' => $message_id,
        'parse_mode' => 'HTML',
        'reply_markup' => $keyboard
    ]);
}

// Función para verificar el webhook
function checkWebhook() {
    global $telegram;
    $webhookInfo = $telegram->getWebhookInfo();
    if (isset($webhookInfo['ok']) && $webhookInfo['ok']) {
        return true;
    }
    return false;
}

// Manejo de actualizaciones del webhook
$update = $telegram->getData();
if (!empty($update)) {
    $message = $update['message'] ?? null;
    $callback_query = $update['callback_query'] ?? null;
    
    // Procesar mensajes de texto
    if ($message && isset($message['text'])) {
        $chat_id = $message['chat']['id'];
        $text = $message['text'];
        
        // Comando para verificar el estado del webhook
        if ($text === '/webhook') {
            if (checkWebhook()) {
                $telegram->sendMessage([
                    'chat_id' => $chat_id,
                    'text' => "✅ Webhook está funcionando correctamente!"
                ]);
            } else {
                $telegram->sendMessage([
                    'chat_id' => $chat_id,
                    'text' => "❌ Webhook no está configurado correctamente"
                ]);
            }
            exit;
        }
        
        // Procesar otros mensajes
        $card = Parser1($text);
        
        if (isset($card['valid']) && $card['valid'] === "ERROR") {
            reply_to($chat_id, $message['message_id'], null, "❌ Formato de tarjeta inválido. Use el formato:\nNúmero|Mes|Año|CVV");
            exit;
        }
        
        if (!isset($card['card']) || !isset($card['MES']) || !isset($card['ANO']) || !isset($card['CVV'])) {
            reply_to($chat_id, $message['message_id'], null, "❌ No se pudo extraer la información de la tarjeta. Verifique el formato.");
            exit;
        }
        
        // Procesar la tarjeta con los gateways
        $response = processCard($card);
        reply_to($chat_id, $message['message_id'], null, $response);
    }
    
    // Procesar callback queries
    if ($callback_query) {
        $chat_id = $callback_query['message']['chat']['id'];
        $data = $callback_query['data'];
        processCallback($chat_id, $data);
    }
}

// Función para procesar la tarjeta con los gateways
function processCard($card) {
    $response = "💳 Información de la tarjeta:\n\n";
    $response .= "Número: <code>{$card['card']}</code>\n";
    $response .= "Mes: <code>{$card['MES']}</code>\n";
    $response .= "Año: <code>{$card['ANO']}</code>\n";
    $response .= "CVV: <code>{$card['CVV']}</code>\n";
    $response .= "Tipo: " . ($card['Amex'] ? "American Express" : "Visa/Mastercard") . "\n\n";
    
    // Aquí iría la lógica de verificación con los gateways
    // Por ahora solo mostramos la información básica
    return $response;
}

// Función para procesar callbacks
function processCallback($chat_id, $data) {
    global $telegram;
    // Implementar la lógica de los callbacks aquí
    $telegram->answerCallbackQuery([
        'callback_query_id' => $data,
        'text' => 'Procesando...'
    ]);
}

?>   