<?php
/*Un programa que muestre todos los numeros entre dos numeros que lleguen por la url usando $_GET */

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

if (isset($_GET['num1']) && isset($_GET['num2'])) {
    
    if($num1<=$num2){
        echo '<h2>El numero 1 es menor que el numero 2</h2>';
        for ($i = $num1; $i <= $num2; $i++) {
            if ($i == $num2)
                echo "$i <br>";
            else
                echo "$i, ";
        }
    }else{
        echo '<h2>El numero 1 es mayor que el numero 2</h2>';
        for ($i = $num1; $i >= $num2; $i--) {
            if ($i == $num2)
                echo "$i <br>";
            else
                echo "$i, ";
        }
    }
    
} else {
    echo '<h1>Inserte los valores por la url</h1>';
}
?>