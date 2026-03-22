<?php

//Exibir nome
echo "Platini\n";


//Cálculo de média 
$notaUm = 10;
$notaDois = 7;
$notaTres = 8;

$media = ($notaUm + $notaDois + $notaTres) / 3;

echo "A média final semestral, considerando as três notas é:$media\n";


//Conversos de metros para centímetros

$valorMetros = $argv[1] ?? 100; //?? para caso o usuário não insira valores.

$valorCentimetros = $valorMetros * 100;

echo "O valor em $valorMetros em centímetros é igual a $valorCentimetros\n";


//Descobrir se o ano é bissexto

$ano = $argv [2]; //Com o argv, a terceira instrução na linha de comando será incluída ao valor da minha variável.

if (($ano % 4 == 0 && $ano % 100 != 0 ) || ($ano % 400 == 0)){
    echo "O ano $ano é um ano bissexto!"; 
}
else {
    echo "o ano $ano não é um ano bissexto!";
}
