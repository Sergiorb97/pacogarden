<?php
include '../config.php';
include CTRL_PATH . 'ValorPost.php';
include MODEL_PATH . 'FuncionesLogin.php';
include CTRL_PATH . 'check_Admin.php';

$errores = [];
$HayError = false;

comprobarErroresUsuario($_POST);

if (!$HayError) {
    if ($_POST['tipo'] == 'Administrador') {
        crearAdmin($_POST['user'],$_POST['pass']);
        include VIEW_PATH . 'exito.php';
    }

    if ($_POST['tipo'] == 'Operario') {
        crearOperario($_POST['user'],$_POST['pass']);
        include VIEW_PATH . 'exito.php';
    }
} else {
    include VIEW_PATH . 'CrearUsuario.php';
}


function VerError($campo)
{
    global $errores;
    if (!empty($_POST)) {
        if (isset($errores[$campo])) {
            return '<span style="color:red">' . $errores[$campo] . '</span>';
        }
    }
}

function guardarSelect($selectName, $opc)
{
    if (isset($selectName) && isset($_POST[$selectName])) {
        if ($_POST[$selectName] == $opc)
            return "selected";
    }
}

function comprobarErroresUsuario($valores)
{
    global $errores;
    global $HayError;
    if (empty($valores['user'])) {
        $errores['nombre'] = "El nombre de usuario no puede estar vacío.";
        $HayError = true;
    }else{
        if ($valores['tipo'] == "Administrador") {
            if (ExisteAdmin($valores['user'])) {
                $errores['nombre'] = "Debes introducir un nombre de administrador que no se encuentre en uso.";
                $HayError = true;
            }
        } else {
            if (ExisteOperario($valores['user'])) {
                $errores['nombre'] = "Debes introducir un nombre de operario que no se encuentre en uso.";
                $HayError = true;
            }
        }
    }

    if (empty($valores['pass'])) {
        $errores['contraseña'] = "La contraseña no puede estar vacía.";
        $HayError = true;
    }

}
