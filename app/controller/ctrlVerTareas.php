<?php
include '../config.php';
include CTRL_PATH . 'ValorPost.php';
include MODEL_PATH . 'FuncionesVerTarea.php';
include VIEW_PATH.'ListarTareas.php';

function mostrarLista(){
    tareas();
}
