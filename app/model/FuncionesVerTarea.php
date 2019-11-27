<?php
require "Base de datos.php";
$db = Db::getInstance();

function tareas($mostrar)
{
    $db = $GLOBALS['db'];
    $sql = "SELECT * FROM tareas ORDER BY fecha_creacion DESC LIMIT ".$mostrar.",10";
    $rs = $db->Consulta($sql);

    while ($reg = $db->LeeRegistro($rs)) {
        $creacion = date("d-m-Y", strtotime($reg['fecha_creacion']));
        $realizacion = date("d-m-Y", strtotime($reg['fecha_realizacion']));

        echo "<tr><td>" . $reg['tarea_id'] . "</td><td>" . $reg['descripcion'] . "</td><td>" . $reg['nombrecontacto'] . "</td><td>" . $reg['telefono'] .
            "</td><td>" . $reg['correo_electronico'] . "</td><td>" . $reg['direccion'] . "</td><td>" . $reg['poblacion'] . "</td><td>" . $reg['codigo_postal'] .
            "</td><td>" . $reg['provincia'] . "</td><td>" . $reg['estado'] . "</td><td>" . $creacion . "</td><td>" . $realizacion .
            "</td><td>" . $reg['anotacion_anterior'] . "</td><td>" . $reg['anotacion_posterior'] . "</td><td>" . $reg['administrador_id'] .
            "</td><td>" . $reg['operario_id'] . "</td></tr>";
    }
}

function NumTareas(){
    $db = $GLOBALS['db'];

    $sql = "SELECT COUNT(*) as tareas FROM tareas";
    $rs = $db->Consulta($sql);

    while ($reg = $db->LeeRegistro($rs)) {
        return $reg['tareas'];
    }

}


