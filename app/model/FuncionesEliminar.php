<?php
require "Base de datos.php";
$db = Db::getInstance();

function eliminarTarea($id)
{

    $db = $GLOBALS['db'];
    $sql = "DELETE FROM tareas WHERE tarea_id = " . $id;

    $db->Consulta($sql);
}