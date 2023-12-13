<?php
require_once 'Modelo.php';
class Usuario implements Modelo
{
    private $id;
    private $usuario;
    private $contraseña;
    private $rol_id;

    public function __construct() #Constructor
    {
    }

    public function getId()
    {
        return $this->id;
    }
    public function getUsuario()
    {
        return $this->usuario;
    }
    public function getContraseña()
    {
        return $this->contraseña;
    }
    public function getRol_Id()
    {
        return $this->rol_id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;
    }
    public function setRol_Id($rol_id)
    {
        $this->rol_id = $rol_id;
    }

    public function findAll()
    {
        $query = "SELECT * FROM usuarios;";
        $db = Database::conectar();
        $result = $db->query($query);
        $db = Database::desconectar();
        return $result;
    }
    public function findById($id)
    {
        $query = "SELECT * FROM usuarios WHERE id = " . $id;
        $db = Database::conectar();
        $resultado = $db->query($query);
        $db = Database::desconectar();
        return $resultado;
    }
    public function findByNombre($nombre)
    {
        $query = "SELECT * FROM usuarios WHERE nombre = '$nombre'";
        $db = Database::conectar();
        $resultado = $db->query($query);
        $db = Database::desconectar();
        return $resultado;
    }
    public function store($datos)
    {
        $nombre = $datos["nombre"];
        $contraseña = $datos["contraseña"];

        $query = "INSERT INTO usuarios (nombre, contraseña, rol_id) VALUES ('$nombre', '$contraseña',2)";

        $db = Database::conectar();
        $db->exec($query);
        $db = Database::desconectar();
    }
    public function updateById($id, $datos)
    {
        $query = "UPDATE FROM usuarios (nombre, contraseña) SET (nombre =" . $datos['nombre'] . ", contraseña ='" .  $datos['contraseña'] . "') WHERE id=" . $id . "";
        $db = Database::conectar();
        $db->exec($query);
        $db = Database::desconectar();
    }
    public function destroyById($id)
    {
        $query = "DELETE FROM usuarios WHERE id=" . $id . "";
        $db = Database::conectar();
        $db->exec($query);
        $db = Database::desconectar();
    }
}
