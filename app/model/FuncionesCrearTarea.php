<?php
require "Base de datos.php";
$db = Db::getInstance();

function añadirTarea($valores)
{
    $telefono = str_replace(" ", "", $valores['telefono']);
    $actDate = date('Y-m-d');

    $correct = str_replace("/", "-", $valores['Frealizacion']);
    $FinSeconds = strtotime($correct);
    $finDate = date('Y-m-d', $FinSeconds);


    $db = $GLOBALS['db'];
    $sql = "INSERT INTO tareas (
        tarea_id, descripcion, nombrecontacto, telefono, correo_electronico,direccion,
          poblacion, codigo_postal, provincia, estado, fecha_creacion,fecha_realizacion, 
          anotacion_anterior, anotacion_posterior, administrador_id, operario_id) 
          VALUES (0,'"
        . $valores['descripcion'] . "','" . $valores['nombrecontacto'] . "'," . $telefono . ",'" . $valores['correo'] . "','" . $valores['direccion'] . "','" .
        $valores['poblacion'] . "'," . $valores['codigopostal'] . ",'" . $valores['provincia'] . "','" . $valores['estado'] . "','" . $actDate . "','" . $finDate . "','" .
        $valores['Aanterior'] . "','" . $valores['Aposterior'] . "'," . 1 . "," . $valores['operarioAsig'] .
        ")";
    $db->Consulta($sql);
}

function existeOperario($id){
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