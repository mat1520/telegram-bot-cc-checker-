<?php
if(cmd($message, "alluser")){
is_duro();


$userFree = $db->getValue("userpublic", "count(*)");
$UserPremium = $db->getValue("prmiumtime", "count(*)");
$admin = $db->getValue("admin", "count(*)");
$keygener = $db->getValue("GenKey", "count(*)");
$grupop = $db->getValue("gruoptime", "count(*)");
$banuser = $db->getValue("ban", "count(*)");


$Total = $userFree+$UserPremium;
$text = "<b>Usuarios Registrados: <code>$Total</code>
Usuarios Free User: <code>$userFree</code>
Usuarios Premiun: <code>$UserPremium</code>
Usuarios User Ban: <code>$banuser</code>
Admin: <code>$admin</code>
Key Generadas : <code>$keygener</code>
Grupos Registrado : <code>$grupop</code></b>";

bot('sendmessage', [
        'chat_id' => $chatId,
        'reply_to_message_id' => $message_id,
        'text' => $text,
        'parse_mode' => 'HTML'
    ]);
    
    
}
