<?php
if(strpos($message, "/zip")===0 or strpos($message, "!zip")===0 or strpos($message, ".zip")===0){
sendaction($chatId, typing);
deleteprm($userId);
$Comu = substr($message, 5);
if (empty($Comu)){
        reply_to($chatId, $message_id,$keyboard,'<b>Ingresa un Codigo Postal:</b>');
        die();
    }

if ($userId != $Mi_Id ){
    if($chatId != verifiCharAdmin($chatId)){
    if( $userId != verifiPremium($userId)){
        if($userId != verifiAdmin($userId)){
			if($userId != veritimepremium($userId)){
			bot('sendMessage', [
                'chat_id' =>$chatId,
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
                'text' =>"<b>Hello this chat is not Authorized
❄️ Buy a membership to make use of this commands
═══════════════════════
↯ Contact A Owner or a Seller</b>",
                'reply_markup'=> json_encode(['inline_keyboard'=>[
                    [['text'=>"🝂 𝗥𝗶𝘁𝗮 𝗖𝗵𝗲𝗰𝗸「𝑹𝒚𝒌」 ",'url'=>"https://t.me/+9PVHHRlmIgQ3Yzhh"]]
                    ],'resize_keyboard'=>true])
                ]);       
    die();
}}}}}


$get = file_get_contents("https://zip.getziptastic.com/v2/US/$Comu");
$county = trim(strip_tags(getstr($get, '"county": "','"')));
$postal_code = trim(strip_tags(getstr($get, 'postal_code": "','"')));
$city = trim(strip_tags(getstr($get, '"city": "','"')));
$state = trim(strip_tags(getstr($get, '"state": "','"')));
$state_short = trim(strip_tags(getstr($get, '"state_short": "','"')));
$country = trim(strip_tags(getstr($get, '"country": "','"')));

if (empty(get)){
    bot('sendMessage', [
    'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>Error en la Api</b>"
]);        die();
    }

if ((strpos($get, "A PHP Error was encountered"))){
    bot('sendMessage', [
    'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>No se encuentra ese Pais Disponible</b>"
]);
    die();
}

if (empty($state)){
        reply_to($chatId, $message_id,$keyboard,'<b>ZIP don´t found</b>');
        die();
    }

bot('sendMessage', [
    'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>
📆 ZIP Code Information
－－－－－－－－－－－－－－－－
- County : <code>$county</code>
- Postcode : <code>$postal_code</code>
- City : <code>$city</code>
- State : <code>$state</code>
- State Short : <code>$state_short</code>
- Country : <code>$country</code>
－－－－－－－－－－－－－－－－</b>"
]);
}



?>