<?php

$arr = array (1,2,3,4,5,6,7,8,9,10);

$soma = 0;

foreach($arr as $item){
   if ($item % 2 == 0) $soma += $item;
}

echo $soma;
