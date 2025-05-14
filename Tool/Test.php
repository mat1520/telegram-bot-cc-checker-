<?php
if(strpos($message, "/ws")===0 or strpos($message, "!ws")===0 or strpos($message, ".ws")===0){
    
$Code = Feyk('us');
bot('sendMessage', [
    'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"$Code"
]);

}