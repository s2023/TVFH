<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/UsuarioRepository.php';

@session_start(); // crea o reanunda la sesión
$usuarioRepositorio = new UsuarioRepository();
$usuario = $usuarioRepositorio->obtenerClientePorUsuarioClave($_POST['user'], $_POST['pass']);
$location = '';

if ($usuario == null) {
    // retorne a la pagina de inicio de sesion
    $location = '../autenticacion.php?login=false';
} else {
    $_SESSION['idUsuario'] = $usuario->idUsuario; // asigna el id del usuario en la sesión
    $_SESSION['tipoUsuarioId'] = $usuario->tipoUsuarioId; // asigna el tipo de usuario en la sesion
    $location = '../index.php';
}

header("Location: $location");
exit;