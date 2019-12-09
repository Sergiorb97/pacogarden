<link rel="stylesheet" href="../../Assets/css/VerMasInfo.css">
<?php
$datos = DatosTarea();
foreach ($datos as $dato) {
    ?>
    <div class="fondo">
        <div class="iconos">
            <h1>Datos tarea Nº: <?= $dato['tarea_id'] ?></h1>
            <a href="../controller/ctrlModificar.php?tareaid= <?= $dato['tarea_id'] ?> "><img src="../../Assets/img/modificar.png" class="modificarTarea" title="Modificar tarea"></a>
            <a href="../controller/ctrlCompletar.php?tareaid= <?= $dato['tarea_id'] ?> "><img src="../../Assets/img/completar.png" class="completarTarea" title="Completar tarea"></a>
            <a href="../controller/ctrlEliminarTarea.php?tareaid= <?= $dato['tarea_id'] ?> "><img src="../../Assets/img/eliminar.png" class="eliminarTarea" title="Eliminar tarea"></a>
        </div>
        <p>Tarea ID: <span><?= $dato['tarea_id'] ?></span></p>
        <p>Descripción de la tarea: <span><?= $dato['descripcion'] ?></span></p>
        <p>Nombre de contacto: <span><?= $dato['nombrecontacto'] ?></span></p>
        <p>Teléfono: <span><?= $dato['telefono'] ?></span></p>
        <p>Correo electrónico: <span><?= $dato['correo_electronico'] ?></span></p>
        <p>Dirección: <span><?= $dato['direccion'] ?></span></p>
        <p>Población: <span><?= $dato['poblacion'] ?></p>
        <p>Código postal: <span><?= $dato['codigo_postal'] ?></span></p>
        <p>Provincia: <span><?= $dato['provincia'] ?></span></p>
        <p>Estado: <span><?= $dato['estado'] ?></span></p>
        <p>Fecha de creación: <span><?= $dato['fecha_creacion'] ?></span></p>
        <p>Fecha de realización: <span><?= $dato['fecha_realizacion'] ?></span></p>
        <p>Anotación anterior: <span><?= $dato['anotacion_anterior'] ?></span></p>
        <p>Anotación posterior: <span><?= $dato['anotacion_posterior'] ?></span></p>
        <p>ID de administrador: <span><?= $dato['administrador_id'] ?></span></p>
        <p>ID de operario: <span><?= $dato['operario_id'] ?></span></p>
        </p>
    </div>
<?php
}
?>