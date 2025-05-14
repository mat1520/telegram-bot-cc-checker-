<?php
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

// Incluir las funciones auxiliares
require_once ROOT_DIR . '/index.php';
?> 