<?php

class CarroController
{

    public static function index() //ok
    {

        if (isset($_SESSION['user'])) {
            if (!isset($_SESSION['carro'][$_SESSION['user']['id']])) {
                $_SESSION['carro'][$_SESSION['user']['id']] = array();
            }

            $carrito = $_SESSION['carro'][$_SESSION['user']['id']];

            include 'views/Carro/index.php';
        } else {
            header('Location:?controller=auth&function=login');
        }
    }


    public static function save()
    {
        $noRepite = true;
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];

        $nuevoJuego = array(
            'id' => $id,
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => 1
        );

        $idUsuario = $_SESSION['user']['id'];

        if (empty($_SESSION['carro'])) {
            $_SESSION['carro'][$idUsuario][] = $nuevoJuego;
        } else {
            // AQUÍ BUSCAMOS SI SE REPITE Y SUMAMOS LA CANTIDAD
            $carroDeUsuario = $_SESSION['carro'][$idUsuario];

            foreach ($carroDeUsuario as $key => $juego) {
                if ($juego['id'] == $nuevoJuego['id']) {
                    $cantidad = $_SESSION['carro'][$idUsuario][$key]['cantidad'] + 1;
                    $_SESSION['carro'][$idUsuario][$key]['cantidad'] = $cantidad;
                    $noRepite = false;
                    break;
                }
            }

            if ($noRepite) {
                $_SESSION['carro'][$idUsuario][] = $nuevoJuego;
            }
        }

        header('Location: ?controller=carro&function=index');
        exit;
    }


    public static function destroy($id) //ok
    {
        $idUsuario = $_SESSION['user']['id'];
        $carroDeUsuario = $_SESSION['carro'][$idUsuario];
        for ($i = 0; $i < count($carroDeUsuario); $i++) {

            if ($carroDeUsuario[$i]['id'] == $id) {
                unset($_SESSION['carro'][$idUsuario][$i]);
                $_SESSION['carro'][$idUsuario] = array_values($_SESSION['carro'][$idUsuario]);
            }
        }

        header('Location:?controller=carro&function=index');
    }
}
