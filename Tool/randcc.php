<?php
list($cmd) = explode(" ", $message);
if($cmd == "/cc" or $cmd == ".cc" or $cmd == "!cc"){
sendaction($chatId, typing);
$tiempo_inicial = microtime(true);
deleteprm($userId);
is_bin_ban_userbot();


if($gId == $Mi_Id){
	$Rank = "Owner";
	$GLOBALS['Rank'] = $Rank;
}elseif($userId == verifiAdmin($userId)){
	$Rank ="Admin";
	$GLOBALS['Rank'] = $Rank;
}elseif($userId == verifiPremium($userId)){
	$Rank = "Premium";
	$GLOBALS['Rank'] = $Rank;
}elseif($userId == veritimepremium($userId)){
	$Rank = "Premium";
	$GLOBALS['Rank'] = $Rank;
}elseif($chatId == verifiCharAdmin($chatId)){
	$Rank = "Free User";
	$GLOBALS['Rank'] = $Rank;
}
elseif($userId == verifiUser($userId)){
	$Rank ="Free user";
	$GLOBALS['Rank'] =$Rank;
}

  $proxy = [
    'user-rzr_374110370b-country-us:52MUPs3r6e',
        ];
    $rotate = $proxy[array_rand($proxy)];


$ip = array(
  1 => 'dc.razorproxy.com:8000',
);
$socks = array_rand($ip);
$socks5 = $ip[$socks];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.namefake.com/gen.json?country=us');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl = curl_exec($ch);
curl_close($ch);
echo $curl;





$coco = trim(strip_tags(getStr($curl, ',"plasticcard":"', '"')));
$fecha = trim(strip_tags(getStr($curl, '"cardexpir":"', '"')));
$cvv = rand(100,999);


bot('sendMessage', [
    'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>Card by Rita Chk
CC: <code>$coco</code>
Date: <code>$fecha</code>
CVC: <code>$cvv</code>
Created BY: <a href='tg://user?id=$userId'>$username</a> [<code>$Rank</code>]</b>"
]);
}
						