<?php

function comprobarTODO(
    $descripcion,$nombreContacto,
    $telefono,
    $correo,
    $direccion,
    $poblacion,
    $CD,
    $provincia,
    $estado,
    $Fcreacion,
    $Frealizacion,
    $Aanterior,
    $Aposterior,
    $operario
) {
    if(DesNom($descripcion,$nombreContacto) && tel($telefono)){
        return true;
    }else{
        return false;
    }
 }

function DesNom($descripcion,$nombreContacto){
    if(!empty($descripcion) && !empty($nombreContacto)){
        return true;
    }else{
        return false;
    }
}

function tel($telefono){
    if(!empty($telefono)){
        $expresionReg = '/^((\+?34([ \t|\-])?)?[9|6|7]((\d{1}([ \t|\-])?[0-9]{3})|(\d{2}([ \t|\-])?[0-9]{2}))([ \t|\-])?[0-9]{2}([ \t|\-])?[0-9]{2})$/';
        if(preg_match($expresionReg,$telefono)){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}
