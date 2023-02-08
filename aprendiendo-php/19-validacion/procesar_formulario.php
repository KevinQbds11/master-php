<?php
if (empty($_POST['name']) || empty($_POST['last-name']) || empty($_POST['age']) || empty($_POST['email']) || empty($_POST['pass'])) {
    $error = 'faltan valores';
} else {
    $error = 'ok';

    $nombre = $_POST['name'];
    $apellido = $_POST['last-name'];
    $edad = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    //validar nombre
    if (!is_string($nombre) || !preg_match("/[a-zA-Z ]+/", $nombre)) {
        $error = 'nombre';
    }
    //validar apellido
    if (!is_string($apellido) || !preg_match("/[a-zA-Z ]+/", $apellido)) {
        $error = 'apellido';
    }
    //validar edad
    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = 'edad';
    }
    //validar email
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'email';
    }
    //validar password
    if (!is_string($password) || strlen($password) < 5) {
        $error = 'password';
    }
}
if ($error != 'ok') {
    header("Location:index.php?error=$error");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Para Validar</title>
</head>

<body>
    <?php if ($error == 'ok') : ?>
        <h1>Datos validados correctamente</h1>
        <p><?= "$nombre" ?></p>
        <p><?= "$apellido" ?></p>
        <p><?= "$edad" ?></p>
        <p><?= "$email" ?></p>
        <p><?= "$password" ?></p>
    <?php endif; ?>
</body>

</html>