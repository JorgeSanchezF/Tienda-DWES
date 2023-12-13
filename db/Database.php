<?php
class Database
{

    /**
     * Realiza la conexion a la base de datos
     */
    public static function conectar(): PDO
    {
        $db = new \PDO('sqlite:db/db.sqlite', '', '', array(
            \PDO::ATTR_EMULATE_PREPARES => false,
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ));
        return $db;
    }

    /**
     * Realiza la desconexion a la base de datos
     */
    public static function desconectar()
    {

        return null;
    }

    /**
     * Funcion de prueba para iniciar una tabla con contenido.
     */
    public static function iniciarTablas($db): void
    {

        $query = "CREATE TABLE IF NOT EXISTS juegos(id INTEGER PRIMARY KEY AUTOINCREMENT,nombre TEXT,precio FLOAT)";

        $db->exec($query);
        $query = "CREATE TABLE IF NOT EXISTS usuarios(id INTEGER PRIMARY KEY AUTOINCREMENT,nombre TEXT,contraseña TEXT, rol_id INTEGER)";
        $db->exec($query);
        $query = "CREATE TABLE IF NOT EXISTS roles(id INTEGER PRIMARY KEY AUTOINCREMENT,nombre TEXT)";
        $db->exec($query);

        //$insert = "DELETE FROM roles WHERE id=4";
        // $db->query($insert); //comentar cuando ya haya sido lanzado 1 vez
        $contraseña = '1234';
        $hashContraseña = password_hash($contraseña, PASSWORD_DEFAULT); //encripta la contraseña que introduzco con el usuario admin
        //$insertUsuarios = "INSERT INTO usuarios(nombre,contraseña,rol_id)VALUES('jorge','" . $hashContraseña . "',1)";
        //$db->query($insertUsuarios); //comentar cuando ya haya sido lanzado 1 vez

        //$insert = "INSERT INTO juegos (nombre, precio) VALUES('Highfleet', 19.99),('Lethal Company', 9.89),('Rule the Waves 3', 39.99),('Homeworld 3', 49.99),('Darktide', 39.99),('Alan Wake 2', 59.99),('Cyberpunk 2077', 59.99)";
        //$db->query($insert);
        //comentado el insert para no insertar de nuevo los juegos
    }
}
