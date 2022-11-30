<?php
/**
 * Clase para obtener la conexión a la base de datos
 */
class Conexion
{
    /**
     * Nombre del servidor
     */
    private static string $host = 'localhost';
    /**
     * Nombre de la base de datos
     */
    private static string $db = 'dbtvfh';
    /**
     * Nombre del usuario
     */
    private static string $user = 'root';
    /**
     * Contraseña
     */
    private static string $password = '';
    /**
     * Objeto de conexión. Es de tipo PDO.
     */
    private static $conexion = null;

    /**
     * Método para obtener la conexion
     */
    public static function getConexion()
    {
        try {
            if (self::$conexion == null) {
                $conexion = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$db, self::$user, self::$password);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion->EXEC("SET CHARACTER SET UTF8");
                self::$conexion = $conexion;
            }

        } catch (Exception $e) {
            echo "Linea de error: " . $e->getLine() . "<br>";
            die("Error en la conexion: " . $e->getMessage());
        }

        return self::$conexion;
    }
}