<?php
include '../config.php';
include CTRL_PATH . 'ValorPost.php';
include MODEL_PATH . 'FuncionesVerTarea.php';
include CTRL_PATH . 'ComprobarErroresCrearTarea.php';
include CTRL_PATH . 'ComprobarErroresModificar.php';

if ($_GET) {
    $id = $_GET['tareaid'];
    $datos = TareaSeleccionada($id);
    include VIEW_PATH . "Modificar.php";
} else {
    comprobarTODOmodificar($_POST);
    $id = $_POST['tareaid'];
    if (!$HayError && $_POST) {
        modificarTarea($_POST, $id);
        include VIEW_PATH . "exito.php";
    } else {
        include VIEW_PATH . "Modificar.php";
    };
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

function guardarSelectModificar($selectName, $opc)
{
    if (isset($selectName) && isset($_POST[$selectName])) {
        if ($_POST[$selectName] == $opc)
            return "selected";
    } else {
        global $datos;
        if ($datos[0][$selectName] == $opc)
            return "selected";
    }
}
