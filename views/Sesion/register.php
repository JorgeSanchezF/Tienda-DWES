<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Registro de usuario</title>
</head>
<?php if (empty(session_id())) {
    session_start();
}
    ?>
<body>
    <form action="?controller=auth&function=doRegister" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <br>

        <label for="password-verify">Contraseña:</label>
        <input type="password-verify" id="password-verify" name="password-verify" required>
        <br>
        <input type="submit" value="Registrar">
    </form>
</body>

</html>