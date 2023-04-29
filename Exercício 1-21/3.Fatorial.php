<?php
$n = readline("Digite um número: ");
$fatorial = 1 ;
for($p = $n; $p >= 1; $p--){
    $fatorial = $fatorial * $p; 
}
echo $fatorial;