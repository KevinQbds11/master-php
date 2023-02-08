<?php

/**Sesion: Almacenar datos que persistan mientras se navega por una app web
 * Las sesiones deben detectar que durante la navegacion dentro del sitio web la sesion permanece invariable (persiste)hasta que el usuario cierre sesion
 * o se salga del navegador
 * Debe almacenar datos en el servidor web
 * 
 */

 //INICIAR SESION

session_start(); //Hay que usar un session start en todas las paginas que vayamos a usar la variable global session

$var_normal = 'una cadena de texto'; 

//una sesion es una variable superglobal como el $_GET[''] y el $_POST['']
$_SESSION['var_persistente']='HOLA SOY UNA SESION ACTIVA';


echo $var_normal.'<br>';

echo $_SESSION['var_persistente'];

?>