<?php

$HayError = false;
$errores = [];

function comprobarTODOBuscar($valores)
{
    global $errores;
    global $HayError;

    if (!empty($valores['id'])) {
        if (!is_numeric($valores['id'])) {
            $errores['id'] = "El ID debe ser un número.";
            $HayError = true;
        }
    }

    if (!empty($valores['creacion'])) {
        if (fechaFin($valores['creacion']) == 1) {
            $errores['creacion'] = "Los formatos válidos son: dd/mm/aaaa ó dd-mm-aaaa ó dd mm aaaa.";
            $HayError = true;
        } else if (fechaFin($valores['creacion']) == 2) {
            $errores['realizacion'] = "El día introducide no se corresponde con el mes introducido.";
            $HayError = true;
        }
    }

    if (!empty($valores['realizacion'])) {
        if (fechaFin($valores['realizacion']) == 1) {
            $errores['realizacion'] = "Los formatos válidos son: dd/mm/aaaa ó dd-mm-aaaa ó dd mm aaaa.";
            $HayError = true;
        } else if (fechaFin($valores['realizacion']) == 2) {
            $errores['realizacion'] = "El día introducide no se corresponde con el mes introducido.";
            $HayError = true;
        }
    }
    
}

function VerError($campo)
{
    global $errores;
    if (!empty($_POST)) {
        if (isset($errores[$campo])) {
            return '<span style="color:red">' . $errores[$campo] . '</span>';
        }
    }
}


function fechaFin($fechaFin)
{
    $fFin = str_replace("/", "-", $fechaFin);

    if (!empty($fechaFin)) {
        $expresionReg = "/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)(\d{4})$/";
        if (preg_match($expresionReg, $fFin)) {
            if (comprobarFecha($fFin)) {
                return 3;
            } else {
                return 2;
            }
        } else {
            return 1;
        }
    } else {
        return 1;
    }
}

function comprobarFecha($fecha)
{
    $date = explode("-", $fecha);
    $año = $date[2];
    $mes = $date[1];
    $dias = $date[0];

    if (diasMes($año, $mes, $dias)) {
        return true;
    } else {
        return false;
    }
}

function diasMes($año, $mes, $dias)
{
    if ($mes == "02") {
        if (esBisiesto($año) && $dias <= 29) {
            return true;
        } else {
            return false;
        }
    } else if ($mes == "01" || $mes == "03" || $mes == "05" || $mes == "07" || $mes == "08" || $mes == "10" || $mes == "12") {
        if ($dias <= 31) {
            return true;
        } else {
            return false;
        }
    } else {
        if ($dias <= 30) {
            return true;
        } else {
            return false;
        }
    }
}

function esBisiesto($año)
{
    if (($año % 4 == 0 && $año % 100 != 0) || $año % 400 == 0) {
        return true;
    } else {
        return false;
    }
}
