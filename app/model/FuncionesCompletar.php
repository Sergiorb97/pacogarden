<?php
/*No es necesario instanciar aqui la clase Db porque esta funcion esta incluida en funciones ver tarea
 para poder reutiliza las funciones de vertareas en completar*/
function completarTarea($valores,$id)
{

    $db = $GLOBALS['db'];
    $sql = "UPDATE tareas SET
          estado='" . $valores['estado'] . "' , anotacion_anterior='" . $valores['anotacion_anterior'] . "' , anotacion_posterior='" . $valores['anotacion_posterior'] . "' 
          WHERE tarea_id = " . $id;

    $db->Consulta($sql);
}