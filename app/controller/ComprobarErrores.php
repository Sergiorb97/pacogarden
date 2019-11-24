<?php

$HayError = false;
$errores = [];

function comprobarTODO($valores) {
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

    if(!correo($valores['correo'])){
        $errores['correo'] = "Debes introducir un formato de correo electrónico válido.";
        $HayError = true;
    }

    if(!CP($valores['codigopostal'],$valores['provincia'])){
        $errores['codigopostal'] = "Debes introducir un código postal válido.";
        $HayError = true;
    }
}

function VerError($campo){
    global $errores;
    if(!empty($_POST)){
        if(isset($errores[$campo])){
            return '<span style="color:red">'.$errores[$campo].'</span>';
        }
    }
}

function tel($telefono)
{
    if (!empty($telefono)) {
        $expresionReg = '/^((\+?34([ \t|\-])?)?[9|6|7]((\d{1}([ \t|\-])?[0-9]{3})|(\d{2}([ \t|\-])?[0-9]{2}))([ \t|\-])?[0-9]{2}([ \t|\-])?[0-9]{2})$/';
        if (preg_match($expresionReg, $telefono)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function correo($correo)
{
    if (!empty($correo)) {
        $expresionReg = '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/';
        if (preg_match($expresionReg, $correo)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function CP($CP)
{
    if (!empty($CP)) {
        if (is_numeric($CP)) {
            $expresionReg = "/^(?:0[1-9]\d{3}|[1-4]\d{4}|5[0-2]\d{3})$/";
            if (preg_match($expresionReg, $CP)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function fecha($fecha){

}
