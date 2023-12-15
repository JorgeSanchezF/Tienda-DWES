<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<?php if (empty(session_id())) {
    session_start();
}
?>

<body>
    <?php
    //  var_dump($_SESSION); 
    ?>
    <h1>Bienvenido Admin <?php echo $_SESSION['user']['nombre'] ?></h1>
    <a href="?controller=juego&function=index">Ver juegos</a>
    <a href="?controller=juego&function=tablaJuegos">Administrar Juegos</a><!-- añadir function que lleva a tabla de juegos-->
    <a href="?controller=auth&function=tablaUsuarios">Administrar Usuarios</a>
    <a href="?controller=auth&function=cerrarSesion">Cerrar Sesión</a>
</body>

</html>