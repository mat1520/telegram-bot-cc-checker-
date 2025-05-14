<?php


$cmd = Command($message);
if (strtolower($cmd['command']) == "mass4") {
    $data = $cmd['data'];
    


deleteprm($userId);
$NameGater ='mass4';
$gateway = '/mass4 :'.$NameGater;
Contador($gateway);
is_credits();
deltecred($userId);
is_gateroff('mass4');
$Mi_Id = "5168647868";
if (empty($data)){
            bot('sendMessage', [
                'chat_id' =>$chatId,
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>'HTML',
                'text' =>"<b>Mass Bradescard mx
Format: <code>cc</code></b>"
                ]); 
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

$db->where ("userdid", $userId);
$user = $db->getOne ("creditos");
$creditos = $user['creditos'];
if ($creditos < 0) {
    reply_to($chatId,$message_id,$keyboard,"<b>You do not have enough credits</b>.");
    deltecred($userId);
    exit();
}


$allcards = multiexplode(["\n", " "], $targetas);

if (count($allcards) >= 5) {
    reply_to($chatId, $message_id, $keyboard, "<b>Error: Máximo de tarjetas alcanzado.</b>");
    exit();
}


        

//-------------------------------------------------------------
$m1 = bot("sendmessage", [
        "chat_id" => $chatId,
        "text" => "<b>Checking status... Please hold on while we verify.</b>",
        "parse_mode" => "html",
        "reply_to_message_id" => $message_id,
    ]);

$ms1 = capture(json_encode($m1), '"message_id":', ",");



$data = urlencode($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://arturo.alwaysdata.net/MultiHilos/CardProcessor.php?cards=$data");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$response = curl_exec($ch);
$mensaje = str_replace('\/', '/', $response);

   bot("editMessageText", [
        "chat_id" => $chatId,
                "text" => "processing...",
        'disable_web_page_preview' => true,
        "parse_mode" => "html",
        "message_id" => $ms1,]);
        
        p_rce($userId, "5");

    bot("editMessageText", [
        "chat_id" => $chatId,
        "text" => $mensaje."| <b>Checked by: <a href='tg://user?id=$userId'>$username</a>[<code>$Rank</code>]</b>",
        'disable_web_page_preview' => true,
        "parse_mode" => "html",
        "message_id" => $ms1,]);
}