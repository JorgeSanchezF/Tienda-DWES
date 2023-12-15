<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Usuarios</title>
    <link rel="stylesheet" href="assets/css/tablaUsuarios.css">
</head>

<body>
    <a href="?controller=auth&function=home">Atras</a>
    <h2>Tabla de Usuarios</h2>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>

                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($usuarios as $key => $value) {
                echo '<tr>';
                echo '<td>' . $value['nombre'] . ' </td>';
                echo '<td>' . $value['rol_id'] . ' </td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

</body>

</html>