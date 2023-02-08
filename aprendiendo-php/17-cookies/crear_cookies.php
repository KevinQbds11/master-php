<?php

/**Cookies: Mecanismo por el cual se almacenan datos en el cliente, con el fin
 * de recordar datos o rastrear el comportamiento del usuario en la web
 * Se almacenan en ficheros locales del usuario
 */

//CREAR COOKIE

//setcookie("nombre-cookie", "valor que solo puede ser texto",caducidad, ruta, dominio);    
//Cookie normal
setcookie('mi-cookie','valor de mi galleta');

//cookie con expiracion
setcookie('oneyear', 'valor de mi cookie de 365 dias', time() + (/*cookie de un año ese tiempo se toma en segundos*/60 * 60 * 24 * 365));

header("Location:ver_cookies.php");
?>
