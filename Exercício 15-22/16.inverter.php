<?php
$input  = array("Shazam", 4.0, array("Pepino", "amarelo"));
$reservado = array_reverse($input);
$preservado = array_reverse($input, true);

print_r($input);
print_r($reservado);
print_r($preservado);
?>