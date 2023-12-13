<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<?php if (empty(session_id())) {
    session_start();
}
    ?>
<body>
    <a href="?">Volver a inicio</a>
    <form action="?controller=auth&function=doLogin" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <br>
        <input type="submit" value="Iniciar sesion">
    </form>
</body>

</html>