<?php

use GuzzleHttp\Client;

if(strpos($message, "/addr")===0 or strpos($message, "!addr")===0 or strpos($message, ".addr")===0){
sendaction($chatId, typing);
deleteprm($userId);
$Comu = substr($message, 6);
if (empty($Comu)){
        reply_to($chatId, $message_id,$keyboard,'<b>Ingresa un PAIS:</b>');
        die();
    }
    

$countryCodes = [
    'ar', // Argentina
    'au', // Australia
    'bd', // Bangladesh
    'be', // Belgium
    'br', // Brazil
    'ca', // Canada
    'cn', // China
    'cz', // Czech Republic
    'fr', // France
    'de', // Germany
    'gr', // Greece
    'hu', // Hungary
    'in', // India
    'id', // Indonesia
    'ir', // Iran
    'it', // Italy
    'jp', // Japan
    'my', // Malaysia
    'mx', // Mexico
    'np', // Nepal
    'nl', // Netherlands
    'ng', // Nigeria
    'pe', // Peru
    'ph', // Philippines
    'pl', // Poland
    'pt', // Portugal
    'ro', // Romania
    'ru', // Russia
    'sa', // Saudi Arabia
    'sg', // Singapore
    'za', // South Africa
    'kr', // South Korea
    'es', // Spain
    'se', // Sweden
    'th', // Thailand
    'tr', // Turkey
    'ug', // Uganda
    'ua', // Ukraine
    'uk', // United Kingdom
    'us', // United States
    'vn'  // Vietnam
];
    
    
if (strlen($Comu) > 2 || !in_array(strtolower($Comu), $countryCodes)) {
        $validCountries = implode(', ', $countryCodes);
        reply_to($chatId, $message_id, $keyboard, "<b>Invalido. Países válidos: $validCountries</b>");
        exit();
}


$client = new Client([
    'verify' => false,  
]);

$res = $client->request('GET', "https://www.fakexy.com/fake-address-generator-$Comu");

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



$json = file_get_contents("https://randomuser.me/api/?nat=us");
$data = json_decode($json, true);
$user = $data["results"][0];
$firstname = $user["name"]["first"];
$lastname = $user["name"]["last"];


 bot('sendMessage', [
    'chat_id' => $chatId,
    'reply_to_message_id' => $message_id,
    'parse_mode' => 'HTML',
    'text' => "<b>📦 Random Address Details</b>

<strong>First Name:</strong> <code>$firstname</code>
<strong>Last Name:</strong> <code>$lastname</code>
<strong>Address:</strong> <code>$street $nb</code>
<strong>City:</strong> <code>$city</code>
<strong>State:</strong> <code>$state</code>
<strong>Postal Code:</strong> <code>$zip</code>
<strong>Country:</strong> <code>$country</code>
<strong>Phone Number:</strong> <code>$phone</code>

"
]);

}



?>