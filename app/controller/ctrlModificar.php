<?php
include '../config.php';
include CTRL_PATH . 'ValorPost.php';
include MODEL_PATH . 'FuncionesVerTarea.php';
include CTRL_PATH . 'ComprobarErroresCrearTarea.php';
include CTRL_PATH . 'ComprobarErroresModificar.php';
include CTRL_PATH . 'FuncionesParaModificar.php';
include CTRL_PATH . 'check_Sesion.php';

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