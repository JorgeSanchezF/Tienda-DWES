<?php
require_once 'Modelo.php';
require_once 'Database.php';
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
        $db = Database::conectar();
        $query = "SELECT * FROM juegos;";
        $resultado = $db->query($query);
        $db = Database::desconectar();
        return $resultado;
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
        #no se usa en este caso ya que los juegos ya estan introducidos y no se van a cambiar
    }
    public function updateById($id, $datos)
    {
        #no se usa en este caso ya que los juegos ya estan introducidos y no se van a cambiar

    }
    public function destroyById($id)
    {
        #no se usa en este caso ya que los juegos ya estan introducidos y no se van a cambiar

    }
}
