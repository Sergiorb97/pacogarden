<?php
function obtenerDatos(){
    if ($_GET) {
        return $datos = Tareas(Regmostrar($_GET['pag']));
    } else {
        return $datos = Tareas(0);
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
        return $num;
    } else if ($num % 10 != 0) {
        $x = $num / 10;
        return intval($x) + 1;
    }
}
