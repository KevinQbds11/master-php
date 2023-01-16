<?php
//operadores aritmeticos
$num1=55;
$num2=33;

echo 'Suma= '.($num1+$num2).'<br>';
echo 'Resta= '.($num1-$num2).'<br>';
echo 'Multiplicación= '.($num1*$num2).'<br>';
echo 'División= '.($num1/$num2).'<br>';
echo 'Residuo/Resto/Modulo= '.($num1%$num2).'<br>';
echo 'Raíz Cuadrada= '.(sqrt($num1)).'<br>';
//echo 'Potencia= '.().'<br>';

//operadores de incremento y decremento

$year=2019;
//los basicos son
//$year=2019+1; o $year=2019-1;

//incremento
$year++;
echo $year.'<br>';
//preincremento
echo (++$year).'<br>';


//decremento
$year--;

//predecremento
echo(--$year).'<br>';



//operadores de asignación

$estudiante='kevin';
$estudiante2='valentina';
$estudiante3='alejandra';

//asignacion abreviada (mas util)

echo ($year+=5).'<br>';
// year=year+5
echo ($year-=5).'<br>';
// year=year-5
echo ($year*=5).'<br>';
// year=year*5





?>