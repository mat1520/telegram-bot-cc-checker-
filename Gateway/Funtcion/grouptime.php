<?php

date_default_timezone_set('America/Bogota');

$anvil = '5358612076';
$nova = '5754215978';

if(strpos($message, "/gropmod")===0 or strpos($message, "!gropmod")===0 or strpos($message, ".gropmod")===0){
    sendaction($chatId, typing); 
    is_duro();
    $args = explode(",", substr($message, 9));
    $userID = $args[0];
    $timer = $args[1];
    $nami = $args[2];
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
    $fdoos = substr($timer, 0,1);
    $link = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $sql = "INSERT INTO gruoptime (`gruopid`,`timedate`,`Name`) VALUES ('$userID','$timerunix','$nami')";
        $err = mysqli_error($link);
    if(mysqli_query($link, $sql)){
        bot('sendMessage', [
            'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
            'text' =>"<b>↯ Group: <code>$userID</code>
🝂 Status: <code>Free User!</code>
🝂 NextBilling: <code>$DateAndTime</code> | 🝂 Expired in: <code>$timer<b>dy(s)</b></code></b>",
'reply_markup'=> json_encode(['inline_keyboard'=>[
    [['text'=>"Rita Info!",'url'=>"https://t.me/ritabotchk/40"],
    ['text'=>"Rita Referencias!",'url'=>"https://t.me/+HGOyK54a3pAzMTNh"]],
    ],'resize_keyboard'=>true])
]);

bot('sendMessage', [
            'chat_id' =>'-1002025503615',
'parse_mode'=>'HTML',
            'text' =>"Group: <code>$userID</code> | Expired in: <code>$timer (s)</code>
<b>🝂 -Username:</b> @$username
<b>🝂 -Userid:</b> [<code>$userId</code>]"
        ]);
        
    }else{
        bot('sendMessage', [
            'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
            'text' =>"<b>Tu ya estas Registrado en Parte Premium.</b>",
            'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"Rita Info!",'url'=>"https://t.me/ritabotchk/40"],
                ['text'=>"Rita Referencias!",'url'=>"https://t.me/+HGOyK54a3pAzMTNh"]],
                ],'resize_keyboard'=>true])
        ]);
    }
}




 if (strpos($message, '.group')===0 or strpos($message, "/group")===0 or strpos($message, '$group')===0){
        deletegroup($chatId);
        $groupStatus = griuppremi($chatId);
    if (empty($groupStatus)) {
        bot('sendmessage', [
            'chat_id' => $chatId,
            'reply_to_message_id' => $message_id,
            'text' => 'The group is not authorized',
        ]);
        return;
    }
    $expiredTime = seg2tiempo($groupStatus - time());

    $defaultRank = 'Free user';
    if ($gId == $Mi_Id) {
        $defaultRank = 'Owner';
    } elseif ($userId == verifiAdmin($userId)) {
        $defaultRank = 'Admin';
    } elseif ($userId == verifiPremium($userId) || $userId == veritimepremium($userId)) {
        $defaultRank = 'Premium';
    } elseif ($chatId == griuppremi($chatId)) {
        $defaultRank = 'Free User';
    }
    $GLOBALS['Rank'] = $defaultRank;
        bot('sendmessage', [
            'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
        'text' =>"<b>🝂 -User: Group Info</b>
<b>🝂 -Userid:</b> [<code>$chatId</code>]
<b>🝂 -Expired in: <code>$expiredTime</code></b>",
'parse_mode'=>'HTML'

]);
}



?>