<?php

$a = true;
$b = false;

$resultadoAnd = $a && $b;
$resultadoOr = $a || $b;
$resultadoNot = !$a;

echo  "Resultado porta AND: ";
var_dump($resultadoAnd);

echo "Resultado porta OR: ";
var_dump($resultadoOr);

echo "Resultado porta NOT: ";
var_dump($resultadoNot);
