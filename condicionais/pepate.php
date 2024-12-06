<?php
$pessoa1="tesoura";
$pessoa2="papel";




if($pessoa1==="pedra" && $pessoa2==="tesoura"){
    echo "pedra ganhou";
}elseif($pessoa1==="papel" && $pessoa2==="pedra" ){
 echo "papel ganhou";
}elseif($pessoa1==="papel" && $pessoa2==="tesoura"){
     echo "tesoura ganhou";
}elseif($pessoa1==="tesoura" && $pessoa2==="pedra"){
    echo "pedra ganhou";
}elseif($pessoa1==="pedra" && $pessoa2==="papel" ){
    echo "papel ganhou";
   }elseif($pessoa1==="tesoura" && $pessoa2==="papel"){
    echo "tesoura ganhou";
}



?>