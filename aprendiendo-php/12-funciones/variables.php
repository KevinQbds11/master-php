<?php
/*
Variables Locales:Son variables que su relevancia solo influyen dentro de la funcion o segmento de codigo donde están
declaradas. Solo se pueden usar dentro de la función a menos que yo haga un return
Variables Globales: Son variables que se declaran fuera de las funciones y están disponibles para el uso en cualquier 
lugar o sector del codigo
*/


//Variable Global
$frase = 'Ni los genios son tan genios, ni los mediocres tan mediocres<br>';
echo $frase;
echo frase();
//aqui si muestra la variable year ya que hay un return para esta funcion
echo anio();
function frase()
{
    //Para acceder al contenido de la variable global $frase
    global $frase;
    $frase = "<h1>$frase</h1><br>";
    return $frase;
    //return ;
}
function anio()
{
    $year = '2019<br>';
    return $year;
}
//Bota error porque no está declarada la variable year definida en este espacio
//echo $year;



//Funciones Variables Truco en PHP (Usar variables para almacenar el nombre de una funcion)

function buenosDias(){
    $saludo = 'hola buenos dias<br>';
    return $saludo;
}

function buenasTardes(){
    $saludo = 'hola buenas tardes<br>';
    return $saludo;
}
function buenasNoches(){
    $saludo = 'hola buenas noches<br>';
    return $saludo;
}

$horario = "buenasNoches";
echo $horario();

$horario = "Tardes";
$funcion = 'buenas'.$horario;
echo $funcion();

$horario = "buenosDias";
echo $horario();




$variable = 'buenasNoches';

$variable();

?>