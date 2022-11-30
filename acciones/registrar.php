<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/UsuarioRepository.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/constantes/constantes.php';

$usuarioRepositorio = new UsuarioRepository();
$modelo = array($_POST['apodoUsuario'],
    $_POST['contrasenaUsuario'],
    $_POST['correoElectronicoUsuario'],
    $_POST['nombresUsuario'],
    $_POST['apellidosUsuario'],
    $_POST['tipoDocumentoUsuarioId'],
    $_POST['numeroDocumentoUsuario'],
    $_POST['nombresFacturacion'],
    $_POST['apellidosFacturacion'],
    $_POST['tipoDocumentoFacturacionId'],
    $_POST['numeroDocumentoFacturacion'],
    $_POST['correoElectronicoFacturacion'],
    $_POST['numeroTelefonoFacturacion'],
    $_POST['direccionFacturacion'],
    $_POST['ciudadFacturacionId'],
    $_POST['nombresEnvio'],
    $_POST['apellidosEnvio'],
    $_POST['direccionEnvio'],
    $_POST['numeroTelefonoEnvio'],
    $_POST['ciudadEnvioId']
);
$usuarioRepositorio->insertar($modelo);
header("Location: ../registro2.php");