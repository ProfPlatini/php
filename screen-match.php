<?php 

echo "📺\tBem vindo ao Screen Match\t📺\n";

$nomeFilme = $argv[1] ?? "Top Gun - Maverick";
$anoLancamento = $argv[2] ?? 2022;
$notaFilme = $argv [3] ?? 8.8; #Número de ponto flutuante

echo "O nome do filme escolhido é $nomeFilme, lançado em $anoLancamento.\nSua avaliação é $notaFilme.";

