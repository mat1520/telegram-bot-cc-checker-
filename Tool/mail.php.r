<?php
list($cmd) = explode(" ", $message);
if($cmd == "/mail" or $cmd == ".mail" or $cmd == "!mail"){


$file = fopen("Tool/data.txt", "r");

$found = false;
while (($line = fgets($file)) !== false) {
    $parts = explode("|", $line);
    if ($parts[0] == $userId) {
        $found = true;
        break;
    }
}
if ($found) {
$email = $parts[1];
$text = "You already have an email available.
Address: ``` $email```";

bot('sendMessage', [
        'chat_id' => $chatId,
        'reply_to_message_id' => $message_id,
        'parse_mode' => 'Markdown',
        'text' => "$text",
        'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"➕ Generate New / Delete", 'callback_data'=>"generate_new"],
                ['text'=>"🔄 Messages", 'callback_data'=>"view_messages"]]
                ],'resize_keyboard'=>true])
    ]); 
} else {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/new');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: api.internal.temp-mail.io';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'accept-language: es-ES,es;q=0.9';
$headers[] = 'application-name: web';
$headers[] = 'application-version: 2.4.1';
$headers[] = 'content-type: application/json;charset=UTF-8';
$headers[] = 'origin: https://temp-mail.io';
$headers[] = 'referer: https://temp-mail.io/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"min_name_length":10,"max_name_length":10}
');
$curl = curl_exec($ch);
$data = json_decode($curl, true);
$email = $data["email"];
$token = $data["token"];

$user_txt = $userId . "|" . $email . "|" . $token;

$file = fopen("Tool/data.txt", "a");
fwrite($file, $user_txt . "\n");
fclose($file);


$text = "Your old email address has been successfully deleted

New temporary email address generated:

``` $email```";
bot('sendMessage', [
        'chat_id' => $chatId,
        'reply_to_message_id' => $message_id,
        'parse_mode' => 'Markdown',
        'text' => "$text",
        'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"➕ Generate New / Delete", 'callback_data'=>"generate_new"],
                ['text'=>"🔄 Messages", 'callback_data'=>"view_messages"]]
                ],'resize_keyboard'=>true])
    ]); 
}}




if ($cdata2 == "generate_new"){
	if ($queryOriginId != $queryUserId) {
        $response = "Access denied Generate your own Button🚫";
        answerCallbackQuery($queryId, $response, true);
        exit;
	}
deleteIdFromFile($queryOriginId);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/new');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: api.internal.temp-mail.io';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'accept-language: es-ES,es;q=0.9';
$headers[] = 'application-name: web';
$headers[] = 'application-version: 2.4.1';
$headers[] = 'content-type: application/json;charset=UTF-8';
$headers[] = 'origin: https://temp-mail.io';
$headers[] = 'referer: https://temp-mail.io/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"min_name_length":10,"max_name_length":10}
');
$curl = curl_exec($ch);
$data = json_decode($curl, true);
$email = $data["email"];
$token = $data["token"];

$user_txt = $queryOriginId . "|" . $email . "|" . $token;

$file = fopen("Tool/data.txt", "a");
fwrite($file, $user_txt . "\n");
fclose($file);

$text = "Your old email address has been successfully deleted

New temporary email address generated:

``` $email```";
	
bot('editMessageText', [
			'chat_id' => $cchatid2,
    		'message_id' => $cmessage_id2,
			'text' => $text,
			'parse_mode' => 'Markdown',
			'reply_to_message_id' => $cmessage_id2,
			'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"➕ Generate New / Delete", 'callback_data'=>"generate_new"],
                ['text'=>"🔄 Messages", 'callback_data'=>"view_messages"]]
                ],'resize_keyboard'=>true])
]); 
}
    
    
if ($cdata2 == "view_messages"){
	if ($queryOriginId != $queryUserId) {
        $response = "Access denied Generate your own Button🚫";
        answerCallbackQuery($queryId, $response, true);
        exit;
	}
$file = fopen("Tool/data.txt", "r");

$found = false;
while (($line = fgets($file)) !== false) {
    $parts = explode("|", $line);
    if ($parts[0] == $queryOriginId) {
        $found = true;
        break;
    }
}
$email = $parts[1];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/'.$email.'/messages');
$headers = array();
$headers[] = 'authority: api.internal.temp-mail.io';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'accept-language: es-ES,es;q=0.9';
$headers[] = 'application-name: web';
$headers[] = 'application-version: 2.4.1';
$headers[] = 'origin: https://temp-mail.io';
$headers[] = 'referer: https://temp-mail.io/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl = curl_exec($ch);
$data = json_decode($curl, true);
$total_array = count($data);
if ($total_array == "0") {
    $message = 'Your inbox is empty';
$text = "Current email address: ``` $email```
$message
";
    bot('editMessageText', [
			'chat_id' => $cchatid2,
    		'message_id' => $cmessage_id2,
			'text' => $text,
			'parse_mode' => 'Markdown',
			'reply_to_message_id' => $cmessage_id2,
			'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"➕ Generate New / Delete", 'callback_data'=>"generate_new"],
                ['text'=>"🔄 Messages", 'callback_data'=>"view_messages"]]
                ],'resize_keyboard'=>true])
]); 
return;
}
$message = "Total de Mensaje recibido $total_array";
$text = "Current email address: ``` $email```
$message";
	
