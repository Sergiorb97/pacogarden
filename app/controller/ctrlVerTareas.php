<?php
include '../config.php';
include CTRL_PATH . 'ValorPost.php';
include MODEL_PATH . 'FuncionesVerTarea.php';
include CTRL_PATH.'FuncionesParaVerTareas.php';
$datos = obtenerDatos();
include CTRL_PATH . 'check_Sesion.php';
include VIEW_PATH . 'ListarTareas.php';
include VIEW_PATH . 'paginacion.php';


