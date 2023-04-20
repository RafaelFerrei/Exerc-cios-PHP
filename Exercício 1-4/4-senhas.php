<?php
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
