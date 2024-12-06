<?php

$operacao = 5;

switch ($operacao) {
    case 1:
        echo "Selecionado a opção $operacao: <strong>Pix</strong> <br>";
        break;

    case 2:
        echo "Selecionado a opção $operacao: <strong>Pagar Boleto</strong> <br>";
        break;
        
    case 3:
        echo "Selecionado a opção $operacao: <strong>Cofrinho</strong> <br>";
        break;
        
    case 4:
        echo "Selecionado a opção $operacao: <strong>Investimento</strong> <br>";
        break;

    default:
        echo "Operação não encontrada!<br>";
        break;
}
?>