<?'Bienvenido'?>
<a href="form.html" target="_self"title="Ingresar a seleccionar tu lenguaje">Ingresar</a>
<hr>
<?php

//CONDICIONALES
/*
IF:
    if(condicion){
        instruccion
    }else{

    }
//OPERADORES DE COMPARACION

== exactamente igual
=== identico
!= diferente
<> diferente
!== no identico
> mayor que
< menor que
>= mayor o igual que
<= mayor que

//OPERADORES LOGICOS
&& AND y
|| OR O
! NOT NO
and, or y/o
() separadores logicos, parentesis







*/

//ejemplo 1 color
$color = 'verde';
var_dump($color);
echo '<h2>¿El color es rojo? <br></h2';
if ($color == 'rojo') {
    echo '<p>Sí, es rojo</p>';
} else {
    echo '<p>No, es falso</p>';
}
//ejemplo 2 edad
$p1 = 15;
$nombre = 'david costas';
$mayoria_edad = 18;
if ($p1 >= $mayoria_edad) {
    echo $nombre . ' es mayor de edad';
} else {
    echo $nombre . ' no es mayor de edad';
}

//ejemplo 3 lenguaje con metodo post para digitar desde el teclado

if ($_POST != null) {
    $_POST['language'];

    echo 'El lenguaje que usted seleccionó es: ' . $_POST['language'] . '<br>';
    if ($_POST['language'] == 'english') {
        echo 'Welcome to your favorite website, it\'s a pleasure to have you back ';
    } else if ($_POST['language'] == 'spanish') {
        echo 'Bienvenido a tu sitio web favorito, es un placer tenerte de vuelta ';
    } else if ($_POST['language'] == 'mandarin-chinese') {
        echo 'Bienvenido a tu sitio web favorito, es un placer tenerte de vuelta *en chino xd';
    }

}
//SWITCH
$switchvar = 0;
switch ($switchvar) {
    case 1:
        echo 'LUNES';
        break;
    case 2:
        echo 'MARTES';
        break;
    case 3:
        echo 'MIERCOLES';
        break;
    case 4:
        echo 'MIERCOLES';
        break;
    case 5:
        echo 'MIERCOLES';
        break;
    case 6:
        echo 'MIERCOLES';
        break;
    case 7:
        echo 'MIERCOLES';
        break;
    case 0:
        echo 'MIERCOLES';
        break;
    default:
        echo 'ES FIN DE SEMANA';
}

//GOTO

goto marca;
//echo 'hola como vas';

//etiqueta o marca del goto 
marca:


?>