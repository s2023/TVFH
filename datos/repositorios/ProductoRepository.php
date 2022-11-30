<?php
require_once 'AbstractRepository.php';

class ProductoRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct(
            "tblproducto",
            "idProducto",
            "PACrearProducto",
            "PAVerProducto",
            "PAEditarProducto",
            "PAEliminarProducto"
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
            $sp = $this->db->prepare("CALL $this->paCrear(?,?,?,?,?,?,?,?,?)");

            $x = 0;
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_LOB);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
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
            $sp = $this->db->prepare("CALL $this->paEditar(?,?,?,?,?,?,?,?,?)");

            $x = 0;
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_LOB);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
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
            $sql = "SELECT p.*, c.*, vp.*, ep.*, " .
                "(SELECT COUNT(*) FROM tbldetallepedido WHERE productoId = p.idProducto) as totalVentas " .
                "FROM $this->tabla AS p " .
                "INNER JOIN tblcategoria AS c ON c.idCategoria = p.categoriaId " .
                "INNER JOIN tblvisibilidadproducto AS vp ON vp.idVisibilidadProducto = p.visibilidadProductoId " .
                "INNER JOIN tblestadoproducto AS ep ON ep.idEstadoProducto = p.estadoProductoId";
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
            $sql = "SELECT p.*, c.* FROM $this->tabla AS p " .
                "INNER JOIN tblcategoria AS c ON c.idCategoria = p.categoriaId " .
                "WHERE p.idProducto = $id LIMIT 1";
            $consulta = $this->db->query($sql);
            $resultado = $consulta->fetchObject();

            if (!$resultado) {
                return null;
            }
            return $resultado;
        } catch (Exception $e) {
            $this->manejarExcepcion($e);
        }
    }

    /**
     * Método para buscar por texto
     * @param string $busqueda
     */
    public function buscarProductos(string $busqueda): array
    {
        try {
            $sql = "SELECT p.*, c.* FROM $this->tabla AS p " .
                "INNER JOIN tblcategoria AS c ON c.idCategoria = p.categoriaId " .
                "WHERE p.nombreProducto LIKE '%$busqueda%'";
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
     * Método para buscar por texto
     * @param string $busqueda
     */
    public function buscarProductosPorCategoriaId(string $id): array
    {
        try {
            $sql = "SELECT p.*, c.* FROM $this->tabla AS p " .
                "INNER JOIN tblcategoria AS c ON c.idCategoria = p.categoriaId " .
                "WHERE p.categoriaId = $id";
            $consulta = $this->db->query($sql);

            while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $this->todos[] = $filas;
            }

            return $this->todos;
        } catch (Exception $e) {
            $this->manejarExcepcion($e);
        }
    }
}