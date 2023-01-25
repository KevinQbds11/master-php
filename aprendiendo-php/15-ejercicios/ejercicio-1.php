<?php
/** Ejercicio uno crear un  programa con un  array de 8 numeros y que haga lo siguiente:
 * Recorrerlo y mostrarlo ---
 * Ordenarlo y Mostrarlo ---
 * Mostrar su longitud ---
 * Buscar un elemento del array ---
 */
function mostrarArray($array)
{
    $resultado = '';
    foreach ($array as $key => $numero) {
        $resultado .= 'indice: ' . $key . ' ' . 'numero: ' . $numero . '<br>';
        // mala paractica los echos en el for echo 'indice: ' . $key . '  ' . 'Valor: ' . $numero . '<br>';

    }
    var_dump($resultado);
    return $resultado; //La variable resultado se ha vuelto un string con saltos de linea y espacios
}

$numeros = array(1, 5, 6, 3, 2, 4, 8, 7);
echo '<h1>Ejercicio 1</h1><br>
<h2>Recorrerlo y Mostrarlo</h2><br>';
echo mostrarArray($numeros);

echo '<h2>Ordenarlo y mostrarlo</h2>';
sort($numeros);
echo mostrarArray($numeros);

echo '<br>La longitud del arreglo es: ' . count($numeros) .
    ' y la cantidad de elementos que hay en el arreglo es: ' . sizeof($numeros) . '<br>';

if (isset($_GET['number'])) {

    echo 'El numero que digitaste por la URL es: ' . $_GET['number'] . '<br>';

    $find_number = array_search($_GET['number'], $numeros);

    if (!empty($find_number)) {
        echo 'encontramos el numero que querias en el indice: ' . $find_number . '<br>';
    } else {
        echo 'No encontramos tu numero';
    }

} else {
    echo "<h3>Digita un numero por la url con el campo 'number'</h3>";
}



?>