<?php


date_default_timezone_set('America/Bogota');

if(cmd($message, "cred")){
    is_duro();
    $args = explode("|", substr($message, 6));
    $useid = $args[0];
    $crrditos = $args[1];
    $tiem = $args[2];
    if(stripos($tiem,'m')){
          $ddd = add_minutes(time(),$tiem);
        }
        elseif(stripos($tiem,'d')){
          $ddd = add_days(time(),$tiem);
        }
        
    if (empty($useid)){
        reply_to($chatId, $message_id,$keyboard,'<b>No esta ingresando un Id</b>');
        die();
    }
    if (empty($tiem)){
        $tiem = 'NULL';
    }
    if (empty($crrditos)){
        reply_to($chatId, $message_id,$keyboard,'<b>No esta ingresando un la Cantidad de creditos</b>');
        die();
    }
    
    $timeCre = date('d-m-Y h:i:s', $ddd);
    $db->where("userdid", $useid);
    $xi = $db->getOne("creditos");
    $cred = $xi['creditos'];
if($cred >= '0'){
        $ttl = $cred +$crrditos;
if(empty($ddd)){
    $ddd = $xi['Tiempo'];
    $timeCre = date('d-m-Y h:i:s', $ddd);
};
if(empty($ddd)){
    $ddd = null;
    $timeCre = 'null';
};
$data = Array (
"creditos" => $ttl,
'Tiempo' => $ddd,
);
$db->where("userdid", $useid);
$db->update ('creditos', $data);


bot('sendMessage', [
        'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
        'text' =>"<b>Your credits are updated
－－－－－－－－－－－－－－－－
Tenia Creditos Diponible : <code>$cred + $crrditos = $ttl</code>
UserId : <code>$useid</code> 
Time : <code>$timeCre</code> </b>"
]);

bot('sendMessage', [
            'chat_id' =>'-1001963171571',
'parse_mode'=>'HTML',
            'text' =>"New Register
Creditos : $ttl
UserId : <code>$useid</code> 
Time : <code>$timeCre</code> 
<b>User:</b> @$username
<b>ID :</b><code>$userId</code>"
        ]);

return;

};


if(empty($ddd)){
    $timeCre = 'null';
};

$sql = "INSERT INTO creditos (`userdid`,`creditos`,`Tiempo`) VALUES ('$useid','$crrditos','$ddd')";
$err = mysqli_error($roles);
if(mysqli_query($roles, $sql)){
    
    bot('sendMessage', [
        'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
        'text' =>"<b>Your credits are updated
－－－－－－－－－－－－－－－－
Creditos : $crrditos
UserId : <code>$useid</code> 
Time : <code>$timeCre</code> </b>"
]);

bot('sendMessage', [
            'chat_id' =>'-1001963171571',
'parse_mode'=>'HTML',
            'text' =>"New Register
Creditos : $crrditos
UserId : <code>$useid</code> 
Time : <code>$timeCre</code> 
<b>user:</b> @$username
<b>Id:</b> [<code>$userId</code>]"
        ]);
        
    }else{
        bot('sendMessage', [
            'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
            'text' =>"<b>Tu ya estas Registrado en Parte Premium. $uuu</b>"
        ]);
    }
}


if(cmd($message, "ucrd")){
    is_duro();
    $auth = substr($message, 6);
     if(empty($auth)){
        reply_to($chatId, $message_id,$keyboard,'<b>No esta ingresando un Id</b>');
        die();
    }
    $sql = "DELETE FROM creditos WHERE `creditos`.`userdid` = $auth";
            $err = mysqli_error($roles);
        if(mysqli_query($roles, $sql)){
            bot('sendMessage', [
                'chat_id' =>$chatId,
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
                'text' =>"<b>El USERID de la Id ingresada fue elimnado </b>",
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