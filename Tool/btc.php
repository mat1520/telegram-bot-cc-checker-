<?php

if(strpos($message, '/btc') === 0 || strpos($message, ".btc") === 0 || strpos($message, '!btc') === 0){

$curl = curl_init(); 
curl_setopt_array($curl, [ 
CURLOPT_URL => "https://api.coinbase.com/v2/prices/BTC-USD/spot", 
 CURLOPT_RETURNTRANSFER => true, 
 CURLOPT_FOLLOWLOCATION => true, 
 CURLOPT_ENCODING => "", 
 CURLOPT_MAXREDIRS => 10, 
 CURLOPT_TIMEOUT => 50, 
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, 
 CURLOPT_CUSTOMREQUEST => "GET", 
 CURLOPT_HTTPHEADER => [ 
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", 
        "accept-encoding: gzip, deflate, br", 
        "accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7",  
"user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36" 
  ], 
]); 
$btcvalue = curl_exec($curl); 
curl_close($curl); 
$currentBTCvalue = json_decode($btcvalue, true); 
 
$BTCvalueinUSD = $currentBTCvalue["data"]["amount"]; 
 
echo "$BTCvalueinUSD";

if ($BTCvalueinUSD){
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "<b>•────────────────•
[ϟ] Tool ⌁ BTC PRICES 
•────────────────•
Btc Price: <code>$BTCvalueinUSD</code>
Currency: <code>USD</code>
•────────────────•</b>",
        'parse_mode' => 'html',
        'reply_to_message_id' => $message_id
      ]);
    }
}