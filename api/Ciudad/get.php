<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/CiudadRepository.php';

$id = $_GET['id'];
$repo = new CiudadRepository();
$ciudades = $repo->listarCiudadesByDepProvReg($id);
echo json_encode($ciudades);