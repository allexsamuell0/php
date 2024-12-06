<?php

////X1=1,X2=1   y1=1,y2=4;
////D=v2=(x2-x1)*2 + (y2-y1)*2 formula

$x1=1;
$x2=1;
$y1=1;
$y2=4;

$multiplicacaoX=($x2-$x1)**2;
$multiplicacaoY=($y2-$y1)**2;

$d=sqrt($multiplicacaoX + $multiplicacaoY);

echo"$d";



?>