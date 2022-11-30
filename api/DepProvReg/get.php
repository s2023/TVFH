<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/DepProvRegRepository.php';

$id = $_GET['id'];
$repo = new DepProvRegRepository();
$items = $repo->listarDepProvRegPorPais($id);
echo json_encode($items);