<?php
/**Un arreglo es una coleccion de elementos recopilados bajo un mismo 
 * nombre, o bien, una variable con mucho valores dentro, y además, están organizados
 * gracias a un indice numerico o alfanumerico.
 * En php se puede declarar un arreglo de dos maneras:  */
$numeros = array('1', '2', '3', '4');
$letras = ['a', 'b', 'c', 'd'];

var_dump($numeros);
var_dump($letras);

/**Podemos acceder a los valores en el arreglo mediante el indice: */
var_dump($numeros[0]);

//recorrer con for el arreglo

/*Listado de numeros */

for ($i = 0; $i <=count($numeros)-1; $i++) {
    echo '<h2>' . $numeros[$i] . '</h2><br>';
}


//recorrer con foreach (Está diseñado especialmente para recorrer arrays y objetos)

/*
foreach ($variable as $value) {
    # code...
}
lo que quiere decir el foreach es que recorre todo el arreglo variable, y por cada iteracion se le asigna a la variable
$value el valor del elemento del array en el indice actual que ya despues nos sirve para realizar alguna operacion 
como imprimir en pantalla o escribir sobre el arreglo.
//////////////////////////////////////////////
foreach ($variable as $key => $value) {
    # code...
}
En este espacio lo que queremos decir es recorre el arreglo $variable y para cada indice del arreglo debe 
contar con un name de input al cual se asigna a la variable $key 
y $value es el valor que tiene el array en ese indice que a su vez, está asociado a un name de un input
*/

foreach ($letras as $letra => $value) {
    echo $letra.' = '.$value.'<br>';
}


/**
 *  Arrays asociativos
 * Los arrays asociativos son arrays que tienen un nombre asociado al indice de cada uno de los valores del array:
*/
//arreglo personas con indices alfanumericos nombre, apellido y github
$person = [
    'Nombre'=>'Kevin',
    'Apellido'=>'Castillo',
    'Github'=>'https://github.com/KevinQbds11'
];
//$personas = array('');
foreach ($person as $data => $value) {
    echo $data . ': ' . $value.'<br>';
}

/*Arrays Multidimensionales
Es un array con un array dentro

*/

$contactos = array(
    array(
        'nombre'=>'Kevin',
        'email'=>'kevincastillo8@hotmail.com'
    ),
    array(
        'nombre'=>'Kevin2',
        'email'=>'kevincastillo8@hotmail.com'
    ),
    array(
        'nombre'=>'Kevin3',
        'email'=>'kevincastillo8@hotmail.com'
    ),
    array(
        'nombre'=>'Kevin4',
        'email'=>'kevincastillo8@hotmail.com'
    ),
    array(
        'nombre'=>'Kevin5',
        'email'=>'kevincastillo8@hotmail.com'
    )
);

var_dump($contactos);

//para acceder a algun elemento del array multidimensional se hace de la siguiente manera:

echo $contactos[1]['nombre'];
echo '<hr>';
//inicialized count variable

foreach($contactos as $key=>$contacto){
    echo 'contacto numero:'.$key.'<br>'.'datos: <br>';
    foreach($contacto as $key=>$data){
        echo $key.': '.$data.'<br>';
    /*'Nombre del contacto: '.$contacto['nombre'].
    '<br>Email del contacto: '.$contacto['email'].
    '<br>';*/
    }echo '<br>';
    
    //echo $contacto[$i]['nombre'].'<br>'.$contacto[$i]['email'].'<br>';  
}


?>