<?php
$n[0] = readline("Digite um nome: " );
$n[1] = readline("Digite um nome: ");
$n[2] = readline("Digite um nome: ");
$arr = array($n[0], $n[1], $n[2]);
$string = implode(",", $arr);

echo $string; 