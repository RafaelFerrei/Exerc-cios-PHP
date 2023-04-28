<?php
//Escreva um programa que solicite ao usuário uma senha de acesso.
//O programa deve permitir o acesso somente se a senha informada
//pelo usuário for igual a "1234" ou "abcd". Caso contrário, o programa
//deve imprimir uma mensagem informando que a senha está incorreta e solicitar
//novamente a senha. Utilize os operadores lógicos (ou e igualdade) para combinar as condições de senha válida.




$arr = array("1234", "abcd");

$senha = readline("Digite a senha:");

if($senha == $arr[0]){
    echo "A senha um está certa";

}

elseif($senha == $arr[1]){
    echo "A senha dois está certa";
}

else{
    echo "A senha está errada coloque novamente.";
}
?>
