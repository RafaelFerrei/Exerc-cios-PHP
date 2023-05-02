<?php
$arr = array(
 array(2, 4, 5),
 array(4, 5, 6),
 array(1, 4, 7)
);
$soma = $arr[0][0] + $arr[0][1] + $arr[0][2];
$soma2 = $arr[1][0] + $arr[1][1] + $arr[1][2];
$soma3 = $arr[2][0] + $arr[2][1] + $arr[2][2];
$somafinal = $soma + $soma2 + $soma3;
echo $somafinal;