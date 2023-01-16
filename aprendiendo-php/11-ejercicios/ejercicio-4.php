<?php
/*Dos numeros por la url con el parametro get y debemos hacer todas las operaciones basicas de esos numeros */

if(isset($_GET['num1']) && isset($_GET['num2'])){
    echo 'MULTIPLICACION: '.$_GET['num1'] * $_GET['num2'].'<br>';
    echo 'DIVISION: '.round($_GET['num1'] / $_GET['num2'],0).'<br>';
    echo 'SUMA: '.$_GET['num1'] + $_GET['num2'].'<br>';
    echo 'RESTA: '.$_GET['num1'] - $_GET['num2'].'<br>';
}else{
    echo '<h1>Inserte unos digitos por la url.</h1><br>Pista: usar ?nombre_variable=valor&nombre_variable2=valor2';
}

?>