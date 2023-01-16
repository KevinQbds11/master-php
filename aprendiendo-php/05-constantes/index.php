<?= "hola mundo" ?>
<!--Esto es un shortcut para un tag de php y colocar un echo-->

<?php
//constantes contenedor de datos que no cambia su valor a través de la ejecución del programa


//variable
$var = 5;

echo "<br>$var";

$var = 10;
echo "<br>$var";
//constante
//define('constant_name', value);
define('nombre', 'Kevin Castillo');
define('edad', 21);

//para mostrar una constante solo colocamos el nombre de la constante sin el signo del dolar
echo '<br>' . nombre;
echo '<h1> Mi nombre es: ' . nombre . ' y tengo: ' . edad . ' años</h1><br>';

/*volvemos a definir la variable nombre con otro valor y lo mostramos.
nos sale error ya que la variable ya existe y está definida por lo que ya es constante y no se le
puede modificar su valor*/

echo 'define(nombre,Emiliano Martinez)<br>';

/* **Las constantes que están definidas con un nombre no le da exclusividad al nombre de la constante,
es decir, se puede usar el nombre de la constante en una variable */

$nombre = 'Kevin Castillo';
//concateno a lo que ya tenía otro string que en este caso es mi segundo apellido
$nombre = $nombre.'Cubides';
echo "$nombre <br>";
$nombre = 'Victor Robles';
echo "$nombre <br>";

//php contiene constantes predefinidas

echo PHP_VERSION . '<br>';
echo PHP_OS . '<br>';
echo PHP_EXTENSION_DIR . '<br>';

function holamundo()
{
    echo __FUNCTION__ . '<br>';
}

holamundo();

//usando un echo __ puedo ver las demás variables predefinidas o con PHP__

?>