<?php

//Um trabalhador recebe um salário base de R$ 2.500 por mês.
//Além disso, ele recebe uma comissão de 5% sobre o valor total de vendas realizadas no mês.
//Escreva um programa que calcule o salário final do trabalhador,
//com base no número de vendas realizadas e no valor total das vendas.
//Utilize o operador de multiplicação e atribuição para calcular a comissão e atualizar o salário base.

$x = 2500;
$z = 1500;

$x *= 12;
$z *= 12;

$c = $z + $x;

echo "O valor é ". $c;
