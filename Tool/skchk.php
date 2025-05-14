<?php
if(cmd($message, "sk")){
sendaction($chatId, typing);
$tiempo_inicial = microtime(true);
deleteprm($userId);
is_bin_ban_userbot();


$skey = substr($message, 4);
if (empty($skey)){
        reply_to($chatId, $message_id,$keyboard,'<b>Ingresa un sk:</b>');
        die();
    }

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


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: api.stripe.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/116.0';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Authorization: Bearer '.$skey.'';
$headers[] = 'Content-Length: 82';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: cross-site';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[number]=5176170323019875&card[exp_month]=11&card[exp_year]=2026&card[cvc]=238');
$curl = curl_exec($ch);
curl_close($ch);
echo $curl;

$mess = trim(strip_tags(getStr($curl, '"message": "', '",')));
$mess2 = trim(strip_tags(getStr($curl, '"code": "', '",')));
$mess1 = trim(strip_tags(getStr($curl, '"message": "', ': sk_live_')));


if ($mess == ""){
$status = "Approved! 🟩";
$response = "$mess 🟩";
}elseif ($mess1 == 'Expired API Key provided'){ 
$status = "[ DECLINED 🔴 ]";
$response = "Expired API Key provided";
}elseif ($mess1 == 'rate_limit'){ 
$status = "[ DECLINED 🔴 ]";
$response = "Request rate limit exceeded.";
}
else{
    $status = "[ DECLINED 🔴 ]";
    $response = "$mess";
    }
       
    
       bot('sendMessage', [
        'chat_id'=>$chatId,
       'text'=>"<b>SK Checker Rita
－－－－－－－－－－－－－－－－
Stripe sk - 🝂 <code>$skey</code> 
－－－－－－－－－－－－－－－－
Status - 🝂 $status
Response - 🝂 $response
Checked by: <a href='tg://user?id=$userId'>$username</a>[$Rank]</b>",
    'parse_mode'=>'html',
    'reply_to_message_id'=> $message_id]);
    
    $free = antispFree($gId);
    $premi = antisppre($gId);
    }
    
    ?>