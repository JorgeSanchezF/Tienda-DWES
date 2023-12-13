<?php
require_once 'Modelo.php';
require_once 'db/Database.php';
class Juego implements Modelo
{
    #ATRIBUTOS:
    private $id;
    private $nombre;
    private $precio;

    public function __construct() #Constructor
    {
    }
    #GETTERS Y SETTERS: 
    public function getId()
    {

        return $this->id;
    }
    public function getNombre()
    {

        return $this->nombre;
    }
    public function getPrecio()
    {

        return $this->precio;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    #
    public function findAll()
    {
        $query = "SELECT * FROM juegos;";
        $db = Database::conectar();
        $result = $db->query($query);
        $db = Database::desconectar();
        return $result;
    }
    public function findById($id)
    {
        $query = "SELECT * FROM juegos WHERE id = $id";
        $db = Database::conectar();
        $resultado = $db->query($query);
        $db = Database::desconectar();
        return $resultado;
    }
    public function store($datos)
    {
        $nombre = $datos["nombre"];
        $precio = $datos["precio"];
        $query = "INSERT INTO juegos (nombre, precio) VALUES ('$nombre','$precio')";
        $db = Database::conectar();
        $db->exec($query);
        $db = Database::desconectar();
    }
    public function updateById($id, $datos)
    {
        $query = "UPDATE FROM juegos (nombre, precio) SET (nombre =" . $datos['nombre'] . ", precio =" .  $datos['precio'] . ") WHERE id=" . $id . "";
        $db = Database::conectar();
        $db->exec($query);
        $db = Database::desconectar();
    }
    public function destroyById($id)
    {
        $query = "DELETE FROM juegos WHERE id=" . $id . "";
        $db = Database::conectar();
        $db->exec($query);
        $db = Database::desconectar();
    }
}
