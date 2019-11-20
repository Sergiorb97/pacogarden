<?php
require "Base de datos.php";
$db = Db::getInstance();

function allTareas()
{
    $sql = "SELECT * FROM tareas";
    $rs = $GLOBALS['db']->Consulta($sql);
    return $rs;
}

function esAdmin($nombre, $contraseña)
{
    $db = $GLOBALS['db'];
    $sql = "SELECT COUNT(*) as count FROM administrador WHERE nombre = " . "'" . $nombre . "'" . " AND contraseña = " . "'" . $contraseña . "'";
    $rs = $db->Consulta($sql);

    while ($reg = $db->LeeRegistro($rs)) {
        if ($reg['count'] == 1) {
            return true;
        }
    }
    return false;
}

function esOperario($nombre, $contraseña)
{
    $db = $GLOBALS['db'];
    $sql = "SELECT COUNT(*) as count FROM operarios WHERE nombre = " . "'" . $nombre . "'" . " AND contraseña = " . "'" . $contraseña . "'";
    $rs = $db->Consulta($sql);

    while ($reg = $db->LeeRegistro($rs)) {
        if ($reg['count'] == 1) {
            return true;
        }
    }
    return false;
}

function añadirTarea(){
    
}