bot('editMessageText', [
			'chat_id' => $cchatid2,
    		'message_id' => $cmessage_id2,
			'text' => $text,
			'parse_mode' => 'Markdown',
			'reply_to_message_id' => $cmessage_id2,
			'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"➕ Generate New / Delete", 'callback_data'=>"generate_new"],
                ['text'=>"View Message ->>", 'callback_data'=>"view_mess"]]
                ],'resize_keyboard'=>true])
]); 
}


if ($cdata2 == "view_mess"){
	if ($queryOriginId != $queryUserId) {
        $response = "Access denied Generate your own Button🚫";
        answerCallbackQuery($queryId, $response, true);
        exit;
	}
$file = fopen("Tool/data.txt", "r");

$found = false;
while (($line = fgets($file)) !== false) {
    $parts = explode("|", $line);
    if ($parts[0] == $queryOriginId) {
        $found = true;
        break;
    }
}
$email = $parts[1];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/'.$email.'/messages');
$headers = array();
$headers[] = 'authority: api.internal.temp-mail.io';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'accept-language: es-ES,es;q=0.9';
$headers[] = 'application-name: web';
$headers[] = 'application-version: 2.4.1';
$headers[] = 'origin: https://temp-mail.io';
$headers[] = 'referer: https://temp-mail.io/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl = curl_exec($ch);
$data = json_decode($curl, true);
$total_array = count($data);
$from = $data[0]["from"];
$subject = $data[0]["subject"];
echo $body_text = $data[0]["body_text"];
if ($total_array == "0") {
    $message = 'Your inbox is empty';
$text = "Current email address: ``` $email```
$message
";
    bot('editMessageText', [
			'chat_id' => $cchatid2,
    		'message_id' => $cmessage_id2,
			'text' => $text,
			'parse_mode' => 'Markdown',
			'reply_to_message_id' => $cmessage_id2,
			'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"➕ Generate New / Delete", 'callback_data'=>"generate_new"],
                ['text'=>"🔄 Messages", 'callback_data'=>"view_messages"]]
                ],'resize_keyboard'=>true])
]); 
return;
}
$message = "Total de Mensaje recibido $total_array";
$text = "Current email address: ``` $email```
$message";


$callbacks = [];

for ($i = 1; $i <= $total_array; $i++) {
        $callbacks[] = [
            'text' => "$i Message",
            'callback_data' => "view_mess_$i"
        ];
}


$replyMarkup = [
    'inline_keyboard' => [
        [['text' => "<<-Return", 'callback_data' => "view_messages"]],
        $callbacks  // Sin corchetes adicionales aquí
    ],
    'resize_keyboard' => true
];


