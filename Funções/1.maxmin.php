<?php
$arr = array(1,2,4,7,3,9);
$Resposta = readline("Quer o maior ou menor valor? ");
if ($Resposta == "maior") {
    echo max($arr);
}
elseif($Resposta == "menor"){
    echo min($arr);
}
