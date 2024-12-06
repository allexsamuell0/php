<?php


$a=2;

$b=3;

$c=8;

$resolucao=9;


echo" seu valo total e " .$resolucao. " mas com as operacao fica<br><br>";



$resolucao += $a;

// $resolucao %= $c;  segurar CTRL + : comenta a linha toda!!!!!!!!


echo"com a adicao fica " .$resolucao. " foi somado com $a.<br><br>";

echo"<hr>";

$subtracao=$resolucao -= $b;


echo"com a subtracao fica " .$subtracao. " foi subtraido com $b<br><br>";

echo"<hr>";

$multiplicacao=$resolucao *= $c;


echo"com a multiplicacao fica " .$multiplicacao. " foi multiplicado com $c<br><br>";

echo"<hr>";

$divisao=$resolucao /= $a;


echo"com a divisao fica " .$divisao. " foi divido com $a<br><br>";

echo"<hr>";

$resto=$resolucao %= $c;


echo"com a divisao o resto fica " .$resto. " foi retiado $c<br><br>";


echo"<hr>";


$oi="bom ";
$oi.=" dia";
$oi.=",tudo bem?";

echo"$oi<br><br>";

