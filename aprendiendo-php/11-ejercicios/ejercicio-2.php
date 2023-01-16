<?php
/*Sacar todos los numeros pares del 1 al 100 */
$i = 1;
while ($i <= 100) {
    if ($i % 2 == 0)
        echo $i.', ';
    $i++;
}
?>