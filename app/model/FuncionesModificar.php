<?php
function modificarTarea($valores,$id)
{
    $telefono = str_replace(" ", "", $valores['telefono']);

    $correct = str_replace("/", "-", $valores['fecha_realizacion']);
    $FinSeconds = strtotime($correct);
    $finDate = date('Y-m-d', $FinSeconds);

    $db = $GLOBALS['db'];
    $sql = "UPDATE tareas SET
          descripcion='". $valores['descripcion'] . "' , nombrecontacto='" . $valores['nombrecontacto'] . "' , telefono=" . $telefono . " , correo_electronico='" . $valores['correo_electronico'] . "' , direccion='" . $valores['direccion'] . "' 
          , poblacion='" . $valores['poblacion'] . "' , codigo_postal=" . $valores['codigo_postal'] . " , provincia='" . $valores['provincia'] . "' , estado='" . $valores['estado'] . "' , fecha_realizacion='" . $finDate . "' 
          , anotacion_anterior='" . $valores['anotacion_anterior'] . "' , anotacion_posterior='" . $valores['anotacion_posterior'] . "' , operario_id=" . $valores['operario_id'] . "
          WHERE tarea_id = " . $id;

    $db->Consulta($sql);
}