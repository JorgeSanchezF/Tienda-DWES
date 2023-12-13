<?php
//no se importa controller? no
require_once 'model/Usuario.php';
class AuthController
{
    public static function login()
    {

        include 'views/Sesion/login.php';
    }
    public static function register()
    {
        include 'views/Sesion/register.php';
    }
    public static function home()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']['rol_id'] == 2) { //si no admin y no user va a inicio de sesion
            include 'views/private/homeUser.php';
        } elseif (isset($_SESSION['user']) && $_SESSION['user']['rol_id'] == 1) {
            include 'views/private/homeAdmin.php';
        } else if (!isset($_SESSION['user'])) {
            header('Location: ?controller=auth&function=login');
        }
    }
    public static function doLogin() //no funciona??? devuelve a login siempre ARREGLADO
    {
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];


        $user = new Usuario();
        $user_log = $user->findByNombre($nombre)->fetch();

        if (password_verify($password, $user_log['contraseña'])) {
            $_SESSION['user'] = $user_log;
            unset($_SESSION['carro']);
            $_SESSION['carro'][] = $user_log['id'];


            header('Location: ?controller=auth&function=home');
        } else {
            //contraseña erronea
            header('Location: ?controller=auth&function=login');
        }
    }
    public static function doRegister()
    {

        if ($_POST['password'] === $_POST['password-verify']) {
            $nombre = $_POST['nombre'];
            $contraseña = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $usuario = new Usuario();
            $datos = array(
                'nombre' => $nombre,
                'contraseña' => $contraseña
            );
            $usuario->store($datos);

            header('Location: ?controller=auth&function=login');
        } else {

            header('Location: ?controller=auth&function=register');
        }
    }
    public static function cerrarSesion() //cierra sesion y envia a pagina principal
    {
        unset($_SESSION);
        // session_destroy();
        header('Location: ?');
    }
}
