<?php
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
