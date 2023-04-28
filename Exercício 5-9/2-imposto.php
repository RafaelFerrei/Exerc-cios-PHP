
<?php
//Escreva um programa que solicite ao usuário o valor de um produto
//e o percentual de imposto a ser aplicado. O programa deve calcular
//o valor do imposto e imprimir o valor total do produto com imposto.
 
 $usuario = 1200;
 $imposto = 10/100;
$valor = "";

$resultado = ($imposto * $usuario);
$valor = ($resultado + $usuario);

echo "O valor total é ". $valor;
