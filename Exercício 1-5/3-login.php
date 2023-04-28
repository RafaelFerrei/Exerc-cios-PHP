<?php
//Escreva um programa que solicite ao usuário uma senha.
//O programa deve permitir o acesso somente se a senha informada 
//pelo usuário for igual a "1234". Caso contrário, o programa
//deve imprimir uma mensagem informando que a senha está incorreta e solicitar novamente a senha.


$nome = "admin";
$senha = 1234;
$rsnome = "admin";
$rssenha = 1234;

if ($rsnome == $nome && $rssenha == $senha) {
    echo "Você entrou no login";
}

else{
    echo "o login está incorreto, solicitar novamente o nome de usuário e a senha.";
}
