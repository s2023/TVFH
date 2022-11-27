<?php
require_once '../../datos/repositorios/CiudadRepository.php';

$id = $_GET['id'];
$repo = new CiudadRepository();
$ciudades = $repo->listarCiudadesByDepProvReg($id);
echo json_encode($ciudades);