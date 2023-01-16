<?php
/**Imprimir por pantalla la tabla de multiplicar de los numeros del 1 al 10 */


/*

**dos for anidados para que se ejecute algo dentro del for mientras sea una condicion y despues pasar a evaluar el for de afuera
**el primer for se encarga de llevar el contador del numero principal de la tabla
**el segundo for se encarga de llevar el contador del numero por el cual se va a multiplicar el numero principal de la tabla
**el segundo for tambien se encarga de realizar las operaciones en base a los indices de los dos for
*/
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $res = $i * $j;
        if ($j == 1) {
            echo "<table border=1>
            <tr>
            <th>Tabla del $i</th>
            </tr>

            <tr>    
            <th>Numero</th>
            <th>Multiplicado por</th>
            <th>Resultado</th>
            </tr>
            ";
        }
        echo "<tr>
    <td>$i</td>
    <td>$j</td>
    <td>$res</td>
    </tr>";
        if ($j == 10)
            echo '</table><br>';

    }
}
?>