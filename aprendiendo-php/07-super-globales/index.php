<?php
//variables superglobales (las mas importantes) aqui esta variables superglobales son arrays
$_GET;
$_POST; //Es mas seguro para un form utilizar el metodo $_POST;
//variables de servidor

echo '<h1>'.$_SERVER['SERVER_ADDR'].'</h1>';
echo '<h1>'.$_SERVER['SERVER_NAME'].'</h1>';
echo '<h1>'.$_SERVER['SERVER_SOFTWARE'].'</h1>';
echo '<h1>'.$_SERVER['HTTP_USER_AGENT'].'</h1>';
echo '<h1>'.$_SERVER['REMOTE_ADDR'].'</h1>';

?>