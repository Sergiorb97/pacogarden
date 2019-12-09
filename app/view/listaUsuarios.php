<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="../../Assets/css/Lista.css">
</head>

<body>
    <header><?php include TEMPLATE_PATH . "header.php" ?></header>
    <div id="menu"><?php include TEMPLATE_PATH . "menu.php" ?></div>
    <div id="cuerpo">
        <section>
            <h1>Administradores</h1>
            <table cellpadding="0" cellspacing="0" border="0">
                <thead class="tbl-header">
                    <tr>
                        <th>Administrador ID</th>
                        <th>Nombre</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="tbl-content">
                    <?php
                    foreach ($datosAdmin as $datoAdmin) {
                        ?>
                        <tr>
                            <td><?= $datoAdmin['administrador_id'] ?></td>
                            <td><?= $datoAdmin['nombre'] ?></td>
                            <td><a href="../controller/ctrlModificarUsuario.php?adminid= <?= $datoAdmin['administrador_id'] ?> "><img src="../../Assets/img/modificar.png" class="modificarTarea" title="Modificar administrador"></a></td>
                            <td><a href="../controller/ctrlEliminarUsuario.php?adminid= <?= $datoAdmin['administrador_id'] ?> "><img src="../../Assets/img/eliminar.png" class="eliminarTarea" title="Eliminar administrador"></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
        <section>
            <h1>Operarios</h1>
            <table cellpadding="0" cellspacing="0" border="0">
                <thead class="tbl-header">
                    <tr>
                        <th>Operario ID</th>
                        <th>Nombre</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="tbl-content">
                    <?php
                    foreach ($datosOper as $datoOper) {
                        ?>
                        <tr>
                            <td><?= $datoOper['operario_id'] ?></td>
                            <td><?= $datoOper['nombre'] ?></td>
                            <td><a href="../controller/ctrlModificarUsuario.php?operid= <?= $datoOper['operario_id'] ?> "><img src="../../Assets/img/modificar.png" class="modificarTarea" title="Modificar operario"></a></td>
                            <td><a href="../controller/ctrlEliminarUsuario.php?operid= <?= $datoOper['operario_id'] ?> "><img src="../../Assets/img/eliminar.png" class="eliminarTarea" title="Eliminar operario"></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </div>
    <div id="cuerpo"><?php include TEMPLATE_PATH . "footer.php" ?></div>