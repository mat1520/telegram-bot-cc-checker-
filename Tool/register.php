<?php
if(strpos($message, '!register') === 0 or strpos($message, '/register') === 0 or strpos($message, '.register') === 0){
    sendaction($chatId, typing);
if (veritimepremium($userId)) {
    bot('sendMessage', [
        'chat_id' => $chatId,
        'reply_to_message_id' => $message_id,
        'parse_mode' => 'HTML',
        'text' => "<b>Ya te encuentras registrado 🟩</b>"
    ]);  
    die();
}

$sql = "INSERT INTO userpublic (`iduser`, `username`, `name`) VALUES ($userId, '@$username', '$firstname')";
if (mysqli_query($roles, $sql)) {
    bot('sendMessage', [
        'chat_id' => $chatId,
        'reply_to_message_id' => $message_id,
        'parse_mode' => 'HTML',
        'text' => "<b>Registro completo! 🟩 </b>"
    ]);
} else {
    $error_message = "Error en la consulta SQL: " . mysqli_error($roles);
    bot('sendMessage', [
        'chat_id' => $chatId,
        'reply_to_message_id' => $message_id,
        'parse_mode' => 'HTML',
        'text' => "<b>Ya te encuentras registrado 🟩</b>"
    ]);
}
}