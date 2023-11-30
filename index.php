<?php
#CONTROLADOR FRONTAL
require_once 'db/Database.php';
require_once 'autoload.php';
#Creación de BD
$db = Database::conectar();
Database::iniciarTablas($db);
#SESION SE INICIA SI NO EXISTE
if (empty(session_id())) {
    session_start();
}
$carro = array();
$GLOBALS['carro'] = $carro;

#RUTAS:
if (isset($_GET['controller']) && isset($_GET['function'])) {
    $controller = $_GET['controller'];
    $controller = $controller . 'Controller';
    $controller = ucfirst($controller);

    $function = $_GET['function'];

    if (class_exists($controller)) {
        if (method_exists($controller, $function)) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                call_user_func($controller . '::' . $function, $id);
            } else {
                call_user_func($controller . '::' . $function);
            }
        } else {
            echo 'No exsite función ' . $function;
        }
    } else {
        echo 'No existe controlador ' . $controller . ' o funcion ' . $function;
        include 'views/errors/404.php';
    }
} else {
    include 'views/index.php';
}
