<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<?php if (empty(session_id())) {
    session_start();
}
?>

<body>
    <?php
    // var_dump($_SESSION); 
    ?>
    <main>

        <h1>Bienvenido Usuari@ <?php echo $_SESSION['user']['nombre']; ?></h1>
        <a href="?controller=juego&function=index">Ver juegos</a>
        <a href="?controller=auth&function=cerrarSesion">Cerrar Sesión</a>
    </main>
</body>

</html>