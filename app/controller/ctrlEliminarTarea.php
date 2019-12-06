<?php
include '../config.php';
include CTRL_PATH . 'ValorPost.php';
include MODEL_PATH . 'FuncionesEliminar.php';
include CTRL_PATH . 'check_Sesion.php';

if (isset($_GET['opc'])) {
    if ($_GET['opc'] == "si") {
        eliminarTarea($_GET['id']);
        include VIEW_PATH . 'exito.php';
    } else {
        include VIEW_PATH . 'cancelar.php';
    }
} else {
    $id = $_GET['tareaid'];
    include VIEW_PATH . 'confirmacionEliminacion.php';
}
