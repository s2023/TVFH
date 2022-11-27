<?php
require_once 'AbstractRepository.php';

class TipoDocumentoRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct("tbltipodocumento", "idTipoDocumento");
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
}