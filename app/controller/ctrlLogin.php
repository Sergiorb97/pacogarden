<?php
include "../config.php";
include CTRL_PATH . 'ValorPost.php';
include MODEL_PATH . 'FuncionesLogin.php';

session_start();

$errores = [];

if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
    if (esAdmin($_POST['usuario'], $_POST['contraseña'])) {
        $_SESSION['tipo'] = "Administrador";
        $_SESSION['login'] = true;
        $_SESSION['hora'] = date('H:i:s');
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['contraseña'] = $_POST['contraseña'];
        $_SESSION['id'] = getAdminID($_POST['usuario'], $_POST['contraseña']);
        include CTRL_PATH . 'ctrlMenuPrincipal.php';
    } else if (esOperario($_POST['usuario'], $_POST['contraseña'])) {
        $_SESSION['tipo'] = "Operario";
        $_SESSION['login'] = true;
        $_SESSION['hora'] = date('H:i:s');
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['contraseña'] = $_POST['contraseña'];
        $_SESSION['id'] = getOperarioID($_POST['usuario'], $_POST['contraseña']);
        include CTRL_PATH . 'ctrlMenuPrincipal.php';
    } else {
        $errores['datos'] = 'Usuario o contraseña incorrectos.';
        include VIEW_PATH . 'Login.php';
    }
} else if (isset($_GET['sesion'])) {
    if ($_GET['sesion'] == 'cerrar') {
        session_destroy();
        include VIEW_PATH . 'Login.php';
    }
} else {
    if(isset($_GET['error'])){
        $errores['datos'] = 'Necesitas iniciar sesión para poder acceder a la aplicación.';
    }
    include VIEW_PATH . 'Login.php';
}

function VerErrorLogin()
{
    global $errores;
    if (isset($errores['datos'])) {
        return '<span style="color:red">' . $errores['datos'] . '</span>';
    }
}
