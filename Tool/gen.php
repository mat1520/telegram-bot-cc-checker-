<?php

list($cmd) = explode(" ", $message);
if(cmd($message, "gen")){
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


$input = substr($message, 4);
$input = preg_replace("/\W/", " ", $input);
$input = preg_replace("/\r|\n/", ' ', $input);
$input = preg_replace("/[^0-9x]/", ' ', $input);
$input = preg_replace('/\s+/', ' ', $input);
$input = trim($input, ' ');
$card = explode(" ", $input);

if($card[0][0] == "x"){
    reply_to($chatId, $message_id,$keyboard,'<b>Gen Card%0AFormat:<code>/gen cc|m|y|cvv</code></b>');
    return;
};

if(strlen($card[0]) < 6){
    die();
}
$cc = $card[0];
$mon = $card[1];
$year2 = $card[2];
$cvv2 = $card[3];

if(empty($input)){
    reply_to($chatId, $message_id,$keyboard,'<b>Gen Card%0AFormat:<code>/gen cc|m|y|cvv</code></b>');
		die();
    die();
};

if(strlen($card[2]) == 2){
    $year2 = "20".$card[2];
};
if(strlen($card[1]) == 1){
    $mon = "0".$card[1];
};
if(strlen($cc) == 16 ){
$cc = substr($cc, 0,12);
};

$messageidtoedit1 = bot('sendMessage', [
		'chat_id' =>$chatId,
	'reply_to_message_id'=>$message_id,
	'parse_mode'=>'HTML',
		'text' =>"<code>Wait the Cc are being Generated</code>"
	]);
$messageidtoedit = capture(json_encode($messageidtoedit1), '"message_id":', ',');
$chem = substr($card[0], 0, 1);
$vaut = array(1,2,7,8,9,0);
if (in_array($chem, $vaut)) { 
    bot('editMessageText',[
		'chat_id'=>$chatId,
		'message_id'=>$messageidtoedit,
		'text'=>"<b>Este bot solo soporta Amex, Visa, MasterCard y Discover.</b>",
		'parse_mode'=>'html',
		]);
    exit();
  }

$cc3 = substr($card[0], 0, 6);
$res = bininfo($cc3);
$bin1 = binnumber($cc3);
$type = $res['type'];
$bank = $res['bank'];
$brand = $res['brand'];
$scheme = $res['level'];
$country = $res['country'];
$emoji = $res['Emoji'];


if(strlen($card[2]) == 0){
    $year2 = "rnd";
}
if(strlen($card[1]) == 0){
    $mon = "rnd";
}

if($mon == "rnd" OR $year == "rnd"){
goto a;
};

if(empty($input)){
    bot('editMessageText',[
            'chat_id'=>$chatId,
            'message_id'=>$messageidtoedit,
            'text'=>"<b>Formato /gen <code>5463627xxx </code></b>",
'parse_mode'=>'html',
]);
	exit();
};
if($mon > 12 || $mon < 1){
	   bot('editMessageText',[
            'chat_id'=>$chatId,
            'message_id'=>$messageidtoedit,
            'text'=>"<b>The month entered is invalid</b>",
'parse_mode'=>'html',
]);
	return;
};

if($year2 > 2060 || $year2 < 2024){
    bot('editMessageText',[
            'chat_id'=>$chatId,
            'message_id'=>$messageidtoedit,
            'text'=>"<b>The year entered is incorrect</b>",
'parse_mode'=>'html',
]);       
	return;
};
a:

$card = CreditCardGenerator::generateCC($cc, $mon, $year2, $cvv2, 10);
		        if(empty($mon)){
        $mon = 'rnd';
        }
        if(empty($year2)){
        $year2 = 'rnd';
        }
        if(empty($cvv2)){
        $cvv2 = 'rnd';
        }
		$cco = str_pad($cc,  16, "x"); 
		$tiempo_final = microtime(true);
		$tiempo = $tiempo_final - $tiempo_inicial;
		$tiempo = substr($tiempo, 0, 4);
		bot('editMessageText',[
            'chat_id'=>$chatId,
            'message_id'=>$messageidtoedit,
            'text'=>"<b>-🪁Info Bin : <code>$cc3 - $brand - $cardd - $type | $bank </code>[$emoji]
<b>Formato :</b><code> $cco|$mon|$year2|$cvv2|</code>
——————————————————
$card
——————————————————
<b>Time :</b> <code>$tiempo s</code></b>",
'parse_mode'=>'html',
'reply_markup'=> json_encode(['inline_keyboard'=>[
	[['text' => 'Generate Again!🎡', 'callback_data' => 'hod'],
	['text' => 'Generate Mass!⛽️', 'callback_data' => 'gen2']]
	],'resize_keyboard'=>true])
]);       
die();
}

//---------------------------------------------------

