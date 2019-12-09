<link rel="stylesheet" href="../../Assets/css/Lista.css">
<script src="../../Assets/js/JQUERY.js"></script>
<section>
    <h1>Lista de tareas</h1>
        <table cellpadding="0" cellspacing="0" border="0">
            <thead class="tbl-header">
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
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="tbl-content">
                <?php
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
                        <td><a href="../controller/ctrlMasInfo.php?id= <?= $dato['tarea_id'] ?> "><img src="../../Assets/img/VerMas.png" class="verMas" title="Ver más datos"></a></td>
                        <td><a href="../controller/ctrlModificar.php?tareaid= <?= $dato['tarea_id'] ?> "><img src="../../Assets/img/modificar.png" class="modificarTarea" title="Modificar tarea"></a></td>
                        <td><a href="../controller/ctrlCompletar.php?tareaid= <?= $dato['tarea_id'] ?> "><img src="../../Assets/img/completar.png" class="completarTarea" title="Completar tarea"></a></td>
                        <td><a href="../controller/ctrlEliminarTarea.php?tareaid= <?= $dato['tarea_id'] ?> "><img src="../../Assets/img/eliminar.png" class="eliminarTarea" title="Eliminar tarea"></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
</section>
<script src="../../Assets/js/lista.js"></script>