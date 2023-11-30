<?php
require_once 'Controller.php';
require_once 'model/Juego.php';
class JuegoController implements Controller
{
    public static function index()
    {
        include 'views/index.php';
    }
    public static function create()
    {
        
    }
    public static function save($datos)
    {
    }
    public static function edit()
    {
    }
    public static function update($id)
    {
    }
    public static function destroy($id)
    {
    }
}
