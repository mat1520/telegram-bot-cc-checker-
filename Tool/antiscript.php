<?php 



$cmd = Command($message);
if (strtolower($cmd['command']) == "ge") {
    $cols = array("timedate", "userid");
    $users = $db->get("prmiumtime", null, $cols);

    $mensajeCompleto = "";

    // Verificar si hay usuarios en la base de datos
    if ($db->count > 0) {
        foreach ($users as $user) {
            // Obtener la fecha de la base de datos
            $timedate = $user['timedate'];
            $userid = $user['userid'];

            // Obtener el tiempo actual
            $currentTime = time();
            
            if ($timedate > $currentTime) {
                // Calcular el tiempo restante
                $timeElapsed = $timedate - $currentTime; // Tiempo restante en segundos

                // Convertir segundos en días, horas, minutos y segundos
                $days = floor($timeElapsed / (60 * 60 * 24));
                $hours = floor(($timeElapsed % (60 * 60 * 24)) / (60 * 60));
                $minutes = floor(($timeElapsed % (60 * 60)) / 60);
                $seconds = $timeElapsed % 60;

                $timeRemaining = "Días restantes: $days, Horas: $hours, Minutos: $minutes, Segundos: $seconds";
            } else {
                // Convertir el timestamp a una fecha legible
                $expirationDate = date('Y-m-d H:i:s', $timedate);
                $timeRemaining = "La fecha venció el: $expirationDate";
            }

            // Acumula el mensaje para cada usuario
            $mensajeCompleto .= "Usuario ID: $userid\n";
            $mensajeCompleto .= "Tiempo restante: $timeRemaining\n\n";
        }

        $fileName = 'usuarios_tiempos.txt';
        file_put_contents($fileName, $mensajeCompleto);


        bot('sendDocument', [
            'chat_id' => $chatId,
            'reply_to_message_id' => $message_id,
            'document' => new CURLFile(realpath($fileName)),
            'caption' => 'Detalles de fechas y tiempos de usuarios'
        ]);
        
        // Opcional: Eliminar el archivo después de enviarlo

    } else {
        bot('sendMessage', [
            'chat_id' => $chatId,
            'reply_to_message_id' => $message_id,
            'parse_mode' => 'HTML',
            'text' => 'No hay usuarios con fechas de vencimiento.'
        ]);
    }
}



