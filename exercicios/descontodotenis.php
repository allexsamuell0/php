<?php



$precoDoTenis = 12999;
$meuDinheiro = 8000;
$desconto = $precoDoTenis - $meuDinheiro;
$cupom = 100 * $desconto /$precoDoTenis;
$resultadofinal=(int)$cupom;
echo"O valor do cupom deve ser $resultadofinal%";









?>