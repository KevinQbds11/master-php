<?php
/**Ejercicio 3
 * Programa que compruebe si una variable está vacía
 * Si está vacía rellenarla con texto en minuscula
 * Mostrarlo en mayusculas y negrita
 */

function generateRandomString()
{
    $abc = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str_random = '';
    for ($i = 0; $i < 10; $i++) {
        $str_random .= $abc[rand(0, 51)];
    }
    return $str_random;
}

$var = '';
if (empty($var)) {
    $var = strtolower(generateRandomString());
    var_dump($var);
    echo "<b>".strtoupper($var)."</b>";
}

?>