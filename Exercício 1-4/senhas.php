<?php

$senha1 = 1234;
$senha2 = "abcd";
$resposta = $senha2;

if ($resposta == $senha1) {
    echo "A senha está certa";
}

elseif ($resposta == $senha2) {
    echo "A senha dois está certa";
}

else {
    echo "Senha incorreta tente novamente";
}

