<?php
/**
 * 
 * PHP tiene miles de funciones predefinidas vamos a ver algunas de las más importantes:
 * 
 * 
 */
$nombre = 'kevin';
//funcion para mirar que trae la variable que se esta llamando
//DEBUGGEAR
var_dump($nombre) . '<br>';

//FECHAS

//php.net/manual/es/function.date.php
//$date = date('D-M-Y H:i:s a');
$date = date('d-m-Y h:i:s a');
//$date = date('d/m/y');
echo $date . '<br>';
//fecha en formato unix
echo time() . '<br>';


//MATEMATICAS
//raiz cuadrada
echo sqrt(10) . '<br>';
//potencia
echo pow(4, 2) . '<br>';
//numero aleatorio
//rand(); genera un numero aleatorio totalmente
$num_aleatorio = rand( /*Entre 0*/0, /*y 100*/100) . '<br>';
echo $num_aleatorio;

//Numero pi
$pi = pi();
echo $pi . '<br>';

//redondear un numero
$pi = round(pi(), /*precision*/1);
echo $pi . '<br>';



//FUNCIONES INTERNAS DE PHP

//obtener el tipo de variable
echo gettype($pi) . '<br>';

//si es de un tipo de dato o no
if (is_double($pi)) {
    echo 'es un double' . '<br>';
}

//si una variable existe dentro de nuestro programa
if (isset($edad)) {
    echo 'existe' . '<br>';
} else {
    echo 'no existe' . '<br>';
}
//limpiar los espacios de una variable //podemos sanear bastante la informacion de esta manera
$frasesita = '    asdasd      ';
var_dump($frasesita);
echo $frasesita . '<br>';
var_dump(trim($frasesita));

//eliminar variables e indices de arrays
$year = '2020';
unset($year);
//var_dump($year);

//comprobar variable si está vacia, si es null, si es false, etc.
$text = '';
if (empty($text)) {
    echo 'la variable esta vacia';
} else {
    echo 'no esta vacia la variable';
}
;

echo '<br>';
//contar caracteres de una cadena o de un string
$cadena = '12345';
echo strlen($cadena) . '<br>';

//encontrar caracter
echo strpos($cadena, /*eltexto que quiero buscar */'3').'<br>';
/*me indica que está en la posicion 2 (aunque pareciese que está el 3 en la posicion 3, en realidad está 
haciendo referencia como a la posicion de un array[2])*/

//reemplazar palabras de un string

$cadena=str_replace('45', '123',$cadena);
var_dump($cadena);

//Mayusculas y minusculas

$comentario = 'la programacion es bonita';
$comentario2 = 'LA programacion es bonita';
echo strtolower($comentario2).'<br>';
echo strtoupper($comentario).'<br>';


?>