<?php
include '../config.php';
include CTRL_PATH . 'ValorPost.php';
include MODEL_PATH . 'FuncionesLogin.php';
include CTRL_PATH . 'check_Admin.php';

if (isset($_GET['adminid'])) {
    $tipo = "administrador";
    $id = $_GET['adminid'];
    include VIEW_PATH . 'confirmarcionEliminarUsuario.php';
} else if (isset($_GET['operid'])) {
    $tipo = "operario";
    $id = $_GET['operid'];
    include VIEW_PATH . 'confirmarcionEliminarUsuario.php';
}

if (isset($_GET['opc'])) {
    if (isset($_GET['tipo'])) {
        if ($_GET['tipo'] == "administrador" && $_GET['opc'] == 'si') {
            eliminarAdmin($_GET['id']);
            include VIEW_PATH . 'exito.php';
        } else if ($_GET['tipo'] == "operario" && $_GET['opc'] == 'si') {
            eliminarOperario($_GET['id']);
            include VIEW_PATH . 'exito.php';
        }
    } else {
        include VIEW_PATH . 'cancelar.php';
    }
}
