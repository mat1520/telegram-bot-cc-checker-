<?php
if(strpos($message,".cdelete") ===0){
    is_duro();
    $auth = substr($message, 8);
     if (empty($auth)){
        reply_to($chatId, $message_id,$keyboard,'<b>No esta ingresando un Id</b>');
        die();
    }
        $dletcha = mysqli_connect("mysql-arturo.alwaysdata.net","arturo","15112003Aa!","arturo_dior");
    $sql = "DELETE FROM gruoptime WHERE `gruoptime`.`gruopid` = $auth";
            $err = mysqli_error($dletcha);
        if(mysqli_query($dletcha, $sql)){
            bot('sendMessage', [
                'chat_id' =>$chatId,
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
                'text' =>"<b>El Chat de la Id ingresada fue elimnado </b>",
                ]);
        }else{
            bot('sendMessage', [
                'chat_id' =>$chatId,
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
                'text' =>"<b>No esxiste en Db</b>",
                ]);
            }
}


if(strpos($message,".pdelete") ===0){
    is_duro();
    $auth = substr($message, 8);
    if (empty($auth)){
        reply_to($chatId, $message_id,$keyboard,'<b>No esta ingresando un Id</b>');
        die();
    }
    $pdelete = mysqli_connect("mysql-arturo.alwaysdata.net","arturo","15112003Aa!","arturo_dior");
    $sql = "DELETE FROM prmiumtime WHERE `prmiumtime`.`userid` = $auth";
            $err = mysqli_error($pdelete);
        if(mysqli_query($pdelete, $sql)){
            bot('sendMessage', [
                'chat_id' =>$chatId,
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
                'text' =>"<b>The USERID > $auth ENTERED WAS CORRECTLY REMOVED FROM THE PREMIUM SECTION </b>",
                ]);
        }else{
            bot('sendMessage', [
                'chat_id' =>$chatId,
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
                'text' =>"<b>THE USER > $auth WHO JUST REQUESTED DOES NOT EXIST IN OUR DB</b>",
                ]);
            }
}


