<?php

/*BUCLE WHILE
ESTRUCTURA DE CONTROL QUE INDICA EL ITERAR O REPETIR UNA SERIE
DE INSTRUCCIONES SEGUN SE INDIQUE LA CONDICION DEL BUCLE,
ES DECIR, SE EVALUA PRIMERO LA CONDICION Y DESPUES SE EJECUTAN LAS INSTRUCCIONES
*/
$var = 5;
while ($var != 0) {
    echo "el valor de la variable es $var, ";
    $var--;
}
echo '<hr>';

//ejemplo WHILE tabla de multiplicar
/*isset sirve para verificar si se contiene un valor correctamente dentro de una variable
se puede incluso usar para verificar si existe una variable o el indice de un arreglo
*/
if (isset($_GET['numero'])) {
    //casting de dato en este caso cambio de tipo a int
    $numero = (int) $_GET['numero'];
} else {
    $numero = 1;
}
echo '<h1>TABLA DE MULTIPLICAR</h1>';
$contador = 0;

while ($contador <= 10) {
    echo "$contador x $numero = <b>" . $contador * $numero . '</b> <br>';
    $contador++;
}

var_dump($numero);


echo '<hr>';

/*BUCLE DO WHILE
ES UN TIPO DE BUCLE QUE LO QUE BUSCA ES PRIMERO REALIZAR UNA SERIE DE INSTRUCCIONES Y DESPUES EVALUAR LA CONDICION. FUNCIONA CASI IGUAL QUE EL WHILE PERO
ESA DIFERENCIA SEMANTICA ES FUNDAMENTAL A LA HORA DE ARROJAR UN RESULTADO
*/
$var2 = 1;
do {
    //bloque de instrucciones
    echo "$var2";
    $var2--;
} while ($var2 != 0);
?>