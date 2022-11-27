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

                // TODO: remove this
                if (false) {
                    $query = $conexion->query("");
                    $query->execute();
                    $obj = $query->fetchObject();


                    $sp = $conexion->prepare("CALL sdfsfd(?,?)");
                    $x = 0;
                    $sp->bindValue(++$x, 1, PDO::PARAM_INT);
                    $sp->bindValue(++$x, "1", PDO::PARAM_STR);
                    // $sp->bindValue(++$x, "1", PDO::PARAM_);
                    $sp->execute();
                    $all = $sp->fetchAll(PDO::FETCH_ASSOC);
                    $first = $sp->fetchObject();
                }

                self::$conexion = $conexion;
            }

        } catch (Exception $e) {
            echo "Linea de error: " . $e->getLine() . "<br>";
            die("Error en la conexion: " . $e->getMessage());
        }

        return self::$conexion;
    }
}