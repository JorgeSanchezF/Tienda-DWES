<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
    <link rel="stylesheet" href="assets/css/carro.css">
</head>

<body>
    <?php
    // var_dump($_SESSION['carro'])

    ?>
    <main>
        <a href="?controller=juego&function=index">Atras</a>


        <table>
            <thead>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($carrito as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $value['nombre'] . '</td>';
                    echo '<td>' . $value['precio'] . '</td>';
                    echo '<td>' . $value['cantidad'] . '</td>'; //cantidad

                    echo '<td><a href="?controller=carro&function=destroy&id=' . $value['id'] . '">Eliminar</a>';
                    echo '</tr>';
                    $total = $total + $value['precio'];
                }

                ?>

            </tbody>
        </table>
        <?php echo 'Total= ' . $total . '€'; ?>
    </main>
</body>

</html>