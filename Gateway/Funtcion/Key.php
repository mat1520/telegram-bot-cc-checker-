<?php

date_default_timezone_set('America/Bogota');
function RandomString($num) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < $num; $i++) {
    $n = rand(0, $alphaLength);
    $pass[] = $alphabet[$n];}
    return implode($pass);}


if(strpos($message, "/gn")===0 or strpos($message, "!gn")===0 or strpos($message, ".gn")===0){
    if ($gId != '1489276482'AND $gId != '5168647868' AND $gId !='5358612076' AND $gId !='2052418868' AND $gId != '5397602098'){

       die();
    }
        $args = explode("|", substr($message, 4));
        $timer = $args[0];
        if(stripos($timer,'m')){
          $timerunix = add_minutes(time(),$timer);
        }
        elseif(stripos($timer,'d')){
          $timerunix = add_days(time(),$timer);
        }elseif(stripos($timer,'h')){
          $timerunix = add_hours(time(),$timer);
        }
        $DateAndTime = date('d-m-Y h:i:s', $timerunix);
    
    $two = RandomString(5);
    $three = RandomString(5);
    $four = RandomString(5);
    $key = 'Seller-'.$two.'-'.$three.'-'.$four.'-'.$username.'';
    $sql = "INSERT INTO createkey (`key`,`timedate`) VALUES ('$key','$timerunix')";
        $err = mysqli_error($roles);
    if(mysqli_query($roles, $sql)){
    bot('sendMessage', [
        'chat_id' =>$chatId,
        'disable_web_page_preview' => true,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
        'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Key Created Successfully: >_ $-Security System ⚠️
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Key: <code>$key</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Plan: <code>Premium</code> | AntiSpam : <code>20s</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Duracion: <code>$DateAndTime</code> | Expired in: $timer (s)
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Ejem: <code>/claim $key</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] BotChk: @RitaaChk_Bot
━━━━━━━━━━━━━━━━
</b>",
'reply_markup'=> json_encode(['inline_keyboard'=>[
    [['text'=>"𝗥𝗶𝘁𝗮 𝗜𝗻𝗳𝗼!",'url'=>"https://t.me/ritabotchk/40"],
    ['text'=>"𝗥𝗶𝘁𝗮 𝗥𝗲𝗳𝗲𝗿𝗲𝗻𝗰𝗶𝗮𝘀!",'url'=>"https://t.me/+HGOyK54a3pAzMTNh"]],
    ],'resize_keyboard'=>true])
]);
bot('sendMessage', [
            'chat_id' =>'-1002025503615',
'parse_mode'=>'HTML',
            'text' =>"Key Generate <code>$key</code> | Expired in: $timer (s)
<b>🝂 -Username:</b> @$username
<b>🝂 -Userid:</b> [<code>$userId</code>]"
        ]);
        
       
    }else{
        bot('sendMessage', [
            'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
            'text' =>"<b>Tu ya estas Registrado en Parte Premium. $uuu</b>",
            'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"𝗥𝗶𝘁𝗮 𝗜𝗻𝗳𝗼!",'url'=>"https://t.me/ritabotchk/40"],
                ['text'=>"𝗥𝗶𝘁𝗮 𝗥𝗲𝗳𝗲𝗿𝗲𝗻𝗰𝗶𝗮𝘀!",'url'=>"https://t.me/+HGOyK54a3pAzMTNh"]],
                ],'resize_keyboard'=>true])
        ]);
    }
}

