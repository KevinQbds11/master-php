<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Recibo datos</title>
        <meta charset="utf-8">
    </head>
    <body>
        <header>
            <h1>recibiendo datos</h1>
        </header>
        <section class="main">
        <?="Aquí se recibieron los datos"?>
            <?php

            $name=$_POST['name'];
            $_POST['last-name'];
            $_POST['description'];
            $_POST['gender'];
            $_POST['preference'];
        
            var_dump($_POST);
            echo '<h3>Los datos recopilados fueron los siguientes: </h3><br>';
            echo '<h3>Nombre: '.$_POST['name'].'</h3><br>'.
            '<h3>Apellido: '.$_POST['last-name'].'</h3><br>'.
            '<h3>Descripcion: '.$_POST['description'].'</h3><br>'.
            '<h3>Genero: '.$_POST['gender'].'</h3><br>'.
            '<h3>Preferencia: '.$_POST['preference'].'</h3><br>';


            echo '<h2>Por otro lado voy a imprimir lo que obtuve de la variable global post desde otra variable: </h2><br>';
            echo '<h1>'.$name.'</h1>';
            ?>
        </section>
        <footer>
           <p>los <b>datos</b> enviados llegaron a esta pagina</p> 
        </footer>
    </body>
</html>