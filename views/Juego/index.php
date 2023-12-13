<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/productos.css">
    <title>Juegos</title>
</head>


<body>
    <main>
        <?php
        // var_dump($_SESSION['carro']) 
        ?>
        <h1>Juegos</h1>
        <a href="?controller=auth&function=home">Página principal</a>
        <a href="?controller=carro&function=index">Ver carro</a>
        <div id="contenedor">
            <?php
            foreach ($arrayJuegos as $key => $value) {
                echo '<div class="card">';
                echo '<img src="assets/img/' . $value['nombre'] . '.jpg" alt="imagen-juego">';
                echo '<div name="nombre">' .  $value['nombre'] . ' </div>';
                echo '<div name="precio">' .  $value['precio'] . '€ </div> ';

                echo ' <form method="POST" action="?controller=carro&function=save">';
                echo '<input type="hidden" name="id" value="' . $value['id'] . '">';
                echo '<input type="hidden" name="nombre" value="' .  $value['nombre'] . '">';
                echo '<input type="hidden" name="precio" value="' .  $value['precio'] . '">';
                echo '<button class="boton-cesta" type="submit" class="boton-cesta">Comprar</button>';
                echo ' </form>';

                echo '</div>';
            }
            ?>

        </div>
    </main>
</body>

</html>