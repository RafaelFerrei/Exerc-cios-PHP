<?php

$senha1 = 1234;
$senha2 = "abcd";
$senha3 = 4567;
$resposta = $senha3;

if ($resposta == $senha1) {
    echo "A primeira senha está certa";
}

elseif($resposta == $senha2) {
    echo "A segunda senha está certa";
}

else {
   echo "A senha está errada, tenete novamente";
}
?>
