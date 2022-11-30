<?php
require_once 'conexion/conexion.php';

/**
 * Repositorio padre, los hijos están separados por tablas
 */
abstract class AbstractRepository
{
    /**
     * Conexión a la base de datos
     */
    protected $db;

    /**
     * Todos los registros de la tabla
     */
    protected $todos;

    /**
     * Nombre de la tabla
     */
    protected string $tabla;

    /**
     * Nombre del id
     */
    protected string $id;

    /**
     * Nombre del procedimiento de crear
     */
    protected string $paCrear;

    /**
     * Nombre del procedimiento de ver
     */
    protected string $paVer;

    /**
     * Nombre del procedimiento de editar
     */
    protected string $paEditar;

    /**
     * Nombre del procedimiento de eliminar
     */
    protected string $paEliminar;

    /**
     * Constructor
     */
    public function __construct(
        string $tabla,
        string $id,
        string $paCrear = '',
        string $paVer = '',
        string $paEditar = '',
        string $paEliminar = ''
    )
    {
        $this->db = Conexion::getConexion();
        $this->todos = array();
        $this->tabla = $tabla;
        $this->id = $id;
        $this->paCrear = $paCrear;
        $this->paVer = $paVer;
        $this->paEditar = $paEditar;
        $this->paEliminar = $paEliminar;
    }

    /**
     * Método para insertar en la base de datos
     */
    abstract public function insertar(array $modelo);

    /**
     * Método para editar en la base de datos
     */
    abstract public function editar(array $modelo);

    /**
     * Método para eliminar en la base de datos
     */
    abstract public function eliminar($id);

    /**
     * Método para listar todos los registros de la tabla
     */
    public function listarTodos(): array
    {
        try {
            $sql = "SELECT * FROM $this->tabla";
            $consulta = $this->db->query($sql);

            while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $this->todos[] = $filas;
            }

            return $this->todos;
        } catch (Exception $e) {
            $this->manejarExcepcion($e);
        }
    }

    /**
     * Método para buscar un elemento por Id
     */
    public function buscarPorId($id): object|null
    {
        try {
            $consulta = $this->db->query("SELECT * FROM $this->tabla WHERE $this->id = $id LIMIT 1");
            $consulta->execute();
            $resultado = $consulta->fetchObject();
            if (!$resultado) {
                return null;
            }
            return $resultado;
        } catch (Exception $e) {
            $this->manejarExcepcion($e);
        }
    }

    protected function manejarExcepcion($e)
    {
        echo "Linea de error: " . $e->getLine() . "<br>";
        die("Error en la conexion: " . $e->getMessage());
    }
}