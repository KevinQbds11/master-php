<?php
/**Un programa que añada valores a un array mientras la longitud sea menor que 120
 * Mostrarlo en pantalla
 */

function mostrarArray($array)
{
    $number = '';
    foreach ($array as $key => $value) {
        $number .= 'indice: ' . $key . '  numero: ' . $value . '<br>';
    }
    return $number;
}
/*function llenarArray120()
{
$array =array();
for ($i = 0; $i < 120; $i++) {
$array[$i] = $i;
}
return $array;
}
*/

echo "<h1>Programa numeros menores que 120</h1>";
$array_120 = array();
//$array_120 = llenarArray120();
echo mostrarArray($array_120);


//Tambien se puede usar la funcion array_push()
echo '<h1>Mostrar array con array_push()</h1>';
$array_120_2 = array();
for ($i = 0; $i < 120; $i++) {
    array_push($array_120_2, $i);
}
echo mostrarArray($array_120_2);

?>