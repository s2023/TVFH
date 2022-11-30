<?php
require_once 'AbstractRepository.php';

class DepProvRegRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct("tbldepprovreg", "idDepProvReg");
    }
    /**
     * Método para insertar en la base de datos
     *
     * @param mixed $modelo
     * @return mixed
     */
    public function insertar(array $modelo): void
    {
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

    /**
     * Método para listar departamento/provincia/región por país
     *
     * @param int $id
     * @return array
     */
    public function listarDepProvRegPorPais(int $id): array
    {
        try {
            $col = "paisId";
            $sql = "SELECT * FROM $this->tabla WHERE $col = $id";
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