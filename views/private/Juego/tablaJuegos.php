<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Juegos</title>
</head>
<?php if (empty(session_id())) {
    session_start();
}
?>

<body>
    <a href="?controller=juego&function=index">A tienda</a>
    <a href="?controller=juego&function=create">Añadir</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($arrayJuegos as $key => $value) {
                echo '<tr>';
                echo '<td>' . $value['nombre'] . ' </td>';
                echo '<td>' . $value['precio'] . ' </td>';
                echo '<td><a href="?controller=juego&function=update&id=' . $value['id'] . '">Editar</a>';
                echo '<td><a href="?controller=juego&function=destroy&id=' . $value['id'] . '">Eliminar</a>';
            }
            ?>
        </tbody>


    </table>

</body>

</html>