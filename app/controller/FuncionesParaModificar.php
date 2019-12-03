<?php

function tomarValor($campo)
{
    if ($_POST) {
        return ValorPost($campo);
    } else {
        global $datos;
        return $datos[0][$campo];
    }
}

function guardarSelectModificar($selectName, $opc)
{
    if (isset($selectName) && isset($_POST[$selectName])) {
        if ($_POST[$selectName] == $opc)
            return "selected";
    } else {
        global $datos;
        if ($datos[0][$selectName] == $opc)
            return "selected";
    }
}

function mostrarProvinciasModificar(){
    $provincias = obtenerProvincias();
    foreach($provincias as $provincia){
        echo"<option ".guardarSelectModificar('provincia',$provincia).">".$provincia."</option>";
    } 
}
