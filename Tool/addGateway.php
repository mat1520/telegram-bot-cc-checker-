<?php


if(strpos($message, "/addg")===0 or strpos($message, "!addg")===0 or strpos($message, ".addg")===0){
    if ($userId == '5168647868'){
          }
          else{
            exit();
          }
$args = explode("|", substr($message, 6));


$nameg = $args[0];
$cmds = $args[1];
$Comment = $args[2];
$rango = $args[3];


$ddd = time();
$date = date('d-m-Y', $ddd);

$data = Array (
"Name" => $nameg,
"cmd" => $cmds,
"State" => "ONLINE",
"Comment" => $Comment,
"Date" => $date,
"Rango" => $rango,

);
$register = $db->insert('GaterFormat', $data);
if($register)
bot('sendMessage', [
        'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
        'text' =>"<b>Gateway Añadido
Name: $nameg
cmd: $cmds
Comment: $Comment
State: ONLINE
Date Ingresado: $date
</b>"
]);
else 
bot('sendMessage', [
        'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
        'text' =>"<b> Error de Datos</b>"
]);
    
}
