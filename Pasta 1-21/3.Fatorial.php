<?php 
//Escreva um programa que solicite ao usuário um número inteiro e calcule o fatorial desse número. O programa deve imprimir o resultado.

$i = 5;
 $calc = 1;
  while ($i > 1){ 
    $calc *= $i; 
    $i--; 
}
   echo $calc;
