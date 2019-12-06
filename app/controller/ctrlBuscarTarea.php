<?php
include '../config.php';
include CTRL_PATH . 'ValorPost.php';
include MODEL_PATH . 'FuncionesVerTarea.php';
include CTRL_PATH . 'FuncionesParaVerTareas.php';
include CTRL_PATH.'ComprobarErroresBuscar.php';
include CTRL_PATH . 'check_Sesion.php';

comprobarTODOBuscar($_POST);
//Comprobar qué queremos filtrar y no olvidar el paginado
if(!$HayError && $_POST){
    $datos = obtenerDatosFILTRADOS($_POST,filtros($_POST));
    if(empty($datos)){
        include VIEW_PATH . 'TareaNoEncontrada.php';
    }else{
        include VIEW_PATH . 'TareaEncontrada.php';
    }
}else{
    include VIEW_PATH . 'BuscarTarea.php';
}

function filtros($valores){
    $sql= "";
    $cont = 0;
    if(!empty($valores['id'])){
        $sql .= "WHERE tarea_id".$valores['comparadorID'].$valores['id'];
        $cont++;
    }

    if(!empty($valores['nombrecontacto']) && $cont == 0){
        if($valores['comparadornombre'] != 'Contiene'){
            $sql .= "WHERE nombrecontacto='".$valores['nombrecontacto']."' ";
        }else{
            $sql .= "WHERE nombrecontacto LIKE '%".$valores['nombrecontacto']."%' ";
        }
        $cont++;
    }else if(!empty($valores['nombrecontacto']) && $cont > 0){
        if($valores['comparadornombre'] != 'Contiene'){
            $sql .= " AND nombrecontacto='".$valores['nombrecontacto']."' ";
        }else{
            $sql .= " AND nombrecontacto LIKE '%".$valores['nombrecontacto']."%' ";
        }
    }

    if(!empty($valores['estado']) && $cont == 0){
        $sql .= "WHERE estado='".$valores['estado']."' ";
        $cont++;
    }else if(!empty($valores['estado']) && $cont > 0){
        $sql .= " AND estado='".$valores['estado']."' ";
    }

    if(!empty($valores['creacion']) && $cont == 0){
        $sql .= "WHERE fecha_creacion".$valores['comparadorcreacion']."'".$valores['creacion']."' ";
        $cont++;
    }else if(!empty($valores['creacion']) && $cont > 0){
        $sql .= " AND fecha_creacion".$valores['comparadorcreacion']."'".$valores['creacion']."' ";
    }

    if(!empty($valores['realizacion']) && $cont == 0){
        $sql .= "WHERE fecha_realizacion".$valores['comparadorrealizacion']."'".$valores['realizacion']."' ";
        $cont++;
    }else if(!empty($valores['realizacion']) && $cont > 0){
        $sql .= " AND fecha_realizacion".$valores['comparadorrealizacion']."'".$valores['realizacion']."' ";
    }

    if(!empty($valores['provincia']) && $cont == 0){
        $sql .= "WHERE provincia='".$valores['provincia']."' ";
        $cont++;
    }else if(!empty($valores['provincia']) && $cont > 0){
        $sql .= " AND provincia='".$valores['provincia']."' ";
    }

    return $sql;
}
