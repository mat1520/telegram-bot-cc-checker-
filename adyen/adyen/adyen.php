<?php

header('content-type: application/json');

$lista = $_GET['lista'];
if(empty($lista)){
    echo '{"success":false, "Message":"Please Enter Valid CC"}';
    exit();
}
$lista2 = $lista;
preg_match_all('/(\d{15,16})+?[^0-9]+?(\d{1,2})[\D]*?(\d{2,4})[^0-9]+?(\d{3,4})/', $lista, $lista);
$cc = $lista[1][0];
$mes = $lista[2][0];
$ano = $lista[3][0];
$cvv = $lista[4][0];

 if (strlen($ano) != 4) {
    $ano = "20".$ano;
 }

$key = $_GET['key'];

echo "$cc|$mes|$ano|$cvv\n";

if(empty($cc) || empty($mes) || empty($ano) || empty($cvv)){
    echo '{"success":false, "Message":"Please Enter Valid CC"}';
    exit();
}
if(empty($key)){
    echo '{"success":false, "Message":"Please Enter The Adyen Key"}';
    exit();

}

echo $key;

$lista = "$cc|$mes|$ano|$cvv";
$encrypt = shell_exec("CC=$cc MES=$mes ANO=$ano CVV=$cvv NAME='Elmo Heidenreich MD' KEY='$key' node encrypt/index.js");

if(empty($encrypt)){
echo '{"success":false, "Message":"Encrypt Failed"}';
}else{
    echo $encrypt;
}
