<?php

if(isset($_COOKIE['mi-cookie'])){
    //la borramos pero primero hay que caducar la cookie
    setcookie('mi-cookie', '', time() - 100);
    unset($_COOKIE['mi-cookie']);
    echo 'se borró la cookie';
}
if(isset($_COOKIE['oneyear'])){
    //la borramos pero primero hay que caducar la cookie
    setcookie('oneyear', '', time() - 100);
    unset($_COOKIE['oneyear']);
    echo 'se borró la cookie';
}
header('Location:ver_cookies.php');