bot('editMessageText', [
    'chat_id' => $cchatid2,
    'message_id' => $cmessage_id2,
    'text' => $text,
    'parse_mode' => 'Markdown',
    'reply_to_message_id' => $cmessage_id2,
    'reply_markup' => json_encode($replyMarkup)
]);


}

///--------------------------------------------------------- MESSAGE----------------
if ($cdata2 == "view_mess_1"){
	if ($queryOriginId != $queryUserId) {
        $response = "Access denied Generate your own Button🚫";
        answerCallbackQuery($queryId, $response, true);
        exit;
	}
$file = fopen("Tool/data.txt", "r");

$found = false;
while (($line = fgets($file)) !== false) {
    $parts = explode("|", $line);
    if ($parts[0] == $queryOriginId) {
        $found = true;
        break;
    }
}
$email = $parts[1];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/'.$email.'/messages');
$headers = array();
$headers[] = 'authority: api.internal.temp-mail.io';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'accept-language: es-ES,es;q=0.9';
$headers[] = 'application-name: web';
$headers[] = 'application-version: 2.4.1';
$headers[] = 'origin: https://temp-mail.io';
$headers[] = 'referer: https://temp-mail.io/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl = curl_exec($ch);
$data = json_decode($curl, true);
$total_array = count($data);
$from = $data[0]["from"];
$subject = $data[0]["subject"];
$body_text = $data[0]["body_text"];


$text = "From: ``` $from```
subject: ``` $subject```
Text: ``` $body_text```";
	
bot('editMessageText', [
			'chat_id' => $cchatid2,
    		'message_id' => $cmessage_id2,
			'text' => $text,
			'parse_mode' => 'Markdown',
			'reply_to_message_id' => $cmessage_id2,
            'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"<<- Return",'callback_data'=>"view_mess"]]
                ],'resize_keyboard'=>true])

]); 
}


if ($cdata2 == "view_mess_2"){
	if ($queryOriginId != $queryUserId) {
        $response = "Access denied Generate your own Button🚫";
        answerCallbackQuery($queryId, $response, true);
        exit;
	}
$file = fopen("Tool/data.txt", "r");

$found = false;
while (($line = fgets($file)) !== false) {
    $parts = explode("|", $line);
    if ($parts[0] == $queryOriginId) {
        $found = true;
        break;
    }
}
$email = $parts[1];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/'.$email.'/messages');
$headers = array();
$headers[] = 'authority: api.internal.temp-mail.io';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'accept-language: es-ES,es;q=0.9';
$headers[] = 'application-name: web';
$headers[] = 'application-version: 2.4.1';
$headers[] = 'origin: https://temp-mail.io';
$headers[] = 'referer: https://temp-mail.io/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl = curl_exec($ch);
$data = json_decode($curl, true);
$total_array = count($data);
$from = $data[1]["from"];
$subject = $data[1]["subject"];
$body_text = $data[1]["body_text"];


$text = "From: ``` $from```
subject: ``` $subject```
Text: ``` $body_text```";
	
bot('editMessageText', [
			'chat_id' => $cchatid2,
    		'message_id' => $cmessage_id2,
			'text' => $text,
			'parse_mode' => 'Markdown',
			'reply_to_message_id' => $cmessage_id2,
            'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"<<- Return",'callback_data'=>"view_mess"]]
                ],'resize_keyboard'=>true])

]); 
}


