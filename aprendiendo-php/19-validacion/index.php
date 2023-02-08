<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Para Validar</title>
</head>

<body>
    <h1>Validar Formulario</h1>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 'faltan valores') {
            echo '<strong style="color:red;">Introduce todos los datos en todos los campos del formulario</strong>';
        }
    }
    ?>
    <form action="procesar_formulario.php" method="POST">
        <label for="name">Nombre(s): </label>
        <p><input type="text" name="name" autofocus="autofocus" required="required" pattern="[A-Za-z]+"></p>

        <label for="last-name">Apellidos: </label>
        <p><input type="text" name="last-name" required="required" pattern="[A-Za-z]+"></p>

        <label for="age">Edad: </label>
        <p><input type="number" name="age" required="required" pattern="[0-9]+"></p>

        <label for="email">E-mail: </label>
        <p><input type="email" name="email" required="required"></p>

        <label for="pass">Contraseña: </label>
        <p><input type="password" name="pass" required="required" minlength="8"></p>

        <p><input type="submit" value="Enviar"></p>
    </form>
</body>

</html>