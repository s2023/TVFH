<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/UsuarioRepository.php';

@session_start(); // crea o reanunda la sesión
$usuarioRepositorio = new UsuarioRepository();
$usuario = $usuarioRepositorio->buscarPorId($_SESSION['idUsuario']);
$contrasenaUsuario = $usuario->contraseñaUsuario;

if (isset($_POST['contrasenaUsuario'])) {
    $contrasenaUsuario = $_POST['contrasenaUsuario'];
}

$modelo = array($_SESSION['idUsuario'],
    $contrasenaUsuario,
    $_POST['correoElectronicoUsuario'],
    $_POST['nombresUsuario'],
    $_POST['apellidosUsuario'],
    $_POST['tipoDocumentoUsuarioId'],
    $_POST['numeroDocumentoUsuario'],
    $usuario->estadoUsuarioId,
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

$usuarioRepositorio->editar($modelo);
header("Location: ../editarusuario.php?success=true");
