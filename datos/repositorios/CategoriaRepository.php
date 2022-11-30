<?php
require_once 'AbstractRepository.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/constantes/constantes.php';

class CategoriaRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct(
            "tblcategoria",
            "idCategoria",
            "PACrearCategoria",
            "PAVerCategoria",
            "PaEditarCategoria",
            "PAEliminarCategoria"
        );
    }
    /**
     * Método para insertar en la base de datos
     *
     * @param mixed $modelo
     * @return mixed
     */
    public function insertar(array $modelo)
    {
        try {
            $sp = $this->db->prepare("CALL $this->paCrear(?,?,?,?,?)");

            $x = 0;
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_LOB);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->execute();
        } catch (Exception $e) {
            $this->manejarExcepcion($e);
        }
    }

    /**
     * Método para editar en la base de datos
     *
     * @param mixed $modelo
     * @return mixed
     */
    public function editar(array $modelo)
    {
        try {
            $sp = $this->db->prepare("CALL $this->paEditar(?,?,?,?,?,?)");

            $x = 0;
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_LOB);
            $sp->execute();
        } catch (Exception $e) {
            $this->manejarExcepcion($e);
        }
    }

    /**
     * Método para eliminar en la base de datos
     *
     * @param mixed $id
     * @return mixed
     */
    public function eliminar($id)
    {
        try {
            $sp = $this->db->prepare("CALL $this->paEliminar(?)");

            $sp->bindValue(1, $id, PDO::PARAM_INT);
            $sp->execute();
        } catch (Exception $e) {
            $this->manejarExcepcion($e);
        }
    }

    public function listarTodos(): array
    {
        try {
            $sql = "SELECT c.*, ec.*, " .
            "(SELECT nombreCategoria FROM $this->tabla WHERE $this->id = c.padreCategoriaId LIMIT 1) as categoriaPadre, " .
            "(SELECT COUNT(*) FROM tblproducto WHERE categoriaId = c.idCategoria LIMIT 1) as totalProductos " .
            "FROM $this->tabla as c " .
            "INNER JOIN tblestadocategoria AS ec ON c.estadoCategoriaId = ec.idEstadoCategoria";
            $consulta = $this->db->query($sql);

            while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $this->todos[] = $filas;
            }

            return $this->todos;
        } catch (Exception $e) {
            $this->manejarExcepcion($e);
        }
    }

    public function listarTodosActivados(): array
    {
        try {
            $nombreCol = "nombreCategoria";
            $estadoCatCol = "estadoCategoriaId";
            $estado = EC_ACTIVADA;
            $sql = "SELECT * FROM $this->tabla WHERE $estadoCatCol = $estado ORDER BY $nombreCol";
            $consulta = $this->db->query($sql);

            while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $this->todos[] = $filas;
            }

            return $this->todos;
        } catch (Exception $e) {
            $this->manejarExcepcion($e);
        }
    }

    public function buscarPorId($id): object|null
    {
        try {
            $sp = $this->db->prepare("CALL $this->paVer(?)");
            $sp->bindValue(1, $id, PDO::PARAM_INT);
            $sp->execute();
            $resultado = $sp->fetchObject();
            if (!$resultado) {
                return null;
            }
            return $resultado;
        } catch (Exception $e) {
            $this->manejarExcepcion($e);
        }
    }
}