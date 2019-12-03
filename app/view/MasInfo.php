<?php
$datos = DatosTarea();
foreach ($datos as $dato) {
    ?>
    <p>
        <a href="../controller/ctrlModificar.php?tareaid= <?= $dato['tarea_id'] ?> ">Modificar tarea</a>
        <a href="../controller/ctrlCompletar.php?tareaid= <?= $dato['tarea_id'] ?> ">Completar tarea</a>
        <a href="../controller/ctrlEliminarTarea.php?tareaid= <?= $dato['tarea_id'] ?> ">Eliminar tarea</a>
    </p>
    <p>Tarea ID: <?= $dato['tarea_id'] ?></p>
    <p>Descripción de la tarea: <?= $dato['descripcion'] ?></p>
    <p>Nombre de contacto: <?= $dato['nombrecontacto'] ?></p>
    <p>Teléfono: <?= $dato['telefono'] ?></p>
    <p>Correo electrónico: <?= $dato['correo_electronico'] ?></p>
    <p>Dirección: <?= $dato['direccion'] ?></p>
    <p>Población: <?= $dato['poblacion'] ?></p>
    <p>Código postal: <?= $dato['codigo_postal'] ?></p>
    <p>Provincia: <?= $dato['provincia'] ?></p>
    <p>Estado: <?= $dato['estado'] ?></p>
    <p>Fecha de creación: <?= $dato['fecha_creacion'] ?></p>
    <p>Fecha de realización: <?= $dato['fecha_realizacion'] ?></p>
    <p>Anotación anterior: <?= $dato['anotacion_anterior'] ?></p>
    <p>Anotación posterior: <?= $dato['anotacion_posterior'] ?></p>
    <p>ID de administrador: <?= $dato['administrador_id'] ?></p>
    <p>ID de operario: <?= $dato['operario_id'] ?></p>
    </p>
<?php
}
?>