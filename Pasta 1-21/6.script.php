<?php
//Crie um script PHP que receba um array de números inteiros e retorne a soma de todos os números pares no array.

$arr = array (1,2,3,4,5,6,7,8,9,10);

$soma = 0;

foreach($arr as $item){
   if ($item % 2 == 0) $soma += $item;
}

echo $soma;