if(strpos($message, "/neo")===0 or strpos($message, "!neo")===0 or strpos($message, ".neo")===0){
        sendaction($chatId, typing); 
        is_duro();
        $args = explode("|", substr($message, 5));
        $timer = $args[0];
        if(empty($timer) ||empty($args)){
bot('sendMessage', [
                'chat_id' =>$chatId,
                'disable_web_page_preview' => true,
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
                'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Admin Tool: >_ $-Security System ⚠️
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Estas Ingresando el tiempo de la Key mal!
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Ej: <code>/neo 30d</code>
━━━━━━━━━━━━━━━━</b>",
'reply_markup'=> json_encode(['inline_keyboard'=>[
    [['text'=>"𝗥𝗶𝘁𝗮 𝗜𝗻𝗳𝗼!",'url'=>"https://t.me/ritabotchk/40"],
    ['text'=>"𝗥𝗶𝘁𝗮 𝗥𝗲𝗳𝗲𝗿𝗲𝗻𝗰𝗶𝗮𝘀!",'url'=>"https://t.me/+HGOyK54a3pAzMTNh"]],
    ],'resize_keyboard'=>true])
                ]);
        die();
}
        if(stripos($timer,'m')){
          $timerunix = add_minutes(time(),$timer);
        }elseif(stripos($timer,'d')){
          $timerunix = add_days(time(),$timer);
        }elseif(stripos($timer,'h')){
          $timerunix = add_hours(time(),$timer);
        }
        $DateAndTime = date('d/m/Y H:i', $timerunix);
    
    $two = RandomString(4);
    $three = RandomString(4);
    $four = RandomString(4);
    $key = 'RchkBot-'.$two.'-'.$three.'-'.$four.'-Prm';
    $sql = "INSERT INTO createkey (`key`,`timedate`) VALUES ('$key','$timerunix')";
        $err = mysqli_error($roles);
    if(mysqli_query($roles, $sql)){
    bot('sendMessage', [
        'chat_id' =>$chatId,
        'disable_web_page_preview' => true,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
        'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Key Created Successfully: >_ $-Security System ⚠️
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Key: <code>$key</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Plan: <code>Premium</code> | AntiSpam : <code>20s</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Duracion: <code>$DateAndTime</code> | Expired in: $timer (s)
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Ejem: <code>/claim $key</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] BotChk: @RitaaChk_Bot
━━━━━━━━━━━━━━━━
</b>",
'reply_markup'=> json_encode(['inline_keyboard'=>[
    [['text'=>"𝗥𝗶𝘁𝗮 𝗜𝗻𝗳𝗼!",'url'=>"https://t.me/ritabotchk/40"],
    ['text'=>"𝗥𝗶𝘁𝗮 𝗥𝗲𝗳𝗲𝗿𝗲𝗻𝗰𝗶𝗮𝘀!",'url'=>"https://t.me/+HGOyK54a3pAzMTNh"]],
    ],'resize_keyboard'=>true])
]);

bot('sendMessage', [
            'chat_id' =>'-1002025503615',
'parse_mode'=>'HTML',
            'text' =>"Key Generate <code>$key</code> | Expired in: $timer (s)
<b>🝂 -Username:</b> @$username
<b>🝂 -Userid:</b> [<code>$userId</code>]"
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
function timekey($bin){ 
    global $roles; 
    $veripremium = "SELECT timedate FROM createkey WHERE `key`='$bin'"; 
    $res = mysqli_query($roles, $veripremium); 
    if (mysqli_num_rows($res) != 0) { 
        while ($fila = mysqli_fetch_array ($res)) { 
            return $fila['timedate']; 
    } 
}else{
    #logsummary("ERROR");
    return False;
}
}
function verfocarjey($userID){
    global $roles;
    $veripremium = "SELECT * FROM `createkey` WHERE `key`='$userID'";
    $res = mysqli_query($roles, $veripremium);
    if (mysqli_num_rows($res) != 0) {
        return true;
    }else{
        #logsummary("ERROR");
        return False;
    }
}
####################
if(strpos($message, "/claim")===0 or strpos($message, "!claim")===0 or strpos($message, ".claim")===0){
    sendaction($chatId, typing); 
    $keye = substr($message, 7);
     if(empty($keye)){
        reply_to($chatId, $message_id,$keyboard," YOUR KEY IS INVALID.");
        exit();
    }
    if($keye != verfocarjey($keye)){
reply_to($chatId, $message_id,$keyboard,"<b>NO EXISTE LA KEY INGRESADA[INVALIDA]</b>.");
     die();
    }
        $timede = timekey($keye);
        $DateAndTime = date('d-m-Y h:i:s a', $timede);
        

        bot('sendMessage', [
            'chat_id' =>$chatId,
            'disable_web_page_preview' => true,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
            'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] KEY CANJEADA CON EXITO : >_ $-Security System ⚠️
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Key: <code>$keye</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] UserID: <code>$userId</code> | Plan: <code>Premium</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Key Exp: <code>$DateAndTime</code>
━━━━━━━━━━━━━━━━</b>",
        'reply_markup'=> json_encode(['inline_keyboard'=>[
            [['text'=>"Grupo premium",'url'=>"https://t.me/+3IXzSECKftA5ZDcx"],
            ['text'=>"Scrapper privado",'url'=>"https://t.me/+azAcRNhNk79iYjAx"],
            ['text'=>"Guía del chk",'url'=>"https://t.me/+9wVRysgUKPFjYjk5"]],
            ],'resize_keyboard'=>true])
]);
        
        $roles = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        $sql = "INSERT INTO prmiumtime (`userid`,`timedate`,`apodo`,`Antispma`,`Idioma`) VALUES ('$userId','$timede','Premium',20,'es')";
        $err = mysqli_error($roles);
        
bot('sendMessage', [
            'chat_id' =>'-1002025503615',
'parse_mode'=>'HTML',
            'text' =>"<b>
<b>🝂 -key:</b> <code>$keye</code>
<b>🝂 -Username:</b> @$username
<b>🝂 -Userid:</b> [<code>$userId</code>]</b>"
        ]);
    if(mysqli_query($roles, $sql)){
        #logsummary("<b>[CORRECT] El Usuario:$userId a sido Eliminado de Premium.</b>");
        
    } else {
        #logsummary("<b>EL USIARIO NO EXISTE XD</b>");
    }

    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        $sql = "DELETE FROM createkey WHERE `key`='$keye'";
        $err = mysqli_error($conn);
        if (mysqli_query($conn, $sql)) {
            #logsummary("<b>[CORRECT] El Usuario:$userId a sido Eliminado de Premium.</b>");
        } else {
            #logsummary("<b>EL USIARIO NO EXISTE XD</b>");
        }
} 
    

      



?>