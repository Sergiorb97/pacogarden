<?php
include '../config.php';
include CTRL_PATH . 'ValorPost.php';
include MODEL_PATH . 'FuncionesVerTarea.php';
include CTRL_PATH . 'FuncionesParaModificar.php';

if ($_GET) {
    $id = $_GET['tareaid'];
    $datos = TareaSeleccionada($id);
    include VIEW_PATH . "Completar.php";
} else {
    $id = $_POST['tareaid'];
    if (!empty(ValorPost('estado'))) {
        completarTarea($_POST, $id);
        include VIEW_PATH . "exito.php";
    } else {
        include VIEW_PATH . "Completar.php";
    };
}