<?php


// Exercício 02
// Contando letras
// Declare uma nova variável que contem um array contendo algumas letras.

// Faça um programa que conta quantas letras "E" ou "e" existem nesse array.

// Imprima mensagens bonitinhas para mostrar o resultado, por favor. Inclusive quando nenhuma letra for encontrada.

// Exemplos:

// a) Quando não houver nenhuma letra "E" ou "e" como no array letras

//$letras = ["A", "a", "B", "C", "L", "z"];

// // seu codigo aqui
// Deverá ser impresso no console:

// Nenhuma letra "E" ou "e" foi encontrada.
// b) Quando forem encontradas as letras "E" ou "e" no array letras

//$["A", "e", "B", "C", "E", "z"];

// // seu codigo aqui
// Deverá ser impresso no console:

// Foram encontradas 2 letras "E" ou "e". 

$letras = ["A", "a", "B", "C", "L", "z"];
$letraEscolhida=["B"];
$soma=0;


foreach ($letras as $letra) {
   foreach($letraEscolhida as $Escolhida){
    if( $letra===$Escolhida){
  $soma++; 
}
}
    
}

echo"$soma";


// O primeiro foreach percorre cada elemento de $letras e armazena o valor atual na variável $letra.
// Para cada elemento em $letras, o segundo foreach percorre o array $letraEscolhida (que contém apenas a letra "B") e armazena
// o valor atual na variável $Escolhida.
// A comparação if ($letra === $Escolhida) verifica se o valor de $letra é estritamente igual (===) ao valor de $Escolhida.
// O operador === compara tanto o valor quanto o tipo (exige que ambos sejam strings e tenham exatamente o mesmo conteúdo).
// Se a condição for verdadeira, o contador $soma é incrementado.




















?>