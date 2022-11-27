<?php
require_once '../../datos/repositorios/DepProvRegRepository.php';

$id = $_GET['id'];
$repo = new DepProvRegRepository();
$items = $repo->listarDepProvRegPorPais($id);
echo json_encode($items);