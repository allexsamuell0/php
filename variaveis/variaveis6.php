<?php

$resultado = "2";
echo "Resultado exemplo um: $resultado<br>";
var_dump($resultado);

$resultado_dois = $resultado + 1;
echo "Resultado exemplo dois: $resultado_dois<br>";
var_dump($resultado_dois);

$resultado_tres = $resultado_dois + 3.5;
echo "Resultado exemplo tres: $resultado_tres<br>";
var_dump($resultado_tres);

$resultado_quatro = 11;
var_dump($resultado_quatro);

$resultado_cinco = (double) $resultado_quatro;
echo "Resultado exemplo cinco: $resultado_cinco<br>";
var_dump($resultado_tres);

$resultado_seis = 8.9;
var_dump($resultado_seis);

$resultado_sete = (int) $resultado_seis;
echo "Resultado exemplo sete: $resultado_sete<br>";
var_dump($resultado_sete);
