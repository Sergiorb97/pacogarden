<?php
require "Base de datos.php";
$db = Db::getInstance();

function tareas(){
    $db = $GLOBALS['db'];
    $sql = "SELECT * FROM tareas";
    $rs = $db->Consulta($sql);

    while ($reg = $db->LeeRegistro($rs)) {
        
        echo "<tr><td>".$reg['tarea_id']."</td><td>".$reg['descripcion']."</td><td>".$reg['nombrecontacto']."</td><td>".$reg['telefono'].
        "</td><td>".$reg['correo_electronico']."</td><td>".$reg['direccion']."</td><td>".$reg['poblacion']."</td><td>".$reg['codigo_postal'].
        "</td><td>".$reg['provincia']."</td><td>".$reg['estado']."</td><td>".$reg['fecha_creacion']."</td><td>".$reg['fecha_realizacion'].
        "</td><td>".$reg['anotacion_anterior']."</td><td>".$reg['anotacion_posterior']."</td><td>".$reg['administrador_id'].
        "</td><td>".$reg['operario_id']."</td></tr>";
    }
}

        