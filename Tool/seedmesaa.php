<?php
if(strpos($message,"/mgs") === 0){
is_duro();
$lista = substr($message , 4);
reply_to($chatId,$message_id,$keyboard,"Message enviado Exitosamente ala ID:$lista"); 

bot('forwardMessage', [
            'chat_id' => trim($lista),
            'from_chat_id' => $chatId, 
            'message_id' => $r_msg_id,
]);
}