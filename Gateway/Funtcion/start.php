<?php


$imagenes = array(); 
    $imagenes[0] = 'https://graph.org/file/d0581871c11b5921dc9e2.jpg'; 

    $i = rand(0, 0); 
 
    $photo = $imagenes[$i];
    if (strpos($message, "/start")===0 or strpos($message, "!start")===0 or strpos($message, ".start")===0){
    sendaction($chatId, typing);
  
    date_default_timezone_set('America/New_York'); // Set the default timezone to America/New_York
    $currentTime = date("h:i A"); // Get the current time in the default timezone
    $flag = "🇺🇸"; // Flag of the United States
    
    bot('sendMessage', [
        'chat_id' =>$chatId,
        'reply_to_message_id'=>$message_id,
        'text' =>"<b>👺Hey You <a href='tg://user?id=$gId'>$firstname</a>[<code>$userId</code>]\nWelcome, to see my commands use /cmds\nCurrent time in Florida: $currentTime $flag</b>",
        'parse_mode'=>'HTML',
        'reply_markup'=> json_encode(['inline_keyboard'=>[
            [['text'=>"Group",'url'=>"https://t.me/ritagroupOfc"]]
            ],'resize_keyboard'=>true])
        ]);    
}

if (strpos($message, "/cmds")===0 or strpos($message, "!cmds")===0 or strpos($message, ".cmds")===0){
    $phpversion = PHP_VERSION;
 
$idioma_cambiar = IdiomaUser($gId);
if(empty($idioma_cambiar)){
  $idioma_cambiar = 'en';
}


$gd = $db->getValue("gater_status", "count(*)");

$photo = $imagenes[$i];
        bot('sendPhoto',[
            'chat_id'=>$chatId,
            'caption'=>traducir("<b>👋Click on the different buttons that I offer to have more information about my different commands.\n Gateway Total Disponibles : $gd </b>", $idioma_cambiar),
            'parse_mode'=>'HTML',
            'photo'=>$photo,
            'reply_to_message_id'=>$message_id,
            'parse_mode'=>'HTML',
            'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>'«'.traducir("Gateway",$idioma_cambiar).'»','callback_data'=>"tpgate"],
                ['text'=> '«'.traducir("tools",$idioma_cambiar).'»','callback_data'=>"tool"]],
                [['text'=>"«Language»",'callback_data'=>"Language"]],
                ],'resize_keyboard'=>true])
            ]);
        }


       
?>