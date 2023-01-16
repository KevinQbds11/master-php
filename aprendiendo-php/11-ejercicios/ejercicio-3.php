<?php
/*Un programa que imprima por pantalla los cuadrados de los primeros 40 numeros naturales (1 al 40) (usar bucle while)*/
//la funcion pow se encarga de realizar potencias teniendo la siguiente estructura: pow(numero_base,numero_exponente);
//otra función parecida es la de raíz cuadrada que tiene la siguiente estructura: sqrt(numero_base, numero_raiz);
//usando for
for ($i = 1; $i <= 40; $i++) {
    echo "$i su cuadrado es: ".pow($i, 2).'<br>';
}

/*usando while */
$i = 1;
while ($i <= 40) {
    echo "$i su cuadrado es: ".pow($i, 2).'<br>';
    $i++;
}


?>