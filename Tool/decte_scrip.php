<?php
list($cmd) = explode(" ", $message);
if ($cmd == "/tru" or $cmd == ".tru" or $cmd == "!tru") {

function User_Antip($user_id,$db){
    $stmt = $db->prepare('SELECT * FROM antispma_v2 WHERE userd_id = ?');
    $stmt->execute([$user_id]);
    $usuario = $stmt->fetch();
    return $usuario;
}

function AntispmaV2($user_id,$db){
    $usuario = User_Antip($user_id,$db);
    if (!$usuario) {
            $time = time();
            $stmt = $db->prepare('INSERT INTO antispma_v2 (last_chk, userd_id, Status) VALUES (?, ?, ?)');
            $stmt->execute([time(), $user_id, 'False']);
            return false;
        }else{
            if (time() - $usuario['last_chk'] > 20) {
                    $stmt = $db->prepare('UPDATE antispma_v2 SET last_chk = ?, Status = ? WHERE userd_id = ?');
                    $stmt->execute([time(), 'False', $user_id]);
                    return false;
            }else{
                $stmt = $db->prepare('UPDATE antispma_v2 SET Status = ? WHERE userd_id = ?');
                $stmt->execute(['True', $user_id]);
                return 20 - (time() - $usuario['last_chk']);
            }
            
    }
}
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
$userStatus = User_Antip($userId, $db);
if($userStatus['Status'] == 'True') {
    $antiSpamTime = AntispmaV2($userId, $db);
    reply_to($chatId, $messageId, $keyboard, "<b>[ANTI SPAM] Inténtalo de nuevo después de $antiSpamTime segundos</b>");
}else{
    reply_to($chatId, $messageId, $keyboard, "<b>No tiene antispamas  </b>");
}
}
