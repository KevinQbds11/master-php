<?php 

/*
    *Funciones para arrays
*/

                                        //ORDENAMIENTO

$cantantes = array('2pac','Drake','Jennifer Lopez','Alfredo');

//Ordena por orden alfabetico los elementos del array
asort($cantantes);

var_dump($cantantes);

//Ordena por orden alfabetico inversamente los elementos del array
arsort($cantantes);

var_dump($cantantes);


//Ordena por orden alfabetico los elementos del array pero hace que los indices del arreglo se ordenen también
//tambien sirve para ordenar por orden numerico
sort($cantantes);

var_dump($cantantes);


                                        //AÑADIR Y ELIMINAR ELEMENTOS A UN ARRAY
$cantantes[] = 'Natti Natasha';
var_dump($cantantes);

//array_push() and array_pop (añadir y eliminar el ultimo elemento en el arreglo)
array_push($cantantes,'Mora');
var_dump($cantantes);

array_pop($cantantes);

var_dump($cantantes);

//unset() eliminar elementos del array segun el indice que yo desee

unset($cantantes[1]);
var_dump($cantantes);

//seleccionar un elemento aleatorio de un array
echo array_rand($cantantes); 
?>