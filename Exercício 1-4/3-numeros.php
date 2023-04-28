<?php
//Escreva um programa que solicite ao usuário dois números inteiros e verifique
//se o primeiro número é maior que o segundo número. Se o primeiro número for maior
//que o segundo número, o programa deve imprimir uma mensagem informando que o primeiro
//número é maior. Caso contrário, o programa deve imprimir uma mensagem informando
//que o segundo número é maior ou que ambos os números são iguais.

$n1 = 5;
$n2 = 10;

if ($n1 > $n2) {
    echo "O número maior é ". $n1;
}

elseif ($n1 < $n2){
    echo "O maior número é ". $n2;
}

else {
    echo "Os números são iguais";
}
