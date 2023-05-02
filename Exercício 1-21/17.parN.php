<?php
$n[0] = readline("Digite um número par: " );
$n[1] = readline("Digite um número par: ");
$n[2] = readline("Digite um número par: ");
$arr = array($n[0], $n[1], $n[2]);
$string = implode(",", $arr);

echo $string; 