<?php
require_once 'AbstractRepository.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/constantes/constantes.php';

class UsuarioRepository extends AbstractRepository
{
    private string $paCrearAdmin = "PACrearAdmin";
    private string $paEditarAdmin = "PAEditarAdmin";
    private string $paVerAdmin = "PAVerAdmin";
    private int $adminId = TU_ADMIN;
    private int $clienteId = TU_CLIENTE;
    private int $usuarioActivoId = EU_ACTIVADO;

    public function __construct()
    {
        parent::__construct(
            "tblusuario",
            "idUsuario",
            "PACrearCliente",
            "PAVerCliente",
            "PAEditarCliente",
            "PAEliminarUsuario"
        );
    }
    /**
     * Método para insertar un cliente en la base de datos
     *
     * @param mixed $modelo
     * @return mixed
     */
    public function insertar(array $modelo)
    {
        try {
            $sp = $this->db->prepare("CALL $this->paCrear(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

            $x = 0;
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->execute();
        } catch (Exception $e) {
            $this->manejarExcepcion($e);
        }
    }

    /**
     * Método para crear admin
     */
    public function crearAdmin(array $modelo)
    {
        try {
            $sp = $this->db->prepare("CALL $this->paCrearAdmin(?,?,?,?,?,?,?)");

            $x = 0;
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
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
            $sp = $this->db->prepare("CALL $this->paEditar(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

            $x = 0;
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->execute();
        } catch (Exception $e) {
            $this->manejarExcepcion($e);
        }
    }

    /**
     * Metodo para editar a un admin
     */
    public function editarAdmin(array $modelo)
    {
        try {
            $sp = $this->db->prepare("CALL $this->paEditarAdmin(?,?,?,?,?,?,?,?)");

            $x = 0;
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_INT);
            $sp->bindValue(++$x, $modelo[$x - 1], PDO::PARAM_STR);
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
            $sql = "SELECT u.*, tu.*, eu.*, " .
            "(SELECT COUNT(*) FROM tblpedido WHERE usuarioId = u.idUsuario) as totalPedidos " .
            "FROM $this->tabla AS u " .
            "INNER JOIN tbltipousuario AS tu ON u.tipoUsuarioId = tu.idTipoUsuario " .
            "INNER JOIN tblestadousuario AS eu ON u.estadoUsuarioId = eu.idEstadoUsuario ";
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
     * Metodo para obtener cliente por usuario y clave
     * @param string $usuario
     * @param string $clave
     * @return object|null
     */
    public function obtenerClientePorUsuarioClave(string $usuario, string $clave): object|null
    {
        try {
            $sql = "SELECT u.* FROM $this->tabla AS u " .
                //"INNER JOIN" . // TODO: check if an inner join is needed
                "WHERE (apodoUsuario = '$usuario' OR correoElectronicoUsuario = '$usuario') " .
                "AND contraseñaUsuario = '$clave' AND tipoUsuarioId = $this->clienteId " .
                "AND estadoUsuarioId = $this->usuarioActivoId LIMIT 1";
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
     * Metodo para obtener admin por usuario y clave
     * @param string $usuario
     * @param string $clave
     * @return object|null
     */
    public function obtenerAdminPorUsuarioClave(string $usuario, string $clave): object|null
    {
        try {
            $sql = "SELECT u.* FROM $this->tabla AS u " .
            //"INNER JOIN" . // TODO: check if an inner join is needed
            "WHERE (apodoUsuario = '$usuario' OR correoElectronicoUsuario = '$usuario') " .
            "AND contraseñaUsuario = '$clave' AND tipoUsuarioId = $this->adminId " .
            "AND estadoUsuarioId = $this->usuarioActivoId LIMIT 1";
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
}