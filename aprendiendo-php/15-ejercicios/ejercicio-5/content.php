<?php

$juegos = [];
require('juegos/accion.php');
require('juegos/aventura.php');
require('juegos/deportes.php');
//var_dump($juegos);

//Table created
echo '<table border=1> ';
//showing table headers
foreach($juegos as $key=>$value){
    echo "<tr> <th>$key</th>";
    echo "</tr>";
    foreach($juegos[$key] as $juego){
        echo "<tr>";
        echo "
        <td>$juego</td>";
        echo '</tr>';
    }
    
}


//foreach($juegos as $key=>$value){}
echo '</table>';

    

?>
