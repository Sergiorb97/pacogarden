<?php
function obtenerDatos(){
    if ($_GET) {
        return Tareas(Regmostrar($_GET['pag']));
    } else {
        return Tareas(0);
    }
}

function mostrarProvincias(){
    $provincias = obtenerProvincias();
    foreach($provincias as $provincia){
        echo"<option ".guardarSelect('provincia',$provincia).">".$provincia."</option>";
    } 
}

function guardarSelect($selectName,$opc){
    if(isset($selectName) && isset($_POST[$selectName])){
        if($_POST[$selectName] == $opc)
            return "selected";
    }
}

function DatosTarea(){
    return TareaSeleccionada($_GET['id']);
}


function Regmostrar($x)
{
    return ($x - 1) * 10;
}


function NumPags()
{
    $num = NumTareas();
    if ($num % 10 == 0) {
        return $num/10;
    } else if ($num % 10 != 0) {
        $x = $num / 10;
        return intval($x) + 1;
    }
}