if ($cdata2 == "gen2"){
	$tiempo_inicial = microtime(true);
	if ($queryOriginId != $queryUserId) {
        $response = "Access denied Generate your own Button🚫";
        answerCallbackQuery($queryId, $response, true);
        exit;
	}
$messq = $update["callback_query"]["message"]["reply_to_message"]["text"];
$lista = substr($messq, 1);
$input = preg_replace("/\W/", " ", $lista);
$input = preg_replace("/\r|\n/", ' ', $input);
$input = preg_replace("/[^0-9x]/", ' ', $input);
$input = preg_replace('/\s+/', ' ', $input);
$input = trim($input, ' ');
$card = explode(" ", $input);

$cc = $card[0];
$mon = $card[1];
$anoo = $card[2];
$cvv2 = $card[3];


if(strlen($card[2]) == 2){
$anoo = "20".$card[2];
};
if(strlen($card[1]) == 1){
$mon = "0".$card[1];
};
if(strlen($cc) == 16 ){
$cc = substr($cc, 0,12);
};


$cc3 = substr($cc, 0,6);
$bin1 = binnumber($cc3);
$type = type($cc3);
$bank = bank($cc3); 
$brand = brannd($cc3); 
$scheme = level($cc3);
$country = country($cc3);
$emoji = Emoji($cc3); 



$card = CreditCardGenerator::generateCC($cc, $mon, $anoo, $cvv2, 5);

$cco = str_pad($cc,  16, "x"); 
$tiempo_final = microtime(true);
		$tiempo = $tiempo_final - $tiempo_inicial;
		$tiempo = substr($tiempo, 0, 4);
		 if(empty($mon)){
        $mon = 'rnd';
        }
        if(empty($anoo)){
        $anoo = 'rnd';
        }
        if(empty($cvv2)){
        $cvv2 = 'rnd';
        }
        $mon = ($mon);
        bot('editMessageText', [
			'chat_id' => $cchatid2,
    		'message_id' => $cmessage_id2,
			'text' => "<b>-🪁Info Bin : <code>$cc3 - $brand - $cardd - $type | $bank </code>[$emoji]
<b>Formato :</b><code> $cco|$mon|$anoo|$cvv2|</code>
——————————————————
<code>$card</code>
——————————————————
<b>Time :</b> <code>$tiempo s</code></b>",
			'parse_mode' => 'html',
			'reply_to_message_id' => $cmessage_id2,
			'reply_markup'=> json_encode(['inline_keyboard'=>[
                       	[['text' => 'Generate Again!🎡', 'callback_data' => 'hod'],
	['text' => 'Generate Mass!⛽️', 'callback_data' => 'gen2']]
	],'resize_keyboard'=>true])
                    ]); 
	}
	
//-- Regen

if($cdata2 == "hod"){
$tiempo_inicial = microtime(true);
if ($queryOriginId != $queryUserId) {
$response = "Access denied Generate your own Button🚫";
answerCallbackQuery($queryId, $response, true);
exit;
}
$messq = $update["callback_query"]["message"]["reply_to_message"]["text"];
$lista = substr($messq, 1);
$input = preg_replace("/\W/", " ", $lista);
$input = preg_replace("/\r|\n/", ' ', $input);
$input = preg_replace("/[^0-9x]/", ' ', $input);
$input = preg_replace('/\s+/', ' ', $input);
$input = trim($input, ' ');
$card = explode(" ", $input);

$cc = $card[0];
$wio = $card[1];
$years = $card[2];
$cvv2 = $card[3];


if(strlen($card[2]) == 2){
$years = "20".$card[2];
};
if(strlen($card[1]) == 1){
$wio = "0".$card[1];
};
if(strlen($cc) == 16 ){
$cc = substr($cc, 0,12);
};


$cc3 = substr($cc, 0,6);
$bin1 = binnumber($cc3);
$type = type($cc3);
$bank = bank($cc3); 
$brand = brannd($cc3); 
$scheme = level($cc3);
$country = country($cc3);
$emoji = Emoji($cc3);


$card = CreditCardGenerator::generateCC($cc, $wio, $years, $cvv2, 10);

$cco = str_pad($cc,  16, "x"); 
$tiempo_final = microtime(true);
		$tiempo = $tiempo_final - $tiempo_inicial;
		$tiempo = substr($tiempo, 0, 4);
		 if(empty($wio)){
        $wio = 'rnd';
        };
        if(empty($years)){
        $years = 'rnd';
        };
        if(empty($cvv2)){
        $cvv2 = 'rnd';
        };
        bot('editMessageText', [
			'chat_id' => $cchatid2,
    		'message_id' => $cmessage_id2,
			'text' => "<b>-🪁Info Bin : <code>$cc3 - $brand - $cardd - $type | $bank </code>[$emoji]
<b>Formato :</b><code> $cco|$wio|$years|$cvv2|</code>
——————————————————
$card
——————————————————
<b>Time :</b> <code>$tiempo s</code></b>",
			'parse_mode' => 'html',
			'reply_to_message_id' => $cmessage_id2,
			'reply_markup'=> json_encode(['inline_keyboard'=>[
                       	[['text' => 'Generate Again!🎡', 'callback_data' => 'hod'],
	['text' => 'Generate Mass!⛽️', 'callback_data' => 'gen2']]
	],'resize_keyboard'=>true])
                    ]); 
	}
		
?>