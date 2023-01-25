<?php
/**Ejercio 4
 * Script en php que contenga 4 variables
 * array
 * string
 * int
 * bool
 * Ímprimir un mensaje segun el tipo de variable que sea
 *
 */

function sendMessageVar($show)
{
    $msg = 'es un: ' . gettype($show) . '<br>';
    return $msg;
}


//if (isset($_GET['word'])) {
$var = ['alas']; //$_GET['word'];
if (is_array($var)) {
    echo sendMessageVar($var);
} else if (is_string($var)) {
    echo sendMessageVar($var);
} else if (is_int($var)) {
    echo sendMessageVar($var);
} else if (is_bool($var)) {
    echo sendMessageVar($var);
}
/*} else {
echo "<h1>NO HA DIGITADO NADA POR URL EN EL CAMPO 'word'</h1>";
}*/
for($i=0;$i<3;$i++){
    echo $i.'<br>';
    
}
$variable=true + true + true * 3;
var_dump($variable);
?>
