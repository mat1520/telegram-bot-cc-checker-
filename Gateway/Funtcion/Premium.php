<?php
$Mi_Id = array("5168647868", "5358612076", "1489276482");

if(strpos($message, "/addadmin")===0 or strpos($message, "!addadmin")===0 or strpos($message, ".addadmin")===0){
    sendaction($chatId, typing); 
        $userIdD = substr($message, 10);
        if (!in_array($gId, $Mi_Id)) {
            sendMessage($chatId, $keyboard, "<b>[STOP] Tu no eres un Owner del bot</b>.");
            die();
        }
        if (empty($userIdD)) {
            reply_to($chatId, $message_id,$keyboard,urlencode("<b>[WARNING] No se esta detectando el id para añadir al admin.</b>"));
            die();
        }

    $sql = "INSERT INTO admin (`iduser`) VALUES ('$userIdD')";
        $err = mysqli_error($rolesroles);
    if(mysqli_query($roles, $sql)){
        $result = "<b>[CORRECT] El Usuario: <code>$userIdD</code> ya se Actualizo a Admin correctamente.</b>";
    }else{
        $result = "<b>Ya ese encuentran ese User en la BD Admin.</b>";
    }
        $response = urlencode("$result");
      reply_to($chatId,$message_id,$keyboard,$result);
    }


if(strpos($message, "/ban")===0 or strpos($message, "!ban")===0 or strpos($message, ".ban")===0){
            sendaction($chatId, typing); 
            is_duro();
                $userId = substr($message, 4);
                if (empty($userId)) {
                    reply_to($chatId, $message_id,$keyboard,"<b> - [WARNING] No se esta detectando el id para Banear.</b>");
                    die();
                }
            $roles = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            $sql = "INSERT INTO ban (`iduser`) VALUES ($userId)";
                $err = mysqli_error($roles);
            if(mysqli_query($roles, $sql)){
                $result = "<b>[CORRECT] El Usuario: <code>$userId</code> a sido Baneado Del bot.</b>";
            }else{
                $result = "<b>Estd User Ya esta Registrado en BD Ban.</b>";
            }
                $response = urlencode("$result");
              reply_to($chatId,$message_id,$keyboard,$result);
            }
#Delete Función

    if(strpos($message, "/unadmin")===0 or strpos($message, "!unadmin")===0 or strpos($message, ".unadmin")===0){
        sendaction($chatId, typing); 
        if (!in_array($gId, $Mi_Id)) {
            sendMessage($chatId, $keyboard, "<b>[STOP] Tu no eres un Owner del bot</b>.");
            die();
        }
            $userId = substr($message, 9);
            if (empty($userId)) {
                reply_to($chatId, $message_id,$keyboard,"<b> - [WARNING] No se esta detectando el id para eliminar de la sección Premium.</b>");
                die();
            }
        $roles = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        $sql = "DELETE FROM admin WHERE iduser =$userId";
            $err = mysqli_error($roles);
        if(mysqli_query($roles, $sql)){
            $result = "<b>[CORRECT] El Usuario: <code>$userId</code> a sido eliminado de la sección  Admkn.</b>";
        }else{
            $result = "<b>No existe en esta Bd Admin.</b>";
        }
            $response = urlencode("$result");
          reply_to($chatId,$message_id,$keyboard,$result);
        }

if(strpos($message, "/unban")===0 or strpos($message, "!unban")===0 or strpos($message, ".unban")===0){
            sendaction($chatId, typing); 
            is_duro();
                $userId = substr($message, 7);
                if (empty($userId)) {
                    reply_to($chatId, $message_id,$keyboard,"<b> - [WARNING] No se esta detectando el id para eliminar de la sección Premium.</b>");
                    die();
                }
            $roles = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            $sql = "DELETE FROM `ban` WHERE `iduser` = $userId";
                $err = mysqli_error($roles);
            if(mysqli_query($roles, $sql)){
                $result = "<b>[CORRECT] El Usuario: <code>$userId</code> a sido Desbaniado</b>";
            }else{
                $result = "<b>No existe en esta Bd ban.</b>";
            }
                $response = urlencode("$result");
              reply_to($chatId,$message_id,$keyboard,$result);
            }
   

 




?>