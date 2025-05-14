<?php
if(strpos($message, "/addbin")===0 or strpos($message, "!addbin")===0 or strpos($message, ".addbin")===0){
    if ($userId == '5168647868'){
          }
          else{
            exit();
          }
//   sendaction($chatId, typing);
   $lista = substr($message, 8);
   $lista = substr($lista, 0,6);
//   sendMessage1 ($lista);
  $bugbin = file_get_contents('banned.txt');
  $exploded = explode("\n", $bugbin);
  if (!in_array($lista, $exploded)) {
  $add_user = file_get_contents('banned.txt');
  $add_user .= $lista . "\n";
  $test =  file_put_contents('banned.txt', $add_user);
  }
  if($test == true){
    bot('sendMessage', [
        'chat_id' =>$chatId,
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
        'text' =>"<b>$lista Banned Successfully</b>"
    ]);
  }else{
    bot('sendMessage', [
        'chat_id' =>$chatId,
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
        'text' =>"<b>This Bin is already banned </b>"
    ]);
  }
}
