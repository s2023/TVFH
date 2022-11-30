<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/ProductoRepository.php';
$productoRepository = new ProductoRepository();

$model = array($_GET['id'],
    $_POST['nombreProducto'],
    $_POST['categoriaId'],
    $_POST['skuProducto'],
    $_POST['descripcionCortaProducto'],
    $_POST['descripcionLargaProducto'],
    null, // TODO: agregar blob de la imagen
    $_POST['estadoProductoId'],
    $_POST['visibilidadProductoId']
);
$productoRepository->editar($model);
header("Location: ../productslist.php?success=true");