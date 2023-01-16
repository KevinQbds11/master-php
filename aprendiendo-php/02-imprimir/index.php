<!DOCTYPE html>
<html lang="es">

<head>
    <meta keywords="pagina con cabecera" />
    <meta charset="utf-8" />
    <title>Mi pagina con php</title>
</head>

<body>
    <header>
    <h1>Esta es la cabecera de mi proyecto para imprimir en pantalla</h1>
    </header>
    <section class="main">
    <?='Esto es un echo atajado que permite no tener que escribir dentro del tag de php. <br>
     llena tus datos :) <br>' ?>
        <?php
        echo '<h2>Estos son mis juegos y franquicias favoritas impresos en pantalla con un echo</h2>';
        echo '<ul> 
        <li> GTA V</li>
        <li> Elden Ring</li>
        <li> The Legend Of Zelda</li>
        </ul>
        
 
        <form> 
        <label for="full-name">inserta tu nombre completo aqui</label>
        <input type="text" name="full-name"/><br> <br>
        <label for="description">descripcion</label>
        <textarea name="description" title="digita tu descripcion aqui" placeholder="digita lo que quieras de ti"></textarea>
        <br>
        <p>
        <h3>Selecciona tu genero</h3> <br>
        <!--Aqui se usa el name para juntar una lista de elecciones-->
        <!--los label se pueden usar para inputs que tienen el atributo name independiente de los demás-->

        <h4>Hombre</h4><input type="radio" name="gender" value="h"/>
        
        <h4>Mujer</h4><input type="radio" name="gender" value="m"/>
        
        <h4>No binario</h4><input type="radio" name="gender" value="nb"/>

        <h3>Selecciona tus preferencias</h3> <br>
        
        <select name="preferences">
        <option>selecciona tu opcion</option>
        <option>oro</option>
        <option>plata</cobre>
        <option>platino</option>
        </select> <br> <br>
        <input type="submit" value="subir bbcita" title="subir"></input>
        </p>
        </form>
        
        ';
        
        ?>
    </section>
    <footer>
    <?php
    echo '
    <section class=""></section>
    <p><strong>te quiero :D</strong></p>'
    .'Esto es una concatenacion en php, en este caso de strings.<br> '
    .'Es en estos casos para concatenar lineas de texto o strings que se usa el punto y se abren 
    otras comillas similares a las que habia usado anteriormente.'
    .'Estoy concatenando, por lo tanto, el punto y coma se pone despues de terminar de concatenar; aparte
    me hace falta aprender a hacer comentarios en php ';
    /*O no? xd */
    ?>
    </footer>

</body>

</html>