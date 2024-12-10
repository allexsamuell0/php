<?php

$capacidade_de_agua_na_garrafa= 500;
$agua_na_garrafa=0;
$quantiade_por_dose=100;



do{

    $agua_na_garrafa+=$quantiade_por_dose;

    echo"voce colocou mais $quantiade_por_dose ml na garrafa.total
    de agua na garrafa agora e :$agua_na_garrafa ml<br><br>";


    if($agua_na_garrafa < $capacidade_de_agua_na_garrafa){
    echo "a garrafa ainda nao esta cheia,continue enchendo...<br><br>";
}

    } while($agua_na_garrafa < $capacidade_de_agua_na_garrafa);
    
echo"<br>A garrafa esta cheia com a $agua_na_garrafa ml de agua!!ml<br><br>";



/////Do-While
////O loop do-while tem comportamento parecido com o while, diferenciando-se somente na validação do loop, que é feita no final de cada iteração.

///Sintaxe do do-while:

///do {
    //bloco de código
///} while (condição) ;
//;
///Devido a essa característica, normalmente utilizamos essa estrutura de repetição quando desejamos que o bloco de código declarado no loop seja executado pelo menos uma vez.

//Exemplo de uso:

$i = 1;
do {
    echo" $i";
    $i++;
} while ($i < 11);

