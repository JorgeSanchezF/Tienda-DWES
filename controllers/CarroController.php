<?php
require_once 'Controller.php';
require_once 'db/Database.php';

class CarroController implements Controller
{

    public static function index()
    {


        include 'views/index.php';
    }
    public static function create()
    {
        //no se usa??
    }
    public static function save($datos)
    {
        $true = null;
        foreach ($GLOBALS['carro'] as $key => $value) {
            if ($value['nombre'] == $datos['nombre']) {
                $true = 1;
            }
        }
        if ($true == 0) {
            array_push($carro, $datos); //introduce array dentro de el carro
        } else {
            $GLOBALS['carro']['cantidad'] = ['cantidad'] + 1;
        }
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
