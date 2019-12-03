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
        <p>Creando tarea:</p>
        <form method="POST" action="../controller/ctrlCrearTarea.php">
            <p><span style="color:red">*</span>Descripcion: <input type="text" name="descripcion" value="<?= ValorPost("descripcion") ?>"> <?= VerError("descripcion") ?></p>
            <p><span style="color:red">*</span>Nombre de contacto: <input type="text" name="nombrecontacto" value="<?= ValorPost("nombrecontacto") ?>"> <?= VerError("nombrecontacto") ?></p>
            <p><span style="color:red">*</span>Teléfono: <input type="text" name="telefono" value="<?= ValorPost("telefono") ?>"> <?= VerError("telefono") ?></p>
            <p><span style="color:red">*</span>Correo electrónico: <input type="text" name="correo" value="<?= ValorPost("correo") ?>"> <?= VerError("correo") ?></p>
            <p>Dirección: <input type="text" name="direccion" value="<?= ValorPost("direccion") ?>"></p>
            <p><span style="color:red">*</span>Provincia:
                <select name="provincia">
                    <?php mostrarProvincias(); ?>
                </select>
            </p>
            <p>Población: <input type="text" name="poblacion" value="<?= ValorPost("poblacion") ?>"></p>
            <p><span style="color:red">*</span>Código postal: <input type="text" name="codigopostal" value="<?= ValorPost("codigopostal") ?>"> <?= VerError("codigopostal") ?></p>
            <p><span style="color:red">*</span>Estado de la tarea:
                <select name="estado">
                    <option <?= guardarSelect("estado", "Realizada") ?>>Realizada</option>
                    <option <?= guardarSelect("estado", "Pendiente") ?>>Pendiente</option>
                    <option <?= guardarSelect("estado", "Cancelada") ?>>Cancelada</option>
                </select>
            </p>
            <p><span style="color:red">*</span>Fecha de realización de la tarea: <input type="text" name="Frealizacion" value="<?= ValorPost("Frealizacion") ?>"> <?= VerError("Frealizacion") ?></p>
            <p>Anotación anterior a la realización de la tarea: <input type="text" name="Aanterior" value="<?= ValorPost("Aanterior") ?>"></p>
            <p>Anotación posterior a la realización de la tarea: <input type="text" name="Aposterior" value="<?= ValorPost("Aposterior") ?>"></p>
            <p><span style="color:red">*</span>Operario asignado: <input type="text" name="operarioAsig" value="<?= ValorPost("operarioAsig") ?>"> <?= VerError("operarioAsig") ?></p>

            <input type="submit" value="Aceptar">
        </form>
    </div>
    <div id="cuerpo"><?php include TEMPLATE_PATH . "footer.php" ?></div>