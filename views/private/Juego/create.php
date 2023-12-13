<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Juego</title>
</head>

<body>
    <main>
        <form method="POST" action="?controller=juego&function=save">
            <input type="text" name="nombre" value="">
            <input type="number" name="precio" value="">
            <button class="boton-cesta" type="submit">Crear</button>
        </form>

    </main>
</body>

</html>