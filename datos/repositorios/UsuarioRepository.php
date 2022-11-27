<?php
require_once 'AbstractRepository.php';

class UsuarioRepository extends AbstractRepository
{
    private string $paCrearAdmin = "PACrearAdmin";
    private string $paEditarAdmin = "PAEditarAdmin";
    private string $paVerAdmin = "PAVerAdmin";

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
}