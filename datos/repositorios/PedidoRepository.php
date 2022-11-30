<?php
require_once 'AbstractRepository.php';

class PedidoRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct(
            "tblpedido",
            "idPedido",
            "PACrearPedido",
            "PAVerPedido",
            "PAEditarPedido"
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
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
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
            $sp = $this->db->prepare("CALL $this->paEditar(?,?)");

            $x = 0;
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
    }

    public function listarTodos(): array
    {
        try {
            $sql = "SELECT p.*, ep.*, u.*, " .
                "(SELECT SUM(totalPedido) " .
                "FROM tbldetallepedido " .
                "WHERE pedidoId = p.idPedido) as totalPedido " .
                "FROM $this->tabla as p " .
                "INNER JOIN tblestadopedido AS ep ON ep.idEstadoPedido = p.estadoPedidoId " .
                "INNER JOIN tblusuario AS u ON u.idUsuario = p.usuarioId ";
            $consulta = $this->db->query($sql);

            $pedidos = array();

            while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $pedidos[] = $filas;
            }

            return $pedidos;
        } catch (Exception $e) {
            $this->manejarExcepcion($e);
        }
    }

    /**
     * Listar pedidos por usuario
     *
     * @param mixed $idUsuario
     * @return array
     */
    public function listarPedidoPorUsuario($idUsuario): array
    {
        try {
            $sql = "SELECT p.*, ep.*, " .
                "(SELECT SUM(totalPedido) " .
                "FROM tbldetallepedido " .
                "WHERE pedidoId = p.idPedido) as totalPedido " .
                "FROM $this->tabla as p " .
                "INNER JOIN tblestadopedido AS ep ON ep.idEstadoPedido = p.estadoPedidoId " .
                "WHERE p.usuarioId = $idUsuario";
            $consulta = $this->db->query($sql);

            $pedidos = array();

            while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $pedidos[] = $filas;
            }

            return $pedidos;
        } catch (Exception $e) {
            $this->manejarExcepcion($e);
        }
    }

    public function buscarPorId($id): object|null
    {
        try {
            $sql = "SELECT p.*, ep.*, " .
                "(SELECT SUM(subTotalPedido) FROM tbldetallepedido WHERE pedidoId = $id) AS subtotal, " .
                "(SELECT SUM(valorEnvioPedido) FROM tbldetallepedido WHERE pedidoId = $id) AS envio, " .
                "(SELECT SUM(totalPedido) FROM tbldetallepedido WHERE pedidoId = $id) AS total " .
                "FROM $this->tabla AS p " .
                "INNER JOIN tblestadopedido AS ep ON ep.idEstadoPedido = p.estadoPedidoId " .
                "WHERE p.$this->id = $id LIMIT 1";
            $consulta = $this->db->query($sql);
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
}