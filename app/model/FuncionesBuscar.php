<?php
/*No es necesario instanciar aqui la clase Db porque esta funcion esta incluida en funciones ver tarea
 para poder reutiliza las funciones de vertareas en buscar*/
function TareasFiltradas($Filtros)
{

    $db = $GLOBALS['db'];
    $sql = "SELECT * FROM tareas " . $Filtros;
    $rs = $db->Consulta($sql);

    $datos = [];

    while ($reg = $db->LeeRegistro($rs)) {
        $reg['fecha_creacion'] = date("d-m-Y", strtotime($reg['fecha_creacion']));
        $reg['fecha_realizacion'] = date("d-m-Y", strtotime($reg['fecha_realizacion']));
        $datos[] = $reg;
    }

    return $datos;
}
