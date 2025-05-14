<?php
list($cmd) = explode(" ", $message);
if($cmd == "/kyw" or $cmd == ".kyw" or $cmd == "!kyw"){
include '/CurlX.php';
$lista = substr($message, 5);
$card = explode(",", $lista);
$query = $card[0];

    $PRX = ["METHOD" => "CUSTOM", "SERVER" => 'uk.dc.smartproxy.com:20000', "AUTH" => "sp4p8t3wzb:as041004"];
$IDcookie = uniqid();

$search = str_replace(' ', '+', $query);
$results = 200;
$url = "https://www.google.com/search?q=" . $search . "&num=" . $results;

$requests_results = Curlx::Get($url,NULL,NULL,NULL)->body;
$matches = [];

// Use regular expression to extract the URLs
preg_match_all('/data-lpage="(.*?)"/', $requests_results, $matches);

foreach ($matches[1] as $link_href) {
    // Ignore links containing "webcache"
    if (strpos($link_href, "webcache") === false) {
        $rq= urldecode(explode("&", $link_href)[0]) . "\n";
    }
}

bot('sendMessage', [
    'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"$rq"
]);

}