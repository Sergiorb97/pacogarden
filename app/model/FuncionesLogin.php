<?php
require "Base de datos.php";
$db = Db::getInstance();

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

function ExisteAdmin($nombre){
    $db = $GLOBALS['db'];
    $sql = "SELECT COUNT(*) as count FROM administrador WHERE nombre = " . "'" . $nombre . "'";
    $rs = $db->Consulta($sql);
    while ($reg = $db->LeeRegistro($rs)) {
        if ($reg['count'] == 1) {
            return true;
        }
    }
    return false;
}

function ExisteOperario($nombre){
    $db = $GLOBALS['db'];
    $sql = "SELECT COUNT(*) as count FROM operarios WHERE nombre = " . "'" . $nombre . "'";
    $rs = $db->Consulta($sql);

    while ($reg = $db->LeeRegistro($rs)) {
        if ($reg['count'] == 1) {
            return true;
        }
    }
    return false;
}

function crearAdmin($nombre,$contraseña){
    $db = $GLOBALS['db'];
    $sql = "INSERT INTO administrador (administrador_id, nombre, contraseña) VALUES (0,'".$nombre."','".$contraseña."')";
    $db->Consulta($sql);
}

function crearOperario($nombre,$contraseña){
    $db = $GLOBALS['db'];
    $sql = "INSERT INTO operarios (operario_id, nombre, contraseña) VALUES (0,'".$nombre."','".$contraseña."')";
    $db->Consulta($sql);
}

function VerAdmins(){
    $db = $GLOBALS['db'];
    $sql = "SELECT * FROM administrador";
    $rs = $db->Consulta($sql);
    $datos = [];

    while ($reg = $db->LeeRegistro($rs)) {
        $datos[] = $reg;
    }
    return $datos;
}

function VerOpers(){
    $db = $GLOBALS['db'];
    $sql = "SELECT * FROM operarios";
    $rs = $db->Consulta($sql);
    $datos = [];

    while ($reg = $db->LeeRegistro($rs)) {
        $datos[] = $reg;
    }
    return $datos;
}

function DatosAdmin($id){
    $db = $GLOBALS['db'];
    $sql = "SELECT * FROM administrador WHERE administrador_id=".$id;
    $rs = $db->Consulta($sql);
    $datos = [];

    while ($reg = $db->LeeRegistro($rs)) {
        $datos[] = $reg;
    }
    return $datos;
}

function DatosOperario($id){
    $db = $GLOBALS['db'];
    $sql = "SELECT * FROM operarios WHERE operario_id=".$id;
    $rs = $db->Consulta($sql);
    $datos = [];

    while ($reg = $db->LeeRegistro($rs)) {
        $datos[] = $reg;
    }
    return $datos;
}

function modificarAdmin($nombre,$contraseña,$id){
    $db = $GLOBALS['db'];
    $sql = "UPDATE administrador SET nombre = '".$nombre."', contraseña = '".$contraseña."' WHERE administrador_id=".$id;
    $db->Consulta($sql);
}

function modificarOperario($nombre,$contraseña,$id){
    $db = $GLOBALS['db'];
    $sql = "UPDATE operarios SET nombre = '".$nombre."', contraseña = '".$contraseña."' WHERE operario_id=".$id;
    $db->Consulta($sql);
}

function getAdminID($nombre, $contraseña){
    $db = $GLOBALS['db'];
    $sql = "SELECT administrador_id FROM administrador WHERE nombre='".$nombre."' AND contraseña='".$contraseña."'";
    $rs = $db->Consulta($sql);

    while ($reg = $db->LeeRegistro($rs)) {
        return $reg['administrador_id'];
    }
}

function getOperarioID($nombre, $contraseña){
    $db = $GLOBALS['db'];
    $sql = "SELECT operario_id FROM operarios WHERE nombre='".$nombre."' AND contraseña='".$contraseña."'";
    $rs = $db->Consulta($sql);

    while ($reg = $db->LeeRegistro($rs)) {
        return $reg['operario_id'];
    }
}

function eliminarAdmin($id){
    $db = $GLOBALS['db'];
    $sql = "DELETE FROM administrador WHERE administrador_id=".$id;
    $db->Consulta($sql);
}

function eliminarOperario($id){
    $db = $GLOBALS['db'];
    $sql = "DELETE FROM operarios  WHERE operario_id=".$id;
    $db->Consulta($sql);
}




