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

        //  $insert = "INSERT INTO juegos (nombre, precio) VALUES('The Legend of Zelda: Breath of the Wild', 59.99),('Grand Theft Auto V', 39.99),('Red Dead Redemption 2', 49.99),('Minecraft', 26.95),('Highfleet', 19.99),('FIFA 22', 59.99),('Super Mario Odyssey', 49.99),('Call of Duty: Warzone', 0),('Among Us', 4.99),('Cyberpunk 2077', 59.99)";

        // $db->query($insert);

        //comentado el insert para insertar de nuevo los juegos
    }

    public static function selectJuegos($db): PDOStatement
    {
        $query = "SELECT * FROM juegos;";

        $result = $db->query($query);
        return $result;
    }
}
