<table>
    <tr>
        <th>Tarea ID</th>
        <th>Descripción</th>
        <th>Nombre contacto</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Provincia</th>
        <th>Estado</th>
        <th>Creación</th>
        <th>Operario</th>
    </tr>
    <?php
        $datos = obtenerDatos();
        foreach ($datos as $dato) {
    ?>
        <tr>
            <td><?= $dato['tarea_id'] ?></td>
            <td><?= $dato['descripcion'] ?></td>
            <td><?= $dato['nombrecontacto'] ?></td>
            <td><?= $dato['telefono'] ?></td>
            <td><?= $dato['correo_electronico'] ?></td>
            <td><?= $dato['provincia'] ?></td>
            <td><?= $dato['estado'] ?></td>
            <td><?= $dato['fecha_creacion'] ?></td>
            <td><?= $dato['operario_id'] ?></td>
            <td><a href="../controller/ctrlMasInfo.php?id= <?= $dato['tarea_id'] ?> ">Ver más</a></td>

        </tr>
    <?php } ?>
</table>