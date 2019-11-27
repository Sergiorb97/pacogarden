<?php
include '../config.php';
include CTRL_PATH . 'ValorPost.php';
include MODEL_PATH . 'FuncionesVerTarea.php';
include VIEW_PATH.'ListarTareas.php';
include VIEW_PATH.'paginacion.php';

function mostrarLista(){
    if($_GET){
        tareas(Regmostrar($_GET['pag']));
    }else{
        tareas(0);
    }
}

function Regmostrar($x){
    return ($x - 1)*10;
}


function NumPags(){
    $num = NumTareas();
    if($num%10 == 0){
        return $num;
    }else if($num %10 != 0){
        $x = $num/10;
        return intval($x) + 1;
    }
} 