<?php
include "../config.php";
include MODEL_PATH . 'FuncionesLogin.php';

session_start();

if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
    if (esAdmin($_POST['usuario'], $_POST['contraseña'])) {
        $_SESSION['tipo'] = "Administrador";
        $_SESSION['login'] = true;
        $_SESSION['hora'] = date('H:i:s');
        $_SESSION['usuario'] = $_POST['usuario'];
        include CTRL_PATH . 'ctrlMenuPrincipal.php';
    } else if (esOperario($_POST['usuario'], $_POST['contraseña'])) {
        $_SESSION['tipo'] = "Operario";
        $_SESSION['login'] = true;
        $_SESSION['hora'] = date('H:i:s');
        $_SESSION['usuario'] = $_POST['usuario'];
        include CTRL_PATH . 'ctrlMenuPrincipal.php';
    } else {
        $login_error = true;
        include VIEW_PATH . 'Login.php';
    }
} else if(isset($_GET['sesion'])){
    if($_GET['sesion'] == 'cerrar'){
        session_destroy();
        include VIEW_PATH . 'Login.php';
    }
}else {
    $login_error = true;
    include VIEW_PATH . 'Login.php';
}



