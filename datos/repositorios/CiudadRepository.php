<?php
require_once 'AbstractRepository.php';

class CiudadRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct("tblciudad", "idCiudad");
    }
    /**
     * Método para insertar en la base de datos
     *
     * @param mixed $modelo
     * @return mixed
     */
    public function insertar(array $modelo)
    {
    }

    /**
     * Método para editar en la base de datos
     *
     * @param mixed $modelo
     * @return mixed
     */
    public function editar(array $modelo)
    {
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

    /**
     * Metodo para obtener ciudades por departamento/provincia/región
     *
     * @param int $id
     * @return array
     */
    public function listarCiudadesByDepProvReg(int $id): array
    {
        try {
            $col = "depProvRegId";
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