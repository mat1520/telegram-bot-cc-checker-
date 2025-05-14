<?php

date_default_timezone_set('America/Bogota');

$cmd = Command($message);
if (strtolower($cmd['command']) == "padd") {  
$data = $cmd['data'];
 
    if ($gId != '5754215978' || $gId!= '6365131242'){
            if($gId != $Mi_Id){
            die();
        }}
    $args = explode("|", $data);
    $userID = $args[0];
    $timer = $args[1];
    if(stripos($timer,'m')){
      $timerunix = add_minutes(time(),$timer);
    }
    elseif(stripos($timer,'d')){
      $timerunix = add_days(time(),$timer);
    }
    $DateAndTime = date('d-m-Y h:i:s', $timerunix);
        if (empty($userId)) {
            reply_to($chatId, $message_id,$keyboard,"<b> - [WARNING] No se esta detectando el id para añadir al usuario premium.</b>");
            die();
        }
    $sql = "INSERT INTO prmiumtime (`userid`,`timedate`,`apodo`,`Antispma`,`Idioma`) VALUES ($userID,$timerunix,'Premium',15,'en')";
    $err = mysqli_error($roles);
    if(mysqli_query($roles, $sql)){
        bot('sendMessage', [
            'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
            'text' =>"<b>↯ UserID:$userID
🝂 Status: Premium
🝂 AntiSpam - 15s
🝂 NextBilling: <code>$DateAndTime</code> | 🝂 Expired in: $timer (s)</b>"
]);

$claim = clean($userID);
bot('sendMessage', [
            'chat_id' => "$claim",
'parse_mode'=>'HTML',
            'text' =>"<b>su cuenta fue Actualizada a Premium para ver su tiempo asignado Presionen[ /me ]</b>"
        ]);
        
        
bot('sendMessage', [
            'chat_id' =>'-1001963171571',
'parse_mode'=>'HTML',
            'text' =>"<b>
<b>🝂 -UserId:</b><code> $userID</code>
<b>🝂 -Tiempo:</b> [<code>$DateAndTime</code>]</b>"
        ]);
    }else{
        bot('sendMessage', [
            'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
            'text' =>"<b>Tu ya estas Registrado en Parte Premium. $uuu</b>"
        ]);
    }
    }



?>