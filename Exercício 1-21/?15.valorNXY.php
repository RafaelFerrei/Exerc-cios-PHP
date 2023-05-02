<?php
$a = readline("Digite um número: ");
$b = readline("Digite um número: ");
$c = readline("Digite um número: ");
$arr = array("N" => $a, "X" => $b, "Y" => $c); 
$string = implode(",", $arr);
echo $string;