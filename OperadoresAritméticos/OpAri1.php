<?php


$a=4832;
$b=342;
$c=234;
$d=7;
$e=2;
$adicao=$a+$b;

echo"soma:$adicao<br><br><br>";

$multiplicacao=$b*$a;

echo"multiplicacao:$multiplicacao<br><br><br>";

$subtracao=$a-$c;

echo"subtracao:$subtracao<br><br><br>";


$divisao=$c/$a;


echo"divisao:$divisao<br><br><br>";

$divisao2=$d/$e;

echo"divisao:$divisao2<br><br><br>";


$resto=$a%$b;

echo"resto:$resto<br><br><br>";

echo "<hr>";

$conta=34453.56;

$conversao=number_format($conta,2,",",".");

echo "seu saldo e: R$ " . $conversao . "<br><br>  .";

$debito=329.67;

$conversao=number_format($debito,2,",",".");

echo "vc esta devendo : R$ " . $conversao. "<br><br>  .";

echo"<hr>";

$sobra=$conta-$debito;

$conversao=number_format($sobra,2,",",".");

echo "seu saldo ficou R$" .$conversao. ".<br><br>";


