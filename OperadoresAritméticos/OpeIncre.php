<?php

echo"<h3>Pos-incremento</h3>";

$a=6;

echo" somar mais um a variavel: " .$a++. "<br><br>.";

//so vai add +1 na sengunda vez que for chamado por causa do formanto a"++",os + estao atras da variavel.

echo" agora imprimi o valor adicionado : $a <br><br>.";

echo"<hr>";


echo"<h3>Pre-incremento</h3>";

$b=6;

echo" somar mais um a variavel: " .++$b. "<br><br>.";

//vai ser na primeira impresao por causa do formanto "++"b.,os + estao a frente da variavel.



echo"<hr>";


echo"<h3>Pos-decremento</h3>";

$a=6;

echo" retirar mais um valor na variavel: " .$a--. "<br><br>.";

//so vai remover 1 na sengunda vez que for chamado por causa do formanto a"--",os + estao atras da variavel.

echo" agora imprimi o valor retirado : $a <br><br>.";

echo"<hr>";


echo"<h3>Pre-decremento</h3>";

$b=6;

echo" retirar mais um a variavel: " .--$b. "<br><br>.";

//vai ser na primeira impresao por causa do formanto "--"b.,os - estao a frente da variavel.


?>
