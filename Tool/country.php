<?php
list($cmd) = explode(" ", $message);
if($cmd == "/countrys" or $cmd == ".countrys" or $cmd == "!countrys"){
    is_duro();

bot('sendMessage', [
    'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
'parse_mode'=>'HTML',
    'text' =>'<b>» ★  <a href="https://t.me/ritagroupOfc">𝗥𝗶𝘁𝗮 𝗖𝗵𝗲𝗸𝗕𝗼𝘁 </a> ☁️
⚊⚊⚊⚊⚊⚊✬✥✬⚊⚊⚊⚊⚊⚊
𝗨𝗻𝗮 𝗽𝗲𝗾𝘂𝗲𝗻‌𝗮 𝗹𝗶𝘀𝘁𝗮 𝗱𝗲 𝘁𝗼𝗱𝗼𝘀 𝗹𝗼𝘀 𝗽𝗮𝗶‌𝘀𝗲𝘀 𝗰𝗼𝗻 𝗹𝗮 𝗾𝘂𝗲 𝗽𝘂𝗲𝗱𝗲𝘀 𝗴𝗲𝗻𝗲𝗿𝗮𝗿 𝗶𝗻𝗳𝗼𝗿𝗺𝗮𝗰𝗶𝗼‌𝗻 𝗳𝗮𝗸𝗲 𝗱𝗲𝗹 𝗽𝗮𝗶‌𝘀 𝘀𝗲𝗹𝗲𝗰𝗰𝗶𝗼𝗻𝗮𝗱𝗼:
⚊⚊⚊⚊⚊⚊✬✥✬⚊⚊⚊⚊⚊⚊
Australia ● au 🇦🇺
Brazil ● br 🇧🇷
Canada ● ca 🇨🇦
Switzerland ● ch
Germany ● de
Denmark ● dk 🇩🇰 
Spain ● es 🇪🇦
Finland ● fi 🇫🇮
France ● fr 🇫🇷
Global ● gb
Ireland ● ie 🇮🇪
Israel ● il 🇮🇱
México ● mx 🇲🇽
Netherlands ● nl 🇳🇱
Norway ● no 🇳🇴
New Zealand ● nz 🇹🇰
Servia ● rs
Turkey ● tr 🇹🇲
Ukraine ● ua 🇺🇦
United States ● us 🇺🇲
⚊⚊⚊⚊⚊⚊✬✥✬⚊⚊⚊⚊⚊⚊</b>'
]);

}