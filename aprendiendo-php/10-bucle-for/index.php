<?php
/*BUCLE FOR
EL BUCLE FOR ES UNA ESTRUCTURA DE CONTROL QUE NOS PERMITE REALIZAR UNA SECUENCIA DE ACCIONES ENTRE UN RANGO
DEFINIDO DE VECES QUE QUERAMOS QUE SE REPITA LA SECUENCIA DE ACCIONES.
ESTE TIPO DE BUCLES SE USAN SOBRE TODO CUANDO SABEMOS DESDE DONDE QUEREMOS INICIAR HASTA DONDE QUEREMOS IR
*/
$_GET['number'];
$res = 0;
for ($i = 0; $i <= $_GET['number']; $i++) {
    if ($res >= 7000)
        echo 'no se pueden mostrar estas operaciones';
    $res = $res + $i;
}
echo "el resultado de la suma es: $res";

/*
ejemplo for para un arreglo
$n = 100;

for($i=0; $i<=$n;$i++){
    for($j=0; $j<=$n;$j++){
        
    }
}*/
?>