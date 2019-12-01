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

    if(fechaFin($valores['Frealizacion']) == 1){
        $errores['Frealizacion'] = "Los formatos válidos son: dd/mm/aaaa ó dd-mm-aaaa ó dd mm aaaa.";
        $HayError = true;
    }else if(fechaFin($valores['Frealizacion']) == 2){
        $errores['Frealizacion'] = "El día introducide no se corresponde con el mes introducido.";
        $HayError = true;
    }else if(fechaFin($valores['Frealizacion']) == 3){
        $errores['Frealizacion'] = "La fecha de realización debe ser superior a la de creación.";
        $HayError = true;
    }

    if(!hayOperario($valores['operarioAsig'])){
        $errores['operarioAsig'] = "El operario asignado no existe";
        $HayError= true;
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

function fechaFin($fechaFin){
    $fFin = str_replace("/","-",$fechaFin);
    //$fFin = str_replace(" ","-",$fechaFin);
    $inicio = strtotime(date("d-m-Y"));
    $fin = strtotime($fFin);

    if(!empty($fechaFin)){
        $expresionReg = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)(\d{4})$/";
        if(preg_match($expresionReg,$fFin)){
            if(comprobarFecha($fFin)){
                if($inicio < $fin){
                    return 4;
                }else{
                    return 3;
                }
            }else{
                return 2;
            }
        }else{
            return 1;
        }
    }else{
        return 1;
    }
}

function comprobarFecha($fecha){
    $date = explode("-",$fecha);
    $año = $date[2];
    $mes = $date[1];
    $dias = $date[0];

    if(diasMes($año,$mes,$dias)){
        return true;
    }else{
        return false;
    }
}

function diasMes($año,$mes,$dias){
    if($mes == "02"){
        if(esBisiesto($año) && $dias <= 29){
            return true;
        }else{
            return false;
        }
    }else if($mes == "01" || $mes == "03" || $mes == "05" || $mes == "07" || $mes == "08" || $mes == "10" || $mes == "12"){
        if($dias <= 31){
            return true;
        }else{
            return false;
        }
    }else {
        if($dias <= 30){
            return true;
        }else{
            return false;
        }
    }
}

function esBisiesto($año){
    if(($año%4 == 0 && $año%100 != 0) || $año%400 == 0){
        return true;
    }else{
        return false;
    }
}

function fechaCrear(){
    return date('d/m/Y');
}

function hayOperario($operario){
    if(!empty($operario)){
        if(existeOperario($operario)){
            return true;
        }else{
            return false;
        }
        return false;
    }
}
