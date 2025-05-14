<?php

$DateAndTime = date('m-d-Y h:i:s a', time());  
if(strpos($message, "/off")===0 or strpos($message, "!off")===0 or strpos($message, ".off")===0){
  


if ($gId != '5168647868' && $gId != '5358612076'){
            die();
}
    sendaction($chatId, typing); 
    $uid = explode("|", substr($message, 5));
    $Gater= $uid[0];
    $razon = $uid[1];

    if (empty($Gater)) {
            reply_to($chatId, $message_id,$keyboard,"No estamos detecta el nombre el gater");
            die();
    }
    $db->where("name",trim($Gater));
    $count = $db->getValue("gater_status", "count(*)");
    if($count < 1){
    reply_to($chatId, $message_id,$keyboard,"No exite un Gater en el bot con ese nombre");
    return;
    }
    if(empty($razon)) {
    $razon = 'None';}
    
     $data = Array (
	'status' => 'OFF',
    'reason' => $razon,
	'date' => date("d-m-Y")
	);

	$db->where ('name', $Gater);
	if ($db->update ('gater_status', $data))
        reply_to($chatId, $message_id,$keyboard,"Se Apago el Gater: $Gater | $razon");
    else
    reply_to($chatId, $message_id,$keyboard,'update failed: ' . $db->getLastError());

}

//-------------------------------------------------------------------------------------------------------

    if(strpos($message, "/on")===0 or strpos($message, "!on")===0 or strpos($message, ".on")===0){
    is_duro();
    sendaction($chatId, typing); 
    $uid = explode("|", substr($message, 4));
    $agater= $uid[0];
    $razon = $uid[1];
    if (empty($agater)) {
                reply_to($chatId, $message_id,$keyboard,"<b> - [WARNING] No se esta detectando el id para eliminar de la sección Premium.</b>");
                die();
    }
     $db->where("name",trim($agater));
    $count = $db->getValue("gater_status", "count(*)");
    if($count < 1){
    reply_to($chatId, $message_id,$keyboard,"No exite un Gater en el bot con ese nombre");
    return;
    }
    $data = Array (
	'status' => 'ONLINE',
    'reason' => $razon, 
	'date' => date("d-m-Y")
	);

	$db->where ('name', trim($agater));
	if ($db->update ('gater_status', $data))
        reply_to($chatId, $message_id,$keyboard,"ON : Gater: $agater");
        else
    reply_to($chatId, $message_id,$keyboard,'update failed: ' . $db->getLastError());
        
    }
      
        
?>