if ($cdata2 == "view_mess_3"){
	if ($queryOriginId != $queryUserId) {
        $response = "Access denied Generate your own Button🚫";
        answerCallbackQuery($queryId, $response, true);
        exit;
	}
$file = fopen("Tool/data.txt", "r");

$found = false;
while (($line = fgets($file)) !== false) {
    $parts = explode("|", $line);
    if ($parts[0] == $queryOriginId) {
        $found = true;
        break;
    }
}
$email = $parts[1];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/'.$email.'/messages');
$headers = array();
$headers[] = 'authority: api.internal.temp-mail.io';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'accept-language: es-ES,es;q=0.9';
$headers[] = 'application-name: web';
$headers[] = 'application-version: 2.4.1';
$headers[] = 'origin: https://temp-mail.io';
$headers[] = 'referer: https://temp-mail.io/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl = curl_exec($ch);
$data = json_decode($curl, true);
$total_array = count($data);
$from = $data[2]["from"];
$subject = $data[2]["subject"];
$body_text = $data[2]["body_text"];


$text = "From: ``` $from```
subject: ``` $subject```
Text: ``` $body_text```";
	
bot('editMessageText', [
			'chat_id' => $cchatid2,
    		'message_id' => $cmessage_id2,
			'text' => $text,
			'parse_mode' => 'Markdown',
			'reply_to_message_id' => $cmessage_id2,
            'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"<<- Return",'callback_data'=>"view_mess"]]
                ],'resize_keyboard'=>true])

]); 
}

//-------------------------------------------------------------------------------------

if ($cdata2 == "view_mess_4"){
	if ($queryOriginId != $queryUserId) {
        $response = "Access denied Generate your own Button🚫";
        answerCallbackQuery($queryId, $response, true);
        exit;
	}
$file = fopen("Tool/data.txt", "r");

$found = false;
while (($line = fgets($file)) !== false) {
    $parts = explode("|", $line);
    if ($parts[0] == $queryOriginId) {
        $found = true;
        break;
    }
}
$email = $parts[1];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/'.$email.'/messages');
$headers = array();
$headers[] = 'authority: api.internal.temp-mail.io';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'accept-language: es-ES,es;q=0.9';
$headers[] = 'application-name: web';
$headers[] = 'application-version: 2.4.1';
$headers[] = 'origin: https://temp-mail.io';
$headers[] = 'referer: https://temp-mail.io/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl = curl_exec($ch);
$data = json_decode($curl, true);
$total_array = count($data);
$from = $data[3]["from"];
$subject = $data[3]["subject"];
$body_text = $data[3]["body_text"];

$text = "From: ``` $from```
subject: ``` $subject```
Text: ``` $body_text```";


bot('editMessageText', [
			'chat_id' => $cchatid2,
    		'message_id' => $cmessage_id2,
			'text' => $text,
			'parse_mode' => 'Markdown',
			'reply_to_message_id' => $cmessage_id2,
            'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"<<- Return",'callback_data'=>"view_mess"]]
                ],'resize_keyboard'=>true])

]); 
}

//-------------------------------------------------------------------------------------

if ($cdata2 == "view_mess_5"){
	if ($queryOriginId != $queryUserId) {
        $response = "Access denied Generate your own Button🚫";
        answerCallbackQuery($queryId, $response, true);
        exit;
	}
$file = fopen("Tool/data.txt", "r");

$found = false;
while (($line = fgets($file)) !== false) {
    $parts = explode("|", $line);
    if ($parts[0] == $queryOriginId) {
        $found = true;
        break;
    }
}
$email = $parts[1];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/'.$email.'/messages');
$headers = array();
$headers[] = 'authority: api.internal.temp-mail.io';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'accept-language: es-ES,es;q=0.9';
$headers[] = 'application-name: web';
$headers[] = 'application-version: 2.4.1';
$headers[] = 'origin: https://temp-mail.io';
$headers[] = 'referer: https://temp-mail.io/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl = curl_exec($ch);
$data = json_decode($curl, true);
$total_array = count($data);
$from = $data[4]["from"];
$subject = $data[4]["subject"];
$body_text = $data[4]["body_text"];


$text = "From: ``` $from```
subject: ``` $subject```
Text: ``` $body_text```";
	
bot('editMessageText', [
			'chat_id' => $cchatid2,
    		'message_id' => $cmessage_id2,
			'text' => $text,
			'parse_mode' => 'Markdown',
			'reply_to_message_id' => $cmessage_id2,
            'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"<<- Return",'callback_data'=>"view_mess"]]
                ],'resize_keyboard'=>true])

]); 
}

