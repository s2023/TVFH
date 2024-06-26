<?php
require_once 'AbstractRepository.php';

class DetallePedidoRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct(
            "tbldetallepedido",
            "idDetallePedido",
            "PACrearDetallePedido",
            "PAVerDetallePedido"
        );
    }
    /**
     * Método para insertar en la base de datos
     *
     * @param mixed $modelo
     * @return mixed
     */
    public function insertar(array $modelo): void
    {
        try {
            $sp = $this->db->prepare("CALL $this->paCrear(?,?,?,?,?,?,?)");

            $x = 0;
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR); // it's double
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR); // it's double
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR); // it's double
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR); // it's double
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
    public function editar(array $modelo): void
    {
    }

    /**
     * Método para eliminar en la base de datos
     *
     * @param mixed $id
     * @return mixed
     */
    public function eliminar($id): void
    {
    }

    public function listarDetallesPorPedidoId(int $id): array
    {
        try {
            $sql = "SELECT dp.*, pr.*, c.* " .
                "FROM $this->tabla AS dp " .
                "INNER JOIN tblproducto AS pr ON dp.productoId = pr.idProducto " .
                "INNER JOIN tblcategoria AS c ON pr.categoriaId = c.idCategoria " .
                "WHERE dp.pedidoId = $id";
            $consulta = $this->db->query($sql);
            $resultado = array();

            while ($fila = $consulta->fetch(PDO::FETCH_OBJ)) {
                array_push($resultado, $fila);
            }

            return $resultado;
        } catch (Exception $e) {
            $this->manejarExcepcion($e);
        }
    }
}