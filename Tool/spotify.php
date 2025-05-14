<?php
list($cmd) = explode(" ", $message);
if($cmd == "/spotify" or $cmd == ".spotify" or $cmd == "!spotify"){
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

function generateSpotifyUserAgent() {
  $androidVersions = [
      "9", "10", "11", "12", "13", "21", "22", "23", "24", "25", "26", "27", "28", "29"
  ];
  $devices = [
      "SM-N970F", "SM-N971N", "SM-N975F", "SM-N976B", "SM-N976N", "SM-N976U1", "SM-N976U", "SM-N9760", "SM-N9768", "SM-N977U", "SM-N977V", "SM-N977U1"
  ];
  $chromeVersions = [
      "87.0.4280.141", "88.0.4324.152", "89.0.4389.72", "90.0.4430.212", "91.0.4472.77", "92.0.4515.107", "93.0.4577.63", "94.0.4606.54", "95.0.4638.54", "96.0.4664.45", "97.0.4692.71", "98.0.4758.80", "99.0.4844.51", "100.0.4896.60"
  ];
  $spotifyVersions = [
      "8.6.72", "8.6.73", "8.6.74", "8.6.75", "8.6.76", "8.6.77", "8.6.78", "8.6.79", "8.6.80", "8.6.81", "8.6.82", "8.6.83", "8.6.84", "8.6.85"
  ];

  $androidVersion = $androidVersions[array_rand($androidVersions)];
  $device = $devices[array_rand($devices)];
  $chromeVersion = $chromeVersions[array_rand($chromeVersions)];
  $spotifyVersion = $spotifyVersions[array_rand($spotifyVersions)];

  return "Mozilla/5.0 (Linux; Android $androidVersion; $device Build/UNKNOWN; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/$chromeVersion Mobile Safari/537.36 Spotify/$spotifyVersion";
}

$userAgent = generateSpotifyUserAgent();


$json = file_get_contents("https://randomuser.me/api/?nat=us");
$data = json_decode($json, true);
$user = $data["results"][0];
$providers = array('gmail.com', 'hotmail.com', 'yahoo.com', 'outlook.com');
$provider = $providers[array_rand($providers)];
$email = strtolower($user["name"]["first"]) . '' . strtolower($user["name"]["last"]) .rand(11111,22222). '@'. $provider;
$firstname = $user["name"]["first"];
$lastname = $user["name"]["last"];


$pass = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 12);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://spclient.wg.spotify.com/signup/public/v1/account/');
$headers = array();
$headers[] = 'Accept-Language: en-US';
$headers[] = 'App-Platform: Android';
$headers[] = 'Content-Type: application/x-www-form-urlencoded,';
$headers[] = 'Host: spclient.wg.spotify.com';
$headers[] = 'User-Agent: '.$userAgent.'';
$headers[] = 'Spotify-App-Version: 8.6.72';
$headers[] = 'X-Client-Id:';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'gender=male&birth_year='.rand(1995,2000).'&displayname='.$firstname.'+'.$lastname.'&iagree=true&birth_month='.rand(1,9).'&password_repeat='.$pass.'&password='.$pass.'&key=142b583129b2df829de3656f9eb484e6&platform=Android-ARM&email='.$email.'&birth_day='.rand(13,28).'');
$result = curl_exec($ch);

bot('sendMessage', [
    'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>"<b>Account by Rita Chk
Correo: <code>$email</code>
Password: <code>$pass</code>
Created BY: <a href='tg://user?id=$userId'>$username</a> [<code>$Rank</code>]</b>"
]);
}