<?php
if(strpos($message, '!bin') === 0 or strpos($message, '/bin') === 0 or strpos($message, '.bin') === 0){
    sendaction($chatId, typing);
    $NameGater ='Bin';
$gateway = '/bin :'.$NameGater;
Contador($gateway);
    deleteprm($userId);
    if($userId == verifniBan($userId)){
        sendMessage($chatId,$keyboard,"<b>🚷- [Status Ban] Te Encuentra ban no puedes hacer uso de ningún comando del bot%0AID : $userId</b>.");
        die();
    }
if ($userId != $Mi_Id ){
    if(False == verifiCharAdmin($chatId)){
    if( False == verifiPremium($userId)){
        if(False == verifiAdmin($userId)){
			if(False == veritimepremium($userId)){
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
    $bin = substr($message, 5);
    $lidsta = substr(($bin), 0,6);
    $res = bininfo($lidsta); 
    $ty = $res['type'];
    $bk = $res['bank'];
    $bd = $res['brand'];
    $sh = $res['level'];
    $ct = $res['country'];
    $emoji = $res['Emoji'];
    
    $nui = infouser($userId);
    $Rank = $nui['apodo'];
if($gId == $Mi_Id){
    $Rank = "Owner";
    $GLOBALS['Rank'] = $Rank;
}elseif($userId == verifiAdmin($userId)){
    $Rank ="Admin";
    $GLOBALS['Rank'] = $Rank;
}elseif($userId == veritimepremium($userId)){
   $Rank = $nui['apodo'];
}elseif($chatId == verifiCharAdmin($chatId)){
    $Rank = "Free User";
    $GLOBALS['Rank'] = $Rank;
}
elseif($userId == verifiUser($userId)){
    $Rank ="Free user";
    $GLOBALS['Rank'] =$Rank;
}


if(empty($res)){
    reply_to($chatId,$message_id,$keyboard,"Ingrese un bin Valido $lidsta");
    exit();
}
$messageidtoedit1 = bot('sendMessage', [
    'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>Waitt</b>"
]);
$messageidtoedit = capture(json_encode($messageidtoedit1), '"message_id":', ',');

    if(empty($res)){
        bot('editMessageText',[
            'chat_id'=>$chatId,
            'message_id'=>$messageidtoedit,
            'text'=>"<b>❌BIN INVALIDO
➤Checked by: <a href='tg://user?id=$gId'>$username</a>
➤Bot by: Thkss</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);
    exit();
    }
    bot('editMessageText',[
        'chat_id'=>$chatId,
        'disable_web_page_preview' => true,
        'message_id'=>$messageidtoedit,
        'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] BIN LOOKUP ♻️: >_ $-Security System ⚠️
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Bin : #Bin$lidsta
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Type: <code>$bd</code> - <code>$sh</code> - <code>$ty</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Bank: <code>$bk</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Country: <code>$ct </code>-[$emoji]
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Checked by: <a href='tg://user?id=$userId'>$username</a>[<code>$Rank</code>]
</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);
        exit();
}
?>