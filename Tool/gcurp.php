<?php
if(strpos($message, "/gdata")===0 or strpos($message, "!gdata")===0 or strpos($message, ".gdata")===0){

sendaction($chatId, typing);
deleteprm($userId);
$Comu = substr($message, 6);

if ($userId != $Mi_Id ){
    if($chatId != verifiCharAdmin($chatId)){
    if( $userId != verifiPremium($userId)){
        if($userId != verifiAdmin($userId)){
			if($userId != veritimepremium($userId)){
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


$get = file_get_contents("http://192.162.69.227:8081/rand/ritaGod@");
$nombre = trim(strip_tags(getstr($get, '"Nombre(s)": "','"')));
$paterno = trim(strip_tags(getstr($get, '"Paterno": "','"')));
$materno = trim(strip_tags(getstr($get, '"Materno": "','"')));
$sexo = trim(strip_tags(getstr($get, '"Sexo": "','"')));
$nacimiento = trim(strip_tags(getstr($get, '"Nacimiento": "','"')));
$edad = trim(strip_tags(getstr($get, '"Edad": "','"')));
$Estado = trim(strip_tags(getstr($get, '"Estado": "','"')));
$Municipio = trim(strip_tags(getstr($get, '"Municipio": "','"')));
$Calle = trim(strip_tags(getstr($get, '"Calle": "','"')));
$Exterior = trim(strip_tags(getstr($get, '"Exterior": "','"')));
$Interior = trim(strip_tags(getstr($get, '"Interior": "','"')));
$Colonia = trim(strip_tags(getstr($get, '"Colonia": "','"')));
$postal_code = trim(strip_tags(getstr($get, '"Codigo Postal": "','"')));
$Estado_Procedencia = trim(strip_tags(getstr($get, '"Estado Procedencia": "','"')));
$CURP = trim(strip_tags(getstr($get, '"CURP": "','"')));
$Clave_Elector = trim(strip_tags(getstr($get, '"Clave Elector": "','"')));
$ID = trim(strip_tags(getstr($get, '"ID": ',',')));
p_rce($userId,"8");
$sexz = ["H"=>'Hombre',"M"=> 'Mujer'];
$sexo = $sexz["$sexo"];
if (empty(get)){
    bot('sendMessage', [
    'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>Error en la Api</b>"
]);        die();
    }

if ((strpos($get, "A PHP Error was encountered"))){
    bot('sendMessage', [
    'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>No se encuentra ese Pais Disponible</b>"
]);
    die();
}



bot('sendMessage', [
    'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>                    🇲🇽Doxing MX🇲🇽
－－－－－－－－－－－－－－－－
- Nombre : <code>$nombre</code>
- Apellidos : <code>$paterno $materno</code>
- Sexo : <code>$sexo</code>
- Fecha de nacimiento : <code>$nacimiento</code>
- Edad : <code>$edad</code>
- Municipio : <code>$Municipio</code>
- Calle : <code>$Calle</code>
- Número Exterior : <code>$Exterior</code>
- Número Interior: <code>$Interior</code>
- Colonia : <code>$Colonia</code>
- Código Postal : <code>$postal_code</code>
- Estado de Procedencia : <code>$Estado_Procedencia</code>
- CURP : <code>$CURP</code>
- ID : <code>$ID</code>
- Clave Elector : <code>$Clave_Elector</code>
         ❤️ By @RitaaChk_Bot ❤️
－－－－－－－－－－－－－－－－</b>"
]);
}


?>