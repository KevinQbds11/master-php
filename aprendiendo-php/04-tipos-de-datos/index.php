<h1>Esto es un ejemplo</h1>
<?php
/*TIPOS DE DATOS EN PHP
Entero (int, integer)[56]
Coma flotante/Decimales (float, double)[5.75, 6.78 ]
cadenas de texto (string) [este es una cadena]
Booleano (bool) [1,0 or true, false [se usa correctamente el true y el false]]
Nulo (null) [=null]
Arreglos/Vectores (arrays) [variable tipo* array []=[a,b]]
Objetos(conjunto de datos y funciones 
independientes que son mas complejos que los tipos de datos naturales)

**PHP ES UN LENGUAJE NO TIPADO O DEBILMENTE TIPADO A DIFERENCIA DE C++ QUE ES TIPADO 
**En php podemos nombrar las variables como queramos siempre y cuando no inicien con
un numero y no contengan guiones, entonces, si puede contener numeros pero no iniciar
por ellos y pueden contener guiones bajos

*/

$num=5;
$num1=5.5;
$var1='asdasd';
$var2=null;
$var3=true;

echo '<p>Mi numero es: '.$num. ' y su tipo de dato es: '. gettype($num). '</p>';
echo '<p>Mi numero es: '.$num1. ' y su tipo de dato es: '. gettype($num1). '</p>';
echo '<p>Mi variable es: '.$var1. ' y su tipo de dato es: '. gettype($var1). '</p>';
echo '<p>Mi variable es: '.$var2. ' y su tipo de dato es: '. gettype($var2). '</p>';
echo '<p>Mi variable es: '.$var3. ' y su tipo de dato es: '. gettype($var3). '</p>';


//Para debugging (depurar) mirar que tiene la variable sin imprimir en pantalla
$mi_nombre='Kevin Stiven Castillo Cubides';
var_dump($mi_nombre);

//Como mostrar una variable con echo mientras está dentro de un string

echo "Este es mi nombre: $mi_nombre". '<br>';
/*Para eso se necesita realizar un echo con comillas dobles, pero el uso de comillas
dobles hará más pesada la compilación y ejecución del programa, pero casi nada en verdad*/

/*echo "Quiero imprimir un salto de linea pero de la \n manera en que lo hice solo se reflejará a nivel de la cli (command line interface)<br>";
$texto ="\"Mi vida eres tu Jenniffer\"";
echo "$texto \n te amo"*/
?>