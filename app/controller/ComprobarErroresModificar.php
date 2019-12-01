<?php

$HayError = false;
$errores = [];

function comprobarTODOmodificar($valores) {
    global $errores;
    global $HayError;
    if (empty($valores['descripcion'])) {
        $errores['descripcion'] = "La descripción no puede estar vacía.";
        $HayError = true;
    }

    if(empty($valores['nombrecontacto'])){
        $errores['nombrecontacto'] = "El nombre de contacto no puede estar vacío.";
        $HayError = true;
    }

    if(!tel($valores['telefono'])){
        $errores['telefono'] = "Debes introducir un formato de número de teléfono correcto.";
        $HayError = true;
    }

    if(!correo($valores['correo_electronico'])){
        $errores['correo_electronico'] = "Debes introducir un formato de correo electrónico válido.";
        $HayError = true;
    }

    if(!CP($valores['codigo_postal'],$valores['provincia'])){
        $errores['codigo_postal'] = "Debes introducir un código postal válido.";
        $HayError = true;
    }

    if(fechaFin($valores['fecha_realizacion']) == 1){
        $errores['fecha_realizacion'] = "Los formatos válidos son: dd/mm/aaaa ó dd-mm-aaaa ó dd mm aaaa.";
        $HayError = true;
    }else if(fechaFin($valores['fecha_realizacion']) == 2){
        $errores['fecha_realizacion'] = "El día introducide no se corresponde con el mes introducido.";
        $HayError = true;
    }else if(fechaFin($valores['fecha_realizacion']) == 3){
        $errores['fecha_realizacion'] = "La fecha de realización debe ser superior a la de creación.";
        $HayError = true;
    }

    if(!hayOperarioModificar($valores['operario_id'])){
        $errores['operario_id'] = "El operario asignado no existe";
        $HayError= true;
    }
}

function VerErrorModificar($campo){
    global $errores;
    if(!empty($_POST)){
        if(isset($errores[$campo])){
            return '<span style="color:red">'.$errores[$campo].'</span>';
        }
    }
}

function hayOperarioModificar($operario){
    if(!empty($operario)){
        if(existeOperarioModificar($operario)){
            return true;
        }else{
            return false;
        }
        return false;
    }
}