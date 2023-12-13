<?php
require_once 'Controller.php';
require_once 'model/Juego.php';
class JuegoController implements Controller
{
    public static function index()
    {
        $juego = new Juego;
        $arrayJuegos = $juego->findAll()->fetchAll();

        require 'views/Juego/index.php';
    }
    public static function create()
    {
        require 'views/private/Juego/create.php';
    }
    public static function save()
    {
        $juego = new Juego;
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $datos = array(
            'nombre' => $nombre,
            'precio' => $precio
        );

        $juego->store($datos);
        header('Location: index.php?controller=juego&function=index');
    }
    public static function edit($id)
    {
        $juego = new Juego;
        $juego->findById($id)->fetchAll();
        require 'views/private/Juego/edit.php';
    }
    public static function update($id)
    {
        $juego = new Juego;
        if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
            $datos['nombre'] = $_POST['nombre'];
        }
        if (isset($_POST['precio']) && !empty($_POST['precio'])) {
            $datos['precio'] = $_POST['precio'];
        }

        $juego->updateById($id, $datos);
    }
    public static function destroy($id)
    {
        $juego = new Juego;
        $juego->destroyById($id);
        header('Location:?controller=juego&function=index');
    }
    public static function tablaJuegos()
    {
        $juego = new Juego();
        $arrayJuegos = $juego->findAll()->fetchAll();
        if ($_SESSION['user']['rol_id'] == 1) {
            require 'views/private/Juego/tablaJuegos.php';
        } else {
            header('Location:?');
        }
    }
}
