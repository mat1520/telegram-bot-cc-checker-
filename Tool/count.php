<?php
list($cmd) = explode(" ", $message);
if ($cmd == "/count" or $cmd == ".count" or $cmd == "!count") {
    if ($userId != '5358612076' AND $userId != '5168647868') {
        die();
    }
    sendaction($chatId, typing);
    $resultados = obtenerTodosLosValores();
    $mensaje = '';
    foreach ($resultados as $fila) {
        $mensaje .= "<b>Gateway->></b> " . $fila['Gateway'] . "|<b> Utlz->> </b> " . $fila['Utlz'] . "\n";
    }
    bot('sendMessage', [
        'chat_id' => $chatId,
        'reply_to_message_id' => $message_id,
        'parse_mode' => 'HTML',
        'text' => "$mensaje"
    ]);
}
