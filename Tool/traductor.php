<?php
    
list($cmd) = explode(" ", $message);

$allowedCommands = array("/trad", ".trad", "!trad");

if (in_array($cmd, $allowedCommands)) {    
    
    $args = explode(" ", substr($message, strlen($cmd) + 1));
    
    if (empty($args)) {
        reply_to($chatId, $message_id, $keyboard, "<b>No ha ingresado todos los datos requeridos</b>");
        die();
    };


    $idioma_actual = trim($args[0]);
    $txt = trim(implode(" ", array_slice($args, 1, -1)));
    if(empty($txt)){
        $txt = $r_msg;
    }if(empty($txt)){
        $txt = $q_msg;
    }if (empty($txt)) {
        reply_to($chatId, $message_id, $keyboard, "<b>Texto no Introducido</b>");
        die();
    };
    if (empty($idioma_actual)) {
        reply_to($chatId, $message_id, $keyboard, "<b>Idioma no Introducido</b>");
        die();
    };
    
    
 
    

    
    $translatedText = traducir($txt,$idioma_actual);
    
    
    bot('sendMessage', [
        'chat_id' => $chatId,
        'reply_to_message_id' => $message_id,
        'parse_mode' => 'HTML',
        'text' => "$translatedText ",
    ]);
}

