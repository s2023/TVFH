<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/UsuarioRepository.php';

session_start(); // crea o reanunda la sesión
$usuarioRepositorio = new UsuarioRepository();
$usuario = $usuarioRepositorio->obtenerAdminPorUsuarioClave($_POST['inputEmail'], $_POST['inputPassword']);
$location = '';

if ($usuario == null) {
    // retorne a la pagina de inicio de sesion
    $location = '../login.php?login=false'; // TODO: revisar la ruta de autenticacion
} else {
    $_SESSION['idUsuario'] = $usuario->idUsuario; // asigna el usuario en la sesión
    $_SESSION['tipoUsuarioId'] = $usuario->tipoUsuarioId; // asigna el tipo de usuario en la sesion
    $_SESSION['apodoUsuario'] = $usuario->apodoUsuario;
    $location = '../index.php';
}

// acción de redirigir
header("Location: $location");
exit;
