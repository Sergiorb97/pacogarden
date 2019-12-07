<?php
include '../config.php';
include CTRL_PATH . 'ValorPost.php';
include MODEL_PATH . 'FuncionesLogin.php';
include CTRL_PATH . 'check_Sesion.php';

$errores = [];
$HayError = false;
$datos = [];

if ($_POST) {

    comprobarErroresUsuarioModificar($_POST);

    if (!$HayError && $_POST['tipo'] == "Administrador") {
        modificarAdmin($_POST['nombre'], $_POST['contraseña'], $_POST['id']);
        include VIEW_PATH . 'exito.php';
    } else if (!$HayError && $_POST['tipo'] == "Operario") {
        modificarOperario($_POST['nombre'], $_POST['contraseña'], $_POST['id']);
        include VIEW_PATH . 'exito.php';
    } else {
        include VIEW_PATH . 'ModificarUsuario.php';
    }
}

if (isset($_GET['id'])) { // Para el propio usuario
    $datos[0]['nombre'] = $_SESSION['usuario'];
    $datos[0]['contraseña'] = $_SESSION['contraseña'];
    $datos[0]['tipo'] = $_SESSION['tipo'];
    $datos[0]['id'] = $_GET['id'];
    include VIEW_PATH . 'ModificarUsuario.php';

} else if (isset($_GET['adminid'])) { //Para usuarios de la lista
    $datos = DatosAdmin($_GET['adminid']);
    $datos[0]['tipo'] = "Administrador";
    $datos[0]['id'] = $_GET['adminid'];
    include VIEW_PATH . 'ModificarUsuario.php';

} else if (isset($_GET['operid'])) {
    $datos = DatosOperario($_GET['operid']);
    $datos[0]['tipo'] = "Operario";
    $datos[0]['id'] = $_GET['operid'];
    include VIEW_PATH . 'ModificarUsuario.php';

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

function tomarValor($campo)
{
    if ($_POST) {
        return ValorPost($campo);
    } else {
        global $datos;
        return $datos[0][$campo];
    }
}

function comprobarErroresUsuarioModificar($valores)
{
    global $errores;
    global $HayError;

    if (empty($valores['nombre'])) {
        $errores['nombre'] = "El nombre de usuario no puede estar vacío.";
        $HayError = true;
    } else {
        if ($valores['tipo'] == "Administrador") {
            if (ExisteAdmin($valores['nombre'])) {
                $errores['nombre'] = "Debes introducir un nombre de administrador que no se encuentre en uso.";
                $HayError = true;
            }
        } else {
            if (ExisteOperario($valores['nombre'])) {
                $errores['nombre'] = "Debes introducir un nombre de operario que no se encuentre en uso.";
                $HayError = true;
            }
        }
    }

    if (empty($valores['contraseña'])) {
        $errores['contraseña'] = "La contraseña no puede estar vacía.";
        $HayError = true;
    }
}
