<?php



$a=10;
$b=11;
$c=10;

if($a==$b){//so tem que ser o msm numero(valor)
    echo" e verdadeiro as duas sao parecidas<br><br>";
}else{
    echo" e falso as duas nao sao parecidas<br><br>";
}


echo"<hr>";

if($a===$b){///identica tem quer ser o mesmo numero e o mesmo tipo int,string ou float
    echo" e verdadeiro as duas sao parecidas<br><br>";
}else{
    echo" e falso as duas nao sao parecidas<br><br>";
}


echo"<hr>";

if($a!=$b){//so tem que ser o msm numero(valor) para ser falso,pra ser verdadeiro tem que ter valores diferentes
    echo" e verdadeiro as duas sao diferentes<br><br>";
}else{
    echo" e falso as duas  sao parecidas<br><br>";
}


echo"<hr>";

if($a<$b){
    echo"o valor $a e menor que o $b<br><br>";
}else{
    echo"o valor $a  nao e menor que o $b<br><br>";
}


echo"<hr>";

if($a>$b){
    echo"o valor $a e maior que o $b<br><br>";
}else{
    echo"o valor $a  e menor que o $b<br><br>";
}



if( $a <= $b){
    echo "Verdadeiro: o número $a é menor ou igual ao valor $b <br><br>";
} else{
    echo "Falso: o número $a não é menor ou igual ao valor $b <br><br>";
}
echo"<hr>";



if( $a >= $b){
    echo "Verdadeiro: o número $a é maior ou igual ao valor $b <br><br>";
} else{
    echo "Falso: o número $a não é maior ou igual ao valor $b <br><br>";
}

?>