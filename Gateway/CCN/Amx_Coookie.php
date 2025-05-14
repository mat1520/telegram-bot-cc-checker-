<?php
list($cmd) = explode(" ", $message);
if ($cmd == "/mxc" || $cmd == ".mxc" || $cmd == "!mxc") {
    $cookie = (substr($message, 4));

    $conexion = new mysqli('mysql-arturo.alwaysdata.net', 'arturo', '15112003Aa!', 'arturo_dior');

    // Supongamos que verificarDisponible es una función que devuelve 1 si existe un registro con $gId
    $disponible = verificarDisponible($conexion, $gId);

    if ($disponible == 1) {
        $sql = "UPDATE Amx_cookie SET cookie='$cookie' WHERE userid='$gId';";
        $result = mysqli_query($conexion, $sql);
        if ($result) {
            bot('sendMessage', [
                'chat_id' => $chatId,
                'reply_to_message_id' => $message_id,
                'parse_mode' => 'HTML',
                'text' => "<b>IT WAS SUCCESSFULLY UPDATED</b>"
            ]);
        } else {
            echo 'no se actualizó';
        }
    } else {
        $sql = "INSERT INTO `Amx_cookie`(`userid`, `cookie`) VALUES (?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("ss", $gId, $cookie);
        $stmt->execute();
        bot('sendMessage', [
            'chat_id' => $chatId,
            'reply_to_message_id' => $message_id,
            'parse_mode' => 'HTML',
            'text' => "<b>COMPLETE COOKIE REGISTRATION</b>"
        ]);
    }
}
