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
        if(strlen($telefono) == 9){
            echo $telefono;//CONTINUAR
        }else{
            return false;
        }
    }else{
        return false;
    }
}
