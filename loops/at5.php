<?php


$original=[1,4,12,21,53,88,112];
$tamanho=count($original);///fala o tamanho do array

echo"$tamanho";
$pares=[];


for($i=0;$i<$tamanho;$i++){


 $calcular=$original[$i]%2;

 if($calcular==0){
array_push($pares,$original[$i]);


 };



};
echo "Números pares: " . implode(", ", $pares);


///echo "Números pares: $pares ";Por que dá erro?: $pares é um array, 
///e ao concatená-lo diretamente em uma string,
/// o PHP não sabe como convertê-lo para uma representação legível.
///usar . implode


///A função implode() no PHP é usada para unir os elementos de um
 ///array em uma única string, separando-os por um delimitador especificado.
 ///É especialmente útil para exibir os elementos de um array como uma string formatada.












?>