//-------------------------------------------------------------------------------------

if ($cdata2 == "view_mess_6"){
	if ($queryOriginId != $queryUserId) {
        $response = "Access denied Generate your own Button🚫";
        answerCallbackQuery($queryId, $response, true);
        exit;
	}
$file = fopen("Tool/data.txt", "r");

$found = false;
while (($line = fgets($file)) !== false) {
    $parts = explode("|", $line);
    if ($parts[0] == $queryOriginId) {
        $found = true;
        break;
    }
}
$email = $parts[1];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/'.$email.'/messages');
$headers = array();
$headers[] = 'authority: api.internal.temp-mail.io';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'accept-language: es-ES,es;q=0.9';
$headers[] = 'application-name: web';
$headers[] = 'application-version: 2.4.1';
$headers[] = 'origin: https://temp-mail.io';
$headers[] = 'referer: https://temp-mail.io/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl = curl_exec($ch);
$data = json_decode($curl, true);
$total_array = count($data);
$from = $data[5]["from"];
$subject = $data[5]["subject"];
$body_text = $data[5]["body_text"];


$text = "From: ``` $from```
subject: ``` $subject```
Text: ``` $body_text```";
	
bot('editMessageText', [
			'chat_id' => $cchatid2,
    		'message_id' => $cmessage_id2,
			'text' => $text,
			'parse_mode' => 'Markdown',
			'reply_to_message_id' => $cmessage_id2,
            'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"<<- Return",'callback_data'=>"view_mess"]]
                ],'resize_keyboard'=>true])

]); 
}

//-------------------------------------------------------------------------------------

if ($cdata2 == "view_mess_7"){
	if ($queryOriginId != $queryUserId) {
        $response = "Access denied Generate your own Button🚫";
        answerCallbackQuery($queryId, $response, true);
        exit;
	}
$file = fopen("Tool/data.txt", "r");

$found = false;
while (($line = fgets($file)) !== false) {
    $parts = explode("|", $line);
    if ($parts[0] == $queryOriginId) {
        $found = true;
        break;
    }
}
$email = $parts[1];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/'.$email.'/messages');
$headers = array();
$headers[] = 'authority: api.internal.temp-mail.io';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'accept-language: es-ES,es;q=0.9';
$headers[] = 'application-name: web';
$headers[] = 'application-version: 2.4.1';
$headers[] = 'origin: https://temp-mail.io';
$headers[] = 'referer: https://temp-mail.io/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl = curl_exec($ch);
$data = json_decode($curl, true);
$total_array = count($data);
$from = $data[6]["from"];
$subject = $data[6]["subject"];
$body_text = $data[6]["body_text"];


$text = "From: ``` $from```
subject: ``` $subject```
Text: ``` $body_text```";
	
bot('editMessageText', [
			'chat_id' => $cchatid2,
    		'message_id' => $cmessage_id2,
			'text' => $text,
			'parse_mode' => 'Markdown',
			'reply_to_message_id' => $cmessage_id2,
            'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"<<- Return",'callback_data'=>"view_mess"]]
                ],'resize_keyboard'=>true])

]); 
}

//-------------------------------------------------------------------------------------

