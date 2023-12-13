<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Juego</title>
</head>
<?php if (empty(session_id())) {
    session_start();
}
    ?>
<body>
    <main>
        <form method="post" action="?controller=carro&function=update">
            <label for="nombre">Nombre</label>
            <input type="text" placeholder=""><!--recoger el nombre para el placeholder de la BD-->
            <label for="precio">Precio</label>
            <input type="number" placeholder=""><!--recoger la precio para el placeholder de la BD-->
            <input type="submit" value="submit">
    </main>
</body>

</html>