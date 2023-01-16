<?php

/*Las funciones en php son la meca de la hermosura xd de aqui ya parte lo más interesante de programar para mi 
Las funciones son un conjunto de instrucciones que se agrupan bajo un nombre en concreto y quue pueden reutilizarse solamente con su invocacion
tantas veces como queramos
function nombreFuncion($parametro[recordemos que las variables aqui son para usar localmente]){
conjunto de instrucciones que queremos que se ejecuten*
**Recordemos que siempre se debe colocar lo que queremos que la funcion retorne**
}
invocacion:
nombreFuncion($mi_parametro);
//EXCELENTE PRACTICA: Siempre devolver en una variable los strings o los enteros, no importa, la gracia es siempre usar el return en 
todas las funciones posibles
nota: Hacer uso de la herramienta de concatenación '.=' para concatenar strings
siempre que se concatene alguna variable dentro de un echo o dentro de otra variable se convertirá en un string
*/

function potencia($base, $expo)
{
    $potencia = pow($base, $expo);
    return $potencia;
}


function bienvenida()
{
    $bienvenida = '<h1><strong>Bienvenido!</strong> Esta es la calculadora de potencias</h1><br>';
    return $bienvenida;
}
function showMenu($mi_base, $mi_expo, $nt, $num_extra = 0)
{
    $show_menu =
        "<p>Tu base es: $mi_base<br>" .
        "Tu exponente es: $mi_expo<br>" .
        "Tu resultado es: " . potencia($mi_base, $mi_expo) . "<br>" .
        "Tu numero para sacar su tabla de multiplicar es: $nt</p><br>";
    return $show_menu;
}
function mostrarTablaMultiplicar($multiplicando)
{
    //encabezado tabla de multiplicar
    $tabla_multiplicar =
        "<table border=1>
    <tr>
    <td>Tabla de Multiplicar del número $multiplicando</td>
    </tr>
    <tr><th>Multiplicando</th>
    <th>Multiplicador</th>
    <th>Resultado</th>
    </tr>" . multiplicacionRow($multiplicando) . '</table>';
    return $tabla_multiplicar;
}
function multiplicacionRow($multiplicando)
{
    $multiplicacion_row = '';
    for ($i = 0; $i <= 10; $i++) {

        $multiplicacion_row .= "<tr>
        <td>$multiplicando</td>
        <td>$i</td>
        <td>" . $multiplicando * $i . "</td>
        </tr>";
    }
    return $multiplicacion_row;
}

//$mi_base = 
$_GET['BASE'] = 5;
//$mi_expo = 
$_GET['EXPO'] = 2;
//$nt = 
$_GET['NT'] = 5;
if (isset($_GET['BASE']) && isset($_GET['EXPO']) && isset($_GET['NT'])) {
    //variables
    $mi_base = $_GET['BASE'];
    $mi_expo = $_GET['EXPO'];
    $nt = $_GET['NT'];
    echo bienvenida();
    echo showMenu($mi_base, $mi_expo, $nt);
    echo mostrarTablaMultiplicar($nt);
    /*tambien puedo hacer funciones con parametros opcionales
    Esto se hace poniendo un parametro en la funcion y asignarle un valor por defecto, para despues si deseo, puedo modificarlo
    o cambiarle el valor. MI EJEMPLO ESTÁ EN LAL FUNCION SHOWMENU
    */
} else {
    echo '<h1>No has digitado nada por parametro GET</h1>';
}


?>