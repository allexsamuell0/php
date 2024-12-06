<?php

///formula m=c(i+1)t

;
$i=0.125;///taxa
$c=1000;//capital
$t=5;///tempo

$montante=$c*(1+$i)**$t;

$resultado=(int)$montante;

echo"$resultado";







?>