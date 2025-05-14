<?php
if(strpos($message, "/ffs")===0 or strpos($message, "!ffs")===0 or strpos($message, ".ffs")===0){
$code = 'us';
$Code = (Feyk($code));

bot('sendMessage', [
    'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>$Code
]);

}