if ($cdata2 == "view_mess_8"){
	if ($queryOriginId != $queryUserId) {
        $response = "Access denied Generate your own Button🚫";
        answerCallbackQuery($queryId, $response, true);
        exit;
	}
$file = fopen("Tool/data.txt", "r");

$found = false;
while (($line = fgets($file)) !== false) {
    $parts = explode("|", $line);
    if ($parts[0] == $queryOriginId) {
        $found = true;
        break;
    }
}
$email = $parts[1];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/'.$email.'/messages');
$headers = array();
$headers[] = 'authority: api.internal.temp-mail.io';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'accept-language: es-ES,es;q=0.9';
$headers[] = 'application-name: web';
$headers[] = 'application-version: 2.4.1';
$headers[] = 'origin: https://temp-mail.io';
$headers[] = 'referer: https://temp-mail.io/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl = curl_exec($ch);
$data = json_decode($curl, true);
$total_array = count($data);
$from = $data[7]["from"];
$subject = $data[7]["subject"];
$body_text = $data[7]["body_text"];


$text = "From: ``` $from```
subject: ``` $subject```
Text: ``` $body_text```";
	
bot('editMessageText', [
			'chat_id' => $cchatid2,
    		'message_id' => $cmessage_id2,
			'text' => $text,
			'parse_mode' => 'Markdown',
			'reply_to_message_id' => $cmessage_id2,
            'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"<<- Return",'callback_data'=>"view_mess"]]
                ],'resize_keyboard'=>true])

]); 
}

//-------------------------------------------------------------------------------------

if ($cdata2 == "view_mess_9"){
	if ($queryOriginId != $queryUserId) {
        $response = "Access denied Generate your own Button🚫";
        answerCallbackQuery($queryId, $response, true);
        exit;
	}
$file = fopen("Tool/data.txt", "r");

$found = false;
while (($line = fgets($file)) !== false) {
    $parts = explode("|", $line);
    if ($parts[0] == $queryOriginId) {
        $found = true;
        break;
    }
}
$email = $parts[1];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/'.$email.'/messages');
$headers = array();
$headers[] = 'authority: api.internal.temp-mail.io';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'accept-language: es-ES,es;q=0.9';
$headers[] = 'application-name: web';
$headers[] = 'application-version: 2.4.1';
$headers[] = 'origin: https://temp-mail.io';
$headers[] = 'referer: https://temp-mail.io/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl = curl_exec($ch);
$data = json_decode($curl, true);
$total_array = count($data);
$from = $data[8]["from"];
$subject = $data[8]["subject"];
$body_text = $data[8]["body_text"];


$text = "From: ``` $from```
subject: ``` $subject```
Text: ``` $body_text```";
	
bot('editMessageText', [
			'chat_id' => $cchatid2,
    		'message_id' => $cmessage_id2,
			'text' => $text,
			'parse_mode' => 'Markdown',
			'reply_to_message_id' => $cmessage_id2,
            'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"<<- Return",'callback_data'=>"view_mess"]]
                ],'resize_keyboard'=>true])

]); 
}

//-------------------------------------------------------------------------------------

if ($cdata2 == "view_mess_10"){
	if ($queryOriginId != $queryUserId) {
        $response = "Access denied Generate your own Button🚫";
        answerCallbackQuery($queryId, $response, true);
        exit;
	}
$file = fopen("Tool/data.txt", "r");

$found = false;
while (($line = fgets($file)) !== false) {
    $parts = explode("|", $line);
    if ($parts[0] == $queryOriginId) {
        $found = true;
        break;
    }
}
$email = $parts[1];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/'.$email.'/messages');
$headers = array();
$headers[] = 'authority: api.internal.temp-mail.io';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'accept-language: es-ES,es;q=0.9';
$headers[] = 'application-name: web';
$headers[] = 'application-version: 2.4.1';
$headers[] = 'origin: https://temp-mail.io';
$headers[] = 'referer: https://temp-mail.io/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl = curl_exec($ch);
$data = json_decode($curl, true);
$total_array = count($data);
$from = $data[9]["from"];
$subject = $data[9]["subject"];
$body_text = $data[9]["body_text"];


$text = "From: ``` $from```
subject: ``` $subject```
Text: ``` $body_text```";
	
bot('editMessageText', [
			'chat_id' => $cchatid2,
    		'message_id' => $cmessage_id2,
			'text' => $text,
			'parse_mode' => 'Markdown',
			'reply_to_message_id' => $cmessage_id2,
            'reply_markup'=> json_encode(['inline_keyboard'=>[
                [['text'=>"<<- Return",'callback_data'=>"view_mess"]]
                ],'resize_keyboard'=>true])

]); 
}





    