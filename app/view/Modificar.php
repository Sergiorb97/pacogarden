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
        <form method="POST" action="../controller/ctrlModificar.php">
            <p><input type="hidden" name="tareaid" value= <?= $_REQUEST['tareaid'] ?>></p>
            <p>Modificando tarea Nº: <?= $_REQUEST['tareaid'] ?></p>
            <p><span style="color:red">*</span>Descripcion: <input type="text" name="descripcion" value="<?= tomarValor("descripcion") ?>">  <?=VerErrorModificar("descripcion")?></p>
            <p><span style="color:red">*</span>Nombre de contacto: <input type="text" name="nombrecontacto" value = "<?= tomarValor("nombrecontacto") ?>">  <?=VerErrorModificar("nombrecontacto")?></p>
            <p><span style="color:red">*</span>Teléfono: <input type="text" name="telefono" value = "<?= tomarValor("telefono") ?>">  <?=VerErrorModificar("telefono")?></p>
            <p><span style="color:red">*</span>Correo electrónico: <input type="text" name="correo_electronico" value = "<?= tomarValor("correo_electronico") ?>">  <?=VerErrorModificar("correo_electronico")?></p>
            <p>Dirección: <input type="text" name="direccion" value = "<?= tomarValor("direccion") ?>"></p>
            <p><span style="color:red">*</span>Provincia:
                <select name="provincia">
                    <?php mostrarProvinciasModificar(); ?>
                </select>
            </p>
            <p>Población: <input type="text" name="poblacion" value = "<?= tomarValor("poblacion") ?>"></p>
            <p><span style="color:red">*</span>Código postal: <input type="text" name="codigo_postal" value = "<?= tomarValor("codigo_postal") ?>">  <?=VerErrorModificar("codigo_postal")?></p>
            <p><span style="color:red">*</span>Estado de la tarea:
                <select name="estado">
                    <option <?= guardarSelectModificar("estado","Realizada") ?>>Realizada</option>
                    <option <?= guardarSelectModificar("estado","Pendiente") ?>>Pendiente</option>
                    <option <?= guardarSelectModificar("estado","Cancelada") ?>>Cancelada</option>
                </select>
            </p>
            <p><span style="color:red">*</span>Fecha de realización de la tarea: <input type="text" name="fecha_realizacion" value = <?= tomarValor("fecha_realizacion") ?>>  <?=VerErrorModificar("fecha_realizacion")?></p>
            <p>Anotación anterior a la realización de la tarea: <input type="text" name="anotacion_anterior" value="<?= tomarValor("anotacion_anterior") ?>"></p>
            <p>Anotación posterior a la realización de la tarea: <input type="text" name="anotacion_posterior" value="<?= tomarValor("anotacion_posterior") ?>"></p>
            <p><span style="color:red">*</span>Operario asignado: <input type="text" name="operario_id" value = <?= tomarValor("operario_id") ?>>  <?=VerErrorModificar("operario_id")?></p>

            <input type="submit" value="Aceptar">
        </form>
    </div>
    <div id="cuerpo"><?php include TEMPLATE_PATH . "footer.php" ?></div>