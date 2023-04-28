<?php
//Escreva um programa que solicite ao usuário um número inteiro
//e verifique se esse número está presente em um array de números previamente definido.
//O programa deve imprimir uma mensagem informando se o número foi encontrado ou não.


$numeros = array(1, 2, 3);
$resposta = 4; 

foreach($numeros as $numeros){
if ($resposta == $numeros){
    echo "O valor está dentro da array";
}

else{
    echo "O valor não esta dentro da array";
}
}
