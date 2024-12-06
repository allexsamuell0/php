<?php



//Exercício 01
///Soma total
///Faça um programa que cria um array de números.

///Depois calcule e imprima no console a soma de todos os números desse array.

///Exemplo: Para o array números abaixo

///$numeros = [2, 3, 4, 6];

///seu codigo aqui
///Deverá ser impresso no console:

///15


$numeros = [2, 3, 4, 6];
$soma = 0;

foreach ($numeros as $numero) {
    $soma += $numero;
}

echo $soma;
