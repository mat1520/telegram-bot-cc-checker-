<?php
if (strpos($message, "/price")===0 or strpos($message, "!price")===0 or strpos($message, ".price")===0 or strpos($message, "/precios")===0 or strpos($message, "/planes")===0 or strpos($message, ".precios")===0 or strpos($message, "!precios")===0 or strpos($message, "!planes")===0 or strpos($message, ".planes")===0 or strpos($message, "/pay")===0 or strpos($message, "!pay")===0 or strpos($message, ".pay")===0){    
    bot('sendMessage', [
        'chat_id' =>$chatId,
        'disable_web_page_preview' => true,
        'reply_to_message_id'=>$message_id,
        'parse_mode'=>'HTML',
        'text' => "<b>Planes de Rita Chk!

Selecciona tu plan ideal:

[<a href='https://t.me/ritabotchk/35'>ϟ</a>] 15 días: <code>Lite</code>
Incluye: <code>Premium y grupo premium.</code>
Valor: <code>4 USD</code>

[<a href='https://t.me/ritabotchk/35'>ϟ</a>] 30 días: <code>Premium</code>
Incluye: <code>Premium, 30 Créditos, grupos premium</code>
Valor: <code>8 USD</code>

[<a href='https://t.me/ritabotchk/35'>ϟ</a>] 30 días: <code>VIP +</code>
Incluye: <code>Premium + 50 Créditos + Todo.</code>
Valor: <code>10 USD</code>

[<a href='https://t.me/ritabotchk/35'>ϟ</a>] 30 días: <code>Unlimited</code>
Incluye: <code>Premium + Todo.</code>
Valor: <code>24 USD</code>

[<a href='https://t.me/ritabotchk/35'>ϟ</a>] 30 días: <code>Friend</code>
Incluye: <code>Premium, 50 créditos para los 2 usuarios + Todo.</code>
Valor: <code>18 USD</code>

Tasas Personalizadas:

[<a href='https://t.me/ritabotchk/35'>ϟ</a>] 🇲🇽 Transferencia Spei (20 pesos el dolar)
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] 🇨🇴 Nequi y Bancolombia (4000 COP el dolar)
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] 🇵🇪 Yape (4 soles el dolar)
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] 🇻🇪 Pago Móvil (40 bs el dolar)

¿Necesitas más información?</b>
",
        'reply_markup'=> json_encode(['inline_keyboard'=>[
            [['text'=>"Rita Info!",'url'=>"https://t.me/ritabotchk/40"],
            ['text'=>"Rita Referencias!",'url'=>"https://t.me/+HGOyK54a3pAzMTNh"]],
            ],'resize_keyboard'=>true])
        ]);
}


if (strpos($message, "/creditos")===0 or strpos($message, "!creditos")===0 or strpos($message, ".creditos")===0){
        bot('sendMessage', [
            'chat_id' =>$chatId,
            'disable_web_page_preview' => true,
        'reply_to_message_id'=>$message_id,
        'parse_mode'=>'HTML',
        'text' => "<b>🍁 Credit Prices Rita Chk!

Selecciona tu crédito ideal:

[<a href='https://t.me/ritabotchk/35'>ϟ</a>] 50 créditos [ <code>3.50$</code> ] 📗
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] 150 Créditos [ <code>6.00$</code> ] 📘
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Unlimited 15 days [ <code>13.50$</code> ] 📔
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] Unlimited per month [ <code>18.50$</code> ] 📙

Tasas Personalizadas:

[<a href='https://t.me/ritabotchk/35'>ϟ</a>] 🇲🇽 Transferencia Spei (<code>20</code> pesos el dolar)
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] 🇨🇴 Nequi y Bancolombia (<code>4000</code> COP el dolar)
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] 🇵🇪 Yape (<code>4</code> soles el dolar)
[<a href='https://t.me/ritabotchk/35'>ϟ</a>] 🇻🇪 Pago Móvil (<code>45</code> bs el dolar)

¿Necesitas más información?</b>
",
        'reply_markup'=> json_encode(['inline_keyboard'=>[
            [['text'=>"Rita Info!",'url'=>"https://t.me/ritabotchk/40"],
            ['text'=>"Rita Referencias!",'url'=>"https://t.me/+HGOyK54a3pAzMTNh"]],
            ],'resize_keyboard'=>true])
        ]);
}