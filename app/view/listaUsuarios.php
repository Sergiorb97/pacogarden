<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Principal</title>
</head>

<body>
    <header><?php include TEMPLATE_PATH . "header.php" ?></header>
    <div id="menu"><?php include TEMPLATE_PATH . "menu.php" ?></div>
    <div id="cuerpo">
        <table>
            <caption>Administradores</caption>
            <tr>
                <th>Administrador ID</th>
                <th>Nombre</th>
            </tr>
            <?php
            foreach ($datosAdmin as $datoAdmin) {
                ?>
                <tr>
                    <td><?= $datoAdmin['administrador_id'] ?></td>
                    <td><?= $datoAdmin['nombre'] ?></td>
                    <td><a href="../controller/ctrlModificarUsuario.php?adminid= <?= $datoAdmin['administrador_id'] ?> ">Modificar</a></td>
                    <td><a href="../controller/ctrlEliminarUsuario.php?adminid= <?= $datoAdmin['administrador_id'] ?> ">Eliminar</a></td>
                </tr>
            <?php } ?>
        </table>
        <table>
            <caption>Operarios</caption>
            <tr>
                <th>Operario ID</th>
                <th>Nombre</th>
            </tr>
            <?php
            foreach ($datosOper as $datoOper) {
                ?>
                <tr>
                    <td><?= $datoOper['operario_id'] ?></td>
                    <td><?= $datoOper['nombre'] ?></td>
                    <td><a href="../controller/ctrlModificarUsuario.php?operid= <?= $datoOper['operario_id'] ?> ">Modificar</a></td>
                    <td><a href="../controller/ctrlEliminarUsuario.php?operid= <?= $datoOper['operario_id'] ?> ">Eliminar</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div id="cuerpo"><?php include TEMPLATE_PATH . "footer.php" ?></div>