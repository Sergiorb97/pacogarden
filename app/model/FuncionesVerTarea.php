<?php
require "Base de datos.php";
$db = Db::getInstance();

function Tareas($mostrar)
{
    $db = $GLOBALS['db'];
    $sql = "SELECT * FROM tareas ORDER BY fecha_creacion DESC LIMIT ".$mostrar.",10";
    $rs = $db->Consulta($sql);

    $datos = [];

    while ($reg = $db->LeeRegistro($rs)) {
        $reg['fecha_creacion'] = date("d-m-Y", strtotime($reg['fecha_creacion']));
        $reg['fecha_realizacion'] = date("d-m-Y", strtotime($reg['fecha_realizacion']));
        $datos[] = $reg;
            
    }
    return $datos;
}

function TareaSeleccionada($id){
    $db = $GLOBALS['db'];
    $sql = "SELECT * FROM tareas WHERE tarea_id = ".$id;
    $rs = $db->Consulta($sql);
    while ($reg = $db->LeeRegistro($rs)) {
        $reg['fecha_creacion'] = date("d-m-Y", strtotime($reg['fecha_creacion']));
        $reg['fecha_realizacion'] = date("d-m-Y", strtotime($reg['fecha_realizacion']));
        $datos[] = $reg;
    }
    return $datos;
}

function obtenerProvincias(){
    $db = $GLOBALS['db'];
    $sql = "SELECT * FROM tbl_provincias";
    $rs = $db->Consulta($sql);
    while ($reg = $db->LeeRegistro($rs)) {
        $datos[] = $reg['nombre'];
    }
    return $datos;
}

function NumTareas(){
    $db = $GLOBALS['db'];

    $sql = "SELECT COUNT(*) as tareas FROM tareas";
    $rs = $db->Consulta($sql);

    while ($reg = $db->LeeRegistro($rs)) {
        return $reg['tareas'];
    }

}

function existeOperarioModificar($id){
    $db = $GLOBALS['db'];
    $sql = "SELECT COUNT(*) as count FROM operarios WHERE operario_id=".$id;
    $rs = $db->Consulta($sql);

    while ($reg = $db->LeeRegistro($rs)) {
        if ($reg['count'] == 1) {
            return true;
        }
    }
    return false;
}

include 'FuncionesModificar.php';
include 'FuncionesCompletar.php';



