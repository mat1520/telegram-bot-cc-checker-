<?php




list($cmd) = explode(" ", $message);
if (in_array($cmd, array("/apo", ".apo", "!apo"))) {    
    if ($gId != '5754215978' && $gId != $Mi_Id) {
        die();
    }
    $args = explode("|", substr($message, 4));
    $useid = $args[0];
    $apodo = $args[1];

    if (empty($useid) || empty($apodo)) {
        reply_to($chatId, $message_id, $keyboard, "<b>No ha ingresado todos los datos requeridos</b>");
        die();
    }

    $sql = "UPDATE prmiumtime SET apodo = ? WHERE userid = ?";
    $stmt = mysqli_prepare($roles, $sql);
    mysqli_stmt_bind_param($stmt, "si", $apodo, $useid);
    $result21 = mysqli_stmt_execute($stmt);

    if ($result21) {
        bot('sendMessage', [
            'chat_id' => $chatId,
            'reply_to_message_id' => $message_id,
            'parse_mode' => 'HTML',
            'text' => "<b>Se ha renombrado $useid a $apodo</b>"
        ]);
    } else {
        bot('sendMessage', [
            'chat_id' => $chatId,
            'reply_to_message_id' => $message_id,
            'parse_mode' => 'HTML',
            'text' => "<b>Ha ocurrido un error al renombrar $useid a $apodo</b>"
        ]);
    }
}


list($cmd) = explode(" ", $message);
if ($cmd == "/aps" or $cmd == ".aps" or $cmd == "!aps") {
    if ($gId != '5754215978') {
        if ($gId != $Mi_Id) {
            die();
        }
    }

    $args = explode("|", substr($message, 4));
    $useid = $args[0];
    $Tiempo = $args[1];

    if (!is_numeric($useid)) {
        reply_to($chatId, $message_id, $keyboard, '<b>El Id debe ser numérico</b>');
        die();
    }

    if (!is_numeric($Tiempo)) {
        reply_to($chatId, $message_id, $keyboard, '<b>El tiempo debe ser numérico</b>');
        die();
    }

    $roles = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $stmt = mysqli_prepare($roles, "UPDATE prmiumtime SET Antispma = ? WHERE userid = ?");
    mysqli_stmt_bind_param($stmt, "ii", $Tiempo, $useid);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        bot('sendMessage', [
            'chat_id' => $chatId,
            'reply_to_message_id' => $message_id,
            'parse_mode' => 'HTML',
            'text' => "<b>Tiempo de antispam modificado para el usuario $useid</b>",
        ]);
    } else {
        reply_to($chatId, $message_id, $keyboard, '<b>Error al modificar el tiempo de antispam</b>');
    }

    mysqli_stmt_close($stmt);
    mysqli_close($roles);
}


