<?php

/**Para mostrar el valor de las cookies, tengo que usar $_COOKIE que es una variable superglobal
 * y que es un array asociativo
 */

echo "<p>";
if(isset($_COOKIE['mi-cookie'])){
    echo "<h1>".$_COOKIE['mi-cookie']."</h1>";
}else{
    echo 'No existe la cookie ';
}


if(isset($_COOKIE['oneyear'])){
    echo "<h1>".$_COOKIE['oneyear']."</h1>";
}else{
    echo 'No existe la cookie';
}
echo "</p>";
?>
<p>
<br>
<a href="crear_cookies.php">Crear cookies</a> 
<a href="borrar_cookies.php">Borrar cookies</a>
</p>